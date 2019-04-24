<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>raportonline</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">PPM Syafi'ur Rohman</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> &nbsp; <a href="login.html" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="2.png"class="user-image img-responsive"/>
                    </li>
                 <li>
                        <a  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Profil Siswa</a>
                    </li>
                    <li>
                        <a  href="daftar_nilai.php"><i class="fa fa-dashboard fa-3x"></i> Daftar Nilai</a>
                    </li>
                    <li>
                        <a  href="cetak_nilai.php"><i class="fa fa-dashboard fa-3x"></i> Cetak Nilai</a>
                    </li>                    
                               </ul>
                               
                            </li>
                        </ul>
                      </li>  
                    
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                   <?php
                        $page = $_GET['page'];
                        $aksi = $_GET['aksi'];
                            if($page == "") {
                    if($aksi == "") {
        include "page/dashboard.php";
    }
} elseif($page == "dashboard") {
    if($aksi == "") {
         include "page/dashboard.php";
    }
}elseif($page == "masuk") {
    if($aksi == "") {
         include "page/kas_masuk/masuk.php";
    }
    if($aksi == "hapus") {
         include "page/kas_masuk/hapus.php";
    }
}
?>     
                </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 
                 </td>
        </tr>
    </table>
    <table width="485" height="261" border="3">
      <tr>
        <td width="298" align="center">MATA PELAJARAN</td>
        <td width="142" align="center">NILAI</td>
      </tr>
      <tr>
        <td><input  name="hp11" type="text" size="60" maxlength="60"></td>
        <td><input  name="hp9" type="text" size="10" maxlength="10"></td>
      </tr>
      <tr>
        <td><input  name="hp" type="text" size="60" maxlength="60"></td>
        <td><input  name="hp10" type="text" size="10" maxlength="10"></td>
      </tr>
      <tr>
        <td><input  name="hp2" type="text" size="60" maxlength="60"></td>
        <td><input  name="hp12" type="text" size="10" maxlength="10"></td>
      </tr>
      <tr>
        <td><input  name="hp3" type="text" size="60" maxlength="60"></td>
        <td><input  name="hp13" type="text" size="10" maxlength="10"></td>
      </tr>
      <tr>
        <td><input  name="hp4" type="text" size="60" maxlength="60"></td>
        <td><input  name="hp14" type="text" size="10" maxlength="10"></td>
      </tr>
      <tr>
        <td><input  name="hp5" type="text" size="60" maxlength="60"></td>
        <td><input  name="hp15" type="text" size="10" maxlength="10"></td>
      </tr>
      <tr>
        <td><input  name="hp6" type="text" size="60" maxlength="60"></td>
        <td><input  name="hp16" type="text" size="10" maxlength="10"></td>
      </tr>
      <tr>
        <td><input  name="hp7" type="text" size="60" maxlength="60"></td>
        <td><input  name="hp17" type="text" size="10" maxlength="10"></td>
      </tr>
      <tr>
        <td><input  name="hp8" type="text" size="60" maxlength="60"></td>
        <td><input  name="hp18" type="text" size="10" maxlength="10"></td>
      </tr>
  </table>
            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>


