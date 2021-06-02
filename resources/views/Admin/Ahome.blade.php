
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Nusantara Tama</title>

@include('template.headlte')


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




	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->



</head>
<body>
</section>
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav style="background-color: navy;" class="main-header navbar navbar-expand navbar-primary navbar-primary">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i style="color: white;" class="fas fa-bars"></i></a>
      </li>
    </ul>


  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside style="background-color: navy;" class="main-sidebar sidebar-dark-primary">
    <!-- Brand Logo -->
    <a href="/">
    <p class="brand-link">
      <img src="bahan/img/favcion.png" alt="Nusantara logo" class="brand-image img-circle elevation-3" style="background-color: blue;">
      <span style="font-family: fantasy; color: lightgray;"><b>Nusantara Tama</b></span>
    </p></a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->




      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


        <li class="nav-item">
          <a href="/adminhome" class="nav-link">
            <i class="fas fa-home nav-icon"></i>
            <b>Home Admin</b>
          </a>
        </li>

        <li class="nav-header">Nusantara Tama Admin</li>
        <li class="nav-item">
            <a href="/databanner" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <b>
                Banner
              </b>
            </a>
           </li>
          </li>

          <li class="nav-item">
            <a href="/about" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <b>
                About
              </b>
            </a>
           </li>
          </li>
         <li class="nav-item">
            <a href="/legalitas" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
            <b>
                Legalitas
              </b>
            </a>
           </li>
          <li class="nav-item">
            <a href="/datascreenshot" class="nav-link">
              <i class="nav-icon fas fa-image"></i>
              <b>
                Screenshot
              </b>
            </a>
          <li class="nav-item">
            <a href="/datatestimoni" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <b>
                Testimoni
              </b>
            </a>
          <li class="nav-item">
            <a href="/dataclient" class="nav-link">
              <i class="nav-icon fas fa-th-large"></i>
              <b>
                Client
              </b>
            </a>
         <li class="nav-item">
            <a href="/dataportfolio" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <b>
                portofolio
              </b>
            </a>
           </li>
           <li class="nav-item">
            <a href="/kontak" class="nav-link">
              <i class="nav-icon fas fa-th-large"></i>
              <b>
                Contact
              </b>
            </a>

        ____________________________
            <li class="nav-item">
            <a href="/logout" class="nav-link">
              <i class="nav-icon fas fa-th-large"></i>
              <b>
                Logout
              </b>
            </a>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div style="background-color:white ;" class="content-wrapper">
    <!-- Main content -->

    <section class="content">
      @yield('lmao')
    </section>
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="Atemplate/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="Atemplate/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="Atemplate/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="Atemplate/dist/js/demo.js"></script>
</body>
</html>
