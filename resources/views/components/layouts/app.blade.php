@props(['title' => '' , 'description' => ''])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>{{ $title }}</title>

        @if ($description)
        <meta name="description" content="{{ $description }}" />
        @endif @vite(['resources/css/app.css'])

        <script>
            document
                .getElementById("mobile-menu-button")
                .addEventListener("click", function () {
                    const menu = document.getElementById("mobile-menu");
                    menu.classList.toggle("hidden");
                });
        </script>
    </head>

    <body>
        {{ $slot }}

        @fluxScripts
    </body>
</html>
