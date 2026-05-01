<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @include('partials.seo-meta', [
      'title' => 'Software Platform | The Locads',
      'description' => 'Discover The Locads software platform including cloud CMS, device management, and digital signage software tools.',
      'keywords' => 'digital signage software, cloud CMS, device manager, The Locads platform'
  ])
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Inter Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-white flex justify-center font-[Inter] overflow-x-hidden">

  <!-- ================= MAIN WRAPPER ================= -->
  <div class="w-full max-w-[1387px] bg-white">

    <!-- 🔷 HEADER -->
        @include('partials.signage-header', ['currentPage' => 5])

    <!-- ================= HERO ================= -->
    <!-- FULL WIDTH HERO -->
<section class="w-screen min-h-[593.45px] relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw]">

  <!-- BACKGROUND -->
  <img src="{{ asset('icons/backgroundimage.jpg') }}" class="w-full h-full object-cover absolute inset-0" />

  <!-- OVERLAY -->
  <div class="absolute inset-0 bg-black/50"></div>

  <!-- CENTER CONTENT -->
  <div class="absolute inset-0 flex justify-center">

    <div class="w-full max-w-[1280px] min-h-[440px] mt-12 sm:mt-16 lg:mt-[76.72px] pt-16 sm:pt-20 lg:pt-[80px] px-4 sm:px-6 lg:px-[48px] flex flex-col items-center">

      <!-- HEADING -->
      <h1 class="text-[36px] leading-[44px] sm:text-[48px] sm:leading-[56px] lg:text-[60px] lg:leading-[72px] tracking-[-1.5px] font-bold text-white text-center">
        Our <span class="text-red-500">Products</span>
      </h1>

      <!-- PARA -->
      <p class="w-full max-w-[768px] mt-[24px] text-[18px] leading-[30px] sm:text-[22px] sm:leading-[34px] lg:text-[24px] lg:leading-[39px] text-white text-center">
        A perfectly synchronized ecosystem of robust hardware and intuitive software.
      </p>

      <!-- TOGGLE -->
      <div class="w-full max-w-[432.18px] min-h-[58px] mt-[36px] sm:mt-[48px] bg-white border border-[#E5E7EB] rounded-full flex flex-col sm:flex-row items-stretch sm:items-center p-[4px]">

        <a href="{{ route('products.index') }}" class="w-full sm:w-[204.91px] h-[48px] flex items-center justify-center">
          <span class="text-[#6B7280] text-[16px] font-semibold">
            Hardware Solutions
          </span>
        </a>

        <a href="{{ route('products.index-b') }}" class="w-full sm:w-[215.91px] h-[48px] bg-[#155DFC] rounded-full flex items-center justify-center shadow-[0_0_15px_0_rgba(37,99,235,0.5)]">
          <span class="text-white text-[16px] font-semibold">
            Software Platform
          </span>
        </a>

      </div>

    </div>

  </div>

