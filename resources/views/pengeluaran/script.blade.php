<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

<script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>

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
                    data: 'jumlah',
                    name: 'jumlah',
                    className: 'p-1 text-sm text-gray-700 whitespace-nowrap',
                    render: function(data, type, row) {
                        // Format data 'jumlah' sebagai nominal Rupiah menggunakan numeral.js
                        return 'Rp ' + numeral(data).format('0,0').replace(',',
                            '.'); // Mengganti , dengan .
                    }
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

        $('#openModalBtn').on('click', function(event) {
            event.preventDefault();
            $('#myModal').removeClass('hidden');
        });


        $(document).on('click', function(event) {
            var modal = $('#myModal');
            if (event.target === modal[0]) {
                modal.addClass('hidden');
            }
        });

        $('.btnSimpan').on('click', function(event) {
            event.preventDefault();
            simpan('');
        });


        // Jquery code



        $('body').on('click', '.btnEdit', function(event) {
            event.preventDefault();
            var id = $(this).data('id');
            $.ajax({
                url: 'http://kaspdrj.test/pengeluaranAjax/' + id + '/edit',
                type: 'GET',
                success: function(response) {
                    // Show modal
                    $('#myModal').removeClass('hidden');
                    // Populate form fields
                    $('#jumlah').val(response.result.jumlah);
                    $('#keterangan').val(response.result.keterangan);
                    $('#tanggal').val(response.result.tanggal);
                    $('#bukti').val(response.result.bukti);
                    // tombol simpan update
                    $('.btnSimpan').off('click').on('click', function(event) {
                        event.preventDefault();
                        simpan(id);
                    });
                }
            });
        });
    });


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    function simpan(id) {
        var var_url, var_type;


        if (id === '') {
            var_url = 'http://kaspdrj.test/pengeluaranAjax';
            var_type = 'POST';
        } else {
            // If id is provided, we're editing existing data
            var_url = 'http://kaspdrj.test/pengeluaranAjax/' + id;
            var_type = 'PUT';
        }

        $.ajax({
            url: var_url,
            type: var_type,
            data: {
                _token: '{{ csrf_token() }}',
                jumlah: $('#jumlah').val(),
                keterangan: $('#keterangan').val(),
                tanggal: $('#tanggal').val(),
                bukti: $('#bukti').val()
            },
            success: function(response) {
                alert('Data berhasil disimpan!');
                // Hide modal
                $('#myModal').addClass('hidden');
                // Reload DataTable
                $('#myTable').DataTable().ajax.reload();
            },
            error: function(response) {
                alert('Error: ' + response.responseText);
            }
        });
    }
</script>

<script>
    // Event handler untuk menghapus data
    $('body').on('click', '.btnDel', function(e) {
        if (confirm('Hapus data ini?') == true) {
            var id = $(this).data('id');

            // Tambahkan CSRF token jika diperlukan
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: 'http://kaspdrj.test/pengeluaranAjax/' + id,
                type: 'DELETE',
                headers: {
                    'X-CSRF-Token': csrfToken
                },
                success: function(response) {
                    // Tambahkan penanganan respons jika perlu
                    $('#myTable').DataTable().ajax.reload();
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    // Tambahkan penanganan error jika perlu
                }
            });
        }
    });
</script>
