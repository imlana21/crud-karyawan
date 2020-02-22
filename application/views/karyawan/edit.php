<?php 
  $send['title'] = $title;
  $this->load->view('_include/head', $send); 
?>
		<article class="row">
			<form method="POST" action="<?php echo site_url('karyawan/edit_action'); ?>" class="col s12">
                <?php foreach ($data as $d) { ?>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="id" name="id" type="text" class="validate" required="" readonly="" value="<?php echo $d->id_karyawan; ?>">
                        <label for="id"> ID Karyawan </label>
                    </div>
                </div>
                <div class="row">
        			<div class="input-field col s12">
          				<input id="nama" name="nama" type="text" class="validate" required="" value="<?php echo $d->nama; ?>">
          				<label for="nama"> Nama </label>
        			</div>
                </div>
				<div class="row">
        			<div class="input-field col s12">
          				<input id="hp" type="number" name="hp" class="validate" required="" value="<?php echo $d->no_hp; ?>">
          				<label for="hp"> No. HP </label>
        			</div>
        		</div>
				<div class="row">
					  <div class="input-field col s12">
    					<select id="gender" name="gender" required="" readonly="">
      						<option value="" disabled selected> Pilih </option>
                            <?php if ($d->gender==='L') { ?>
                                <option value="L" selected=""> Laki Laki </option>    
                                <option value="P"> Perempuan </option>
                            <?php } else { ?>
                                <option value="L" selected=""> Laki Laki </option>
      						    <option value="P" selected=""> Perempuan </option>
                            <?php } ?>
    					</select>
    					<label for="gender"> Jenis Kelamin </label>
  					</div>
        		</div>
				<div class="row">
        			<div class="input-field col s12">
          				<textarea id="alamat" name="alamat" class="materialize-textarea" required=""> <?php echo $d->alamat; ?> </textarea>
          				<label for="alamat"> Alamat </label>
        			</div>
      			</div>
				<div class="row">
					  <div class="input-field col s12">
    					<select id="jabatan" name="jabatan">
      						<option value="" disabled selected> Pilih </option>
      						<?php foreach ($jabatan as $j) { ?>
      							<option value="<?php echo $j->kd_jabatan;?>" 
                                    <?php if ($j->kd_jabatan == $d->kd_jabatan) { echo 'selected=""'; }?>> <?php echo $j->jabatan; ?> 
                                </option>
      						<?php } ?>
    					</select>
    					<label for="jabatan"> Jabatan </label>
  					</div>
        		</div>
        		<div class="row">
        			<div class="input-field col s12">
        				<button class="btn waves-effect waves-light right" type="submit" name="submit" style="margin: 0 6px;"> Simpan </button>
        				<button class="btn waves-effect waves-light right" type="reset" name="reset" style="margin: 0 6px;"> Reset </button>
        				<a class="waves-effect waves-light btn left" href="<?php echo site_url('karyawan'); ?>"> Lihat Data </a>
        			</div>
        		</div>
                <?php } ?>
			</form>
		</article>
<?php $this->load->view('_include/footer'); ?>