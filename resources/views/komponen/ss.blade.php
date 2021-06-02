@extends('Admin.Ahome')
@section('lmao')
<section class="content">
    <div class="container">

        <div class="row">
        <!-- left column -->
            <div class="col-md-6">
            <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                            <h3>Screenshot</h3>
                    </div>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="/simpanss">
                    <div class="card-body">
                    <div class="form-group">
                        <b>Nomer Gambar</b>
                        <input type="text" name="kode" class="form-control">
                        </div>
                        <div class="form-group">
                           <b>Judul</b>
                            <input type="text" class="form-control" name="judul" placeholder="Judul">
                        </div>

                        <div class="form-group">

                                <label for="exampleInputFile">File Gambar</label>
                               <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="form control" name="gambar">
                                </div><br>

                                </div><div class="modal-footer">
                                   <button class="btn btn-success btn-lg">Upload</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <a href="/datascreenshot"></a>
            </div>

    </div>
</section>
@endsection
