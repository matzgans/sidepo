<x-app-layout>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mb-4 overflow-hidden bg-gray-100 shadow-md sm:rounded-lg">
                <div class="flex items-center justify-between rounded-t-lg bg-primary p-4 text-white">
                    <div class="text-lg font-semibold">Edit Data Jenis Peserta</div>
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
                <form class="mx-auto max-w-full" action="{{ route('admin.pelatihan.update_score', $pelatihan->id) }}"
                    method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="grid grid-cols-1 gap-1">
                        <div class="col-span-1">
                            <div class="">
                                <div class="mb-3">
                                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                        for="score_absensi">Skor Kehadiran</label>
                                    <input
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                        id="score_absensi" name="score_absensi" type="number"
                                        value="{{ $pelatihan->score_absensi }}" placeholder="...." required />
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1">
                            <div class="">
                                <div class="mb-3">
                                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                        for="score_tugas">Skor Tugas</label>
                                    <input
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                        id="score_tugas" name="score_tugas" type="number"
                                        value="{{ $pelatihan->score_tugas }}" placeholder="...." required />
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1">
                            <div class="">
                                <div class="mb-3">
                                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                        for="score_test">Skor Tes</label>
                                    <input
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                        id="score_test" name="score_test" type="number"
                                        value="{{ $pelatihan->score_test }}" placeholder="...." required />
                                </div>
                            </div>
                        </div>
                    </div>


                    <button
                        class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:w-auto"
                        type="submit">Ubah</button>
                </form>


            </div>
        </div>
    </div>
    @push('after-scripts')
        <script>
            // Menunggu hingga DOM sepenuhnya dimuat
            document.addEventListener('DOMContentLoaded', function() {
                // Fungsi untuk preview gambar
                function previewImage(event) {
                    const file = event.target.files[0]; // Ambil file yang dipilih
                    const reader = new FileReader();
                    console.log(file);


                    // Ketika file berhasil dibaca, tampilkan preview gambar
                    reader.onload = function() {
                        const imagePreview = document.getElementById('imagePreview');
                        imagePreview.src = reader.result; // Update sumber gambar dengan file yang dibaca
                    };

                    if (file) {
                        reader.readAsDataURL(file); // Membaca file sebagai data URL
                    }
                }

                // Menambahkan event listener ke elemen input
                const fileInput = document.getElementById('file_input');
                fileInput.addEventListener('change', previewImage);
            });
        </script>
    @endpush
</x-app-layout>
