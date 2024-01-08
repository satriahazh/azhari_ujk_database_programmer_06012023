@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Data Prodi
                </div>
                <div class="card-body">
                    <form action="{{route('prodi.update',$prodi->id)}}" method="post">
                        @csrf @method('put')
                        <div class="form-group">
                            <label for="">Nama Prodi</label>
                            <input type="text" name="nama" class="form-control" value="{{$prodi->nama}}" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection