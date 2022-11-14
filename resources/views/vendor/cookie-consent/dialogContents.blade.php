<div class="fixed inset-x-0 bottom-0 pb-2 js-cookie-consent cookie-consent">
    <div class="px-6 mx-auto max-w-7xl">
        <div class="p-2 rounded-lg bg-gradient-to-r from-pink-500 via-bg-deep-purple-accent-400 to-purple-400">
            <div class="content-center sm:flex sm:items-center">
                <div class="w-full sm:w-4/5">
                    <p class="ml-3 text-white cookie-consent__message">
                        {!! trans('cookie-consent::texts.message') !!}
                    </p>
                </div>
                <div class="flex items-center justify-center w-full mt-2 sm:w-1/5 sm:mt-0">
                    <a href='/'
                        class="flex items-center justify-center w-full h-12 px-6 font-semibold tracking-wide text-teal-900 transition duration-200 rounded shadow-md js-cookie-consent-agree cookie-consent__agree md:w-auto hover:text-deep-purple-900 bg-teal-accent-400 hover:bg-teal-accent-700 focus:shadow-outline focus:outline-none">
                        {{ trans('cookie-consent::texts.agree') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
