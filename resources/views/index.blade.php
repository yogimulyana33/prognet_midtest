<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggota Kelompok</title>
</head>
<body>
    <h2>Data Kelompok</h2>
    <a href="/kelompok/tambah">+Tambah Data Kelompok</a>
    <br/>
    <br/>
    <table border="1">
        <tr>
            <th>nama</th>
            <th>nim</th>
            <th>umur</th>
            <th>nohp</th>
            <th>alamat</th>
            <th>opsi</th>
        </tr>
        @foreach($Kelompok as $k)
        <tr>
            <td>{{$k->nama_anggota}}</td>
            <td>{{$k->nim}}</td>
            <td>{{$k->umur}}</td>
            <td>{{$k->nohp}}</td>
            <td>{{$k->alamat}}</td>
            <td>
                <a href="/kelompok/edit/{{$k->id}}">Edit</a>
                |
                <a href="/kelompok/hapus/{{$k->id}}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
