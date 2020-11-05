@extends('layouts.master')

@section('content')
@if (session('sukses'))
<div class="alert alert-success" role="alert">
    {{session('sukses')}}
</div>    
@endif

<div class = "row">
<div class="col-12">
<form action="/siswa/{{$siswa->id}}/update" method="POST">
    @csrf
<h1>Edit Data Siswa</h1>
<div class="form-group">
    <label for="exampleInputEmail1">Nama Depan</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" name="nama_depan" value="{{$siswa->nama_depan}}">
</div>
  
<div class="form-group">
      <label for="exampleInputEmail1">Nama Belakang</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" name="nama_belakang" value="{{$siswa->nama_belakang}}">
</div>

<div class="form-group">
      <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
      <select class="form-control" id="exampleFormControlSelect1" name="jenis_kelamin">
        <option value="Pria" @if ($siswa->jenis_kelamin == "Pria") selected @endif>Pria</option>
        <option value="Wanita" @if ($siswa->jenis_kelamin == "Wanita") selected @endif>Wanita</option>
      </select>
</div>

<div class="form-group">
      <label for="exampleFormControlSelect1">Agama</label>
      <select class="form-control" id="exampleFormControlSelect1" name="agama" value="{{$siswa->agama}}">
        <option value="Islam" @if ($siswa->agama == "Islam") selected @endif>Islam</option>
        <option value="Kristen Protestan" @if ($siswa->agama == "Kristen Protestan") selected @endif>Kristen Protestan</option>
        <option value="Kristen Katolik" @if ($siswa->agama == "Kristen Katolik") selected @endif>Kristen Katolik</option>
        <option value="Budha" @if ($siswa->agama == "Budha") selected @endif>Budha</option>
        <option value="Hindu" @if ($siswa->agama == "Hindu") selected @endif>Hindu</option>
        <option value="Konghucu" @if ($siswa->agama == "Konghucu") selected @endif>Konghucu</option>
       </select>
</div>

<div class="form-group">
    <label for="exampleFormControlTextarea1">Alamat</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Alamat" name="alamat">{{$siswa->alamat}}</textarea>
</div>
</div>

<div class="modal-footer">
<button type="submit" class="btn btn-warning">Update</button>

</div>

</form>


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
              
                    
           
            </div>
            </div>
        </div>

@endsection
        