</section>
    <!-- ================= CARDS ================= -->
    <section class="w-full max-w-[1024px] px-4 sm:px-6 lg:px-0 mx-auto mt-[48px] mb-[92px] flex flex-col lg:flex-row gap-[24px] lg:gap-[32px]">

      <!-- CARD 1 -->
      <div class="w-full max-w-[496px] min-h-[478px] mx-auto bg-white rounded-[24px] border border-[#2E74FF] p-6 sm:p-8 lg:p-[40px] flex flex-col">

        <!-- ICON -->
        <div
          class="w-[64px] h-[64px] bg-[#DBEAFE] border border-[#8EC5FF] rounded-[16px] flex items-center justify-center">
          <img src="{{ asset('icons/cmslogo.svg')  }}" class="w-[24px] h-[24px]" />
        </div>

        <!-- CONTENT -->
        <div class="mt-[24px] flex flex-col gap-[16px]">

          <h3 class="w-full max-w-[414px] text-[30px] leading-[36px] font-bold text-[#101828]">
            PixelWave Cloud CMS
          </h3>

          <!-- LIST -->
          <div class="flex flex-col gap-[16px]">

            <div class="flex items-center gap-[12px]">
              <span class="w-[6px] h-[6px] bg-[#2E74FF] rounded-full"></span>
              <p class="text-[18px] leading-[28px] text-[#364153]">Drag-and-drop designer</p>
            </div>

            <div class="flex items-center gap-[12px]">
              <span class="w-[6px] h-[6px] bg-[#2E74FF] rounded-full"></span>
              <p class="text-[18px] leading-[28px] text-[#364153]">Advanced scheduling</p>
            </div>

            <div class="flex items-center gap-[12px]">
              <span class="w-[6px] h-[6px] bg-[#2E74FF] rounded-full"></span>
              <p class="text-[18px] leading-[28px] text-[#364153]">Multi-user roles</p>
            </div>

            <div class="flex items-center gap-[12px]">
              <span class="w-[6px] h-[6px] bg-[#2E74FF] rounded-full"></span>
              <p class="text-[18px] leading-[28px] text-[#364153]">Real-time preview</p>
            </div>

          </div>

        </div>

        <!-- BUTTON -->
        <div class="mt-auto">
          <a href="{{ route('contact.alt') }}" class="w-[161.54px] h-[48px] bg-[#155DFC] rounded-[14px] flex items-center justify-center">
            <span class="text-white text-[16px] leading-[24px] font-bold">Request Demo</span>
          </a>
        </div>

      </div>


      <!-- CARD 2 -->
      <div class="w-full max-w-[496px] min-h-[478px] mx-auto bg-white rounded-[24px] border border-[#2E74FF] p-6 sm:p-8 lg:p-[40px] flex flex-col">

        <!-- ICON -->
        <div
          class="w-[64px] h-[64px] bg-[#DBEAFE] border border-[#8EC5FF] rounded-[16px] flex items-center justify-center">
          <img src="{{ asset('icons/managerlogo.svg')  }}" class="w-[24px] h-[24px]" />
        </div>

        <!-- CONTENT -->
        <div class="mt-[24px] flex flex-col gap-[16px]">

          <h3 class="w-full max-w-[414px] text-[30px] leading-[36px] font-bold text-[#101828]">
            Device Manager
          </h3>

          <!-- LIST -->
          <div class="flex flex-col gap-[16px]">

            <div class="flex items-center gap-[12px]">
              <span class="w-[6px] h-[6px] bg-[#2E74FF] rounded-full"></span>
              <p class="text-[18px] leading-[28px] text-[#364153]">Remote reboot</p>
            </div>

            <div class="flex items-center gap-[12px]">
              <span class="w-[6px] h-[6px] bg-[#2E74FF] rounded-full"></span>
              <p class="text-[18px] leading-[28px] text-[#364153]">Firmware updates</p>
            </div>

            <div class="flex items-center gap-[12px]">
              <span class="w-[6px] h-[6px] bg-[#2E74FF] rounded-full"></span>
              <p class="text-[18px] leading-[28px] text-[#364153]">Live screenshots</p>
            </div>

            <div class="flex items-center gap-[12px]">
              <span class="w-[6px] h-[6px] bg-[#2E74FF] rounded-full"></span>
              <p class="text-[18px] leading-[28px] text-[#364153]">Telemetry data</p>
            </div>

          </div>

        </div>

        <!-- BUTTON -->
        <div class="mt-auto">
          <a href="{{ route('contact.alt') }}" class="w-[161.54px] h-[48px] bg-[#155DFC] rounded-[14px] flex items-center justify-center">
            <span class="text-white text-[16px] leading-[24px] font-bold">Request Demo</span>
          </a>
        </div>

      </div>
    </section>

    <!-- 🔷 THIRD DIV (FOOTER) -->
    <div
      class="w-screen relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw] min-h-[410px] bg-[#F9FAFB] border-t border-[#E5E7EB] flex justify-center">

      <!-- 🔷 FOOTER INNER -->
      <div class="w-full max-w-[1280px] px-4 sm:px-6 lg:px-[48px] py-10 sm:py-14 lg:py-[81px] flex flex-col">

        <!-- 🔷 TOP GRID -->
        <div
          class="w-full lg:w-[1184px] min-h-[176px] flex flex-col sm:flex-row sm:flex-wrap xl:flex-nowrap justify-between gap-8 lg:gap-10">

          <!-- 🔷 COLUMN 1 -->
          <div class="w-full max-w-[260px] min-h-[176px] flex flex-col gap-[24px]">

            <!-- LOGO -->
            <div class="w-[144.5px] h-[40.33px] flex items-center">
              <img src="{{ asset('icons/logosmall.svg') }}" alt="Logo" class="max-w-full h-auto">
            </div>

            <!-- TEXT -->
            <p class="w-full max-w-[260px] text-[14px] leading-[22.75px] text-[#4A5565]">
              Transforming spaces with smart, cloud-powered digital signage
              solutions for every industry.
            </p>

          </div>

          <!-- 🔷 COLUMN 2 -->
          <div class="w-full max-w-[260px] min-h-[176px] flex flex-col gap-[16px]">

            <a href="{{ route('products.index-d') }}" class="text-[14px] leading-[20px] text-[#4A5565] transition hover:text-[#E7000B]">Retail Displays</a>
            <a href="{{ route('industries') }}" class="text-[14px] leading-[20px] text-[#4A5565] transition hover:text-[#E7000B]">Hospitality Signage</a>
            <a href="{{ route('industries') }}" class="text-[14px] leading-[20px] text-[#4A5565] transition hover:text-[#E7000B]">Corporate Communications</a>
            <a href="{{ route('industries') }}" class="text-[14px] leading-[20px] text-[#4A5565] transition hover:text-[#E7000B]">Healthcare Boards</a>

          </div>

          <!-- 🔷 COLUMN 3 -->
          <div class="w-full max-w-[260px] min-h-[176px] flex flex-col gap-[16px]">

            <a href="{{ route('about') }}" class="text-[14px] leading-[20px] text-[#4A5565] transition hover:text-[#E7000B]">About Us</a>
            <a href="{{ route('services') }}" class="text-[14px] leading-[20px] text-[#4A5565] transition hover:text-[#E7000B]">Our Services</a>
            <a href="{{ route('signage') }}" class="text-[14px] leading-[20px] text-[#4A5565] transition hover:text-[#E7000B]">Franchise Program</a>
            <a href="{{ route('contact.alt') }}" class="text-[14px] leading-[20px] text-[#4A5565] transition hover:text-[#E7000B]">Contact</a>

          </div>

          <!-- 🔷 COLUMN 4 -->
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

        <!-- 🔷 BOTTOM BAR -->
        <div
          class="w-full lg:w-[1184px] min-h-[49px] border-t border-[#E5E7EB] flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 pt-[24px] sm:pt-[32px] mt-[24px]">

          <!-- COPYRIGHT -->
          <p class="text-[12px] leading-[16px] text-[#6A7282]">
            © 2026 TheLocads Solutions. All rights reserved.
          </p>

          <!-- LINKS -->
          <div class="flex flex-wrap gap-[24px] text-[12px] text-[#6A7282]">
            <a href="{{ route('faq') }}" class="transition hover:text-[#E7000B]">Privacy Policy</a>
            <a href="{{ route('services') }}" class="transition hover:text-[#E7000B]">Terms of Service</a>
          </div>

        </div>

      </div>
    </div>

  </div>

  <a href="{{ route('contact.alt') }}" class="fixed right-4 bottom-4 z-50 w-[56px] h-[56px] rounded-full bg-[#E7000B] flex items-center justify-center shadow-[0_0_20px_rgba(37,99,235,0.6)]" aria-label="Chat support">
    <img src="{{ asset('icons/logoicon.svg') }}" alt="Chat support" class="w-[24px] h-[24px]">
  </a>

</body>

</html>
