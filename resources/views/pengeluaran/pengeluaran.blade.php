<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="px-10 pt-5 pb-5 bg-white">
        <div class="flex items-center justify-left pb-5">
            <a href=""
                class="relative bg-gray-900 text-white px-3 py-2 rounded-md group flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
                <span id="openModalBtn" class="btnTambah text-base font-medium hover:text-gray-200">
                    Tambah Pengeluaran
                </span>
            </a>
        </div>

        <div class="overflow-auto rounded-lg shadow hidden md:block">
            <table class="w-full" id="myTable">
                <thead class="bg-gray-50 border-b-2 border-gray-200">
                    <tr>
                        <th class="w-10 p-1 text-sm font-semibold tracking-wide text-left">No.</th>
                        <th class="w-20 p-1 text-sm font-semibold tracking-wide text-left" name="nominal">Nominal</th>
                        <th class="w-24 p-1 text-sm font-semibold tracking-wide text-left" name="keterangan">Keterangan
                        </th>
                        <th class="w-24 p-1 text-sm font-semibold tracking-wide text-left" name="tanggal">Tanggal</th>
                        <th class="w-20 p-1 text-sm font-semibold tracking-wide text-left" name="bukti">Bukti</th>
                        <th class="w-24 p-1 text-sm font-semibold tracking-wide text-left" name="aksi">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>

    <div id="myModal" class="fixed inset-0 z-10 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
        <div class="bg-white p-6 shadow-lg w-2/4 border-gray-400">
            <h2 class="text-xl mb-4 font-medium">Tambah Pengeluaran</h2>
            <hr class="mb-4 border-gray-900">
            <form id="pengeluaranForm" action="#" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="nominal" class="block text-base font-medium text-gray-900 pb-2">Nominal</label>
                    <input type="text" name="jumlah" id="jumlah"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm text-lg px-3 py-2">
                </div>
                <div class="mb-6">
                    <label for="keterangan" class="block text-base text-gray-900 pb-2">Keterangan</label>
                    <input type="text" name="keterangan" id="keterangan"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm text-lg px-3 py-2">
                </div>
                <div class="mb-6">
                    <label for="tanggal" class="block text-base font-medium text-gray-900 pb-2">Tanggal</label>
                    <input type="text" name="tanggal" id="tanggal"
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
    @include('pengeluaran.script')

</x-layout>
