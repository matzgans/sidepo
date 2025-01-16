<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mb-4 overflow-hidden bg-gray-100 shadow-md sm:rounded-lg">
                <div class="flex items-center justify-between rounded-t-lg bg-primary p-4 text-white">
                    <div class="text-lg font-semibold">Tambah Data Pelatihan</div>
                    <div>
                        <a class="flex items-center gap-2 text-sm font-medium hover:underline"
                            href="{{ route('admin.dashboard') }}">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H3m0 0l6-6m-6 6l6 6" />
                            </svg>
                            Kembali
                        </a>
                    </div>
                </div>
            </div>
            <div class="overflow-hidden bg-white p-6 shadow-sm sm:rounded-lg">
                @if ($errors->any())
                    <div class="mb-4 rounded-lg border border-red-300 bg-red-50 p-4 text-sm text-red-800"
                        role="alert">
                        <span class="font-medium">Mohon Perhatian:</span>
                        @foreach ($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    </div>
                @elseif(session('success'))
                    <div class="mb-4 rounded-lg border border-green-300 bg-green-50 p-4 text-sm text-green-800"
                        role="alert">
                        <span class="font-medium">{{ session('success') }}</span>
                    </div>
                @endif
                <div class="mb-3 flex items-center justify-start">

                    <x-addfeature title="Tambah Pelatihan" link="{{ route('admin.pelatihan.create') }}"></x-addfeature>
                </div>
                <div class="relative overflow-x-auto shadow-md shadow-primary sm:rounded-lg">

                    <table id="pagination-table">
                        <thead>
                            <tr>
                                <th>
                                    <span class="flex items-center">
                                        No
                                    </span>
                                </th>
                                <th>
                                    <span class="flex items-center">
                                        Jenis Pelatihan
                                    </span>
                                </th>
                                <th>
                                    <span class="flex items-center">
                                        Nama - Nama Peserta Pelatihan
                                    </span>
                                </th>
                                <th data-type="date" data-format="Month YYYY">
                                    <span class="flex items-center">
                                        Waktu Pelatihan
                                    </span>
                                </th>
                                <th data-type="date" data-format="Month YYYY">
                                    <span class="flex items-center">
                                        Nilai Standar
                                    </span>
                                </th>
                                <th>
                                    <span class="flex items-center">
                                        Aksi
                                    </span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jenis_pelatihans as $index => $jenis_pelatihan)
                                <tr>
                                    <td> {{ $index + 1 }}</td>
                                    <td class="whitespace-nowrap font-medium text-gray-900 dark:text-white">
                                        {{ $jenis_pelatihan->title }}
                                        @if ($jenis_pelatihan->is_status == 2)
                                            <svg class="inline h-6 w-6 text-green-600"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M5 13l4 4L19 7" />
                                            </svg>
                                        @endif
                                    </td>
                                    <td class="">
                                        <ol class="mt-2 list-inside list-decimal space-y-1 ps-2">
                                            @if ($jenis_pelatihan->pelatihans->isNotEmpty())
                                                @foreach ($jenis_pelatihan->pelatihans as $pelatihan)
                                                    <li class="flex items-center">{{ $pelatihan->peserta->name }}
                                                        @if ($pelatihan->is_status == 2)
                                                            <svg class="me-2 h-3.5 w-3.5 flex-shrink-0 text-green-500 dark:text-green-400"
                                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor" viewBox="0 0 20 20">
                                                                <path
                                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                                            </svg>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            @else
                                                <p class="text-red-600">Data Peserta pelatihan kosong</p>
                                            @endif
                                        </ol>
                                    </td>
                                    <td class="flex">
                                        <div>
                                            {{ \Carbon\Carbon::parse($jenis_pelatihan->pelatihan_start)->locale('id')->isoFormat('dddd D MMMM YYYY') }}
                                        </div>
                                        <span> - </span>
                                        <div>
                                            {{ \Carbon\Carbon::parse($jenis_pelatihan->pelatihan_end)->locale('id')->isoFormat('dddd D MMMM YYYY') }}
                                        </div>
                                    </td>
                                    <td>
                                        {{ $jenis_pelatihan->pelatihan_standart_value }}
                                    </td>
                                    <td>
                                        <div class="flex justify-around">
                                            <a class="font-medium text-blue-600 hover:underline dark:text-blue-500"
                                                href="{{ route('admin.pelatihan.edit', ['pelatihan' => $jenis_pelatihan->id]) }}"><svg
                                                    class="h-6 w-6 text-yellow-400 dark:text-white" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                                </svg>
                                            </a>
                                            <button class="font-medium text-blue-600 hover:underline dark:text-blue-500"
                                                data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                                                data-title="{{ $jenis_pelatihan->title }}"
                                                data-id="{{ $jenis_pelatihan->id }}" type="button"
                                                onclick="deleteData(this)"><svg
                                                    class="h-6 w-6 text-red-800 dark:text-white" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                                </svg>

                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>

            </div>
        </div>
        <div class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0"
            id="popup-modal" tabindex="-1">
            <div class="relative max-h-full w-full max-w-md p-4">
                <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                    <button
                        class="absolute end-2.5 top-3 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="popup-modal" type="button">
                        <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-4 text-center md:p-5">
                        <svg class="mx-auto mb-4 h-12 w-12 text-gray-400 dark:text-gray-200" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400" id="delete-title">Kamu
                            Akan Menghapus Data
                        </h3>
                        <form id="delete-form" action="{{ route('admin.pelatihan.destroy', ['pelatihan' => 'id']) }}"
                            method="POST">
                            @csrf
                            @method('DELETE')

                        </form>
                        <button
                            class="inline-flex items-center rounded-lg bg-red-600 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:focus:ring-red-800"
                            id="confirm-delete-button" data-modal-hide="popup-modal" type="button">
                            Yes, Hapus data
                        </button>
                        <button
                            class="ms-3 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700"
                            data-modal-hide="popup-modal" type="button">No, cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('after-scripts')
        <script>
            if (document.getElementById("pagination-table") && typeof simpleDatatables.DataTable !== 'undefined') {
                const dataTable = new simpleDatatables.DataTable("#pagination-table", {
                    paging: true,
                    perPage: 5,
                    perPageSelect: [5, 10, 15, 20, 25],
                    sortable: false
                    // labels: {
                    //     placeholder: "Cari...", // Informasi jumlah data
                    // }
                });
            }

            function deleteData(button) {

                let dataTitle = button.getAttribute("data-title");
                let dataid = button.getAttribute("data-id");
                console.log(dataid);

                let form = document.getElementById("delete-form");
                let deleteTitle = document.getElementById("delete-title").innerHTML = `Kamu Akan Menghapus data ${dataTitle}`;

                let url = form.action.replace('id', dataid); // Ganti 'id' di URL dengan dataId yang diterima
                form.action = url;

            }

            document.getElementById("confirm-delete-button").addEventListener("click", function() {
                // Submit the form
                document.getElementById("delete-form").submit();
            });
        </script>
    @endpush
</x-app-layout>
