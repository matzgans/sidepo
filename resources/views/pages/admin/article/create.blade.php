<x-app-layout>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mb-2 overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="flex items-center justify-between p-6">
                    <div class="text-lg font-bold text-primary_hover">Tambah Data Artikel</div>
                    <div class=""><a href="{{ route('admin.article.index') }}"><svg
                                class="h-10 w-10 font-extrabold text-red-800 dark:text-white" aria-hidden="true"
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
                <form class="mx-auto max-w-full" action="{{ route('admin.article.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-4 gap-4">
                        <div class="col-span-3">
                            <div class="grid grid-cols-1 gap-3">
                                <div class="mb-3">
                                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                        for="author">Author</label>
                                    <input
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                        id="author" name="author" type="text" placeholder="Masukan Nama Penulis"
                                        required />
                                </div>
                                <div class="mb-3">
                                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                        for="title">Judul</label>
                                    <input
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                        id="title" name="title" type="text" placeholder="Masukkan judul Artikel"
                                        required />
                                </div>
                                <div class="mb-3">
                                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                        for="content">Konten</label>
                                    <textarea
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                        id="content" name="content" rows="4" placeholder="isi artikel "></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Another Profile Card -->
                        <div
                            class="rounded-lg border border-gray-200 bg-white p-3 shadow dark:border-gray-700 dark:bg-gray-800">
                            <div class="flex items-center justify-center p-5">
                                <img class="h-32 w-32 object-cover" id="imagePreview"
                                    src="{{ asset('photo/defaultprofile.jpg') }}" alt="" />
                            </div>
                            <div class="mt-3">

                                <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                    for="file_input">Upload file</label>
                                <input
                                    class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
                                    id="file_input" name="thumbnail" type="file" aria-describedby="file_input_help"
                                    onchange="previewImage(event)">
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
