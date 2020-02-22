<?php 
  $send['title'] = $title;
  $this->load->view('_include/head', $send); 
?>
    	<article>	
	    	<table class="centered striped">
				<thead>
					<tr>
						<th> ID </th>
						<th> Nama </th>
						<th> Hari, Tanggal </th>
						<th> Jam Datang </th>
						<th> Jam Pulang </th>
						<th> Lama Kerja </th>
						<th> Action </th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($data as $d) { ?>
					<tr>
						<td> <?php echo $d->id_kehadiran; ?></td>
						<td> <?php echo $d->nama; ?></td>
						<td><?php 
							switch ($d->hari) {
								case 0:
									$day = "Senin";
									break;
								case 1:
									$day = "Selasa";
									break;
								case 2:
									$day = "Rabu";
									break;
								case 3:
									$day = "Kamis";
									break;
								case 4:
									$day = "Jum'at";
									break;
								case 5:
									$day = "Sabtu";
									break;
								case 7:
									$day = "Minggu";
									break;
							}
							echo $day.', '.$d->tanggal;
						?></td>
						<td> <?php echo $d->jam_datang; ?></td>
						<td> <?php echo $d->jam_pulang; ?></td>
						<td> <?php echo $d->lama_kerja; ?></td>
						<td> 
							<?php 
								if ($d->jam_pulang == null ) {
									$url = site_url('kehadiran/edit/').$d->id_kehadiran;
									echo '<a href="'.$url.'"> Update </a> | ';
								}
							 ?>
							 <a href="<?php echo site_url('kehadiran/delete/').$d->id_kehadiran; ?>"> Hapus </a> 
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
    	</article>

    	<!-- Tambah Button -->
    	<div class="fixed-action-btn">
			<a class="btn-floating btn-large waves-effect waves-light btn modal-trigger" href="<?php echo site_url('kehadiran/tambah'); ?>">
		    	<i class="large material-icons"> add </i>
			</a>
		</div>
<?php $this->load->view('_include/footer'); ?>