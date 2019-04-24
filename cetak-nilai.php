<?php
include 'koneksi.php';
session_start();
if (empty(isset($_SESSION['AKSES']))) {
 header("location: index");
}
elseif ($_SESSION['AKSES'] == "admin") {
 header("location:admin");
} 
elseif ($_SESSION['AKSES'] == "siswa") {
 header("location: santri");
}
elseif ($_SESSION['AKSES'] == "ortu") {
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PPM SYAFIURROHMAN</title> <link rel="icon" type="image/jpg" href="images/icons/ayeaye.jpg"/>

  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-success static-top">

    <a class="navbar-brand mr-1" href="orangtua">PPM Syafi'ur Rohman</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>Akun
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="password_orangtua">Ganti Password</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="orangtua">
          <i class="fas fa-fw fa-user-circle"></i>
          <span>Profil Siswa</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="nilai-orangtua">
          <i class="fas fa-fw fa-book-open"></i>
          <span>Daftar Nilai</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cetak-nilai">
            <i class="fas fa-fw fa-book"></i>
            <span>Cetak Nilai</span></a>
          </li>
        </ul>

        <div id="content-wrapper">

          <div class="container-fluid">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="santri">Home</a>
              </li>
              <li class="breadcrumb-item active">Daftar Nilai</li>
            </ol>
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-book-open"></i>
                
                Daftar Nilai Santri
              </div>
              <div class="container mt-3">
              <form method="post" action="print_nilai">
                <div class="row">                  
                  <div class="col-md-3">
                    <div class="form-group">
                      Pilih Semester : <select class="form-control" name="semester" id="semester">
                        <option value="ganjil">Ganjil</option>
                        <option value="genap">Genap</option>
                      </select>
                      
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      Pilih Tahun Ajaran : <select class="form-control" name="tahun" id="tahun">
                        <option value="">--Tahun Ajaran--</option>
                        <option value="2017/2018">2017/2018</option>
                        <option value="2018/2019">2018/2019</option>
                        <option value="2019/2020">2019/2020</option>
                        <option value="2020/2021">2020/2021</option>
                      </select>

                    </div>
                  </div>
                  <div class="col-md-3 mt-3">
                    <button type="submit" class="btn-primary">CETAK</button>
                  </div>                 
                </div>
              </form>
              </div>
              <div id="txtHint">
                
              </div>
            </div>
          </div>

          <footer class="sticky-footer">
            <div class="container my-auto">
              <div class="copyright text-center my-auto">
                <span>Copyright © Raport PPM Syafi'ur Rohman</span><br>
                <span>Powered by SAFESapps</span>
              </div>
            </div>
          </footer>
        </div>
      </div>


      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>

      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ingin Meninggalkan Halaman?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>

            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-primary" href="logout?logout">Logout</a>
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


