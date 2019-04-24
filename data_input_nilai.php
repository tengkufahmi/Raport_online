<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>

      <th>Nama Santri</th>                         
      <th>Nilai</th>                       
    </tr>
  </thead>
  
 <tbody>
  <?php
  include 'koneksi.php';
  if (isset($_GET['kelas'])) {
    $query=mysqli_query($koneksi, "SELECT * FROM siswa where id_kelas = '".$_GET['kelas']."' ");
  }else {
    $query=mysqli_query($koneksi, "SELECT * FROM siswa");
  }
  while($data = mysqli_fetch_array($query)){
    ?>
    <tr>

      <td>
        <input type="hidden" name="no[]" value="<?php echo"$data[NO_INDUK]";?>"><?php echo"$data[NAMA_SISWA]";?>
      </td>                                     
      <td>
        <div class="form-group">                            
          <input value=""  type="text" class="form-control" name="nilai[]">      
        </div>
      </td>               
    </tr>
    <?php
  }
  ?>             
</tbody>
</table>