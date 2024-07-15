<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#nama').select2({
            placeholder: 'Pilih Nama Anggota',
            ajax: {
                url: '{{ route('anggota.data') }}',
                dataType: 'json',
                delay: 250,
                processResults: function(data) {
                    return {
                        results: $.map(data, function(item) {
                            return {
                                text: item.nama,
                                id: item.id
                            };
                        })
                    };
                },
                cache: true
            }
        });
    });


    $('.btnSimpan').on('click', function(event) {
        event.preventDefault();
        simpan('');
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function simpan(id) {
        var var_url, var_type;
        var_url = 'http://kaspdrj.test/bayarkasAjax';
        var_type = 'POST';

        $.ajax({
            url: var_url,
            type: var_type,
            data: {
                _token: '{{ csrf_token() }}',
                nama: $('#nama option:selected').text(), // Mengambil teks opsi yang dipilih
                tanggal: $('#tanggal').val(),
                jumlah: $('#jumlah').val(),
                bukti: $('#bukti').val()
            },
            success: function(response) {
                alert('Data berhasil disimpan!');
            },
            error: function(response) {
                alert('Error: ' + response.responseText);
            }
        });
    }
</script>
