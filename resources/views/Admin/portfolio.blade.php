
<!DOCTYPE html>
<html>
<head>
@extends('Admin.Ahome')
@section('lmao')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11">

</script>
	<title>Portofolio</title>
	 <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
    <h3 align="center">Portofolio</h3>
    <div class="container">
         <a href="/portofolio"><button class="btn btn-primary btn-lg">Tambah</button></a> <br><br>
      <table class="table table-bordered table-striped ">
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Nama</th>
                <th>Logo</th>
                <th>Keterangan</th>
                <th>Opsi</th>
            </tr>
            <?php
            $no=1;
            ?>
            @foreach ($portofolio as $isi )
                <tr>
                    <td>{{ $no++ }}</td>
                    <td><b>{{ $isi->kode }}</b></td>
                    <td>{{ $isi->nama }}</td>
                    <td><img src="{{url('logo_portfolio/'.$isi->logo)}}" width="200px"> </td>
                    <td>{{$isi->ket}}</td>
                    <td>
                        <a href="/hapusptf/{{ $isi->nama}}">
                            <button class="btn btn-danger" title="hapus data: {{ $isi->nama }}"><i class="bi bi-trash-fill"></i></button>
                        </a>
                        <a href="/Editptf/{{$isi->nama}}">
                            <button class="btn btn-warning" title="edit data nama : {{$isi->nama}"><i class="bi bi-pencil"></i></button>
                        </a>
                    </td>
                </tr>

            @endforeach
        </table>

    </div>
</body>
@endsection
</html>



