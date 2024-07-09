<x-layout>
    <x-slot:title>{{ $title }}
        <div class=" flex items-center justify-left">
            <a href="/pencatatan"class="relative bg-grey-900 text-white pt-5 group">
                <span class="text-black block rounded-md px-3 py-2 text-base font-medium border border-gray-900">Kas
                    bulanan</span>
            </a>
            <a href="/kaslistrik"class="relative bg-white-900 text-white pt-5 group px-5 ">
                <span class="text-black block rounded-md px-3 py-2 text-base font-medium border border-gray-900">
                    Kas Listrik</span>
            </a>
            <a href="/kasagustus"class="relative bg-grey-900 text-white pt-5 group ">
                <span class="bg-gray-900 hover:text-white block rounded-md px-3 py-2 text-base font-medium">
                    Kas Agustusan</span>
            </a>
        </div>

    </x-slot:title>


    <div class="px-10 py-5 bg-white">

        <div class=" flex items-center justify-left pb-5">
            <a href="#"
                class="relative bg-gray-900 text-white px-3 py-2 rounded-md group flex items-center space-x-2 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>

                <span id="openModalBtn" class="text-base font-medium hover:text-gray-200">
                    Tambah Pencatatan Kas
                </span>

            </a>
        </div>


        <div class="overflow-auto rounded-lg shadow hidden md:block">
            <table class="w-full" id="myTable">
                <thead class="bg-gray-50 border-b-2 border-gray-200">
                    <tr>
                        <th class="w-16 p-3 text-sm font-semibold tracking-wide text-left">No.</th>
                        <th class="w-48 p-3 text-sm font-semibold tracking-wide text-left">Nama</th>
                        <th class="w-24 p-3 text-sm font-semibold tracking-wide text-left">Tanggal</th>
                        <th class="w-20 p-3 text-sm font-semibold tracking-wide text-left">Jumlah</th>
                        <th class="w-20 p-3 text-sm font-semibold tracking-wide text-left">Bukti</th>
                        <th class="w-28 p-3 text-sm font-semibold tracking-wide text-left">Aksi</th>
                    </tr>
                </thead>

            </table>
        </div>


    </div>

    <div id="myModal" class="fixed inset-0 z-10 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
        <hr class="mb-6 border-gray-500">
        <div class="bg-white p-6 shadow-lg w-2/4 border-gray-400">
            <h2 class="text-xl mb-4 font-medium">Tambah Pengeluaran</h2>
            <hr class="mb-4 border-gray-900">
            <form action="#" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block text-base font-medium text-gray-900 pb-2">Nama Pengurus</label>
                    <input type="text" name="nama" id="nama"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm text-lg px-3 py-2">
                </div>
                <div class="mb-6">
                    <label for="phone" class="block text-base text-gray-900 pb-2">Tanggal</label>
                    <input type="text" name="tanggal" id="tanggal"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm text-lg px-3 py-2">
                </div>
                <div class="mb-6">
                    <label for="position" class="block text-base font-medium text-gray-900 pb-2">Jumlah</label>
                    <input type="text" name="jumlah" id="jumlah"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm text-lg px-3 py-2">
                </div>
                <div class="mb-6">
                    <label for="bukti" class="block text-base font-medium text-gray-900 pb-2">Bukti</label>
                    <input type="text" name="bukti" id="bukti"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm text-lg px-3 py-2">
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="bg-gray-900 text-white px-4 py-2 rounded btnSimpan">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    </div>

    @include('kas.script.scriptagustus')

</x-layout>
