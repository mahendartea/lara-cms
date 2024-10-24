<nav
    class="dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-yellow-700 dark:border-gray-600 bg-[#faec04] py-5">
    <div class="max-w-screen-xl max-h-16 flex flex-wrap items-center justify-between mx-auto bg-[#faec04] mb-5">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="assets/img/logoPPA.png" class="h-32 bg-transparent no-border" alt="PPA Logo">
            <span class="self-center text-2xl md:text-[#040181] font-semibold whitespace-nowrap dark:text-white">Parta
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

</nav>
