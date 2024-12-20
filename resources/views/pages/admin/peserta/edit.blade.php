<x-app-layout>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mb-4 overflow-hidden bg-gray-100 shadow-md sm:rounded-lg">
                <div class="flex items-center justify-between rounded-t-lg bg-primary p-4 text-white">
                    <div class="text-lg font-semibold">Edit Data Jenis Peserta</div>
                    <div>
                        <a class="flex items-center gap-2 text-sm font-medium hover:underline"
                            href="{{ route('admin.pesertas.index') }}">
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
                <form class="mx-auto max-w-full" action="{{ route('admin.pesertas.update', $peserta->id) }}"
                    method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="grid grid-cols-4 gap-4">
                        <div class="col-span-3">
                            <div class="grid grid-cols-2 gap-3">
                                <div class="mb-3">
                                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                        for="name">Nama</label>
                                    <input
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                        id="name" name="name" type="text" value="{{ $peserta->name }}"
                                        placeholder="...." required />
                                </div>
                                <div class="mb-3">
                                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                        for="nik">NIK</label>
                                    <input
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                        id="nik" name="nik" type="number" value="{{ $peserta->nik }}"
                                        placeholder="75040" required />
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-3">
                                <div class="mb-3">
                                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                        for="birth">Tanggal Lahir</label>
                                    <input
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                        id="birth" name="birth" type="date" value="{{ $peserta->birth }}"
                                        required />
                                </div>
                                <div class="mb-3">
                                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                        for="gender">Pilih Jenis Kelamin</label>
                                    <select
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                        id="gender" name="gender" required>
                                        <option selected>Pilih Jenis Kelamin</option>
                                        <option value="Laki - Laki"
                                            {{ $peserta->gender == 'Laki - Laki' ? 'selected' : '' }}>Laki - Laki
                                        </option>
                                        <option value="Perempuan"
                                            {{ $peserta->gender == 'Perempuan' ? 'selected' : '' }}>Perempuan
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-3">
                                <div class="mb-3">
                                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                        for="phone">Nomor Telephone</label>
                                    <input
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                        id="phone" name="phone" type="text" value="{{ $peserta->phone }}"
                                        required />
                                </div>
                                <div class="mb-3">
                                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                        for="message">Alamat</label>
                                    <textarea
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                        id="message" name="address" rows="4" placeholder="Jl. Kasmat Lahay nomor 9">{{ $peserta->address }}</textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Another Profile Card -->
                        <div
                            class="rounded-lg border border-gray-200 bg-white p-3 shadow dark:border-gray-700 dark:bg-gray-800">
                            <div class="flex items-center justify-center p-5">
                                <img class="h-32 w-32 object-cover" id="imagePreview"
                                    src="{{ asset('profilephoto/' . $peserta->photo) }}" alt="" />
                            </div>
                            <div class="mt-3">

                                <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                    for="file_input">Upload file</label>
                                <input
                                    class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
                                    id="file_input" name="photo" type="file" aria-describedby="file_input_help"
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
