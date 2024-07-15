<x-layout>
    <x-slot name="title">{{ $title }}</x-slot>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800&display=swap"
        rel="stylesheet">

    <style>
        .body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>

    <div class="container items-center px-4 py-8 m-auto mt-5">
        <div class="flex flex-wrap pb-3 mx-4 md:mx-24 lg:mx-0">
            <div class="w-full p-2 lg:w-1/4 md:w-1/2">
                <div
                    class="flex flex-col p-6 overflow-hidden duration-300 bg-indigo-900 shadow-lg rounded-xl hover:shadow-2xl">
                    <div class="flex items-center justify-center w-12 h-12 mb-6 bg-white rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6 text-indigo-900">
                            <path
                                d="M4.5 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM14.25 8.625a3.375 3.375 0 1 1 6.75 0 3.375 3.375 0 0 1-6.75 0ZM1.5 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM17.25 19.128l-.001.144a2.25 2.25 0 0 1-.233.96 10.088 10.088 0 0 0 5.06-1.01.75.75 0 0 0 .42-.643 4.875 4.875 0 0 0-6.957-4.611 8.586 8.586 0 0 1 1.71 5.157v.003Z" />
                        </svg>
                    </div>
                    <div class="p-4 bg-white border border-white border-opacity-50 bg-opacity-40 rounded-xl">
                        <h4 class="text-lg font-semibold text-indigo-50">Jumlah Anggota</h4>
                        <h1 class="mt-2 text-3xl font-bold text-white">{{ $totalAnggota }}</h1>
                        <div class="w-full h-2 mt-4 bg-indigo-200 rounded-md hover:bg-gray-300">
                            <div class="h-2 bg-indigo-900 rounded-md" style="width: 50%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full p-2 lg:w-1/4 md:w-1/2">
                <div
                    class="flex flex-col p-6 overflow-hidden duration-300 bg-green-900 shadow-lg rounded-xl hover:shadow-2xl">
                    <div class="flex items-center justify-center w-12 h-12 mb-6 bg-white rounded-xl">
                        <svg class="w-7 h-7 my-auto fill-[#14532d]" viewBox="0 0 576 512"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M312 24V34.5c6.4 1.2 12.6 2.7 18.2 4.2c12.8 3.4 20.4 16.6 17 29.4s-16.6 20.4-29.4 17c-10.9-2.9-21.1-4.9-30.2-5c-7.3-.1-14.7 1.7-19.4 4.4c-2.1 1.3-3.1 2.4-3.5 3c-.3 .5-.7 1.2-.7 2.8c0 .3 0 .5 0 .6c.2 .2 .9 1.2 3.3 2.6c5.8 3.5 14.4 6.2 27.4 10.1l.9 .3c11.1 3.3 25.9 7.8 37.9 15.3c13.7 8.6 26.1 22.9 26.4 44.9c.3 22.5-11.4 38.9-26.7 48.5c-6.7 4.1-13.9 7-21.3 8.8V232c0 13.3-10.7 24-24 24s-24-10.7-24-24V220.6c-9.5-2.3-18.2-5.3-25.6-7.8c-2.1-.7-4.1-1.4-6-2c-12.6-4.2-19.4-17.8-15.2-30.4s17.8-19.4 30.4-15.2c2.6 .9 5 1.7 7.3 2.5c13.6 4.6 23.4 7.9 33.9 8.3c8 .3 15.1-1.6 19.2-4.1c1.9-1.2 2.8-2.2 3.2-2.9c.4-.6 .9-1.8 .8-4.1l0-.2c0-1 0-2.1-4-4.6c-5.7-3.6-14.3-6.4-27.1-10.3l-1.9-.6c-10.8-3.2-25-7.5-36.4-14.4c-13.5-8.1-26.5-22-26.6-44.1c-.1-22.9 12.9-38.6 27.7-47.4c6.4-3.8 13.3-6.4 20.2-8.2V24c0-13.3 10.7-24 24-24s24 10.7 24 24zM568.2 336.3c13.1 17.8 9.3 42.8-8.5 55.9L433.1 485.5c-23.4 17.2-51.6 26.5-80.7 26.5H192 32c-17.7 0-32-14.3-32-32V416c0-17.7 14.3-32 32-32H68.8l44.9-36c22.7-18.2 50.9-28 80-28H272h16 64c17.7 0 32 14.3 32 32s-14.3 32-32 32H288 272c-8.8 0-16 7.2-16 16s7.2 16 16 16H392.6l119.7-88.2c17.8-13.1 42.8-9.3 55.9 8.5zM193.6 384l0 0-.9 0c.3 0 .6 0 .9 0z">
                            </path>
                        </svg>
                    </div>
                    <div class="p-4 bg-white border border-white border-opacity-50 bg-opacity-40 rounded-xl">
                        <h4 class="text-lg font-semibold text-green-50">Pemasukan</h4>
                        <h1 class="mt-2 text-3xl font-bold text-white">Rp
                            {{ number_format($totalBayarKas, 0, ',', '.') }}</h1>
                        </h1>
                        <div class="w-full h-2 mt-4 bg-green-200 rounded-md hover:bg-gray-300">
                            <div class="h-2 bg-green-900 rounded-md" style="width: 90%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full p-2 lg:w-1/4 md:w-1/2">
                <div
                    class="flex flex-col p-6 overflow-hidden duration-300 bg-red-900 shadow-lg rounded-xl hover:shadow-2xl">
                    <div class="flex items-center justify-center w-12 h-12 mb-6 bg-white rounded-xl">
                        <svg class="w-6 h-6 fill-[#7f1d1d]" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M160 112c0-35.3 28.7-64 64-64s64 28.7 64 64v48H160V112zm-48 48H48c-26.5 0-48 21.5-48 48V416c0 53 43 96 96 96H352c53 0 96-43 96-96V208c0-26.5-21.5-48-48-48H336V112C336 50.1 285.9 0 224 0S112 50.1 112 112v48zm24 48a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm152 24a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z">
                            </path>
                        </svg>
                    </div>
                    <div class="p-4 bg-white border border-white border-opacity-50 bg-opacity-40 rounded-xl">
                        <h4 class="text-lg font-semibold text-blue-50">Pengeluaran</h4>
                        <h1 class="mt-2 text-3xl font-bold text-white">
                            <h1 class="mt-2 text-3xl font-bold text-white">Rp
                                {{ number_format($totalPengeluaran, 0, ',', '.') }}</h1>
                        </h1>
                        <div class="w-full h-2 mt-4 bg-red-200 rounded-md hover:bg-gray-300">
                            <div class="h-2 bg-red-900 rounded-md" style="width: 70%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full p-2 lg:w-1/4 md:w-1/2">
                <div
                    class="flex flex-col p-6 overflow-hidden duration-300 bg-blue-900 shadow-lg rounded-xl hover:shadow-2xl">
                    <div class="flex items-center justify-center w-12 h-12 mb-6 bg-white rounded-xl">
                        <svg class="w-6 h-6 my-auto text-blue-900" fill="none" stroke="currentColor"
                            stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                    <div class="p-4 bg-white border border-white border-opacity-50 bg-opacity-40 rounded-xl">
                        <h4 class="text-lg font-semibold text-red-50">Total Uang Kas</h4>
                        <h1 class="mt-2 text-3xl font-bold text-white">
                            <h1 class="mt-2 text-3xl font-bold text-white">Rp
                                {{ number_format($totalKas, 0, ',', '.') }}</h1>
                        </h1>
                        <div class="w-full h-2 mt-4 bg-blue-200 rounded-md">
                            <div class="h-2 bg-blue-900 rounded-md" style="width: 85%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
