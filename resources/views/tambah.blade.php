<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggota Kelompok</title>
</head>
<body>
    <h2>Data Kelompok</h2>
    <a href="/kelompok">Kembali</a>
    <br/>
    <br/>

    <form action="/kelompok/store" method="post">
        {{csrf_field()}}
        Nama <input type="text" name="nama" required="required"> <br/>
        Nim <input type="text" name="nim" required="required"> <br/>
        Umur <input type="text" name="umur" required="required"> <br/>
        Nohp <input type="text" name="nohp" required="required"> <br/>
        Alamat <textarea name="alamat" required="required"></textarea>
        <input type="Submit" value="Simpan Data">
    </form>
</body>
</html>
