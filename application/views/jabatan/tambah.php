<?php 
  $send['title'] = $title;
  $this->load->view('_include/head', $send); 
?>
		<article class="row">
			<form method="POST" action="<?php echo site_url('jabatan/tambah_action'); ?>" class="col s12">
				<div class="row">
        			<div class="input-field col s12">
          				<input id="nama" name="nama" type="text" class="validate" required="">
          				<label for="nama"> Jabatan </label>
        			</div>
        		</div>
        		<div class="row">
        			<div class="input-field col s12">
        				<button class="btn waves-effect waves-light right" type="submit" name="submit" style="margin: 0 6px;"> Simpan </button>
        				<button class="btn waves-effect waves-light right" type="reset" name="reset" style="margin: 0 6px;"> Reset </button>
        				<a class="waves-effect waves-light btn left" href="<?php echo site_url('jabatan'); ?>"> Lihat Data </a>
        			</div>
        		</div>
			</form>
		</article>
  <?php $this->load->view('_include/footer'); ?>