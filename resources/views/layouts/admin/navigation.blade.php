<nav class="border-gray-200 bg-primary dark:border-gray-700 dark:bg-gray-900">
    <div class="mx-auto flex max-w-screen-2xl flex-wrap items-center justify-between p-4">
        <div>
            <h3 class="text-3xl font-bold text-white">siDAPOG</h3>
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
                <!-- Dashboard Link -->
                <li>
                    <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </li>

                <!-- Data Master Dropdown -->
                <li>
                    <button
                        class="{{ request()->routeIs('admin.pesertas.*') ? 'text-white' : 'text-gray-200' }} flex w-full items-center justify-between rounded px-3 py-2 hover:bg-white hover:text-black dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 md:w-auto md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-white"
                        id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar">
                        Data Master
                        <svg class="ms-2.5 h-2.5 w-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>

                    <!-- Data Master Dropdown Menu -->
                    <div class="z-10 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white font-normal shadow dark:divide-gray-600 dark:bg-gray-700"
                        id="dropdownNavbar">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400">
                            <li>
                                <x-dropdown-link :href="route('admin.pesertas.index')" :active="request()->routeIs('admin.pesertas.*')">
                                    {{ __('Peserta') }}
                                </x-dropdown-link>
                            </li>
                            <li>
                                <x-dropdown-link :href="route('admin.jenis_pelatihan.index')" :active="request()->routeIs('admin.jenis_pelatihan.*')">
                                    {{ __('Jenis Pelatihan') }}
                                </x-dropdown-link>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Pelatihan Link -->
                <li>
                    <x-nav-link :href="route('admin.pelatihan.index')" :active="request()->routeIs('admin.pelatihan.*')">
                        {{ __('Pelatihan') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('admin.article.index')" :active="request()->routeIs('admin.article.*')">
                        {{ __('Artikel') }}
                    </x-nav-link>
                </li>
                <!-- User Avatar and Dropdown -->
                <div class="relative md:flex md:items-center md:space-x-4">
                    <button
                        class="flex rounded-full bg-gray-800 text-sm focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                        id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar" type="button">
                        <span class="sr-only">Open user menu</span>
                        <img class="h-8 w-8 rounded-full" src="{{ asset('photo/defaultprofile.jpg') }}"
                            alt="user photo">
                    </button>

                    <!-- User Dropdown Menu -->
                    <div class="z-10 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white shadow dark:divide-gray-600 dark:bg-gray-700"
                        id="dropdownAvatar">
                        <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                            <div class="truncate font-medium">{{ Auth::user()->email }}</div>
                        </div>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                            <li>
                                <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                    href="{{ route('profile.edit') }}">Profile</a>
                            </li>
                        </ul>
                        <div class="py-2">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
                                    href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">Sign
                                    out</a>
                            </form>
                        </div>
                    </div>
                </div>
            </ul>

        </div>

    </div>
</nav>
