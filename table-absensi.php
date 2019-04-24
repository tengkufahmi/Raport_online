<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>

      <th>Nama Santri</th>                          
      <th>Subuh</th>
      <th>Maghrib</th>
      <th>Isyak</th>
      <th>Tanggal</th>
      <th>Semester</th>                          
      <th>Tahun Ajaran</th>
      <th>Aksi</th>
    </tr>
  </thead>
  
 <tbody>
  <?php
  include 'koneksi.php';

  $tanggal = $_GET['ajax'];
  $kelas = $_GET['kelas'];

  if (isset($tanggal) && ($kelas)) {
    $query=mysqli_query($koneksi, "SELECT * FROM absensi join siswa on absensi.no_induk=siswa.no_induk where tanggal = '$tanggal' and siswa.id_kelas = '$kelas' ");
  }else {
    $query=mysqli_query($koneksi, "SELECT * FROM absensi join siswa on absensi.no_induk=siswa.no_induk");
  }
  while($data = mysqli_fetch_array($query)){
    ?>
    <tr>

      <td><?php echo"$data[NAMA_SISWA]";?></td>                          
      <td><?php echo"$data[SUBUH]";?></td>
      <td><?php echo"$data[MAGHRIB]";?></td>
      <td><?php echo"$data[ISYAK]";?></td>
      <td><?php echo"$data[TANGGAL]";?></td>
      <td><?php echo"$data[SEMESTER]";?></td>                          
      <td><?php echo"$data[THN_AJARAN]";?></td>
      <td>
        <a href="edit_absen?no=<?php echo"$data[ID_ABSEN]";?>" class="btn btn-info">Ubah</a>
        <a href="delete_absen?no=<?php echo"$data[ID_ABSEN]";?>" class="btn btn-danger" >Hapus</a>
      </td>
    </tr>
    <?php
  }
  ?>             
</tbody>
</table>