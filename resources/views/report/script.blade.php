<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

<script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>

<script>
    // Jquery code
    $(document).ready(function() {
        $('#myTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('http://kaspdrj.test/reportAjax') }}",
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
                    className: 'p-1 text-sm text-gray-700 whitespace-nowrap'
                },
                {
                    data: 'tanggal',
                    name: 'tanggal',
                    className: 'p-1 text-sm text-gray-700 whitespace-nowrap'
                },
                {
                    data: 'jenis',
                    name: 'jenis',
                    className: 'p-1 text-sm whitespace-nowrap',
                    render: function(data, type, row) {
                        if (data === 'Pengeluaran') {
                            return '<span class="text-red-500">' + data + '</span>';
                        } else if (data === 'Pemasukan') {
                            return '<span class="text-green-500">' + data + '</span>';
                        } else {
                            return data;
                        }
                    }
                }, {
                    data: 'keterangan',
                    name: 'keterangan',
                    className: 'p-1 text-sm text-gray-700 whitespace-nowrap'
                }
            ]
        });



    });


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
