<div class="main-content">
	<div class="section">
		<div class="section-header">
			<h1>Tambah Type Mobil</h1>
		</div>
	</div>

	<form method="post" action="<?php echo base_url('admin/data_type/tambah_type_aksi') ?>">
		<div class="form-grup">
          	<label>Kode Type</label>
          	<input type="text" name="kode_type" class="form-control">
          	<?php echo form_error('kode_type','<div class="text-small text-danger">','</div>') ?>
        </div>
        <div class="form-grup">
          	<label>Nama Type</label>
          	<input type="text" name="nama_type" class="form-control">
          	<?php echo form_error('nama_type','<div class="text-small text-danger">','</div>') ?>
        </div>
        <button class="btn btn-primary mt-4"type="submit">Simpan</button>
        <button class="btn btn-danger mt-4"type="reset">Reset</button>
	</form>
	
	
</div>