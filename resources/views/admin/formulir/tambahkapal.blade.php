<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marko+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Marko+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Dashboard Admin</title>

</head>
<body>
<!-- NAV BAR -->
<nav class="bg-gradient-to-br from-sky-800 to-slate-100 shadow-xl">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="/img/logo.png" alt="logo" width="50" class="float-left flex flex-col object-cover">
            <span class="self-center text-3xl font-marko whitespace-nowrap uppercase">Anang Ferry</span>
        </a>

        <!-- dropdown -->
        <div class="relative" data-twe-dropdown-ref>
            <a class="flex items-center rounded bg-secondary-700 px-6 pb-2 pt-2.5 text-xs font-medium leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong" href="#" type="button" id="dropdownMenuButton2" data-twe-dropdown-toggle-ref aria-expanded="false" data-twe-ripple-color="light">

                <span class=" w-3 mr-3">
                    <img src="/img/user.png" alt="user">
                </span>
                <span class="font-inter text-sm">Administrator</span>
            </a>
            <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-base shadow-lg data-[twe-dropdown-show]:block dark:bg-surface-dark" aria-labelledby="dropdownMenuButton2" data-twe-dropdown-menu-ref>
                <li>
                    <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="#" data-twe-dropdown-item-ref>Pengaturan</a>
                </li>
                <li>
                    <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="#" data-twe-dropdown-item-ref>Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- SIDEBAR -->

<div class="flex w-full">
    <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
    </button>

    <aside id="default-sidebar" class="top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">

        <div class="h-full px-3 w-full py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
            <div class=" h-40 w-full mb-3 rounded-xl bg-sky-200">
                <div class="p-3 pt-5 ml-16 flex items-center">
                    <img src="/img/icons/user.png" width="70">
                </div>
                <span class="p-3 font-inter text-lg text-black ">Muhammad Dafa Putra</span>
            </div>
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="dashboard" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <img src="/img/icons/dashboard.png" class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" fill="currentColor">
                        <span class="flex-1 ms-4 whitespace-nowrap">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="kapal" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <img src="/img/icons/ships.png" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" fill="currentColor">
                        <span class="flex-1 ms-3 whitespace-nowrap">Kapal</span>
                    </a>
                </li>
                <li>
                    <a href="pelabuhan" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <img src="/img/icons/harbor.png" class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" fill="currentColor">
                        <span class="flex-1 ms-4 whitespace-nowrap">Pelabuhan</span>
                    </a>
                </li>
                <li>
                    <a href="rute" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <img src="/img/icons/route.png" class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" fill="currentColor">
                        <span class="flex-1 ms-4 whitespace-nowrap">Rute Perjalanan</span>
                    </a>
                </li>
                <li>
                    <a href="tiket" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <img src="/img/icons/ticket.png" class="flex-shrink-0 w-6 h-7 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" fill="currentColor">
                        <span class="flex-1 ms-3 whitespace-nowrap">Tiket</span>
                    </a>
                </li>
                <li>
                    <a href="pengguna" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <img src="/img/icons/pengguna.png" class="flex-shrink-0 w-6 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" fill="currentColor">
                        <span class="flex-1 ms-3 whitespace-nowrap">Pengguna</span>
                    </a>
                </li>
                <li>
                    <a href="pesanan" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <img src="/img/icons/shopping-cart.png" class="flex-shrink-0 w-6 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" fill="currentColor">
                        <span class="flex-1 ms-3 whitespace-nowrap">Pesanan</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>


<!-- CONTENT -->

<div class="ms-10 mt-10 me-10 flex flex-col flex-grow">
    <span class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white group">
        <img src="/img/icons/ships.png" class="flex-shrink-0 w-8 h-8 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor">
        <span class="flex-1 ms-4 whitespace-nowrap text-3xl font-bold">Data Kapal</span>
    </span>

    <!-- Formulir -->

    <div class="container block max-w-2xl overflow-hidden bg-white border border-gray-200 rounded-lg shadow mt-10">
        <div class="bg-red-200 p-6">
            <span class="font-inter font-semibold text-xl ">Formulir Kapal</span>
        </div>
        <div class="flex p-6">
            <div class="relative">
                <input type="text" id="username" class="border-b-2 border-blue-300 py-1 focus:outline-none focus:border-purple-600 focus:border-b-2 transition-colors peer" autocomplete="off">
                <label for="username" class="absolute left-0 top-1 text-gray-600 cursor-text peer-focus:text-xs peer-focus:-top-4 peer-focus:text-purple-600 transition-all">Kode</label>
            </div>
        </div>
        <div class="flex p-6">
            <div class="relative">
                <input type="text" id="username" class="border-b-2 border-blue-300 py-1 focus:outline-none focus:border-purple-600 focus:border-b-2 transition-colors peer" autocomplete="off">
                <label for="username" class="absolute left-0 top-1 text-gray-600 cursor-text peer-focus:text-xs peer-focus:-top-4 peer-focus:text-purple-600 transition-all">Nama</label>
            </div>
        </div>
        <div class="flex p-6">
            <div class="relative">
                <input type="text" id="username" class="border-b-2 border-blue-300 py-1 focus:outline-none focus:border-purple-600 focus:border-b-2 transition-colors peer" autocomplete="off">
                <label for="username" class="absolute left-0 top-1 text-gray-600 cursor-text peer-focus:text-xs peer-focus:-top-4 peer-focus:text-purple-600 transition-all">Kelas</label>
            </div>
        </div>
        <div class="flex p-6">
            <div class="relative">
                <input type="text" id="username" class="border-b-2 border-blue-300 py-1 focus:outline-none focus:border-purple-600 focus:border-b-2 transition-colors peer" autocomplete="off">
                <label for="username" class="absolute left-0 top-1 text-gray-600 cursor-text peer-focus:text-xs peer-focus:-top-4 peer-focus:text-purple-600 transition-all">Jumlah</label>
            </div>
        </div>
    </div><br>
        <a href="#" class="flex items-center p-2 text-gray-900 border-2 rounded-lg bg-slate-100 dark:text-white hover:bg-sky-500 hover:text-white dark:hover:bg-gray-500 transition duration-700 group max-w-36">
            <img src="/img/icons/tambahdata.png" class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" fill="currentColor">
            <span class="flex-1 ms-3 whitespace-nowrap">Simpan</span>
        </a>
    </div>
    </div>

</body>
</html>