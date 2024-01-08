@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Lihat Data Mata Kuliah
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama Mata Kuliah</label>
                        <input type="text" name="nama" class="form-control" value="{{$matakuliah->nama}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">SKS</label>
                        <input type="number" name="sks" class="form-control" value="{{$matakuliah->email}}" id=""
                            disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection