@extends('layouts.app')
 
@section('content')
    
 <div class="container">
     <div class="row justify-content-center">
         <div class="col-md-8">
             <div class="card">
                 <div class="card-header">Tambah Mahasiswa</div>
  
                 <div class="card-body">
                     <form method="POST" action="/mahasiswa">
                         @csrf
  
                         <div class="form-group">
                             <label>User ID</label>
                             <input type="number" class="form-control" name="user_id" value="{{ old('user_id') }}">
                         </div>
                         <div class="form-group">
                             <label>NPM</label>
                             <input type="number" class="form-control" name="npm" value="{{ old('npm') }}">
                         </div>
                         <div class="form-group">
                             <label>Tempat Lahir</label>
                             <input type="text" class="form-control" name="tempat" value="{{ old('tempat') }}">
                         </div>
                         <div class="form-group">
                             <label>Tanggal Lahir</label>
                             <input type="date" class="form-control" name="tgl" value="{{ old('tgl') }}">
                         </div>
                         <div class="form-group">
                             <label>Alamat</label>
                             <textarea name="alamat" class="form-control" cols="30" rows="10">{{ old('alamat') }}</textarea>
                         </div>
                         <div class="form-group">
                             <label>No Telpon</label>
                             <input type="number" class="form-control" name="Notelp" value="{{ old('Notelp') }}">
                         </div>
                         <div class="form-group">
                             <label>Gender</label>
                             <input type="char" class="form-control" name="gender" value="{{ old('gender') }}">
                         </div>
                         <div class="form-group">
                             <button class="btn btn-primary">Simpan</button>
                         </div>
  
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
 @endsection
                        