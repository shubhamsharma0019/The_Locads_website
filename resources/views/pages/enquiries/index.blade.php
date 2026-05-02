<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  @include('partials.seo-meta', [
      'title' => 'Enquiries | The Locads CRM',
      'description' => 'Internal The Locads enquiry management page for sell, rent, and ticket enquiries.',
      'keywords' => 'enquiry management, The Locads CRM, sell enquiry, rental enquiry, ticket enquiry',
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
  @php
    $currentType = request('type');
    $sidebarActiveClass = 'bg-brand text-white transition hover:bg-red-500';
    $sidebarInactiveClass = 'text-[#4A5565] transition hover:bg-slate-50 hover:text-[#101828]';
    $isTicketActive = $currentType === 'ticket';
  @endphp
  <style>
    .enquiry-card { transition: box-shadow 0.18s, border-color 0.18s, transform 0.18s; }
    .enquiry-card:hover { box-shadow: 0 8px 28px rgba(242,72,72,0.10); border-color: #fecaca; transform: translateY(-2px); }
    .badge-sell { background: #dbeafe; color: #1d4ed8; }
    .badge-rent { background: #fee2e2; color: #b91c1c; }
    .badge-ticket { background: #fef3c7; color: #b45309; }
    .modal-overlay { backdrop-filter: blur(4px); }
  </style>
</head>
<body class="bg-[#F9FAFB] font-sans text-[#364153]">
<div class="flex h-screen overflow-hidden bg-[#F9FAFB]">
  <aside class="hidden w-[234px] shrink-0 flex-col overflow-y-auto border-r border-slate-200 bg-white md:flex">
    <div class="border-b border-slate-100 px-4 pb-3 pt-5">
      <div class="flex items-center justify-center">
        <img src="{{ asset('icons/locadsicon.svg') }}" alt="TheLocads Logo" class="h-auto w-full max-w-[140px] object-contain">
      </div>
    </div>

    <nav class="mt-2 flex flex-1 flex-col gap-0.5 px-2.5 py-2.5">
      <a href="{{ route('dashboard') }}" class="flex items-center gap-3 rounded-lg px-3.5 py-2.5 text-[13.5px] font-medium text-[#4A5565] transition hover:bg-slate-50 hover:text-[#101828]">
        <svg class="h-[17px] w-[17px] shrink-0" viewBox="0 0 24 24" fill="none"><rect x="3" y="3" width="7" height="7" rx="1.5" stroke="currentColor" stroke-width="2"/><rect x="14" y="3" width="7" height="7" rx="1.5" stroke="currentColor" stroke-width="2"/><rect x="3" y="14" width="7" height="7" rx="1.5" stroke="currentColor" stroke-width="2"/><rect x="14" y="14" width="7" height="7" rx="1.5" stroke="currentColor" stroke-width="2"/></svg>
        Dashboard
      </a>
      <a href="{{ route('enquiries.index') }}" class="flex items-center gap-3 rounded-lg px-3.5 py-2.5 text-[13.5px] font-medium {{ $isTicketActive ? $sidebarInactiveClass : $sidebarActiveClass }}">
        <svg class="h-[17px] w-[17px] shrink-0" viewBox="0 0 24 24" fill="none"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
        Enquiry
      </a>
      <a href="{{ route('enquiries.index', ['type' => 'ticket']) }}" class="flex items-center gap-3 rounded-lg px-3.5 py-2.5 text-[13.5px] font-medium {{ $isTicketActive ? $sidebarActiveClass : $sidebarInactiveClass }}">
        <svg class="h-[17px] w-[17px] shrink-0" viewBox="0 0 24 24" fill="none"><path d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
        Ticket Enquiry
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
        <button type="submit" class="flex w-full items-center gap-3 rounded-lg px-3.5 py-2.5 text-[13.5px] font-medium text-red-500 transition hover:bg-red-50 hover:text-red-600">
          <svg class="h-[17px] w-[17px] shrink-0" viewBox="0 0 24 24" fill="none"><path d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
          Logout
        </button>
      </form>
    </nav>
  </aside>

  <div class="flex min-w-0 flex-1 flex-col overflow-hidden">
    <header class="flex h-16 shrink-0 items-center justify-between border-b border-slate-200 bg-white px-4 sm:px-6">
      <div class="flex flex-1 items-center pr-4 max-w-[820px]">
        <div class="relative w-full">
          <svg class="absolute left-4 top-1/2 h-4 w-4 -translate-y-1/2 text-slate-400" fill="none" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2"/><path d="M21 21l-4.35-4.35" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
          <input id="enquirySearch" oninput="filterEnquiries()" class="w-full rounded-2xl border border-slate-200 bg-slate-50 py-3 pl-11 pr-4 text-sm text-[#4A5565] outline-none transition focus:border-brand focus:bg-white" placeholder="Search enquiries, email, company or source..."/>
        </div>
      </div>
      <div class="flex items-center gap-2">
        <span class="text-sm font-medium text-gray-700">{{ auth()->user()->name }}</span>
        <div class="flex h-9 w-9 items-center justify-center rounded-full bg-brand text-[12px] font-semibold text-white">
          {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
        </div>
      </div>
    </header>

    <main class="flex-1 overflow-y-auto bg-[#F9FAFB] p-4 sm:p-6">
      <div class="mb-6 flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
        <div>
          <h1 class="text-[21px] font-semibold tracking-[-0.02em] text-[#101828]">Enquiries</h1>
          <p class="mt-1 text-[12.5px] text-[#4A5565]">Track sell, rent, and ticket enquiries live from the contact forms.</p>
          @if (session('enquiry_updated'))
            <p class="mt-2 text-[12.5px] font-semibold text-green-600">Enquiry updated and synced with database.</p>
          @endif
        </div>
        <a href="{{ route('enquiries.index') }}" class="inline-flex items-center justify-center gap-2 rounded-xl bg-brand px-4 py-2.5 text-[13.5px] font-semibold text-white shadow-sm transition hover:bg-red-500">
          <svg width="15" height="15" fill="none" viewBox="0 0 24 24"><path d="M21 12a9 9 0 10-2.64 6.36" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M21 3v6h-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          Refresh Data
        </a>
      </div>

      <div class="mb-5 grid grid-cols-2 gap-3 xl:grid-cols-4">
        <div class="rounded-xl border border-slate-200 bg-white px-4 py-3 shadow-soft">
          <div class="text-[11px] font-medium uppercase tracking-wide text-[#4A5565]">Total</div>
          <div class="mt-1 text-[22px] font-bold text-[#101828]">{{ $stats['total'] }}</div>
        </div>
        <div class="rounded-xl border border-slate-200 bg-white px-4 py-3 shadow-soft">
          <div class="text-[11px] font-medium uppercase tracking-wide text-[#4A5565]">Sell</div>
          <div class="mt-1 text-[22px] font-bold text-blue-600">{{ $stats['sell'] }}</div>
        </div>
        <div class="rounded-xl border border-slate-200 bg-white px-4 py-3 shadow-soft">
          <div class="text-[11px] font-medium uppercase tracking-wide text-[#4A5565]">Rent</div>
          <div class="mt-1 text-[22px] font-bold text-red-500">{{ $stats['rent'] }}</div>
        </div>
        <div class="rounded-xl border border-slate-200 bg-white px-4 py-3 shadow-soft">
          <div class="text-[11px] font-medium uppercase tracking-wide text-[#4A5565]">Ticket</div>
          <div class="mt-1 text-[22px] font-bold text-amber-600">{{ $stats['ticket'] }}</div>
        </div>
      </div>

      <div class="mb-5 flex flex-wrap items-center gap-3">
        <select id="typeFilter" onchange="filterEnquiries()" class="rounded-xl border border-slate-200 bg-white px-3 py-2.5 text-sm text-[#4A5565] outline-none focus:border-brand">
          <option value="">All Types</option>
          <option value="sell">Sell Enquiry</option>
          <option value="rent">Rental Enquiry</option>
          <option value="ticket">Ticket Enquiry</option>
        </select>
        <select id="sourceFilter" onchange="filterEnquiries()" class="rounded-xl border border-slate-200 bg-white px-3 py-2.5 text-sm text-[#4A5565] outline-none focus:border-brand">
          <option value="">All Sources</option>
          @foreach ($sources as $source)
            <option value="{{ $source }}">{{ ucfirst(str_replace('-', ' ', $source)) }}</option>
          @endforeach
        </select>
      </div>

      <div id="enquiriesGrid" class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4">
        @foreach ($enquiries as $enquiry)
          @php
            $fullName = trim($enquiry['first_name'] . ' ' . $enquiry['last_name']);
            $messagePreview = \Illuminate\Support\Str::limit($enquiry['message'], 90);
            $typeLabel = $enquiry['enquiry_type'] === 'rent' ? 'Rental Enquiry' : ($enquiry['enquiry_type'] === 'ticket' ? 'Ticket Enquiry' : 'Sell Enquiry');
            $typeClass = $enquiry['enquiry_type'] === 'rent' ? 'badge-rent' : ($enquiry['enquiry_type'] === 'ticket' ? 'badge-ticket' : 'badge-sell');
            $viewPayload = [
              'id' => $enquiry['id'],
              'name' => $fullName,
              'email' => $enquiry['email'],
              'company_name' => $enquiry['company_name'] ?: 'Not shared',
              'source_page' => ucfirst(str_replace('-', ' ', $enquiry['source_page'])),
              'type' => $typeLabel,
              'message' => $enquiry['message'],
              'created_at' => $enquiry['created_at'] ?: 'Not available',
            ];
            $editPayload = [
              'action' => route('enquiries.update', $enquiry['id']),
              'first_name' => $enquiry['first_name'],
              'last_name' => $enquiry['last_name'],
              'email' => $enquiry['email'],
              'company_name' => $enquiry['company_name'] ?? '',
              'source_page' => $enquiry['source_page'],
              'enquiry_type' => $enquiry['enquiry_type'],
              'message' => $enquiry['message'],
            ];
          @endphp
          <div class="enquiry-card overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-soft" data-name="{{ strtolower($fullName) }}" data-email="{{ strtolower($enquiry['email']) }}" data-company="{{ strtolower($enquiry['company_name'] ?? '') }}" data-source="{{ strtolower($enquiry['source_page']) }}" data-type="{{ $enquiry['enquiry_type'] }}">
            <div class="border-b border-slate-100 bg-gradient-to-br from-slate-50 to-red-50 px-4 py-4">
              <div class="flex items-start justify-between gap-3">
                <div>
                  <div class="text-[14px] font-semibold leading-snug text-[#101828]">{{ $fullName }}</div>
                  <div class="mt-1 text-[11.5px] text-[#4A5565]">{{ $enquiry['email'] }}</div>
                </div>
                <span class="rounded-full px-2.5 py-0.5 text-[11px] font-semibold {{ $typeClass }}">{{ $typeLabel }}</span>
              </div>
            </div>
            <div class="p-4">
              <div class="text-[11px] font-medium uppercase tracking-wide text-slate-400">Company</div>
              <div class="mt-1 text-[12.5px] font-medium text-[#101828]">{{ $enquiry['company_name'] ?: 'Not shared' }}</div>
              <div class="mt-3 text-[11px] font-medium uppercase tracking-wide text-slate-400">Source</div>
              <div class="mt-1 text-[12px] text-[#4A5565]">{{ ucfirst(str_replace('-', ' ', $enquiry['source_page'])) }}</div>
              <div class="mt-3 text-[11px] font-medium uppercase tracking-wide text-slate-400">Message</div>
              <div class="mt-1 min-h-[56px] text-[12px] leading-5 text-[#4A5565]">{{ $messagePreview }}</div>
              <div class="mt-4 flex items-center justify-between gap-2">
                <div class="flex items-center gap-2">
                  <button type="button" onclick="openEnquiryModal(@js($viewPayload))" class="flex h-8 items-center gap-2 rounded-lg border border-slate-200 bg-slate-50 px-3 text-[11.5px] font-medium text-slate-600 transition hover:border-sky-200 hover:bg-sky-50 hover:text-sky-600">
                    <svg width="14" height="14" fill="none" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg>
                    View
                  </button>
                  <button type="button" onclick="openEditEnquiryModal(@js($editPayload))" class="flex h-8 items-center gap-2 rounded-lg border border-slate-200 bg-white px-3 text-[11.5px] font-medium text-slate-600 transition hover:border-amber-200 hover:bg-amber-50 hover:text-amber-600">
                    <svg width="14" height="14" fill="none" viewBox="0 0 24 24"><path d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4 4 0 01-1.897 1.13L6 18l.8-2.685a4 4 0 011.13-1.897l8.932-8.931z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    Edit
                  </button>
                </div>
                <div class="text-right">
                  <div class="text-[10px] uppercase tracking-wide text-slate-400">Received</div>
                  <div class="text-[11.5px] font-medium text-[#101828]">{{ $enquiry['created_at'] }}</div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>

      <div id="emptyState" class="{{ count($enquiries) > 0 ? 'hidden ' : '' }}mt-12 flex flex-col items-center justify-center rounded-2xl border border-dashed border-slate-300 bg-white px-6 py-12 text-center">
        <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-brand-soft">
          <svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" stroke="#ef4444" stroke-width="1.5" stroke-linecap="round"/></svg>
        </div>
        <div class="mt-4 text-[15px] font-semibold text-[#101828]">No enquiries yet</div>
        <div class="mt-1 text-[12.5px] text-[#4A5565]">New sell, rental, and ticket enquiries from the contact forms will appear here automatically.</div>
      </div>
    </main>
  </div>
</div>

<div id="enquiryEditModal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/40 p-4 modal-overlay">
  <div class="max-h-[92vh] w-full max-w-2xl overflow-y-auto rounded-2xl bg-white shadow-2xl">
    <div class="flex items-center justify-between border-b border-slate-100 px-6 py-4">
      <div>
        <div class="text-[15px] font-semibold text-[#101828]">Edit Enquiry</div>
        <div class="text-[11.5px] text-[#4A5565]">Changes are saved directly to the database.</div>
      </div>
      <button type="button" onclick="closeEditEnquiryModal()" class="flex h-8 w-8 items-center justify-center rounded-lg border border-slate-200 text-slate-500 hover:bg-slate-50">
        <svg width="14" height="14" fill="none" viewBox="0 0 24 24"><path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
      </button>
    </div>
    <form id="enquiryEditForm" method="POST" action="#" class="grid gap-4 p-6 md:grid-cols-2">
      @csrf
      @method('PUT')
      <input type="hidden" name="type" value="{{ request('type') }}">
      <input type="hidden" name="source" value="{{ request('source') }}">
      <div>
        <label for="editFirstName" class="text-[11px] font-medium uppercase tracking-wide text-slate-400">First Name</label>
        <input id="editFirstName" name="first_name" class="mt-1 w-full rounded-xl border border-slate-200 px-3 py-2.5 text-sm outline-none focus:border-brand" required maxlength="100">
      </div>
      <div>
        <label for="editLastName" class="text-[11px] font-medium uppercase tracking-wide text-slate-400">Last Name</label>
        <input id="editLastName" name="last_name" class="mt-1 w-full rounded-xl border border-slate-200 px-3 py-2.5 text-sm outline-none focus:border-brand" required maxlength="100">
      </div>
      <div>
        <label for="editEmail" class="text-[11px] font-medium uppercase tracking-wide text-slate-400">Email</label>
        <input id="editEmail" name="email" type="email" class="mt-1 w-full rounded-xl border border-slate-200 px-3 py-2.5 text-sm outline-none focus:border-brand" required maxlength="255">
      </div>
      <div>
        <label for="editCompany" class="text-[11px] font-medium uppercase tracking-wide text-slate-400">Company</label>
        <input id="editCompany" name="company_name" class="mt-1 w-full rounded-xl border border-slate-200 px-3 py-2.5 text-sm outline-none focus:border-brand" maxlength="255">
      </div>
      <div>
        <label for="editSource" class="text-[11px] font-medium uppercase tracking-wide text-slate-400">Source</label>
        <input id="editSource" name="source_page" class="mt-1 w-full rounded-xl border border-slate-200 px-3 py-2.5 text-sm outline-none focus:border-brand" required maxlength="50">
      </div>
      <div>
        <label for="editType" class="text-[11px] font-medium uppercase tracking-wide text-slate-400">Type</label>
        <select id="editType" name="enquiry_type" class="mt-1 w-full rounded-xl border border-slate-200 bg-white px-3 py-2.5 text-sm outline-none focus:border-brand" required>
          <option value="sell">Sell Enquiry</option>
          <option value="rent">Rental Enquiry</option>
          <option value="ticket">Ticket Enquiry</option>
        </select>
      </div>
      <div class="md:col-span-2">
        <label for="editMessage" class="text-[11px] font-medium uppercase tracking-wide text-slate-400">Message</label>
        <textarea id="editMessage" name="message" rows="5" class="mt-1 w-full rounded-2xl border border-slate-200 px-3 py-2.5 text-sm leading-6 outline-none focus:border-brand" required maxlength="2000"></textarea>
      </div>
      <div class="flex justify-end gap-2 md:col-span-2">
        <button type="button" onclick="closeEditEnquiryModal()" class="rounded-xl border border-slate-200 bg-white px-4 py-2.5 text-[13px] font-medium text-[#4A5565] transition hover:bg-slate-50">Cancel</button>
        <button type="submit" class="rounded-xl bg-brand px-4 py-2.5 text-[13px] font-semibold text-white transition hover:bg-red-500">Save Changes</button>
      </div>
    </form>
  </div>
</div>

<div id="enquiryViewModal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/40 p-4 modal-overlay">
  <div class="max-h-[92vh] w-full max-w-2xl overflow-y-auto rounded-2xl bg-white shadow-2xl">
    <div class="flex items-center justify-between border-b border-slate-100 px-6 py-4">
      <div>
        <div class="text-[15px] font-semibold text-[#101828]">Enquiry Details</div>
        <div class="text-[11.5px] text-[#4A5565]">Read the full message and metadata from the contact form.</div>
      </div>
      <button type="button" onclick="closeEnquiryModal()" class="flex h-8 w-8 items-center justify-center rounded-lg border border-slate-200 text-slate-500 hover:bg-slate-50">
        <svg width="14" height="14" fill="none" viewBox="0 0 24 24"><path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
      </button>
    </div>
    <div class="grid gap-4 p-6 md:grid-cols-2">
      <div>
        <div class="text-[11px] font-medium uppercase tracking-wide text-slate-400">Name</div>
        <div id="modalName" class="mt-1 text-[14px] font-semibold text-[#101828]">-</div>
      </div>
      <div>
        <div class="text-[11px] font-medium uppercase tracking-wide text-slate-400">Email</div>
        <div id="modalEmail" class="mt-1 text-[14px] font-semibold text-[#101828]">-</div>
      </div>
      <div>
        <div class="text-[11px] font-medium uppercase tracking-wide text-slate-400">Company</div>
        <div id="modalCompany" class="mt-1 text-[13px] text-[#4A5565]">-</div>
      </div>
      <div>
        <div class="text-[11px] font-medium uppercase tracking-wide text-slate-400">Type</div>
        <div id="modalType" class="mt-1 text-[13px] text-[#4A5565]">-</div>
      </div>
      <div>
        <div class="text-[11px] font-medium uppercase tracking-wide text-slate-400">Source</div>
        <div id="modalSource" class="mt-1 text-[13px] text-[#4A5565]">-</div>
      </div>
      <div>
        <div class="text-[11px] font-medium uppercase tracking-wide text-slate-400">Received</div>
        <div id="modalCreatedAt" class="mt-1 text-[13px] text-[#4A5565]">-</div>
      </div>
      <div class="md:col-span-2">
        <div class="text-[11px] font-medium uppercase tracking-wide text-slate-400">Message</div>
        <div id="modalMessage" class="mt-1 rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-[13px] leading-6 text-[#4A5565]">-</div>
      </div>
    </div>
  </div>
</div>

<script>
  function filterEnquiries() {
    const search = (document.getElementById('enquirySearch').value || '').trim().toLowerCase();
    const type = document.getElementById('typeFilter').value;
    const source = document.getElementById('sourceFilter').value.toLowerCase();
    const cards = document.querySelectorAll('#enquiriesGrid > div');
    let visibleCount = 0;

    cards.forEach((card) => {
      const haystack = [
        card.dataset.name || '',
        card.dataset.email || '',
        card.dataset.company || '',
        card.dataset.source || ''
      ].join(' ');
      const matchesSearch = !search || haystack.includes(search);
      const matchesType = !type || card.dataset.type === type;
      const matchesSource = !source || card.dataset.source === source;
      const shouldShow = matchesSearch && matchesType && matchesSource;

      card.classList.toggle('hidden', !shouldShow);
      if (shouldShow) visibleCount++;
    });

    document.getElementById('emptyState').classList.toggle('hidden', visibleCount > 0);
  }

  function applyUrlFilters() {
    const params = new URLSearchParams(window.location.search);
    const type = params.get('type');
    const source = params.get('source');
    const allowedTypes = ['sell', 'rent', 'ticket'];

    if (type && allowedTypes.includes(type)) {
      document.getElementById('typeFilter').value = type;
    }

    if (source) {
      document.getElementById('sourceFilter').value = source.toLowerCase();
    }

    filterEnquiries();
  }

  function openEnquiryModal(enquiry) {
    document.getElementById('modalName').textContent = enquiry.name || '-';
    document.getElementById('modalEmail').textContent = enquiry.email || '-';
    document.getElementById('modalCompany').textContent = enquiry.company_name || '-';
    document.getElementById('modalType').textContent = enquiry.type || '-';
    document.getElementById('modalSource').textContent = enquiry.source_page || '-';
    document.getElementById('modalCreatedAt').textContent = enquiry.created_at || '-';
    document.getElementById('modalMessage').textContent = enquiry.message || '-';
    document.getElementById('enquiryViewModal').classList.remove('hidden');
    document.body.classList.add('overflow-hidden');
  }

  function closeEnquiryModal() {
    document.getElementById('enquiryViewModal').classList.add('hidden');
    document.body.classList.remove('overflow-hidden');
  }

  function openEditEnquiryModal(enquiry) {
    document.getElementById('enquiryEditForm').action = enquiry.action;
    document.getElementById('editFirstName').value = enquiry.first_name || '';
    document.getElementById('editLastName').value = enquiry.last_name || '';
    document.getElementById('editEmail').value = enquiry.email || '';
    document.getElementById('editCompany').value = enquiry.company_name || '';
    document.getElementById('editSource').value = enquiry.source_page || '';
    document.getElementById('editType').value = enquiry.enquiry_type || 'sell';
    document.getElementById('editMessage').value = enquiry.message || '';
    document.getElementById('enquiryEditModal').classList.remove('hidden');
    document.body.classList.add('overflow-hidden');
  }

  function closeEditEnquiryModal() {
    document.getElementById('enquiryEditModal').classList.add('hidden');
    document.body.classList.remove('overflow-hidden');
  }

  document.getElementById('enquiryViewModal').addEventListener('click', (event) => {
    if (event.target.id === 'enquiryViewModal') {
      closeEnquiryModal();
    }
  });

  document.getElementById('enquiryEditModal').addEventListener('click', (event) => {
    if (event.target.id === 'enquiryEditModal') {
      closeEditEnquiryModal();
    }
  });

  applyUrlFilters();
</script>
</body>
</html>
