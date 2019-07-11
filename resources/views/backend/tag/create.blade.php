@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <center>
                        <div class="card-header">Tambah Tag</div>
                    </center>
    
                    <div class="card-body">
                        <form action="{{route('tag.store')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="">Nama Tag</label>
                                <input class="form-control" type="text" name="nama_tag" id="">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-info">
                                    Simpan Data
                                </button>
                                <link href="path-ke-direktori-css/select2.min.css" rel="stylesheet" />
                                <script src="path-ke-direktori-js/select2.min.js"></script>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>