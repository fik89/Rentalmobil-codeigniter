<div class="main-content">
    <section class="section">
          <div class="section-header">
            <h1>Data Customer</h1>
          </div>
    </section>
    <form method="post" action="<?php echo base_url('admin/data_customer/tambah_customer_aksi') ?>">
        <div class="row">
            <div class="col-md-6">
            	<div class="form-group">
            		<label>Nama</label>
            		<input type="text" name="nama" class="form-control">
            		<?php echo form_error('nama','<div class="text-small text-danger">','</div>') ?>
            	</div>
            	<div class="form-group">
            		<label>Username</label>
            		<input type="text" name="username" class="form-control">
            		<?php echo form_error('username','<div class="text-small text-danger">','</div>') ?>
            	</div>
            	<div class="form-group">
            		<label>Alamat</label>
            		<input type="text" name="alamat" class="form-control">
            		<?php echo form_error('alamat','<div class="text-small text-danger">','</div>') ?>
            	</div>
            	<div class="form-group">
            		<label>Gender</label>
            		<select class="form-control" name="gender">
            			<option value="">--Pilih Gender--</option>
            			<option value="laki-laki">Laki-laki</option>
            			<option value="perempuan">Perempuan</option>
            		</select>
            		<?php echo form_error('nama','<div class="text-small text-danger">','</div>') ?>
            	</div>
            </div>
            <div class="col-md-6">
            	<div class="form-group">
            		<label>Nomor Telepon</label>
            		<input type="text" name="no_telp" class="form-control">
            		<?php echo form_error('no_telp','<div class="text-small text-danger">','</div>') ?>
            	</div>
            	<div class="form-group">
            		<label>Nomor KTP</label>
            		<input type="text" name="no_ktp" class="form-control">
            		<?php echo form_error('no_ktp','<div class="text-small text-danger">','</div>') ?>
            	</div>
            	<div class="form-group">
            		<label>Password</label>
            		<input type="password" name="password" class="form-control">
            		<?php echo form_error('password','<div class="text-small text-danger">','</div>') ?>
            	</div>
            	<button type="submit"  class="btn btn-sm btn-primary mt-4">SUBMIT</button>
            	<button type="reset"  class="btn btn-sm btn-danger mt-4">RESET</button>
            </div>
    	</div>
    </form>
</div>
