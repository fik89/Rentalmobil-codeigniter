<div class="container mt-5 mb-4">
	<div class="row">
		<div class="col-md-8">
			<div class="card" style="margin-top: 150px">
				<div class="card-header alert alert-success">
					invoice Pembayaran
				</div>
				<div class="card-body">
					<table class="table ">
						<?php foreach($transaksi as $tr) :?>
						<tr>
							<th>Merk Mobil</th>
							<td>:</td>
							<td><?php echo $tr->merk ?></td>
						</tr>
						<tr>
							<th>Tanggal Rental</th>
							<td>:</td>
							<td><?php echo $tr->tanggal_rental ?></td>
						</tr>
						<tr>
							<th>tanggal kembali</th>
							<td>:</td>
							<td><?php echo $tr->tanggal_kembali ?></td>
						</tr>
						<tr>
							<th>Biaya sewa /hari</th>
							<td>:</td>
							<td>Rp.<?php echo number_format($tr->harga,0,',','.') ?></td>
						</tr>
						<tr>
							<?php 
								$y = strtotime($tr->tanggal_rental);
								$x = strtotime($tr->tanggal_kembali);
								$jmlHari = abs(($x - $y)/(60*60*24));
							 ?>
							<th>Jumlah hari</th>
							<td>:</td>
							<td><?php echo  $jmlHari ?> Hari</td>
						</tr>
						<tr>
							<th>Total Bayar</th>
							<td>:</td>
							<td><button class="btn btn-sm btn-success">Rp.<?php echo number_format($tr->harga * $jmlHari,0,',','.') ?></button></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td>
								<a href="<?php echo base_url('customer/transaksi/cetak_invoice/'.$tr->id_rental) ?>" class="btn btn-sm btn-secondary">Print</a>
							</td>
						</tr>
						<?php endforeach; ?>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card" style="margin-top: 150px">
				<div class="card-header alert alert-danger"  >
					Informasi 
				</div>
				<div class="card-body">
					<p class="text-primary">Pembayaran Bisa lewat Rekening yang ada dibawah atau langsung datang ke tempat kami...</p>
					<br>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">Bank BNI  12345678</li>
						<li class="list-group-item">Bank BRI  12345678</li>
						<li class="list-group-item">DANA      12345678</li>
					</ul>
					<!--<?php if(empty($tr->bukti_pembayaran)) { ?>
						<button style="width: 100%" type="button" class="btn btn-sm btn-danger mt-3" data-toggle="modal" data-target="#exampleModal"> Upload Bukti Pembayaran</button>
					<?php }elseif ($tr->status_pembayaran == '0') { ?>
						<button style="width: 100%" class="btn btn-sm btn-warning mt-3"><i class="fa fa-clock-o"></i>Tunggu konfirmasi</button>
					<?php }elseif ($tr->status_pembayaran == '1'){ ?>
						<button style="width: 100%" class="btn btn-sm btn-success mt-3"><i class="fa fa-check"></i> Pembayaran Sudah dikonfirmasi</button>
					<?php } ?>-->
				</div>
			</div>
		</div>		
	</div>
</div>

<!--modal upload pembayaran-->		
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<form method="post" action="<?php echo base_url('customer/transaksi/pembayaran_aksi') ?>" enctype="multipart/form-data">
									<div class="modal-body">
										<div class="form-grup">
											<label>Upload Bukti !!</label>
											<input type="hidden" name="id_rental" class= "form-control" value="<?php echo $tr->id_rental ?>" >
											<input type="file" name="bukti_pembayaran" class="form-control">
										</div>
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-sm btn-success">Submit</button>
									</div>
									</form>
								</div>
							</div>
						</div>