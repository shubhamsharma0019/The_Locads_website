<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Contact UI</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .page-sections > section + section {
      margin-top: 3rem;
    }

    @media (min-width: 1024px) {
      .page-sections > section + section {
        margin-top: 4rem;
      }
    }
  </style>
</head>

<body class="bg-white">

  <!-- 🔷 TOP LEVEL DIV -->
  <div class="page-sections w-full max-w-[1387px] mx-auto border-b border-black/10">

    <!-- 🔷 HEADER -->
        @include('partials.signage-header', ['currentPage' => 8])


    <!-- 🔷 SECOND DIV (MAIN SECTION) -->
    <section class="w-full min-h-[1056.5px] flex justify-center">

      <!-- 🔷 INNER MAIN -->
      <div class="w-full max-w-[1152px] min-h-[864.5px] mt-10 sm:mt-14 lg:mt-[96px] px-4 sm:px-6 lg:px-[48px] flex flex-col gap-10 lg:gap-[64px]">

        <!-- 🔷 TOP HEADING WRAPPER -->
        <div class="w-full max-w-[1056px] min-h-[128px] flex flex-col items-center gap-4 lg:gap-[24px] mx-auto">

          <!-- 🔷 HEADING -->
          <div class="w-full min-h-[72px] flex justify-center">

            <h1 class="w-full max-w-[383px] min-h-[72px] text-center 
  text-[36px] sm:text-[48px] lg:text-[60px] font-bold leading-tight lg:leading-[72px] tracking-[-1.5px] text-[#111827]">

              Let’s
              <span
                class="bg-gradient-to-r from-[#8B2C8F] to-[#2563EB] bg-clip-text text-transparent tracking-[-1.8px]">
                Connect
              </span>

            </h1>

          </div>

          <!-- 🔷 PARAGRAPH -->
          <div class="w-full min-h-[32px] flex justify-center">

            <p class="w-full max-w-[694px] min-h-[32px] text-center 
      text-[16px] sm:text-[20px] lg:text-[24px] font-normal leading-7 lg:leading-[32px] tracking-[0px] text-[#364153]">

              Ready to transform your space? Our experts are here to help.

            </p>

          </div>

        </div>

        <!-- 🔷 CONTENT GRID -->
        <div class="flex flex-col lg:flex-row justify-between items-center lg:items-start gap-8 lg:gap-12">

          <!-- 🔷 LEFT SIDE (EXACT FIGMA) -->
          <div class="w-full lg:w-[496px] min-h-[672.5px] flex flex-col items-center lg:items-start text-center lg:text-left gap-8 lg:gap-[40px]">

            <!-- 🔷 TOP CONTENT -->
            <div class="w-full min-h-[356px] flex flex-col items-center lg:items-start gap-6 lg:gap-[32px]">

              <!-- 🔷 HEADING -->
              <div class="w-full min-h-[36px] flex items-center justify-center lg:justify-start">
                <h2 class="text-[24px] sm:text-[28px] lg:text-[30px] font-bold leading-[36px] text-[#101828]">
                  Get in Touch
                </h2>
              </div>

              <!-- 🔷 INFO LIST -->
              <div class="w-full min-h-[288px] flex flex-col items-center lg:items-start gap-6 lg:gap-[32px]">

                <!-- ITEM -->
                <div class="w-full max-w-[360px] flex gap-[16px] items-start mx-auto lg:mx-0">

                  <!-- ICON -->
                  <div
                    class="w-[48px] h-[48px] rounded-[14px] border border-[#BEDBFF] bg-[#EFF6FF] flex items-center justify-center shrink-0">
                    <img src="{{ asset('icons/logo1.svg') }}" alt="Logo" class="max-w-full h-auto">
                  </div>

                  <!-- TEXT -->
                  <div class="flex flex-col gap-[4px] text-left">

                    <p class="text-[18px] font-bold leading-[28px] text-[#101828]">
                      Global HQ
                    </p>

                    <p class="text-[14px] sm:text-[16px] leading-[24px] text-[#4A5565] w-full max-w-[266px]">
                      100 Tech Hub Boulevard, Suite 500<br>
                      San Francisco, CA 94105
                    </p>

                  </div>
                </div>

                <!-- ITEM -->
                <div class="w-full max-w-[360px] flex gap-[16px] items-start mx-auto lg:mx-0">

                  <div
                    class="w-[48px] h-[48px] rounded-[14px] border border-[#BEDBFF] bg-[#EFF6FF] flex items-center justify-center shrink-0">
                    <img src="{{ asset('icons/logo2.svg') }}" alt="Logo" class="max-w-full h-auto">
                  </div>

                  <div class="flex flex-col gap-[4px] text-left">

                    <p class="text-[18px] font-bold leading-[28px] text-[#101828]">
                      Sales & Support
                    </p>

                    <p class="text-[14px] sm:text-[16px] leading-[24px] text-[#4A5565] w-full max-w-[266px]">
                      +1 (800) 555-NOVA<br>
                      Mon-Fri, 9am - 6pm PST
                    </p>

                  </div>
                </div>

                <!-- ITEM -->
                <div class="w-full max-w-[360px] flex gap-[16px] items-start mx-auto lg:mx-0">

                  <div
                    class="w-[48px] h-[48px] rounded-[14px] border border-[#BEDBFF] bg-[#EFF6FF] flex items-center justify-center shrink-0">
                    <img src="{{ asset('icons/logo3.svg') }}" alt="Logo" class="max-w-full h-auto">
                  </div>

                  <div class="flex flex-col gap-[4px] text-left">

                    <p class="text-[18px] font-bold leading-[28px] text-[#101828]">
                      Email
                    </p>

                    <p class="text-[14px] sm:text-[16px] leading-[24px] text-[#4A5565] w-full max-w-[266px]">
                      hello@pixelwave.demo<br>
                      support@pixelwave.demo
                    </p>

                  </div>
                </div>

              </div>
            </div>

            <!-- 🔷 SUPPORT CARD -->
            <div
              class="w-full min-h-[178px] border border-[#E5E7EB] rounded-[24px] px-5 sm:px-7 lg:px-[33px] pt-6 lg:pt-[33px] pb-6 flex flex-col items-center lg:items-start text-center lg:text-left gap-[16px] bg-white">

              <p class="text-[20px] font-bold leading-[28px] text-[#101828]">
                24/7 NOC Emergency Support
              </p>

              <p class="text-[14px] leading-[20px] text-[#4A5565] w-full max-w-[322px]">
                For existing clients experiencing critical outages.
              </p>

              <p class="text-[24px] font-black leading-[32px] tracking-[1.2px] text-[#FF6467]">
                1-800-NOC-DOWN
              </p>

            </div>

          </div>
          <!-- 🔷 RIGHT FORM CARD -->
          <div class="w-full lg:w-[496px] min-h-[672.5px] 
  bg-gradient-to-b from-[#F9FAFB] to-[#EEF2FF] 
  border border-[#E5E7EB] rounded-[24px] 
  shadow-[0px_25px_50px_-12px_rgba(0,0,0,0.25)] relative">

            <!-- 🔷 INNER WRAPPER -->
            <div class="relative lg:absolute top-auto lg:top-[41px] left-auto lg:left-[41px] w-full lg:w-[414px] min-h-[526.5px] p-5 sm:p-6 lg:p-0 flex flex-col gap-[24px]">

              <!-- 🔷 HEADING -->
              <div class="w-full min-h-[32px] flex items-center">
                <h3 class="text-[22px] sm:text-[24px] font-bold leading-[32px] text-[#101828]">
                  Request a Demo
                </h3>
              </div>

              <!-- 🔷 FORM -->
              <div class="w-full flex flex-col gap-[24px]">

                <!-- 🔷 FIRST + LAST NAME -->
                <div class="w-full min-h-[74px] flex flex-col sm:flex-row gap-4 lg:gap-[24px]">

                  <!-- FIRST NAME -->
                  <div class="w-full sm:w-[195px] min-h-[74px] flex flex-col gap-[4px]">
                    <label class="text-[14px] font-medium leading-[20px] text-[#4A5565]">
                      First Name
                    </label>
                    <input class="w-full h-[50px] border border-[#E5E7EB] rounded-[14px] px-[16px]" />
                  </div>

                  <!-- LAST NAME -->
                  <div class="w-full sm:w-[195px] min-h-[74px] flex flex-col gap-[4px]">
                    <label class="text-[14px] font-medium leading-[20px] text-[#4A5565]">
                      Last Name
                    </label>
                    <input class="w-full h-[50px] border border-[#E5E7EB] rounded-[14px] px-[16px]" />
                  </div>

                </div>

                <!-- 🔷 WORK EMAIL -->
                <div class="w-full min-h-[74px] flex flex-col gap-[4px]">
                  <label class="text-[14px] font-medium leading-[20px] text-[#4A5565]">
                    Work Email
                  </label>
                  <input class="w-full h-[50px] border border-[#E5E7EB] rounded-[14px] px-[16px]" />
                </div>

                <!-- 🔷 COMPANY NAME -->
                <div class="w-full min-h-[74px] flex flex-col gap-[4px]">
                  <label class="text-[14px] font-medium leading-[20px] text-[#4A5565]">
                    Company Name
                  </label>
                  <input class="w-full h-[50px] border border-[#E5E7EB] rounded-[14px] px-[16px]" />
                </div>

                <!-- 🔷 HOW CAN WE HELP -->
                <div class="w-full min-h-[152.5px] flex flex-col gap-[4px]">
                  <label class="text-[14px] font-medium leading-[20px] text-[#4A5565]">
                    How can we help?
                  </label>
                  <textarea
                    class="w-full h-[120px] border border-[#E5E7EB] rounded-[14px] px-[16px] py-[12px] resize-none"></textarea>
                </div>

                <!-- 🔷 BUTTON -->
                <div class="w-full h-[56px]">
                  <button
                    class="w-full h-full rounded-[14px] bg-[#155DFC] shadow-[0px_0px_15px_0px_rgba(37,99,235,0.4)] flex items-center justify-center">

                    <span class="text-[16px] font-bold leading-[24px] text-white">
                      Send Message
                    </span>

                  </button>
                </div>

              </div>

            </div>
          </div>
        </div>

      </div>
    </section>


    <!-- 🔷 THIRD DIV (FOOTER) -->
    <section class="w-screen relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw] min-h-[410px] bg-[#F9FAFB] border-t border-[#E5E7EB] flex justify-center">

      <!-- 🔷 FOOTER INNER -->
      <div class="w-full max-w-[1280px] px-4 sm:px-6 lg:px-[48px] py-10 sm:py-14 lg:py-[81px] flex flex-col">

        <!-- 🔷 TOP GRID -->
        <div class="w-full lg:w-[1184px] min-h-[176px] flex flex-col sm:flex-row sm:flex-wrap xl:flex-nowrap justify-between gap-8 lg:gap-10">

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

            <p class="text-[14px] leading-[20px] text-[#4A5565]">Retail Displays</p>
            <p class="text-[14px] leading-[20px] text-[#4A5565]">Hospitality Signage</p>
            <p class="text-[14px] leading-[20px] text-[#4A5565]">Corporate Communications</p>
            <p class="text-[14px] leading-[20px] text-[#4A5565]">Healthcare Boards</p>

          </div>

          <!-- 🔷 COLUMN 3 -->
          <div class="w-full max-w-[260px] min-h-[176px] flex flex-col gap-[16px]">

            <p class="text-[14px] leading-[20px] text-[#4A5565]">About Us</p>
            <p class="text-[14px] leading-[20px] text-[#4A5565]">Our Services</p>
            <p class="text-[14px] leading-[20px] text-[#4A5565]">Franchise Program</p>
            <p class="text-[14px] leading-[20px] text-[#4A5565]">Contact</p>

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
            <span>Privacy Policy</span>
            <span>Terms of Service</span>
          </div>

        </div>

      </div>
    </section>

  </div>

  <button class="fixed right-4 bottom-4 z-50 w-[56px] h-[56px] rounded-full bg-[#E7000B] flex items-center justify-center shadow-[0_0_20px_rgba(37,99,235,0.6)]" aria-label="Chat support">
    <img src="{{ asset('icons/logoicon.svg') }}" alt="Chat support" class="w-[24px] h-[24px]">
  </button>

</body>

</html>
