<td class="p-1 text-sm text-gray-700 whitespace-nowrap">
    <a class="btnPost p-2 bg-green-800 text-white rounded hover:bg-green-900 text-sm font-semibold mx-1" href="#"
        data-id="{{ $data->id }}" data-nama="{{ $data->nama }}" data-tanggal="{{ $data->tanggal }}"
        data-jumlah="{{ $data->jumlah }}" data-bukti="{{ $data->bukti }}">
        Post
    </a>
    <a class="btnDel p-2 bg-red-800 text-white rounded hover:bg-red-900 text-sm font-semibold mx-1" href="#"
        data-id="{{ $data->id }}">
        Hapus
    </a>
</td>
