<div class="main-content">
    <section class="section">
          <div class="section-header">
            <h1>Laporan transaksi</h1>
          </div>
     </section>
     <form method="post" action="<?php echo base_url('admin/laporan') ?>">
     	<div class="form-group">
     		<label>Dari Tanggal</label>
     		<input type="date" name="dari" class="form-control">
     		<?php echo form_error('dari','<div class="text-small text-danger">','</div>') ?>
     	</div>

     	<div class="form-group">
     		<label>Sampai Tanggal</label>
     		<input type="date" name="sampai" class="form-control">
     		<?php echo form_error('sampai','<div class="text-small text-danger">','</div>') ?>
     	</div>
     	<button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i>Tampilkan laporan</button>
     </form>

     <div class="table-responsive mt-3">
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
            </tr>
            <?php $no=1;foreach ($laporan as $tr) : ?>
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
                
            </tr>
        <?php endforeach; ?>
        </table>
        </div>
 </div>