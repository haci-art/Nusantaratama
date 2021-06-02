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
                            <h3>Client</h3>
                    </div>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="/simpanclient">
                    <div class="card-body">


                        <div class="form-group">
                           <b>Nama</b>
                            <input type="text" class="form-control" name="nama_client" placeholder="Nama">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Input Logo</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="form control" name="logo_client">
                                </div> <div class="form-group">
                           <b>link</b>
                            <input type="text" class="form-control" name="link" placeholder="">
                        </div>
                            </div>


                            </div>
                        <div class="modal-footer">
                        <button class="btn btn-success btn-lg btn-block">Simpan Data Client</button>

                </form>
                    </div>
        </div>
                <a href="/dataclient">
                <button class="btn btn-info btn-lg btn-block">Data client</button>
                </a>
            </div>
    </div>
        </div>
        </div>
</section>
@endsection
