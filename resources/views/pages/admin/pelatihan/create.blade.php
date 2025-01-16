<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mb-4 overflow-hidden bg-gray-100 shadow-md sm:rounded-lg">
                <div class="flex items-center justify-between rounded-t-lg bg-primary p-4 text-white">
                    <div class="text-lg font-semibold">Tambah Data Pelatihan</div>
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

            <div class="overflow-hidden bg-white p-6 shadow-md sm:rounded-lg">
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

                <form class="mx-auto max-w-full" id="pelatihanForm" action="{{ route('admin.pelatihan.store') }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 gap-6">
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-700" for="peserta_id">Nama
                                Peserta</label>
                            <select
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-700 focus:border-blue-500 focus:ring-blue-500"
                                id="peserta_id" name="peserta_id" required>
                                @foreach ($pesertas as $peserta)
                                    <option value="{{ $peserta->id }}">{{ $peserta->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-700" for="jenis_pelatihan_id">Jenis
                                Pelatihan</label>
                            <div id="jenisPelatihanContainer"></div>
                            <button
                                class="mt-2 inline-block rounded bg-blue-500 px-3 py-1.5 text-sm text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300"
                                id="tambahJenisPelatihanButton" type="button">Tambah Jenis Pelatihan +</button>
                        </div>
                    </div>

                    <button
                        class="mt-4 w-full rounded-lg bg-blue-600 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 sm:w-auto"
                        type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

    @push('after-scripts')
        <script>
            const jenisPelatihanData = @json($jenis_pelatihans);

            function tambahJenisPelatihan() {
                const container = document.getElementById('jenisPelatihanContainer');

                // Wrapper div untuk setiap set input
                const wrapperDiv = document.createElement('div');
                wrapperDiv.className = "relative mt-4 p-4 border rounded-lg bg-gray-50";

                // Select input untuk jenis pelatihan
                const newSelect = document.createElement('select');
                newSelect.className =
                    "block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-700 focus:border-blue-500 focus:ring-blue-500 mb-2";
                newSelect.name = "jenis_pelatihan_id[]";
                newSelect.required = true;

                const defaultOption = document.createElement('option');
                defaultOption.text = "Pilih Jenis Pelatihan";
                defaultOption.selected = true;
                defaultOption.disabled = true;
                newSelect.appendChild(defaultOption);

                jenisPelatihanData.forEach(pelatihan => {
                    const option = document.createElement('option');
                    option.value = pelatihan.id;
                    option.text = pelatihan.title;
                    newSelect.appendChild(option);
                });

                // Input untuk Score Absensi
                const scoreAbsensiInput = document.createElement('input');
                scoreAbsensiInput.type = "number";
                scoreAbsensiInput.name = "score_absensi[]";
                scoreAbsensiInput.placeholder = "Score Absensi";
                scoreAbsensiInput.className =
                    "block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-700 focus:border-blue-500 focus:ring-blue-500 mb-2";
                scoreAbsensiInput.required = true;

                // Input untuk Score Tugas
                const scoreTugasInput = document.createElement('input');
                scoreTugasInput.type = "number";
                scoreTugasInput.name = "score_tugas[]";
                scoreTugasInput.placeholder = "Score Tugas";
                scoreTugasInput.className =
                    "block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-700 focus:border-blue-500 focus:ring-blue-500 mb-2";
                scoreTugasInput.required = true;

                // Input untuk Score Test
                const scoreTestInput = document.createElement('input');
                scoreTestInput.type = "number";
                scoreTestInput.name = "score_test[]";
                scoreTestInput.placeholder = "Score Test";
                scoreTestInput.className =
                    "block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-700 focus:border-blue-500 focus:ring-blue-500 mb-2";
                scoreTestInput.required = true;

                // Tombol hapus
                const deleteButton = document.createElement('button');
                deleteButton.type = "button";
                deleteButton.className =
                    "mt-2 inline-block rounded bg-red-500 px-3 py-1.5 text-sm text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-300";
                deleteButton.textContent = "Hapus";
                deleteButton.addEventListener('click', () => {
                    container.removeChild(wrapperDiv);
                });

                // Append elemen ke wrapper
                wrapperDiv.appendChild(newSelect);
                wrapperDiv.appendChild(scoreAbsensiInput);
                wrapperDiv.appendChild(scoreTugasInput);
                wrapperDiv.appendChild(scoreTestInput);
                wrapperDiv.appendChild(deleteButton);

                // Append wrapper ke container
                container.appendChild(wrapperDiv);
            }

            document.getElementById('tambahJenisPelatihanButton').addEventListener('click', tambahJenisPelatihan);

            // Validasi sebelum submit
            document.getElementById('pelatihanForm').addEventListener('submit', (e) => {
                const inputs = document.querySelectorAll('input[required], select[required]');
                let isValid = true;

                inputs.forEach(input => {
                    if (!input.value) {
                        isValid = false;
                        input.classList.add('border-red-500');
                    } else {
                        input.classList.remove('border-red-500');
                    }
                });

                if (!isValid) {
                    e.preventDefault();
                    alert('Harap isi semua input yang wajib!');
                }
            });
        </script>
    @endpush
</x-app-layout>
