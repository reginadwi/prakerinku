@extends('layouts.app')
@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Data Tables Tag</h5><br>

                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

                     <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" /
                      <center>
                        <a href="{{ route('tag.create') }}"
                            class="la la-cloud-upload btn btn-info btn-rounded btn-floating btn-outline">&nbsp;Tambah Data
                        </a>
                </center>
                <div class="card-body">
                    <table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nama Tag</th>
                                <th>Slug</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tag as $data)
                            <tr>
                                <td>{{$data->nama_tag}}</td>
                                <td>{{$data->slug}}</td>
                               
								<td style="text-align: center;">
                                    <form action="{{route('tag.destroy', $data->id)}}" method="post">
                                        {{csrf_field()}}
									<a href="{{route('tag.edit', $data->id)}}"
										class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating btn-outline"> Edit
									</a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<input type="hidden" name="_method" value="DELETE">
										<button type="submit" class="zmdi zmdi-delete  btn-rounded btn-floating btn btn-dangerbtn btn-danger btn-outline"> Delete</button>
									
                                    </form>
                                     
                                    </body>
                                    </html>
								</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</section>