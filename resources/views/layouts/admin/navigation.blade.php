<nav class="border-gray-200 bg-primary dark:border-gray-700 dark:bg-gray-900">
    <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between p-4">
        <div>
            <h3 class="text-3xl font-bold text-white">SIDEPO</h3>
        </div>
        <button
            class="inline-flex h-10 w-10 items-center justify-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden"
            data-collapse-toggle="navbar-dropdown" type="button" aria-controls="navbar-dropdown" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
            <ul
                class="mt-4 flex flex-col rounded-lg border border-gray-100 bg-primary p-4 font-medium rtl:space-x-reverse dark:border-gray-700 dark:bg-gray-800 md:mt-0 md:flex-row md:space-x-8 md:border-0 md:bg-primary md:p-0 md:dark:bg-gray-900">
                <li>
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>

                </li>

                <li>
                    <button
                        class="{{ request()->routeIs('admin.pesertas.*') ? 'text-white' : 'text-gray-200' }} flex w-full items-center justify-between rounded px-3 py-2 hover:bg-white hover:text-black dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:focus:text-white md:w-auto md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-white md:dark:hover:bg-transparent md:dark:hover:text-blue-500"
                        id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar">Data Master <svg
                            class="ms-2.5 h-2.5 w-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div class="z-10 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white font-normal shadow dark:divide-gray-600 dark:bg-gray-700"
                        id="dropdownNavbar">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                            <li>
                                <x-dropdown-link :href="route('admin.pesertas.index')" :active="request()->routeIs('admin.pesertas.*')">
                                    {{ __('Peserta') }}
                                </x-dropdown-link>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
