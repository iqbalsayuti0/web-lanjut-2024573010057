<h2>Tambah Mahasiswa</h2>
<form action="{{ route('mahasiswa.store') }}" method="POST">
    @csrf
    Nama: <input type="text" name="nama"><br>
    NIM: <input type="text" name="nim"><br>
    Jurusan: <input type="text" name="jurusan"><br>
    <button type="submit">Simpan</button>
</form>