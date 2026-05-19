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
<section class="w-screen min-h-[430px] sm:min-h-[520px] lg:min-h-[593.45px] relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw]">

  <!-- BACKGROUND -->
  <img src="{{ asset('icons/productimage.svg') }}" class="w-full h-full object-cover absolute inset-0" />

  <!-- OVERLAY -->
  <div class="absolute inset-0 bg-black/50"></div>

  <!-- CENTER CONTENT -->
  <div class="absolute inset-0 flex justify-center">

    <div class="w-full max-w-[1280px] min-h-[auto] lg:min-h-[440px] mt-8 sm:mt-12 lg:mt-[76.72px] pt-12 sm:pt-16 lg:pt-[80px] px-4 sm:px-6 lg:px-[48px] flex flex-col items-center">

      <!-- HEADING -->
      <h1 class="text-[36px] leading-[44px] sm:text-[48px] sm:leading-[56px] lg:text-[60px] lg:leading-[72px] tracking-[-1.5px] font-medium text-white text-center">
        Our <span class="text-red-500">Products</span>
      </h1>

      <!-- PARA -->
      <p class="w-full max-w-[768px] mt-[24px] text-[18px] leading-[30px] sm:text-[22px] sm:leading-[34px] lg:text-[24px] lg:leading-[39px] text-white text-center">
        A perfectly synchronized ecosystem of robust hardware and intuitive software.
      </p>

      <!-- TOGGLE -->
      <div class="w-full max-w-[432.18px] min-h-[58px] mt-[28px] sm:mt-[40px] lg:mt-[48px] bg-white border border-[#E5E7EB] rounded-full flex flex-row items-center p-[4px]">

        <a href="{{ route('products.index') }}" class="flex-1 h-[48px] flex items-center justify-center px-3 text-center">
          <span class="text-[#6B7280] text-[13px] sm:text-[16px] font-semibold">
            Hardware Solutions
          </span>
        </a>

        <a href="{{ route('products.index-b') }}" class="flex-1 h-[48px] bg-[#155DFC] rounded-full flex items-center justify-center px-3 text-center shadow-[0_0_15px_0_rgba(37,99,235,0.5)]">
          <span class="text-white text-[13px] sm:text-[16px] font-semibold">
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

          <h3 class="w-full max-w-[414px] text-[30px] leading-[36px] font-medium text-[#101828]">
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

          <h3 class="w-full max-w-[414px] text-[30px] leading-[36px] font-medium text-[#101828]">
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
    @include('partials.site-footer')

</body>

</html>
