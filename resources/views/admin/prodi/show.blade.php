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
                        <input type="text" name="nama" class="form-control" value="{{$prodi->nama}}" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection