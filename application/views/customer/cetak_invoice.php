<table style="width: 60%">
	<h3>Bukti Pembayaran</h3>
	<?php foreach($transaksi as $tr) :?>
	<tr>
		<td>Nama Customer</td>
		<td>:</td>
		<td><?php echo $tr->nama ?></td>
	</tr>
	<tr>
		<td>Merk Mobil</td>
		<td>:</td>
		<td><?php echo $tr->merk ?></td>
	</tr>
	<tr>
		<td>Tanggal Rental</td>
		<td>:</td>
		<td><?php echo $tr->tanggal_rental ?></td>
	</tr>
	<tr>
		<td>tanggal kembali</td>
		<td>:</td>
		<td><?php echo $tr->tanggal_kembali ?></td>
	</tr>
	<tr>
		<td>Biaya sewa /hari</td>
		<td>:</td>
		<td>Rp.<?php echo number_format($tr->harga,0,',','.') ?></td>
	</tr>
	<tr>
		<?php 
			$y = strtotime($tr->tanggal_rental);
			$x = strtotime($tr->tanggal_kembali);
			$jmlHari = abs(($x - $y)/(60*60*24));
		 ?>
		<td>Jumlah hari</td>
		<td>:</td>
		<td><?php echo  $jmlHari ?> Hari</td>
	</tr>
	<tr>
		<td>Status Pembayaran</td>
		<td>:</td>
		<td><?php if($tr->status_pembayaran == '0'){echo "belum lunas";}else{echo "lunas";} ?></td>
	</tr>
	
	<tr style="font-weight: bold; color: red">
		<td>Total Bayar</td>
		<td>:</td>
		<td>Rp.<?php echo number_format($tr->harga * $jmlHari,0,',','.') ?></td>
	</tr>
	
	<?php endforeach; ?>
</table>

<script type="text/javascript">
	window.print();
</script>