<x-app-layout>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mb-4 overflow-hidden bg-gray-100 shadow-md sm:rounded-lg">
                <div class="flex items-center justify-between rounded-t-lg bg-primary p-4 text-white">
                    <div class="text-lg font-semibold">Edit Data Pimpinan</div>
                    <div>
                        <a class="flex items-center gap-2 text-sm font-medium hover:underline"
                            href="{{ route('admin.employee.index') }}">
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
                <form class="mx-auto max-w-full"
                    action="{{ route('admin.employee.update', ['employee' => $employee->id]) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="grid grid-cols-1 gap-4">
                        <div class="col-span-1">
                            <div class="">
                                <div class="mb-3">
                                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                        for="name">Nama</label>
                                    <input
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                        id="name" name="name" type="text" value="{{ $employee->name }}"
                                        placeholder="Masukan nama pimpinan" required />
                                </div>
                                <div class="mb-3">
                                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                        for="email">email</label>
                                    <input
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                        id="email" name="email" type="email" value="{{ $employee->email }}"
                                        placeholder="name_pimpinan@gmail.com" required />
                                </div>
                            </div>
                        </div>
                    </div>


                    <button
                        class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:w-auto"
                        type="submit">Update</button>
                </form>


            </div>
        </div>
    </div>
    @push('after-scripts')
    @endpush
</x-app-layout>