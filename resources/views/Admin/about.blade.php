<!DOCTYPE html>
<html>
<head>

@extends('Admin.Ahome')
@section('lmao')
	<title></title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="bahan/css/bootstrap.min.css" media="all" >
	<!-- Slick nav CSS -->
	<link rel="stylesheet" type="text/css" href="bahan/css/slicknav.min.css" media="all" >
	<!-- Iconfont CSS -->
	<link rel="stylesheet" type="text/css" href="bahan/css/icofont.css" media="all" >
	<!-- Slick CSS -->
	<link rel="stylesheet" type="text/css" href="bahan/css/slick.css">

	<link rel="stylesheet" href="bahan/css/font-awesome.min.css">
	<!-- Owl carousel CSS -->
	<link rel="stylesheet" type="text/css" href="bahan/css/owl.carousel.css">
	<!-- Popup CSS -->
	<link rel="stylesheet" type="text/css" href="bahan/css/magnific-popup.css">
	<!-- Switcher CSS -->
	<link rel="stylesheet" type="text/css" href="bahan/css/switcher-style.css">
	<!-- Animate CSS -->
	<link rel="stylesheet" type="text/css" href="bahan/css/animate.min.css">
	<!-- Main style CSS -->
	<link rel="stylesheet" type="text/css" href="bahan/css/style.css" media="all" >
	<!-- Responsive CSS -->
	<link rel="stylesheet" type="text/css" href="bahan/css/responsive.css" media="all">
	<!-- Favicon Icon -->
	<link rel="icon" type="image/png" href="bahan/img/favcion.png">
	<!-- Datatable -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.21/r-2.2.5/datatables.min.css" media="all" />
	<!-- Fontawesome -->
	<link rel="stylesheet" href="bahan/fontawesome/css/all.min.css">
	<!-- Slick -->
	<link rel="stylesheet" href="bahan/slick/slick.css">
    <!-- Slick Theme -->
	<link rel="stylesheet" href="bahan/slick/slick-theme.css">

</head>
<body> @foreach($dataabout as $isi)
<a href="/editabout/{{$isi->id}}">
<button class="btn btn-primary btn-lg">SUNTING ABOUT</button>
</a>
</section><!-- hero area end -->
<!-- about section start -->
<section class="about-area ptb-90">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="sec-title">
					<h2 align="center"><b>{{$isi->deskripsi}}</b><span class="sec-title-border"><span></span><span></span><span></span></span></h2>
					<p align="center" style="color: black;">{{$isi->sub_about}}</p>
                    @endforeach
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<div class="single-about-box">
					<i class="icofont icofont-ruler-pencil"></i>
					<h4>E-Goverment Web Development</h4>
					<p>Membangun perangkat lunak Sistem Informasi Manajemen (software) komputer</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="single-about-box">
					<i class="icofont icofont-computer"></i>
					<h4>Cloud Hosting</h4>
					<p>Jasa penyewaan server domain dan hosting berbasis cloud terpercaya</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="single-about-box">
					<i class="icofont icofont-headphone-alt"></i>
					<h4>Service Komputer, hardware dan Jaringan</h4>
					<p>Membantu banyak perusahan di bidang jasa service komputer dan jaringan tanpa perlu ribet, kami datang ke kantor anda</p>
				</div>
			</div>
		</div>
	</div>
</section><!-- about section end -->
	@endsection
</body>
</html>
