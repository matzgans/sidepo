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
                            <svg class="h-8 w-8" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M3 14h18"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-nowrap text-lg font-semibold">Peserta</h4>
                            <p class="text-3xl font-bold text-yellow-600">98</p>
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
                            <svg class="h-8 w-8" aria-hidden="true" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M3 14h18"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-nowrap text-lg font-semibold">Jumlah Pelatihan</h4>
                            <p class="text-3xl font-bold text-yellow-600">98</p>
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
                            <svg class="h-8 w-8" aria-hidden="true" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M3 14h18"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-nowrap text-lg font-semibold">Telah Pelatihan</h4>
                            <p class="text-3xl font-bold text-yellow-600">98</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</x-app-layout>
