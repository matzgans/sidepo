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
    <section class="bg-gray-100 px-8 py-16" id="pelatihan">
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
    <section class="bg-white px-8 py-16" id="peserta">
        <div class="container mx-auto text-center">
            <h2 class="mb-8 text-3xl font-bold">Peserta</h2>
            <div class="mx-5 bg-white p-5 shadow-lg">


                <table id="export-table">
                    <thead>
                        <tr>
                            <th>
                                <span class="flex items-center">
                                    Nomor
                                    <svg class="ms-1 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                    </svg>
                                </span>
                            </th>
                            <th>
                                <span class="flex items-center">
                                    Nama Peserta
                                    <svg class="ms-1 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                    </svg>
                                </span>
                            </th>
                            <th>
                                <span class="flex items-center">
                                    Jenis Kelamin
                                    <svg class="ms-1 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                    </svg>
                                </span>
                            </th>
                            <th data-type="date" data-format="YYYY-MM-DD">
                                <span class="flex items-center">
                                    Tanggal Lahir
                                    <svg class="ms-1 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                    </svg>
                                </span>
                            </th>
                            <th>
                                <span class="flex items-center">
                                    Pelatihan Yang Diambil
                                    <svg class="ms-1 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                    </svg>
                                </span>
                            </th>
                            <th>
                                <span class="flex items-center">
                                    Nomor Telephone
                                    <svg class="ms-1 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                    </svg>
                                </span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($datas as $index => $data)
                            <tr class="cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-800">
                                <td class="whitespace-nowrap font-medium text-gray-900 dark:text-white">
                                    {{ $index + 1 }}
                                </td>
                                <td>{{ ucfirst($data->name) }}</td>
                                <td>{{ ucfirst($data->gender) }}</td>
                                <td>{{ $data->birth }}</td>
                                <td>
                                    <ol class="mt-2 list-inside list-decimal space-y-1 ps-2">
                                        @foreach ($data->pelatihans as $pelatihan)
                                            <li>{{ ucfirst($pelatihan->jenisPelatihan->title) }}</li>
                                        @endforeach
                                    </ol>
                                </td>
                                <td>{{ $data->phone }} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="bg-gray-100 px-8 py-16 text-gray-900" id="article">
        <div class="container mx-auto text-center">
            <h2 class="mb-8 text-3xl font-bold">Article</h2>
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
                            <button
                                class="article-button inline-flex items-center rounded-lg bg-blue-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                data-title="{{ json_encode($article) }}" data-modal-target="article-modal"
                                data-modal-toggle="article-modal" type="button">
                                Read more
                                <svg class="ms-2 h-3.5 w-3.5 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </button>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </section>
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
                    <button
                        class="ms-3 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700"
                        data-modal-hide="default-modal" type="button">Decline</button>
                </div>
            </div>
        </div>
    </div>
    @push('after-scripts')
        <script>
            if (document.getElementById("export-table") && typeof simpleDatatables.DataTable !== 'undefined') {

                const exportCustomCSV = function(dataTable, userOptions = {}) {
                    // A modified CSV export that includes a row of minuses at the start and end.
                    const clonedUserOptions = {
                        ...userOptions
                    }
                    clonedUserOptions.download = false
                    const csv = simpleDatatables.exportCSV(dataTable, clonedUserOptions)
                    // If CSV didn't work, exit.
                    if (!csv) {
                        return false
                    }
                    const defaults = {
                        download: true,
                        lineDelimiter: "\n",
                        columnDelimiter: ";"
                    }
                    const options = {
                        ...defaults,
                        ...clonedUserOptions
                    }
                    const separatorRow = Array(dataTable.data.headings.filter((_heading, index) => !dataTable.columns
                            .settings[index]?.hidden).length)
                        .fill("+")
                        .join("+"); // Use "+" as the delimiter

                    const str = separatorRow + options.lineDelimiter + csv + options.lineDelimiter + separatorRow;


                    // console.log(link);
                    if (userOptions.download) {


                        // Create a link to trigger the download
                        const link = document.createElement("a");
                        link.href = encodeURI("data:text/csv;charset=utf-8," + str);
                        link.download = "data-pelatihan.txt";

                        // Append the link
                        document.body.appendChild(link);
                        // Trigger the download
                        link.click();
                        // Remove the link
                        document.body.removeChild(link);
                    }

                    return str
                }
                const table = new simpleDatatables.DataTable("#export-table", {
                    template: (options, dom) => "<div class='" + options.classes.top + "'>" +
                        "<div class='flex flex-col sm:flex-row sm:items-center space-y-4 sm:space-y-0 sm:space-x-3 rtl:space-x-reverse w-full sm:w-auto'>" +
                        (options.paging && options.perPageSelect ?
                            "<div class='" + options.classes.dropdown + "'>" +
                            "<label>" +
                            "<select class='" + options.classes.selector + "'></select> " + options.labels.perPage +
                            "</label>" +
                            "</div>" : ""
                        ) +
                        "<button id='exportDropdownButton' type='button' class='flex w-full items-center justify-center rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto'>" +
                        "Export as" +
                        "<svg class='-me-0.5 ms-1.5 h-4 w-4' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='none' viewBox='0 0 24 24'>" +
                        "<path stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m19 9-7 7-7-7' />" +
                        "</svg>" +
                        "</button>" +
                        "<div id='exportDropdown' class='z-10 hidden w-52 divide-y divide-gray-100 rounded-lg bg-white shadow dark:bg-gray-700' data-popper-placement='bottom'>" +
                        "<ul class='p-2 text-left text-sm font-medium text-gray-500 dark:text-gray-400' aria-labelledby='exportDropdownButton'>" +
                        "<li>" +
                        "<button id='export-csv' class='group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white'>" +
                        "<svg class='me-1.5 h-4 w-4 text-gray-400 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='currentColor' viewBox='0 0 24 24'>" +
                        "<path fill-rule='evenodd' d='M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2 2 2 0 0 0 2 2h12a2 2 0 0 0 2-2 2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2V4a2 2 0 0 0-2-2h-7Zm1.018 8.828a2.34 2.34 0 0 0-2.373 2.13v.008a2.32 2.32 0 0 0 2.06 2.497l.535.059a.993.993 0 0 0 .136.006.272.272 0 0 1 .263.367l-.008.02a.377.377 0 0 1-.018.044.49.49 0 0 1-.078.02 1.689 1.689 0 0 1-.297.021h-1.13a1 1 0 1 0 0 2h1.13c.417 0 .892-.05 1.324-.279.47-.248.78-.648.953-1.134a2.272 2.272 0 0 0-2.115-3.06l-.478-.052a.32.32 0 0 1-.285-.341.34.34 0 0 1 .344-.306l.94.02a1 1 0 1 0 .043-2l-.943-.02h-.003Zm7.933 1.482a1 1 0 1 0-1.902-.62l-.57 1.747-.522-1.726a1 1 0 0 0-1.914.578l1.443 4.773a1 1 0 0 0 1.908.021l1.557-4.773Zm-13.762.88a.647.647 0 0 1 .458-.19h1.018a1 1 0 1 0 0-2H6.647A2.647 2.647 0 0 0 4 13.647v1.706A2.647 2.647 0 0 0 6.647 18h1.018a1 1 0 1 0 0-2H6.647A.647.647 0 0 1 6 15.353v-1.706c0-.172.068-.336.19-.457Z' clip-rule='evenodd'/>" +
                        "</svg>" +
                        "<span>Export CSV</span>" +
                        "</button>" +
                        "</li>" +
                        "<li>" +
                        "<button id='export-json' class='group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white'>" +
                        "<svg class='me-1.5 h-4 w-4 text-gray-400 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='currentColor' viewBox='0 0 24 24'>" +
                        "<path fill-rule='evenodd' d='M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7Zm-.293 9.293a1 1 0 0 1 0 1.414L9.414 14l1.293 1.293a1 1 0 0 1-1.414 1.414l-2-2a1 1 0 0 1 0-1.414l2-2a1 1 0 0 1 1.414 0Zm2.586 1.414a1 1 0 0 1 1.414-1.414l2 2a1 1 0 0 1 0 1.414l-2 2a1 1 0 0 1-1.414-1.414L14.586 14l-1.293-1.293Z' clip-rule='evenodd'/>" +
                        "</svg>" +
                        "<span>Export JSON</span>" +
                        "</button>" +
                        "</li>" +
                        "<li>" +
                        "<button id='export-txt' class='group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white'>" +
                        "<svg class='me-1.5 h-4 w-4 text-gray-400 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='currentColor' viewBox='0 0 24 24'>" +
                        "<path fill-rule='evenodd' d='M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7ZM8 16a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm1-5a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H9Z' clip-rule='evenodd'/>" +
                        "</svg>" +
                        "<span>Export TXT</span>" +
                        "</button>" +
                        "</li>" +
                        "<li>" +
                        "<button id='export-sql' class='group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white'>" +
                        "<svg class='me-1.5 h-4 w-4 text-gray-400 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='currentColor' viewBox='0 0 24 24'>" +
                        "<path d='M12 7.205c4.418 0 8-1.165 8-2.602C20 3.165 16.418 2 12 2S4 3.165 4 4.603c0 1.437 3.582 2.602 8 2.602ZM12 22c4.963 0 8-1.686 8-2.603v-4.404c-.052.032-.112.06-.165.09a7.75 7.75 0 0 1-.745.387c-.193.088-.394.173-.6.253-.063.024-.124.05-.189.073a18.934 18.934 0 0 1-6.3.998c-2.135.027-4.26-.31-6.3-.998-.065-.024-.126-.05-.189-.073a10.143 10.143 0 0 1-.852-.373 7.75 7.75 0 0 1-.493-.267c-.053-.03-.113-.058-.165-.09v4.404C4 20.315 7.037 22 12 22Zm7.09-13.928a9.91 9.91 0 0 1-.6.253c-.063.025-.124.05-.189.074a18.935 18.935 0 0 1-6.3.998c-2.135.027-4.26-.31-6.3-.998-.065-.024-.126-.05-.189-.074a10.163 10.163 0 0 1-.852-.372 7.816 7.816 0 0 1-.493-.268c-.055-.03-.115-.058-.167-.09V12c0 .917 3.037 2.603 8 2.603s8-1.686 8-2.603V7.596c-.052.031-.112.059-.165.09a7.816 7.816 0 0 1-.745.386Z'/>" +
                        "</svg>" +
                        "<span>Export SQL</span>" +
                        "</button>" +
                        "</li>" +
                        "</ul>" +
                        "</div>" + "</div>" +
                        (options.searchable ?
                            "<div class='" + options.classes.search + "'>" +
                            "<input class='" + options.classes.input + "' placeholder='" + options.labels.placeholder +
                            "' type='search' title='" + options.labels.searchTitle + "'" + (dom.id ?
                                " aria-controls='" + dom.id + "'" : "") + ">" +
                            "</div>" : ""
                        ) +
                        "</div>" +
                        "<div class='" + options.classes.container + "'" + (options.scrollY.length ?
                            " style='height: " + options.scrollY + "; overflow-Y: auto;'" : "") + "></div>" +
                        "<div class='" + options.classes.bottom + "'>" +
                        (options.paging ?
                            "<div class='" + options.classes.info + "'></div>" : ""
                        ) +
                        "<nav class='" + options.classes.pagination + "'></nav>" +
                        "</div>"
                })
                const $exportButton = document.getElementById("exportDropdownButton");
                const $exportDropdownEl = document.getElementById("exportDropdown");
                const dropdown = new Dropdown($exportDropdownEl, $exportButton);
                // console.log(dropdown)

                document.getElementById("export-csv").addEventListener("click", () => {
                    simpleDatatables.exportCSV(table, {
                        download: true,
                        lineDelimiter: "\n",
                        columnDelimiter: ";"
                    })
                })
                document.getElementById("export-sql").addEventListener("click", () => {
                    simpleDatatables.exportSQL(table, {
                        download: true,
                        tableName: "export_table"
                    })
                })
                document.getElementById("export-txt").addEventListener("click", () => {
                    simpleDatatables.exportTXT(table, {
                        download: true
                    })
                })
                document.getElementById("export-json").addEventListener("click", () => {
                    simpleDatatables.exportJSON(table, {
                        download: true,
                        space: 3
                    })
                })
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
