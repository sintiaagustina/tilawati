<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TilawatiClassMobile</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="nav-link text-white clearfix" href="index.php">
          <i class="fas fa-fw fa-home"></i>
          <span>Beranda</span></a>
      </li>
     
        <a class="nav-link text-white clearfix" href="timeline.php">
          <i class="fas fa-fw fa-heart"></i>
          <span>Inspirasi</span></a>
      </li>
      

    

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Cari .." aria-label="Search"
          aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
     
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="AkunSaya.php">AKUN SAYA</a>
          <a class="dropdown-item" href="#">HUBUNGI KAMI</a>
          <a class="dropdown-item" href="#">TENTANG KAMI</a>
        
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Keluar</a>
        </div>
      </li>
    </ul>

  </nav>


  <div id="wrapper">

    

    <div id="content-wrapper">

      <div class="container-fluid">

        

        <!-- Icon Cards-->

<?
$ku = $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]
<hr width='100%'><center><font color='green' size='4'><b>Bagikan</b></font><hr width='100%'>

<a rel='nofollow' href='https://www.facebook.com/sharer.php?u=http://$ku'>
<img src='http://syam.eu.org/icon/fb.jpg' alt='' width='50' height='50'></a> 

<a rel='nofollow' href='https://plus.google.com/share?url=http://$ku'>
<img src='http://syam.eu.org/icon/g.jpg' alt='' width='50' height='50'></a> 

<a rel='nofollow' href='http://www.linkedin.com/shareArticle?mini=true&url=http://$ku'>
<img src='http://syam.eu.org/icon/in.jpg' alt='' width='50' height='50'></a> 

<a rel='nofollow' href='https://twitter.com/share?url=http://$ku'>
<img src='http://syam.eu.org/icon/tw.jpg' alt='' width='50' height='50'></a> 

<a rel='nofollow' href='http://pinterest.com/pin/create/button/?url=http://$ku'>
<img src='http://syam.eu.org/icon/p.jpg' alt='' width='50' height='50'></a> 

<a rel='nofollow' href='https://timeline.line.me/social-plugin/share?url=http://$ku'>
<img src='http://syam.eu.org/icon/l.jpg' alt='' width='50' height='50'></a> 

<a rel='nofollow' href='whatsapp://send?text=http://$ku'>
<img src='http://syam.eu.org/icon/wa.jpg' alt='' width='50' height='50'></a> 



              

        

      
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apakah anda mau keluar?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih "Keluar" di bawah ini jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <a class="btn btn-primary" href="login.php">Keluar</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>

