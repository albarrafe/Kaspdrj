<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

<script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>

<script>
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

    $(document).ready(function() {
        $('#myTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('http://kaspdrj.test/anggotaAjax') }}",
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
                    data: 'no_telp',
                    name: 'no_telp',
                    className: 'p-1 text-sm text-gray-700 whitespace-nowrap'
                },
                {
                    data: 'jabatan',
                    name: 'jabatan',
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
    $('body').on('click', '.btnEdit', function(event) {
        event.preventDefault();
        var id = $(this).data('id');
        $.ajax({
            url: 'http://kaspdrj.test/anggotaAjax/' + id + '/edit',
            type: 'GET',
            success: function(response) {
                // Show modal
                $('#myModal').removeClass('hidden');
                // Populate form fields
                $('#nama').val(response.result.nama);
                $('#no_telp').val(response.result.no_telp);
                $('#jabatan').val(response.result.jabatan);

                // tombol simpan update
                $('.btnSimpan').off('click').on('click', function(event) {
                    event.preventDefault();
                    simpan(id);
                });
            }
        });
    });

    // AJAX setup for CSRF token
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });



    function simpan(id) {
        var var_url, var_type;

        if (id === '') {
            var_url = 'http://kaspdrj.test/anggotaAjax'; // Rute untuk menyimpan data baru
            var_type = 'POST';
        } else {
            var_url = 'http://kaspdrj.test/anggotaAjax/' + id; // Rute untuk mengupdate data yang ada
            var_type = 'PUT';
        }

        $.ajax({
            url: var_url,
            type: var_type,
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                nama: $('#nama').val(),
                no_telp: $('#no_telp').val(),
                jabatan: $('#jabatan').val(),
            },
            success: function(response) {
                alert('Data berhasil disimpan!');
                // Sembunyikan modal setelah sukses
                $('#myModal').addClass('hidden');
                // Reload DataTable untuk menampilkan data terbaru
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
                url: 'http://kaspdrj.test/anggotaAjax/' + id,
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
