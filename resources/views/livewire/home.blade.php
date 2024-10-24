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
    <section
        class="mt-28 bg-center bg-no-repeat bg-[url('https://www.djkn.kemenkeu.go.id/files/images/2022/11/Salinan_dari_KPKNL_BANDA_ACEH1.jpg')] bg-gray-600 bg-blend-multiply">
        <div class="container px-6 py-16 mx-auto">
            <div class="items-center lg:flex">
                <div class="w-full lg:w-2/3">
                    <div class="w-full">

                        <h1 class="text-5xl font-semibold md:text-[#faec04] dark:text-white lg:text-6xl my-5">
                            Parta
                            Perjuangan
                            Aceh
                            <span class="text-white dark:text-yellow-500">Maju
                                dan Sejahtera</span>
                        </h1>

                        <h1 class="text-2xl font-semibold md:text-[#faec04] dark:text-white lg:text-3xl mt-10">
                            "Membangun
                            Kembali Masyarakat Aceh
                            <span class="text-blue-600 dark:text-yellow-500">Maju
                                dan Sejahtera"</span>
                        </h1>

                        <p class=" text-gray-300 dark:text-gray-300 text-2xl mt-2 font-serif font-extrabold">
                            Dr. Marniati, S.E., M.Kes
                        </p>
                        <p class="text-white mb-5">Ketua Partai Perjuangan Aceh</p>

                        <a href="{{ route('registerasi') }}"
                            class="w-full px-5 py-2 mt-10 text-sm tracking-wider text-white uppercase transition-colors duration-300 transform bg-blue-700 shadow-lg rounded-lg lg:w-auto hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                            Daftar
                            Anggota
                        </a>
                    </div>
                </div>

                <div class="flex items-center justify-center w-full mt-6 lg:mt-0 lg:w-1/3">
                    <img class="w-full h-full lg:max-w-3xl relative top-20 brightness-100" src="assets/img/pimpinan.png"
                        alt="Catalogue-pana.svg">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="h-[32rem] bg-white dark:bg-gray-800">
            <div class="container px-6 pb-5 pt-20 mx-auto">
                <h1 class="text-2xl font-semibold text-center text-[#040181] capitalize lg:text-3xl dark:text-white">
                    Pengurus Harian </h1>

                <div class="flex justify-center mx-auto mt-6">
                    <span class="inline-block w-40 h-1 bg-[#040181] rounded-full"></span>
                    <span class="inline-block w-3 h-1 mx-1 bg-[#040181] rounded-full"></span>
                    <span class="inline-block w-1 h-1 bg-[#040181] rounded-full"></span>
                </div>

            </div>
        </div>

        <div class="container px-6 py-10 mx-auto -mt-72 sm:-mt-80 md:-mt-96">
            <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-16 md:grid-cols-2 xl:grid-cols-3">
                <div class="flex flex-col items-center p-4 border sm:p-6 rounded-xl dark:border-gray-700">
                    <img class="object-cover w-full rounded-xl aspect-square"
                        src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                        alt="">

                    <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white">arthur melo</h1>

                    <p class="mt-2 text-gray-500 capitalize dark:text-gray-300">Sekretaris</p>


                </div>

                <div class="flex flex-col items-center p-4 border sm:p-6 rounded-xl dark:border-gray-700">
                    <img class="object-cover w-full rounded-xl aspect-square"
                        src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                        alt="">

                    <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white">arthur melo</h1>

                    <p class="mt-2 text-gray-500 capitalize dark:text-gray-300">Bendahara</p>


                </div>

                <div class="flex flex-col items-center p-4 border sm:p-6 rounded-xl dark:border-gray-700">
                    <img class="object-cover w-full rounded-xl aspect-square"
                        src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                        alt="">

                    <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white">Pamela Anderson
                    </h1>

                    <p class="mt-2 text-gray-500 capitalize dark:text-gray-300"> Humas </p>


                </div>

            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-10 mx-auto">
            <h1 class="sm:text-4xl text-5xl font-medium  title-font mb-2 text-[#040181]">
                Pernyataan Sikap
            </h1>

            <span class="inline-block w-16 h-1 bg-[#040181] rounded-full"></span>
            <span class="inline-block w-3 h-1 mx-1 bg-[#040181] rounded-full"></span>
            <span class="inline-block w-1 h-1 bg-[#040181] rounded-full"></span>

            <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-16 md:grid-cols-2 xl:grid-cols-2">
                <div
                    class="px-12 py-8 transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-[#040181] dark:border-gray-700 dark:hover:border-transparent">
                    <div class="flex flex-col sm:-mx-4 sm:flex-row">
                        <img class="flex-shrink-0 object-cover w-24 h-24 rounded-full sm:mx-4 ring-4 ring-gray-300"
                            src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                            alt="">

                        <div class="mt-4 sm:mx-4 sm:mt-0">
                            <h1
                                class="text-xl font-semibold text-gray-700 capitalize md:text-2xl dark:text-white group-hover:text-white">
                                arthur melo</h1>

                            <p class="mt-2 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">
                                design director</p>
                        </div>
                    </div>

                    <p class="mt-4 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Illum nesciunt officia aliquam neque optio? Cumque
                        facere numquam est.</p>


                </div>

                <div
                    class="px-12 py-8 transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-[#040181] dark:border-gray-700 dark:hover:border-transparent">
                    <div class="flex flex-col sm:-mx-4 sm:flex-row">
                        <img class="flex-shrink-0 object-cover w-24 h-24 rounded-full sm:mx-4 ring-4 ring-gray-300"
                            src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                            alt="">

                        <div class="mt-4 sm:mx-4 sm:mt-0">
                            <h1
                                class="text-xl font-semibold text-gray-700 capitalize md:text-2xl dark:text-white group-hover:text-white">
                                Amelia. Anderson</h1>

                            <p class="mt-2 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">Lead
                                Developer</p>
                        </div>
                    </div>

                    <p class="mt-4 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Illum nesciunt officia aliquam neque optio? Cumque
                        facere numquam est.</p>


                </div>

                <div
                    class="px-12 py-8 transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-[#040181] dark:border-gray-700 dark:hover:border-transparent">
                    <div class="flex flex-col sm:-mx-4 sm:flex-row">
                        <img class="flex-shrink-0 object-cover w-24 h-24 rounded-full sm:mx-4 ring-4 ring-gray-300"
                            src="https://images.unsplash.com/photo-1488508872907-592763824245?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                            alt="">

                        <div class="mt-4 sm:mx-4 sm:mt-0">
                            <h1
                                class="text-xl font-semibold text-gray-700 capitalize md:text-2xl dark:text-white group-hover:text-white">
                                Olivia Wathan</h1>

                            <p class="mt-2 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">Lead
                                designer</p>
                        </div>
                    </div>

                    <p class="mt-4 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Illum nesciunt officia aliquam neque optio? Cumque
                        facere numquam est.</p>


                </div>

                <div
                    class="px-12 py-8 transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-[#040181] dark:border-gray-700 dark:hover:border-transparent">
                    <div class="flex flex-col sm:-mx-4 sm:flex-row">
                        <img class="flex-shrink-0 object-cover w-24 h-24 rounded-full sm:mx-4 ring-4 ring-gray-300"
                            src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                            alt="">

                        <div class="mt-4 sm:mx-4 sm:mt-0">
                            <h1
                                class="text-xl font-semibold text-gray-700 capitalize md:text-2xl dark:text-white group-hover:text-white">
                                John Doe</h1>

                            <p class="mt-2 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">Full
                                stack developer</p>
                        </div>
                    </div>

                    <p class="mt-4 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Illum nesciunt officia aliquam neque optio? Cumque
                        facere numquam est.</p>


                </div>
            </div>
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
            <a href="#"
                class="flex items-center px-4 py-2 mx-1 text-gray-500 bg-white rounded-md cursor-not-allowed dark:bg-gray-800 dark:text-gray-600">
                previous
            </a>

            <a href="#"
                class="items-center hidden px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-white rounded-md sm:flex dark:bg-gray-800 dark:text-gray-200 hover:bg-blue-600 dark:hover:bg-blue-500 hover:text-white dark:hover:text-gray-200">
                1
            </a>

            <a href="#"
                class="items-center hidden px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-white rounded-md sm:flex dark:bg-gray-800 dark:text-gray-200 hover:bg-blue-600 dark:hover:bg-blue-500 hover:text-white dark:hover:text-gray-200">
                2
            </a>

            <a href="#"
                class="items-center hidden px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-white rounded-md sm:flex dark:bg-gray-800 dark:text-gray-200 hover:bg-blue-600 dark:hover:bg-blue-500 hover:text-white dark:hover:text-gray-200">
                3
            </a>

            <a href="#"
                class="flex items-center px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-white rounded-md dark:bg-gray-800 dark:text-gray-200 hover:bg-blue-600 dark:hover:bg-blue-500 hover:text-white dark:hover:text-gray-200">
                Next
            </a>
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
                class="px-4 py-2 bg-[] text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                Selengkapnya
            </button>
        </div>
    </section>

</div>
