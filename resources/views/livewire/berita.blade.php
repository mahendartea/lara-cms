<div>
    <!-- component -->
    <section class="text-gray-600 body-font mt-28">
        <div class="container px-5 py-24 mx-auto max-w-7x1">
            <div class="flex flex-wrap w-full mb-4 p-4">
                <div class="w-full mb-6 lg:mb-0">
                    <h1 class="sm:text-4xl text-5xl font-medium title-font mb-2 text-[#040181]">Berita Partai
                    </h1>
                    <div class="h-1 w-20 bg-[#040181] rounded"></div>
                </div>
            </div>
            <div class="flex flex-wrap -m-4">
                @foreach ($berita as $news)
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72  rounded w-full object-cover object-center mb-6"
                                src="{{ $news->image }}" alt="Image Size 720x400">
                            {{-- <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">
                                {{ $news->title }}</h3> --}}
                            <h2 class="text-lg text-[#040181] font-medium title-font mb-4">{{ $news->title }}</h2>
                            <p class="leading-relaxed text-[#040181]">{{ $news->content }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="flex justify-center mt-10 shadow-sm bg-white py-1">
                @if ($berita->onFirstPage())
                    <a href="#"
                        class="flex items-center px-4 py-2 mx-1 text-gray-500 bg-white rounded-md cursor-not-allowed dark:bg-gray-800 dark:text-gray-600">
                        Sebelumnya
                    </a>
                @else
                    <a href="{{ $berita->previousPageUrl() }}"
                        class="items-center px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-white rounded-md dark:bg-gray-800 dark:text-gray-200 hover:bg-blue-600 dark:hover:bg-blue-500 hover:text-white dark:hover:text-gray-200">
                        previous
                    </a>
                @endif

                @for ($i = 1; $i <= $berita->lastPage(); $i++)
                    @if ($i == $berita->currentPage())
                        <a href="#"
                            class="flex items-center px-4 py-2 mx-1 text-white bg-blue-600 rounded-md dark:bg-blue-500 dark:text-gray-200">
                            {{ $i }}
                        </a>
                    @else
                        <a href="{{ $berita->url($i) }}"
                            class="items-center px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-white rounded-md dark:bg-gray-800 dark:text-gray-200 hover:bg-blue-600 dark:hover:bg-blue-500 hover:text-white dark:hover:text-gray-200">
                            {{ $i }}
                        </a>
                    @endif
                @endfor

                @if ($berita->hasMorePages())
                    <a href="{{ $berita->nextPageUrl() }}"
                        class="items-center px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-white rounded-md dark:bg-gray-800 dark:text-gray-200 hover:bg-blue-600 dark:hover:bg-blue-500 hover:text-white dark:hover:text-gray-200">
                        Berikutnya
                    </a>
                @else
                    <a href="#"
                        class="flex items-center px-4 py-2 mx-1 text-gray-500 bg-white rounded-md cursor-not-allowed dark:bg-gray-800 dark:text-gray-600">
                        Berikutnya
                    </a>
                @endif
            </div>
        </div>
    </section>
</div>
