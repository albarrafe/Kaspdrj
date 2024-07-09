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
@include('kas.script.scriptpencatatan')
