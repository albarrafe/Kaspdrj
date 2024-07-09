<div class=" flex items-center justify-left pb-5">
    <a href="#" class="relative bg-gray-900 text-white px-3 py-2 rounded-md group flex items-center space-x-2 ">


        <span id="pencatatankas" class="text-base font-medium hover:text-gray-200">
            Pencatatan Kas
        </span>

    </a>
    <a href="#"
        class="relative border  border-gray-900 ml-2 text-white px-3 py-2 rounded-md group flex items-center space-x-2 ">


        <span id="pendingkas" class="text-base text-black font-medium menupendingkas">
            Pending kas
        </span>

    </a>
</div>

<div id="" class="overflow-auto rounded-lg shadow hidden md:block">
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
            {{-- Di sini Anda dapat menambahkan data dari database atau yang lainnya --}}
            <tr class="bg-white">
                <td class="p-4 text-sm text-gray-700 whitespace-nowrap">1</td>
                <td class="p-2 text-sm text-gray-700 whitespace-nowrap">Contoh Nama</td>
                <td class="p-2 text-sm text-gray-700 whitespace-nowrap">16/07/2024</td>
                <td class="p-2 text-sm text-gray-700 whitespace-nowrap">$200.00</td>
                <td class="p-2 text-sm text-gray-700 whitespace-nowrap">
                    <a href="#" class="text-blue-500 hover:underline">Edit</a> |
                    <a href="#" class="text-red-500 hover:underline">Hapus</a>
                </td>
            </tr>
            {{-- Contoh data lainnya --}}
            <tr class="bg-gray-50">
                <td class="p-4 text-sm text-gray-700 whitespace-nowrap">2</td>
                <td class="p-2 text-sm text-gray-700 whitespace-nowrap">Contoh Nama 2</td>
                <td class="p-2 text-sm text-gray-700 whitespace-nowrap">17/07/2024</td>
                <td class="p-2 text-sm text-gray-700 whitespace-nowrap">$300.00</td>
                <td class="p-2 text-sm text-gray-700 whitespace-nowrap">
                    <a href="#" class="text-blue-500 hover:underline">Edit</a> |
                    <a href="#" class="text-red-500 hover:underline">Hapus</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@include('kas.script.scriptpencatatan')
