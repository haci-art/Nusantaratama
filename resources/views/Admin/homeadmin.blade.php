<!DOCTYPE html>
<html>
<head>

@extends('Admin.Ahome')
@section('lmao')
<style>

 .selamat{
        font-family: fantasy;
        color: black;
    }
.tampil {
    color: black;
    font-size: 80px;
    text-align:center;
    font-family:fantasy;
}
</style>
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
<body style="background-color: white;">
<br><br>
<!-- hero area end -->
<!-- about section start -->

	<div class="container">
        <div class="sec-title">
					<h1 class="selamat"><b>Selamat datang Di Halaman Admin</b><br><br> <span class="sec-title-border"><span></span><span></span><span></span></span></h1>
                        <img src="{{asset('nusantara/logo (1).png')}}" width="75%" style="background-color: lightblue;">
                 </div>

		    </div>


<!-- about section end -->
	@endsection
</body>
</html>
