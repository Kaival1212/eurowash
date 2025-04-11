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

        <!-- Favicons -->
        <link
            rel="icon"
            type="image/x-icon"
            href="{{ asset('favicon.ico') }}"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="96x96"
            href="{{ asset('favicon-96x96.png') }}"
        />
        <link
            rel="icon"
            type="image/svg+xml"
            href="{{ asset('favicon.svg') }}"
        />
        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="{{ asset('apple-touch-icon.png') }}"
        />
        <link rel="manifest" href="{{ asset('site.webmanifest') }}" />
        <meta name="theme-color" content="#ffffff" />

        <!-- Open Graph / Facebook -->
        <meta property="og:title" content="{{ $title }}" />
        <meta property="og:description" content="{{ $description }}" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ url()->current() }}" />
        <meta
            property="og:image"
            content="{{ asset('web-app-manifest-512x512.png') }}"
        />

        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="{{ $title }}" />
        <meta name="twitter:description" content="{{ $description }}" />
        <meta
            name="twitter:image"
            content="{{ asset('web-app-manifest-512x512.png') }}"
        />

        <!-- AlpineJS & Fonts -->
        <script src="//unpkg.com/alpinejs" defer></script>
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link
            href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap"
            rel="stylesheet"
        />

        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Laundromat",
                "name": "Eurowash Centre",
                "image": "https://eurowash.knconsulting.uk/storage/unnamed.jpg",
                "url": "https://eurowash.knconsulting.uk",
                "telephone": "+44 1234 567890",
                "priceRange": "£",
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "123 London Road",
                    "addressLocality": "London",
                    "postalCode": "SW1A 1AA",
                    "addressCountry": "GB"
                },
                "openingHoursSpecification": [
                    {
                        "@type": "OpeningHoursSpecification",
                        "dayOfWeek": [
                            "Monday",
                            "Tuesday",
                            "Wednesday",
                            "Thursday",
                            "Friday",
                            "Saturday",
                            "Sunday"
                        ],
                        "opens": "00:00",
                        "closes": "23:59"
                    }
                ]
            }
        </script>

        @vite(['resources/css/app.css']) @livewireStyles
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
