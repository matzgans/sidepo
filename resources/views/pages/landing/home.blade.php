<x-landing-layout>

    <!-- Hero Section with Carousel -->
    <section class="hero flex h-screen items-center justify-center text-center" id="home">
        <div class="relative h-full w-full">
            <!-- Carousel -->
            <div class="swiper mySwiper h-full">
                <div class="swiper-wrapper">
                    <div class="swiper-slide h-full bg-cover bg-center"
                        style="background-image: url('{{ asset('landing/images/csimage1.jpg') }}');"></div>
                    <div class="swiper-slide h-full bg-cover bg-center"
                        style="background-image: url('{{ asset('landing/images/csimage2.jpg') }}');"></div>
                    <div class="swiper-slide h-full bg-cover bg-center"
                        style="background-image: url('{{ asset('landing/images/csimage3.jpg') }}');"></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

            <!-- Text and Button Overlay -->
            <div
                class="absolute inset-0 z-10 flex flex-col items-center justify-center bg-black bg-opacity-50 px-4 text-white">
                <h1 class="mb-4 text-4xl font-bold md:text-6xl">SIDEPO</h1>
                <p class="mb-8 text-lg md:text-2xl">Prepare Your Skills & Helped You Family</p>
                <a class="rounded-full bg-white px-8 py-3 font-semibold text-primary transition hover:bg-gray-200"
                    href="{{ route('login') }}">Get Started</a>
            </div>
        </div>
    </section>


    <!-- About Section -->
    <section class="bg-white px-8 py-16 text-gray-800" id="about">
        <div class="container mx-auto text-center">
            <h2 class="mb-4 text-3xl font-bold">Tentang Sidepo</h2>
            <p class="mx-auto max-w-2xl text-lg">Kami Berkomitmen Untuk menghasilkan pemuda dan pemudi yang siap akan
                terjadinya bencana dengan memberikan mereka skill yang mumpuni</p>
        </div>
    </section>

    <!-- Services Section -->
    <section class="bg-gray-100 px-8 py-16" id="services">
        <div class="container mx-auto text-center">
            <h2 class="mb-8 text-3xl font-bold">Pelatihan</h2>
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

    <!-- Contact Section -->
    <section class="bg-white px-8 py-16 text-gray-900" id="contact">
        <div class="container mx-auto text-center">
            <h2 class="mb-8 text-3xl font-bold">Contact Us</h2>
            <form class="mx-auto max-w-lg space-y-4">
                <input class="w-full rounded-lg px-4 py-2 text-gray-800" type="text" placeholder="Your Name">
                <input class="w-full rounded-lg px-4 py-2 text-gray-800" type="email" placeholder="Your Email">
                <textarea class="h-32 w-full rounded-lg px-4 py-2 text-gray-800" placeholder="Your Message"></textarea>
                <button
                    class="mb-2 me-2 h-11 w-full rounded-lg bg-green-700 text-sm font-medium text-white hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                    type="button">Submit</button>
            </form>
        </div>
    </section>

    <!-- Main modal -->
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
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
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
                    <button
                        class="ms-3 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700"
                        data-modal-hide="default-modal" type="button">Decline</button>
                </div>
            </div>
        </div>
    </div>
    @push('after-scripts')
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
        </script>
    @endpush
</x-landing-layout>
