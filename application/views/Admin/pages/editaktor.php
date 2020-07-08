 <div class="col-xs-12">
 	<form method="post" action="<?php echo base_url()?>edit/aksiaktor" enctype="multipart/form-data">

 		<input type="hidden" name="id_aktor" value="<?php echo $detailaktor[0]['id_aktor'] ?>">
 		<input type="hidden" name="fotolama" value="<?php echo $detailaktor[0]['foto'] ?>">

 		<div class="box box-danger">
	        <div class="box-header">
	              <h3 class="box-title">Edit Aktor</h3>
	            </div>
	            <div class="box-body">
	            	<div class="form-group">
		                <label for="exampleInputnama">Nama</label>
	                  	<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="nama" value="<?php echo $detailaktor[0]['nama'] ?>">
		               
		           		
	             	 </div>
	             	 <div class="form-group">
		                <label>Jenis Kelamin</label>
		                <select class="form-control" style="width: 100%;" name="jenis_kl">
        					<option value="Pria" <?php if($detailaktor[0]['jenis_kl'] == 'Pria') echo 'selected="selected"' ?> >Pria</option>
        					<option value="Wanita" <?php if($detailaktor[0]['jenis_kl'] == 'Wanita') echo 'selected="selected"' ?> >Wanita</option>
      					</select>
	                  	     		
	             	</div>
	             	
	              <!-- Date dd/mm/yyyy -->
	              <div class="form-group">
	                <label>Tanggal lahir:</label>

	                <div class="input-group">
	                  <div class="input-group-addon">
	                    <i class="fa fa-calendar"></i>
	                  </div>
	                  <input type="text" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask name="tanggal" value="<?php echo $detailaktor[0]['tgl_lahir'] ?>">
	                </div>
	                <!-- /.input group -->
	              </div>
	              <div class="form-group">
		                <label for="exampleInputnama">Umur</label>
	                  	<input type="number" class="form-control" id="exampleInputEmail1" placeholder="Umur" name="umur" value="<?php echo $detailaktor[0]['umur'] ?>">
		               
		           		
	             	 </div>
	               <div class="form-group">
		                <label for="exampleInputnama">Biografi</label>
                  		<textarea class="form-control" rows="3" placeholder="Enter ..." name="biografu"><?php echo $detailaktor[0]['biografu'] ?></textarea>
	                  	     		
	             	</div>
	             
	             	<div class="form-group">
              		  	<label>Riwayatan Film</label>
		                <select class="form-control select2" style="width: 100%;" name="riwayat">
		           
		                	<?php
		                		foreach ($film as $row) {
		                			?>
		                			
		                				<option value="<?php echo $row['id_film']?>" <?php if($row['id_film'] == $detailaktor[0]['id_film']) echo 'selected="selected"'?> ><?php echo $row['namaFilm']?></option>

		                		<?php
		                		}

		                	?>
		                 
		                </select>
		            </div>
				       
		            
		            
	             	 <div class="form-group">
		                  <label for="exampleInputFile">foto</label>
		                  <input type="file" id="exampleInputFile" name="foto" value="<?php echo base_url().'foto/'.$detailaktor[0]['foto'] ?>">
                	</div>
                	
                	 <div class="box-tools pull-right">
		                 <button type="submit" class="btn btn-block btn-success">
		                   <i class="glyphicon glyphicon-floppy-disk"></i> Simpan
		                 </button>
		             </div>
	             	
		        

                	
						
                       
	             	
	             	

	        </div>
	            <!-- /.box-body -->
	    </div>
 		

 	</form>
 	 
</div>
