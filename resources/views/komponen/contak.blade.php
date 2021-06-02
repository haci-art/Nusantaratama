@extends('Admin.Ahome')
@section('lmao')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
<a href="/kontak" class="btn btn-primary">Tulis pesan</a>
<table class="table table-bordered table-striped">
            <tr>
                <th>No</th>
                <th>Nama Pengirim</th>
                <th>Email Pengirim</th>
                <th>Pesan</th>
                <th>Komentar</th>
                <th> opsi</th>
            </tr>
            <?php
            $no=1;
            ?>
            @foreach ($kiriman as $isi)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>Dari : <b>{{ $isi->nama }}</b></td>
                    <td><a href="https://{{ $isi->email }}">{{ $isi->email }}</a></td>
                    <td>{{ $isi->pesan }}</td>
                    <td>{{ $isi->komentar }}</td>
                    <td>
                        <a href="/hapuspesan/{{ $isi->email}}">
                            <button class="btn btn-danger" title="hapus data: {{ $isi->email}}">Hapus</button>
                        </a>
                    </td>
                </tr>

            @endforeach
        </table>

</div>
</body>@endsection
</html>
