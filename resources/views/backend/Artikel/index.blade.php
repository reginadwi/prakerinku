
@extends('layouts.app')


@section('css')
        <link rel="stylesheet" href="{{ ('assets/backend/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
@endsection

@section('js')
        <script src="{{asset('assets/backend/assets/vendor/datatables.net/js/jquery.dataTables.js')}}"></script>
        <script src="{{asset('assets/backend/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
        <script src="{{asset('assets/backend/assets/js/components/datatables-init.js')}}"></script>
@endsection
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Artikel</h1>
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{\Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>
            <div class="pull-nght">
            <a class="btn-btn-sm-btn-primary" href="{{route('artikel.create')}}">Tambah Data</a>
            	
            </div>
            <table class="table table-bordered">
                <thead>

                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>slug</th>
                    <th>Kategori</th>
                    <th>Penulis</th>
                    <th>Konten</th>
                    <th>Foto</th>
                    <th>User</th>
                    <th style="text-align: center;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($artikel as $datas)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $datas->judul }}</td>
                        <td>{{ $datas->slug }}</td>
                        <th>{{$datas->kategori->nama_kategori}}</th>
                        <td>{{$datas->user->name}}</td>
                        <td>{{$datas->konten}}</td>
                      <td><img src="{{asset('assets/img/artikel/' .$datas->foto. '')}}"
                                    style="width:250px; height:250px;" alt="Foto"></td>
                    </tr>
                  	<td style="text-align: center;"></td>
                   		<form action="{{route('artikel.destroy',$datas->id)}}" method="post">
                   		{{csrf_field()}}
   					    <td style="text-align: center;">
                   		<a href="{{route('artikel.edit',$datas->id)}}" class="btn-btn-sm-btn-primary">Edit</a>
                   		<input type="hidden" name="_method" value="DELETE">
                   		<button type="submit" title="DELETE" class="btn-btn-sm-btn-primary">Delete</button>

                   </td>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
