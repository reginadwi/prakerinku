@extends('layouts.app')

@section('css')
        <link rel="stylesheet" href="{{asset('assets/backend/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
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
            <h1>Category</h1>
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>
            <div class="pull-nght">
            <a class="btn-btn-sm-btn-primary" href="{{route('Kategori.create')}}">Tambah Data</a>
            	
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
                    <td style="text-align: ;">
                  	 <form action="{{route('kategori.destroy', $datas->id)}}" method="post">
                        {{csrf_field()}}
                            <a href="{{route('kategori.edit', $datas->id)}}"
                                        class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating btn-outline"> Edit
                                         </a>
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <input type="hidden" name="_method" value="DELETE">
                              <button type="submit" class="zmdi zmdi-delete btn-rounded btn-floating btn btn-dangerbtn btn-danger btn-outline"> Delete</button>
                                    
                              </form>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection