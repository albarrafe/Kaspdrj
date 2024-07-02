<x-layout>
    <x-slot:title>{{ $title }}


    </x-slot:title>
    <div class="bg-white p-6 rounded-md shadow-md">
        <form action="#" method="POST">
            @csrf
            <div class="mb-6">
                <label for="name" class="block text-base font-medium text-gray-900 pb-2">Nama Angota</label>
                <input type="text" name="name" id="name"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm text-lg px-3 py-2">
            </div>
            <div class="mb-6">
                <label for="phone" class="block text-base text-gray-900 pb-2">Tanggal</label>
                <input type="text" name="phone" id="phone"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm text-lg px-3 py-2">
            </div>
            <div class="mb-6">
                <label for="position" class="block text-base font-medium text-gray-900 pb-2">Jumlah</label>
                <input type="text" name="position" id="position"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm text-lg px-3 py-2">
            </div>
            <div class="mb-6">
                <label for="bukti" class="block text-base font-medium text-gray-900 pb-2">Bukti</label>
                <input type="text" name="bukti" id="bukti"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm text-lg px-3 py-2">
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-gray-900 text-white px-4 py-2 rounded">Simpan</button>
            </div>
        </form>
    </div>



</x-layout>
