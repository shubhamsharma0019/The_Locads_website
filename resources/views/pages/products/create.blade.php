<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  @include('partials.seo-meta', [
      'title' => 'Create Product | The Locads CRM',
      'description' => 'Internal product creation and management page for The Locads inventory and rentals.',
      'keywords' => 'create product, The Locads CRM, product manager',
      'robots' => 'noindex,nofollow'
  ])
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brand: { DEFAULT: '#f24848', soft: '#fef2f2' }
          },
          boxShadow: {
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
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
  <style>
    .product-card { transition: box-shadow 0.18s, border-color 0.18s, transform 0.18s; }
    .product-card:hover { box-shadow: 0 8px 28px rgba(242,72,72,0.10); border-color: #fecaca; transform: translateY(-2px); }
    .badge-active { background: #dcfce7; color: #16a34a; }
    .badge-inactive { background: #fef2f2; color: #ef4444; }
    .badge-product { background: #dbeafe; color: #1d4ed8; }
    .badge-rent { background: #fee2e2; color: #b91c1c; }
    .modal-overlay { backdrop-filter: blur(4px); }
  </style>
</head>
<body class="bg-[#F9FAFB] font-sans text-[#364153]">
@php
  $formProduct = $editingProduct ?? null;
  $hasFormErrors = $errors->any();
  $selectedType = old('type', $formProduct['type'] ?? 'product');
  $licenseSlug = (string) request()->route('productSlug', '');
  $isLicenceSidebarActive = request()->routeIs('products.index-g', 'products.show', 'products.show-b')
      || (request()->routeIs('products.detail') && str_contains(strtolower($licenseSlug), 'licen'));
  $sidebarActiveClass = 'bg-brand text-white transition hover:bg-red-500';
  $sidebarInactiveClass = 'text-[#4A5565] transition hover:bg-slate-50 hover:text-[#101828]';
@endphp

<div class="flex h-screen overflow-hidden bg-[#F9FAFB]">
  <aside class="hidden w-[234px] shrink-0 flex-col overflow-y-auto border-r border-slate-200 bg-white md:flex">
    <div class="border-b border-slate-100 px-4 pb-4 pt-5">
      <div class="flex h-[66px] items-center justify-center">
        <img src="{{ asset('icons/locadsicon.jpeg') }}" alt="TheLocads Logo" class="h-full w-full max-w-[173px] object-contain">
      </div>
    </div>

    <nav class="mt-2 flex flex-1 flex-col gap-0.5 px-2.5 py-2.5">
      <a href="{{ route('dashboard') }}" class="flex items-center gap-3 rounded-lg px-3.5 py-2.5 text-[13.5px] font-medium text-[#4A5565] transition hover:bg-slate-50 hover:text-[#101828]">
        <svg class="h-[17px] w-[17px] shrink-0" viewBox="0 0 24 24" fill="none"><rect x="3" y="3" width="7" height="7" rx="1.5" stroke="currentColor" stroke-width="2"/><rect x="14" y="3" width="7" height="7" rx="1.5" stroke="currentColor" stroke-width="2"/><rect x="3" y="14" width="7" height="7" rx="1.5" stroke="currentColor" stroke-width="2"/><rect x="14" y="14" width="7" height="7" rx="1.5" stroke="currentColor" stroke-width="2"/></svg>
        Dashboard
      </a>
      <a href="{{ route('enquiries.index', ['type' => 'ticket']) }}" class="flex items-center gap-3 rounded-lg px-3.5 py-2.5 text-[13.5px] font-medium text-[#4A5565] transition hover:bg-slate-50 hover:text-[#101828]">
          <svg class="h-[17px] w-[17px] shrink-0" viewBox="0 0 24 24" fill="none"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
          <span>Enquiry</span>
      </a>
      <a href="{{ route('enquiries.index') }}" class="flex items-center gap-3 rounded-lg px-3.5 py-2.5 text-[13.5px] font-medium text-[#4A5565] transition hover:bg-slate-50 hover:text-[#101828]">
        <svg class="h-[17px] w-[17px] shrink-0" viewBox="0 0 24 24" fill="none"><path d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
        Ticket Enquiry
      </a>
      <a href="{{ route('products.index-g') }}" class="flex items-center gap-3 rounded-lg px-3.5 py-2.5 text-[13.5px] font-medium {{ $isLicenceSidebarActive ? $sidebarActiveClass : $sidebarInactiveClass }}">
        <svg class="h-[17px] w-[17px] shrink-0" viewBox="0 0 24 24" fill="none"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
        Licence
      </a>
      <a href="{{ route('products.create') }}" class="flex items-center gap-3 rounded-lg bg-brand px-3.5 py-2.5 text-[13.5px] font-medium text-white transition hover:bg-red-500">
        <svg class="h-[17px] w-[17px] shrink-0" viewBox="0 0 24 24" fill="none"><path d="M20 7l-8-4-8 4m16 0v10l-8 4m-8-4V7m16 3l-8 4M4 10l8 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        Products
      </a>
      <a href="{{ route('products.rentals') }}" class="flex items-center gap-3 rounded-lg px-3.5 py-2.5 text-[13.5px] font-medium text-[#4A5565] transition hover:bg-slate-50 hover:text-[#101828]">
        <svg class="h-[17px] w-[17px] shrink-0" viewBox="0 0 24 24" fill="none"><path d="M3 7h18M3 12h18M3 17h18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><circle cx="7" cy="7" r="2" fill="currentColor"/><circle cx="7" cy="17" r="2" fill="currentColor"/></svg>
        Rental Products
      </a>
      <div class="mx-1 mt-2 h-px bg-slate-100"></div>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="flex w-full items-center gap-3 rounded-lg px-3.5 py-2.5 text-[13.5px] font-medium text-red-500 transition hover:bg-red-50 hover:text-red-600">
          <svg class="h-[17px] w-[17px] shrink-0" viewBox="0 0 24 24" fill="none"><path d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
          Logout
        </button>
      </form>
    </nav>
  </aside>

  <div class="flex min-h-0 min-w-0 flex-1 flex-col">
    <header class="relative z-30 flex h-16 shrink-0 items-center justify-between border-b border-slate-200 bg-white px-4 sm:px-6">
      <div class="flex flex-1 items-center pr-4 max-w-[820px]">
        <div class="relative w-full">
          <svg class="absolute left-4 top-1/2 h-4 w-4 -translate-y-1/2 text-slate-400" fill="none" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2"/><path d="M21 21l-4.35-4.35" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
          <input id="productSearch" oninput="filterProducts()" class="w-full rounded-2xl border border-slate-200 bg-slate-50 py-3 pl-11 pr-4 text-sm text-[#4A5565] outline-none transition focus:border-brand focus:bg-white" placeholder="Search products, SKU or categories..."/>
        </div>
      </div>
      <div class="flex items-center gap-2">
        <span class="hidden text-sm font-medium text-gray-700 sm:inline">{{ auth()->user()->name }}</span>
        <div class="flex h-9 w-9 items-center justify-center rounded-full bg-brand text-[12px] font-semibold text-white">
          {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
        </div>
      </div>
    </header>
    @include('partials.admin-mobile-nav')

    <main class="flex-1 overflow-y-auto bg-[#F9FAFB] p-4 sm:p-6">
      <div class="mb-6 flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
        <div>
          <h1 class="text-[21px] font-medium tracking-[-0.02em] text-[#101828]">Create Product</h1>
          <p class="mt-1 text-[12.5px] text-[#4A5565]">Choose product type, upload image, save details, and manage everything from one place.</p>
        </div>
        <div class="flex flex-wrap items-center gap-3">
          <button type="button" onclick="window.location.reload()" class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-200 bg-white px-4 py-2.5 text-[13.5px] font-semibold text-[#4A5565] shadow-sm transition hover:bg-slate-50 hover:text-[#101828]">
            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M20 6v5h-5M4 18v-5h5M18.5 10A7 7 0 006.1 7.1L4 11m2 3a7 7 0 0011.9 2.9L20 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            Refresh
          </button>
          <button type="button" onclick="openTypeSelector()" class="inline-flex items-center justify-center gap-2 rounded-xl bg-brand px-4 py-2.5 text-[13.5px] font-semibold text-white shadow-sm transition hover:bg-red-500">
            <svg width="15" height="15" fill="none" viewBox="0 0 24 24"><path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/></svg>
            Create Product
          </button>
        </div>
      </div>

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

      <div class="mb-5 grid grid-cols-2 gap-3 xl:grid-cols-6">
        <div class="rounded-xl border border-slate-200 bg-white px-4 py-3 shadow-soft">
          <div class="text-[11px] font-medium uppercase tracking-wide text-[#4A5565]">Total</div>
          <div class="mt-1 text-[22px] font-bold text-[#101828]">{{ $stats['total'] }}</div>
        </div>
        <div class="rounded-xl border border-slate-200 bg-white px-4 py-3 shadow-soft">
          <div class="text-[11px] font-medium uppercase tracking-wide text-[#4A5565]">Products</div>
          <div class="mt-1 text-[22px] font-bold text-blue-600">{{ $stats['product'] }}</div>
        </div>
        <div class="rounded-xl border border-slate-200 bg-white px-4 py-3 shadow-soft">
          <div class="text-[11px] font-medium uppercase tracking-wide text-[#4A5565]">Rent</div>
          <div class="mt-1 text-[22px] font-bold text-red-500">{{ $stats['rent'] }}</div>
        </div>
        <div class="rounded-xl border border-slate-200 bg-white px-4 py-3 shadow-soft">
          <div class="text-[11px] font-medium uppercase tracking-wide text-[#4A5565]">Active</div>
          <div class="mt-1 text-[22px] font-bold text-green-600">{{ $stats['active'] }}</div>
        </div>
        <div class="rounded-xl border border-slate-200 bg-white px-4 py-3 shadow-soft">
          <div class="text-[11px] font-medium uppercase tracking-wide text-[#4A5565]">Inactive</div>
          <div class="mt-1 text-[22px] font-bold text-red-500">{{ $stats['inactive'] }}</div>
        </div>
        <div class="rounded-xl border border-slate-200 bg-white px-4 py-3 shadow-soft">
          <div class="text-[11px] font-medium uppercase tracking-wide text-[#4A5565]">Categories</div>
          <div class="mt-1 text-[22px] font-bold text-[#101828]">{{ $stats['categories'] }}</div>
        </div>
      </div>

      <div class="mb-5 grid grid-cols-1 gap-3 sm:grid-cols-3">
        <select id="typeFilter" onchange="filterProducts()" class="w-full rounded-xl border border-slate-200 bg-white px-3 py-2.5 text-sm text-[#4A5565] outline-none focus:border-brand">
          <option value="">All Types</option>
          <option value="product">Product</option>
          <option value="rent">Rent Product</option>
        </select>
        <select id="categoryFilter" onchange="filterProducts()" class="w-full rounded-xl border border-slate-200 bg-white px-3 py-2.5 text-sm text-[#4A5565] outline-none focus:border-brand">
          <option value="">All Categories</option>
          @foreach ($categories as $category)
            <option value="{{ $category }}">{{ $category }}</option>
          @endforeach
        </select>
        <select id="statusFilter" onchange="filterProducts()" class="w-full rounded-xl border border-slate-200 bg-white px-3 py-2.5 text-sm text-[#4A5565] outline-none focus:border-brand">
          <option value="">All Status</option>
          <option value="active">Active</option>
          <option value="inactive">Inactive</option>
        </select>
      </div>

      <div id="productsGrid" class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4">
        @foreach ($products as $product)
          @php
            $featureText = implode(' · ', array_slice($product['features'] ?? [], 0, 3));
            $specText = implode(' · ', array_slice($product['specifications'] ?? [], 0, 2));
            $viewPayload = [
              'name' => $product['name'],
              'type' => $product['type'],
              'sku' => $product['sku'] ?: 'N/A',
              'category' => $product['category'],
              'status' => ucfirst($product['status']),
              'short_description' => $product['short_description'] ?: 'No short description added.',
              'description' => $product['description'] ?: 'No description added.',
              'price' => $product['price'] ? '₹' . number_format($product['price'], 0) : 'N/A',
              'rent_price' => $product['rent_price'] ? '₹' . number_format($product['rent_price'], 0) . ' per ' . ($product['billing_period'] ?? 'month') : 'N/A',
              'image' => $product['image_path'] ? asset($product['image_path']) : null,
              'features' => $product['features'] ?? [],
              'specifications' => $product['specifications'] ?? [],
            ];
          @endphp
          <div class="product-card cursor-pointer overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-soft" data-url="{{ route('products.detail', ['productSlug' => $product['slug'], 'return_to' => request()->fullUrl()]) }}" data-name="{{ strtolower($product['name']) }}" data-search="{{ strtolower(trim($product['name'] . ' ' . $product['sku'] . ' ' . $product['category'])) }}" data-category="{{ strtolower(trim($product['category'])) }}" data-status="{{ strtolower($product['status']) }}" data-type="{{ strtolower($product['type']) }}">
            <div class="relative h-44 bg-gradient-to-br from-slate-50 to-red-50">
              @if (!empty($product['image_path']))
                <img src="{{ asset($product['image_path']) }}" alt="{{ $product['name'] }}" class="h-full w-full object-cover">
              @else
                <div class="flex h-full items-center justify-center">
                  <svg width="54" height="54" fill="none" viewBox="0 0 24 24"><rect x="2" y="4" width="20" height="13" rx="2" stroke="#f24848" stroke-width="1.5"/><path d="M8 21h8M12 17v4" stroke="#f24848" stroke-width="1.5" stroke-linecap="round"/></svg>
                </div>
              @endif
              <span class="absolute right-3 top-3 rounded-full px-2.5 py-0.5 text-[11px] font-semibold {{ $product['status'] === 'active' ? 'badge-active' : 'badge-inactive' }}">{{ ucfirst($product['status']) }}</span>
              <span class="absolute left-3 top-3 rounded-full px-2.5 py-0.5 text-[11px] font-semibold {{ $product['type'] === 'rent' ? 'badge-rent' : 'badge-product' }}">{{ $product['type'] === 'rent' ? 'Rent Product' : 'Product' }}</span>
            </div>
            <div class="p-4">
              <div class="flex items-start justify-between gap-3">
                <div>
                  <div class="text-[14px] font-semibold leading-snug text-[#101828]">{{ $product['name'] }}</div>
                  <div class="mt-1 text-[11.5px] text-[#4A5565]">{{ $product['sku'] ?: 'No SKU' }} · {{ $product['category'] }}</div>
                </div>
              </div>
              <div class="mt-2 text-[11px] text-slate-400">{{ $product['best_for'] ?: ($product['short_description'] ?: 'No usage note added.') }}</div>
              @if ($featureText)
                <div class="mt-1 text-[11px] text-slate-400">{{ $featureText }}</div>
              @elseif ($specText)
                <div class="mt-1 text-[11px] text-slate-400">{{ $specText }}</div>
              @endif
              <div class="mt-4 flex items-center gap-2">
                <a href="{{ route('products.detail', ['productSlug' => $product['slug'], 'return_to' => request()->fullUrl()]) }}" class="flex h-8 w-8 items-center justify-center rounded-lg border border-slate-200 bg-slate-50 text-slate-500 transition hover:border-sky-200 hover:bg-sky-50 hover:text-sky-600" title="View product page">
                  <svg width="14" height="14" fill="none" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg>
                </a>
                <a href="{{ route('products.create', ['edit' => $product['id']]) }}" class="flex h-8 w-8 items-center justify-center rounded-lg border border-slate-200 bg-slate-50 text-slate-500 transition hover:border-amber-200 hover:bg-amber-50 hover:text-amber-600" title="Edit">
                  <svg width="14" height="14" fill="none" viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                </a>
                <button type="button" onclick="openDeleteModal('{{ $product['id'] }}', '{{ addslashes($product['name']) }}')" class="flex h-8 w-8 items-center justify-center rounded-lg border border-slate-200 bg-slate-50 text-slate-500 transition hover:border-red-200 hover:bg-red-50 hover:text-red-600" title="Delete">
                  <svg width="14" height="14" fill="none" viewBox="0 0 24 24"><polyline points="3,6 5,6 21,6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M19 6l-1 14H6L5 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M10 11v6M14 11v6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M9 6V4h6v2" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                </button>
                <div class="ml-auto text-right">
                  @if ($product['type'] === 'rent')
                    <div class="text-[12px] font-bold text-[#101828]">₹{{ number_format($product['rent_price'] ?? 0, 0) }} per {{ $product['billing_period'] ?? 'month' }}</div>
                    @if ($product['price'])
                      <div class="text-[10px] text-slate-400">Buy: ₹{{ number_format($product['price'], 0) }}</div>
                    @endif
                  @else
                    <div class="text-[12px] font-bold text-[#101828]">₹{{ number_format($product['price'] ?? 0, 0) }}</div>
                    @if ($product['rent_price'])
                      <div class="text-[10px] text-slate-400">Rent: ₹{{ number_format($product['rent_price'], 0) }} per {{ $product['billing_period'] ?? 'month' }}</div>
                    @endif
                  @endif
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>

      <div id="emptyState" class="{{ count($products) > 0 ? 'hidden ' : '' }}mt-12 flex flex-col items-center justify-center rounded-2xl border border-dashed border-slate-300 bg-white px-6 py-12 text-center">
        <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-brand-soft">
          <svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M20 7l-8-4-8 4m16 0v10l-8 4m-8-4V7m16 3l-8 4M4 10l8 4" stroke="#ef4444" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <div class="mt-4 text-[15px] font-semibold text-[#101828]">No products created yet</div>
        <div class="mt-1 text-[12.5px] text-[#4A5565]">Use the Create Product button to add a normal product or a rent product.</div>
      </div>
    </main>
  </div>
</div>

<div id="typeSelectorModal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/40 p-4 modal-overlay">
  <div class="w-full max-w-md rounded-2xl bg-white shadow-2xl">
    <div class="flex items-center justify-between border-b border-slate-100 px-6 py-4">
      <div>
        <div class="text-[15px] font-semibold text-[#101828]">Choose Product Type</div>
        <div class="text-[11.5px] text-[#4A5565]">Select how this item should be listed on your website.</div>
      </div>
      <button type="button" onclick="closeTypeSelector()" class="flex h-8 w-8 items-center justify-center rounded-lg border border-slate-200 text-slate-500 hover:bg-slate-50">
        <svg width="14" height="14" fill="none" viewBox="0 0 24 24"><path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
      </button>
    </div>
    <div class="grid gap-4 p-6 sm:grid-cols-2">
      <button type="button" onclick="openProductForm('rent')" class="rounded-2xl border border-red-200 bg-red-50 px-4 py-5 text-left transition hover:border-red-300 hover:bg-red-100">
        <div class="text-[14px] font-semibold text-[#101828]">Rent Product</div>
        <div class="mt-1 text-[12px] text-[#4A5565]">Show on rental sections with monthly or yearly rent pricing.</div>
      </button>
      <button type="button" onclick="openProductForm('product')" class="rounded-2xl border border-blue-200 bg-blue-50 px-4 py-5 text-left transition hover:border-blue-300 hover:bg-blue-100">
        <div class="text-[14px] font-semibold text-[#101828]">Product</div>
        <div class="mt-1 text-[12px] text-[#4A5565]">Show as a normal sale product on the main product section.</div>
      </button>
    </div>
  </div>
</div>

<div id="productFormModal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/40 p-4 modal-overlay">
  <div class="max-h-[92vh] w-full max-w-4xl overflow-y-auto rounded-2xl bg-white shadow-2xl">
    <div class="flex items-center justify-between border-b border-slate-100 px-6 py-4">
      <div>
        <div id="productFormTitle" class="text-[15px] font-semibold text-[#101828]">Create Product</div>
        <div class="text-[11.5px] text-[#4A5565]">Fill the product details, image, pricing, and feature list.</div>
      </div>
      <button type="button" onclick="closeProductForm()" class="flex h-8 w-8 items-center justify-center rounded-lg border border-slate-200 text-slate-500 hover:bg-slate-50">
        <svg width="14" height="14" fill="none" viewBox="0 0 24 24"><path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
      </button>
    </div>
    <form id="productForm" method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data" class="p-6">
      @csrf
      <input id="formMethodInput" type="hidden" name="_method" value="POST">
      <input id="productTypeInput" type="hidden" name="type" value="{{ $selectedType }}">

      @if ($hasFormErrors)
        <div class="mb-5 rounded-2xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
          <div class="font-semibold">Please fix the highlighted fields.</div>
          <ul class="mt-2 list-disc pl-5">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <div class="mb-5 flex flex-wrap gap-2">
        <button id="typeButtonProduct" type="button" onclick="setProductType('product')" class="rounded-full border px-4 py-2 text-sm font-medium transition">Product</button>
        <button id="typeButtonRent" type="button" onclick="setProductType('rent')" class="rounded-full border px-4 py-2 text-sm font-medium transition">Rent Product</button>
      </div>

      <div class="grid gap-4 md:grid-cols-2">
        <div class="md:col-span-2">
          <label class="mb-1.5 block text-[12px] font-medium text-[#364153]">Product Name</label>
          <input type="text" name="name" value="{{ old('name', $formProduct['name'] ?? '') }}" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-3.5 py-2.5 text-sm text-[#101828] outline-none transition focus:border-brand focus:bg-white">
        </div>

        <div>
          <label class="mb-1.5 block text-[12px] font-medium text-[#364153]">SKU</label>
          <input type="text" name="sku" value="{{ old('sku', $formProduct['sku'] ?? '') }}" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-3.5 py-2.5 text-sm text-[#101828] outline-none transition focus:border-brand focus:bg-white">
        </div>

        <div>
          <label class="mb-1.5 block text-[12px] font-medium text-[#364153]">Category</label>
          <select name="category" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-3.5 py-2.5 text-sm text-[#4A5565] outline-none transition focus:border-brand focus:bg-white">
            <option value="">Select category</option>
            @foreach ($categories as $category)
              <option value="{{ $category }}" @selected(strcasecmp((string) old('category', $formProduct['category'] ?? ''), (string) $category) === 0)>{{ $category }}</option>
            @endforeach
          </select>
        </div>

        <div>
          <label class="mb-1.5 block text-[12px] font-medium text-[#364153]">Status</label>
          <select name="status" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-3.5 py-2.5 text-sm text-[#4A5565] outline-none transition focus:border-brand focus:bg-white">
            <option value="active" @selected(old('status', $formProduct['status'] ?? 'active') === 'active')>Active</option>
            <option value="inactive" @selected(old('status', $formProduct['status'] ?? '') === 'inactive')>Inactive</option>
          </select>
        </div>

        <div>
          <label class="mb-1.5 block text-[12px] font-medium text-[#364153]">Best For</label>
          <input type="text" name="best_for" value="{{ old('best_for', $formProduct['best_for'] ?? '') }}" placeholder="Retail, corporate, events..." class="w-full rounded-xl border border-slate-200 bg-slate-50 px-3.5 py-2.5 text-sm text-[#101828] outline-none transition focus:border-brand focus:bg-white">
        </div>

        <div id="salePriceGroup">
          <label class="mb-1.5 block text-[12px] font-medium text-[#364153]">Product Price (₹)</label>
          <input type="number" step="0.01" min="0" name="price" value="{{ old('price', $formProduct['price'] ?? '') }}" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-3.5 py-2.5 text-sm text-[#101828] outline-none transition focus:border-brand focus:bg-white">
        </div>

        <div id="rentPriceGroup">
          <label class="mb-1.5 block text-[12px] font-medium text-[#364153]">Rent Price (₹)</label>
          <input type="number" step="0.01" min="0" name="rent_price" value="{{ old('rent_price', $formProduct['rent_price'] ?? '') }}" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-3.5 py-2.5 text-sm text-[#101828] outline-none transition focus:border-brand focus:bg-white">
        </div>

        <div id="billingPeriodGroup">
          <label class="mb-1.5 block text-[12px] font-medium text-[#364153]">Billing Period</label>
          <select name="billing_period" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-3.5 py-2.5 text-sm text-[#4A5565] outline-none transition focus:border-brand focus:bg-white">
            <option value="month" @selected(old('billing_period', $formProduct['billing_period'] ?? 'month') === 'month')>Month</option>
            <option value="quarter" @selected(old('billing_period', $formProduct['billing_period'] ?? '') === 'quarter')>Quarter</option>
            <option value="year" @selected(old('billing_period', $formProduct['billing_period'] ?? '') === 'year')>Year</option>
          </select>
        </div>

        <div class="md:col-span-2">
          <label class="mb-1.5 block text-[12px] font-medium text-[#364153]">Short Description</label>
          <input type="text" name="short_description" value="{{ old('short_description', $formProduct['short_description'] ?? '') }}" placeholder="Short one-line summary for cards" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-3.5 py-2.5 text-sm text-[#101828] outline-none transition focus:border-brand focus:bg-white">
        </div>

        <div class="md:col-span-2">
          <label class="mb-1.5 block text-[12px] font-medium text-[#364153]">Description</label>
          <textarea name="description" rows="4" class="w-full resize-none rounded-xl border border-slate-200 bg-slate-50 px-3.5 py-2.5 text-sm text-[#101828] outline-none transition focus:border-brand focus:bg-white">{{ old('description', $formProduct['description'] ?? '') }}</textarea>
        </div>

        <div>
          <label class="mb-1.5 block text-[12px] font-medium text-[#364153]">Features</label>
          <textarea name="features" rows="5" placeholder="One feature per line" class="w-full resize-none rounded-xl border border-slate-200 bg-slate-50 px-3.5 py-2.5 text-sm text-[#101828] outline-none transition focus:border-brand focus:bg-white">{{ old('features', isset($formProduct['features']) ? implode("\n", $formProduct['features']) : '') }}</textarea>
        </div>

        <div>
          <label class="mb-1.5 block text-[12px] font-medium text-[#364153]">Specifications</label>
          <textarea name="specifications" rows="5" placeholder="One specification per line" class="w-full resize-none rounded-xl border border-slate-200 bg-slate-50 px-3.5 py-2.5 text-sm text-[#101828] outline-none transition focus:border-brand focus:bg-white">{{ old('specifications', isset($formProduct['specifications']) ? implode("\n", $formProduct['specifications']) : '') }}</textarea>
        </div>

        <div class="md:col-span-2">
          <label class="mb-1.5 block text-[12px] font-medium text-[#364153]">Product Image</label>
          <input type="file" name="image" accept="image/*" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-3.5 py-2.5 text-sm text-[#101828] outline-none transition focus:border-brand focus:bg-white">
          @if (!empty($formProduct['image_path']))
            <div class="mt-3 flex items-center gap-3 rounded-xl border border-slate-200 bg-slate-50 p-3">
              <img src="{{ asset($formProduct['image_path']) }}" alt="{{ $formProduct['name'] }}" class="h-16 w-16 rounded-lg object-cover">
              <div class="text-xs text-[#4A5565]">Current image will stay unless you upload a new one.</div>
            </div>
          @endif
        </div>
      </div>

      <div class="mt-6 flex items-center justify-end gap-3 border-t border-slate-100 pt-4">
        <a href="{{ route('products.create') }}" class="rounded-xl border border-slate-200 bg-white px-4 py-2.5 text-[13px] font-medium text-[#4A5565] transition hover:bg-slate-50">Cancel</a>
        <button type="submit" class="rounded-xl bg-brand px-5 py-2.5 text-[13px] font-semibold text-white transition hover:bg-red-500">Save Product</button>
      </div>
    </form>
  </div>
</div>

<div id="viewProductModal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/40 p-4 modal-overlay">
  <div class="w-full max-w-lg rounded-2xl bg-white shadow-2xl">
    <div class="flex items-center justify-between border-b border-slate-100 px-6 py-4">
      <div class="text-[15px] font-semibold text-[#101828]">Product Details</div>
      <button type="button" onclick="closeViewModal()" class="flex h-8 w-8 items-center justify-center rounded-lg border border-slate-200 text-slate-500 hover:bg-slate-50">
        <svg width="14" height="14" fill="none" viewBox="0 0 24 24"><path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
      </button>
    </div>
    <div class="space-y-4 p-6">
      <div id="viewImageWrap" class="hidden overflow-hidden rounded-xl bg-slate-100">
        <img id="viewImage" src="" alt="" class="h-48 w-full object-cover">
      </div>
      <div class="space-y-2 text-[13px]">
        <div class="flex justify-between gap-4"><span class="font-medium text-[#4A5565]">Name</span><span id="viewName" class="text-right font-semibold text-[#101828]"></span></div>
        <div class="flex justify-between gap-4"><span class="font-medium text-[#4A5565]">Type</span><span id="viewType" class="text-right font-semibold text-[#101828]"></span></div>
        <div class="flex justify-between gap-4"><span class="font-medium text-[#4A5565]">SKU</span><span id="viewSku" class="text-right font-semibold text-[#101828]"></span></div>
        <div class="flex justify-between gap-4"><span class="font-medium text-[#4A5565]">Category</span><span id="viewCategory" class="text-right font-semibold text-[#101828]"></span></div>
        <div class="flex justify-between gap-4"><span class="font-medium text-[#4A5565]">Status</span><span id="viewStatus" class="text-right font-semibold text-[#101828]"></span></div>
        <div class="flex justify-between gap-4"><span class="font-medium text-[#4A5565]">Sale Price</span><span id="viewPrice" class="text-right font-semibold text-[#101828]"></span></div>
        <div class="flex justify-between gap-4"><span class="font-medium text-[#4A5565]">Rent Price</span><span id="viewRentPrice" class="text-right font-semibold text-[#101828]"></span></div>
      </div>
      <div>
        <div class="text-[12px] font-medium text-[#4A5565]">Short Description</div>
        <div id="viewShortDescription" class="mt-1 text-[13px] text-[#101828]"></div>
      </div>
      <div>
        <div class="text-[12px] font-medium text-[#4A5565]">Description</div>
        <div id="viewDescription" class="mt-1 text-[13px] text-[#101828]"></div>
      </div>
      <div>
        <div class="text-[12px] font-medium text-[#4A5565]">Features</div>
        <ul id="viewFeatures" class="mt-2 list-disc space-y-1 pl-5 text-[13px] text-[#101828]"></ul>
      </div>
      <div>
        <div class="text-[12px] font-medium text-[#4A5565]">Specifications</div>
        <ul id="viewSpecifications" class="mt-2 list-disc space-y-1 pl-5 text-[13px] text-[#101828]"></ul>
      </div>
    </div>
  </div>
</div>

<div id="deleteModal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/40 p-4 modal-overlay">
  <div class="w-full max-w-sm rounded-2xl bg-white p-6 text-center shadow-2xl">
    <div class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-2xl bg-red-50">
      <svg width="24" height="24" fill="none" viewBox="0 0 24 24"><polyline points="3,6 5,6 21,6" stroke="#ef4444" stroke-width="2" stroke-linecap="round"/><path d="M19 6l-1 14H6L5 6" stroke="#ef4444" stroke-width="2" stroke-linecap="round"/><path d="M10 11v6M14 11v6" stroke="#ef4444" stroke-width="2" stroke-linecap="round"/><path d="M9 6V4h6v2" stroke="#ef4444" stroke-width="2" stroke-linecap="round"/></svg>
    </div>
    <div class="text-[15px] font-semibold text-[#101828]">Delete Product?</div>
    <div class="mt-1.5 text-[12.5px] text-[#4A5565]">This will remove <span id="deleteProductName" class="font-semibold text-[#101828]"></span> from the admin list and the website product sections.</div>
    <form id="deleteForm" method="POST" action="" class="mt-5 flex items-center justify-center gap-3">
      @csrf
      @method('DELETE')
      <button type="button" onclick="closeDeleteModal()" class="rounded-xl border border-slate-200 bg-white px-4 py-2.5 text-[13px] font-medium text-[#4A5565] transition hover:bg-slate-50">Cancel</button>
      <button type="submit" class="rounded-xl bg-red-500 px-5 py-2.5 text-[13px] font-semibold text-white transition hover:bg-red-600">Yes, Delete</button>
    </form>
  </div>
</div>

<script>
  const typeSelectorModal = document.getElementById('typeSelectorModal');
  const productFormModal = document.getElementById('productFormModal');
  const viewProductModal = document.getElementById('viewProductModal');
  const deleteModal = document.getElementById('deleteModal');
  const productForm = document.getElementById('productForm');
  const productTypeInput = document.getElementById('productTypeInput');
  const productFormTitle = document.getElementById('productFormTitle');
  const formMethodInput = document.getElementById('formMethodInput');
  const salePriceGroup = document.getElementById('salePriceGroup');
  const rentPriceGroup = document.getElementById('rentPriceGroup');
  const billingPeriodGroup = document.getElementById('billingPeriodGroup');

  function openTypeSelector() {
    typeSelectorModal.classList.remove('hidden');
  }

  function closeTypeSelector() {
    typeSelectorModal.classList.add('hidden');
  }

  function openProductForm(type) {
    closeTypeSelector();
    setProductType(type);
    productFormModal.classList.remove('hidden');
  }

  function closeProductForm() {
    productFormModal.classList.add('hidden');
    if (new URLSearchParams(window.location.search).has('edit')) {
      window.location = '{{ route('products.create') }}';
    }
  }

  function setProductType(type) {
    productTypeInput.value = type;
    const isRent = type === 'rent';
    const productButton = document.getElementById('typeButtonProduct');
    const rentButton = document.getElementById('typeButtonRent');

    productButton.className = 'rounded-full border px-4 py-2 text-sm font-medium transition ' + (isRent ? 'border-slate-200 bg-white text-[#4A5565]' : 'border-blue-200 bg-blue-50 text-blue-700');
    rentButton.className = 'rounded-full border px-4 py-2 text-sm font-medium transition ' + (isRent ? 'border-red-200 bg-red-50 text-red-700' : 'border-slate-200 bg-white text-[#4A5565]');

    salePriceGroup.classList.toggle('opacity-60', isRent);
    rentPriceGroup.classList.toggle('opacity-60', !isRent);
    billingPeriodGroup.classList.toggle('opacity-60', !isRent);
  }

  function openViewModal(payload) {
    const product = typeof payload === 'string' ? JSON.parse(payload) : payload;
    document.getElementById('viewName').textContent = product.name;
    document.getElementById('viewType').textContent = product.type === 'rent' ? 'Rent Product' : 'Product';
    document.getElementById('viewSku').textContent = product.sku;
    document.getElementById('viewCategory').textContent = product.category;
    document.getElementById('viewStatus').textContent = product.status;
    document.getElementById('viewPrice').textContent = product.price;
    document.getElementById('viewRentPrice').textContent = product.rent_price;
    document.getElementById('viewShortDescription').textContent = product.short_description;
    document.getElementById('viewDescription').textContent = product.description;

    const featuresList = document.getElementById('viewFeatures');
    const specificationsList = document.getElementById('viewSpecifications');
    featuresList.innerHTML = '';
    specificationsList.innerHTML = '';

    (product.features || []).forEach(feature => {
      const item = document.createElement('li');
      item.textContent = feature;
      featuresList.appendChild(item);
    });

    (product.specifications || []).forEach(specification => {
      const item = document.createElement('li');
      item.textContent = specification;
      specificationsList.appendChild(item);
    });

    const imageWrap = document.getElementById('viewImageWrap');
    const image = document.getElementById('viewImage');
    if (product.image) {
      image.src = product.image;
      image.alt = product.name;
      imageWrap.classList.remove('hidden');
    } else {
      imageWrap.classList.add('hidden');
      image.src = '';
    }

    viewProductModal.classList.remove('hidden');
  }

  function closeViewModal() {
    viewProductModal.classList.add('hidden');
  }

  function openDeleteModal(productId, productName) {
    document.getElementById('deleteProductName').textContent = productName;
    document.getElementById('deleteForm').action = '{{ url('products') }}/' + productId;
    deleteModal.classList.remove('hidden');
  }

  function closeDeleteModal() {
    deleteModal.classList.add('hidden');
  }

  function filterProducts() {
    const query = document.getElementById('productSearch').value.trim().toLowerCase();
    const type = document.getElementById('typeFilter').value.trim().toLowerCase();
    const category = document.getElementById('categoryFilter').value.trim().toLowerCase();
    const status = document.getElementById('statusFilter').value.trim().toLowerCase();
    const cards = document.querySelectorAll('#productsGrid .product-card');
    let visible = 0;

    cards.forEach(card => {
      const search = card.dataset.search || card.dataset.name || '';
      const cardType = card.dataset.type;
      const cardCategory = card.dataset.category;
      const cardStatus = card.dataset.status;

      const matches = search.includes(query)
        && (type === '' || cardType === type)
        && (category === '' || cardCategory === category)
        && (status === '' || cardStatus === status);

      card.style.display = matches ? '' : 'none';
      if (matches) visible++;
    });

    document.getElementById('emptyState').classList.toggle('hidden', visible > 0 || cards.length === 0);
  }

  document.querySelectorAll('#productsGrid .product-card[data-url]').forEach(card => {
    card.addEventListener('click', function (event) {
      if (event.target.closest('a, button, input, select, textarea, form')) {
        return;
      }

      window.location.href = this.dataset.url;
    });
  });

  [typeSelectorModal, productFormModal, viewProductModal, deleteModal].forEach(modal => {
    modal.addEventListener('click', function (event) {
      if (event.target === this) {
        this.classList.add('hidden');
      }
    });
  });

  setProductType(@json($selectedType));

  @if ($editingProduct)
    productForm.action = @json(route('products.update', $editingProduct['id']));
    formMethodInput.value = 'PUT';
    productFormTitle.textContent = 'Edit Product';
  @endif

  @if ($hasFormErrors || $editingProduct)
    productFormModal.classList.remove('hidden');
  @endif
</script>
</body>
</html>
