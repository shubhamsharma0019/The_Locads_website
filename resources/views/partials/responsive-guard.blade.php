<style>
    @media (min-width: 1024px) {
        .locads-site-header + script + section[class*="mt-"]:not(.signage17-backbar) {
            margin-top: 32px !important;
        }

        .locads-site-header + script + section[class*="pt-"]:not(.signage17-backbar) {
            padding-top: 56px !important;
        }

        .locads-site-header + script + section > div:first-child[class*="mt-"],
        .locads-site-header + script + .home-hero-section > div:first-child {
            margin-top: 40px !important;
        }

        .locads-site-header + script + div[class*="mt-"]:not([id="site-mobile-menu"]):not(.signage14-backbar):not(.signage15-backbar) {
            margin-top: 32px !important;
        }
    }

    @media (max-width: 1023px) {
        .locads-site-header + script + section[class*="mt-"]:not(.signage17-backbar) {
            margin-top: 24px !important;
        }

        .locads-site-header + script + section[class*="pt-"]:not(.signage17-backbar) {
            padding-top: 40px !important;
        }

        .locads-site-header + script + section > div:first-child[class*="mt-"],
        .locads-site-header + script + .home-hero-section > div:first-child {
            margin-top: 28px !important;
        }

        .locads-site-header + script + div[class*="mt-"]:not([id="site-mobile-menu"]):not(.signage14-backbar):not(.signage15-backbar) {
            margin-top: 24px !important;
        }
    }

    @media (max-width: 767px) {
        html,
        body {
            max-width: 100%;
            overflow-x: hidden;
        }

        body * {
            min-width: 0;
        }

        section,
        main,
        header,
        footer,
        article,
        aside,
        nav,
        form,
        div,
        a,
        button,
        input,
        select,
        textarea {
            max-width: 100%;
        }

        img,
        video,
        canvas,
        iframe {
            max-width: 100%;
        }

        [class*="w-["],
        [class*="min-w-["] {
            max-width: 100% !important;
        }

        [class*="min-w-["] {
            min-width: 0 !important;
        }

        [class*="w-screen"] {
            max-width: 100vw;
        }

        table {
            display: block;
            max-width: 100%;
            overflow-x: auto;
        }
    }

    @if ($pageTransition ?? true)
        @media (prefers-reduced-motion: no-preference) {
            body::before {
                content: "";
                position: fixed;
                inset: 0;
                z-index: 2147483647;
                pointer-events: none;
                background: #ffffff;
                opacity: 0;
                animation: locads-page-reveal 120ms ease-in-out forwards;
            }

            body.locads-page-leaving::before {
                animation: none;
            }

            body.locads-page-leaving {
                cursor: progress;
            }

            .locads-scroll-reveal {
                opacity: 0;
                transition: opacity 560ms ease-in-out;
            }

            .locads-scroll-reveal.locads-scroll-visible {
                opacity: 1;
            }

            .locads-image-zoom {
                transform: scale(1);
                transition: transform 420ms ease-in-out;
                will-change: transform;
            }

            .locads-image-zoom.locads-image-load-zoom {
                animation: locads-image-load-zoom 680ms ease-in-out both;
            }

            .locads-image-zoom:hover {
                animation: none;
                transform: scale(1.06);
            }

            :where(a, button)[class*="rounded"][class*="bg-"]:not([class*="translate"]),
            :where(a, button)[class*="rounded"][class*="border"]:not([class*="translate"]),
            button[class*="rounded"]:not([class*="translate"]) {
                transition: transform 420ms ease-in-out, box-shadow 420ms ease-in-out, background-color 260ms ease-in-out, border-color 260ms ease-in-out, color 260ms ease-in-out;
                will-change: transform;
            }

            :where(a, button)[class*="rounded"][class*="bg-"]:not([class*="translate"]):hover,
            :where(a, button)[class*="rounded"][class*="border"]:not([class*="translate"]):hover,
            button[class*="rounded"]:not([class*="translate"]):hover {
                transform: translateY(-2px) scale(1.02);
            }

            :where(a, button)[class*="rounded"][class*="bg-"]:not([class*="translate"]):active,
            :where(a, button)[class*="rounded"][class*="border"]:not([class*="translate"]):active,
            button[class*="rounded"]:not([class*="translate"]):active {
                transform: translateY(0) scale(0.99);
            }

            @media (prefers-reduced-motion: reduce) {
                :where(a, button)[class*="rounded"][class*="bg-"]:not([class*="translate"]),
                :where(a, button)[class*="rounded"][class*="border"]:not([class*="translate"]),
                button[class*="rounded"]:not([class*="translate"]) {
                    transition: none;
                }

                :where(a, button)[class*="rounded"][class*="bg-"]:not([class*="translate"]):hover,
                :where(a, button)[class*="rounded"][class*="border"]:not([class*="translate"]):hover,
                button[class*="rounded"]:not([class*="translate"]):hover,
                :where(a, button)[class*="rounded"][class*="bg-"]:not([class*="translate"]):active,
                :where(a, button)[class*="rounded"][class*="border"]:not([class*="translate"]):active,
                button[class*="rounded"]:not([class*="translate"]):active {
                    transform: none;
                }
            }

            @keyframes locads-image-load-zoom {
                0% {
                    opacity: 0;
                    transform: scale(1.045);
                }

                100% {
                    opacity: 1;
                    transform: scale(1);
                }
            }

            @keyframes locads-page-reveal {
                from {
                    opacity: 1;
                }

                to {
                    opacity: 0;
                    visibility: hidden;
                }
            }

            @keyframes locads-page-exit {
                from {
                    opacity: 0;
                }

                to {
                    opacity: 1;
                }
            }
        }
    @endif
