<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <a href="{{ route('mahasiswa.create') }}">+ Tambah</a>
    <br><br>
    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif
    <table border="1" cellpadding="6">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        @foreach ($data as $m)
        <tr>
            <td>{{ $m->id }}</td>
            <td>{{ $m->nama }}</td>
            <td>{{ $m->nim }}</td>
            <td>{{ $m->jurusan }}</td>
            <td>
                <a href="{{ route('mahasiswa.edit', $m->id) }}">Edit</a> |
                <form action="{{ route('mahasiswa.destroy', $m->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>