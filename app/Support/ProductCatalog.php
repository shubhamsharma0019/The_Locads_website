<?php

namespace App\Support;

use App\Models\Product;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProductCatalog
{
    public function all(): Collection
    {
        return Product::query()
            ->orderByDesc('created_at')
            ->get()
            ->map(fn (Product $product) => $this->serializeProduct($product));
    }

    public function normalProducts(): Collection
    {
        return $this->all()->where('type', 'product')->values();
    }

    public function normalProductsForPublicPages(): Collection
    {
        return $this->normalProducts()
            ->reject(fn (array $product) => in_array($product['slug'], $this->seededSlugs(), true))
            ->values();
    }

    public function rentProducts(): Collection
    {
        return $this->all()->where('type', 'rent')->values();
    }

    public function byCategory(string $category): Collection
    {
        return $this->byCategories([$category]);
    }

    public function byCategories(array $categories): Collection
    {
        $normalizedCategories = collect($categories)
            ->map(fn (mixed $category) => Str::lower(trim((string) $category)))
            ->filter()
            ->values();

        return $this->all()
            ->filter(function (array $product) use ($normalizedCategories) {
                $productCategory = Str::lower(trim((string) ($product['category'] ?? '')));

                return $productCategory !== '' && $normalizedCategories->contains($productCategory);
            })
            ->values();
    }

    public function rentProductsForPublicPages(): Collection
    {
        return $this->rentProducts()
            ->reject(fn (array $product) => in_array($product['slug'], $this->seededSlugs(), true))
            ->values();
    }

    public function allForPublicPages(): Collection
    {
        return $this->all()
            ->reject(fn (array $product) => in_array($product['slug'], $this->seededSlugs(), true))
            ->values();
    }

    public function byCategoriesForPublicPages(array $categories): Collection
    {
        $normalizedCategories = collect($categories)
            ->map(fn (mixed $category) => Str::lower(trim((string) $category)))
            ->filter()
            ->values();

        return $this->allForPublicPages()
            ->filter(function (array $product) use ($normalizedCategories) {
                $productCategory = Str::lower(trim((string) ($product['category'] ?? '')));

                return $productCategory !== '' && $normalizedCategories->contains($productCategory);
            })
            ->values();
    }

    public function find(string $id): ?array
    {
        return $this->all()->firstWhere('id', $id);
    }

    public function findBySlug(string $slug): ?array
    {
        return $this->all()->firstWhere('slug', $slug);
    }

    public function create(array $attributes, ?UploadedFile $image = null): array
    {
        $product = $this->mapAttributes($attributes);
        $product['slug'] = $this->makeUniqueSlug(
            $product['name'],
            Product::query()->pluck('slug')->all()
        );
        $product['image_path'] = $image ? $this->storeImage($image) : null;

        return $this->serializeProduct(Product::query()->create($product));
    }

    public function update(string $id, array $attributes, ?UploadedFile $image = null): ?array
    {
        $product = Product::query()->find($id);

        if (!$product) {
            return null;
        }

        $updatedProduct = $this->mapAttributes($attributes);
        $updatedProduct['slug'] = $this->makeUniqueSlug(
            $updatedProduct['name'],
            Product::query()->whereKeyNot($product->getKey())->pluck('slug')->all()
        );

        if ($image) {
            $this->deleteImage($product->image_path);
            $updatedProduct['image_path'] = $this->storeImage($image);
        }

        $product->fill($updatedProduct)->save();

        return $this->serializeProduct($product->fresh());
    }

    public function delete(string $id): bool
    {
        $product = Product::query()->find($id);

        if (!$product) {
            return false;
        }

        $this->deleteImage($product->image_path);
        $product->delete();

        return true;
    }

    public function stats(): array
    {
        $products = $this->all();

        return [
            'total' => $products->count(),
            'active' => $products->where('status', 'active')->count(),
            'inactive' => $products->where('status', 'inactive')->count(),
            'categories' => $products->pluck('category')->filter()->unique()->count(),
            'product' => $products->where('type', 'product')->count(),
            'rent' => $products->where('type', 'rent')->count(),
        ];
    }

    public function categories(): array
    {
        $savedCategories = $this->all()->pluck('category')->filter()->unique()->values()->all();

        return array_values(array_unique(array_merge([
            'Indoor Display',
            'Outdoor Display',
            'Media Player',
            'Software',
            'Kiosk',
            'Video Wall',
        ], $savedCategories)));
    }

    private function mapAttributes(array $attributes): array
    {
        return [
            'type' => $attributes['type'],
            'name' => trim((string) $attributes['name']),
            'sku' => trim((string) ($attributes['sku'] ?? '')),
            'category' => trim((string) $attributes['category']),
            'status' => trim((string) ($attributes['status'] ?? 'active')),
            'price' => $this->numericOrNull($attributes['price'] ?? null),
            'rent_price' => $this->numericOrNull($attributes['rent_price'] ?? null),
            'billing_period' => trim((string) ($attributes['billing_period'] ?? 'month')),
            'best_for' => trim((string) ($attributes['best_for'] ?? '')),
            'short_description' => trim((string) ($attributes['short_description'] ?? '')),
            'description' => trim((string) ($attributes['description'] ?? '')),
            'features' => $this->stringToList($attributes['features'] ?? ''),
            'specifications' => $this->stringToList($attributes['specifications'] ?? ''),
        ];
    }

    private function numericOrNull(mixed $value): ?float
    {
        if ($value === null || $value === '') {
            return null;
        }

        return (float) $value;
    }

    private function stringToList(string $value): array
    {
        return collect(preg_split('/\r\n|\r|\n/', $value) ?: [])
            ->map(fn (string $item) => trim($item))
            ->filter()
            ->values()
            ->all();
    }

    private function makeUniqueSlug(string $name, array $existingSlugs): string
    {
        $baseSlug = Str::slug($name) ?: Str::random(8);
        $slug = $baseSlug;
        $counter = 2;

        while (in_array($slug, $existingSlugs, true)) {
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }

        return $slug;
    }

    private function storeImage(UploadedFile $image): string
    {
        $directory = public_path('uploads/products');
        File::ensureDirectoryExists($directory);

        $filename = now()->format('YmdHis') . '-' . Str::random(8) . '.' . $image->getClientOriginalExtension();
        $image->move($directory, $filename);

        return 'uploads/products/' . $filename;
    }

    private function deleteImage(?string $imagePath): void
    {
        if (!$imagePath || !Str::startsWith($imagePath, 'uploads/products/')) {
            return;
        }

        $fullPath = public_path($imagePath);

        if (File::exists($fullPath)) {
            File::delete($fullPath);
        }
    }

    private function serializeProduct(Product $product): array
    {
        return [
            'id' => (string) $product->getKey(),
            'type' => $product->type,
            'name' => $product->name,
            'slug' => $product->slug,
            'sku' => $product->sku,
            'category' => $product->category,
            'status' => $product->status,
            'price' => $product->price,
            'rent_price' => $product->rent_price,
            'billing_period' => $product->billing_period,
            'best_for' => $product->best_for,
            'short_description' => $product->short_description,
            'description' => $product->description,
            'features' => $product->features ?? [],
            'specifications' => $product->specifications ?? [],
            'image_path' => $product->image_path,
            'created_at' => optional($product->created_at)?->toIso8601String(),
            'updated_at' => optional($product->updated_at)?->toIso8601String(),
        ];
    }

    private function seededSlugs(): array
    {
        return [
            'pro-series-4k-displays',
            'high-bright-window-displays',
            'edge-media-players',
            'pro-series-4k-display-43-rent',
            'high-bright-window-display-55-rent',
            'edge-media-player-i5-rent',
            'cloud-cms-license-annual-rent',
        ];
    }
}
