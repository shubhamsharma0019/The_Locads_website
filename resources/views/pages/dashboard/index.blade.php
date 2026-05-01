<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  @include('partials.seo-meta', [
      'title' => 'Dashboard | The Locads CRM',
      'description' => 'Internal The Locads dashboard for products, enquiries, analytics, and CRM operations.',
      'keywords' => 'The Locads dashboard, CRM dashboard, admin panel',
      'robots' => 'noindex,nofollow'
  ])
  @php
    $dashboardUser = auth()->user();
    $dashboardDisplayName = trim((string) ($dashboardUser->name ?? ''));
    if ($dashboardDisplayName === '') {
        $dashboardDisplayName = (string) ($dashboardUser->email ?? 'User');
    }
    $dashboardInitialParts = preg_split('/\s+/', trim($dashboardDisplayName)) ?: [];
    $dashboardInitials = collect($dashboardInitialParts)
        ->filter()
        ->take(2)
        ->map(fn ($part) => strtoupper(substr($part, 0, 1)))
        ->implode('');
    if ($dashboardInitials === '') {
        $dashboardInitials = strtoupper(substr($dashboardDisplayName, 0, 2));
    }
    $quickNavigationCards = [
        ['title' => 'Dashboard', 'description' => 'Return to the main admin dashboard overview and analytics.', 'cta' => 'Go to Dashboard', 'url' => route('dashboard'), 'tone' => 'slate'],
        ['title' => 'Home Page', 'description' => 'Open the public landing page and main website entry point.', 'cta' => 'Go to Home', 'url' => route('home'), 'tone' => 'brand'],
        ['title' => 'About Page', 'description' => 'Review company background, mission, and business overview.', 'cta' => 'Go to About', 'url' => route('about'), 'tone' => 'sky'],
        ['title' => 'Services Page', 'description' => 'View all services, packages and support plans.', 'cta' => 'Go to Services', 'url' => route('services'), 'tone' => 'amber'],
        ['title' => 'Industries Page', 'description' => 'Explore use-cases and industry-specific signage solutions.', 'cta' => 'Go to Industries', 'url' => route('industries'), 'tone' => 'green'],
        ['title' => 'Franchise Page', 'description' => 'Check the franchise program, business models, and partner flow.', 'cta' => 'Go to Franchise', 'url' => route('signage'), 'tone' => 'violet'],
        ['title' => 'FAQ Page', 'description' => 'Open frequently asked questions for products, services, and pricing.', 'cta' => 'Go to FAQ', 'url' => route('faq'), 'tone' => 'slate'],
        ['title' => 'Contact Page', 'description' => 'Open the main contact page for support and sales enquiries.', 'cta' => 'Go to Contact', 'url' => route('contact'), 'tone' => 'brand'],
        ['title' => 'Book Demo Page', 'description' => 'Open the alternate contact page used for demo bookings.', 'cta' => 'Go to Demo', 'url' => route('contact.alt'), 'tone' => 'sky'],
        ['title' => 'Product Page', 'description' => 'Browse and manage your full product catalogue.', 'cta' => 'Go to Products', 'url' => route('products.index'), 'tone' => 'brand'],
        ['title' => 'Software Platform', 'description' => 'Open the software platform overview and feature-led product page.', 'cta' => 'Go to Platform', 'url' => route('products.index-b'), 'tone' => 'sky'],
        ['title' => 'Indoor Displays', 'description' => 'Open the indoor display listing and related product details.', 'cta' => 'Go to Indoor', 'url' => route('products.index-d'), 'tone' => 'amber'],
        ['title' => 'Outdoor Displays', 'description' => 'Open outdoor and window display product listings.', 'cta' => 'Go to Outdoor', 'url' => route('products.index-e'), 'tone' => 'sky'],
        ['title' => 'Media Players', 'description' => 'Open the media player product section and related items.', 'cta' => 'Go to Players', 'url' => route('products.index-f'), 'tone' => 'violet'],
        ['title' => 'Software Licenses', 'description' => 'Open the software and licensing product page.', 'cta' => 'Go to Licenses', 'url' => route('products.index-g'), 'tone' => 'slate'],
        ['title' => 'Cloud CMS Detail', 'description' => 'Review the cloud CMS license details and CTA section.', 'cta' => 'Go to CMS', 'url' => route('products.show'), 'tone' => 'brand'],
        ['title' => 'USB License Detail', 'description' => 'Review the pen drive software license detail page.', 'cta' => 'Go to USB License', 'url' => route('products.show-b'), 'tone' => 'green'],
        ['title' => 'Blog Listing', 'description' => 'Open the latest articles and public insights feed.', 'cta' => 'Go to Blog', 'url' => route('blog.index'), 'tone' => 'amber'],
        ['title' => 'Blog Detail', 'description' => 'Open the featured blog detail article page.', 'cta' => 'Go to Article', 'url' => route('blog.show'), 'tone' => 'sky'],
        ['title' => 'Enquiries Page', 'description' => 'Manage sell, rent, and ticket enquiries from one place.', 'cta' => 'Go to Enquiries', 'url' => route('enquiries.index'), 'tone' => 'brand'],
        ['title' => 'Rental Queries', 'description' => 'Open rental enquiries directly with the rent filter applied.', 'cta' => 'Go to Rentals', 'url' => route('enquiries.index', ['type' => 'rent']), 'tone' => 'green'],
        ['title' => 'Create Product', 'description' => 'Add, edit, and manage products and rental inventory.', 'cta' => 'Go to Create', 'url' => route('products.create'), 'tone' => 'violet'],
    ];
    $dashboardSearchPages = [
      ['label' => 'Dashboard', 'url' => route('dashboard')],
      ['label' => 'Home', 'url' => route('home')],
      ['label' => 'About', 'url' => route('about')],
      ['label' => 'Services', 'url' => route('services')],
      ['label' => 'Enquiries', 'url' => route('enquiries.index')],
      ['label' => 'Rental Queries', 'url' => route('enquiries.index', ['type' => 'rent'])],
      ['label' => 'Rental Enquiry', 'url' => route('enquiries.index', ['type' => 'rent'])],
      ['label' => 'Rent Enquiry', 'url' => route('enquiries.index', ['type' => 'rent'])],
      ['label' => 'Sell Enquiry', 'url' => route('enquiries.index', ['type' => 'sell'])],
      ['label' => 'Ticket Enquiry', 'url' => route('enquiries.index', ['type' => 'ticket'])],
      ['label' => 'Create Product', 'url' => route('products.create')],
      ['label' => 'Software Platform', 'url' => route('products.index-b')],
      ['label' => 'Industries', 'url' => route('industries')],
      ['label' => 'Franchise', 'url' => route('signage')],
      ['label' => 'Contact', 'url' => route('contact')],
      ['label' => 'All Products', 'url' => route('products.index-c')],
      ['label' => 'Indoor Displays', 'url' => route('products.index-d')],
      ['label' => 'Outdoor Displays', 'url' => route('products.index-e')],
      ['label' => 'Media Players', 'url' => route('products.index-f')],
      ['label' => 'Software Licenses', 'url' => route('products.index-g')],
      ['label' => 'Cloud CMS License', 'url' => route('products.show')],
      ['label' => 'Pen Drive Software Licence', 'url' => route('products.show-b')],
      ['label' => 'Blog Listing', 'url' => route('blog.index')],
      ['label' => 'Blog Detail', 'url' => route('blog.show')],
      ['label' => 'FAQ', 'url' => route('faq')],
      ['label' => 'Book Demo', 'url' => route('contact.alt')],
    ];
  @endphp
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brand: {
              DEFAULT: '#f24848',
              soft: '#fef2f2',
              border: '#fbcfe8'
            }
          },
          boxShadow: {
            brand: 'none',
            soft: '0 1px 4px rgba(15, 23, 42, 0.06)',
            softlg: '0 8px 24px rgba(239, 68, 68, 0.06)'
          },
          fontFamily: {
            sans: ['Inter', 'sans-serif']
          }
        }
      }
    };
  </script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
