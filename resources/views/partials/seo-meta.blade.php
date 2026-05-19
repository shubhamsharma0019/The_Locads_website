@php
    $seoTitle = $title ?? 'The Locads | Digital Signage Solutions';
    $seoDescription = $description ?? 'The Locads provides digital signage products, software, support, and industry-ready display solutions for modern businesses.';
    $seoKeywords = $keywords ?? 'The Locads, digital signage, digital displays, signage software, signage hardware, smart displays, commercial displays';
    $seoRobots = $robots ?? 'index,follow';
    $seoImage = $image ?? asset('icons/locadsicon.jpeg');
    $seoType = $type ?? 'website';
    $pageTransition = $pageTransition ?? ! request()->routeIs('dashboard', 'enquiries.*', 'products.create', 'products.rentals');
@endphp
<title>{{ $seoTitle }}</title>
<meta name="description" content="{{ $seoDescription }}">
<meta name="keywords" content="{{ $seoKeywords }}">
<meta name="robots" content="{{ $seoRobots }}">
<link rel="canonical" href="{{ url()->current() }}">
<meta property="og:type" content="{{ $seoType }}">
<meta property="og:title" content="{{ $seoTitle }}">
<meta property="og:description" content="{{ $seoDescription }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:image" content="{{ $seoImage }}">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $seoTitle }}">
<meta name="twitter:description" content="{{ $seoDescription }}">
<meta name="twitter:image" content="{{ $seoImage }}">
@include('partials.responsive-guard', ['pageTransition' => $pageTransition])
