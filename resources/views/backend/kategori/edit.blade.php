@extends('layouts.app')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Edit Category</h1>
            <hr>
            <form action="{{route('kategori.update',$kategori->id)}}" method="post" enctype="multipart/form-data" >
            <input type="hidden" name="_method" value="PATCH">
                {{csrf_field()}}
               <div class="form-group">
                    <label for="nama_kategori">Nama</label>
                    <input type="text" class="form-control" id="" name="nama_kategori" 
                    value="{{$kategori->nama_kategori}}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    
                </div>
            </form>
          
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection