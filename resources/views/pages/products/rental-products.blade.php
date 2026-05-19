<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.seo-meta', [
        'title' => 'Rental Products | The Locads',
        'description' => 'Browse rental-ready digital signage displays, media players, and products from The Locads.',
        'keywords' => 'rental products, digital signage rental, display rental, The Locads rentals'
    ])
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white overflow-x-hidden">
    <div class="w-full max-w-[1387px] mx-auto">
        @include('partials.signage-header', ['currentPage' => 20])

        <section class="relative z-0 w-full max-w-[1387px] mx-auto mt-[80px] px-[53.5px] py-[80px] bg-gradient-to-b from-[#F9FAFB] to-[#EFF6FF] before:absolute before:inset-y-0 before:-left-[100vmax] before:-right-[100vmax] before:-z-10 before:content-[''] before:bg-gradient-to-b before:from-[#F9FAFB] before:to-[#EFF6FF] max-md:mt-[40px] max-md:px-[16px] max-md:py-[48px]">
            <div class="w-[1280px] max-w-full mx-auto text-center">
                <h1 class="text-[60px] leading-[72px] font-medium tracking-[-1.5px] text-[#111827] max-md:text-[38px] max-md:leading-[46px]">
                    Rental <span class="text-[#4F46E5] tracking-[-1.8px]">Products</span>
                </h1>
                <p class="w-[768px] max-w-full mx-auto mt-[24px] text-[20px] leading-[28px] text-[#364153] max-md:text-[18px] max-md:leading-[26px]">
                    Rent-ready signage hardware and media devices for events, campaigns, and temporary deployments.
                </p>
            </div>
        </section>

        @include('partials.product-filter', ['currentPage' => 20])

        @include('partials.public-product-grid', [
            'products' => $rentalProducts ?? collect(),
        ])

        @include('partials.site-footer')
    </div>
</body>

</html>
