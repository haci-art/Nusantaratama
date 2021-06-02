@extends('Admin.Ahome')
@section('lmao')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
        <!-- left column -->
            <div class="col-md-6">
            <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                            <h3>Testimoni</h3>
                    </div>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="/simpantestimoni">
                    <div class="card-body">

                        <div class="form-group">
                           <b>Nama</b>
                            <input type="text" class="form-control" name="nama" placeholder="Nama">
                        </div>

                        <div class="form-group">
                            <b>Input Logo</b>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="form-control" name="logo">
                                </div>
                            </div>
                                <div class="form-group">
                          <b>Keterangan Testimoni</b>
                           <textarea name="ket" id="" cols="30" rows="10"></textarea>
                        </div>


                        </div>
                            </div>


<div class="modal-footer">
 <button class="btn btn-success btn-lg btn-block">Upload</button>


                </form>
</div>
                 <a href="/datatestimoni">
  <Button class="btn btn-info btn-lg btn-block">Lihat Data Testimoni</Button></a>
        </div>

            </div>
        </div>
    </div>



</body>
</html>



@endsection
