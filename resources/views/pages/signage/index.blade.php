<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  @include('partials.seo-meta', [
      'title' => 'Franchise Program | The Locads',
      'description' => 'Apply for The Locads franchise program and explore partnership models for building a digital signage business.',
      'keywords' => 'digital signage franchise, The Locads franchise, signage partner program'
  ])
  <script src="https://cdn.tailwindcss.com"></script>

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>

<body class="bg-white flex justify-center">

  <!-- 🔷 PAGE -->
  <div class="w-full max-w-[1387px]">

    <!-- 🔷 HEADER -->
        @include('partials.signage-header', ['currentPage' => 7])

    <!-- 🔷 HERO -->
    <div class="w-screen relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw] min-h-[652px] px-4 sm:px-6 border-b border-[#E5E7EB] flex justify-center 
  bg-cover bg-center" style="background-image: url('{{ asset('icons/backgroundimage.jpg') }}');">

      <!-- 🔷 OVERLAY (optional but recommended for readability) -->
      <div class="absolute inset-0 bg-white/80"></div>

      <!-- 🔷 INNER -->
      <div class="w-full max-w-[896px] min-h-[395px] mt-16 sm:mt-20 lg:mt-[128px] mb-16 flex flex-col items-center gap-[24px] text-center relative z-10">

        <!-- 🔷 PARTNER PROGRAM -->
        <div class="w-[162.54px] h-[42px] flex items-center justify-center 
      bg-[#DBEAFE] border border-[#8EC5FF] rounded-full">

          <span class="text-[16px] font-bold leading-[24px] text-[#1447E6]">
            Partner Program
          </span>
        </div>

        <!-- 🔷 HEADING -->
        <div class="w-full flex justify-center">
          <h1 class="w-full max-w-[454px] text-center text-[40px] sm:text-[52px] lg:text-[60px] font-medium leading-[48px] sm:leading-[60px] lg:leading-[72px] tracking-[-1px] lg:tracking-[-1.5px] text-[#111827]">

            Build Your Own

            <span class="block bg-gradient-to-r from-[#E7000B] to-[#155DFC] bg-clip-text text-transparent">
              Signage Empire
            </span>

          </h1>
        </div>

        <!-- 🔷 PARAGRAPH -->
        <div class="w-full flex justify-center">
          <p class="w-full max-w-[896px] text-[16px] sm:text-[18px] lg:text-[20px] leading-[28px] lg:leading-[32.5px] text-[#000000] text-center">
            Join The Locads franchise network. Leverage our powerful platform,
            premium hardware, and global brand to build a highly profitable business in your territory.
          </p>
        </div>

        <!-- 🔷 BUTTON -->
        <div class="w-[233.02px] h-[56px] flex items-center justify-center">
          <a href="{{ route('contact.alt') }}" class="w-full h-full rounded-full bg-[#155DFC] 
        shadow-[0px_0px_20px_0px_rgba(37,99,235,0.37)] 
        flex items-center justify-center">

            <span class="text-[16px] font-bold leading-[24px] text-white">
              Apply for Franchise
            </span>

          </a>
        </div>

      </div>
    </div>

    <!-- 🔷 BUSINESS SECTION -->
    <div class="w-full bg-[#F9FAFB] py-16 lg:pt-[96px] lg:pb-[96px] px-4 sm:px-6 lg:px-[53.5px] flex justify-center">

      <!-- 🔷 INNER -->
      <div class="w-full max-w-[1280px] flex flex-col items-center gap-10 lg:gap-[64px]">

        <!-- 🔷 HEADING BLOCK -->
        <div class="w-full max-w-[768px] flex flex-col items-center gap-[24px] text-center">

          <!-- HEADING -->
          <div class="w-full flex justify-center">
            <h2 class="text-[34px] sm:text-[40px] lg:text-[48px] font-medium leading-[40px] sm:leading-[44px] lg:leading-[48px] text-[#101828]">
              Business Models
            </h2>
          </div>

          <!-- PARAGRAPH -->
          <div class="w-full flex justify-center">
            <p class="text-[16px] sm:text-[18px] leading-[26px] sm:leading-[28px] text-[#4A5565]">
              Choose the tier that fits your investment capability and business goals.
            </p>
          </div>

        </div>

        <!-- 🔷 CARDS -->
        <div class="w-full max-w-[1024px]">

          <!-- 🔷 CARDS WRAPPER -->
          <div class="w-full flex flex-col lg:flex-row justify-between gap-6 lg:gap-10">

            <!-- 🔷 CARD 1 -->
            <div class="w-full lg:w-[492px] min-h-[522px] bg-white border border-[#E5E7EB] rounded-[24px] flex flex-col">

              <!-- 🔷 INNER WRAPPER -->
              <div class="w-full max-w-[410px] px-6 lg:px-0 lg:ml-[41px] mt-8 lg:mt-[41px] flex flex-col gap-[16px]">

                <!-- 🔷 HEADING -->
                <div class="w-full min-h-[36px] flex items-center">
                  <h3 class="text-[30px] font-medium leading-[36px] text-[#101828]">
                    FIFO Partner
                  </h3>
                </div>

                <!-- 🔷 PARAGRAPH -->
                <div class="w-full min-h-[24px] flex items-center">
                  <p class="text-[16px] leading-[24px] text-[#4A5565]">
                    Find, Install, Fix, Operate.
                  </p>
                </div>

                <!-- 🔷 FEATURES -->
                <div class="w-full mt-[24px] flex flex-col gap-[16px]">

                  <div class="flex items-start gap-[12px]">
                    <div
                      class="w-[24px] h-[24px] rounded-full bg-[#E7F0FF] flex items-center justify-center text-[#2563EB] text-[14px]">
                      ✓</div>
                    <p class="text-[16px] text-[#4A5565]">Focus on sales and basic installation.</p>
                  </div>

                  <div class="flex items-start gap-[12px]">
                    <div
                      class="w-[24px] h-[24px] rounded-full bg-[#E7F0FF] flex items-center justify-center text-[#2563EB] text-[14px]">
                      ✓</div>
                    <p class="text-[16px] text-[#4A5565]">We handle 24/7 NOC support and cloud hosting.</p>
                  </div>

                  <div class="flex items-start gap-[12px]">
                    <div
                      class="w-[24px] h-[24px] rounded-full bg-[#E7F0FF] flex items-center justify-center text-[#2563EB] text-[14px]">
                      ✓</div>
                    <p class="text-[16px] text-[#4A5565]">Low initial investment required.</p>
                  </div>

                </div>

              </div>

              <!-- 🔷 FOOTER -->
              <div class="w-full max-w-[410px] px-6 lg:px-0 lg:ml-[41px] mt-auto mb-8 lg:mb-[41px]">

                <p class="text-[12px] text-[#6B7280] tracking-wide">
                  MIN. INVESTMENT
                </p>

                <p class="text-[32px] font-bold text-[#101828] mt-[4px]">
                  ₹15,000
                </p>

                <!-- 🔷 BUTTON -->
                <a href="{{ route('contact.alt') }}"
                  class="mt-[24px] flex h-[60px] w-full items-center justify-center rounded-[14px] border-[2px] border-[#D1D5DC] text-[16px] font-medium text-[#101828] transition hover:border-[#155DFC] hover:text-[#155DFC]">
                  Select Model
                </a>

              </div>

            </div>
            <!-- 🔷 CARD 2 -->
            <!-- 🔷 CARD 2 -->
            <div class="w-full lg:w-[492px] min-h-[522px] rounded-[24px] border border-[#2E74FF] relative flex flex-col
  bg-gradient-to-b from-[#1C398E]/10 to-transparent">

              <!-- 🔷 BADGE -->
              <div
                class="absolute -top-[14px] right-[24px] bg-[#2E74FF] text-white text-[10px] px-[12px] py-[6px] rounded-full font-medium">
                MOST POPULAR
              </div>

              <!-- 🔷 INNER -->
              <div class="w-full max-w-[410px] px-6 lg:px-0 lg:ml-[41px] mt-8 lg:mt-[41px] flex flex-col gap-[16px]">

                <!-- 🔷 TITLE -->
                <div class="w-full min-h-[36px] flex items-center">
                  <h3 class="text-[30px] font-medium leading-[36px] text-[#101828]">
                    Master Franchise
                  </h3>
                </div>

                <!-- 🔷 SUBTEXT -->
                <div class="w-full min-h-[24px] flex items-center">
                  <p class="text-[16px] leading-[24px] text-[#193CB8]">
                    Exclusive territorial rights and sub-franchising.
                  </p>
                </div>

                <!-- 🔷 FEATURES -->
                <div class="w-full mt-[24px] flex flex-col gap-[16px]">

                  <div class="flex items-start gap-[12px]">
                    <div
                      class="w-[24px] h-[24px] rounded-full bg-[#2563EB] text-white flex items-center justify-center text-[14px]">
                      ✓</div>
                    <p class="text-[16px] text-[#4A5565]">Exclusive rights to a defined state/region.</p>
                  </div>

                  <div class="flex items-start gap-[12px]">
                    <div
                      class="w-[24px] h-[24px] rounded-full bg-[#2563EB] text-white flex items-center justify-center text-[14px]">
                      ✓</div>
                    <p class="text-[16px] text-[#4A5565]">Ability to build your own local NOC or use ours.</p>
                  </div>

                  <div class="flex items-start gap-[12px]">
                    <div
                      class="w-[24px] h-[24px] rounded-full bg-[#2563EB] text-white flex items-center justify-center text-[14px]">
                      ✓</div>
                    <p class="text-[16px] text-[#4A5565]">Recruit and manage your own FIFO partners.</p>
                  </div>

                  <div class="flex items-start gap-[12px]">
                    <div
                      class="w-[24px] h-[24px] rounded-full bg-[#2563EB] text-white flex items-center justify-center text-[14px]">
                      ✓</div>
                    <p class="text-[16px] text-[#4A5565]">Highest revenue share (up to 70%).</p>
                  </div>

                </div>

              </div>

              <!-- 🔷 FOOTER -->
              <div class="w-full max-w-[410px] px-6 lg:px-0 lg:ml-[41px] mt-auto mb-8 lg:mb-[41px]">

                <p class="text-[12px] text-[#193CB8] tracking-wide">
                  MIN. INVESTMENT
                </p>

                <p class="text-[32px] font-bold text-[#101828] mt-[4px]">
                  ₹75,000+
                </p>

                <!-- 🔷 BUTTON -->
                <a href="{{ route('contact.alt') }}" class="mt-[24px] flex h-[60px] w-full items-center justify-center rounded-[14px] bg-[#155DFC] text-[16px] font-semibold text-white shadow-[0px_0px_20px_0px_rgba(37,99,235,0.37)] transition hover:bg-[#1447E6]">
                  Select Model
                </a>

              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- 🔷 WHY SECTION -->
    <div class="w-full flex justify-center px-4 sm:px-6 lg:px-[53.5px] pt-16 pb-2 lg:pt-[96px] lg:pb-[10px]">

      <!-- 🔷 INNER -->
      <div class="w-full max-w-[1280px] flex flex-col items-center gap-8 lg:gap-[40px] px-0 lg:px-[48px]">

        <!-- 🔷 HEADING -->
        <div class="w-full max-w-[1184px] flex justify-center">
          <h2 class="text-[30px] font-medium leading-[36px] text-[#101828] text-center">
            Why Partner With Us?
          </h2>
        </div>

        <!-- 🔷 CARDS -->
        <div class="w-full max-w-[1184px] grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-8 lg:gap-6">

          <!-- 🔷 CARD 1 -->
          <div class="w-full max-w-[272px] mx-auto min-h-[267px] flex flex-col items-center text-center">

            <!-- ICON -->
            <div
              class="w-[64px] h-[64px] rounded-full border border-[#E5E7EB] bg-white flex items-center justify-center mb-[24px]">
              <img src="{{ asset('icons/dollaricon.svg') }}" alt="Image">
            </div>

            <!-- TITLE -->
            <div class="w-full max-w-[224px] min-h-[28px] flex justify-center">
              <p class="text-[20px] font-bold leading-[28px] text-[#101828] text-center">
                High Margin Potential
              </p>
            </div>

            <!-- DESC -->
            <div class="w-full max-w-[224px] min-h-[69px] flex justify-center mt-[16px]">
              <p class="text-[14px] leading-[22.75px] text-[#4A5565] text-center">
                Enjoy up to 60% gross margins on hardware sales and recurring revenue on software licenses.
              </p>
            </div>

          </div>

          <!-- 🔷 CARD 2 -->
          <div class="w-full max-w-[272px] mx-auto min-h-[267px] flex flex-col items-center text-center">

            <div
              class="w-[64px] h-[64px] rounded-full border border-[#E5E7EB] bg-white flex items-center justify-center mb-[24px]">
              <img src="{{ asset('icons/trunkeyicon.svg') }}" alt="Image">
            </div>

            <p class="text-[20px] font-bold leading-[28px] text-[#101828]">
              Turnkey Operations
            </p>

            <p class="text-[14px] leading-[22.75px] text-[#4A5565] mt-[16px] text-center w-full max-w-[224px]">
              We provide the marketing materials, sales training, and technical support.
            </p>

          </div>

          <!-- 🔷 CARD 3 -->
          <div class="w-full max-w-[272px] mx-auto min-h-[267px] flex flex-col items-center text-center">

            <div
              class="w-[64px] h-[64px] rounded-full border border-[#E5E7EB] bg-white flex items-center justify-center mb-[24px]">
              <img src="{{ asset('icons/growicon.svg') }}" alt="Image">
            </div>

            <p class="text-[20px] font-bold leading-[28px] text-[#101828]">
              Growing Market
            </p>

            <p class="text-[14px] leading-[22.75px] text-[#4A5565] mt-[16px] text-center w-full max-w-[224px]">
              Digital signage is a fast-growing industry with strong demand.
            </p>

          </div>

          <!-- 🔷 CARD 4 -->
          <div class="w-full max-w-[272px] mx-auto min-h-[267px] flex flex-col items-center text-center">

            <div
              class="w-[64px] h-[64px] rounded-full border border-[#E5E7EB] bg-white flex items-center justify-center mb-[24px]">
             <img src="{{ asset('icons/handshakeicon.svg') }}" alt="Image">
            </div>

            <p class="text-[20px] font-bold leading-[28px] text-[#101828]">
              Exclusive Territories
            </p>

            <p class="text-[14px] leading-[22.75px] text-[#4A5565] mt-[16px] text-center w-full max-w-[224px]">
              Master franchise models offer exclusive rights to specific geographic regions.
            </p>

          </div>

        </div>

      </div>
    </div>
    <!-- 🔷 THIRD DIV (FOOTER) -->
    @include('partials.site-footer')

</body>

</html>
