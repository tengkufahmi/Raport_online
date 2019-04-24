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
      <li class="nav-item">
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
        <li class="nav-item active">
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
                <li class="breadcrumb-item active">Tables</li>
              </ol>
              <form method="POST" action="input_absen.php" enctype="multipart/form-data" class="col-md-12">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="NO_INDUK">NO INDUK</label>
                      <select class="form-control" name="no">                      
                        <option>--</option>
                        <?php 
                        include 'koneksi.php';
                        $query=mysqli_query($koneksi, "SELECT * FROM siswa");
                        while($data=mysqli_fetch_array($query)){ ?>
                          <option value="<?php echo"$data[NO_INDUK]";?>"><?php echo"$data[NAMA_SISWA]";?></option>
                        <?php } ?>             
                      </select>                    
                    </div>                 
                    <div class="form-group">
                      <label for="Tanggal">Tanggal</label>
                      <input value=""  type="date" class="form-control" name="tanggal">
                    </div>                  
                    <div class="form-group">
                      <label for="Subuh">Subuh</label><br>
                      <input type="radio" name="subuh" value="Hadir">Hadir  
                      <input type="radio" name="subuh" value="Izin">Izin  
                      <input type="radio" name="subuh" value="Sakit">Sakit  
                      <input type="radio" name="subuh" value="Alfa">Alfa
                    </div>
                    <div class="form-group">
                      <label for="Maghrib">Maghrib</label><br>
                      <input type="radio" name="maghrib" value="Hadir">Hadir  
                      <input type="radio" name="maghrib" value="Izin">Izin  
                      <input type="radio" name="maghrib" value="Sakit">Sakit  
                      <input type="radio" name="maghrib" value="Alfa">Alfa
                    </div>    
                    <div class="form-group">
                      <label for="Isyak">Isyak</label><br>
                      <input type="radio" name="isyak" value="Hadir">Hadir  
                      <input type="radio" name="isyak" value="Izin">Izin  
                      <input type="radio" name="isyak" value="Sakit">Sakit  
                      <input type="radio" name="isyak" value="Alfa">Alfa
                    </select>
                  </div>                                                             
                  <div class="form-group">
                    <label for="Tahun Ajaran">Tahun Ajaran</label>
                    <select name="tahun" class="form-control">
                     <option value="2017/2018">2017/2018</option>
                     <option value="2018/2019">2018/2019</option>
                     <option value="2019/2020">2019/2020</option>
                     <option value="2020/2021s">2020/2021</option>
                   </select>
                 </div>
               </div>
             </div>


             <div class="card-footer small text-mutedtext-center">
              <?php 
              if(isset($_GET['ubah'])){
               echo "<button type='submit' name='ubah' class='btn btn-warning col-md-2 col-xs-12'>Ubah</button>";
             } 
             else {
               echo "<button name='tambah' type='submit' class='btn btn-primary col-md-2 col-xs-12'>Tambah</button> ";
             }
             ?>
           </div>

         </form>
         <p class="small text-center text-muted my-5">
          <em></em>
        </p>

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
        <
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
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
