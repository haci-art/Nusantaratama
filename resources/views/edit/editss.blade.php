
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
    <h3>Data Screenshot Baru</h3>
    </div>
    <div class="modal-body">
    @foreach($screenshot as $isi)
    <form action="/updatess">
    <div class="form-group">
    <div class="form-group">
    Kode
    <input type="text" name="kode" class="form-control" value="{{$isi->kode}}">
    </div>
    Judul
    <input type="text" name="judul" class="form-control" value="{{$isi->judul}}">
    </div>
    <div class="form-group">
    Gambar
    <input type="file" name="gambar" class="form-control">
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