</style>

@if ($pageTransition ?? true)
    <script>
        (() => {
            if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

            window.addEventListener('pageshow', () => {
                document.body.classList.remove('locads-page-leaving');
            });

            const prepareScrollReveal = () => {
                const targets = document.querySelectorAll([
                    'section',
                    '.page-sections > section',
                    'main > *',
                    'body > section',
                    'body > main',
                    'article'
                ].join(','));

                if (!targets.length) return;

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach((entry) => {
                        if (!entry.isIntersecting) return;

                        entry.target.classList.add('locads-scroll-visible');
                        observer.unobserve(entry.target);
                    });
                }, {
                    rootMargin: '0px 0px -12% 0px',
                    threshold: 0.12
                });

                targets.forEach((target) => {
                    target.classList.add('locads-scroll-reveal');
                    if (target.getBoundingClientRect().top < window.innerHeight) {
                        target.classList.add('locads-scroll-visible');
                    }
                    observer.observe(target);
                });
            };

            if ('IntersectionObserver' in window) {
                if (document.readyState === 'loading') {
                    document.addEventListener('DOMContentLoaded', prepareScrollReveal, { once: true });
                } else {
                    prepareScrollReveal();
                }
            }

            const prepareImageZoom = () => {
                document.querySelectorAll('img').forEach((image) => {
                    const source = image.getAttribute('src') || '';
                    const className = image.getAttribute('class') || '';
                    const isDisplayImage = className.includes('object-cover') || (className.includes('w-full') && className.includes('h-full'));
                    if (source.toLowerCase().includes('.svg') && !isDisplayImage) return;
                    image.classList.add('locads-image-zoom');
                    image.classList.add('locads-image-load-zoom');
                    image.addEventListener('animationend', () => {
                        image.classList.remove('locads-image-load-zoom');
                    }, { once: true });
                });
            };

            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', prepareImageZoom, { once: true });
            } else {
                prepareImageZoom();
            }

            document.addEventListener('click', (event) => {
                const link = event.target.closest('a[href]');
                if (!link) return;

                const url = new URL(link.href, window.location.href);
                const isModifiedClick = event.metaKey || event.ctrlKey || event.shiftKey || event.altKey || event.button !== 0;
                const isSamePageHash = url.pathname === window.location.pathname && url.search === window.location.search && url.hash;
                const shouldSkip = isModifiedClick
                    || link.target
                    || link.hasAttribute('download')
                    || ['mailto:', 'tel:', 'javascript:'].includes(url.protocol)
                    || url.origin !== window.location.origin
                    || isSamePageHash;

                if (shouldSkip) return;

                event.preventDefault();
                document.body.classList.add('locads-page-leaving');
                window.location.href = url.href;
            });
        })();
    </script>
@endif
