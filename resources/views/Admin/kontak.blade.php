<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<body>
<footer class="footer" id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="contact-form">
                <br>
                <br>
                <br>
					<h4>Konsultasikan Permasalahan </h4>
					<p class="form-message"></p>
					<form id="contact-form" action="/simpanpesan">
						<input type="text" name="nama" placeholder="Masukkan Nama">
						<input type="email" name="email" placeholder="Masukkan Email">
						<input type="text" name="pesan" placeholder="Tulis Pesan">
						<textarea placeholder="pesan" name="komentar"></textarea>
						<button class="btn btn-info">Kirim Pesan</button>
					</form>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="contact-address">
                <br><br>
					<h4>Kontak Kami</h4>
					<p>Kantor adalah rumah ke-dua bagi team kami, kantor sebagai tempat yang menyenangkan bersama teman seperti keluarga kami</p>
					<ul>
						<li>
							<div class="contact-address-icon">
								<i class="icofont icofont-headphone-alt"></i>
							</div>
							<div class="contact-address-info">
								<a href="callto:#">+62 331-4350050</a>
								<a href="callto:#">+62 8233-55255</a>
							</div>
						</li>
						<li>
							<div class="contact-address-icon">
								<i class="icofont icofont-envelope"></i>
							</div>
							<div class="contact-address-info">
								<a href="mailto:#">nusantaratama@gmail.com</a>
							</div>
						</li>
						<li>
							<div class="contact-address-icon">
								<i class="icofont icofont-web"></i>
							</div>
							<div class="contact-address-info">
								<a href="www.nusantaratama.com">www.nusantaratama.com</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="subscribe-form">
					<form action="#">
						<input type="text" placeholder="Masukkan email kamu disini">
						<button type="submit">Daftar</button>
					</form>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="copyright-area">
					<ul>
						<li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
						<li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
						<li><a href="#"><i class="icofont icofont-brand-linkedin"></i></a></li>
						<li><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
						<li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
					</ul>
					<p>&copy;
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright CV. Nusantara Tama &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved. by <a href="mascitra.com">mascitra.com</a>
						// <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
		</div>
	</div>
</footer>
<a href="#" class="scrollToTop">
	<i class="icofont icofont-arrow-up"></i>
</a>
</body>@endsection
</html>
