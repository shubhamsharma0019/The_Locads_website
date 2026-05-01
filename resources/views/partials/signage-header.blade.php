@php
    $currentPage = $currentPage ?? null;
    $primaryLinks = [
        ['route' => 'home', 'label' => 'Home', 'activePages' => [1]],
        ['route' => 'about', 'label' => 'About', 'activePages' => [2]],
        ['route' => 'services', 'label' => 'Services', 'activePages' => [3]],
        ['type' => 'products'],
        ['route' => 'industries', 'label' => 'Industries', 'activePages' => [5, 6]],
        ['route' => 'signage', 'label' => 'Franchise', 'activePages' => [7]],
        ['route' => 'blog.index', 'label' => 'Blog', 'activePages' => [16, 17]],
        ['route' => 'faq', 'label' => 'FAQ', 'activePages' => [18]],
        ['route' => 'contact.alt', 'label' => 'Contact', 'activePages' => [8, 19]],
    ];
    $productDropdownLinks = [
        ['page' => 9, 'route' => 'products.index-c', 'label' => 'All'],
        ['page' => 10, 'route' => 'products.index-d', 'label' => 'Indoor Displays'],
        ['page' => 11, 'route' => 'products.index-e', 'label' => 'Outdoor/Window Displays'],
        ['page' => 12, 'route' => 'products.index-f', 'label' => 'Media Players'],
        ['page' => 13, 'route' => 'products.index-g', 'label' => 'Software & Licenses'],
    ];
    $productActivePages = [4, 9, 10, 11, 12, 13, 14, 15];
@endphp

<div
    class="w-full min-h-[81px] border-b border-black/10 flex items-center justify-center px-4 sm:px-6 lg:px-[53.5px] pt-3 sm:pt-0 pb-[1px]">
    <div
        class="w-full max-w-[1280px] min-h-[40px] flex flex-wrap lg:flex-nowrap items-center justify-between gap-y-3 gap-x-4 lg:gap-6 px-0 lg:px-[48px]">
        <a href="{{ route('home') }}" class="w-[120px] sm:w-[144.5px] h-[40.33px] flex items-center shrink-0">
            <img src="{{ asset('icons/locadsicon.svg') }}" alt="Logo" class="max-w-full h-auto">
        </a>

        <div
            class="order-3 w-full lg:order-none lg:w-[574.62px] min-h-[20px] flex items-center justify-center gap-4 lg:gap-[32px] text-[14px] text-gray-600 pt-1 sm:pt-0">
            <nav
                class="w-full lg:w-[574.62px] min-h-[20px] flex flex-wrap lg:flex-nowrap items-center justify-center gap-x-6 gap-y-2 lg:gap-[32px]">
                @foreach ($primaryLinks as $link)
                    @if (($link['type'] ?? null) === 'products')
                        <div class="relative group h-[20px] flex items-center justify-center">
                            <a
                                href="{{ route('products.index') }}"
                                class="flex items-center text-[14px] font-medium leading-[20px] tracking-[0px] {{ in_array($currentPage, $productActivePages, true) ? 'text-blue-600' : 'text-[#364153]' }}">
                                Products
                            </a>

                            <div class="invisible absolute left-1/2 top-full z-50 mt-3 w-48 -translate-x-1/2 rounded-2xl border border-[#E5E7EB] bg-white p-2 opacity-0 shadow-[0_20px_45px_rgba(15,23,42,0.12)] transition-all duration-200 group-hover:visible group-hover:opacity-100">
                                @foreach ($productDropdownLinks as $productLink)
                                    <a
                                        href="{{ route($productLink['route']) }}"
                                        class="block rounded-xl px-4 py-2 text-[14px] font-medium text-[#364153] transition hover:bg-[#EFF6FF] hover:text-blue-600 {{ $currentPage === $productLink['page'] ? 'bg-[#EFF6FF] text-blue-600' : '' }}">
                                        {{ $productLink['label'] }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @else
                        <a
                            href="{{ route($link['route']) }}"
                            class="h-[20px] flex items-center justify-center text-[14px] font-medium leading-[20px] tracking-[0px] {{ in_array($currentPage, $link['activePages'], true) ? 'text-blue-600' : 'text-[#364153]' }}">
                            {{ $link['label'] }}
                        </a>
                    @endif
                @endforeach
            </nav>
        </div>

        <div class="w-[124.89px] h-[40px] flex items-center justify-center shrink-0 ml-auto lg:ml-0">
            <a
                href="{{ route('contact.alt') }}"
                class="w-full h-full bg-[#E7000B] text-white text-[14px] rounded-full flex items-center justify-center">
                Book Demo
            </a>
        </div>
    </div>
</div>
