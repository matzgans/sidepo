<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mb-4 overflow-hidden bg-gray-100 shadow-md sm:rounded-lg">
                <div class="flex items-center justify-between rounded-t-lg bg-primary p-4 text-white">
                    <div class="text-lg font-semibold">Edit Data Pelatihan</div>
                    <div>
                        <a class="flex items-center gap-2 text-sm font-medium hover:underline"
                            href="{{ route('admin.pelatihan.index') }}">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H3m0 0l6-6m-6 6l6 6" />
                            </svg>
                            Kembali
                        </a>
                    </div>
                </div>
            </div>
            @if ($errors->any())
                <div class="mb-2 rounded-lg border border-red-300 bg-red-50 p-4 text-sm text-red-800" role="alert">
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
            <div class="grid h-full grid-cols-6 gap-4">
                <div class="col-span-2 h-full overflow-hidden bg-white p-6 shadow-md sm:rounded-lg">
                    <h3 class="flex items-center text-lg font-semibold">
                        <svg class="h-6 w-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z"
                                clip-rule="evenodd" />
                        </svg>

                        Jenis Pelatihan
                    </h3>
                    <p>{{ $jenis_pelatihan->title }}</p>
                    <h3 class="mt-4 flex items-center text-lg font-semibold">
                        <svg class="h-6 w-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>

                        Tanggal Pelatihan
                    </h3>
                    <p>
                        {{ \Carbon\Carbon::parse($jenis_pelatihan->pelatihan_start)->locale('id')->isoFormat('dddd D MMMM YYYY') }}
                        -
                        {{ \Carbon\Carbon::parse($jenis_pelatihan->pelatihan_end)->locale('id')->isoFormat('dddd D MMMM YYYY') }}
                    </p>
                    <h3 class="mt-4 flex items-center text-lg font-semibold">
                        <svg class="h-6 w-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 19V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v13H7a2 2 0 0 0-2 2Zm0 0a2 2 0 0 0 2 2h12M9 3v14m7 0v4" />
                        </svg>


                        Deskripsi Pelatihan
                    </h3>
                    <p>{{ $jenis_pelatihan->desc }}</p>
                </div>
                <div class="col-span-4 bg-white px-6 py-4 shadow-md sm:rounded-lg">
                    <a class="mb-4 rounded-lg bg-purple-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900"
                        href="{{ route('admin.pelatihan.update_status.all', ['jenis_pelatihan_id' => $jenis_pelatihan->id]) }}">Tandai
                        Semua Selesai</a>
                    <div class="mt-4">
                        <table id="search-table">
                            <thead>
                                <tr>
                                    <th>
                                        <span class="flex items-center">
                                            No
                                        </span>
                                    </th>
                                    <th>
                                        <span class="flex items-center">
                                            Nama Peserta
                                        </span>
                                    </th>
                                    <th>
                                        <span class="flex items-center">
                                            Status Pelatihan
                                        </span>
                                    </th>
                                    <th>
                                        <span class="flex items-center">
                                            Acction
                                        </span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jenis_pelatihan->pelatihans as $index => $item)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td class="whitespace-nowrap font-medium text-gray-900 dark:text-white">
                                            {{ $item->peserta->name }}</td>
                                        <td>
                                            <form id="formUpdate" method="POST"
                                                action="{{ route('admin.pelatihan.update_status', ['pelatihan' => 'pelatihan_id']) }}">
                                                @csrf
                                                <select
                                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                                    id="status" name="status"
                                                    onchange="updateStatus({{ $item->id }})">
                                                    <option value="0"
                                                        {{ $item->is_status == 0 ? 'selected' : '' }}>
                                                        Belum
                                                        Pelatihan</option>
                                                    <option value="1"
                                                        {{ $item->is_status == 1 ? 'selected' : '' }}>
                                                        Sedang
                                                        Berlangsung</option>
                                                    <option value="2"
                                                        {{ $item->is_status == 2 ? 'selected' : '' }}>
                                                        Sudah
                                                        Selesai</option>
                                                </select>
                                            </form>
                                        </td>
                                        <td> <button
                                                class="font-medium text-blue-600 hover:underline dark:text-blue-500"
                                                data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                                                data-name="{{ $item->peserta->name }}"
                                                data-id="{{ $item->peserta->id }}" type="button"
                                                onclick="deleteData(this)"><svg
                                                    class="h-6 w-6 text-red-800 dark:text-white" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                                </svg>
                                            </button></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
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
                        <form id="delete-form"
                            action="{{ route('admin.pelatihan.peserta.destroy', ['pelatihan' => 'id']) }}"
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
            function updateStatus(id) {
                let form_update_status = document.getElementById("formUpdate");
                let url_update_status = form_update_status.action.replace('pelatihan_id', id);
                form_update_status.action = url_update_status;
                document.getElementById("formUpdate").submit();
            }

            if (document.getElementById("search-table") && typeof simpleDatatables.DataTable !== 'undefined') {
                const dataTable = new simpleDatatables.DataTable("#search-table", {
                    searchable: true,
                    sortable: false
                });
            }

            function deleteData(button) {
                let dataName = button.getAttribute("data-name");
                let dataid = button.getAttribute("data-id");
                console.log(dataid);

                let form = document.getElementById("delete-form");
                let deleteName = document.getElementById("delete-title").innerHTML = `Kamu Akan Menghapus data ${dataName}`;

                let url = form.action.replace('id', dataid);
                form.action = url;
            }

            document.getElementById("confirm-delete-button").addEventListener("click", function() {
                document.getElementById("delete-form").submit();
            });
        </script>
    @endpush
</x-app-layout>
