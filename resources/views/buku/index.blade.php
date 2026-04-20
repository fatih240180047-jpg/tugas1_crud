<h1>Daftar Buku Digital</h1>
<a href="{{ route('buku.create') }}">Tambah Buku Baru</a>
<hr>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_buku as $b)
        <tr>
            <td>{{ $b->judul }}</td>
            <td>{{ $b->penulis }}</td>
            <td>{{ $b->tahun }}</td>
            <td>
                <a href="{{ route('buku.edit', $b->id) }}">Edit</a>
                
                <form action="{{ route('buku.destroy', $b->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>