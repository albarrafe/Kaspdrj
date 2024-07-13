<x-layout>
    <x-slot name="title">
        {{ $title }}
    </x-slot>

    <div class="bg-white p-6 rounded-md shadow-md">
        <div>
            <div class="mb-6">
                <p class="text-gray-700 text-base font-medium">Silahkan transfer ke rekening berikut:</p>
                <ul class="list-disc pl-6">
                    <li>BCA: 28912839</li>
                    <li>DANA: 0832792793</li>
                </ul>
            </div>

            <form action="" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="nama" class="block text-base font-medium text-gray-900 pb-2">Nama Anggota</label>
                    <select name="nama" id="nama"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm text-lg px-3 py-2"></select>
                </div>
                <div class="mb-6">
                    <label for="tanggal" class="block text-base text-gray-900 pb-2">Tanggal</label>
                    <input type="text" name="tanggal" id="tanggal"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm text-lg px-3 py-2">
                </div>
                <div class="mb-6">
                    <label for="jumlah" class="block text-base font-medium text-gray-900 pb-2">Jumlah</label>
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
    @include('bayarkas.script')
</x-layout>
