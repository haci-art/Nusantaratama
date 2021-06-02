
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Banner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <h3>Data Client Baru</h3>
    </div>
    <div class="modal-body">
    @foreach($banner as $isi)
    <form action="/updatebanner">
    <div class="form-group">

Judul Banner
    <input type="text" name="judul_banner" class="form-control" value="{{$isi->judul_banner}}">
    </div>
    <div class="form-group">
    Keterangan
    <input type="text" name="ket" class="form-control" value="{{$isi->ket}}">
    </div>
    <div class="form-group">
    Gambar
    <input type="file" name="upload" class="form-control">
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
