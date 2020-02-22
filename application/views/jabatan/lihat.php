<?php 
  $send['title'] = $title;
  $this->load->view('_include/head', $send); 
?>
    	<article>	
	    	<table class="centered striped">
				<thead>
					<tr>
						<th> Kode Jabatan </th>
						<th> Jabatan </th>
						<th> Action </th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($data as $d) { ?>
					<tr>
						<td> <?php echo $d->kd_jabatan; ?></td>
						<td> <?php echo $d->jabatan; ?></td>

						<td> <a href="<?php echo site_url('jabatan/edit/').$d->kd_jabatan; ?>"> Edit </a> | <a href="<?php echo site_url('jabatan/delete/').$d->kd_jabatan; ?>"> Hapus </a> </td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
    	</article>

    	<!-- Tambah Button -->
    	<div class="fixed-action-btn">
			<a class="btn-floating btn-large waves-effect waves-light btn modal-trigger" href="<?php echo site_url('jabatan/tambah'); ?>">
		    	<i class="large material-icons"> add </i>
			</a>
		</div>
<?php $this->load->view('_include/footer'); ?>