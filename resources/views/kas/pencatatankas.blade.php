<div class="flex items-center justify-left pb-5">
    <a href="#" id="pencatatankas"
        class="relative bg-gray-900 text-white px-3 py-2 rounded-md group flex items-center space-x-2 ">
        <span class="text-base font-medium hover:text-gray-200">
            Pencatatan Kas
        </span>
    </a>
    <a href="#" id="pendingkas"
        class="relative border border-gray-900 ml-2 text-white px-3 py-2 rounded-md group flex items-center space-x-2 ">
        <span class="text-base text-black font-medium menupendingkas">
            Pending kas
        </span>
    </a>
</div>

<div class="overflow-auto rounded-lg shadow hidden md:block">
    <table class="w-full myDataTable" id="myTable">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>



<script>
    $(document).ready(function() {


        $('#pendingkas').click(function(event) {
            event.preventDefault();

            $.ajax({
                url: '/pendingkas',
                type: 'GET',
                success: function(response) {
                    $('#coba').html(response);
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        });


        $('#myTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('http://kaspdrj.test/pendingkasAjax') }}",
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
                    className: 'p-1 text-sm text-gray-700 whitespace-nowrap',
                    render: function(data, type, row) {
                        // Format data 'jumlah' sebagai nominal Rupiah menggunakan numeral.js
                        return 'Rp ' + numeral(data).format('0,0').replace(',', '.');
                    }
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

        // Event handler for delete button click
        $('body').on('click', '.btnDel2', function(e) {
            e.preventDefault();
            if (confirm('Hapus data ini?')) {
                var id = $(this).data('id');
                var csrfToken = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: 'http://kaspdrj.test/pendingkasAjax/' + id,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-Token': csrfToken
                    },
                    success: function(response) {
                        $('#myTable').DataTable().ajax.reload();
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }
        });
    });
</script>
