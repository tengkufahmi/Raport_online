<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>No Induk</th>
      <th>Kelas</th>
      <th>User</th>
      <th>Alamat</th>
      <th>Guru BK</th>
      <th>Nama Wali</th>
      <th>Nama</th>
      <th>Tempat Lahir</th>
      <th>Tanggal Lahir</th>
      <th>Jenis Kelamin</th>
      <th>Golongan Darah</th>
      <th>Status</th>
      <th>Angkatan</th>
      <th>No Hp</th>
      <th>Email</th> 
      <th>Aksi</th>                    
    </tr>
  </tr>
</thead>

<tbody>
  <?php
  include 'koneksi.php';
  if (isset($_GET['kelas'])) {
    $query=mysqli_query($koneksi, "call santri('".$_GET['kelas']."')");
  }else {
    $query=mysqli_query($koneksi, "call santri2()");  
  }

  while($data = mysqli_fetch_array($query)){
    ?>
    <tr>
      <td><?php echo"$data[NO_INDUK]";?></td>
      <td><?php echo"$data[NAMA_KELAS]";?></td>
      <td><?php echo"$data[ID_USER]";?></td>
      <td><?php echo"$data[ALAMAT]";?></td>
      <td><?php echo"$data[NAMA_GURU]";?></td>
      <td><?php echo"$data[NAMA_WALI]";?></td>
      <td><?php echo"$data[NAMA_SISWA]";?></td>
      <td><?php echo"$data[TEMPAT_LAHIR]";?></td>
      <td><?php echo"$data[TANGGAL_LAHIR]";?></td>
      <td><?php echo"$data[JENIS_KELAMIN]";?></td>
      <td><?php echo"$data[GOL_DARAH]";?></td>
      <td><?php echo"$data[STATUS]";?></td>
      <td><?php echo"$data[ANGKATAN]";?></td>
      <td><?php echo"$data[HP]";?></td>
      <td><?php echo"$data[EMAIL]";?></td>
      <td>
      <a href="edit_siswa?id=<?php echo"$data[NO_INDUK]";?>" class="btn btn-info" >Ubah</a>
      <a href="delete_siswa?id=<?php echo"$data[NO_INDUK]";?>" class="btn btn-danger" >Hapus</a>
      </td>
    </tr>
    <?php
  }
  ?>             
</tbody>
</table>