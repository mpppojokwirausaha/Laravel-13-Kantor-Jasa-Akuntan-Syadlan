<!doctype html>
<html lang="id" class="scroll-smooth motion-reduce:scroll-auto">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.jpeg') }}">
    <title>{{ $title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Serif+4:opsz,wght@8..60,400;8..60,500;8..60,600;8..60,700&family=Epilogue:opsz,wght@8..144,600;8..144,700;8..144,800&family=Inter:wght@400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @include('front-end.layouts.partials.config-tailwind')
    <meta name="title" content="{{ $meta_title }}" />
    <meta name="description" content="{{ $meta_desc }}" />
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $meta_domain }}" />
    <meta property="og:title" content="{{ $meta_title }}" />
    <meta property="og:description" content="{{ $meta_desc }}" />
    <meta property="og:image" content="{{ asset('img/logo.jpeg') }}" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="{{ $meta_domain }}" />
    <meta property="twitter:title" content="{{ $meta_title }}" />
    <meta property="twitter:description" content="{{ $meta_desc }}" />
    <meta property="twitter:image" content="{{ asset('img/logo.jpeg') }}" />
</head>
