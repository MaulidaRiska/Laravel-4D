@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Nilai
                    <a href="{{route('tambah.nilai')}}" class="btn btn-primary btn-md float-right">Tambah Data <i class="fas fa-arrow-circle-right"></i></a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Npm</th>
                                <th>Nama</th>
                                <th>Nama Makul</th>
                                <th>Sks</th>
                                <th>Nilai</th>
                                <th>Action</th>
                            </tr>
                            @php
                                $no = 1;

                            @endphp
                            @foreach ($nilai as $ni)
                                <tr>
                                    <td>{{ $no++}}</td>
                                    <td>{{ $ni->mahasiswa->npm}}</td>
                                    <td>{{ $ni->mahasiswa->user->name}}</td>
                                    <td>{{ $ni->makul->Nama_makul}}</td>
                                    <td>{{ $ni->makul->Sks}}</td>
                                    <td>{{ $ni->Nilai}}</td>
                                    <td>
                                        <a href="{{route('edit.nilai',$ni->id)}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> EDIT</a>
                                        <a href="{{route('hapus.nilai',$ni->id)}}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> HAPUS</a>
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