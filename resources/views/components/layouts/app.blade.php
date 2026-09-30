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
        <meta property="og:site_name" content="Eurowash 24 7 365" />
        <meta property="og:title" content="{{ $title }}" />
        <meta property="og:description" content="{{ $description }}" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="en_GB" />
        <meta property="og:url" content="{{ url()->current() }}" />
        <meta
            property="og:image"
            content="{{ asset('storage/eurowash-storefront.jpg') }}"
        />
        <meta property="og:image:alt" content="Eurowash 24 7 365 storefront on Whitton Road, Twickenham" />

        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="{{ $title }}" />
        <meta name="twitter:description" content="{{ $description }}" />
        <meta
            name="twitter:image"
            content="{{ asset('storage/eurowash-storefront.jpg') }}"
        />

        <!-- AlpineJS & Fonts -->
        <script src="//unpkg.com/alpinejs" defer></script>
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link
            href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800&display=swap"
            rel="stylesheet"
        />

        <!-- GSAP + ScrollTrigger -->
        <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>

        <script
            src="https://elevenlabs.io/convai-widget/index.js"
            async
            type="text/javascript"
        ></script>

        @verbatim
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type": "Organization",
                    "@id": "https://eurowashlaunderette.com/#organization",
                    "name": "Eurowash 24 7 365",
                    "alternateName": ["Eurowash", "Eurowash Centre", "Eurowash Twickenham"],
                    "url": "https://eurowashlaunderette.com",
                    "logo": {
                        "@type": "ImageObject",
                        "url": "https://eurowashlaunderette.com/storage/TitleLogo.png",
                        "width": 512,
                        "height": 512
                    },
                    "image": "https://eurowashlaunderette.com/storage/eurowash-storefront.jpg",
                    "email": "eurowashcentre@gmail.com",
                    "telephone": "+442080793035",
                    "foundingDate": "1996",
                    "sameAs": []
                },
                {
                    "@type": ["LocalBusiness", "Laundry"],
                    "@id": "https://eurowashlaunderette.com/#launderette",
                    "name": "Eurowash 24 7 365",
                    "alternateName": "Eurowash Twickenham",
                    "description": "The first 24-hour self-service launderette in South West London. Open 365 days a year with modern washing machines, tumble dryers, contactless and coin payment.",
                    "url": "https://eurowashlaunderette.com",
                    "image": [
                        "https://eurowashlaunderette.com/storage/eurowash-storefront.jpg",
                        "https://eurowashlaunderette.com/storage/washer-jla.jpg",
                        "https://eurowashlaunderette.com/storage/big-bertha.jpg"
                    ],
                    "logo": "https://eurowashlaunderette.com/storage/TitleLogo.png",
                    "telephone": "+442080793035",
                    "email": "eurowashcentre@gmail.com",
                    "priceRange": "£",
                    "paymentAccepted": "Cash, Credit Card, Debit Card, Contactless",
                    "currenciesAccepted": "GBP",
                    "address": {
                        "@type": "PostalAddress",
                        "streetAddress": "99 Whitton Road",
                        "addressLocality": "Twickenham",
                        "addressRegion": "Greater London",
                        "postalCode": "TW1 1BZ",
                        "addressCountry": "GB"
                    },
                    "geo": {
                        "@type": "GeoCoordinates",
                        "latitude": 51.453352,
                        "longitude": -0.340922
                    },
                    "hasMap": "https://maps.app.goo.gl/GfvqPK7rjGgypdJp8",
                    "openingHoursSpecification": [
                        {
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
                            "opens": "00:00",
                            "closes": "23:59"
                        }
                    ],
                    "areaServed": [
                        { "@type": "City", "name": "Twickenham" },
                        { "@type": "AdministrativeArea", "name": "London Borough of Richmond upon Thames" },
                        { "@type": "AdministrativeArea", "name": "London Borough of Hounslow" },
                        { "@type": "AdministrativeArea", "name": "London Borough of Ealing" },
                        { "@type": "AdministrativeArea", "name": "London Borough of Hammersmith and Fulham" },
                        { "@type": "City", "name": "Whitton" },
                        { "@type": "City", "name": "Isleworth" },
                        { "@type": "City", "name": "Hounslow" },
                        { "@type": "City", "name": "Hampton" },
                        { "@type": "City", "name": "Kingston upon Thames" }
                    ],
                    "makesOffer": [
                        {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "Self-service washing machines",
                                "description": "Coin, card and contactless washing machines from 9kg to 22kg capacity."
                            }
                        },
                        {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "Self-service tumble dryers",
                                "description": "Tumble dryers up to 20kg capacity for fast drying."
                            }
                        },
                        {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "Detergent and confectionery vending",
                                "description": "Detergents, hot & cold drinks and confectionery available in-store."
                            }
                        }
                    ],
                    "amenityFeature": [
                        { "@type": "LocationFeatureSpecification", "name": "CCTV monitored", "value": true },
                        { "@type": "LocationFeatureSpecification", "name": "Contactless payment", "value": true },
                        { "@type": "LocationFeatureSpecification", "name": "Open 24 hours", "value": true },
                        { "@type": "LocationFeatureSpecification", "name": "Free WiFi", "value": true }
                    ]
                },
                {
                    "@type": "WebSite",
                    "@id": "https://eurowashlaunderette.com/#website",
                    "url": "https://eurowashlaunderette.com",
                    "name": "Eurowash 24 7 365",
                    "publisher": { "@id": "https://eurowashlaunderette.com/#organization" },
                    "inLanguage": "en-GB"
                },
                {
                    "@type": "FAQPage",
                    "@id": "https://eurowashlaunderette.com/#faq",
                    "mainEntity": [
                        {
                            "@type": "Question",
                            "name": "Is Eurowash open 24 hours?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "Yes. Eurowash 24 7 365 is open 24 hours a day, 7 days a week, 365 days a year — including bank holidays. Hours may vary on RFU event days."
                            }
                        },
                        {
                            "@type": "Question",
                            "name": "Where is Eurowash launderette in Twickenham?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "Eurowash is at 99 Whitton Road, Twickenham, TW1 1BZ. We are on the B361 near Twickenham train station and Allianz Stadium (Twickenham Rugby Stadium)."
                            }
                        },
                        {
                            "@type": "Question",
                            "name": "How much does it cost to wash at Eurowash?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "Eurowash is a self-service launderette. Prices are shown on each machine and displayed in-store. Machines accept coins, cards and contactless payment. Detergents can be purchased in-store."
                            }
                        },
                        {
                            "@type": "Question",
                            "name": "What size loads can Eurowash machines handle?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "Washing machines range from 9kg up to 22kg — including Big Bertha, our giant capacity washer for duvets, sports kits and bulky loads. Tumble dryers handle up to 20kg. Machines are suitable for domestic and commercial laundry."
                            }
                        },
                        {
                            "@type": "Question",
                            "name": "Does Eurowash accept contactless and card payment?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "Yes. Every washing machine and tumble dryer accepts cash, contactless, debit and credit card. Customers can also exchange bank notes for coins in-store."
                            }
                        },
                        {
                            "@type": "Question",
                            "name": "Is Eurowash a safe place to do laundry at night?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "Yes. Eurowash 24 7 365 is monitored virtually by CCTV and in person, including regular night patrols. The premises are cleaned daily."
                            }
                        },
                        {
                            "@type": "Question",
                            "name": "Where can I park near Eurowash Twickenham?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "Whitton Road sits in a Controlled Parking Zone (08:30–18:30, Mon–Sat, excluding bank holidays). Pay & Display bays are available on Whitton Road, Chudleigh Road and Erncroft Way. Restrictions may vary on RFU event days."
                            }
                        }
                    ]
                }
            ]
        }
        </script>
        @endverbatim

        @vite(['resources/css/app.css']) @livewireStyles
    </head>

    <body class="bg-gray-50 text-gray-800 scroll-smooth antialiased">
        <!-- Header -->
        <x-eurowash-header />

        <!-- Main Content -->
        <main class="flex-grow">
            {{ $slot }}
            <elevenlabs-convai
                agent-id="agent_01jw1x0zt3fjhrkjfnt6j1be7e"
            ></elevenlabs-convai>
            <script
                src="https://unpkg.com/@elevenlabs/convai-widget-embed"
                async
                type="text/javascript"
            ></script>
        </main>

        <!-- Footer -->
        <x-eurowash-footer />
        @livewireScripts @fluxScripts
    </body>
</html>
