<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO website information -->
    @yield('seo_header')

    <!-- Multilang headers -->
    <link rel="alternate" hreflang="x-default" href="{{ LaravelLocalization::getLocalizedURL('en') }}">

    @foreach (LaravelLocalization::getSupportedLocales() as $locale => $properties)
        <link rel="alternate" hreflang="{{ $locale }}"
            href="{{ LaravelLocalization::getLocalizedURL($locale) }}">
        @if (LaravelLocalization::getCurrentLocale() != $locale)
            <meta property="og:locale:alternate" content="{{ $locale }}">
        @endif
        @if (LaravelLocalization::getCurrentLocale() == $locale)
            <meta name="og:url" property="og:url" content="{{ LaravelLocalization::getLocalizedURL($locale) }}">
            <link rel="canonical" href="{{ LaravelLocalization::getLocalizedURL($locale) }}">
        @endif
    @endforeach

    <!-- Preload -->
    <!-- <link rel="preconnect" href="https://cdnjs.cloudflare.com" /> -->
    <link rel="preload" href="{{ mix('/css/app.css') }}" as="style">
    <link rel="preload" media="screen and (min-width: 640px)" href="/css/extracted-640.css" as="style">
    <link rel="preload" media="screen and (min-width: 768px)" href="/css/extracted-768.css" as="style">
    <link rel="preload" media="screen and (min-width: 1024px)" href="/css/extracted-1024.css" as="style">
    <link rel="preload" href="{{ mix('/js/app.js') }}" as="script">

    <!-- Load css -->
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}" />
    <link rel="stylesheet" media="screen and (min-width: 640px)" href="/css/extracted-640.css">
    <link rel="stylesheet" media="screen and (min-width: 768px)" href="/css/extracted-768.css">
    <link rel="stylesheet" media="screen and (min-width: 1024px)" href="/css/extracted-1024.css">

</head>

<body>
    <a class="skip-link" href="#maincontent">Skip to main</a>
    <noscript>
        <div class="fixed z-50 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                <div
                    class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                            <div
                                class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                <!-- Heroicon name: outline/exclamation -->
                                <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                            </div>
                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                    JavaScript is <b>not</b> supported.
                                </h3>
                                <div class="mt-2">
                                    <p class="text-sm text-gray-500">
                                        You need to have Javascript enabled to use this site. Javascript is cool ....
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </noscript>
    <header>
        <x-navbar />
    </header>
    <main id="maincontent">
        @yield('content')
    </main>

    <footer>
        <x-footer />
    </footer>
    <!-- Fonts Can be used but will slow website. Better use SVG
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
        integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ=="
        crossorigin="anonymous"></script>
    -->
    <!-- Load JS -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</body>

</html>
