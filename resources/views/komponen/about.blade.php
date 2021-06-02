<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUNTING SUB ABOUT</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>

<section class="content">
    <div class="container-fluid">
        <div class="row">
        <!-- left column -->
            <div class="col-md-6">
            <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header bg-primary">
                            <h3 class="card-title">INPUT ABOUT BARU</h3>
                    </div>
                </div>
                @foreach($about as $isi)
                <!-- /.card-header -->
                <!-- form start -->
                <form action="/updateabout">
                    <div class="card-body">
                    <div class="form-group">
                         <input name="id" type="text" style="color: white; border: none;" class="form-control" value="{{$isi->id}}">
                        </div>
                        <div class="form-group">
                           <b>Judul About :</b>
                           <textarea name="deskripsi" cols="100" rows="1" style="background-color: white;">{{$isi->deskripsi}}</textarea>
                        </div>


                                <div class="form-group">
                          <b>Sub About</b>
                          <textarea name="sub_about" cols="100" rows="8" style="background-color: white;">{{$isi->sub_about}}</textarea>
                        </div>
                        @endforeach
                        <div class="">
                        <button type="submit" class="btn btn-success btn-lg">Simpan Perubahan</button>
                        </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


</body>
</html>
