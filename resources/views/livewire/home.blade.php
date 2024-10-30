<div>
    {{-- button vertical stiky --}}
    <a type="button" id="btn-sticky" href="{{ route('registerasi') }}"
        class="hidden fixed z-30 top-72 py-3 px-5 left-5 md:left-0 p-2 bg-[#040181] text-white font-bold text-sm rounded-e-lg shadow-md transition duration-300 hover:bg-blue-600 uppercase hover:shadow-lg">
        Daftar Anggota
    </a>

    <script>
        const btnSticky = document.getElementById('btn-sticky');

        function toggleSticky() {
            btnSticky.classList.toggle('hidden');
            btnSticky.classList.toggle('fixed');
        }

        window.addEventListener('scroll', () => {
            if (window.scrollY > 700) {
                btnSticky.classList.remove('hidden');
                btnSticky.classList.add('fixed');
            } else {
                btnSticky.classList.add('hidden');
                btnSticky.classList.remove('fixed');
            }
        });
    </script>

    <div id="default-carousel" class="relative w-full lg:mt-28 z-0" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative overflow-hidden rounded-lg lg:h-[90vh] md:h[60vh] h-[30vh]">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/assets/img/slideone.jpeg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/assets/img/slidetwo.jpeg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/assets/img/slidetiga.jpeg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-6xl px-6 py-10 mx-auto">
            <div class="flex flex-wrap w-full mb-4 p-4">
                <div class="w-full mb-6 lg:mb-0">
                    <h1 class="sm:text-4xl text-5xl font-medium  title-font mb-2 text-[#040181]">Ketua Umum Partai
                    </h1>
                    <span class="inline-block w-16 h-1 bg-[#040181] rounded-full"></span>
                    <span class="inline-block w-3 h-1 mx-1 bg-[#040181] rounded-full"></span>
                    <span class="inline-block w-1 h-1 bg-[#040181] rounded-full"></span>
                </div>
            </div>

            <main class="relative z-10 w-full mt-8 md:flex md:items-center xl:mt-12">
                <div class="absolute w-full bg-[#040181] -z-10 md:h-96 rounded-2xl"></div>

                <div class="w-full p-6 bg-blue-600 md:flex md:items-center rounded-2xl md:bg-transparent md:p-0 lg:px-12 md:justify-evenly">
                    <img class="h-24 w-24 md:mx-6 rounded-full object-cover md:h-[32rem] md:w-80
                    lg:h-[36rem] lg:w-[26rem] md:rounded-2xl"
                         src="/assets/img/pimpinan.png" alt="client photo" />

                    <div class="mt-2 md:mx-6">
                        <div>
                            <p class="text-xl font-medium tracking-tight text-white" id="title">Prof. Adjunct Dr.
                                Marniati, S.E., M.Kes</p>
                            <p class="text-blue-200 " id="subtitle">Ketua Umum Partai Perjuangan Aceh</p>
                        </div>

                        <p class="mt-4 text-lg leading-relaxed text-white md:text-xl capitalize" id="paragraf">
                            “Harapan akan berubah menjadi jawaban, Jika diiringi dengan Usaha”.
                        </p>

                        <div class="flex items-center justify-between mt-6 md:justify-start">

                        </div>
                    </div>
                </div>
            </main>
        </div>
    </section>

    <section class="grid lg:grid-cols-2 grid-cols-1 w-full bg-white dark:bg-gray-900 h-[500px]">
        <div style="background-image:url(/assets/img/slideempat.jpeg);
        background-size:cover; background-position:center; height:100%"></div>
        <div class="flex flex-col items-center justify-center p-10 bg-[#feec03]">
            <h2 class="text-3xl font-bold text-[#040181]">Visi</h2>
            <p class="mt-4 text-lg leading-relaxed text-gray-600 dark:text-gray-300">
                Membangun Aceh yang mandiri, sejahtera, dan berkeadilan sosial
            </p>
            <h2 class="mt-10 text-3xl font-bold text-[#040181]">Misi</h2>
            <ul class="mt-4 list-disc list-inside text-lg leading-relaxed text-gray-600 dark:text-gray-300">
                <li>Mengembangkan demokrasi yang sehat dan kuat</li>
                <li>Mengoptimalkan potensi sumber daya manusia dan sumber daya alam</li>
                <li>Mengembangkan perekonomian rakyat yang mandiri dan berkeadilan</li>
                <li>Mengoptimalkan peran masyarakat sipil dalam proses pengambilan keputusan</li>
                <li>Mengembangkan peradaban yang berbasis pada nilai-nilai keadilan, kesetaraan, dan kebersamaan</li>
            </ul>
        </div>
    </section>
    <section class="grid lg:grid-cols-2 grid-cols-1 w-full bg-white dark:bg-gray-900 h-[500px]">
        <div class="flex flex-col items-center justify-center p-10 bg-[#feec03] border-r-2 border-[#040181]">
            <h2 class="text-3xl font-bold text-[#040181]">Sejarah Partai</h2>
            <p class="mt-4 text-lg leading-relaxed text-gray-600 dark:text-gray-300">
                Partai Perjuangan Aceh adalah partai politik yang berdiri pada tanggal 25 Oktober 2024. Partai ini
                berjuang
                untuk memperjuangkan kepentingan rakyat Aceh dan membangun Aceh yang sejahtera dan berkeadilan.
            </p>
        </div>
        <div class="bg-[#040181] bg-no-repeat bg-center flex items-center justify-center">
            <img src="/assets/img/logobesar.jpeg" class="h-[500px] object-cover" alt="sejarah partai" />
        </div>
    </section>
    <!-- component -->
    <section class="text-gray-600 body-font bg-gray-50">
        <div class="container px-5 py-24 mx-auto max-w-7x1">
            <div class="flex flex-wrap w-full mb-4 p-4">
                <div class="w-full mb-6 lg:mb-0">
                    <h1 class="sm:text-4xl text-5xl font-medium  title-font mb-2 text-[#040181]">Liputan Kegiatan
                    </h1>
                    <span class="inline-block w-16 h-1 bg-[#040181] rounded-full"></span>
                    <span class="inline-block w-3 h-1 mx-1 bg-[#040181] rounded-full"></span>
                    <span class="inline-block w-1 h-1 bg-[#040181] rounded-full"></span>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-10 md:grid-cols-2 xl:grid-cols-3">
                @foreach ($news as $berita)
                    <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                        <img class="object-cover object-center w-full h-64 rounded-lg lg:h-80"
                            src="{{ $berita->image }}" alt="">

                        <div class="mt-8 p-5">
                            {{-- <span class="text-blue-500 uppercase">category</span> --}}

                            <h1 class="mt-4 text-xl font-semibold text-gray-800 dark:text-white">
                                {{ $berita->title }}
                            </h1>

                            <p class="mt-2 text-gray-500 dark:text-gray-400">
                                {{ $berita->content }}
                            </p>

                            <div class="flex items-center justify-between mt-4">
                                <div>
                                    {{-- <a href="#"
                                        class="text-lg font-medium text-gray-700 dark:text-gray-300 hover:underline hover:text-gray-500">
                                        John snow
                                    </a> --}}

                                    <p class="text-sm text-gray-500 dark:text-gray-400">
                                        <?php
                                        $bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                                        $result = $berita->created_at->locale('id_ID')->isoFormat('d') . ' ' . $bulan[$berita->created_at->format('m') - 1] . ' ' . $berita->created_at->locale('id_ID')->isoFormat('Y');
                                        echo $result;
                                        ?>
                                    </p>
                                </div>

                                {{-- <a href="#"
                                    class="inline-block text-blue-500 underline hover:text-blue-400">Read
                                    more</a> --}}
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <div class="flex justify-center pb-10">
            <button
                class="px-4 py-2 bg-[#040181] text-white font-semibold rounded-lg shadow-md hover:bg-blue-700
                focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                Selengkapnya
            </button>
        </div>
    </section>



    <section class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-10 mx-auto">
            <h1 class="sm:text-4xl text-5xl font-medium title-font mb-2 text-[#040181]">
                Galeri Kegiatan
            </h1>
            <span class="inline-block w-16 h-1 bg-[#040181] rounded-full"></span>
            <span class="inline-block w-3 h-1 mx-1 bg-[#040181] rounded-full"></span>
            <span class="inline-block w-1 h-1 bg-[#040181] rounded-full"></span>
            <div class="flex items-center justify-center py-4 md:py-8 flex-wrap">
                <button type="button"
                    class="text-blue-700 hover:text-white border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800">
                    Semua
                </button>
                <button type="button"
                    class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">
                    Sosialisasi
                </button>
                <button type="button"
                    class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">
                    Kepartaian
                </button>
                <button type="button"
                    class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">
                    Solidaritas
                </button>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                @foreach ($galeri as $gal)
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ $gal->image }}" alt="">
                    </div>
                @endforeach

                {{-- more images --}}

            </div>
        </div>
        <div class="flex justify-center mt-10">
            <button
                class="px-4 py-2 bg-[#040181] text-white font-semibold rounded-lg shadow-md hover:bg-blue-700
                focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                Selengkapnya
            </button>
        </div>
    </section>

</div>
