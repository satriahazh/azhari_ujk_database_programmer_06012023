@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Data Dosen
                </div>
                <div class="card-body">
                    <form action="{{route('dosen.update',$dosen->id)}}" method="post">
                        @csrf @method('put')
                        <div class="form-group">
                            <label for="">Nama dosen</label>
                            <input type="text" name="nama" class="form-control" value="{{$dosen->nama}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Email Dosen</label>
                            <input type="email" name="email" class="form-control" value="{{$dosen->email}}" id=""
                                required>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <textarea type="text" name="alamat" class="form-control" id=""
                                required>{{$dosen->alamat}}</textarea>
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