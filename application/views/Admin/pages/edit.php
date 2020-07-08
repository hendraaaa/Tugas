 <div class="col-xs-12">
 	<form method="post" action="<?php echo base_url()?>edit/aksi" enctype="multipart/form-data">

 		<input type="hidden" name="id_film" value="<?php echo $detailfilm[0]['id_film'] ?>">
 		<input type="hidden" name="fotolama" value="<?php echo $detailfilm[0]['poster_film'] ?>">
 		<input type="hidden" name="bglama" value="<?php echo $detailfilm[0]['bgimage'] ?>">

 		<div class="box box-danger">
	        <div class="box-header">
	              <h3 class="box-title">Input Film</h3>
	            </div>
	            <div class="box-body">
	            	<div class="form-group">
		                <label for="exampleInputnama">Nama Film</label>
	                  	<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="nama" value="<?php echo $detailfilm[0]['namaFilm'] ?>">
		               
		           		
	             	 </div>
	             	 <div class="form-group">
		                <label for="exampleInputnama">Rating</label>
	                  	<input type="number" class="form-control" id="exampleInputEmail1" placeholder="Rating" name="rating" value="<?php echo $detailfilm[0]['rating'] ?>">		               	
	             	 </div>
	             	 <div class="form-group">
		                <label for="exampleInputnama">Genre</label>
	                  	<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Genre" name="genre" value="<?php echo $detailfilm[0]['genre'] ?>">	           		
	             	 </div>
	             	 <div class="form-group">
		                <label for="exampleInputnama">Durasi</label>
	                  	<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Durasi" name="durasi" value="<?php echo $detailfilm[0]['durasi'] ?>">	           		
	             	 </div>
	              <!-- Date dd/mm/yyyy -->
	              <div class="form-group">
	                <label>Tanggal Rilis:</label>

	                <div class="input-group">
	                  <div class="input-group-addon">
	                    <i class="fa fa-calendar"></i>
	                  </div>
	                  <input type="text" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask name="tanggal" value="<?php echo $detailfilm[0]['tgl_rilis'] ?>">
	                </div>
	                <!-- /.input group -->
	              </div>
	               <div class="form-group">
		                <label for="exampleInputnama">Overview</label>
                  		<textarea class="form-control" rows="3" placeholder="Enter ..." name="overview"><?php echo $detailfilm[0]['overview'] ?></textarea>
	                  	     		
	             	</div>
	             
	             	 <div class="form-group">
		                <label>Bahasa</label>
		                <select class="form-control" style="width: 100%;" name="bahasa" >
		                	<option value="Inggris" <?php if($detailfilm[0]['bahasa'] == 'Inggris') echo 'selected="selected"' ?> >Inggris</option>
        					<option value="Indonesia" <?php if($detailfilm[0]['bahasa'] == 'Indonesia') echo 'selected="selected"' ?> >Indonesia</option>
      					</select>
	                  	     		
	             	</div>
	             	
	             	
		       
		             <div class="form-group">
		                <label for="exampleInputnama">Anggaran</label>

	                  	<input type="text" class="form-control uang" id="exampleInputEmail1" placeholder="Pemasukan" name="anggaran" value="<?php echo $detailfilm[0]['anggaran'] ?>">	           		

	             	 </div>
		             <div class="form-group">
		                <label for="exampleInputnama">Pemasukan</label>
	                  	<input type="text" class="form-control uang" id="exampleInputEmail1" placeholder="Pemasukan" name="pemasukan" value="<?php echo $detailfilm[0]['pemasukan'] ?>">	           		
	             	 </div>
	             	 <div class="form-group">
		                  <label for="exampleInputFile">input Gambar</label>
		                  <input type="file" id="exampleInputFile" name="poster" value="<?php echo base_url().'foto/'.$detailfilm[0]['poster_film'] ?>">
                	</div>
                	<div class="form-group">
		                  <label for="exampleInputFile">input Gambar Background</label>
		                  <input type="file" id="exampleInputFile" name="background" value="<?php echo base_url().'foto/'.$detailfilm[0]['bgimage'] ?>">
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
