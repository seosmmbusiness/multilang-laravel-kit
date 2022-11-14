<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('/favicon.ico') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO website information -->
    @yield('seo_header')

    <meta name="og:type" property="og:type" content="website">
    <meta name="og:site_name" property="og:site_name" content="{{ __('seo.og:site_name') }}">
    <meta name="og:image" property="og:image" content="{{ URL::asset('/og-img.png') }}">
    <meta name="og:image:width" property="og:image:width" content="1200">
    <meta name="og:image:height" property="og:image:height" content="630">
    <meta name="og:image:type" property="og:image:type" content="image/png">

    <meta name="twitter:card" property="twitter:card" content="summary">
    <meta name="twitter:site" property="twitter:site" content="@YOURTWITTERNAME">
    <meta name="twitter:creator" property="twitter:creator" content="@YOURTWITTERNAME">
    <meta name="twitter:image" property="twitter:image" content="{{ URL::asset('/og-img.png') }}">

    <!-- Multilang headers -->
    <link rel="alternate" hreflang="x-default" href="{{ LaravelLocalization::getLocalizedURL('en') }}">

    @foreach (LaravelLocalization::getSupportedLocales() as $locale => $properties)
        <link rel="alternate" hreflang="{{ $locale }}" href="{{ LaravelLocalization::getLocalizedURL($locale) }}">
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
    <!-- Preload GA -->
    {{-- Uncomment next lines for GTM --}}
    {{-- <link href="//www.googletagmanager.com" rel="preconnect">
    <link rel="dns-prefetch" href="//www.googletagmanager.com">
    <link rel="preload" href="{{ mix('/js/tagmanager.js') }}" as="script"> --}}

    <!-- Load css -->
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}" />
    <link rel="stylesheet" media="screen and (min-width: 640px)" href="/css/extracted-640.css">
    <link rel="stylesheet" media="screen and (min-width: 768px)" href="/css/extracted-768.css">
    <link rel="stylesheet" media="screen and (min-width: 1024px)" href="/css/extracted-1024.css">
    <x-header-scripts />
</head>

<body>
    <x-middle-scripts />
    <a class="skip-link" href="#maincontent">Skip to main</a>
    <noscript>
        <div class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">

                <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" aria-hidden="true"></div>

                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                <div
                    class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                    <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                            <div
                                class="flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto bg-red-100 rounded-full sm:mx-0 sm:h-10 sm:w-10">
                                <!-- Heroicon name: outline/exclamation -->
                                <svg class="w-6 h-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                            </div>
                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">
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

    <x-footer-scripts />

    <script>
        var handledCookie = false; // Was the cookie already handled?
        var cookieCheckId = undefined; // The id of the checker
        function getCookie(name) {

            var matches = document.cookie.match(new RegExp(
                "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
            ))
            return matches ? decodeURIComponent(matches[1]) : undefined
        }

        var handleCookie = function() {
            if (getCookie("laravel_cookie_consent")) {
                clearInterval(cookieCheckId); // Unset the check
                handledCookie = true; // Set the cookie handled
                @include('layouts.scriptsToRun')
            }
        };

        handleCookie();

        if (!handledCookie) {
            cookieCheckId = setInterval(handleCookie, 1000); // Handle the cookies
        }
    </script>

</body>

</html>
