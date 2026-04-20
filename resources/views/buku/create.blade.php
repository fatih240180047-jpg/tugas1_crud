<h1>Tambah Buku Baru</h1>
<a href="{{ route('buku.index') }}">Kembali</a>
<hr>

<form action="{{ route('buku.store') }}" method="POST">
    @csrf
    <div>
        <label>Judul Buku:</label><br>
        <input type="text" name="judul" required>
    </div>
    <div>
        <label>Penulis:</label><br>
        <input type="text" name="penulis" required>
    </div>
    <div>
        <label>Tahun Terbit:</label><br>
        <input type="number" name="tahun" required>
    </div>
    <br>
    <button type="submit">Simpan Buku</button>
</form>