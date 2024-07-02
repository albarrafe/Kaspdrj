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
            <table class="w-full">
                <thead class="bg-gray-50 border-b-2 border-gray-200">
                    <tr>
                        <th class="w-20 p-3 text-sm font-semibold tracking-wide text-left">No.</th>
                        <th class="w-20 p-3 text-sm font-semibold tracking-wide text-left">Nama</th>
                        <th class="w-24 p-3 text-sm font-semibold tracking-wide text-left">No Telp</th>
                        <th class="w-24 p-3 text-sm font-semibold tracking-wide text-left">Jabatan</th>
                        <th class="w-32 p-3 text-sm font-semibold tracking-wide text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <tr class="bg-white">
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                            <a href="#" class="font-bold text-blue-500 hover:underline">10001</a>
                        </td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Kring New Fit office chair, mesh + PU,
                            black</td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                            <span
                                class="p-1.5 text-xs font-medium uppercase tracking-wider text-green-800 bg-green-200 rounded-lg bg-opacity-50">Delivered</span>
                        </td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">16/10/2021</td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">$200.00</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                            <a href="#" class="font-bold text-blue-500 hover:underline">10002</a>
                        </td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Kring New Fit office chair, mesh + PU,
                            black</td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                            <span
                                class="p-1.5 text-xs font-medium uppercase tracking-wider text-yellow-800 bg-yellow-200 rounded-lg bg-opacity-50">Shipped</span>
                        </td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">16/10/2021</td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">$200.00</td>
                    </tr>
                    <tr class="bg-white">
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                            <a href="#" class="font-bold text-blue-500 hover:underline">10003</a>
                        </td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Kring New Fit office chair, mesh + PU,
                            black</td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                            <span
                                class="p-1.5 text-xs font-medium uppercase tracking-wider text-gray-800 bg-gray-200 rounded-lg bg-opacity-50">Cancelled</span>
                        </td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">16/10/2021</td>
                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">$200.00</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Modal -->
        <div id="myModal"
            class="fixed inset-0 z-10 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
            <hr class="mb-6 border-gray-500">
            <div class="bg-white p-6 shadow-lg w-2/4 border-gray-400">
                <h2 class="text-xl mb-4 font-medium">Tambah Anggota</h2>
                <hr class="mb-4 border-gray-900">
                <form action="#" method="POST">
                    @csrf
                    <div class="mb-6">
                        <label for="name" class="block text-base font-medium text-gray-900 pb-2">Nama
                            Anggota</label>
                        <input type="text" name="name" id="name"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm text-lg px-3 py-2">
                    </div>
                    <div class="mb-6">
                        <label for="phone" class="block text-base text-gray-900 pb-2">No Telp</label>
                        <input type="text" name="phone" id="phone"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm text-lg px-3 py-2">
                    </div>
                    <div class="mb-6">
                        <label for="position" class="block text-base font-medium text-gray-900 pb-2">Jabatan</label>
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
