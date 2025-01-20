<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard Pimpinan') }}
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
                            <h4 class="text-nowrap text-lg font-semibold">Peserta Potensi</h4>
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
                            <h4 class="text-nowrap text-lg font-semibold">Jumlah Pelatihan Potensi</h4>
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
                            <h4 class="text-nowrap text-lg font-semibold">Yang Telah Meyelesaikan Pelatihan</h4>
                            <p class="text-3xl font-bold text-yellow-600">{{ $count_telah_pelatihans }}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="mx-5 grid grid-cols-3 gap-3 p-5">
            <div class="w-full shadow-lg" id="bar-chart"></div>
            <div class="w-full shadow-lg" id="bar-chart-jk"></div>
            <div class="w-full shadow-lg" id="pie-chart-status"></div>
        </div>

        <div class="grid-col-12 grid">
            <div class="bg-gray-100 text-gray-900">
                <div class="container mx-auto text-center">
                    <h2 class="mb-8 text-3xl font-bold">Peserta Pelatihan Potensi</h2>
                    <div class="mx-5 bg-white p-5 shadow-lg">
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
                                            Waktu Pelatihan
                                        </span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jenis_pelatihans as $index => $jenis_pelatihan)
                                    <tr>
                                        <td> {{ $index + 1 }}</td>
                                        <td class="whitespace-nowrap font-medium text-gray-900 dark:text-white">
                                            {{ $jenis_pelatihan->title }}</td>
                                        <td class="">
                                            <ol class="mt-2 list-inside list-decimal space-y-1 ps-2">
                                                @if ($jenis_pelatihan->pelatihans->isNotEmpty())
                                                    @foreach ($jenis_pelatihan->pelatihans as $pelatihan)
                                                        @php
                                                            // Menghitung total skor
                                                            $total_score =
                                                                $pelatihan->score_absensi +
                                                                $pelatihan->score_tugas +
                                                                $pelatihan->score_test;
                                                            // Membandingkan dengan nilai standar
                                                            $status =
                                                                $total_score >=
                                                                $jenis_pelatihan->pelatihan_standart_value
                                                                    ? 'Lulus'
                                                                    : 'Tidak Lulus';
                                                        @endphp
                                                        <li class="flex">
                                                            {{ $pelatihan->peserta->name }} -
                                                            <span
                                                                class="text-{{ $status == 'Lulus' ? 'green' : 'red' }}-600 font-bold">
                                                                {{ $status }}
                                                            </span>
                                                            <button class="ms-3 flex" data-modal-target="progress-modal"
                                                                data-modal-toggle="progress-modal"
                                                                data-name="{{ $pelatihan->peserta->name }}"
                                                                data-absensi="{{ $pelatihan->score_absensi }}"
                                                                data-tugas="{{ $pelatihan->score_tugas }}"
                                                                data-test="{{ $pelatihan->score_test }}"
                                                                type="button">
                                                                Detail Nilai
                                                                <svg class="h-[19px] w-[19px] text-gray-800 dark:text-white"
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" fill="blue" viewBox="0 0 24 24">
                                                                    <path fill-rule="evenodd"
                                                                        d="M4.998 7.78C6.729 6.345 9.198 5 12 5c2.802 0 5.27 1.345 7.002 2.78a12.713 12.713 0 0 1 2.096 2.183c.253.344.465.682.618.997.14.286.284.658.284 1.04s-.145.754-.284 1.04a6.6 6.6 0 0 1-.618.997 12.712 12.712 0 0 1-2.096 2.183C17.271 17.655 14.802 19 12 19c-2.802 0-5.27-1.345-7.002-2.78a12.712 12.712 0 0 1-2.096-2.183 6.6 6.6 0 0 1-.618-.997C2.144 12.754 2 12.382 2 12s.145-.754.284-1.04c.153-.315.365-.653.618-.997A12.714 12.714 0 0 1 4.998 7.78ZM12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                                                        clip-rule="evenodd" />
                                                                </svg>
                                                            </button>


                                                        </li>
                                                    @endforeach
                                                @else
                                                    <p class="text-red-600">Data Peserta pelatihan kosong</p>
                                                @endif
                                            </ol>
                                        </td>
                                        <td class="whitespace-nowrap font-medium text-gray-900 dark:text-white">
                                            {{ $jenis_pelatihan->pelatihan_standart_value }}</td>
                                        <td class="flex">
                                            <div>
                                                {{ \Carbon\Carbon::parse($jenis_pelatihan->pelatihan_start)->locale('id')->isoFormat('dddd D MMMM YYYY') }}
                                            </div>
                                            <span> - </span>
                                            <div>
                                                {{ \Carbon\Carbon::parse($jenis_pelatihan->pelatihan_end)->locale('id')->isoFormat('dddd D MMMM YYYY') }}
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0"
        id="progress-modal" aria-hidden="true" tabindex="-1">
        <div class="relative max-h-full w-full max-w-md p-4">
            <!-- Modal content -->
            <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                <button
                    class="absolute end-2.5 top-3 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="progress-modal" type="button">
                    <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5">
                    <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Detail Nilai</h3>
                    <p class="mb-4 text-gray-500 dark:text-gray-400">
                        Nama Peserta: <span class="font-bold text-gray-900 dark:text-white" id="modal-name"></span>
                    </p>
                    <ul class="list-disc pl-5 text-gray-500 dark:text-gray-400">
                        <li>Nilai Absensi: <span class="font-bold text-gray-900 dark:text-white"
                                id="modal-absensi"></span></li>
                        <li>Nilai Tugas: <span class="font-bold text-gray-900 dark:text-white"
                                id="modal-tugas"></span></li>
                        <li>Nilai Test: <span class="font-bold text-gray-900 dark:text-white" id="modal-test"></span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    @push('after-scripts')
        <script>
            // handle detail nilai
            document.addEventListener('DOMContentLoaded', () => {
                const buttons = document.querySelectorAll('[data-modal-toggle="progress-modal"]');

                buttons.forEach(button => {
                    button.addEventListener('click', () => {
                        const name = button.getAttribute('data-name');
                        const absensi = button.getAttribute('data-absensi');
                        const tugas = button.getAttribute('data-tugas');
                        const test = button.getAttribute('data-test');

                        document.getElementById('modal-name').textContent = name;
                        document.getElementById('modal-absensi').textContent = absensi;
                        document.getElementById('modal-tugas').textContent = tugas;
                        document.getElementById('modal-test').textContent = test;
                    });
                });
            });
        </script>
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
            if (document.getElementById("export-table") && typeof simpleDatatables.DataTable !== 'undefined') {

                const exportCustomCSV = function(dataTable, userOptions = {}) {
                    // A modified CSV export that includes a row of minuses at the start and end.
                    const clonedUserOptions = {
                        ...userOptions
                    }
                    clonedUserOptions.download = false
                    const csv = simpleDatatables.exportCSV(dataTable, clonedUserOptions)
                    // If CSV didn't work, exit.
                    if (!csv) {
                        return false
                    }
                    const defaults = {
                        download: true,
                        lineDelimiter: "\n",
                        columnDelimiter: ";"
                    }
                    const options = {
                        ...defaults,
                        ...clonedUserOptions
                    }
                    const separatorRow = Array(dataTable.data.headings.filter((_heading, index) => !dataTable.columns
                            .settings[index]?.hidden).length)
                        .fill("+")
                        .join("+"); // Use "+" as the delimiter

                    const str = separatorRow + options.lineDelimiter + csv + options.lineDelimiter + separatorRow;


                    // console.log(link);
                    if (userOptions.download) {


                        // Create a link to trigger the download
                        const link = document.createElement("a");
                        link.href = encodeURI("data:text/csv;charset=utf-8," + str);
                        link.download = "data-pelatihan.txt";

                        // Append the link
                        document.body.appendChild(link);
                        // Trigger the download
                        link.click();
                        // Remove the link
                        document.body.removeChild(link);
                    }

                    return str
                }
                const table = new simpleDatatables.DataTable("#export-table", {
                    template: (options, dom) => "<div class='" + options.classes.top + "'>" +
                        "<div class='flex flex-col sm:flex-row sm:items-center space-y-4 sm:space-y-0 sm:space-x-3 rtl:space-x-reverse w-full sm:w-auto'>" +
                        (options.paging && options.perPageSelect ?
                            "<div class='" + options.classes.dropdown + "'>" +
                            "<label>" +
                            "<select class='" + options.classes.selector + "'></select> " + options.labels.perPage +
                            "</label>" +
                            "</div>" : ""
                        ) +
                        "<button id='exportDropdownButton' type='button' class='flex w-full items-center justify-center rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto'>" +
                        "Export as" +
                        "<svg class='-me-0.5 ms-1.5 h-4 w-4' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='none' viewBox='0 0 24 24'>" +
                        "<path stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m19 9-7 7-7-7' />" +
                        "</svg>" +
                        "</button>" +
                        "<div id='exportDropdown' class='z-10 hidden w-52 divide-y divide-gray-100 rounded-lg bg-white shadow dark:bg-gray-700' data-popper-placement='bottom'>" +
                        "<ul class='p-2 text-left text-sm font-medium text-gray-500 dark:text-gray-400' aria-labelledby='exportDropdownButton'>" +
                        "<li>" +
                        "<button id='export-csv' class='group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white'>" +
                        "<svg class='me-1.5 h-4 w-4 text-gray-400 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='currentColor' viewBox='0 0 24 24'>" +
                        "<path fill-rule='evenodd' d='M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2 2 2 0 0 0 2 2h12a2 2 0 0 0 2-2 2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2V4a2 2 0 0 0-2-2h-7Zm1.018 8.828a2.34 2.34 0 0 0-2.373 2.13v.008a2.32 2.32 0 0 0 2.06 2.497l.535.059a.993.993 0 0 0 .136.006.272.272 0 0 1 .263.367l-.008.02a.377.377 0 0 1-.018.044.49.49 0 0 1-.078.02 1.689 1.689 0 0 1-.297.021h-1.13a1 1 0 1 0 0 2h1.13c.417 0 .892-.05 1.324-.279.47-.248.78-.648.953-1.134a2.272 2.272 0 0 0-2.115-3.06l-.478-.052a.32.32 0 0 1-.285-.341.34.34 0 0 1 .344-.306l.94.02a1 1 0 1 0 .043-2l-.943-.02h-.003Zm7.933 1.482a1 1 0 1 0-1.902-.62l-.57 1.747-.522-1.726a1 1 0 0 0-1.914.578l1.443 4.773a1 1 0 0 0 1.908.021l1.557-4.773Zm-13.762.88a.647.647 0 0 1 .458-.19h1.018a1 1 0 1 0 0-2H6.647A2.647 2.647 0 0 0 4 13.647v1.706A2.647 2.647 0 0 0 6.647 18h1.018a1 1 0 1 0 0-2H6.647A.647.647 0 0 1 6 15.353v-1.706c0-.172.068-.336.19-.457Z' clip-rule='evenodd'/>" +
                        "</svg>" +
                        "<span>Export CSV</span>" +
                        "</button>" +
                        "</li>" +
                        "<li>" +
                        "<button id='export-json' class='group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white'>" +
                        "<svg class='me-1.5 h-4 w-4 text-gray-400 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='currentColor' viewBox='0 0 24 24'>" +
                        "<path fill-rule='evenodd' d='M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7Zm-.293 9.293a1 1 0 0 1 0 1.414L9.414 14l1.293 1.293a1 1 0 0 1-1.414 1.414l-2-2a1 1 0 0 1 0-1.414l2-2a1 1 0 0 1 1.414 0Zm2.586 1.414a1 1 0 0 1 1.414-1.414l2 2a1 1 0 0 1 0 1.414l-2 2a1 1 0 0 1-1.414-1.414L14.586 14l-1.293-1.293Z' clip-rule='evenodd'/>" +
                        "</svg>" +
                        "<span>Export JSON</span>" +
                        "</button>" +
                        "</li>" +
                        "<li>" +
                        "<button id='export-txt' class='group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white'>" +
                        "<svg class='me-1.5 h-4 w-4 text-gray-400 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='currentColor' viewBox='0 0 24 24'>" +
                        "<path fill-rule='evenodd' d='M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7ZM8 16a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm1-5a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H9Z' clip-rule='evenodd'/>" +
                        "</svg>" +
                        "<span>Export TXT</span>" +
                        "</button>" +
                        "</li>" +
                        "<li>" +
                        "<button id='export-sql' class='group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white'>" +
                        "<svg class='me-1.5 h-4 w-4 text-gray-400 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='currentColor' viewBox='0 0 24 24'>" +
                        "<path d='M12 7.205c4.418 0 8-1.165 8-2.602C20 3.165 16.418 2 12 2S4 3.165 4 4.603c0 1.437 3.582 2.602 8 2.602ZM12 22c4.963 0 8-1.686 8-2.603v-4.404c-.052.032-.112.06-.165.09a7.75 7.75 0 0 1-.745.387c-.193.088-.394.173-.6.253-.063.024-.124.05-.189.073a18.934 18.934 0 0 1-6.3.998c-2.135.027-4.26-.31-6.3-.998-.065-.024-.126-.05-.189-.073a10.143 10.143 0 0 1-.852-.373 7.75 7.75 0 0 1-.493-.267c-.053-.03-.113-.058-.165-.09v4.404C4 20.315 7.037 22 12 22Zm7.09-13.928a9.91 9.91 0 0 1-.6.253c-.063.025-.124.05-.189.074a18.935 18.935 0 0 1-6.3.998c-2.135.027-4.26-.31-6.3-.998-.065-.024-.126-.05-.189-.074a10.163 10.163 0 0 1-.852-.372 7.816 7.816 0 0 1-.493-.268c-.055-.03-.115-.058-.167-.09V12c0 .917 3.037 2.603 8 2.603s8-1.686 8-2.603V7.596c-.052.031-.112.059-.165.09a7.816 7.816 0 0 1-.745.386Z'/>" +
                        "</svg>" +
                        "<span>Export SQL</span>" +
                        "</button>" +
                        "</li>" +
                        "</ul>" +
                        "</div>" + "</div>" +
                        (options.searchable ?
                            "<div class='" + options.classes.search + "'>" +
                            "<input class='" + options.classes.input + "' placeholder='" + options.labels.placeholder +
                            "' type='search' title='" + options.labels.searchTitle + "'" + (dom.id ?
                                " aria-controls='" + dom.id + "'" : "") + ">" +
                            "</div>" : ""
                        ) +
                        "</div>" +
                        "<div class='" + options.classes.container + "'" + (options.scrollY.length ?
                            " style='height: " + options.scrollY + "; overflow-Y: auto;'" : "") + "></div>" +
                        "<div class='" + options.classes.bottom + "'>" +
                        (options.paging ?
                            "<div class='" + options.classes.info + "'></div>" : ""
                        ) +
                        "<nav class='" + options.classes.pagination + "'></nav>" +
                        "</div>"
                })
                const $exportButton = document.getElementById("exportDropdownButton");
                const $exportDropdownEl = document.getElementById("exportDropdown");
                const dropdown = new Dropdown($exportDropdownEl, $exportButton);
                // console.log(dropdown)

                document.getElementById("export-csv").addEventListener("click", () => {
                    simpleDatatables.exportCSV(table, {
                        download: true,
                        lineDelimiter: "\n",
                        columnDelimiter: ";"
                    })
                })
                document.getElementById("export-sql").addEventListener("click", () => {
                    simpleDatatables.exportSQL(table, {
                        download: true,
                        tableName: "export_table"
                    })
                })
                document.getElementById("export-txt").addEventListener("click", () => {
                    simpleDatatables.exportTXT(table, {
                        download: true
                    })
                })
                document.getElementById("export-json").addEventListener("click", () => {
                    simpleDatatables.exportJSON(table, {
                        download: true,
                        space: 3
                    })
                })
            } // Data retrieved from https://gs.statcounter.com/browser-market-share#monthly-202201-202201-bar
            // higchart 1
            const data = @json($data_bar_chart); // Mengonversi data PHP ke format JSON yang dapat digunakan di JavaScript

            // Bar-Chart-Data-jumlah-pelatihan 
            const chartData = data.map(item => ({
                name: item.title,
                y: item.jumlah_peserta
            }));

            Highcharts.chart("bar-chart", {
                chart: {
                    type: "column",
                },
                title: {
                    text: "Jumlah Peserta Pada Masing - Masing Pelatihan",
                },
                subtitle: {
                    text: "Jumlah Peserta Pada Masing - Masing Pelatihan",
                },
                accessibility: {
                    announceNewData: {
                        enabled: true,
                    },
                },
                xAxis: {
                    type: "category",
                },
                yAxis: {
                    title: {
                        text: "Total Peserta",
                    },
                },
                exporting: {
                    enabled: true, // Mengaktifkan tombol export
                    buttons: {
                        contextButton: {
                            menuItems: ['downloadPNG', 'downloadJPEG', 'downloadPDF', 'downloadSVG']
                        }
                    }
                },
                legend: {
                    enabled: false,
                },
                plotOptions: {
                    series: {
                        borderWidth: 0,
                        dataLabels: {
                            enabled: true,
                            format: "{point.y}",
                        },
                    },
                },
                tooltip: {
                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: ' +
                        "<b>{point.y}</b> of total<br/>",
                },
                series: [{
                    name: "Pelatihan",
                    colorByPoint: true,
                    data: chartData, // Menggunakan data yang telah diproses
                }],
            });
            // Bar-Chart-Data-peserta-jk
            const data_pie_jk = @json($data_pie_chart_jk);

            const chartDataPie = data_pie_jk.map(item => ({
                name: item.title,
                y: item.jumlah_peserta
            }));


            (function(H) {
                H.seriesTypes.pie.prototype.animate = function(init) {
                    const series = this,
                        chart = series.chart,
                        points = series.points,
                        {
                            animation
                        } = series.options,
                        {
                            startAngleRad
                        } = series;

                    function fanAnimate(point, startAngleRad) {
                        const graphic = point.graphic,
                            args = point.shapeArgs;

                        if (graphic && args) {

                            graphic
                                // Set initial animation values
                                .attr({
                                    start: startAngleRad,
                                    end: startAngleRad,
                                    opacity: 1
                                })
                                // Animate to the final position
                                .animate({
                                    start: args.start,
                                    end: args.end
                                }, {
                                    duration: animation.duration / points.length
                                }, function() {
                                    // On complete, start animating the next point
                                    if (points[point.index + 1]) {
                                        fanAnimate(points[point.index + 1], args.end);
                                    }
                                    // On the last point, fade in the data labels, then apply the inner size
                                    if (point.index === series.points.length - 1) {
                                        series.dataLabelsGroup.animate({
                                                opacity: 1
                                            },
                                            void 0,
                                            function() {
                                                points.forEach(point => {
                                                    point.opacity = 1;
                                                });
                                                series.update({
                                                    enableMouseTracking: true
                                                }, false);
                                                chart.update({
                                                    plotOptions: {
                                                        pie: {
                                                            innerSize: '40%',
                                                            borderRadius: 8
                                                        }
                                                    }
                                                });
                                            });
                                    }
                                });
                        }
                    }

                    if (init) {
                        // Hide points on init
                        points.forEach(point => {
                            point.opacity = 0;
                        });
                    } else {
                        fanAnimate(points[0], startAngleRad);
                    }
                };
            }(Highcharts));

            Highcharts.chart('bar-chart-jk', {
                chart: {
                    type: 'pie'
                },
                title: {
                    text: 'Jumlah Peserta Menurut Jenis Kelamin'
                },
                subtitle: {
                    text: 'Data Ini di urutkan sesuai Jenis Kelamin'
                },
                tooltip: {
                    headerFormat: '',
                    pointFormat: '<span style="color:{point.color}">\u25cf</span> ' +
                        '{point.name}: <b>{point.y}</b>'
                },
                accessibility: {
                    point: {
                        valueSuffix: ''
                    }
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        borderWidth: 2,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b><br>{point.y}',
                            distance: 20
                        }
                    }
                },
                series: [{

                    enableMouseTracking: false,
                    animation: {
                        duration: 2000
                    },
                    colorByPoint: true,
                    data: chartDataPie // data yang telah dikirim dari controller
                }]
            });

            // Bar-Chart-status-pelatihan
            const data_pie_status = @json($data_pie_chart_status);


            const chartDataPieStatus = data_pie_status.map(item => ({
                name: item.status,
                y: item.Jumlah
            }));


            (function(H) {
                H.seriesTypes.pie.prototype.animate = function(init) {
                    const series = this,
                        chart = series.chart,
                        points = series.points,
                        {
                            animation
                        } = series.options,
                        {
                            startAngleRad
                        } = series;

                    function fanAnimate(point, startAngleRad) {
                        const graphic = point.graphic,
                            args = point.shapeArgs;

                        if (graphic && args) {

                            graphic
                                // Set initial animation values
                                .attr({
                                    start: startAngleRad,
                                    end: startAngleRad,
                                    opacity: 1
                                })
                                // Animate to the final position
                                .animate({
                                    start: args.start,
                                    end: args.end
                                }, {
                                    duration: animation.duration / points.length
                                }, function() {
                                    // On complete, start animating the next point
                                    if (points[point.index + 1]) {
                                        fanAnimate(points[point.index + 1], args.end);
                                    }
                                    // On the last point, fade in the data labels, then apply the inner size
                                    if (point.index === series.points.length - 1) {
                                        series.dataLabelsGroup.animate({
                                                opacity: 1
                                            },
                                            void 0,
                                            function() {
                                                points.forEach(point => {
                                                    point.opacity = 1;
                                                });
                                                series.update({
                                                    enableMouseTracking: true
                                                }, false);
                                                chart.update({
                                                    plotOptions: {
                                                        pie: {
                                                            innerSize: '40%',
                                                            borderRadius: 8
                                                        }
                                                    }
                                                });
                                            });
                                    }
                                });
                        }
                    }

                    if (init) {
                        // Hide points on init
                        points.forEach(point => {
                            point.opacity = 0;
                        });
                    } else {
                        fanAnimate(points[0], startAngleRad);
                    }
                };
            }(Highcharts));

            Highcharts.chart('pie-chart-status', {
                chart: {
                    type: 'pie'
                },
                title: {
                    text: 'Status Pelatihan'
                },
                subtitle: {
                    text: 'Data Ini di urutkan berdasarkan status pelatihan'
                },
                tooltip: {
                    headerFormat: '',
                    pointFormat: '<span style="color:{point.color}">\u25cf</span> ' +
                        '{point.name}: <b>{point.y}</b>'
                },
                accessibility: {
                    point: {
                        valueSuffix: ''
                    }
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        borderWidth: 2,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b><br>{point.y}',
                            distance: 20
                        }
                    }
                },
                series: [{

                    enableMouseTracking: false,
                    animation: {
                        duration: 2000
                    },
                    colorByPoint: true,
                    data: chartDataPieStatus // data yang telah dikirim dari controller
                }]
            });
        </script>
    @endpush
</x-app-layout>
