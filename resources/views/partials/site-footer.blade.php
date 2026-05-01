@php
    $marginTop = $marginTop ?? 'mt-[92px]';
@endphp

<div
    class="w-screen relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw] min-h-[410px] {{ $marginTop }} bg-[#F9FAFB] border-t border-[#E5E7EB] flex justify-center">

    <div class="w-full max-w-[1280px] px-4 sm:px-6 lg:px-[48px] py-10 sm:py-14 lg:py-[81px] flex flex-col">
        <div
            class="w-full lg:w-[1184px] min-h-[176px] flex flex-col sm:flex-row sm:flex-wrap xl:flex-nowrap justify-between gap-8 lg:gap-10">

            <div class="w-full max-w-[260px] min-h-[176px] flex flex-col gap-[24px]">
                <div class="w-[144.5px] h-[40.33px] flex items-center">
                    <img src="{{ asset('icons/logosmall.svg') }}" alt="Logo" class="max-w-full h-auto">
                </div>

                <p class="w-full max-w-[260px] text-[14px] leading-[22.75px] text-[#4A5565]">
                    Transforming spaces with smart, cloud-powered digital signage
                    solutions for every industry.
                </p>
            </div>

            <div class="w-full max-w-[260px] min-h-[176px] flex flex-col gap-[16px]">
                <a href="{{ route('products.index-d') }}" class="text-[14px] leading-[20px] text-[#4A5565] transition hover:text-[#E7000B]">Retail Displays</a>
                <a href="{{ route('industries') }}" class="text-[14px] leading-[20px] text-[#4A5565] transition hover:text-[#E7000B]">Hospitality Signage</a>
                <a href="{{ route('industries') }}" class="text-[14px] leading-[20px] text-[#4A5565] transition hover:text-[#E7000B]">Corporate Communications</a>
                <a href="{{ route('industries') }}" class="text-[14px] leading-[20px] text-[#4A5565] transition hover:text-[#E7000B]">Healthcare Boards</a>
            </div>

            <div class="w-full max-w-[260px] min-h-[176px] flex flex-col gap-[16px]">
                <a href="{{ route('about') }}" class="text-[14px] leading-[20px] text-[#4A5565] transition hover:text-[#E7000B]">About Us</a>
                <a href="{{ route('services') }}" class="text-[14px] leading-[20px] text-[#4A5565] transition hover:text-[#E7000B]">Our Services</a>
                <a href="{{ route('signage') }}" class="text-[14px] leading-[20px] text-[#4A5565] transition hover:text-[#E7000B]">Franchise Program</a>
                <a href="{{ route('contact.alt') }}" class="text-[14px] leading-[20px] text-[#4A5565] transition hover:text-[#E7000B]">Contact</a>
            </div>

            <div class="w-full max-w-[260px] min-h-[176px] flex flex-col gap-[16px]">
                <p class="text-[14px] leading-[20px] text-[#4A5565]">
                    hello@pixelwave.demo
                </p>

                <p class="text-[14px] leading-[20px] text-[#4A5565]">
                    +1 (555) 123-4567
                </p>

                <p class="text-[14px] leading-[20px] text-[#4A5565] w-full max-w-[260px]">
                    100 Tech Hub Boulevard, Suite 500<br>
                    San Francisco, CA 94105
                </p>
            </div>
        </div>

        <div
            class="w-full lg:w-[1184px] min-h-[49px] border-t border-[#E5E7EB] flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 pt-[24px] sm:pt-[32px] mt-[24px]">
            <p class="text-[12px] leading-[16px] text-[#6A7282]">
                &copy; 2026 TheLocads Solutions. All rights reserved.
            </p>

            <div class="flex flex-wrap gap-[24px] text-[12px] text-[#6A7282]">
                <a href="{{ route('faq') }}" class="transition hover:text-[#E7000B]">Privacy Policy</a>
                <a href="{{ route('services') }}" class="transition hover:text-[#E7000B]">Terms of Service</a>
            </div>
        </div>
    </div>
</div>

<button
    class="fixed right-4 bottom-4 z-50 w-[56px] h-[56px] rounded-full bg-[#E7000B] flex items-center justify-center shadow-[0_0_20px_rgba(37,99,235,0.6)]"
    aria-label="Chat support">
    <img src="{{ asset('icons/logoicon.svg') }}" alt="Chat support" class="w-[24px] h-[24px]">
</button>
