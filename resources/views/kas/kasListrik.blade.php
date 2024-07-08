<x-layout>
    <x-slot:title>{{ $title }}
        <div class=" flex items-center justify-left">
            <a href="/pencatatan"class="relative bg-grey-900 text-white pt-5 group">
                <span class="text-black block rounded-md px-3 py-2 text-base font-medium border border-gray-900">Kas
                    bulanan</span>
            </a>
            <a href="/kasListrik"class="relative bg-white-900 text-white pt-5 group px-5 ">
                <span class="bg-gray-900 hover:text-white block rounded-md px-3 py-2 text-base font-medium">
                    Kas Listrik</span>
            </a>
            <a href="/kasAgustus"class="relative bg-grey-900 text-white pt-5 group ">
                <span class="text-black block rounded-md px-3 py-2 text-base font-medium border border-gray-900">
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
            <table class="w-full">
                <thead class="bg-gray-50 border-b-2 border-gray-200">
                    <tr>
                        <th class="w-16 p-3 text-sm font-semibold tracking-wide text-left">No.</th>
                        <th class="w-48 p-3 text-sm font-semibold tracking-wide text-left">Nama</th>
                        <th class="w-24 p-3 text-sm font-semibold tracking-wide text-left">Tanggal</th>
                        <th class="w-20 p-3 text-sm font-semibold tracking-wide text-left">Jumlah</th>
                        <th class="w-28 p-3 text-sm font-semibold tracking-wide text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <tr class="bg-white">
                        <td class="p-4 text-sm text-gray-700 whitespace-nowrap">
                            <a href="#" class="font-bold text-blue-500 hover:underline">1</a>
                        </td>
                        <td class="p-2 text-sm text-gray-700 whitespace-nowrap">
                            Bau Alvaro
                        </td>
                        <td class="p-2 text-sm text-gray-700 whitespace-nowrap">
                            <span
                                class="p-1.5 text-xs font-medium uppercase tracking-wider text-green-800 bg-green-200 rounded-lg bg-opacity-50">Delivered</span>
                        </td>
                        <td class="p-2 text-sm text-gray-700 whitespace-nowrap">16/10/2021</td>
                        <td class="p-2 text-sm text-gray-700 whitespace-nowrap">$200.00</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="p-4 text-sm text-gray-700 whitespace-nowrap">
                            <a href="#" class="font-bold text-blue-500 hover:underline">2</a>
                        </td>
                        <td class="p-2 text-sm text-gray-700 whitespace-nowrap"> Ari</td>
                        <td class="p-2 text-sm text-gray-700 whitespace-nowrap">
                            <span
                                class="p-1.5 text-xs font-medium uppercase tracking-wider text-yellow-800 bg-yellow-200 rounded-lg bg-opacity-50">Shipped</span>
                        </td>
                        <td class="p-2 text-sm text-gray-700 whitespace-nowrap">16/10/2021</td>
                        <td class="p-2 text-sm text-gray-700 whitespace-nowrap">$200.00</td>
                    </tr>
                    <tr class="bg-white">
                        <td class="p-4 text-sm text-gray-700 whitespace-nowrap">
                            <a href="#" class="font-bold text-blue-500 hover:underline">3</a>
                        </td>
                        <td class="p-2 text-sm text-gray-700 whitespace-nowrap">Seni</td>
                        <td class="p-2 text-sm text-gray-700 whitespace-nowrap">
                            <span
                                class="p-1.5 text-xs font-medium uppercase tracking-wider text-gray-800 bg-gray-200 rounded-lg bg-opacity-50">Cancelled</span>
                        </td>
                        <td class="p-2 text-sm text-gray-700 whitespace-nowrap">16/10/2021</td>
                        <td class="p-2 text-sm text-gray-700 whitespace-nowrap">$200.00</td>
                    </tr>
                </tbody>
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
                    <input type="text" name="position" id="position"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm text-lg px-3 py-2">
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="bg-gray-900 text-white px-4 py-2 rounded">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    </div>

    <script>
        document.getElementById('openModalBtn').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('myModal').classList.remove('hidden');
        });

        // Add event listener to close modal when clicking outside
        document.addEventListener('click', function(event) {
            var modal = document.getElementById('myModal');
            if (event.target === modal) {
                modal.classList.add('hidden');
            }
        });
    </script>

</x-layout>
