<x-landing-layout>
    <div>

        <section class="bg-white dark:bg-gray-900">
            <div class="mx-auto flex max-w-7xl flex-wrap justify-between py-10 pt-24">

                <div class="mb-10 w-full lg:mb-0 lg:w-1/2">
                    <h1
                        class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 dark:text-white sm:text-5xl lg:text-6xl">
                        SIDEPO
                    </h1>
                    <p>Sistem informasi depo yang terintegrasi dengan baik dapat memberikan keuntungan yang signifikan
                        bagi perusahaan.
                        Dengan otomatisasi dan pengelolaan data yang efisien, sistem ini mampu meningkatkan efektivitas
                        operasional,
                        meningkatkan transparansi, dan mengoptimalkan keuntungan.
                    </p>
                    <div class="flex flex-col space-y-4 py-5 sm:flex-row sm:space-y-0">
                        <a class="inline-flex items-center justify-center rounded-lg bg-primary px-5 py-3 text-center text-base font-medium text-white hover:bg-primary focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900"
                            href="{{ route('login') }}">
                            Get started
                            <svg class="ms-2 h-3.5 w-3.5 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                        <a class="dark:hover:bg-gray-70 rounded-lg border border-gray-200 bg-white px-5 py-3 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:text-white dark:focus:ring-gray-700 sm:ms-4"
                            href="#">
                            Learn more
                        </a>
                    </div>
                </div>

                <div class="w-full lg:w-1/2">
                    <img class="w-full" src="{{ asset('landing/images/logoprimary.png') }}" alt="Logo Primary">
                </div>
            </div>
        </section>



        <section class="bg-white dark:bg-gray-900">
            <div class="mx-auto max-w-7xl py-8 lg:py-16">
                <div class="grid gap-8 md:grid-cols-2">
                    <div
                        class="rounded-lg border border-gray-200 bg-gray-50 p-8 dark:border-gray-700 dark:bg-gray-800 md:p-12">
                        <a class="mb-2 inline-flex items-center rounded-md bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-gray-700 dark:text-green-400"
                            href="#">
                            <svg class="me-1.5 h-2.5 w-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 18 18">
                                <path
                                    d="M17 11h-2.722L8 17.278a5.512 5.512 0 0 1-.9.722H17a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM6 0H1a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V1a1 1 0 0 0-1-1ZM3.5 15.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM16.132 4.9 12.6 1.368a1 1 0 0 0-1.414 0L9 3.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z" />
                            </svg>
                            Design
                        </a>
                        <h2 class="mb-2 text-3xl font-extrabold text-gray-900 dark:text-white">Start with Flowbite
                            Design System</h2>
                        <p class="mb-4 text-lg font-normal text-gray-500 dark:text-gray-400">Static websites are now
                            used to bootstrap lots of websites and are becoming the basis for a variety of tools that
                            even influence both web designers and developers.</p>
                        <a class="inline-flex items-center text-lg font-medium text-blue-600 hover:underline dark:text-blue-500"
                            href="#">Read more
                            <svg class="ms-2 h-3.5 w-3.5 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                    <div
                        class="rounded-lg border border-gray-200 bg-gray-50 p-8 dark:border-gray-700 dark:bg-gray-800 md:p-12">
                        <a class="mb-2 inline-flex items-center rounded-md bg-purple-100 px-2.5 py-0.5 text-xs font-medium text-purple-800 dark:bg-gray-700 dark:text-purple-400"
                            href="#">
                            <svg class="me-1.5 h-2.5 w-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 4 1 8l4 4m10-8 4 4-4 4M11 1 9 15" />
                            </svg>
                            Code
                        </a>
                        <h2 class="mb-2 text-3xl font-extrabold text-gray-900 dark:text-white">Best react libraries
                            around the web</h2>
                        <p class="mb-4 text-lg font-normal text-gray-500 dark:text-gray-400">Static websites are now
                            used to bootstrap lots of websites and are becoming the basis for a variety of tools that
                            even influence both web designers and developers.</p>
                        <a class="inline-flex items-center text-lg font-medium text-blue-600 hover:underline dark:text-blue-500"
                            href="#">Read more
                            <svg class="ms-2 h-3.5 w-3.5 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>






    </div>


</x-landing-layout>
