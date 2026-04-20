<h1>Edit Buku</h1>
<a href="{{ route('buku.index') }}">Kembali</a>
<hr>

<form action="{{ route('buku.update', $buku->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label>Judul Buku:</label><br>
        <input type="text" name="judul" value="{{ $buku->judul }}" required>
    </div>
    <div>
        <label>Penulis:</label><br>
        <input type="text" name="penulis" value="{{ $buku->penulis }}" required>
    </div>
    <div>
        <label>Tahun Terbit:</label><br>
        <input type="number" name="tahun" value="{{ $buku->tahun }}" required>
    </div>
    <br>
    <button type="submit">Update Buku</button>
</form>