</head>
<body class="bg-[#F9FAFB] font-sans text-[#364153] [font-family:'Inter',sans-serif]">
  <div class="flex h-screen overflow-hidden bg-[#F9FAFB]">
    <aside class="hidden w-[234px] shrink-0 flex-col overflow-y-auto border-r border-slate-200 bg-white md:flex">
      <div class="border-b border-slate-100 px-4 pb-3 pt-5">
        <div class="flex items-center justify-center">
          <img src="{{ asset('icons/locadsicon.svg') }}" alt="ThLocads Logo" class="h-auto w-full max-w-[140px] object-contain">
        </div>
      </div>

      <nav class="mt-2 flex flex-1 flex-col gap-0.5 px-2.5 py-2.5">
        <a href="{{ route('dashboard') }}" class="flex items-center gap-3 rounded-lg bg-brand px-3.5 py-2.5 text-[13.5px] font-medium text-white shadow-brand transition hover:bg-red-500">
          <svg class="h-[17px] w-[17px] shrink-0" viewBox="0 0 24 24" fill="none"><rect x="3" y="3" width="7" height="7" rx="1.5" stroke="currentColor" stroke-width="2"/><rect x="14" y="3" width="7" height="7" rx="1.5" stroke="currentColor" stroke-width="2"/><rect x="3" y="14" width="7" height="7" rx="1.5" stroke="currentColor" stroke-width="2"/><rect x="14" y="14" width="7" height="7" rx="1.5" stroke="currentColor" stroke-width="2"/></svg>
          Dashboard
        </a>
        <a href="{{ route('enquiries.index') }}" class="flex items-center gap-3 rounded-lg px-3.5 py-2.5 text-[13.5px] font-medium text-[#4A5565] transition hover:bg-slate-50 hover:text-[#101828]">
            <svg class="h-[17px] w-[17px] shrink-0" viewBox="0 0 24 24" fill="none"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
            <span>Enquiry</span>
        </a>
        <a href="{{ route('enquiries.index', ['type' => 'ticket']) }}" class="flex items-center gap-3 rounded-lg px-3.5 py-2.5 text-[13.5px] font-medium text-[#4A5565] transition hover:bg-slate-50 hover:text-[#101828]">
          <svg class="h-[17px] w-[17px] shrink-0" viewBox="0 0 24 24" fill="none"><path d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
          Ticket
        </a>
        <a href="{{ route('products.index-g') }}" class="flex items-center gap-3 rounded-lg px-3.5 py-2.5 text-[13.5px] font-medium text-[#4A5565] transition hover:bg-slate-50 hover:text-[#101828]">
          <svg class="h-[17px] w-[17px] shrink-0" viewBox="0 0 24 24" fill="none"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
          Licence
        </a>
        <a href="{{ route('products.create') }}" class="flex items-center gap-3 rounded-lg px-3.5 py-2.5 text-[13.5px] font-medium text-[#4A5565] transition hover:bg-slate-50 hover:text-[#101828]">
          <svg class="h-[17px] w-[17px] shrink-0" viewBox="0 0 24 24" fill="none"><path d="M20 7l-8-4-8 4m16 0v10l-8 4m-8-4V7m16 3l-8 4M4 10l8 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          Create Product
        </a>
        <a href="{{ route('products.rentals') }}" class="flex items-center gap-3 rounded-lg px-3.5 py-2.5 text-[13.5px] font-medium text-[#4A5565] transition hover:bg-slate-50 hover:text-[#101828]">
          <svg class="h-[17px] w-[17px] shrink-0" viewBox="0 0 24 24" fill="none"><path d="M3 7h18M3 12h18M3 17h18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><circle cx="7" cy="7" r="2" fill="currentColor"/><circle cx="7" cy="17" r="2" fill="currentColor"/></svg>
          Rental Product
        </a>
        <div class="mx-1 mt-2 h-px bg-slate-100"></div>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="flex items-center gap-3 rounded-lg px-3.5 py-2.5 text-[13.5px] font-medium text-red-500 transition hover:bg-red-50 hover:text-red-600">
          <svg class="h-[17px] w-[17px] shrink-0" viewBox="0 0 24 24" fill="none"><path d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
          Logout
          </button>
        </form>
      </nav>

      <div class="m-2.5 rounded-xl border border-sky-100 bg-gradient-to-br from-white to-sky-50 px-3.5 py-3.5">
        <div class="flex items-center gap-3">
          <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-white-100">
            <div class="flex h-9 w-9 items-center justify-center rounded-full bg-brand shadow-[0_14px_24px_rgba(239,68,68,0.2)]">
              <svg width="18" height="18" fill="none" viewBox="0 0 24 24">
                <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
          </div>
          <div>
            <div class="text-[13px] font-semibold leading-5 text-[#101828]">Need Help?</div>
            <div class="mt-1 flex items-center gap-1.5 text-[11px] text-[#4A5565]">
              <span class="inline-block h-1.5 w-1.5 shrink-0 rounded-full bg-green-500"></span>
              Ready to help
            </div>
          </div>
        </div>
      </div>
    </aside>

    <div class="flex min-w-0 flex-1 flex-col overflow-hidden">
      <header class="flex h-16 shrink-0 items-center justify-between border-b border-slate-200 bg-white px-4 sm:px-6">
        <div class="flex flex-1 items-center pr-4 max-w-[820px]">
          <div class="relative w-full">
            <svg class="absolute left-4 top-1/2 h-4 w-4 -translate-y-1/2 text-slate-400" fill="none" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2"/><path d="M21 21l-4.35-4.35" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
            <input
              id="dashboard-page-search"
              class="w-full rounded-2xl border border-slate-200 bg-slate-50 py-3 pl-11 pr-12 text-sm text-[#4A5565] outline-none transition focus:border-brand focus:bg-white"
              placeholder="Search pages and jump instantly..."
            />
            <button
              id="dashboard-page-search-button"
              type="button"
              class="absolute right-2 top-1/2 flex h-8 w-8 -translate-y-1/2 items-center justify-center rounded-full bg-brand text-white transition hover:bg-red-500"
              aria-label="Go to page">
              <svg width="14" height="14" fill="none" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
          </div>
        </div>
        <div class="mr-1 flex shrink-0 items-center gap-5 pr-0">
          <div class="relative">
            <button
              id="dashboard-user-menu-button"
              type="button"
              class="flex items-center gap-2 rounded-full border border-slate-200 bg-white px-2 py-1.5 transition hover:bg-slate-50"
              aria-haspopup="true"
              aria-expanded="false">
              <div class="hidden text-right sm:block">
                <div class="text-[12.5px] font-semibold leading-4 text-[#101828]">{{ $dashboardDisplayName }}</div>
              </div>
              <div class="flex h-9 w-9 items-center justify-center rounded-full bg-brand text-[12px] font-semibold tracking-[0.03em] text-white">{{ $dashboardInitials }}</div>
              <span class="flex h-6 w-6 items-center justify-center rounded-full bg-slate-100 text-slate-500">
                <svg class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 011.08 1.04l-4.25 4.51a.75.75 0 01-1.08 0l-4.25-4.51a.75.75 0 01.02-1.06z" clip-rule="evenodd"/></svg>
              </span>
            </button>
            <div
              id="dashboard-user-menu"
              class="hidden absolute right-0 top-full z-30 mt-2 w-56 rounded-2xl border border-slate-200 bg-white p-2 shadow-soft">
              <button
                type="button"
                id="open-password-modal"
                class="flex w-full items-center gap-3 rounded-xl px-3 py-2.5 text-left text-[13px] font-medium text-[#364153] transition hover:bg-slate-50 hover:text-[#101828]">
                <svg class="h-4 w-4 shrink-0" viewBox="0 0 24 24" fill="none"><path d="M16 10V8a4 4 0 10-8 0v2M7 10h10a2 2 0 012 2v7a2 2 0 01-2 2H7a2 2 0 01-2-2v-7a2 2 0 012-2z" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                Update Password
              </button>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="flex w-full items-center gap-3 rounded-xl px-3 py-2.5 text-left text-[13px] font-medium text-red-500 transition hover:bg-red-50 hover:text-red-600">
                  <svg class="h-4 w-4 shrink-0" viewBox="0 0 24 24" fill="none"><path d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                  Logout
                </button>
              </form>
            </div>
          </div>
        </div>
      </header>

      <main class="flex-1 overflow-y-auto bg-[#F9FAFB] p-4 sm:p-6">
        @if (session('success'))
          <div class="mb-4 rounded-2xl border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">
            {{ session('success') }}
          </div>
        @endif

        @if (session('error'))
          <div class="mb-4 rounded-2xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
            {{ session('error') }}
          </div>
        @endif

        <div class="mb-5">
          <h1 class="text-[21px] font-semibold tracking-[-0.02em] text-[#101828]">Dashboard</h1>
          <p class="mt-1 text-[12.5px] font-normal text-[#4A5565]">Welcome back - here's what's happening today.</p>
        </div>

        <div class="mb-4 grid grid-cols-1 gap-3.5 xl:grid-cols-3">
          <a href="{{ route('enquiries.index', ['type' => 'sell']) }}" class="block rounded-2xl border border-slate-200 bg-white p-[22px] shadow-soft transition hover:border-brand-border hover:shadow-md">
            <div class="mb-3.5 flex items-start justify-between">
              <div class="flex h-10 w-10 items-center justify-center rounded-[10px] bg-brand-soft">
                <svg width="19" height="19" fill="none" viewBox="0 0 24 24"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" stroke="#ef4444" stroke-width="2" stroke-linecap="round"/></svg>
              </div>
              <span class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2.5 py-1 text-[11.5px] font-semibold text-green-600">
                <svg width="10" height="10" viewBox="0 0 16 16" fill="none"><path d="M3.333 11.333L11.333 3.333M11.333 3.333H5.333M11.333 3.333V9.333" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                {{ $sellPercentage ?? 0 }}%
              </span>
            </div>
            <div class="text-[27px] font-semibold leading-none tracking-[-0.02em] text-[#101828]">{{ $sellCount ?? 0 }}</div>
            <div class="mt-1.5 text-[12.5px] font-medium text-[#364153]">Sell Enquiry</div>
            <div class="mt-0.5 text-[11.5px] text-[#4A5565]">Total selling enquiries</div>
          </a>

          <a href="{{ route('enquiries.index', ['type' => 'rent']) }}" class="block rounded-2xl border border-slate-200 bg-white p-[22px] shadow-soft transition hover:border-brand-border hover:shadow-md">
            <div class="mb-3.5 flex items-start justify-between">
              <div class="flex h-10 w-10 items-center justify-center rounded-[10px] bg-green-50">
                <svg width="19" height="19" fill="none" viewBox="0 0 24 24"><path d="M3 7h18M3 12h18M3 17h18" stroke="#22C55E" stroke-width="2" stroke-linecap="round"/><circle cx="7" cy="7" r="2" fill="#22C55E"/><circle cx="7" cy="12" r="2" fill="#22C55E"/><circle cx="7" cy="17" r="2" fill="#22C55E"/></svg>
              </div>
              <span class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2.5 py-1 text-[11.5px] font-semibold text-green-600">
                <svg width="10" height="10" viewBox="0 0 16 16" fill="none"><path d="M3.333 11.333L11.333 3.333M11.333 3.333H5.333M11.333 3.333V9.333" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                {{ $rentPercentage ?? 0 }}%
              </span>
            </div>
            <div class="text-[27px] font-semibold leading-none tracking-[-0.02em] text-[#101828]">{{ $rentCount ?? 0 }}</div>
            <div class="mt-1.5 text-[12.5px] font-medium text-[#364153]">Rental Enquiry</div>
            <div class="mt-0.5 text-[11.5px] text-[#4A5565]">Total rental enquiries</div>
          </a>

          <a href="{{ route('enquiries.index', ['type' => 'ticket']) }}" class="block rounded-2xl border border-slate-200 bg-white p-[22px] shadow-soft transition hover:border-brand-border hover:shadow-md">
            <div class="mb-3.5 flex items-start justify-between">
              <div class="flex h-10 w-10 items-center justify-center rounded-[10px] bg-amber-50">
                <svg width="19" height="19" fill="none" viewBox="0 0 24 24"><path d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" stroke="#F59E0B" stroke-width="2" stroke-linecap="round"/></svg>
              </div>
              <span class="inline-flex items-center gap-1 rounded-full bg-amber-50 px-2.5 py-1 text-[11.5px] font-semibold text-amber-700">
                <svg width="10" height="10" viewBox="0 0 16 16" fill="none"><path d="M3.333 11.333L11.333 3.333M11.333 3.333H5.333M11.333 3.333V9.333" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                {{ $ticketPercentage ?? 0 }}%
              </span>
            </div>
            <div class="text-[27px] font-semibold leading-none tracking-[-0.02em] text-[#101828]">{{ $ticketCount ?? 0 }}</div>
            <div class="mt-1.5 text-[12.5px] font-medium text-[#364153]">Tickets</div>
            <div class="mt-0.5 text-[11.5px] text-[#4A5565]">Post-sale enquiries</div>
          </a>
        </div>

        <div class="mb-4 grid grid-cols-1 gap-3.5 xl:grid-cols-2">
          <div class="rounded-2xl border border-slate-200 bg-white p-[22px] shadow-soft">
            <div class="mb-[18px] flex items-start justify-between">
              <div>
                <div class="text-sm font-medium text-[#101828]">Enquiry Overview</div>
                <div class="mt-0.5 text-[11.5px] text-[#4A5565]">Sell vs Rental distribution</div>
              </div>
              <a href="{{ route('enquiries.index') }}" class="text-xs font-semibold text-brand no-underline">View All -></a>
            </div>

            <div class="mb-5 flex justify-center">
              <div class="relative h-[162px] w-[162px]">
                <canvas id="enquiryDonut"></canvas>
                <div class="pointer-events-none absolute inset-0 flex flex-col items-center justify-center">
                  <div class="text-[23px] font-bold tracking-[-0.02em] text-[#101828]">{{ $chartTotal ?? 0 }}</div>
                  <div class="mt-0.5 text-[10.5px] font-medium text-[#4A5565]">Total</div>
                </div>
              </div>
            </div>

            <div class="flex flex-col gap-[9px]">
              <a href="{{ route('enquiries.index', ['type' => 'sell']) }}" class="flex items-center justify-between rounded-[9px] border border-slate-100 bg-slate-50 px-3 py-2.5 transition hover:border-brand-border hover:bg-white">
                <div class="flex items-center gap-[9px]">
                  <span class="inline-block h-2 w-2 shrink-0 rounded-full bg-brand"></span>
                  <span class="text-[13px] font-medium text-[#364153]">Sell Enquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="text-[13.5px] font-bold text-[#101828]">{{ $sellCount ?? 0 }}</span>
                  <span class="rounded-md bg-brand-soft px-2 py-0.5 text-[10.5px] font-semibold text-brand">{{ $sellPercentage ?? 0 }}%</span>
                </div>
              </a>
              <a href="{{ route('enquiries.index', ['type' => 'rent']) }}" class="flex items-center justify-between rounded-[9px] border border-slate-100 bg-slate-50 px-3 py-2.5 transition hover:border-brand-border hover:bg-white">
                <div class="flex items-center gap-[9px]">
                  <span class="inline-block h-2 w-2 shrink-0 rounded-full bg-sky-400"></span>
                  <span class="text-[13px] font-medium text-[#364153]">Rental Enquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="text-[13.5px] font-bold text-[#101828]">{{ $rentCount ?? 0 }}</span>
                  <span class="rounded-md bg-green-50 px-2 py-0.5 text-[10.5px] font-semibold text-green-600">{{ $rentPercentage ?? 0 }}%</span>
                </div>
              </a>
            </div>
          </div>

          <div class="rounded-2xl border border-slate-200 bg-white p-[22px] shadow-soft">
            <div class="mb-[18px] flex items-start justify-between">
              <div>
                <div class="text-sm font-medium text-[#101828]">Ticket Enquiry Overview</div>
                <div class="mt-0.5 text-[11.5px] text-[#4A5565]">Ticket vs other enquiry distribution</div>
              </div>
              <a href="{{ route('enquiries.index') }}" class="text-xs font-semibold text-brand no-underline">Manage -></a>
            </div>

            <div class="mb-5 flex justify-center">
              <div class="relative h-[162px] w-[162px]">
                <canvas id="ticketDonut"></canvas>
                <div class="pointer-events-none absolute inset-0 flex flex-col items-center justify-center">
                  <div class="text-[23px] font-bold tracking-[-0.02em] text-[#101828]">{{ $ticketCount ?? 0 }}</div>
                  <div class="mt-0.5 text-[10.5px] font-medium text-[#4A5565]">Tickets</div>
                </div>
              </div>
            </div>

            <div class="flex flex-col gap-[9px]">
              <a href="{{ route('enquiries.index', ['type' => 'ticket']) }}" class="flex items-center justify-between rounded-[9px] border border-slate-100 bg-slate-50 px-3 py-2.5 transition hover:border-brand-border hover:bg-white">
                <div class="flex items-center gap-3">
                  <span class="inline-block h-2 w-2 shrink-0 rounded-full bg-amber-400"></span>
                  <span class="text-[13px] font-medium text-[#364153]">Ticket Enquiry</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="text-[13.5px] font-bold text-[#101828]">{{ $ticketCount ?? 0 }}</span>
                  <span class="rounded-md bg-amber-50 px-2 py-0.5 text-[10.5px] font-semibold text-amber-700">{{ $ticketPercentage ?? 0 }}%</span>
                </div>
              </a>
              <div class="flex items-center justify-between rounded-[9px] border border-slate-100 bg-slate-50 px-3 py-2.5">
                <div class="flex items-center gap-[9px]">
                  <span class="inline-block h-2 w-2 shrink-0 rounded-full bg-slate-300"></span>
                  <span class="text-[13px] font-medium text-[#364153]">Other Enquiries</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="text-[13.5px] font-bold text-[#101828]">{{ max(($allEnquiryTotal ?? 0) - ($ticketCount ?? 0), 0) }}</span>
                  <span class="rounded-md bg-slate-100 px-2 py-0.5 text-[10.5px] font-semibold text-slate-600">{{ max(100 - ($ticketPercentage ?? 0), 0) }}%</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="rounded-2xl border border-slate-200 bg-white p-[22px] shadow-soft">
          <div class="mb-4 flex items-center gap-[11px]">
            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-[10px] border border-brand-border bg-brand-soft">
              <svg width="17" height="17" fill="none" viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z" stroke="#ef4444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <div>
              <div class="text-sm font-medium text-[#101828]">Quick Navigation</div>
              <div class="mt-0.5 text-[11.5px] text-[#4A5565]">Jump to key pages instantly</div>
            </div>
          </div>

          <div class="grid grid-cols-1 gap-3 md:grid-cols-2 xl:grid-cols-3">
            <div class="flex flex-col gap-2.5 rounded-xl border border-slate-200 bg-white p-[18px] transition hover:border-brand-border hover:shadow-softlg">
              <div class="flex items-start gap-3">
                <div class="flex h-[34px] w-[34px] shrink-0 items-center justify-center rounded-[9px] bg-sky-50">
                  <svg width="16" height="16" fill="none" viewBox="0 0 24 24"><path d="M3 10.5L12 3l9 7.5V21a1 1 0 01-1 1h-5.5v-7h-5v7H4a1 1 0 01-1-1V10.5z" stroke="#0EA5E9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
                <div class="flex-1">
                  <div class="mb-1 text-[13px] font-medium text-[#101828]">Home Page</div>
                  <div class="text-[11.5px] leading-6 text-[#4A5565]">Open the public landing page and website home screen.</div>
                </div>
              </div>
              <a href="{{ route('home') }}" class="inline-flex items-center gap-1 text-xs font-semibold text-brand no-underline">
                Go to Home
                <svg width="12" height="12" fill="none" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </a>
            </div>

            <div class="flex flex-col gap-2.5 rounded-xl border border-slate-200 bg-white p-[18px] transition hover:border-brand-border hover:shadow-softlg">
              <div class="flex items-start gap-3">
                <div class="flex h-[34px] w-[34px] shrink-0 items-center justify-center rounded-[9px] bg-brand-soft">
                  <svg width="16" height="16" fill="none" viewBox="0 0 24 24"><path d="M20 7l-8-4-8 4m16 0v10l-8 4m-8-4V7m16 3l-8 4M4 10l8 4" stroke="#ef4444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
                <div class="flex-1">
                  <div class="mb-1 text-[13px] font-medium text-[#101828]">Product Page</div>
                  <div class="text-[11.5px] leading-6 text-[#4A5565]">Browse and manage your full product catalogue.</div>
                </div>
              </div>
              <a href="{{ route('products.index') }}" class="inline-flex items-center gap-1 text-xs font-semibold text-brand no-underline">
                Go to Products
                <svg width="12" height="12" fill="none" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </a>
            </div>

            <div class="flex flex-col gap-2.5 rounded-xl border border-slate-200 bg-white p-[18px] transition hover:border-brand-border hover:shadow-softlg">
              <div class="flex items-start gap-3">
                <div class="flex h-[34px] w-[34px] shrink-0 items-center justify-center rounded-[9px] bg-amber-50">
                  <svg width="16" height="16" fill="none" viewBox="0 0 24 24"><path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" stroke="#F59E0B" stroke-width="2"/><circle cx="12" cy="12" r="3" stroke="#F59E0B" stroke-width="2"/></svg>
                </div>
                <div class="flex-1">
                  <div class="mb-1 text-[13px] font-medium text-[#101828]">Services Page</div>
                  <div class="text-[11.5px] leading-6 text-[#4A5565]">View all services, packages and support plans.</div>
                </div>
              </div>
              <a href="{{ route('services') }}" class="inline-flex items-center gap-1 text-xs font-semibold text-brand no-underline">
                Go to Services
                <svg width="12" height="12" fill="none" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </a>
            </div>

          </div>
        </div>
      </main>
    </div>
  </div>

  <div id="password-modal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/40 p-4">
    <div class="w-full max-w-md rounded-2xl bg-white shadow-2xl">
      <div class="flex items-center justify-between border-b border-slate-100 px-6 py-4">
        <div>
          <div class="text-[15px] font-semibold text-[#101828]">Update Password</div>
          <div class="text-[11.5px] text-[#4A5565]">Keep your dashboard access secure.</div>
        </div>
        <button type="button" id="close-password-modal" class="flex h-8 w-8 items-center justify-center rounded-lg border border-slate-200 text-slate-500 hover:bg-slate-50">
          <svg width="14" height="14" fill="none" viewBox="0 0 24 24"><path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
        </button>
      </div>
      <form method="POST" action="{{ route('update.password') }}" class="p-6">
        @csrf
        <div class="space-y-4">
          <div>
            <label class="mb-1.5 block text-[12px] font-medium text-[#364153]">Current Password</label>
            <input type="password" name="old_password" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-3.5 py-2.5 text-sm text-[#101828] outline-none transition focus:border-brand focus:bg-white" required>
          </div>
          <div>
            <label class="mb-1.5 block text-[12px] font-medium text-[#364153]">New Password</label>
            <input type="password" name="new_password" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-3.5 py-2.5 text-sm text-[#101828] outline-none transition focus:border-brand focus:bg-white" required>
          </div>
          <div>
            <label class="mb-1.5 block text-[12px] font-medium text-[#364153]">Confirm New Password</label>
            <input type="password" name="new_password_confirmation" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-3.5 py-2.5 text-sm text-[#101828] outline-none transition focus:border-brand focus:bg-white" required>
          </div>
        </div>
        <div class="mt-6 flex items-center justify-end gap-3">
          <button type="button" id="cancel-password-modal" class="rounded-xl border border-slate-200 bg-white px-4 py-2.5 text-[13px] font-medium text-[#4A5565] transition hover:bg-slate-50">Cancel</button>
          <button type="submit" class="rounded-xl bg-brand px-5 py-2.5 text-[13px] font-semibold text-white transition hover:bg-red-500">Update Password</button>
        </div>
      </form>
    </div>
  </div>

  <script>
    (() => {
      const pageSearchInput = document.getElementById('dashboard-page-search');
      const pageSearchButton = document.getElementById('dashboard-page-search-button');
      const pageMap = @json($dashboardSearchPages);

      if (!pageSearchInput || !pageSearchButton || !Array.isArray(pageMap)) return;

      const normalize = (value) => value.trim().toLowerCase();

      const goToMatchedPage = () => {
        const inputValue = normalize(pageSearchInput.value);
        if (!inputValue) return;

        const exactMatch = pageMap.find((page) => normalize(page.label) === inputValue);
        const partialMatch = pageMap.find((page) => normalize(page.label).includes(inputValue));
        const targetPage = exactMatch || partialMatch;

        if (targetPage?.url) {
          window.location.href = targetPage.url;
          return;
        }

        pageSearchInput.classList.add('border-red-300', 'bg-red-50', 'text-red-600');
        window.setTimeout(() => {
          pageSearchInput.classList.remove('border-red-300', 'bg-red-50', 'text-red-600');
        }, 1200);
      };

      pageSearchButton.addEventListener('click', goToMatchedPage);
      pageSearchInput.addEventListener('keydown', (event) => {
        if (event.key === 'Enter') {
          event.preventDefault();
          goToMatchedPage();
        }
      });
    })();

    (() => {
      const userMenuButton = document.getElementById('dashboard-user-menu-button');
      const userMenu = document.getElementById('dashboard-user-menu');
      const passwordModal = document.getElementById('password-modal');
      const openPasswordModalButton = document.getElementById('open-password-modal');
      const closePasswordModalButton = document.getElementById('close-password-modal');
      const cancelPasswordModalButton = document.getElementById('cancel-password-modal');

      if (!userMenuButton || !userMenu) return;

      const hideUserMenu = () => {
        userMenu.classList.add('hidden');
        userMenuButton.setAttribute('aria-expanded', 'false');
      };

      const showUserMenu = () => {
        userMenu.classList.remove('hidden');
        userMenuButton.setAttribute('aria-expanded', 'true');
      };

      userMenuButton.addEventListener('click', () => {
        if (userMenu.classList.contains('hidden')) {
          showUserMenu();
        } else {
          hideUserMenu();
        }
      });

      document.addEventListener('click', (event) => {
        if (!userMenu.contains(event.target) && !userMenuButton.contains(event.target)) {
          hideUserMenu();
        }
      });

      const openPasswordModal = () => {
        if (!passwordModal) return;
        passwordModal.classList.remove('hidden');
        hideUserMenu();
        document.body.classList.add('overflow-hidden');
      };

      const closePasswordModal = () => {
        if (!passwordModal) return;
        passwordModal.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
      };

      openPasswordModalButton?.addEventListener('click', openPasswordModal);
      closePasswordModalButton?.addEventListener('click', closePasswordModal);
      cancelPasswordModalButton?.addEventListener('click', closePasswordModal);

      passwordModal?.addEventListener('click', (event) => {
        if (event.target === passwordModal) {
          closePasswordModal();
        }
      });
    })();

    window.addEventListener('load', function () {
      const enquiryCanvas = document.getElementById('enquiryDonut');
      const ticketCanvas = document.getElementById('ticketDonut');

      if (enquiryCanvas) {
        new Chart(enquiryCanvas.getContext('2d'), {
          type: 'doughnut',
          data: {
            labels: ['Sell Enquiry', 'Rental Enquiry'],
            datasets: [{
              data: [{{ $sellCount ?? 0 }}, {{ $rentCount ?? 0 }}],
              backgroundColor: ['#f24848', '#7dd3fc'],
              borderWidth: 0,
              hoverOffset: 5
            }]
          },
          options: {
            responsive: true,
            maintainAspectRatio: true,
            cutout: '72%',
            plugins: {
              legend: { display: false },
              tooltip: {
                bodyFont: { family: 'Inter', size: 12 },
                titleFont: { family: 'Inter', size: 12 },
                callbacks: {
                  label: c => {
                    const total = {{ $chartTotal ?? 0 }};
                    const percentage = total > 0 ? Math.round((c.parsed / total) * 100) : 0;
                    return ` ${c.label}: ${c.parsed} (${percentage}%)`;
                  }
                }
              }
            }
          }
        });
      }

      if (ticketCanvas) {
        new Chart(ticketCanvas.getContext('2d'), {
          type: 'doughnut',
          data: {
            labels: ['Ticket Enquiry', 'Other Enquiries'],
            datasets: [{
              data: [{{ $ticketCount ?? 0 }}, {{ max(($allEnquiryTotal ?? 0) - ($ticketCount ?? 0), 0) }}],
              backgroundColor: ['#f59e0b', '#cbd5e1'],
              borderWidth: 0,
              hoverOffset: 5
            }]
          },
          options: {
            responsive: true,
            maintainAspectRatio: true,
            cutout: '72%',
            plugins: {
              legend: { display: false },
              tooltip: {
                bodyFont: { family: 'Inter', size: 12 },
                titleFont: { family: 'Inter', size: 12 },
                callbacks: {
                  label: c => {
                    const total = {{ $allEnquiryTotal ?? 0 }};
                    const percentage = total > 0 ? Math.round((c.parsed / total) * 100) : 0;
                    return ` ${c.label}: ${c.parsed} (${percentage}%)`;
                  }
                }
              }
            }
          }
        });
      }
    });
  </script>
</body>
</html>
