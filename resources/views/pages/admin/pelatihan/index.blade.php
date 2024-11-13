<x-app-layout>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mb-2 overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="flex items-center justify-between p-6">
                    <div class="text-lg font-bold text-primary_hover">Data Pelatihan</div>
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
                    <x-search fromAction="{{ route('admin.pelatihan.index') }}"
                        placeholder="Cari  Pelatihan..."></x-search>

                    <x-addfeature link="{{ route('admin.pelatihan.create') }}"></x-addfeature>
                </div>
                <div class="relative overflow-x-auto shadow-md shadow-primary sm:rounded-lg">
                    <table class="w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
                        <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th class="px-6 py-3" scope="col">
                                    NO
                                </th>
                                <th class="px-6 py-3" scope="col">
                                    Nama Peserta
                                </th>
                                <th class="px-6 py-3" scope="col">
                                    Jenis Pelatihan Yang di Ambil
                                </th>
                                <th class="px-6 py-3" scope="col">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($pesertas)
                                @foreach ($pesertas as $peserta)
                                    <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                                        <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white"
                                            scope="row">
                                            {{ ($pesertas->currentPage() - 1) * $pesertas->perPage() + $loop->iteration }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $peserta->name }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <ol>
                                                @foreach ($peserta->pelatihans as $item)
                                                    <li class="flex cursor-pointer items-center"
                                                        onclick="showModal({{ $item->id }}, {{ $item->peserta_id }})">
                                                        @if ($item->is_status == 3)
                                                            <svg class="me-2 h-3.5 w-3.5 flex-shrink-0 text-green-500 dark:text-green-400"
                                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor" viewBox="0 0 20 20">
                                                                <path
                                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                                            </svg>
                                                        @else
                                                            <svg class="me-2 h-3.5 w-3.5 flex-shrink-0 text-gray-500 dark:text-gray-400"
                                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor" viewBox="0 0 20 20">
                                                                <path
                                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                                            </svg>
                                                        @endif
                                                        {{ $item->jenisPelatihan->title }}
                                                    </li>
                                                @endforeach

                                            </ol>
                                        </td>

                                        <td class="px-6 py-4">
                                            <div class="flex justify-around">
                                                {{-- <a class="font-medium text-blue-600 hover:underline dark:text-blue-500"
                                                    href="{{ route('admin.jenis_pelatihan.edit', ['jenis_pelatihan' => $jenis_pelatihan->id]) }}"><svg
                                                        class="h-6 w-6 text-yellow-400 dark:text-white"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                                    </svg>
                                                </a> --}}
                                                <button
                                                    class="font-medium text-blue-600 hover:underline dark:text-blue-500"
                                                    data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                                                    data-name="{{ $peserta->name }}" data-id="{{ $peserta->id }}"
                                                    type="button" onclick="deleteData(this)"><svg
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
                            @else
                                Data Kosong
                            @endif
                        </tbody>
                    </table>
                    {{ $pesertas->links() }}
                </div>

            </div>
        </div>
        <!-- Modal Popup -->
        <!-- Modal Popup -->
        <div class="fixed inset-0 flex hidden items-center justify-center bg-black bg-opacity-50" id="modal">
            <div class="w-1/3 rounded-lg bg-white p-4 shadow-lg">
                <div class="grid w-full grid-cols-1 items-center">
                    <div>
                        <span>Hapus Pelatihan ini</span>
                        <a id="link_delete"
                            href="{{ route('admin.pelatihan.delete_status', ['delete_status' => 'id']) }}">
                            <svg class="h-6 w-6 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                    <div>
                        <span class="">Tandai Telah Menyelesaikan Pelatihan</span>
                        <a id="link_update"
                            href="{{ route('admin.pelatihan.update_status', ['update_status' => 'id']) }}">

                            <svg class="me-2 h-6 w-6 flex-shrink-0 text-green-500 dark:text-green-400"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                        </a>
                    </div>

                </div>
                <h2 class="text-lg font-semibold" id="modalTitle">Jenis Pelatihan</h2>
                <p id="modalContent"></p>
                <button class="mt-4 rounded bg-red-500 px-4 py-2 text-white hover:bg-red-700"
                    onclick="closeModal()">Tutup</button>
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
                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Kamu Akan Menghapus Data
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
            // Menampilkan modal dengan data yang sesuai
            function showModal(itemId, pesertaId) {
                console.log(itemId); // Debugging untuk memastikan itemId dikirim dengan benar

                // Menyiapkan konten modal
                const modal = document.getElementById('modal');
                const modalContent = document.getElementById('modalContent');
                const modalTitle = document.getElementById('modalTitle');
                const linkUpdate = document.getElementById('link_update');
                const linkDelete = document.getElementById('link_delete');

                // Hapus href lama terlebih dahulu
                linkUpdate.removeAttribute('href');
                linkDelete.removeAttribute('href');

                // Ganti href dengan itemId yang sesuai
                const newHref = "{{ route('admin.pelatihan.update_status', ['update_status' => '__ID__']) }}".replace('__ID__',
                    itemId);
                const newHrefDelete = "{{ route('admin.pelatihan.delete_status', ['delete_status' => '__ID__']) }}".replace(
                    '__ID__',
                    itemId);

                // Set href baru pada link
                linkUpdate.setAttribute('href', newHref);
                linkDelete.setAttribute('href', newHrefDelete)

                // Log URL untuk debugging
                console.log("Updated URL:", newHref); // Cek apakah URL sudah berubah sesuai dengan itemId

                // Update konten modal dengan informasi
                modalTitle.textContent = "Detail Pelatihan";
                modalContent.textContent = `ID Pelatihan: ${itemId}, ID Peserta: ${pesertaId}`;

                // Menampilkan modal
                modal.classList.remove('hidden');
            }

            // Menutup modal
            function closeModal() {
                const modal = document.getElementById('modal');
                modal.classList.add('hidden');
            }
        </script>




        <script>
            function deleteData(button) {

                let dataName = button.getAttribute("data-name");
                let dataid = button.getAttribute("data-id");
                console.log(dataid);

                let form = document.getElementById("delete-form");
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
