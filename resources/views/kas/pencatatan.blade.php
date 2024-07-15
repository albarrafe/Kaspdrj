<x-layout>
    <x-slot:title>{{ $title }}
        <div class=" flex items-center justify-left">
            <a href="/pencatatan"class="relative bg-grey-900 text-white pt-5 group">
                <span class="bg-gray-900 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Kas
                    bulanan</span>
            </a>
            <a href="/kaslistrik"class="relative bg-white-900 text-white pt-5 group px-5 ">
                <span class="text-black block rounded-md px-3 py-2 text-base font-medium border border-gray-900">
                    Kas Listrik</span>
            </a>
            <a href="/kasagustus"class="relative bg-grey-900 text-white pt-5 group ">
                <span class="text-black block rounded-md px-3 py-2 text-base font-medium border border-gray-900">
                    Kas Agustusan</span>
            </a>
        </div>

    </x-slot:title>


    <div class="px-10 py-5 bg-white" id="coba">

        <div class=" flex items-center justify-left pb-5">
            <a href="#" class="relative  text-white px-3 py-2 rounded-md group flex items-center space-x-2 ">


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

    </div>





</x-layout>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>


<script>
    $(document).ready(function() {
        // Function to handle the AJAX request
        function loadPencatatan() {
            $.ajax({
                url: '/pencatatankas',
                type: 'GET',
                success: function(response) {
                    $('#coba').html(response);
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        }
        if (window.location.pathname === '/pencatatan') {
            loadPencatatan();
        }
    });
</script>
