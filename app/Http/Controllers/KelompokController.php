<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelompokController extends Controller
{
    public function index()
    {
        //mengambil data
        $Kelompok = DB::table('Kelompok')->get();
        return view('index',['Kelompok'=>$Kelompok]);
    }

    public function tambah()
    {
        return view('tambah');
    }

    //insert data
    public function store(Request $request)
    {

        DB::table('Kelompok')->insert([
            'nama_anggota' => $request->nama,
            'nim' => $request->nim,
            'umur' => $request->umur,
            'nohp' => $request->nohp,
            'alamat' => $request->alamat
        ]);
        return redirect('/kelompok');
    }

    public function edit($id)
    {
        $Kelompok = DB::table('Kelompok')->where('id',$id)->get();
        return view('edit',['Kelompok'=>$Kelompok]);
    }

    public function update(Request $request)
    {
        DB::table('Kelompok')->where('id',$request->id)->update([
            'nama_anggota' => $request->nama,
            'nim' => $request->nim,
            'umur' => $request->umur,
            'nohp' => $request->nohp,
            'alamat' => $request->alamat
        ]);
        return redirect('/kelompok');
    }

    public function hapus($id)
    {
        DB::table('Kelompok')->where('id',$id)->delete();
        return redirect('/kelompok');
    }
}

