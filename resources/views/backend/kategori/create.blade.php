@extends('layouts.app')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tambah Kontak</h1>
            <hr>
            <form action="{{ route('kategori.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama_kategori">Nama:</label>
                    <input type="text" class="form-control" id="" name="nama_kategori">
                </div>
            
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">simpan</button>
                   
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection