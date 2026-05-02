<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  @include('partials.seo-meta', [
      'title' => 'Book a Demo | The Locads',
      'description' => 'Book a digital signage demo with The Locads and connect with our team for sales, rental, or support enquiries.',
      'keywords' => 'book signage demo, The Locads contact, rental enquiry, sales enquiry'
  ])
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white">

  <!-- 🔷 TOP LEVEL DIV -->
  <div class="w-full max-w-[1387px] mx-auto border-b border-black/10">

    <!-- 🔷 HEADER -->
        @include('partials.signage-header', ['currentPage' => 19])


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
                      C-78,<br>
                      Sector-63, Noida(UP)
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
                      +91 9911916600<br>
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
                      info@thelocads.com<br>
                      info@thelocads.com
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
              <form method="POST" action="{{ route('enquiries.store') }}" class="w-full flex flex-col gap-[24px]">
                @csrf
                <input type="hidden" name="source_page" value="book-demo" />

                <!-- 🔷 FIRST + LAST NAME -->
                <div class="w-full min-h-[74px] flex flex-col sm:flex-row gap-4 lg:gap-[24px]">

                  <!-- FIRST NAME -->
                  <div class="w-full sm:w-[195px] min-h-[74px] flex flex-col gap-[4px]">
                    <label class="text-[14px] font-medium leading-[20px] text-[#4A5565]">
                      First Name
                    </label>
                    <input name="first_name" value="{{ old('first_name') }}" class="w-full h-[50px] border border-[#E5E7EB] rounded-[14px] px-[16px]" />
                  </div>

                  <!-- LAST NAME -->
                  <div class="w-full sm:w-[195px] min-h-[74px] flex flex-col gap-[4px]">
                    <label class="text-[14px] font-medium leading-[20px] text-[#4A5565]">
                      Last Name
                    </label>
                    <input name="last_name" value="{{ old('last_name') }}" class="w-full h-[50px] border border-[#E5E7EB] rounded-[14px] px-[16px]" />
                  </div>

                </div>

                <!-- 🔷 WORK EMAIL -->
                <div class="w-full min-h-[74px] flex flex-col gap-[4px]">
                  <label class="text-[14px] font-medium leading-[20px] text-[#4A5565]">
                    Work Email
                  </label>
                  <input name="email" type="email" value="{{ old('email') }}" class="w-full h-[50px] border border-[#E5E7EB] rounded-[14px] px-[16px]" />
                </div>

                <!-- 🔷 COMPANY NAME -->
                <div class="w-full min-h-[74px] flex flex-col gap-[4px]">
                  <label class="text-[14px] font-medium leading-[20px] text-[#4A5565]">
                    Company Name
                  </label>
                  <input name="company_name" value="{{ old('company_name') }}" class="w-full h-[50px] border border-[#E5E7EB] rounded-[14px] px-[16px]" />
                </div>

                <!-- 🔷 HOW CAN WE HELP -->
                <div class="w-full min-h-[152.5px] flex flex-col gap-[4px]">
                  <label class="text-[14px] font-medium leading-[20px] text-[#4A5565]">
                    How can we help?
                  </label>
                  <textarea name="message"
                    class="w-full h-[120px] border border-[#E5E7EB] rounded-[14px] px-[16px] py-[12px] resize-none">{{ old('message') }}</textarea>
                </div>

                <!-- 🔷 BUTTON -->
                <div class="w-full h-[56px]">
                  <button
                    type="submit"
                    class="w-full h-full rounded-[14px] bg-[#155DFC] shadow-[0px_0px_15px_0px_rgba(37,99,235,0.4)] flex items-center justify-center">

                    <span class="text-[16px] font-bold leading-[24px] text-white">
                      Send Message
                    </span>

                  </button>
                </div>

              </form>

            </div>
          </div>
        </div>

      </div>
    </section>


    <!-- 🔷 THIRD DIV (FOOTER) -->
    @include('partials.site-footer')

  <script>
    (() => {
      const popup = document.getElementById('signage19-popup');
      const closeButtons = document.querySelectorAll('[data-popup-close]');

      if (!popup) return;

      const openPopup = () => {
        popup.hidden = false;
        popup.classList.remove('hidden');
        popup.classList.add('flex');
        document.body.classList.add('overflow-hidden');
      };

      const closePopup = () => {
        popup.hidden = true;
        popup.classList.remove('flex');
        popup.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
      };

      closeButtons.forEach((element) => element.addEventListener('click', closePopup));

      document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && !popup.hidden) {
          closePopup();
        }
      });

      @if (session('contact_success'))
      openPopup();
      @endif
    })();
  </script>

</body>

</html>
