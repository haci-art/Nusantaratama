@extends('Admin.Ahome')
@section('lmao')
<section class="content">
    <div class="container-fluid">
        <div class="row">
        <!-- left column -->
            <div class="col-md-6">
            <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                            <h3>Banner</h3>
                    </div>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="/simpanbanner">
                    <div class="card-body">
                        <div class="form-group">
                           <b> Judul</b>
                            <input type="text" class="form-control" name="judul_banner" placeholder="judul">
                        </div>
                        <div class="form-group">
                          <b>Keterangan</b>
                            <input type="text" class="form-control" name="ket" placeholder="Keterangan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile"> Input Gambar</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="form control" name="upload">
                                    <button class="btn btn-success">Upload</button>
                                </div>
                                <div class="input-group-append">

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
