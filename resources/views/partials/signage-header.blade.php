@php
    $currentPage = $currentPage ?? null;
    $primaryLinks = [
        ['route' => 'home', 'label' => 'Home', 'activePages' => [1]],
        ['route' => 'about', 'label' => 'About', 'activePages' => [2]],
        ['route' => 'services', 'label' => 'Services', 'activePages' => [3]],
        ['type' => 'products'],
        ['route' => 'industries', 'label' => 'Industries', 'activePages' => [6]],
        ['route' => 'signage', 'label' => 'Franchise', 'activePages' => [7]],
        ['route' => 'products.rental-products', 'label' => 'Rental Product', 'activePages' => [20]],
        ['route' => 'contact.alt', 'label' => 'Contact', 'activePages' => [8, 19]],
    ];
    $productDropdownLinks = [
        ['page' => 9, 'route' => 'products.index-c', 'label' => 'All'],
        ['page' => 10, 'route' => 'products.index-d', 'label' => 'Indoor Displays'],
        ['page' => 11, 'route' => 'products.index-e', 'label' => 'Outdoor/Window Displays'],
        ['page' => 12, 'route' => 'products.index-f', 'label' => 'Media Players'],
        ['page' => 13, 'route' => 'products.index-g', 'label' => 'Software & Licenses'],
    ];
    $productActivePages = [4, 5, 9, 10, 11, 12, 13, 14, 15];
@endphp

<div
    class="locads-site-header relative z-40 w-full bg-white px-2 py-3 sm:px-6 lg:px-[53.5px] lg:py-0">
    <div
        class="mx-auto flex w-full max-w-[1400px] items-center justify-between gap-x-4 px-0 lg:grid lg:min-h-[96px] lg:grid-cols-[220px_minmax(0,1fr)_156px] lg:gap-x-8 lg:px-[32px]">
        <a href="{{ route('home') }}" class="flex h-[58px] w-[152px] shrink-0 items-center sm:h-[66px] sm:w-[173px] lg:justify-self-start">
            <img src="{{ asset('icons/locadsicon.jpeg') }}" alt="Logo" class="h-full w-full object-contain">
        </a>

        <div
            class="hidden items-center justify-center text-[14px] text-gray-600 lg:flex lg:justify-self-center">
            <nav
                class="flex items-center justify-center gap-6 whitespace-nowrap xl:gap-[32px]">
                @foreach ($primaryLinks as $link)
                    @if (($link['type'] ?? null) === 'products')
                        <div class="relative group h-[20px] flex items-center justify-center">
                            <a
                                href="{{ route('products.index') }}"
                                class="flex items-center text-[14px] font-medium leading-[20px] tracking-[0px] {{ in_array($currentPage, $productActivePages, true) ? 'text-blue-600' : 'text-[#364153]' }}">
                                Products
                            </a>

                            <div class="invisible absolute left-1/2 top-full z-50 mt-2 w-56 -translate-x-1/2 rounded-2xl border border-[#E5E7EB] bg-white p-2 opacity-0 shadow-[0_20px_45px_rgba(15,23,42,0.12)] transition-all duration-200 group-hover:visible group-hover:opacity-100">
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

        <div class="ml-auto hidden h-[40px] w-[124.89px] shrink-0 items-center justify-center lg:ml-0 lg:flex lg:justify-self-end">
            <a
                href="{{ route('contact.alt') }}"
                class="w-full h-full bg-[#E7000B] text-white text-[14px] rounded-full flex items-center justify-center">
                Book Demo
            </a>
        </div>

        <button
            type="button"
            class="inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-lg border border-[#E5E7EB] text-[#101828] transition hover:bg-slate-50 lg:hidden"
            aria-label="Open navigation"
            aria-expanded="false"
            aria-controls="site-mobile-menu"
            data-site-menu-button>
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M4 7h16M4 12h16M4 17h16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </button>
    </div>

    <div id="site-mobile-menu" class="hidden lg:hidden">
        <nav class="mx-auto mt-3 flex w-full max-w-[1280px] flex-col rounded-xl border border-[#E5E7EB] bg-white p-2 shadow-[0_18px_40px_rgba(15,23,42,0.10)]">
            @foreach ($primaryLinks as $link)
                @if (($link['type'] ?? null) === 'products')
                    <div>
                        <button
                            type="button"
                            class="flex w-full items-center justify-between rounded-lg px-3 py-2.5 text-left text-[15px] font-medium {{ in_array($currentPage, $productActivePages, true) ? 'text-blue-600' : 'text-[#364153]' }} transition hover:bg-[#EFF6FF] hover:text-blue-600"
                            aria-expanded="{{ in_array($currentPage, $productActivePages, true) ? 'true' : 'false' }}"
                            data-site-products-button>
                            <span>Products</span>
                            <svg class="h-4 w-4 transition" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.51a.75.75 0 01-1.08 0l-4.25-4.51a.75.75 0 01.02-1.06z" clip-rule="evenodd"/></svg>
                        </button>
                        <div class="{{ in_array($currentPage, $productActivePages, true) ? '' : 'hidden' }} mt-1 space-y-1 px-2 pb-1" data-site-products-panel>
                            <a href="{{ route('products.index') }}" class="block rounded-lg px-3 py-2 text-[14px] font-medium text-[#4A5565] transition hover:bg-[#EFF6FF] hover:text-blue-600">Products Overview</a>
                            @foreach ($productDropdownLinks as $productLink)
                                <a
                                    href="{{ route($productLink['route']) }}"
                                    class="block rounded-lg px-3 py-2 text-[14px] font-medium text-[#4A5565] transition hover:bg-[#EFF6FF] hover:text-blue-600 {{ $currentPage === $productLink['page'] ? 'bg-[#EFF6FF] text-blue-600' : '' }}">
                                    {{ $productLink['label'] }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                @else
                    <a
                        href="{{ route($link['route']) }}"
                        class="rounded-lg px-3 py-2.5 text-[15px] font-medium {{ in_array($currentPage, $link['activePages'], true) ? 'text-blue-600' : 'text-[#364153]' }} transition hover:bg-[#EFF6FF] hover:text-blue-600">
                        {{ $link['label'] }}
                    </a>
                @endif
            @endforeach
            <a href="{{ route('contact.alt') }}" class="mt-2 flex h-10 items-center justify-center rounded-full bg-[#E7000B] px-4 text-[14px] font-medium text-white">
                Book Demo
            </a>
        </nav>
    </div>
</div>

<script>
    (() => {
        const buttons = document.querySelectorAll('[data-site-menu-button]');
        buttons.forEach((button) => {
            const menuId = button.getAttribute('aria-controls');
            const menu = menuId ? document.getElementById(menuId) : null;
            if (!menu) return;

            button.addEventListener('click', () => {
                const isOpen = !menu.classList.contains('hidden');
                menu.classList.toggle('hidden', isOpen);
                button.setAttribute('aria-expanded', String(!isOpen));
            });
        });

        document.querySelectorAll('[data-site-products-button]').forEach((button) => {
            const panel = button.parentElement?.querySelector('[data-site-products-panel]');
            if (!panel) return;

            button.addEventListener('click', () => {
                const isOpen = !panel.classList.contains('hidden');
                panel.classList.toggle('hidden', isOpen);
                button.setAttribute('aria-expanded', String(!isOpen));
            });
        });
    })();
</script>
