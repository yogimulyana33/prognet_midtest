<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <a href="/kelompok">Kembali</a>
    <br/>
    <br/>

    @foreach($Kelompok as $k)
    <form action="/kelompok/update"method="post">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$k->id}}"><br/>
        nama <input type="text" required="required" name="nama" value="{{ $k->nama_anggota }}"> <br/>
        nim<input type="text" required="required" name="nim" value="{{$k->nim}}"><br/>
        umur<input type="text" required="required" name="umur" value="{{$k->umur}}"><br/>
        nohp<input type="text" required="required" name="nohp" value="{{$k->nohp}}"><br/>
        alamat <textarea required="required" name="alamat">{{ $k->alamat }}</textarea> <br/>
        <input type="submit" value="Simpan">
    </form>
    @endforeach
</body>
</html>
