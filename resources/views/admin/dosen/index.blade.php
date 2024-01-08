@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Dosen
                    <a href="{{route('dosen.create')}}" class="btn btn-primary btn-small float-right">Tambah Data</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama Dosen</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no = 1; @endphp
                            @foreach($dosen as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->nama}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->alamat}}</td>
                                <td>
                                    <form action="{{route('dosen.destroy',$data->id)}}" method="POST">
                                        @csrf @method('delete')
                                        <a href="{{route('dosen.edit',$data->id)}}"
                                            class="btn btn-success btn-small">Edit</a>
                                        <a href="{{route('dosen.show',$data->id)}}"
                                            class="btn btn-warning btn-small">Show</a>
                                        <button type="submit" class="btn btn-danger btn-small"
                                            onclick="return confirm('Apakah anda yakin ?')">Delete</button>
                                    </form>
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