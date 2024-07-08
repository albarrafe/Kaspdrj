<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="px-10 py-5 bg-white">
        <div class="flex items-center justify-left pb-5">
            <a href="#" id="openModalBtn"
                class="relative bg-gray-900 text-white px-3 py-2 rounded-md group flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="h-5 w-5 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                </svg>
                <span class="text-base font-medium hover:text-gray-200">Tambah Anggota</span>
            </a>
        </div>

        <div class="overflow-auto rounded-lg shadow md:block">
            <table class="w-full " id="myTable">
                <thead class="bg-gray-50 border-b-2 border-gray-200 myTable">
                    <tr>
                        <th class="w-20 p-3 text-sm font-semibold tracking-wide text-left">No.</th>
                        <th class="w-20 p-3 text-sm font-semibold tracking-wide text-left">Nama</th>
                        <th class="w-24 p-3 text-sm font-semibold tracking-wide text-left">No Telp</th>
                        <th class="w-24 p-3 text-sm font-semibold tracking-wide text-left">Jabatan</th>
                        <th class="w-32 p-3 text-sm font-semibold tracking-wide text-left">Aksi</th>
                    </tr>
                </thead>

            </table>
        </div>

        <!-- Modal -->
        <div id="myModal"
            class="fixed inset-0 z-10 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
            <hr class="mb-6 border-gray-500">
            <div class="bg-white p-6 shadow-lg w-2/4 border-gray-400">
                <h2 class="text-xl mb-4 font-medium">Tambah Anggota</h2>
                <hr class="mb-4 border-gray-900">

                @csrf
                <div class="mb-6">
                    <label for="name" class="block text-base font-medium text-gray-900 pb-2">Nama
                        Anggota</label>
                    <input type="text" name="nama" id="nama"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm text-lg px-3 py-2">
                </div>
                <div class="mb-6">
                    <label for="phone" class="block text-base text-gray-900 pb-2">No Telp</label>
                    <input type="text" name="no_telp" id="no_telp"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm text-lg px-3 py-2">
                </div>
                <div class="mb-6">
                    <label for="position" class="block text-base font-medium text-gray-900 pb-2">Jabatan</label>
                    <input type="text" name="jabatan" id="jabatan"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm text-lg px-3 py-2">
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="bg-gray-900 text-white px-4 py-2 rounded btnSimpan">Simpan</button>
                </div>

            </div>
        </div>

    </div>
    @include('anggota.script')
</x-layout>
