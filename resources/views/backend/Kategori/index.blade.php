@extends('layouts.app')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Category</h1>
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>
            <div class="pull-nght">
            <a class="btn-btn-sm-btn-primary" href="{{route('kategori.create')}}">Tambah Data</a>
            	
            </div>
            <table class="table table-bordered">
                <thead>

                <tr>
                    <th>No.</th>
                    <th>nama kategori</th>
                    
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($kategori as $datas)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $datas->nama_kategori }}</td>
                       
                    </tr>
                  	
                          <th style="text-align: center;">
                   		<form action="{{route('kategori.destroy',$datas->id)}}" 
                        method="post">
                        {{csrf_field()}}
                   		<a href="{{route('kategori.edit',$datas->id)}}" class="btn-btn-sm-btn-primary">Edit</a>
                          <th style="text-align: center;">
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