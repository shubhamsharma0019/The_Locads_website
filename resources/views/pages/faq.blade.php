<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.seo-meta', [
        'title' => 'FAQ | The Locads Digital Signage Questions',
        'description' => 'Find answers to common The Locads questions about digital signage products, pricing, installation, licensing, and support.',
        'keywords' => 'The Locads FAQ, digital signage questions, signage pricing, signage support'
    ])

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="overflow-x-hidden bg-white">

    <div class="w-full flex flex-col items-center">

        <!-- ================= HEADER ================= -->
        @include('partials.signage-header', ['currentPage' => 18])

        <!-- hero section -->
        <div
            class="mt-[79px] flex h-[312px] w-full justify-center bg-gradient-to-b from-[#F9FAFB] to-[#EFF6FF] px-[53.5px] pt-[80px] pb-[80px] max-[1280px]:px-[24px] max-[1024px]:mt-[48px] max-[1024px]:h-auto max-[1024px]:pt-[56px] max-[1024px]:pb-[56px] max-[767px]:px-[16px]">

            <!-- INNER -->
            <div class="flex h-full w-[1280px] max-w-[1280px] items-end justify-center px-[48px] max-[1280px]:w-full max-[1280px]:px-0 max-[1024px]:h-auto max-[1024px]:items-center">

                <!-- CONTENT -->
                <div class="signage18-hero-content mx-auto flex max-w-[729px] flex-col items-center text-center max-[1024px]:w-full">

                    <!-- HEADING -->
                    <h1
                        class="text-center text-[60px] font-medium leading-[72px] tracking-[-1.5px] text-[#101828] max-[1024px]:text-[42px] max-[1024px]:leading-[1.15] max-[767px]:text-[34px] max-[767px]:leading-[1.2]">
                        Frequently Asked
                        <span
                            class="bg-gradient-to-r from-[#7F56D9] to-[#2E90FA] bg-clip-text text-transparent tracking-[-1.8px]">
                            Insights
                        </span>
                    </h1>

                    <!-- PARA -->
                    <p
                        class="mt-[23.5px] max-w-[672px] text-center text-[20px] leading-[28px] text-[#364153] max-[767px]:text-[17px] max-[767px]:leading-[1.6]">
                        Find answers to common questions about our digital signage solutions,
                        pricing, and services.
                    </p>

                </div>

            </div>

        </div>
        @php
            $faqCategories = [
                [
                    'title' => 'General',
                    'items' => [
                        [
                            'question' => 'What is digital signage?',
                            'answer' => 'Digital signage uses commercial screens, media players, and software to show videos, offers, menus, notices, and live updates. The Locads helps you set up the complete system from display selection to content management. Explore our services to see how the full solution works.',
                        ],
                        [
                            'question' => 'What industries do you serve?',
                            'answer' => 'We serve retail stores, hospitality spaces, corporate offices, healthcare locations, education campuses, and public-facing business spaces. Each setup is planned around visibility, content frequency, and customer flow. You can review our key use-cases on the industries page.',
                        ],
                        [
                            'question' => 'Do you offer support?',
                            'answer' => 'Yes, we provide guidance for setup, product selection, software usage, and post-installation queries. Our team can help with display planning, content workflows, and troubleshooting. For direct help, use the contact page.',
                        ],
                    ],
                ],
                [
                    'title' => 'Products & Hardware',
                    'items' => [
                        [
                            'question' => 'What types of displays do you offer?',
                            'answer' => 'We offer indoor commercial displays, outdoor/window displays, video wall options, and media players for signage networks. Products are selected for business use, visibility, and long operating hours. Browse the product catalogue for the available categories.',
                        ],
                        [
                            'question' => 'Can I use my existing screens?',
                            'answer' => 'In many cases, yes. If your screen supports the right input, resolution, mounting, and operating schedule, it can often be paired with a suitable media player or software setup. Share your screen model through book demo and our team can confirm compatibility.',
                        ],
                        [
                            'question' => 'What is the difference between indoor and outdoor displays?',
                            'answer' => 'Indoor displays are built for controlled lighting, offices, stores, and reception areas. Outdoor and window displays need higher brightness, stronger panels, and better visibility in direct light. Compare indoor displays with outdoor displays before choosing.',
                        ],
                    ],
                ],
                [
                    'title' => 'Software & Content Management',
                    'items' => [
                        [
                            'question' => 'How do I update content on my screens?',
                            'answer' => 'Content can be updated through the signage software by uploading media, assigning it to screens, and publishing changes. The workflow is designed for quick updates across one screen or many screens. See the software platform for the management features.',
                        ],
                        [
                            'question' => 'Can I schedule different content for different times?',
                            'answer' => 'Yes, you can plan content by time, day, campaign, or screen group depending on your setup. This is useful for offers, menus, office announcements, and event-based messaging. Our team can help map this schedule during demo booking.',
                        ],
                        [
                            'question' => 'Does the system work offline?',
                            'answer' => 'A configured player can continue showing already downloaded content if the internet drops. New uploads, schedule changes, and remote monitoring need connectivity to sync again. For reliable playback, pair your setup with the right media player.',
                        ],
                        [
                            'question' => 'What is Unicast, Multicast, and Broadcast?',
                            'answer' => 'Unicast sends content to one selected screen, multicast sends it to a chosen group, and broadcast sends it across all connected screens. These modes help manage targeted campaigns and network-wide announcements. We can recommend the right workflow through our service planning.',
                        ],
                    ],
                ],
                [
                    'title' => 'Pricing & Plans',
                    'items' => [
                        [
                            'question' => 'How much does digital signage cost?',
                            'answer' => 'Cost depends on screen size, indoor or outdoor usage, media player needs, software license, installation, and support scope. A single-screen setup and a multi-location network will have different budgets. For a clear quote, send requirements from the contact page.',
                        ],
                        [
                            'question' => 'What is Hardware as a Service (HaaS)?',
                            'answer' => 'HaaS lets a business use signage hardware through a service-style plan instead of buying everything upfront. It can include hardware, setup, maintenance, and upgrades depending on the agreement. Ask our team through book demo for availability and fit.',
                        ],
                        [
                            'question' => 'Are there any hidden fees?',
                            'answer' => 'We aim to keep pricing clear by separating hardware, software license, installation, rental, and support costs. Any recurring license or service charge is discussed before confirmation. You can compare product and license categories from the software licenses page.',
                        ],
                        [
                            'question' => 'Do you offer screen rental services?',
                            'answer' => 'Yes, rental options can be planned for events, campaigns, temporary retail activations, and short-term business needs. The final rental plan depends on screen type, duration, location, and installation requirement. Submit a rental enquiry through book demo.',
                        ],
                    ],
                ],
                [
                    'title' => 'Installation & Setup',
                    'items' => [
                        [
                            'question' => 'Do you provide installation services?',
                            'answer' => 'Yes, we help with installation planning, screen placement, mounting guidance, media player setup, and basic software configuration. The scope depends on the site and hardware selected. Start with our services page or contact us for site-specific support.',
                        ],
                        [
                            'question' => 'How long does installation take?',
                            'answer' => 'A simple single-screen setup can usually be completed faster than a multi-screen or video wall installation. Time depends on mounting, wiring, internet access, testing, and content setup. Share your location and screen count on the contact page for an estimate.',
                        ],
                        [
                            'question' => 'Can I install the hardware myself?',
                            'answer' => 'You can handle basic setups if you already have mounting support, power, internet, and compatible hardware. For larger displays, outdoor screens, or video walls, professional installation is recommended for safety and performance. Our team can guide you through demo consultation.',
                        ],
                    ],
                ],
                [
                    'title' => 'Licensing & Activation',
                    'items' => [
                        [
                            'question' => 'How do I activate my software license?',
                            'answer' => 'Software activation depends on the license type selected for your signage setup. After purchase or confirmation, the license is mapped to the relevant screen, player, or account workflow. You can review available options on the software licenses page.',
                        ],
                        [
                            'question' => 'How many devices can I use with one license?',
                            'answer' => 'Device limits depend on the license model and package selected. Some licenses are meant for one screen or player, while network plans can support multiple endpoints. Contact us with your screen count so we can suggest the right license option.',
                        ],
                        [
                            'question' => 'What happens if my license expires?',
                            'answer' => 'When a license expires, new publishing, remote access, or advanced software features may stop depending on the package. Existing playback behavior can vary by setup, so renewal should be planned before expiry. For renewal help, reach us through support.',
                        ],
                    ],
                ],
                [
                    'title' => 'Franchise & Partnership',
                    'items' => [
                        [
                            'question' => 'What franchise opportunities do you offer?',
                            'answer' => 'The Locads offers partnership opportunities around digital signage products, local business outreach, installation support, and solution delivery. The model is designed for partners who want to serve local markets with signage solutions. Visit the franchise program page for details.',
                        ],
                        [
                            'question' => 'What territories are available?',
                            'answer' => 'Territory availability depends on current business coverage, local demand, and partner readiness. We review each request based on the city, region, and expected service capacity. Send your location through the partnership enquiry form.',
                        ],
                        [
                            'question' => 'What kind of support do franchisees receive?',
                            'answer' => 'Franchisees can receive product guidance, service workflow support, sales enablement, and help with solution planning. Support may also include catalogue knowledge, demo guidance, and operational coordination. Learn more on the franchise page.',
                        ],
                    ],
                ],
            ];
        @endphp

        <!-- ================= FAQ CONTENT ================= -->
        <section
            class="flex w-full flex-col items-center gap-[48px] px-[293.5px] pt-[64px] pb-[112px] max-[1280px]:px-[24px] max-[1024px]:gap-[32px] max-[1024px]:pt-[48px] max-[1024px]:pb-[64px] max-[767px]:px-[16px]">

            @foreach ($faqCategories as $category)
                <div class="mx-auto flex w-[800px] max-w-[800px] flex-col gap-[24px] max-[1280px]:w-full">
                    <div class="w-full border-b-[2px] border-[#155DFC] pb-[8px]">
                        <h3 class="text-[24px] font-medium text-[#101828]">{{ $category['title'] }}</h3>
                    </div>

                    <div class="flex flex-col gap-[16px]">
                        @foreach ($category['items'] as $item)
                            @php
                                $faqItemId = 'faq-answer-' . $loop->parent->index . '-' . $loop->index;
                            @endphp
                            <div class="faq-item flex w-full flex-col rounded-[14px] border border-[#E5E7EB] bg-white px-[24px] py-[20px] max-[767px]:px-[20px]">
                                <button
                                    type="button"
                                    class="faq-toggle flex w-full items-center justify-between gap-3 text-left"
                                    aria-expanded="false"
                                    aria-controls="{{ $faqItemId }}">
                                    <span class="min-w-0 flex-1 text-[18px] leading-[28px] font-semibold text-[#101828]">
                                        {{ $item['question'] }}
                                    </span>

                                    <span class="ml-auto flex h-[24px] w-[24px] shrink-0 items-center justify-center">
                                        <img
                                            class="faq-arrow h-[24px] w-[24px]"
                                            src="{{ asset('icons/lowerarrow.svg') }}"
                                            data-open-src="{{ asset('icons/upperarrow.svg') }}"
                                            data-closed-src="{{ asset('icons/lowerarrow.svg') }}"
                                            alt="">
                                    </span>
                                </button>

                                <div id="{{ $faqItemId }}" class="faq-answer hidden w-full pt-[12px]">
                                    <p class="text-[16px] leading-[26px] text-[#364153]">
                                        {{ $item['answer'] }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach

        </section>
        <!-- ================= CTA ================= -->
        <section class="flex h-[296px] w-full justify-center bg-[#F9FAFB] px-[53.5px] pt-[64px] max-[1280px]:px-[24px] max-[1024px]:h-auto max-[1024px]:pt-[48px] max-[1024px]:pb-[48px] max-[767px]:px-[16px]">

            <!-- INNER CONTAINER (1280) -->
            <div class="flex h-full w-[1280px] max-w-[1280px] justify-center max-[1280px]:w-full max-[1024px]:h-auto">

                <!-- CONTENT WRAPPER (1184) -->
                <div class="flex w-[1184px] max-w-[1184px] flex-col items-center text-center max-[1280px]:w-full">

                    <!-- HEADING -->
                    <div class="w-full flex justify-center">
                        <h2 class="text-[30px] leading-[36px] font-medium text-[#101828]">
                            Still have questions?
                        </h2>
                    </div>

                    <!-- PARAGRAPH -->
                    <div class="w-full flex justify-center mt-[16px]">
                        <p class="text-[18px] leading-[28px] text-[#364153] max-w-[550px]">
                            Our team is here to help. Contact us for personalized assistance.
                        </p>
                    </div>

                    <!-- BUTTON -->
                    <div class="w-full flex justify-center mt-[32px]">
                        <a href="{{ route('contact') }}" class="bg-[#E7000B] text-white px-[32px] py-[16px] rounded-full text-[16px] font-bold
                               shadow-[0_4px_6px_-4px_rgba(0,0,0,0.1),0_10px_15px_-3px_rgba(0,0,0,0.1)]">
                            Contact Support
                        </a>
                    </div>

                </div>

            </div>

        </section>
    </div>

    <!-- ****************** -->

    @include('partials.site-footer')

    <script>
        document.querySelectorAll('.faq-toggle').forEach((button) => {
            button.addEventListener('click', () => {
                const answer = document.getElementById(button.getAttribute('aria-controls'));
                const arrow = button.querySelector('.faq-arrow');
                const isOpen = button.getAttribute('aria-expanded') === 'true';

                button.setAttribute('aria-expanded', String(!isOpen));
                answer?.classList.toggle('hidden', isOpen);

                if (arrow) {
                    arrow.src = isOpen ? arrow.dataset.closedSrc : arrow.dataset.openSrc;
                }
            });
        });
    </script>

</body>

</html>
