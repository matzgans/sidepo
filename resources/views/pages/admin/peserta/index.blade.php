<x-app-layout>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mb-2 overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="flex items-center justify-between p-6">
                    <div class="text-lg font-bold text-primary_hover">Data Peserta</div>
                    <div class=""><a href="{{ route('dashboard') }}"><svg
                                class="h-6 w-16 font-extrabold text-red-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4" />
                            </svg>
                        </a></div>
                </div>
            </div>
            <div class="overflow-hidden bg-white p-6 shadow-sm sm:rounded-lg">
                <div class="mb-3 flex items-center justify-between">
                    <x-search fromAction="{{ route('admin.pesertas.index') }}" placeholder="Cari Nama / Nik"></x-search>

                    <x-addfeature link="{{ route('admin.pesertas.create') }}"></x-addfeature>
                </div>
                <div class="relative overflow-x-auto shadow-md shadow-primary sm:rounded-lg">
                    <table class="w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
                        <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th class="px-6 py-3" scope="col">
                                    Product name
                                </th>
                                <th class="px-6 py-3" scope="col">
                                    Color
                                </th>
                                <th class="px-6 py-3" scope="col">
                                    Category
                                </th>
                                <th class="px-6 py-3" scope="col">
                                    Price
                                </th>
                                <th class="px-6 py-3" scope="col">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                                <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white"
                                    scope="row">
                                    Apple MacBook Pro 17"
                                </th>
                                <td class="px-6 py-4">
                                    Silver
                                </td>
                                <td class="px-6 py-4">
                                    Laptop
                                </td>
                                <td class="px-6 py-4">
                                    $2999
                                </td>
                                <td class="px-6 py-4">
                                    <a class="font-medium text-blue-600 hover:underline dark:text-blue-500"
                                        href="#">Edit</a>
                                </td>
                            </tr>
                            <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                                <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white"
                                    scope="row">
                                    Microsoft Surface Pro
                                </th>
                                <td class="px-6 py-4">
                                    White
                                </td>
                                <td class="px-6 py-4">
                                    Laptop PC
                                </td>
                                <td class="px-6 py-4">
                                    $1999
                                </td>
                                <td class="px-6 py-4">
                                    <a class="font-medium text-blue-600 hover:underline dark:text-blue-500"
                                        href="#">Edit</a>
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white"
                                    scope="row">
                                    Magic Mouse 2
                                </th>
                                <td class="px-6 py-4">
                                    Black
                                </td>
                                <td class="px-6 py-4">
                                    Accessories
                                </td>
                                <td class="px-6 py-4">
                                    $99
                                </td>
                                <td class="px-6 py-4">
                                    <a class="font-medium text-blue-600 hover:underline dark:text-blue-500"
                                        href="#">Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
