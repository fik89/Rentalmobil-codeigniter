<div class="container mt-5 mb-5">
	<div class="card" style="margin-top: 200px">
		<div class="card-body">
			 <?php foreach($detail as $dt) :?>
			 	<div class="row">
			 		<div class="col-md-6">
			 			<img style="width: 90%"src="<?php echo base_url('assets/upload/').$dt->gambar ?>">
			 		</div>
			 		<div class="col-md-6">
			 			<table class="table">
                                   <tr>
                                        <td>Tipe Mobil</td>
                                        <td>
                                        <?php if($dt->kode_type == "SDN"){
                                             echo "Sedan";
                                        }elseif ($dt->kode_type == "HTB") {
                                             echo "Hatchback";
                                        }elseif($dt->kode_type == "MPV"){
                                             echo "Multi Purpose Vechile";
                                        }else{
                                             echo "<span class='text-danger'>Type mobil belum terdaftar</span>";
                                        }
                                         ?>
                                        </td>
                                   </tr>
                                   <tr>
                                     <td>Merk</td>
                                     <td> <?php echo $dt->merk ?> </td>
                                   </tr>
                                   <tr>
                                     <td>Plat Nomor</td>
                                     <td> <?php echo $dt->no_plat ?> </td>
                                   </tr>
                                   <tr>
                                     <td>Warna</td>
                                     <td> <?php echo $dt->warna ?> </td>
                                   </tr>
                                   <tr>
                                     <td>Tahun</td>
                                     <td> <?php echo $dt->tahun ?> </td>
                                   </tr>
                                   <tr>
                                     <td>Status</td>
                                     <td>
                                       <?php 
                                          if($dt->status=="0"){
                                            echo "<span class='badge badge-danger'>Tidak Tersedia/Sedang Dirental</span>";
                                          }else{
                                            echo "<span class='badge badge-primary'>Tersedia</span>";
                                          }
                                        ?>
                                     </td>
                                    
                                   </tr>
                                   <tr>
                                   	 <td></td>
                                     <td>
                                     	<?php 
						                  if($dt->status == "0"){
						                    echo "<span class='btn btn-danger btn-sm' disable>Sedang Di-sewa</span>";
						                  }else{
						                    echo anchor('customer/rental/tambah_rental'.$dt->id_mobil,'<button class="btn btn-success btn-sm">Rental</button>');
						                  }

						                 ?>
                                     </td>
                                   </tr>
                              </table>
			 		</div>
			 	</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>