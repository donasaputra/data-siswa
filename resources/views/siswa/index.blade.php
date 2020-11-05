@extends('layouts.master')

@section('content')
        @if (session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>    
        @endif
        
        <div class = "row">
            <div class = "col-6">
                <h1>DATA SISWA</h1>

            </div>

            <div class = "col-6">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary float-right btn-sm" data-toggle="modal" data-target="#staticBackdrop">
                    Tambah Data Siswa
                </button>
             
            </div>
            

            <table class = "table table table-hover">
                <tr>
                    <th>NAMA DEPAN</th>
                    <th>NAMA BELAKANG</th>
                    <th>JENIS KELAMIN</th>
                    <th>AGAMA</th>
                    <th>ALAMAT</th>
                    <th>AKSI</th>
                </tr>
                @foreach ($data_siswa as $siswa)
                <tr>    
                    <td>{{$siswa->nama_depan}}</td>
                    <td>{{$siswa->nama_belakang}}</td>
                    <td>{{$siswa->jenis_kelamin}}</td>
                    <td>{{$siswa->agama}}</td>
                    <td>{{$siswa->alamat}}</td>
                    <td><a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a></td>
                    <td><a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mau dihapus?')">Delete</a></td>
                </tr>
                @endforeach
                
            
            </table>

        </div>



    </div>

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
                            <form action="/siswa/create" method="POST">
                                @csrf
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Nama Depan</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" name="nama_depan">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Belakang</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" name="nama_belakang">
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="jenis_kelamin">
                                      <option value="Pria">Pria</option>
                                      <option value="Wanita">Wanita</option>
                                    
                                    </select>
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleFormControlSelect1">Agama</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="agama">
                                      <option value="Islam">Islam</option>
                                      <option value="Kristen Protestan">Kristen Protestan</option>
                                      <option value="Kristen Katolik">Kristen Katolik</option>
                                      <option value="Budha">Budha</option>
                                      <option value="Hindu">Hindu</option>
                                      <option value="Konghucu">Konghucu</option>
                                    
                                    </select>
                                  </div>
                       
                                {{-- <div class="form-group">
                                    <label for="exampleInputEmail1">Agama</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
                                </div> --}}

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Alamat</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Alamat" name="alamat"></textarea>
                                  </div>
                            
                        </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>

@endsection










