
@extends('Admin.Ahome')
@section('lmao')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</script>
<section class="content">
    <div class="container-fluid">
        <div class="row">
        <!-- left column -->
            <div class="col-md-6">
            <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                            <h3>Portfolio</h3>
                    </div>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
               <form action="/simpanptf">
                        <div class="container">
                                <div class="form-group">
                                    <b> tanggal</b>
                                    <input type="date" name="kode">


                                </div>
                                <div class="form-group">
                                    <b>Nama</b>
                                    <input type="text" name="nama">
                                </div>
                                <div class="form-group">
                                    <b>Uplooad Logo</b>
                                    <input type="file" name="logo">

                                </div>
                                <div class="container">
                                    <b>Keterangan Portfolio</b>
                                    <input type="text" name="ket">

                                </div>
                                <button class="btn btn-info btn-lg btn-block ">Upload</button>




                        </div>


               </form>
               <div class="modal-footer">
                <a href="/dataportfolio" class="btn btn-warning btn-lg btn-block">Data portofolio</a>

               </div>
            </div>
        </div>
    </div>
</section>
@endsection
