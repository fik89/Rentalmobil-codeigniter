<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Transaksi</h1>
		</div>
		<div class="table-responsive">
		<table class="table table-responsive table-bordered table-striped">
			<tr>
				<th>No</th>
				<th>Customer</th>
				<th>Mobil</th>
				<th>Tanggal Rental</th>
				<th>Tanggal Kembali</th>
				<th>Harga sewa /hari</th>
				<th>Denda sewa /hari</th>
				<th>Total Denda</th>
				<th>tanggal dikembalikan</th>
				<th>status pengembalian</th>
				<th>status rental</th>
				<th>cek pembayaran</th>
				<th>action</th>
			</tr>
			<?php $no=1;foreach ($transaksi as $tr) : ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $tr->nama ?></td>
				<td><?php echo $tr->merk ?></td>
				<td><?php echo date('d/m/Y',strtotime($tr->tanggal_rental)); ?></td>
				<td><?php echo date('d/m/Y',strtotime($tr->tanggal_kembali)); ?></td>
				<td>Rp.<?php echo number_format($tr->harga,0,',','.') ?></td>
				<td>Rp.<?php echo number_format($tr->denda,0,',','.') ?></td>
				<td>Rp.<?php echo number_format($tr->total_denda,0,',','.') ?></td>
				
				
				<td>
					<?php 
						if($tr->tanggal_pengembalian== "0000-00-00"){
							echo "-";
						}else{
							echo date('d/m/Y',strtotime($tr->tanggal_pengembalian));
						}
					 ?>
				</td>

				<td>
					<?php 
						if($tr->status_pengembalian == "Selesai"){
							echo "sudah dikembalikan";
						}else{
							echo " belum dikembalikan";
						}
					 ?>
				</td>
				<td>
					<?php 
						if($tr->status_rental == "Selesai"){
							echo "sudah selesai";
						}else{
							echo " belum selesei";
						}
					 ?>
				</td>
				<td>
					<center>
						<a href="<?php echo base_url('admin/transaksi/pembayaran/'.$tr->id_rental) ?>" class="btn btn-sm btn-success"><i class="fas fa-check-circle"></i></a>
					</center>
				</td>
				<td>
					<?php 
						if($tr->status == "1"){
							echo"-";
						}else{ ?>
							<div class="row">
								<a class="btn btn-sm btn-success mr-2" href="<?php echo base_url('admin/transaksi/transaksi_selesai/'.$tr->id_rental) ?>"><i class='fas fa-check'></i></a>
								<a class="btn btn-sm btn-danger" href="<?php echo base_url('admin/transaksi/transaksi_batal/'.$tr->id_rental) ?>"><i class='fas fa-times'></i></a>
							</div>
						<?php } ?>
				</td>			
			</tr>
		<?php endforeach; ?>
		</table>
		</div>
	</section>
</div>