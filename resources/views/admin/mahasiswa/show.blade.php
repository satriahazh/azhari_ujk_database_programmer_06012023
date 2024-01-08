@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Produk
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Prodi</label>
                        <input type="text" name="nama" class="form-control" value="{{$mahasiswa->prodi->nama}}"
                            disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Mahasiswa</label>
                        <input type="text" name="nama" class="form-control" value="{{$mahasiswa->nama}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">NIM</label>
                        <input type="number" name="nim" class="form-control" value="{{$mahasiswa->nim}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea name="alamat" class="form-control" disabled>{{$mahasiswa->alamat}}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection