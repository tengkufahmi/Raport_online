<?php
include 'koneksi.php';
session_start();
if (empty(isset($_SESSION['AKSES']))) {
 header("location: index");
}
elseif ($_SESSION['AKSES'] == "admin") {
 header("location:admin");
} 
elseif ($_SESSION['AKSES'] == "ortu") {
 header("location: orangtua");
}
elseif ($_SESSION['AKSES'] == "siswa") {
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

    <a class="navbar-brand mr-1" href="santri">PPM Syafi'ur Rohman</a>

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
          <a class="dropdown-item" href="password_santri">Ganti Password</a>
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
        <a class="nav-link" href="santri">
          <i class="fas fa-fw fa-user-circle"></i>
          <span>Profil Siswa</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="nilai">
          <i class="fas fa-fw fa-book-open"></i>
          <span>Daftar Nilai</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cetak">
            <i class="fas fa-fw fa-book"></i>
            <span>Cetak Nilai</span></a>
          </li>
        </ul>

        <div id="content-wrapper">

          <div class="container-fluid">


            <!-- DataTables Example -->
            <div id="page-wrapper" >
              <div id="page-inner">
                <div class="row">
                  <br><br>
                  <div class="col-md-9">       
                    <b>PROFIL SANTRI</b><br><br>
                    <table border="0">
                      <?php
                      include 'koneksi.php';
                      $query=mysqli_query($koneksi, "SELECT * FROM siswa join kelas on kelas.id_kelas=siswa.id_kelas join orang_tua on orang_tua.id_ortu=siswa.id_ortu join guru on guru.id_guru=siswa.id_guru where NO_INDUK= '".$_SESSION['NO_INDUK']."'");
                      while($data = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                          <td rowspan="0">
                            <img src="2.png" class="user-image img-responsive" align="left" width="200" height="200" />
                          </td>
                        </tr>
                        <tr>
                          <td rowspan="0">
                            <tr>
                              <td  bgcolor="#FFFFFF"><table width="452"  border="0" align="center" cellpadding="0"  cellspacing="0">
                                <tr>
                                  <td  width="150">No Induk</td><td width="11">:</td>
                                  <td  width="250"><?php echo"$data[NO_INDUK]";?></td>
                                </tr>
                                <tr>
                                  <td>Nama</td>
                                  <td>:</td>
                                  <td><?php echo"$data[NAMA_SISWA]";?></td>
                                </tr>
                                <tr>
                                  <td>Tempat Tanggal Lahir</td>
                                  <td>:</td>
                                  <td><?php echo"$data[TEMPAT_LAHIR]";?>, <?php echo"$data[TANGGAL_LAHIR]";?></td>
                                </tr>
                                <tr>
                                  <td>Jenis Kelamin</td>
                                  <td>:</td>
                                  <td><?php echo"$data[JENIS_KELAMIN]";?></td>
                                </tr>
                                <tr>
                                  <td>Golongan Darah</td>
                                  <td>:</td>
                                  <td><?php echo"$data[GOL_DARAH]";?></td>
                                </tr>
                                <tr>
                                  <td height="50">Alamat</td>
                                  <td height="50">:</td>
                                  <td height="50"><?php echo"$data[ALAMAT]";?></td>
                                </tr>
                                <tr>
                                  <td>Kelas</td>
                                  <td>:</td>
                                  <td><?php echo"$data[NAMA_KELAS]";?></td>
                                </tr>
                                <tr>
                                  <td>Wali</td>
                                  <td>:</td>
                                  <td><?php echo"$data[NAMA_WALI]";?></td>
                                </tr>
                                <tr>
                                  <td>BK Santri</td>
                                  <td>:</td>
                                  <td><?php echo"$data[NAMA_GURU]";?></td>
                                </tr>
                              </td>
                            </tr>
                            <?php
                          }
                          ?> 
                        </table></td></tr></td></tr>
                      </table>                  
                    </div>
                    <hr />
                    <br><br>
                    <div class="float-right ml-5 mt-3">

                      <b>--PENGUMUMAN TERBARU--</b><br><br>
                      <?php
                      include 'koneksi.php';
                      $perintah = mysqli_query($koneksi, "SELECT * FROM pengumuman order by id_pengumuman desc limit 1");
                      while($isi = mysqli_fetch_array($perintah)){
                        ?>

                        <?php echo"$isi[JUDUL]";?><br><br>
                        <?php echo"$isi[ISI]";?>


                        <?php
                      }
                      ?>
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
