@php
    $licenseSlug = (string) request()->route('productSlug', '');
    $isLicenceActive = request()->routeIs('products.index-g', 'products.show', 'products.show-b')
        || (request()->routeIs('products.detail') && str_contains(strtolower($licenseSlug), 'licen'));

    $mobileNavItems = [
        ['label' => 'Dashboard', 'url' => route('dashboard'), 'active' => request()->routeIs('dashboard')],
        ['label' => 'Enquiry', 'url' => route('enquiries.index'), 'active' => request()->routeIs('enquiries.index') && request('type') !== 'ticket'],
        ['label' => 'Ticket', 'url' => route('enquiries.index', ['type' => 'ticket']), 'active' => request()->routeIs('enquiries.index') && request('type') === 'ticket'],
        ['label' => 'Licence', 'url' => route('products.index-g'), 'active' => $isLicenceActive],
        ['label' => 'Products', 'url' => route('products.create'), 'active' => request()->routeIs('products.create')],
        ['label' => 'Rentals', 'url' => route('products.rentals'), 'active' => request()->routeIs('products.rentals')],
    ];
@endphp

<style>
    .admin-mobile-nav-scroll {
        scrollbar-width: none;
        -ms-overflow-style: none;
    }

    .admin-mobile-nav-scroll::-webkit-scrollbar {
        display: none;
    }
</style>

<nav class="border-b border-slate-200 bg-white px-4 py-2 md:hidden">
    <div class="admin-mobile-nav-scroll flex gap-2 overflow-x-auto pb-1">
        @foreach ($mobileNavItems as $item)
            <a
                href="{{ $item['url'] }}"
                class="shrink-0 rounded-full border px-3.5 py-2 text-[12.5px] font-semibold transition {{ $item['active'] ? 'border-brand bg-brand text-white' : 'border-slate-200 bg-white text-[#4A5565] hover:bg-slate-50 hover:text-[#101828]' }}">
                {{ $item['label'] }}
            </a>
        @endforeach
    </div>
</nav>
