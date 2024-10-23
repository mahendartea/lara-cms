<div>
    <nav
        class="dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-yellow-700 dark:border-gray-600 bg-[#faec04] py-5">
        <div class="max-w-screen-xl max-h-16 flex flex-wrap items-center justify-between mx-auto bg-[#faec04] mb-5">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="assets/img/logoPPA.png" class="h-32 bg-transparent no-border" alt="PPA Logo">
                <span
                    class="self-center text-2xl md:text-[#040181] font-semibold whitespace-nowrap dark:text-white">Parta
                    Perjuangan
                    Aceh</span>
            </a>

            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 " id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 bg-[#faec04] rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-[#faec04] dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    @foreach ($menu as $m)
                        <li>
                            <a href="{{ $m->link }}"
                                class="block py-2 px-3 text-white bg-yellow-700 md:hover:border-b md:border-yellow-500 md:bg-transparent md:text-[#040181] md:hover:text-yellow-500 md:p-0 md:dark:text-yellow-500"
                                aria-current="page">{{ $m->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        {{-- button vertical stiky --}}
        <button type="button" id="btn-sticky"
            class="hidden fixed z-30 top-72 py-3 px-5 left-5 md:left-0 p-2 bg-[#040181] text-white font-bold text-sm rounded-e-lg shadow-md transition duration-300 hover:bg-blue-600 uppercase hover:shadow-lg"
            onclick="toggleSticky()">
            Daftar Anggota
        </button>

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
    </nav>


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
                        <p class="text-white">Ketua Partai Perjuangan Aceh</p>

                        <button
                            class="w-full px-5 py-2 mt-10 text-sm tracking-wider text-white uppercase transition-colors duration-300 transform bg-blue-700 shadow-lg rounded-lg lg:w-auto hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                            Daftar
                            Anggota
                        </button>
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
            <div class="flex flex-wrap -m-4">
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="bg-white p-6 rounded-lg hover:bg-gray-100 hover:shadow-sm">
                        <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72  rounded w-full object-cover object-center mb-6"
                            src="https://kuyou.id/content/images/ctc_2020021605150668915.jpg" alt="Image Size 720x400">
                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">SUBTITLE</h3>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Chichen Itza</h2>
                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat.
                            Distillery hexagon disrupt edison bulbche.</p>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="bg-white p-6 rounded-lg hover:bg-gray-100 hover:shadow-sm">
                        <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72 rounded w-full object-cover object-center mb-6"
                            src="https://asset.kompas.com/crops/Pk_pN6vllxXy1RshYsEv74Q1BYA=/56x0:1553x998/750x500/data/photo/2021/06/16/60c8f9d68ff4a.jpg"
                            alt="Image Size 720x400">
                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">SUBTITLE</h3>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Colosseum Roma</h2>
                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat.
                            Distillery hexagon disrupt edison bulbche.</p>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="bg-white p-6 rounded-lg hover:bg-gray-100 hover:shadow-sm">
                        <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72 rounded w-full object-cover object-center mb-6"
                            src="https://images.immediate.co.uk/production/volatile/sites/7/2019/07/33-GettyImages-154260931-216706f.jpg?quality=90&resize=768%2C574"
                            alt="Image Size 720x400">
                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">SUBTITLE</h3>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Great Pyramid of Giza</h2>
                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat.
                            Distillery hexagon disrupt edison bulbche.</p>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="bg-white p-6 rounded-lg hover:bg-gray-100 hover:shadow-sm">
                        <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72 rounded w-full object-cover object-center mb-6"
                            src="https://wisatamuda.com/wp-content/uploads/2019/02/1-Golden-Gate-Bridge-Gambar-dan-Foto-Tempat-Wisata-Terbaik-di-San-Fransisco-USA.jpg"
                            alt="Image Size 720x400">
                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">SUBTITLE</h3>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">San Francisco</h2>
                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat.
                            Distillery hexagon disrupt edison bulbche.</p>
                    </div>
                </div>
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

    {{-- <section class="dark:bg-gray-900 bg-gray-50">
        <div class="container px-6 py-12 mx-auto">
            <div class="text-center">
                <p class="font-medium text-[#040181] dark:text-blue-400">Kontak</p>

                <h1 class="mt-2 text-2xl font-semibold text-gray-800 md:text-3xl dark:text-white">Hubungi Kami</h1>

            </div>

            <div class="grid grid-cols-1 gap-12 mt-10 md:grid-cols-2 lg:grid-cols-3">
                <div class="flex flex-col items-center justify-center text-center">
                    <span class="p-3 text-blue-500 rounded-full bg-blue-200/80 dark:bg-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-[#040181]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                    </span>

                    <h2 class="mt-4 text-lg font-medium text-gray-800 dark:text-white">Email</h2>
                    <p class="mt-2 text-gray-500 dark:text-gray-400">Our friendly team is here to help.</p>
                    <p class="mt-2 text-blue-500 dark:text-blue-400">hello@merakiui.com</p>
                </div>

                <div class="flex flex-col items-center justify-center text-center">
                    <span class="p-3 text-blue-500 rounded-full bg-blue-200/80 dark:bg-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-[#040181]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                    </span>

                    <h2 class="mt-4 text-lg font-medium text-gray-800 dark:text-white">Office</h2>
                    <p class="mt-2 text-gray-500 dark:text-gray-400">Come say hello at our office HQ.</p>
                    <p class="mt-2 text-blue-500 dark:text-blue-400">100 Smith Street Collingwood VIC 3066 AU</p>
                </div>

                <div class="flex flex-col items-center justify-center text-center">
                    <span class="p-3 text-blue-500 rounded-full bg-blue-200/80 dark:bg-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-[#040181]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                        </svg>
                    </span>

                    <h2 class="mt-4 text-lg font-medium text-gray-800 dark:text-white">Phone</h2>
                    <p class="mt-2 text-gray-500 dark:text-gray-400">Mon-Fri from 8am to 5pm.</p>
                    <p class="mt-2 text-blue-500 dark:text-blue-400">+1 (555) 000-0000</p>
                </div>
            </div>
        </div>
    </section> --}}


</div>
