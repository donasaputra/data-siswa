<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index(){
        $data_siswa = \App\Models\Siswa::all();
        return view('siswa.index',['data_siswa' => $data_siswa]);
    }

    public function create(Request $request){
        Siswa::create([
            'nama_depan' => $request->nama_depan,
            'nama_belakang' => $request->nama_belakang,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'alamat' => $request->alamat

        ]);
        return redirect('/siswa')->with('sukses','Data berhasil diinput');
    }

    public function edit($id){
        $siswa = Siswa::find($id);
        return view('siswa/edit',['siswa'=>$siswa]);
    }

    public function update(Request $request,$id){
        $siswa = Siswa::find($id);
        $siswa->update($request->all());
        return redirect('/siswa')->with('sukses','Data berhasil di Update');
    }

    public function delete($id){
        $siswa = Siswa::find($id);
        $siswa->delete($siswa);
        return redirect('/siswa')->with('sukses', 'Data berhasil di hapus');
    }
}
