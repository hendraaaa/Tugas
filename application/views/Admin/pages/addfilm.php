 <div class="col-xs-12">
 	<form method="post" action="<?php echo base_url()?>admin/addAksi" enctype="multipart/form-data">
 		<div class="box box-danger">
	        <div class="box-header">
	              <h3 class="box-title">Input Film</h3>
	            </div>
	            <div class="box-body">
	            	<div class="form-group">
		                <label for="exampleInputnama">Nama Film</label>
	                  	<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="nama">
		               
		           		
	             	 </div>
	             	 <div class="form-group">
		                <label for="exampleInputnama">Rating</label>
	                  	<input type="number" class="form-control" id="exampleInputEmail1" placeholder="Rating" name="rating">		               	
	             	 </div>
	             	 <div class="form-group">
		                <label for="exampleInputnama">Genre</label>
	                  	<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Genre" name="genre">	           		
	             	 </div>
	             	 <div class="form-group">
		                <label for="exampleInputnama">Durasi</label>
	                  	<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Durasi" name="durasi">	           		
	             	 </div>
	              <!-- Date dd/mm/yyyy -->
	              <div class="form-group">
	                <label>Tanggal Rilis:</label>

	                <div class="input-group">
	                  <div class="input-group-addon">
	                    <i class="fa fa-calendar"></i>
	                  </div>
	                  <input type="text" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask name="tanggal">
	                </div>
	                <!-- /.input group -->
	              </div>
	               <div class="form-group">
		                <label for="exampleInputnama">Overview</label>
                  		<textarea class="form-control" rows="3" placeholder="Enter ..." name="overview"></textarea>
	                  	     		
	             	</div>
	             
	             	 <div class="form-group">
		                <label>Bahasa</label>
		                <select class="form-control" style="width: 100%;" name="bahasa">
        					<option>Inggris</option>
        					<option>Indonesia</option>
      					</select>
	                  	     		
	             	</div>
	             	
	             	
		       
		             <div class="form-group">
		                <label for="exampleInputnama">Anggaran</label>

	                  	<input type="text" class="form-control uang" id="exampleInputEmail1" placeholder="Pemasukan" name="anggaran" value="1000000">	           		

	             	 </div>
		             <div class="form-group">
		                <label for="exampleInputnama">Pemasukan</label>
	                  	<input type="text" class="form-control uang" id="exampleInputEmail1" placeholder="Pemasukan" name="pemasukan">	           		
	             	 </div>
	             	 <div class="form-group">
		                  <label for="exampleInputFile">input Gambar</label>
		                  <input type="file" id="exampleInputFile" name="poster">
                	</div>
                	<div class="form-group">
		                  <label for="exampleInputFile">input Gambar Background</label>

		                  <input type="file" id="exampleInputFile" name="background">
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
