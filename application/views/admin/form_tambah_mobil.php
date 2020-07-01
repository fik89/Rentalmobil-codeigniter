 <div class="main-content">
    <section class="section">
          <div class="section-header">
            <h1>Form Input Mobil</h1>
          </div>

          <div class="card">
          	<div class="card-body">

          		<form method="post" action="<?php echo base_url('admin/data_mobil/tambah_mobil_aksi') ?>" enctype="multipart/form-data">
          		<div class="row">
          			<div class="col-md-6">
          				
          				<div class="form-grup">
          					<label>Merk</label>
          					<input type="text" name="merk" class="form-control">
          					<?php echo form_error('merk','<div class="text-small text-danger">','</div>') ?>
          				</div>

          				<div class="form-grup">
          					<label>Plat Nomor</label>
          					<input type="text" name="no_plat" class="form-control">
          					<?php echo form_error('no_plat','<div class="text-small text-danger">','</div>') ?>
          				</div>

          				<div class="form-grup">
          					<label>Warna</label>
          					<input type="text" name="warna" class="form-control">
          					<?php echo form_error('warna','<div class="text-small text-danger">','</div>') ?>
          				</div>

                              <div class="form-grup">
                                   <label>Sopir</label>
                                   <select name="supir" class="form-control">
                                        <option value="1">Tersedia</option>
                                        <option value="0">Tidak Tersedia</option>
                                   </select>
                                   <?php echo form_error('supir','<div class="text-small text-danger">','</div>') ?>
                              </div>
                              <div class="form-group">
                                   <label>Type Mobil</label>
                                   <select name="kode_type" class="form-control">
                                        <option value="">--Pilih Type Mobil--</option>
                                        <?php foreach ($type as $tp) : ?>
                                             <option value="<?php echo $tp->kode_type ?>"><?php echo $tp->nama_type ?></option>
                                        <?php endforeach; ?>
                                   </select>
                                   <?php echo form_error('kode_type','<div class="text-small text-danger">','</div>') ?>
                              </div>

          			</div>

          			<div class="col-md-6">
                              <div class="form-grup">
                                   <label>Harga Sewa</label>
                                   <input type="number" name="harga" class="form-control">
                                   <?php echo form_error('harga','<div class="text-small text-danger">','</div>') ?>
                              </div>
                              <div class="form-grup">
                                   <label>Denda</label>
                                   <input type="number" name="denda" class="form-control">
                                   <?php echo form_error('denda','<div class="text-small text-danger">','</div>') ?>
                              </div>
          				<div class="form-grup">
          					<label>Tahun</label>
          					<input type="text" name="tahun" class="form-control">
          					<?php echo form_error('tahun','<div class="text-small text-danger">','</div>') ?>
          				</div>

          				<div class="form-grup">
          					<label>Status</label>
          					<select name="status" class="form-control">
          						<option value="">--Pilih Status--</option>
          						<option value="1">Tersedia</option>
          						<option value="0">Tidak Tersedia</option>
          					</select>
          					<?php echo form_error('status','<div class="text-small text-danger">','</div>') ?>
          				</div>

          				<div class="form-grup">
          					<label>Gambar</label>
          					<input type="file" name="gambar" class="form-control">
          					<?php echo form_error('gambar','<div class="text-small text-danger">','</div>') ?>
          				</div>
                              

          				<button type="submit" class="btn btn-primary mt-4">Simpan</button>
          				<button type="reset" class="btn btn-danger mt-4">Reset</button>
          			</div>
          		</div>
          		</form>
          	</div>
          </div>
     </section>
</div>