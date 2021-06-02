
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Testimoni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <h3>Data Testimoni Baru</h3>
    </div>
    <div class="modal-body">
    @foreach($testimoni as $isi)
    <form action="/update">
    <div class="form-group">

    Nama
    <input type="text" name="nama" class="form-control" value="{{$isi->nama}}">
    </div>
    <div class="form-group">
    Logo
    <input type="file" name="logo" class="form-control">
    </div>
    <div class="form-group">
    Keterangan
   <textarea name="ket" rows="10" class="form-control" >{{$isi->ket}}</textarea>
    </div>
    <div class="modal-footer">
    <button type="submit" class="btn btn-success">Simpan Perubahan</button>
    </div>
    @endforeach
    </form>
    </div>
    </div>
    </div>
    </div>
</body>
</html>
