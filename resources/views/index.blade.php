@extends('layouts.master')

@section('seo_header')
    <title>{{ __('seo.title') }}</title>
    <meta name="description" content="{{ __('seo.description') }}">

    <meta name="og:title" property="og:title" content="{{ __('seo.og:title') }}">
    <meta name="og:description" property="og:description" content="{{ __('seo.og:description') }}" />
    <meta name="og:type" property="og:type" content="website">
    <meta name="og:site_name" property="og:site_name" content="{{ url()->current() }}">
    <meta name="og:image" property="og:image" content="{{ url()->current() }}/og-img.png">
    <meta name="og:image:width" property="og:image:width" content="1200">
    <meta name="og:image:height" property="og:image:height" content="630">
    <meta name="og:image:type" property="og:image:type" content="image/png">
    <meta name="twitter:title" content="{{ __('seo.title') }}">
    <meta name="twitter:description" content="{{ __('seo.description') }}">
    <meta name="twitter:card" property="twitter:card" content="summary">
    <meta name="twitter:site" property="twitter:site" content="@YOURTWITTERNAME">
    <meta name="twitter:creator" property="twitter:creator" content="@YOURTWITTERNAME">
    <meta name="twitter:image" property="twitter:image" content="{{ url()->current() }}/og-img.png">
@endsection

@section('content')
    <section>
        <div class="relative bg-gradient-to-r from-purple-400 via-bg-deep-purple-accent-400 to-pink-500 ">
            <div class="absolute inset-x-0 bottom-0">
                <svg viewBox="0 0 224 12" fill="currentColor" class="w-full -mb-1 text-white" preserveAspectRatio="none">
                    <path
                        d="M0,0 C48.8902582,6.27314026 86.2235915,9.40971039 112,9.40971039 C137.776408,9.40971039 175.109742,6.27314026 224,0 L224,12.0441132 L0,12.0441132 L0,0 Z">
                    </path>
                </svg>
            </div>
            <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                <div class="relative max-w-2xl sm:mx-auto sm:max-w-xl md:max-w-2xl sm:text-center">
                    <h2 class="mb-6 font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none">
                        {!! __('content.quick') !!}
                    </h2>
                    <p class="mb-6 text-base text-indigo-100 md:text-lg">
                        {!! __('content.mistaken') !!}
                    </p>
                    <form class="flex flex-col items-center w-full mb-4 md:flex-row md:px-16">
                        <input placeholder="Email" required="" type="text"
                            class="flex-grow w-full h-12 px-4 mb-3 text-white transition duration-200 border-2 border-transparent rounded appearance-none md:mr-2 md:mb-0 bg-deep-purple-900 focus:border-teal-accent-700 focus:outline-none focus:shadow-outline" />
                        <a href="/"
                            class="inline-flex items-center justify-center w-full h-12 px-6 font-semibold tracking-wide text-teal-900 transition duration-200 rounded shadow-md md:w-auto hover:text-deep-purple-900 bg-teal-accent-400 hover:bg-teal-accent-700 focus:shadow-outline focus:outline-none">
                            Subscribe
                        </a>
                    </form>
                    <p class="max-w-md mb-10 text-xs tracking-wide text-indigo-100 sm:text-sm sm:mx-auto md:mb-16">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.
                    </p>
                    <a href="#brand" aria-label="Scroll down"
                        class="flex items-center justify-center w-10 h-10 mx-auto text-white duration-300 transform border border-gray-400 rounded-full hover:text-teal-accent-400 hover:border-teal-accent-400 hover:shadow hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12"
                            fill="currentColor">
                            <path
                                d="M10.293,3.293,6,7.586,1.707,3.293A1,1,0,0,0,.293,4.707l5,5a1,1,0,0,0,1.414,0l5-5a1,1,0,1,0-1.414-1.414Z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id='brand'>
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="max-w-xl sm:mx-auto lg:max-w-2xl">
                <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                    <div>
                        <p
                            class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                            Brand new
                        </p>
                    </div>
                    <h2
                        class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                        <span class="relative inline-block">
                            <svg viewBox="0 0 52 24" fill="currentColor"
                                class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                                <defs>
                                    <pattern id="70326c9b-4a0f-429b-9c76-792941e326d5" x="0" y="0" width=".135"
                                        height=".30">
                                        <circle cx="1" cy="1" r=".7"></circle>
                                    </pattern>
                                </defs>
                                <rect fill="url(#70326c9b-4a0f-429b-9c76-792941e326d5)" width="52" height="24"></rect>
                            </svg>
                            <span class="relative">The</span>
                        </span>
                        quick, brown fox jumps over a lazy dog
                    </h2>
                    <p class="text-base text-gray-700 md:text-lg">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam,
                        eaque ipsa quae.
                    </p>
                </div>
            </div>
            <div class="max-w-screen-xl sm:mx-auto">
                <div class="grid grid-cols-1 gap-16 row-gap-8 lg:grid-cols-2">
                    <div class="space-y-8">
                        <div>
                            <p class="mb-4 text-xl font-medium">
                                The quick, brown fox jumps over a lazy dog?
                            </p>
                            <p class="text-gray-700">
                                Space, the final frontier. These are the voyages of the Starship Enterprise. Its five-year
                                mission: to explore strange new worlds.<br />
                                <br />
                                Many say exploration is part of our destiny, but it’s actually our duty to future
                                generations.
                            </p>
                        </div>
                        <div>
                            <p class="mb-4 text-xl font-medium">
                                The first mate and his Skipper too will do?
                            </p>
                            <p class="text-gray-700">
                                Well, the way they make shows is, they make one show. That show's called a pilot.<br />
                                <br />
                                Then they show that show to the people who make shows, and on the strength of that one show
                                they decide if they're going to make more shows. Some pilots get picked and become
                                television programs.Some don't, become nothing. She
                                starred in one of the ones that became nothing.
                            </p>
                        </div>
                        <div>
                            <p class="mb-4 text-xl font-medium">Is the Space Pope reptilian!?</p>
                            <p class="text-gray-700">
                                A flower in my garden, a mystery in my panties. Heart attack never stopped old Big Bear. I
                                didn't even know we were calling him Big Bear.
                            </p>
                        </div>
                    </div>
                    <div class="space-y-8">
                        <div>
                            <p class="mb-4 text-xl font-medium">How much money you got on you?</p>
                            <p class="text-gray-700">
                                The first mate and his Skipper too will do their very best to make the others comfortable in
                                their tropic island nest.<br />
                                <br />
                                Michael Knight a young loner on a crusade to champion the cause of the innocent. The
                                helpless. The powerless in a world of criminals who operate above the law. Here he comes
                                Here comes Speed Racer. He's a demon on wheels.
                            </p>
                        </div>
                        <div>
                            <p class="mb-4 text-xl font-medium">
                                Galaxies Orion's sword globular star cluster?
                            </p>
                            <p class="text-gray-700">
                                A business big enough that it could be listed on the NASDAQ goes belly up. Disappears!<br />
                                <br />
                                It ceases to exist without me. No, you clearly don't know who you're talking to, so let me
                                clue you in.
                            </p>
                        </div>
                        <div>
                            <p class="mb-4 text-xl font-medium">
                                When has justice ever been as simple as a rule book?
                            </p>
                            <p class="text-gray-700">
                                This is not about revenge. This is about justice. A lot of things can change in twelve
                                years, Admiral. Well, that's certainly good to know. About four years. I got tired of
                                hearing how young I looked.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
