<x-app-layout>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mb-2 overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="flex items-center justify-between p-6">
                    <div class="text-lg font-bold text-primary_hover">Tambah Data Pelatihan </div>
                    <div class=""><a href="{{ route('admin.jenis_pelatihan.index') }}"><svg
                                class="h-6 w-16 font-extrabold text-red-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4" />
                            </svg>
                        </a></div>
                </div>
            </div>
            <div class="overflow-hidden bg-white p-6 shadow-sm sm:rounded-lg">
                @if ($errors->any())
                    <div class="mb-4 rounded-lg bg-red-50 p-4 text-sm text-red-800 dark:bg-gray-800 dark:text-red-400"
                        role="alert">
                        <span class="font-medium">Mohon Diperhatikan</span>
                        @foreach ($errors->all() as $error)
                            {{ $error }},
                        @endforeach
                    </div>
                @elseif(session('success'))
                    <div class="mb-4 rounded-lg bg-green-50 p-4 text-sm text-green-800 dark:bg-gray-800 dark:text-green-400"
                        role="alert">
                        <span class="font-medium">{{ session('success') }}</span>
                    </div>
                @endif
                <form class="mx-auto max-w-full" action="{{ route('admin.pelatihan.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 gap-4">
                        <div class="col-span-1">
                            <div class="">
                                <div class="mb-3">
                                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                        for="peserta_id">Pilih Peserta</label>
                                    <select
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                        id="peserta_id" name="peserta_id" required>
                                        @foreach ($pesertas as $peserta)
                                            <option value="{{ $peserta->id }}">{{ $peserta->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                        for="jenis_pelatihan_id">Pilih Jenis Pelatihan</label>
                                    <div id="jenisPelatihanContainer">
                                        <!-- Kontainer untuk jenis pelatihan pertama -->
                                        <select
                                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                            name="jenis_pelatihan_id[]" required>
                                            <option selected>Pilih Jenis Pelatihan</option>
                                            @foreach ($jenis_pelatihans as $jenis_pelatihan)
                                                <option value="{{ $jenis_pelatihan->id }}">{{ $jenis_pelatihan->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Tombol Tambah Jenis Pelatihan -->
                                    <button
                                        class="ms-auto mt-2 rounded bg-blue-500 px-4 py-2 text-white hover:bg-blue-700"
                                        id="tambahJenisPelatihanButton" type="button">Tambah Jenis Pelatihan +
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <button
                        class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:w-auto"
                        type="submit">Submit</button>
                </form>


            </div>
        </div>
    </div>
    @push('after-scripts')
        <script>
            // Data jenis pelatihan dari Laravel (menggunakan Blade untuk membuat array JavaScript)
            const jenisPelatihanData = @json($jenis_pelatihans);

            // Fungsi untuk menambahkan jenis pelatihan baru
            function tambahJenisPelatihan() {
                // Dapatkan container untuk jenis pelatihan
                const container = document.getElementById('jenisPelatihanContainer');

                // Buat elemen <select> baru
                const newSelect = document.createElement('select');
                newSelect.className =
                    "block w-full mt-2 rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500";
                newSelect.name = "jenis_pelatihan_id[]";
                newSelect.required = true;

                // Tambahkan opsi default
                const defaultOption = document.createElement('option');
                defaultOption.text = "Pilih Jenis Pelatihan";
                defaultOption.selected = true;
                newSelect.appendChild(defaultOption);

                // Tambahkan opsi dari data PHP ke dalam <select>
                jenisPelatihanData.forEach(pelatihan => {
                    const option = document.createElement('option');
                    option.value = pelatihan.id; // ID jenis pelatihan
                    option.text = pelatihan.title; // Judul jenis pelatihan
                    newSelect.appendChild(option);
                });

                // Tambahkan <select> baru ke dalam container
                container.appendChild(newSelect);
            }

            // Event listener untuk tombol tambah jenis pelatihan
            document.getElementById('tambahJenisPelatihanButton').addEventListener('click', tambahJenisPelatihan);
        </script>
    @endpush
</x-app-layout>
