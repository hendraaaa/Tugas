<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/main.css">

  <!-- Font Awesome -->
	  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome/css/font-awesome.css">
	  <!-- Ionicons -->
	  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/Ionicons/css/ionicons.css">
	  <!-- Theme style -->
	  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.css">
	  <!-- AdminLTE Skins. Choose a skin from the css/skins
	       folder instead of downloading all of them to reduce the load. -->
	  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/skins/_all-skins.css">

	  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	  <!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	  <![endif]-->

	  <!-- Google Font -->
	  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <a class="navbar-brand" href="#">Navbar</a>
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
		        	<a class="dropdown-item active" href="<?php echo base_url().'home'?>">Film</a>
			        <a class="dropdown-item" href="<?php echo base_url().'home/favorite'?>">Favorite</a>
			        <a class="dropdown-item" href="<?php echo base_url().'home/tayang'?>">Tayang</a>
			        <a class="dropdown-item" href="<?php echo base_url().'home/mendatang'?>">Mendatang</a>

			       
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
		    <form class="form-inline my-2 my-lg-0" method="post" action="<?php echo base_url().'aktor/cariaktor'?>">
		    	 	<input class="form-control mr-sm-2" name="keywoard" type="text" placeholder="Search" aria-label="Search">
		      		<button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
		    	
		     
		    </form>
		  </div>
	</nav>

		<div class="container mt-3">
			<div class="row justify-content-center">
				<?php
				if (!$listaktor) {
					echo '
						<div class="text-center">
								<img src="'.base_url().'foto/not_found.png" class="img-fluid" alt="Responsive image" style="width:20rem;">
								<p class="text-secondary">Pencarian "'.$not.'" Tidak di temukan</p>
			
						</div>
						

					';
				}else{
					foreach ($listaktor as $row) {
						echo '

						<div class="col-lg-3 col-sm-6 col-md-4 mb-5">
							<div class="card" style="width: 13rem;">
						
								<a href="'.base_url().'DetailAktor/aktor/'.$row['id_aktor'].'?nama='.$row['nama'].'"><img src="'.base_url().'foto/'.$row['foto'].'" style="width: 100%;"style="width: 100%;"></a>
								<div class="top-left" style="margin-left: -30px">
									
									
								</div>
					  
							  <div class="card-body">
							    <p class="card-text"><b>'.$row['nama'].'</b></p>
							  </div>
							</div>
					
						</div>

						';
					}

				}
					

				?>

				
				
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