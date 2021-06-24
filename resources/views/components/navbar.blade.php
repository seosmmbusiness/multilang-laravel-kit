<nav class="px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
    <div class="relative flex items-center justify-between">
        <div class="flex items-center">
            <a href="{{ LaravelLocalization::localizeUrl('/') }}" aria-label="Company" title="Company"
                class="inline-flex items-center mr-8">
                <svg width="32" height="32" class="w-8 text-deep-purple-accent-400" viewBox="0 0 24 24"
                    stroke-linejoin="round" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10"
                    stroke="currentColor" fill="none">
                    <rect x="3" y="1" width="7" height="12"></rect>
                    <rect x="3" y="17" width="7" height="6"></rect>
                    <rect x="14" y="1" width="7" height="6"></rect>
                    <rect x="14" y="11" width="7" height="12"></rect>
                </svg>
                <span class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase">Company</span>
            </a>
            <ul class="items-center hidden space-x-8 lg:flex">
                <li x-data="{ isOpen: false }">
                    <button type="button" aria-label="Open item" title="Open item"
                        class="flex items-center justify-between w-full focus:outline-none">
                        <p
                            class="text-left font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">
                            {{ __('nav.products') }}</p>
                        <div @click="isOpen = !isOpen" class="flex items-center justify-center w-8 h-8 ">
                            <!-- Add "transform rotate-180" classes on svg, if is open" -->

                            <svg :class="{'transform rotate-180 transition-transform duration-200': isOpen, 'transform rotate-0 transition-transform duration-200': !isOpen}"
                                viewBox="0 0 24 24"
                                class="w-3 text-gray-600 transition-transform duration-200 transform rotate-180">
                                <polyline fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-miterlimit="10" points="2,7 12,17 22,7" stroke-linejoin="round"></polyline>
                            </svg>
                        </div>
                    </button>

                    <div class="p-4 pb-0 z-10 absolute" style="display:none" x-show="isOpen"
                        @click.away="isOpen = false">
                        <ul class="space-y-4 p-5 bg-white border rounded shadow-sm">
                            <li>
                                <a href="/" aria-label="Our product" title="Our product one"
                                    class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Product
                                    One</a>
                            </li>
                            <li>
                                <a href="/" aria-label="Our product" title="Our product two"
                                    class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Product
                                    Two</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a href="/" aria-label="Our product" title="Our product"
                        class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">{{ __('nav.features') }}</a>
                </li>
                <li><a href="/" aria-label="Product pricing" title="Product pricing"
                        class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">{{ __('nav.pricing') }}</a>
                </li>
                <li><a href="/" aria-label="About us" title="About us"
                        class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">{{ __('nav.about') }}</a>
                </li>
            </ul>
        </div>
        <ul class="items-center hidden space-x-8 lg:flex">
            <li><a href="/" aria-label="Sign in" title="Sign in"
                    class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Sign
                    in</a></li>
            <li>
                <a href="/"
                    class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
                    aria-label="Sign up" title="Sign up">
                    Sign up
                </a>
            </li>
        </ul>
        <!-- Mobile menu -->
        <div class="lg:hidden" x-data="{ open: false }">
            <button aria-label="Open Menu" title="Open Menu" @click='open = true'
                class="p-2 -mr-1 transition duration-200 rounded focus:outline-none focus:shadow-outline hover:bg-deep-purple-50 focus:bg-deep-purple-50">
                <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M23,13H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,13,23,13z">
                    </path>
                    <path fill="currentColor" d="M23,6H1C0.4,6,0,5.6,0,5s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,6,23,6z">
                    </path>
                    <path fill="currentColor" d="M23,20H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,20,23,20z">
                    </path>
                </svg>
            </button>
            <!-- Mobile menu dropdown -->
            <div class="z-10 absolute top-0 left-0 w-full" style="display:none" x-show="open">
                <div class="p-5 bg-white border rounded shadow-sm">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <a href="{{ LaravelLocalization::localizeUrl('/') }}" aria-label="Company" title="Company"
                                class="inline-flex items-center">
                                <svg class="w-8 text-deep-purple-accent-400" viewBox="0 0 24 24" stroke-linejoin="round"
                                    stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor"
                                    fill="none">
                                    <rect x="3" y="1" width="7" height="12"></rect>
                                    <rect x="3" y="17" width="7" height="6"></rect>
                                    <rect x="14" y="1" width="7" height="6"></rect>
                                    <rect x="14" y="11" width="7" height="12"></rect>
                                </svg>
                                <span
                                    class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase">Company</span>
                            </a>
                        </div>
                        <div>
                            <button aria-label="Close Menu" title="Close Menu" @click='open = false'
                                class="p-2 -mt-2 -mr-2 transition duration-200 rounded hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M19.7,4.3c-0.4-0.4-1-0.4-1.4,0L12,10.6L5.7,4.3c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l6.3,6.3l-6.3,6.3 c-0.4,0.4-0.4,1,0,1.4C4.5,19.9,4.7,20,5,20s0.5-0.1,0.7-0.3l6.3-6.3l6.3,6.3c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3 c0.4-0.4,0.4-1,0-1.4L13.4,12l6.3-6.3C20.1,5.3,20.1,4.7,19.7,4.3z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <nav>
                        <ul class="space-y-4">
                            <li x-data="{ isOpen: false }">
                                <button type="button" aria-label="Open item" title="Open item"
                                    class="flex items-center justify-between w-full focus:outline-none">
                                    <p
                                        class="text-left font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">
                                        Products</p>
                                    <div @click="isOpen = !isOpen" class="flex items-center justify-center w-8 h-8 ">
                                        <!-- Add "transform rotate-180" classes on svg, if is open" -->

                                        <svg :class="{'transform rotate-180 transition-transform duration-200': isOpen, 'transform rotate-0 transition-transform duration-200': !isOpen}"
                                            viewBox="0 0 24 24"
                                            class="w-3 text-gray-600 transition-transform duration-200 transform rotate-180">
                                            <polyline fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-miterlimit="10" points="2,7 12,17 22,7"
                                                stroke-linejoin="round"></polyline>
                                        </svg>
                                    </div>
                                </button>

                                <div class="p-4 pb-0" x-show="isOpen">
                                    <ul class="space-y-4">
                                        <li>
                                            <a href="/" aria-label="Our product" title="Our product one"
                                                class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Product
                                                One</a>
                                        </li>
                                        <li>
                                            <a href="/" aria-label="Our product" title="Our product two"
                                                class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Product
                                                Two</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="/" aria-label="Our product" title="Our product"
                                    class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Features</a>

                            </li>
                            <li><a href="/" aria-label="Product pricing" title="Product pricing"
                                    class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Pricing</a>
                            </li>
                            <li><a href="/" aria-label="About us" title="About us"
                                    class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">About
                                    us</a></li>
                            <li><a href="/" aria-label="Sign in" title="Sign in"
                                    class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Sign
                                    in</a></li>
                            <li>
                                <a href="/"
                                    class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
                                    aria-label="Sign up" title="Sign up">
                                    Sign up
                                </a>
                            </li>
                            <li x-data @custom-event.window="window.location.href=$event.detail.value">
                                <p
                                    class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">
                                    Change Language</p><select id="localeMobile" class="capitalize pl-4 pr-8 py-0"
                                    name="locale" x-data
                                    @change="$dispatch('custom-event', {value: $event.target.value })">
                                    @foreach (LaravelLocalization::getSupportedLocales() as $locale => $properties)
                                        <option
                                            value={{ LaravelLocalization::getLocalizedURL($locale, null, [], true) }}
                                            {{ app()->getLocale() == $locale ? 'selected' : '' }}>
                                            {{ $properties['native'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</nav>
