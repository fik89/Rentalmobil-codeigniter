<div class="main-content">
	<div class="section">
		<div class="section-header">
			<h1>Data Type Mobil</h1>
		</div>
	</div>
	<a class="btn btn-primary mb-3"href="<?php echo base_url('admin/data_type/tambah_type') ?>">Tambah Type</a>
	<?php echo $this->session->flashdata('pesan') ?>
	<table class="table table-bordered table-striped table-hover">
		<thead>
			<tr>
				<th width="20px">No</th>
				<th>kode type</th>
				<th>nama type</th>
				<th width="180px">action</th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1;foreach($type as $tp)  :?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $tp->kode_type ?></td>
					<td><?php echo $tp->nama_type ?></td>
					<td>
          				<a href="<?php echo base_url('admin/data_type/delete_type/').$tp->id_type ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
          				<a href="<?php echo base_url('admin/data_type/update_type/').$tp->id_type ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
          			</td>
				</tr>
			<?php endforeach; ?>
		</tbody>

	</table>
</div>