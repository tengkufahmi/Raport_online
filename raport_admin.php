<?php
include 'koneksi.php';
session_start();
if (empty(isset($_SESSION['AKSES']))) {
 header("location: index");
}
elseif ($_SESSION['AKSES'] == "siswa") {
 header("location:siswa");
} 
elseif ($_SESSION['AKSES'] == "ortu") {
 header("location: orangtua");
}
elseif ($_SESSION['AKSES'] == "admin") {
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

  <title>PPM SYAFIURROHMAN</title>

  <!-- Bootstrap core CSS-->
  <link rel="icon" type="image/jpg" href="images/icons/ayeaye.jpg"/>
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

    <a class="navbar-brand mr-1" href="admin">PPM Syafi'ur Rohman</a>

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
          <i class="fas fa-user-circle fa-fw"></i>Lainnya
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="backup_restore">Backup & Restore Data</a>
          <a class="dropdown-item" href="arsip_raport">Arsip Data Raport</a>
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
        <a class="nav-link" href="admin">
          <i class="fas fa-fw fa-home"></i>
          <span>Home</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>View Data</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">         
          <a class="dropdown-item" href="siswa_admin">Data Siswa</a>
          <a class="dropdown-item" href="ortu_admin">Data OrangTua</a>
          <a class="dropdown-item" href="user_admin">Data User</a>

          <a class="dropdown-item" href="kelas_admin">Data Kelas</a>

          <a class="dropdown-item" href="mapel_admin">Data Mapel</a>
          <a class="dropdown-item" href="guru_admin">Data Guru</a>


        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="nilai_admin">
          <i class="fas fa-fw fa-book"></i>
          <span>Nilai</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="absensi">
            <i class="fas fa-fw fa-book-open"></i>
            <span>Absensi</span></a>
          </li>
        </ul>

        <div id="content-wrapper">

          <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="admin">Home</a>
              </li>
              <li class="breadcrumb-item active">Halaman Admin</li>
            </ol>                    

            <!-- DataTables Example -->
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-bullseye"></i>
              HALAMAN ADMIN</div>
              <div class="card-body">
                <div class="col-md-5">
                  <table width="100%" border="0">
                    <?php
                    include 'koneksi.php';
                    $id = $_GET['id'];
                    $query = mysqli_query($koneksi, "SELECT * from siswa join kelas on kelas.id_kelas=siswa.id_kelas where no_induk = '$id'");
                    while($data = mysqli_fetch_array($query)){ 
                      ?>
                      <tr>
                        <td>No Induk</td>
                        <td>:</td>
                        <td><?php echo"$data[NO_INDUK]"; ?></td>
                      </tr>
                      <tr>
                        <td>Nama Santri</td>
                        <td>:</td>
                        <td><?php echo"$data[NAMA_SISWA]"; ?></td>
                      </tr>
                      <tr>
                        <td>Kelas</td>
                        <td>:</td>
                        <td><?php echo"$data[NAMA_KELAS]"; ?></td>
                      </tr>
                      <?php
                    }
                    ?>
                  </table>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>  
                      <th>Mata Pelajaran</th>   
                      <th>Nilai</th>                 
                    </tr>
                  </thead>
                  <?php
                  include 'koneksi.php';
                  $id = $_GET['id'];
                  $semester = $_GET['semester'];
                  $tahun = $_GET['tahun'];

                  $no = 1;
                  if (isset($semester) && ($tahun)){
                    $sql = mysqli_query($koneksi, "SELECT * FROM nilai join mapel on mapel.kd_mapel=nilai.kd_mapel where no_induk = '$id' && semester = '$semester' && thn_ajar = '$tahun'");
                  } else {
                   $sql = mysqli_query($koneksi, "SELECT * FROM nilai join mapel on mapel.kd_mapel=nilai.kd_mapel");
                 }
                 while($nilai = mysqli_fetch_array($sql)){
                  ?>
                  <tbody>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo"$nilai[MAPEL]"; ?></td>
                      <td><?php echo"$nilai[NILAI]"; ?></td>
                    </tr>
                  </tbody>
                  <?php
                }
                ?>
              </table>
              <table border="1" width="30%">
                <thead>
                  <tr>
                    <th colspan="2">Absensi</th>                
                  </tr>
                </thead>
                <?php
                include 'koneksi.php';
                $id = $_GET['id'];
                $semester = $_GET['semester'];
                $tahun = $_GET['tahun'];
                $s1 = mysqli_query($koneksi, "SELECT sum(subuh = 'sakit') as subuh, sum(maghrib = 'sakit') as maghrib, sum(isyak = 'sakit') as isyak from absensi where no_induk = '$id' && semester = '$semester' && thn_ajaran = '$tahun' ");
                $s2 = mysqli_fetch_assoc($s1);
                $ss1 = $s2['subuh'];
                $ss2 = $s2['maghrib'];
                $ss3 = $s2['isyak'];
                $sakit = $ss1+$ss2+$ss3;

                $i1 = mysqli_query($koneksi, "SELECT sum(subuh = 'izin') as subuh, sum(maghrib = 'izin') as maghrib, sum(isyak = 'izin') as isyak from absensi where no_induk = '$id' && semester = '$semester' && thn_ajaran = '$tahun' ");
                $i2 = mysqli_fetch_assoc($i1);
                $ii1 = $i2['subuh'];
                $ii2 = $i2['maghrib'];
                $ii3 = $i2['isyak'];
                $izin = $ii1+$ii2+$ii3;

                $a1 = mysqli_query($koneksi, "SELECT sum(subuh = 'alfa') as subuh, sum(maghrib = 'alfa') as maghrib, sum(isyak = 'alfa') as isyak from absensi where no_induk = '$id' && semester = '$semester' && thn_ajaran = '$tahun' ");
                $a2 = mysqli_fetch_assoc($a1);
                $aa1 = $a2['subuh'];
                $aa2 = $a2['maghrib'];
                $aa3 = $a2['isyak'];
                $alfa = $aa1+$aa2+$aa3;
                ?>
                <tbody>
                  <tr>
                    <td>Sakit</td>
                    <td><?php echo $sakit; ?></td>
                  </tr>
                  <tr>
                    <td>Izin</td>
                    <td><?php echo $izin; ?></td>
                  </tr>
                  <tr>
                    <td>Alfa</td>
                    <td><?php echo $alfa; ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer small text-muted">
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Raport PPM Syafi'ur Rohman</span><br>
              <span>Powered by SAFESapps</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
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
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
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
