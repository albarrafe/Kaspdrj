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

        document.querySelector('.btnSimpan').addEventListener('click', function(event) {
            var nominal = $('nominal').val();
            var keterangan = $('keterangan').val();
            var tanggal = $('tanggal').val();
            var bukti = $('bukti').val();
            console.log(nominal + '-' + keterangan);
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
