<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="grid grid-cols-1 gap-6 p-6 md:grid-cols-3 lg:grid-cols-3">


            <!-- Card 3: Jumlah Tenaga Kerja -->
            <div class="rounded-xl bg-gradient-to-r from-yellow-500 via-orange-500 to-red-500 p-1 shadow-lg">
                <div class="rounded-xl bg-white p-6 text-gray-800">
                    <div class="flex items-center space-x-4">
                        <div class="rounded-full bg-yellow-500 p-4 text-white shadow-lg">
                            <!-- Replace with an appropriate icon -->
                            <svg class="h-8 w-8 text-white dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                    d="M16 19h4a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-2m-2.236-4a3 3 0 1 0 0-4M3 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>

                        </div>
                        <div>
                            <h4 class="text-nowrap text-lg font-semibold">Peserta</h4>
                            <p class="text-3xl font-bold text-yellow-600">{{ $count_pesertas }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 3: Jumlah Tenaga Kerja -->
            <div class="rounded-xl bg-gradient-to-r from-yellow-500 via-orange-500 to-red-500 p-1 shadow-lg">
                <div class="rounded-xl bg-white p-6 text-gray-800">
                    <div class="flex items-center space-x-4">
                        <div class="rounded-full bg-yellow-500 p-4 text-white shadow-lg">
                            <!-- Replace with an appropriate icon -->
                            <svg class="h-8 w-8 text-white dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M21 13v-2a1 1 0 0 0-1-1h-.757l-.707-1.707.535-.536a1 1 0 0 0 0-1.414l-1.414-1.414a1 1 0 0 0-1.414 0l-.536.535L14 4.757V4a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v.757l-1.707.707-.536-.535a1 1 0 0 0-1.414 0L4.929 6.343a1 1 0 0 0 0 1.414l.536.536L4.757 10H4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h.757l.707 1.707-.535.536a1 1 0 0 0 0 1.414l1.414 1.414a1 1 0 0 0 1.414 0l.536-.535 1.707.707V20a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-.757l1.707-.708.536.536a1 1 0 0 0 1.414 0l1.414-1.414a1 1 0 0 0 0-1.414l-.535-.536.707-1.707H20a1 1 0 0 0 1-1Z" />
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                            </svg>

                        </div>
                        <div>
                            <h4 class="text-nowrap text-lg font-semibold">Jumlah Pelatihan</h4>
                            <p class="text-3xl font-bold text-yellow-600">{{ $count_jenis_pelatihans }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 3: Jumlah Tenaga Kerja -->
            <div class="rounded-xl bg-gradient-to-r from-yellow-500 via-orange-500 to-red-500 p-1 shadow-lg">
                <div class="rounded-xl bg-white p-6 text-gray-800">
                    <div class="flex items-center space-x-4">
                        <div class="rounded-full bg-yellow-500 p-4 text-white shadow-lg">
                            <!-- Replace with an appropriate icon -->
                            <svg class="h-8 w-8 text-white dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="m7.171 12.906-2.153 6.411 2.672-.89 1.568 2.34 1.825-5.183m5.73-2.678 2.154 6.411-2.673-.89-1.568 2.34-1.825-5.183M9.165 4.3c.58.068 1.153-.17 1.515-.628a1.681 1.681 0 0 1 2.64 0 1.68 1.68 0 0 0 1.515.628 1.681 1.681 0 0 1 1.866 1.866c-.068.58.17 1.154.628 1.516a1.681 1.681 0 0 1 0 2.639 1.682 1.682 0 0 0-.628 1.515 1.681 1.681 0 0 1-1.866 1.866 1.681 1.681 0 0 0-1.516.628 1.681 1.681 0 0 1-2.639 0 1.681 1.681 0 0 0-1.515-.628 1.681 1.681 0 0 1-1.867-1.866 1.681 1.681 0 0 0-.627-1.515 1.681 1.681 0 0 1 0-2.64c.458-.361.696-.935.627-1.515A1.681 1.681 0 0 1 9.165 4.3ZM14 9a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z" />
                            </svg>

                        </div>
                        <div>
                            <h4 class="text-nowrap text-lg font-semibold">Telah Pelatihan</h4>
                            <p class="text-3xl font-bold text-yellow-600">{{ $count_telah_pelatihans }}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</x-app-layout>
