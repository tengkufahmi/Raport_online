<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>

                        <th>Nama Santri</th>                          
                        <th>Subuh</th>
                        <th>Maghrib</th>
                        <th>Isyak</th>                        
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

                        <td><input type="hidden" name="no[]" value="<?php echo"$data[NO_INDUK]";?>"><?php echo"$data[NAMA_SISWA]";?></td>                          
                        <td>
                          <div class="form-group">                            
                            <select name="subuh[]" class="form-control">
                             <option value="Hadir">Hadir</option>
                             <option value="Izin">Izin</option>
                             <option value="Sakit">Sakit</option>
                             <option value="Alfa">Alfa</option>
                           </select>
                          </div>
                        </td>
                        <td>
                          <div class="form-group">
                          <select name="maghrib[]" class="form-control">
                             <option value="Hadir">Hadir</option>
                             <option value="Izin">Izin</option>
                             <option value="Sakit">Sakit</option>
                             <option value="Alfa">Alfa</option>
                           </select>
                         </div>
                        </td>
                        <td>
                          <div class="form-group">
                          <select name="isyak[]" class="form-control">
                             <option value="Hadir">Hadir</option>
                             <option value="Izin">Izin</option>
                             <option value="Sakit">Sakit</option>
                             <option value="Alfa">Alfa</option>
                           </select>
                        </div>
                        </td>                         
                      </tr>
                      <?php
                    }
                    ?>             
                  </tbody>
                  </table>