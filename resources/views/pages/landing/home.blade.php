<x-landing-layout>

    <!-- Hero Section with Carousel -->
    <section class="hero flex h-screen items-center justify-center text-center" id="home">
        <div class="relative h-full w-full">
            <!-- Carousel -->
            <div class="swiper mySwiper h-full">
                <div class="swiper-wrapper">
                    <div class="swiper-slide h-full bg-cover bg-center"
                        style="background-image: url('{{ asset('landing/images/logo_potensi.jpg') }}');"></div>
                    <div class="swiper-slide h-full bg-cover bg-center"
                        style="background-image: url('{{ asset('landing/images/kol.jpg') }}');"></div>
                    <div class="swiper-slide h-full bg-cover bg-center"
                        style="background-image: url('{{ asset('landing/images/fotbar.jpg') }}');"></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

            <!-- Text and Button Overlay -->
            <div
                class="absolute inset-0 z-10 flex flex-col items-center justify-center bg-black bg-opacity-50 px-4 text-white">
                <h1 class="mb-4 text-4xl font-bold md:text-6xl">SISTEM INFORMASI DATA POTENSI KANTOR PENCARIAN DAN
                    PERTOLONGAN GORONTALO</h1>
                <p class="mb-8 text-lg md:text-2xl">Avignam Jagat Samagram</p>
                @if (!Auth::check())
                    <a class="rounded-full bg-white px-8 py-3 font-semibold text-primary transition hover:bg-gray-200"
                        href="{{ route('login') }}">Login</a>
                @else
                    @if (Auth::user()->hasRole('admin'))
                        <a class="rounded-full bg-white px-8 py-3 font-semibold text-primary transition hover:bg-gray-200"
                            href="{{ route('admin.dashboard') }}">Dashboard Admin</a>
                    @elseif (Auth::user()->hasRole('pimpinan'))
                        <a class="rounded-full bg-white px-8 py-3 font-semibold text-primary transition hover:bg-gray-200"
                            href="{{ route('pimpinan.dashboard') }}">Dashboard Pimpinan</a>
                    @endif
                @endif
            </div>
        </div>
    </section>


    <!-- About Section -->
    <section class="bg-white px-8 py-16 text-gray-800" id="about">
        <div class="container mx-auto text-center">
            <h2 class="mb-4 text-3xl font-bold">Tentang siDAPOG</h2>
            <p class="mx-auto max-w-2xl text-lg">Sistem informasi data potensi khusus Kantor Pencarian dan Pertolongan
                Provinsi Gorontalo berfungsi untuk mengumpulkan, mengelola data terkait sumber daya potensi yang ada,
                guna meningkatkan efektivitas dalam penanganan situasi darurat antarinstansi dalam upaya pencarian dan
                pertolongan di wilayah Gorontalo.</p>
        </div>
    </section>

    <!-- Services Section -->
    <section class="bg-gray-100 px-8 py-16" id="pelatihan">
        <div class="container mx-auto text-center">
            <h2 class="mb-8 text-3xl font-bold">Jenis Pelatihan Potensi</h2>
            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                @foreach ($jenis_pelatihans as $jenis_pelatihan)
                    <button class="training-button" data-title="{{ json_encode($jenis_pelatihan) }}"
                        data-count="{{ $jenis_pelatihan->pelatihans->count() }}" data-modal-target="default-modal"
                        data-modal-toggle="default-modal" type="button">
                        <div class="transform rounded-lg bg-white p-6 shadow-lg transition hover:scale-105">
                            <h3 class="mb-2 text-2xl font-bold text-primary">{{ ucfirst($jenis_pelatihan->title) }}</h3>
                            <p class="line-clamp-1">{{ ucfirst($jenis_pelatihan->desc) }}</p>
                        </div>
                    </button>
                @endforeach

            </div>
        </div>
    </section>
    <section class="bg-white px-8 py-16" id="peserta">
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
                                                <li>{{ $pelatihan->peserta->name }}</li>
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
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Article -->
    <section class="bg-gray-100 px-8 py-16 text-gray-900" id="article">
        <div class="container mx-auto text-center">
            <h2 class="mb-8 text-3xl font-bold">Artikel</h2>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                @foreach ($articles as $article)
                    <div
                        class="max-w-sm rounded-lg border border-gray-200 bg-white shadow dark:border-gray-700 dark:bg-gray-800">
                        <a href="#">
                            <img class="h-64 w-96 rounded-lg" src="{{ asset('thumbnail/' . $article->thumbnail) }}"
                                alt="Rounded avatar">
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ ucfirst($article->title) }}</h5>
                            </a>
                            <p class="mb-3 line-clamp-3 font-normal text-gray-700 dark:text-gray-400">
                                {{ ucfirst($article->content) }}</p>
                            <a class="inline-flex items-center rounded-lg bg-blue-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                href="{{ route('admin.detail.article', ['uuid' => $article->uuid]) }}">
                                Selengkapnya
                                <svg class="ms-2 h-3.5 w-3.5 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </section>
    <section class="bg-white px-8 py-16 text-gray-900" id="contact">
        <div class="container mx-auto text-left">
            <h2 class="mb-8 text-center text-3xl font-bold">Hubungi Kami</h2>
            <div class="space-y-4">
                <div class="flex items-center justify-center text-lg">
                    <svg class="mr-3 h-6 w-6 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M7.978 4a2.553 2.553 0 0 0-1.926.877C4.233 6.7 3.699 8.751 4.153 10.814c.44 1.995 1.778 3.893 3.456 5.572 1.68 1.679 3.577 3.018 5.57 3.459 2.062.456 4.115-.073 5.94-1.885a2.556 2.556 0 0 0 .001-3.861l-1.21-1.21a2.689 2.689 0 0 0-3.802 0l-.617.618a.806.806 0 0 1-1.14 0l-1.854-1.855a.807.807 0 0 1 0-1.14l.618-.62a2.692 2.692 0 0 0 0-3.803l-1.21-1.211A2.555 2.555 0 0 0 7.978 4Z" />
                    </svg>
                    <span>0811 4317 748</span>
                </div>
                <div class="flex items-center justify-center text-lg">
                    <svg class="mr-3 h-6 w-6 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>JL Pangeran Hidayat II, Pulubala, Kec. Kota Tengah, Kota Gorontalo, Gorontalo 96127</span>
                </div>
            </div>
        </div>
    </section>

    </section>





    <!-- Main modal -->
    <div class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0"
        id="article-modal" aria-hidden="true" tabindex="-1">
        <div class="relative max-h-full w-full max-w-2xl p-4">
            <!-- Modal content -->
            <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between rounded-t border-b p-4 dark:border-gray-600 md:p-5">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white" id="title-article">

                    </h3>
                    <button
                        class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="article-modal" type="button">
                        <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="space-y-4 p-4 md:p-5">
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400" id="content-article">
                    </p>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center rounded-b border-t border-gray-200 p-4 dark:border-gray-600 md:p-5">
                    <div class="me-4 flex"><svg class="h-6 w-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12 2a7 7 0 0 0-7 7 3 3 0 0 0-3 3v2a3 3 0 0 0 3 3h1a1 1 0 0 0 1-1V9a5 5 0 1 1 10 0v7.083A2.919 2.919 0 0 1 14.083 19H14a2 2 0 0 0-2-2h-1a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h1a2 2 0 0 0 1.732-1h.351a4.917 4.917 0 0 0 4.83-4H19a3 3 0 0 0 3-3v-2a3 3 0 0 0-3-3 7 7 0 0 0-7-7Zm1.45 3.275a4 4 0 0 0-4.352.976 1 1 0 0 0 1.452 1.376 2.001 2.001 0 0 1 2.836-.067 1 1 0 1 0 1.386-1.442 4 4 0 0 0-1.321-.843Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="ms-3" id="author-article"></span>
                    </div>
                    <div class="flex"><svg class="h-6 w-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>

                        <span class="ms-3" id="time-article"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Default modal -->
    <div class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0"
        id="default-modal" aria-hidden="true" tabindex="-1">
        <div class="relative max-h-full w-full max-w-2xl p-4">
            <!-- Modal content -->
            <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between rounded-t border-b p-4 dark:border-gray-600 md:p-5">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white" id="title-modal">

                    </h3>
                    <button
                        class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="default-modal" type="button">
                        <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="space-y-4 p-4 md:p-5">
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400" id="desc-modal">

                    </p>

                    <ul class="max-w-md list-inside space-y-1 text-gray-500 dark:text-gray-400">
                        <li class="flex items-center">
                            <svg class="me-5 h-6 w-6 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>


                            <span id="time-modal"></span>
                        </li>
                    </ul>
                    <ul class="max-w-md list-inside space-y-1 text-gray-500 dark:text-gray-400">
                        <li class="flex items-center">
                            <svg class="me-5 h-6 w-6 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="1.6"
                                    d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                            </svg>



                            <span id="participant-modal"></span>
                        </li>
                    </ul>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center rounded-b border-t border-gray-200 p-4 dark:border-gray-600 md:p-5">
                    <button
                        class="rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        data-modal-hide="default-modal" type="button">I accept</button>
                    {{-- <button
                        class="ms-3 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700"
                        data-modal-hide="default-modal" type="button">Decline</button>
                </div> --}}
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
            </script>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const swiper = new Swiper('.mySwiper', {
                        loop: true, // Mengaktifkan loop
                        autoplay: {
                            delay: 3000, // Waktu delay otomatis
                            disableOnInteraction: false,
                        },
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                    });
                });

                // Menunggu sampai halaman selesai dimuat
                document.addEventListener('DOMContentLoaded', function() {
                    // Menangkap semua tombol dengan class 'training-button'
                    const buttons = document.querySelectorAll('.training-button');

                    // Menambahkan event listener untuk setiap tombol
                    buttons.forEach(button => {
                        button.addEventListener('click', function() {
                            // Mengambil data JSON dari atribut data-title dan parsing menjadi objek JavaScript
                            const titleData = JSON.parse(button.getAttribute('data-title'));
                            const count = button.getAttribute('data-count');
                            document.getElementById("title-modal").innerHTML = titleData.title;
                            document.getElementById("desc-modal").innerHTML = titleData.desc;
                            document.getElementById("participant-modal").innerHTML = count + " Orang";
                            document.getElementById("time-modal").innerHTML = titleData.pelatihan_start +
                                " - " +
                                titleData.pelatihan_end;
                        });
                    });
                });
                document.addEventListener('DOMContentLoaded', function() {
                    // Menangkap semua tombol dengan class 'training-button'
                    const buttons = document.querySelectorAll('.article-button');

                    // Menambahkan event listener untuk setiap tombol
                    buttons.forEach(button => {
                        button.addEventListener('click', function() {
                            // Mengambil data JSON dari atribut data-title dan parsing menjadi objek JavaScript
                            const titleData = JSON.parse(button.getAttribute('data-title'));
                            document.getElementById("title-article").innerHTML = titleData.title;
                            document.getElementById("content-article").innerHTML = titleData.content;
                            document.getElementById("author-article").innerHTML = "Author : " + titleData
                                .author;
                            // Memformat tanggal menjadi format Indonesia
                            const createdAt = new Date(titleData.created_at);
                            const options = {
                                day: 'numeric',
                                month: 'long',
                                year: 'numeric'
                            };
                            const formattedDate = new Intl.DateTimeFormat('id-ID', options).format(
                                createdAt);

                            document.getElementById("time-article").innerHTML = "Diupload : " +
                                formattedDate;

                        });
                    });
                });
            </script>
        @endpush
</x-landing-layout>
