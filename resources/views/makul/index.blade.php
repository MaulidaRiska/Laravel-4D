@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Mata Kuliah
                <a href="{{ route('tambah.makul')}}" class="btn btn-primary btn-md float-right">Tambah Data <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>NO</th>
                                <th>KODE MATA KULIAH</th>
                                <th>NAMA MATA KULIAH</th>
                                <th>SKS</th>
                                <th>AKSI</th>
                            </tr>
                            @php
                                $no = 1;

                            @endphp
                            @foreach ($makul as $mk)
                            <tr>
                                <td>{{ $no++}}</td>
                                <td>{{ $mk->Kd_makul }}</td>
                                <td>{{ $mk->Nama_makul}}</td>
                                <td>{{ $mk->Sks}}</td>
                                <td>
                                    <a href="{{ route('edit.makul', $mk->id)}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> EDIT</a>
                                    <a href="{{ route('hapus.makul', $mk->id)}}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> HAPUS</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection