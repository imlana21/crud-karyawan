<?php 
  $send['title'] = $title;
  $this->load->view('_include/head', $send); 
?>
    	<article>	
	    	<table class="centered striped">
				<thead>
					<tr>
						<th> ID Karyawan </th>
						<th> Nama </th>
						<th> Gender </th>
						<th> No. HP </th>
						<th> Jabatan </th>
						<th> Alamat </th>
						<th> Action </th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($data as $d) { ?>
					<tr>
						<td> <?php echo $d->id_karyawan; ?></td>
						<td> <?php echo $d->nama; ?></td>
						<td> 
							<?php if ($d->gender == 'L') {
								echo "Laki-Laki";
							} else {
								echo "Perempuan";
							} ?>
						</td>
						<td> <?php echo $d->no_hp; ?></td>
						<td> <?php echo $d->jabatan; ?></td>
						<td> <?php echo $d->alamat; ?></td>

						<td> <a href="<?php echo site_url('karyawan/edit/').$d->id_karyawan; ?>"> Edit </a> | <a href="<?php echo site_url('karyawan/delete/').$d->id_karyawan; ?>"> Hapus </a> </td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
    	</article>

    	<!-- Tambah Button -->
    	<div class="fixed-action-btn">
			<a class="btn-floating btn-large waves-effect waves-light btn modal-trigger" href="<?php echo site_url('karyawan/tambah'); ?>">
		    	<i class="large material-icons"> add </i>
			</a>
		</div>
<?php $this->load->view('_include/footer'); ?>