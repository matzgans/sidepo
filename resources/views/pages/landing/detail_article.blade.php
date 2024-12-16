<x-landing-layout>
    <div class="mt-16 text-center" data-aos="zoom-in">
        <!-- Article Title -->
        <h1
            class="mb-4 px-6 text-4xl font-extrabold leading-tight tracking-tight text-gray-900 md:text-5xl lg:px-20 lg:text-6xl">
            {{ $article->title }}
        </h1>

        <!-- Article Metadata (Date and Uploader) -->
        <div class="flex items-center justify-center space-x-6 md:px-56">
            <!-- Calendar Icon -->
            <svg class="h-8 w-8 text-gray-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" />
                <rect x="4" y="5" width="16" height="16" rx="2" />
                <line x1="16" y1="3" x2="16" y2="7" />
                <line x1="8" y1="3" x2="8" y2="7" />
                <line x1="4" y1="11" x2="20" y2="11" />
                <line x1="10" y1="16" x2="14" y2="16" />
            </svg>
            <p class="my-2 text-gray-500">Tanggal Upload: {{ $article->created_at->format('d M Y') }}</p>

            <!-- User Icon -->
            <svg class="h-8 w-8 text-gray-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" />
                <circle cx="12" cy="5" r="2" />
                <path d="M10 22v-4h-2l2 -6a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1l2 6h-2v4" />
            </svg>
            <p class="my-2 text-gray-500">Diupload Oleh {{ $article->author }}</p>
        </div>

        <!-- Article Image -->
        <div class="mt-6 flex justify-center">
            <img class="rounded-xl px-6" src="{{ asset('thumbnail/' . $article->thumbnail) }}" alt="Article Image"
                loading="lazy" width="1000">
        </div>

        <!-- Article Content -->
        <p class="mx-4 mt-6 text-justify text-xl font-normal text-gray-600 lg:mx-40 lg:text-2xl">
            {{ $article->content }}
        </p>
    </div>

    <!-- Recommended Articles Section -->
    @if ($recomendationArticles->count() > 0)
        <div class="mt-16 text-center" data-aos="zoom-in">
            <h2 class="text-2xl font-semibold text-gray-800">Baca Artikel Lainnya</h2>
        </div>

        <div class="my-14 grid grid-cols-4 gap-8 px-6 lg:grid-cols-4 lg:px-56" data-aos="zoom-in-up">
            @foreach ($recomendationArticles as $article)
                <div class="mb-8 lg:mb-0">
                    <img class="mb-4 w-full rounded-xl" src="{{ asset('thumbnail/' . $article->thumbnail) }}"
                        alt="{{ $article->title }}" loading="lazy">
                    <span class="rounded-full bg-yellow-100 px-4 py-1 text-xs font-semibold text-yellow-500">
                        {{ $article->created_at->format('d M Y') }}
                    </span>
                    <h3 class="my-3 text-xl font-semibold text-gray-800">{{ $article->title }}</h3>
                    <p class="mb-3 text-gray-500">{{ Str::limit($article->content, 30) }}</p>
                    <a class="text-blue-500 hover:underline"
                        href="{{ route('admin.detail.article', ['uuid' => $article->uuid]) }}">Baca Selengkapnya</a>
                </div>
            @endforeach
        </div>
    @endif
</x-landing-layout>
