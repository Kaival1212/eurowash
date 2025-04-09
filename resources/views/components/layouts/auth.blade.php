@props(['title' => '', 'description' => '', 'keywords' => '', 'canonical' => '',
'robots' => 'index, follow'])

<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>{{ $title }}</title>

        @if ($description)
        <meta name="description" content="{{ $description }}" />
        @endif @if ($keywords)
        <meta name="keywords" content="{{ $keywords }}" />
        @endif @if ($canonical)
        <link rel="canonical" href="{{ $canonical }}" />
        @endif

        <meta name="robots" content="{{ $robots }}" />

        <!-- Optional: Open Graph Tags -->
        <meta property="og:title" content="{{ $title }}" />
        <meta property="og:description" content="{{ $description }}" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ url()->current() }}" />
        <meta
            property="og:image"
            content="{{ asset('images/seo-default.jpg') }}"
        />

        <!-- Optional: Twitter Card -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="{{ $title }}" />
        <meta name="twitter:description" content="{{ $description }}" />

        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link
            href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap"
            rel="stylesheet"
        />
        @vite(['resources/css/app.css'])
    </head>

    <body class="min-h-screen flex flex-col bg-gray-50">
        <!-- Header -->
        <x-eurowash-header />

        <!-- Main Content -->
        <main class="flex-grow">
            {{ $slot }}
        </main>

        <!-- Footer -->
        <x-eurowash-footer />

        @livewireScripts @fluxScripts
    </body>
</html>
