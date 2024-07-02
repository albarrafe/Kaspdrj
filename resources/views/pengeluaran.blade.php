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
                    <!-- Rows will be dynamically added here by DataTables -->
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
                    <input type="text" name="nominal" id="nominal"
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
    <script>
        document.getElementById('openModalBtn').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('myModal').classList.remove('hidden');
        });

        document.addEventListener('click', function(event) {
            var modal = document.getElementById('myModal');
            if (event.target === modal) {
                modal.classList.add('hidden');
            }
        });

        document.querySelector('.btnSimpan').addEventListener('click', function(event) {
            event.preventDefault();
            // Mengirim form menggunakan AJAX
            $.ajax({
                url: 'http://kaspdrj.test/pengeluaranAjax',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    nominal: $('#nominal').val(),
                    keterangan: $('#keterangan').val(),
                    tanggal: $('#tanggal').val(),
                    bukti: $('#bukti').val()
                }, // Pastikan ada koma di sini untuk memisahkan properti
                success: function(response) {
                    alert('Data berhasil disimpan!');
                    // Menyembunyikan modal
                    document.getElementById('myModal').classList.add('hidden');
                    // Mengupdate DataTable
                    $('#myTable').DataTable().ajax.reload();
                },
                error: function(response) {
                    alert('Error: ' + response.responseText);
                }
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('http://kaspdrj.test/pengeluaranAjax') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false,
                        className: 'p-1 text-sm text-gray-700 whitespace-nowrap'
                    },
                    {
                        data: 'nominal',
                        name: 'nominal',
                        className: 'p-1 text-sm text-gray-700 whitespace-nowrap'
                    },
                    {
                        data: 'keterangan',
                        name: 'keterangan',
                        className: 'p-1 text-sm text-gray-700 whitespace-nowrap'
                    },
                    {
                        data: 'tanggal',
                        name: 'tanggal',
                        className: 'p-1 text-sm text-gray-700 whitespace-nowrap'
                    },
                    {
                        data: 'bukti',
                        name: 'bukti',
                        className: 'p-1 text-sm text-gray-700 whitespace-nowrap'
                    },
                    {
                        data: 'aksi',
                        name: 'aksi',
                        className: 'p-1 text-sm text-gray-700 whitespace-nowrap'
                    }
                ]
            });
        });
    </script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
    </script>
</x-layout>
