@extends('layouts.app')
 
@section('content')
    
 <div class="container">
     <div class="row justify-content-center">
         <div class="col-md-12">
             <div class="card">
                 <div class="card-header">Tambah Mahasiswa</div>
                 <div class="card-body">
                 <form method="POST" action="{{ route('simpan.mahasiswa')}}">
                 @csrf

                 <div class="form-group">
                    <div class="form-row">
                        <div class="col">
                            <lable for="nama" >Nama Mahasiswa</lable>
                            <select class="form-control" id="user_id" name="user_id" >
                                    <option value="" disabled selected  >--Pilih User--</option>
                                   @foreach ($user as $u)
                                    <option value="{{$u->id}}">{{$u->name}}</option>
                                   @endforeach
                                </select>
                        </div>
                        <div class="col">
                            <lable for="npm" >NPM</lable>
                            <input type="number" class="form-control" name="npm" placeholder="Masukan NPM..." maxlength="8">
                        </div>
                        <div class="col">
                            <lable for="tempat_lahir" >Tempat Lahir</lable>
                            <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukan Tempat lahir..." >
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col">
                            <lable for="tgl_lahir">Tanggal Lahir</lable>
                            <input type="date" class="form-control" name="tgl_lahir" placeholder="Masukan Tanggal Lahir..." >        
                        </div>
                        <div class="col">
                            <lable for="gander" >Jenis Kelanin</lable>
                            <select class="form-control" id="gender" name="gender" >
                                    <option value="" disabled selected  >--Pilih Jenis Kelamin--</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="col">
                            <lable for="telpon" >Telpon</lable>
                            <input type="text" class="form-control" name="telpon" placeholder="Masukan Telpon..." >
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col">
                            <lable for="alamat">Alamat</lable>
                            <textarea  class="form-control" name="alamat" id="alamat" cols="2" rows="3" style="resize : none" placeholder="Masukan Alamat..." ></textarea>
                        </div>
                    </div>
                </div>
                            <div class="form group">
                                <div class="form row float-right">
                                    <div class="col">
                                        <button type="submit" class="btn btn-md btn-primary">SIMPAN <i class="fas fa-download"></i></button>
                                        <a href="{{ route('mahasiswa')}}" class="btn btn-md btn-danger">BATAL <i class="fas fa-times"></i></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 @endsection
                        