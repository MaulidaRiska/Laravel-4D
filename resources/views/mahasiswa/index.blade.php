@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Mahasiswa
                <a href="{{ route('tambah.mahasiswa')}}" class="btn btn-primary btn-md float-right">Tambah Data <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>NO</th>
                                <th>NPM</th>
                                <th>NAMA LENGKAP</th>
                                <th>TEMPAT, TANGGAL LAHIR</th>
                                <th>JENIS KELAMIN</th>
                                <th>TELEPON</th>
                                <th>ALAMAT</th>
                                <th>AKSI</th>
                            </tr>
                            @php
                                $no = 1;

                            @endphp
                            @foreach ($mahasiswa as $mhs)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $mhs->npm }}</td>
                                <td>{{ $mhs->user->name }}</td>
                                <td>{{ $mhs->tempat_lahir.', '.$mhs->tgl_lahir }}</td>
                                <td>{{ $mhs->gender ==  'L' ? 'Laki-Laki' : 'Perempuan'}}</td>
                                <td>{{ $mhs->telpon }}</td>
                                <td>{{ $mhs->alamat }}</td>
                                <td>
                                <a href="{{ route('edit.mahasiswa', $mhs->id)}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> EDIT</a>
                                    <a href="{{ route('hapus.mahasiswa', $mhs->id)}}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> HAPUS</a>
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