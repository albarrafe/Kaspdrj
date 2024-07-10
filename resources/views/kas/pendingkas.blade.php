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
    <table class="w-full" id="myTable">
        <thead class="bg-gray-50 border-b-2 border-gray-200">
            <tr>
                <th class="w-16 p-3 text-sm font-semibold tracking-wide text-left">No.</th>
                <th class="w-48 p-3 text-sm font-semibold tracking-wide text-left">Nama</th>
                <th class="w-24 p-3 text-sm font-semibold tracking-wide text-left">Tanggal</th>
                <th class="w-20 p-3 text-sm font-semibold tracking-wide text-left">Jumlah</th>
                <th class="w-20 p-3 text-sm font-semibold tracking-wide text-left">Bukti</th>
                <th class="w-28 p-3 text-sm font-semibold tracking-wide text-left">Aksi</th>
            </tr>
        </thead>

    </table>
</div>

<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>

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




@include('kas.script.scriptpencatatan')

<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('http://kaspdrj.test/bayarkasAjax') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false,
                    className: 'p-1 text-sm text-gray-700 whitespace-nowrap'
                },
                {
                    data: 'nama',
                    name: 'nama',
                    className: 'p-1 text-sm text-gray-700 whitespace-nowrap'
                },
                {
                    data: 'tanggal',
                    name: 'tanggal',
                    className: 'p-1 text-sm text-gray-700 whitespace-nowrap'
                },
                {
                    data: 'jumlah',
                    name: 'jumlah',
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
    $(document).ready(function() {
        $(document).on('click', '.btnPost', function(event) {
            event.preventDefault();

            var id = $(this).data('id');
            var nama = $(this).data('nama');
            var tanggal = $(this).data('tanggal');
            var jumlah = $(this).data('jumlah');
            var bukti = $(this).data('bukti');

            var postData = {
                id: id,
                nama: nama,
                tanggal: tanggal,
                jumlah: jumlah,
                bukti: bukti
            };

            $.ajax({
                url: '/pendingkasAjax',
                type: 'POST',
                data: postData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    alert('Data berhasil diverifikasi')

                },
                error: function(xhr) {
                    console.error(xhr.responseText);

                }
            });
        });
    });
</script>
