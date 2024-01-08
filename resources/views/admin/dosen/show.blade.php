@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Lihat Data Prodi
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama Prodi</label>
                        <input type="text" name="nama" class="form-control" value="{{$dosen->nama}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Email Dosen</label>
                        <input type="email" name="email" class="form-control" value="{{$dosen->email}}" id="" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea type="text" name="alamat" class="form-control" id=""
                            disabled>{{$dosen->alamat}}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection