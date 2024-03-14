<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

 
    <h2>Form Tambah Mahasiswa</h2>
    <form action="/tambah-mahasiswa" method="post">
        @csrf <!-- CSRF Protection -->
        <label for="nim_mhs">NIM:</label><br>
        <input type="text" id="nim_mhs" name="nim_mhs"><br>
        <label for="alamat">Alamat:</label><br>
        <input type="text" id="alamat" name="alamat"><br>
        <label for="ttl">TTL:</label><br>
        <input type="date" id="ttl" name="ttl"><br>
        <label for="status">Status:</label><br>
        <input type="text" id="status" name="status"><br><br>
        <input type="submit" value="Submit">
    </form>
    @if(session('mahasiswaBaru'))
        <h2>Data Mahasiswa Baru:</h2>
        <ul>
            @foreach(session('mahasiswaBaru') as $mahasiswa)
                <li>NIM: {{ $mahasiswa->nim_mhs }}</li>
                <li>Alamat: {{ $mahasiswa->alamat }}</li>
                <li>TTL: {{ $mahasiswa->ttl }}</li>
                <li>Status: {{ $mahasiswa->status }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>
