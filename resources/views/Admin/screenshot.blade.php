<!DOCTYPE html>
<html>
<head>
@extends('Admin.Ahome')
	@section('lmao')
	<title></title>
	<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background-size: cover;
            background:url('A.jpg')
        }
    </style>
</head>
<body>
    <h3 align="center">Data Screenshot</h3>
    <div class="container">
        <a href="/ss"><button class="btn btn-primary">Tambah</button></a> <br><br>
      <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nomer Gambar</th>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Opsi</th>
            </tr>
            <?php
            $no=1;
            ?>
            @foreach ($datascreenshot as $isi )
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $isi->kode }}</td>
                    <td>{{ $isi->judul }}</td>
                    <td style="background-color: ;"><img src="{{url('screenshot/'.$isi->gambar)}}" width="100px"> </td>
                    <td>
                        <a href="/hapusss/{{ $isi->kode }}">
                            <button class="btn btn-danger" title="hapus data: {{ $isi->kode }}"><i class="bi bi-trash-fill"></i></button>
                        </a>
                        <a href="/editss/{{$isi->kode}}">
                            <button class="btn btn-warning" title="edit data kode : {{$isi->kode}"><i class="bi bi-pencil"></i></button>
                        </a>
                    </td>
                </tr>

            @endforeach
        </table>

    </div>
</body>

@endsection

</html>
