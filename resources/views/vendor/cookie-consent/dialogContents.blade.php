<div class="js-cookie-consent cookie-consent fixed bottom-0 inset-x-0 pb-2">
    <div class="max-w-7xl mx-auto px-6">
        <div class="p-2 rounded-lg bg-gradient-to-r from-pink-500 via-bg-deep-purple-accent-400 to-purple-400">
            <div class="sm:flex sm:items-center content-center">
                <div class="w-full sm:w-4/5">
                    <p class="ml-3 text-white cookie-consent__message">
                        {!! trans('cookie-consent::texts.message') !!}
                    </p>
                </div>
                <div class="mt-2 w-full sm:w-1/5 flex items-center justify-center sm:mt-0">
                    <a
                        class="js-cookie-consent-agree cookie-consent__agree flex items-center justify-center w-full h-12 px-6 font-semibold tracking-wide text-teal-900 transition duration-200 rounded shadow-md md:w-auto hover:text-deep-purple-900 bg-teal-accent-400 hover:bg-teal-accent-700 focus:shadow-outline focus:outline-none">
                        {{ trans('cookie-consent::texts.agree') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
