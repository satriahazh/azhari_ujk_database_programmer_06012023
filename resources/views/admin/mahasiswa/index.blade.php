@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Mahasiswa
                    <a href="{{route('mahasiswa.create')}}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Prodi</th>
                                <th>Nama Nama</th>
                                <th>NIM</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no = 1; @endphp
                            @foreach($mahasiswa as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->prodi->nama}}</td>
                                <td>{{$data->nama}}</td>
                                <td>{{$data->nim}}</td>
                                <td>
                                    <form action="{{route('mahasiswa.destroy',$data->id)}}" method="post">
                                        @csrf @method('delete')
                                        <a href="{{route('mahasiswa.edit',$data->id)}}" class="btn btn-success">Edit</a>
                                        <a href="{{route('mahasiswa.show',$data->id)}}" class="btn btn-warning">Show</a>
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Apakah Anda Yakin ?')">Delete</button>
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