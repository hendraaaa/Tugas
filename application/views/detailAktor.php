<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/main.css">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <a class="navbar-brand" href="#">Navbarr</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      
		     
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Movie
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="#">Action</a>
		          <a class="dropdown-item" href="#">Another action</a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="#">Something else here</a>
		        </div>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Serial Tv
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="#">Action</a>
		          <a class="dropdown-item" href="#">Another action</a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="#">Something else here</a>
		        </div>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Dropdown
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="#">Action</a>
		          <a class="dropdown-item" href="#">Another action</a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="#">Something else here</a>
		        </div>
		      </li>
		      
		    </ul>
		  </div>
		</nav>

		
	

		<div class="row">
		   <div class="col-md-3">
		   		<img class="img-fluid ml-3 mt-3 mb-3" src="<?php echo base_url().'foto/'.$listaktor[0]['foto']?>">
		   		<div class="row">
					<div class="col-md-12 ml-2">
						<div class="row">
							<div class="col-2">
								<img src="https://img.icons8.com/fluent/50/000000/facebook-new.png" style="width: 35px;" />
							</div>
							<div class="col-2">
								<img src="https://img.icons8.com/fluent/48/000000/instagram-new.png" style="width: 35px;"/>
							</div>
							<div class="col-2">
								<img src="https://img.icons8.com/fluent/48/000000/twitter.png" style="width: 35px;"/>
							</div>
						</div>
					</div>
				</div>
				<div class="mt-3 ml-3">
					<div>
						<strong>Peran</strong>
						<br/>
						<?php echo $listaktor[0]['peran']; ?>
						
					</div>

					<div class="mt-2">
						<strong>Jenis Kelamin</strong>
						<br/>
						<?php echo $listaktor[0]['jenis_kl']; ?>
					
						
					</div>

					<div class="mt-2">
						<strong>Kelahiran</strong>
						<br/>
						<?php echo $listaktor[0]['tgl_lahir'].' ('.$listaktor[0]['umur'].') '.'tahun' ?>
						
						
					</div>

			
					
				</div>
		   </div>
		   <div class="col-md-8 mt-3 ml-4">
		   		<h3><b><?php echo $listaktor[0]['nama']?></b></h3>
		   	
		   		<div class="row mt-4">
					<div class="col-md-12">
						<strong>Biografi</strong>
						<p class="font-weight-light text-justify"><?php echo $listaktor[0]['biografu']?></p>

					</div> 	
				</div>

				<div class="row mt-4">
					<div class="col-md-5">
						<h5>Peran</h5>
						<div class="wrapper">
							<?php
								foreach ($listperan as $row) {
									echo '
										<div class="card item mt-3 ml-3 mb-3" style="width: 13rem;">
								
											<a href="'.base_url().'detail/film/'.$row['id_film'].'"><img src="'.base_url().'foto/'.$row['poster_film'].'" style="width: 100%;"style="width: 100%;"></a>
										
											<div class="card-body">
												<p class="card-text"><b>'.$row['namaFilm'].'</b></p>
											</div>
										</div>


									';
								}
							?>
					
					
	
					
						</div>
					</div>
					
				</div>
		
			</div>	   	
		</div>

		
	


		
		



							



	
         
        






	<script src="<?php echo base_url();?>assets/js/jquery-3.5.1.slim.js"></script>
	<script src="<?php echo base_url();?>assets/js/popper.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
	<script src="<?php echo base_url();?>assets/css/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?php echo base_url();?>assets/css/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- SlimScroll -->
	<script src="<?php echo base_url();?>assets/css/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<!-- FastClick -->
	<script src="<?php echo base_url();?>assets/css/fastclick/lib/fastclick.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url();?>assets/dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>
	<!-- jQuery Knob -->
	<script src="<?php echo base_url();?>assets/css/jquery-knob/js/jquery.knob.js"></script>
	<!-- Sparkline -->
	<script src="<?php echo base_url();?>assets/css/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
	<!-- page script -->
	<script src="<?php echo base_url();?>assets/dist/js/js.js"></script>


</body>
</html>