 <div class="col-xs-12">
 	<form method="post" action="<?php echo base_url()?>admin/addAktorAksi" enctype="multipart/form-data">
 		<div class="box box-danger">
	        <div class="box-header">
	              <h3 class="box-title">Input Film</h3>
	            </div>
	            <div class="box-body">
	            	<div class="form-group">
		                <label for="exampleInputnama">Nama</label>
	                  	<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="nama">
		               
		           		
	             	 </div>
	             	 <div class="form-group">
		                <label>Jenis Kelamin</label>
		                <select class="form-control" style="width: 100%;" name="jk">
        					<option>Pria</option>
        					<option>Wanita</option>
      					</select>
	                  	     		
	             	</div>
	             	
	              <!-- Date dd/mm/yyyy -->
	              <div class="form-group">
	                <label>Tanggal lahir:</label>

	                <div class="input-group">
	                  <div class="input-group-addon">
	                    <i class="fa fa-calendar"></i>
	                  </div>
	                  <input type="text" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask name="tanggal">
	                </div>
	                <!-- /.input group -->
	              </div>
	              <div class="form-group">
		                <label for="exampleInputnama">Umur</label>
	                  	<input type="number" class="form-control" id="exampleInputEmail1" placeholder="Umur" name="umur">
		               
		           		
	             	 </div>
	               <div class="form-group">
		                <label for="exampleInputnama">Biografi</label>
                  		<textarea class="form-control" rows="3" placeholder="Enter ..." name="biografi"></textarea>
	                  	     		
	             	</div>
	             
	             	<div class="form-group">
              		  	<label>Riwayatan Film</label>
		                <select class="form-control select2" style="width: 100%;" name="riwayat">
		           
		                	<?php
		                		foreach ($film as $row) {
		                			echo '
		                					<option value="'.$row['id_film'].'">'.$row['namaFilm'].'</option>

		                			';
		                		}
		                	?>
		                 
		                </select>
		            </div>
				       
		            
		            
	             	 <div class="form-group">
		                  <label for="exampleInputFile">foto</label>
		                  <input type="file" id="exampleInputFile" name="foto">
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
