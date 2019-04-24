<!DOCTYPE html>
<html>
<head>
  <title>Print Nilai</title>
  <link href="print.css" rel="stylesheet">
</head>

<body>
<div>
  <table width="30%" border="0">
    <?php
    include 'koneksi.php';
    session_start();
    $id = $_SESSION['NO_INDUK'];   
    $semester = $_POST['semester'];
    $tahun = $_POST['tahun'];
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
      <tr>
        <td>Semester/Thn.Ajaran</td>
        <td>:</td>
        <td><?php echo $semester; ?> / <?php echo $tahun; ?></td>
      </tr>
      <?php
    }
    ?>
  </table>
</div>
<button name="print" onclick="window.print()" id="print">Cetak Nilai</button><br><br>
<table border="1" id="dataTable" width="40%" cellspacing="0">
  <thead>
    <tr>
      <th>No</th>  
      <th>Mata Pelajaran</th>   
      <th>Nilai</th>                 
    </tr>
  </thead>
  <?php
  include 'koneksi.php';
  $id = $_SESSION['NO_INDUK'];
  $semester = $_POST['semester'];
  $tahun = $_POST['tahun'];
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
</table><br><br>
<table border="1" width="30%" class="mt-3">
  <thead>
    <tr>
      <th colspan="2">Absensi</th>                
    </tr>
  </thead>
  <?php
  include 'koneksi.php';
  $id = $_SESSION['NO_INDUK'];
  $semester = $_POST['semester'];
  $tahun = $_POST['tahun'];
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
</body>
</html>