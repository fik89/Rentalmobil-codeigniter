 <div class="main-content">
    <section class="section">
          <div class="section-header">
            <h1>Form Update Mobil</h1>
          </div>

          <div class="card">
          	<div class="card-body">
                    <?php foreach($mobil as $mb) : ?>


          		<form method="post" action="<?php echo base_url('admin/data_mobil/update_mobil_aksi') ?>" enctype="multipart/form-data">
          		<div class="row">
          			<div class="col-md-6">

          				<div class="form-group">
          					<label>Type Mobil</label>
                                   <input type="hidden" name="id_mobil" value="<?php echo $mb->id_mobil ?>">
          					<select name="kode_type" class="form-control">
          						<option value="<?php echo $mb->kode_type ?>"><?php echo $mb->nama_type ?></option>
          						<?php foreach ($type as $tp) : ?>
          							<option value="<?php echo $tp->kode_type ?>"><?php echo $tp->nama_type ?></option>
          						<?php endforeach; ?>
          					</select>
          					<?php echo form_error('kode_type','<div class="text-small text-danger">','</div>') ?>
          				</div>

          				<div class="form-grup">
          					<label>Merk</label>
          					<input type="text" name="merk" class="form-control" value="<?php echo $mb->merk ?>">
          					<?php echo form_error('merk','<div class="text-small text-danger">','</div>') ?>
          				</div>

          				<div class="form-grup">
          					<label>Plat Nomor</label>
          					<input type="text" name="no_plat" class="form-control" value="<?php echo $mb->no_plat ?>">
          					<?php echo form_error('no_plat','<div class="text-small text-danger">','</div>') ?>
          				</div>

          				<div class="form-grup">
          					<label>Warna</label>
          					<input type="text" name="warna" class="form-control" value="<?php echo $mb->warna ?>">
          					<?php echo form_error('warna','<div class="text-small text-danger">','</div>') ?>
          				</div>

                              <div class="form-grup">
                                   <label>Supir</label>
                                   <select name="supir" class="form-control">
                                        <option <?php if($mb->supir == "1"){echo "selected='selected'";}echo $mb->supir; ?> value="1">Tersedia
                                        </option>
                                        <option <?php if($mb->supir == "0"){echo "selected='selected'";}echo $mb->supir; ?> value="0">Tidak Tersedia
                                        </option>
                                   </select>
                                   <?php echo form_error('supir','<div class="text-small text-danger">','</div>') ?>
                              </div>
          			</div>

          			<div class="col-md-6">
          				<div class="form-grup">
          					<label>Tahun</label>
          					<input type="text" name="tahun" class="form-control" value="<?php echo $mb->tahun ?>">
          					<?php echo form_error('tahun','<div class="text-small text-danger">','</div>') ?>
          				</div>

                              <div class="form-grup">
                                   <label>Harga Sewa</label>
                                   <input type="text" name="harga" class="form-control" value="<?php echo $mb->harga ?>">
                                   <?php echo form_error('harga','<div class="text-small text-danger">','</div>') ?>
                              </div>

                              <div class="form-grup">
                                   <label>Denda</label>
                                   <input type="text" name="denda" class="form-control" value="<?php echo $mb->denda ?>">
                                   <?php echo form_error('denda','<div class="text-small text-danger">','</div>') ?>
                              </div>

          				<div class="form-grup">
          					<label>Status</label>
          					<select name="status" class="form-control">
          						<option <?php if($mb->status == "1"){echo "selected='selected'";}echo $mb->status; ?> value="1">Tersedia
                                        </option>
                                        <option <?php if($mb->status == "0"){echo "selected='selected'";}echo $mb->status; ?> value="0">Tidak Tersedia
                                        </option>
          					</select>
          					<?php echo form_error('status','<div class="text-small text-danger">','</div>') ?>
          				</div>


          				<button type="submit" class="btn btn-primary mt-4">Simpan</button>
          				<button type="reset" class="btn btn-danger mt-4">Reset</button>
          			</div>
          		</div>
          		</form>
                      <?php endforeach; ?>
          	</div>
          </div>
     </section>
</div>