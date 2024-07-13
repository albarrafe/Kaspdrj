<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>

<script>
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
</script>
