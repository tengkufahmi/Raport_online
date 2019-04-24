<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>No Induk</th>
      <th>Nama Santri</th>
      <th>Data Raport</th>                   
    </tr>
  </tr>
</thead>

<tbody>
  <?php
  include 'koneksi.php';
  $tahun = $_GET['tahun'];
  if (isset($_GET['kelas'])) {
    $query=mysqli_query($koneksi, "SELECT * FROM siswa where ID_KELAS = '".$_GET['kelas']."'");
  }else {
    $query=mysqli_query($koneksi, "SELECT * FROM siswa ");  
  }

  while($data = mysqli_fetch_array($query)){
    ?>
    <tr>
      <td><?php echo"$data[NO_INDUK]";?></td>
      <td><?php echo"$data[NAMA_SISWA]";?></td>

      <td>
      <a href="raport_admin?id=<?php echo"$data[NO_INDUK]";?>&semester=ganjil&tahun=<?php echo $tahun;?>" class="btn btn-danger">Ganjil</a>
      <a href="raport_admin?id=<?php echo"$data[NO_INDUK]";?>&semester=genap&tahun=<?php echo $tahun;?>" class="btn btn-danger">Genap</a>
      </td>
    </tr>
    <?php
  }
  ?>             
</tbody>
</table>