@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Data matakuliah
                </div>
                <div class="card-body">
                    <form action="{{route('matakuliah.update',$matakuliah->id)}}" method="post">
                        @csrf @method('put')
                        <div class="form-group">
                            <label for="">Nama Mata Kuliah</label>
                            <input type="text" name="nama" class="form-control" value="{{$matakuliah->nama}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">SKS</label>
                            <input type="number" name="sks" class="form-control" value="{{$matakuliah->sks}}" id=""
                                required>
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