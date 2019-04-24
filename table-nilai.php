<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      
                      <th>Nama Guru</th>  
                      <th>Nama Santri</th>   
                      <th>Mapel</th>   
                      <th>Nilai</th>     
                      <th>Semester</th>
                      <th>Tahun Ajaran</th> 
                      <th>Aksi</th>                
                    </tr>
                  </thead>
                  
                  <tbody>
<?php
include 'koneksi.php';

  $mapel = $_GET['mapel'];
  $semester = $_GET['semester'];
  $kelas = $_GET['kelas'];

  if (isset($mapel) && ($semester) && ($kelas)) {
    $query=mysqli_query($koneksi, "SELECT * FROM nilai join siswa on siswa.no_induk=nilai.no_induk join guru on guru.id_guru=nilai.id_guru join mapel on mapel.kd_mapel=nilai.kd_mapel where nilai.kd_mapel = '$mapel' and semester = '$semester' and siswa.id_kelas = '$kelas'");
  }else {
    $query=mysqli_query($koneksi, "SELECT * FROM nilai join siswa on siswa.no_induk=nilai.no_induk join guru on guru.id_guru=nilai.id_guru join mapel on mapel.kd_mapel=nilai.kd_mapel");  
  }

while($data = mysqli_fetch_array($query)){
?>
                    <tr>
                      
                      <td><?php echo"$data[NAMA_GURU]";?></td>
                      <td><?php echo"$data[NAMA_SISWA]";?></td>
                      <td><?php echo"$data[MAPEL]";?></td>
                      <td><?php echo"$data[NILAI]";?></td>
                      <td><?php echo"$data[SEMESTER]";?></td>
                      <td><?php echo"$data[THN_AJAR]";?></td>
                      <td>
                      <a href="edit_nilai?id=<?php echo"$data[ID_NILAI]";?>" class="btn btn-info" >Ubah</a>
                      <a href="delete_nilai?id=<?php echo"$data[ID_NILAI]";?>" class="btn btn-danger" >Hapus</a>
                      </td>


                    </tr>
 <?php
}
?>             
                  </tbody>
                </table>