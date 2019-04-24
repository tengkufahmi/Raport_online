<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	<thead>
		<tr>

			<th>Nama Mahasiswa</th>                          
			<th>Subuh</th>
			<th>Maghrib</th>
			<th>Isyak</th>
			<th>Tanggal</th>                          
			<th>Tahun Ajaran</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tfoot>
		<tr>

			<th>Nama Mahasiswa</th>                         
			<th>Subuh</th>
			<th>Maghrib</th>
			<th>Isyak</th>
			<th>Tanggal</th>                         
			<th>Tahun Ajaran</th>
			<th>Aksi</th>                 
		</tr>
	</tfoot>
	<tbody>
		<?php
		include 'koneksi.php';

		$tanggal = date('Y/m/d', strtotime('09/07/2018'));
		$tanggal2 = date('Y/m/d', strtotime('12/31/2018'));
		echo $tanggal; echo "<br>";
		echo $tanggal2;

		$query=mysqli_query($koneksi, "SELECT * FROM absensi join siswa on absensi.no_induk=siswa.no_induk where tanggal between '$tanggal' and  '$tanggal2' ");
		while($data = mysqli_fetch_array($query)){
			?>
			<tr>

				<td><?php echo"$data[NAMA_SISWA]";?></td>                          
				<td><?php echo"$data[SUBUH]";?></td>
				<td><?php echo"$data[MAGHRIB]";?></td>
				<td><?php echo"$data[ISYAK]";?></td>
				<td><?php echo"$data[TANGGAL]";?></td>                          
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