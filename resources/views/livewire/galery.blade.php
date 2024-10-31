<div>
    <section class="dark:bg-gray-900 mt-28">
        <div class="container px-6 py-10 mx-auto">
            <h1 class="text-2xl font-semibold text-center text-[#040181] capitalize lg:text-3xl dark:text-white">
                <span class="text-[#faec04]">Galeri</span> Partai Perjuangan Aceh
            </h1>

            <!-- Category Filter -->
            <div class="flex justify-center gap-4 mt-8">
                <button wire:click="filterCategory('all')"
                    class="px-4 py-2 rounded-lg {{ $selectedCategory === 'all' ? 'bg-[#040181] text-white' : 'bg-gray-200' }}">
                    Semua
                </button>
                @foreach ($categories as $category)
                    <button wire:click="filterCategory('{{ $category }}')"
                        class="px-4 py-2 rounded-lg {{ $selectedCategory === $category ? 'bg-[#040181] text-white' : 'bg-gray-200' }}">
                        {{ $category }}
                    </button>
                @endforeach
            </div>

            <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 lg:grid-cols-2">
                @foreach ($galeri as $item)
                    <div class="flex items-end overflow-hidden bg-cover rounded-lg h-96"
                        style="background-image:url('{{ $item->image }}')">
                        <div
                            class="w-full px-8 py-4 overflow-hidden rounded-b-lg backdrop-blur-sm bg-white/60 dark:bg-gray-800/60">
                            <h2 class="mt-4 text-xl font-semibold text-gray-800 capitalize dark:text-white">
                                {{ $item->title }}
                            </h2>
                            <p class="mt-2 text-lg tracking-wider text-blue-500 uppercase dark:text-blue-400">
                                {{ $item->kategori }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-8">
                {{ $galeri->links() }}
            </div>
        </div>
    </section>
</div>
