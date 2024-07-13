<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="px-10 pt-5 pb-5 bg-white">
        <div class="flex items-center justify-left pb-5">

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
                    <!-- Rows will be dynamically added here by DataTables -->
                </tbody>
            </table>
        </div>
    </div>

    @include('report.script')

</x-layout>
