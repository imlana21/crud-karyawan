<?php 
  $send['title'] = $title;
  $this->load->view('_include/head', $send); 
?>
		<article class="row">
			<form method="POST" action="<?php echo site_url('kehadiran/tambah_action'); ?>" class="col s12">
                <div class="row">
                      <div class="input-field col s12">
                        <select id="nama" name="nama" required="">
                            <option value="" disabled selected> Pilih </option>
                            <?php foreach ($karyawan as $k) { ?>
                                <option value="<?php echo $k->id_karyawan; ?>"> <?php echo $k->id_karyawan.' - '.$k->nama; ?> </option>
                            <?php } ?>
                        </select>
                        <label for="jabatan"> Nama Karyawan </label>
                    </div>
                </div>
                <div class="row">
        			<div class="input-field col s12">
        				<button class="btn waves-effect waves-light right" type="submit" name="submit" style="margin: 0 6px;"> Simpan </button>
        				<button class="btn waves-effect waves-light right" type="reset" name="reset" style="margin: 0 6px;"> Reset </button>
        				<a class="waves-effect waves-light btn left" href="<?php echo site_url('kehadiran'); ?>"> Lihat Data </a>
        			</div>
        		</div>
			</form>
		</article>
  <?php $this->load->view('_include/footer'); ?>