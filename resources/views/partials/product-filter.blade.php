@php
    $currentPage = $currentPage ?? 9;
    $productTabs = [
        ['page' => 9, 'route' => 'products.index-c', 'label' => 'All'],
        ['page' => 10, 'route' => 'products.index-d', 'label' => 'Indoor Displays'],
        ['page' => 11, 'route' => 'products.index-e', 'label' => 'Outdoor/Window Displays'],
        ['page' => 12, 'route' => 'products.index-f', 'label' => 'Media Players'],
        ['page' => 13, 'route' => 'products.index-g', 'label' => 'Software & Licenses'],
    ];
@endphp

<section class="w-full border-b border-[#E5E7EB] bg-white px-4 sm:px-6 lg:px-[53.5px] pt-6 lg:pt-[32px] flex justify-start lg:justify-center overflow-x-auto overflow-y-hidden">
    <div class="flex w-max min-w-max items-center flex-nowrap gap-[12px] pb-[10px] lg:mb-[33px]">
        @foreach ($productTabs as $tab)
            <a
                href="{{ route($tab['route']) }}"
                class="flex h-[40px] items-center justify-center rounded-full px-[24px] text-[16px] font-medium transition shadow-[0_2px_4px_rgba(0,0,0,0.1),0_4px_6px_rgba(0,0,0,0.1)] {{ $currentPage === $tab['page'] ? 'bg-[#1447E6] text-white' : 'bg-[#F3F4F6] text-[#364153] hover:bg-[#E5E7EB]' }}">
                {{ $tab['label'] }}
            </a>
        @endforeach
    </div>
</section>
