<?php
	
	session_start();
    $msg="";
    $msgg="";
    include 'connection_start.php';

    if(isset($_SESSION['user_data'])){
        $msg="none";
        
    }

    else{
       
        $msgg="none";
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>
	<!--navigation bar-->
	<?php include 'header.php'; ?> 

	<!--left filters-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<div class="list-group mt-5">
					<ul class="list-group-item list-group-item-info">
						<li class="list-unstyled">Search Within Your Budget</li>
					</ul>
  					<a href="allProducts.php?filter=1" class="list-group-item list-group-item-success">100-500</a>
  					<a href="allProducts.php?filter=2" class="list-group-item list-group-item-success">501-1000</a>
  					<a href="allProducts.php?filter=3" class="list-group-item list-group-item-success">1001-3000</a>
  					<a href="allProducts.php?filter=4" class="list-group-item list-group-item-success">3001-5000</a>
  					<a href="allProducts.php?filter=5" class="list-group-item list-group-item-success">5001-10000</a>
  					<a href="allProducts.php?filter=6" class="list-group-item list-group-item-success">10001-50000</a>
  					<a href="allProducts.php?filter=7" class="list-group-item list-group-item-success">More than 50000</a>
					<a href="allProducts.php?filter=8" class="list-group-item list-group-item-success">Show All</a>
				</div>
			</div>
			
			<!-- content -->
			<?php include 'functions/functions.php' ; ?>
			<!-- 1st column -->
			<div class="col-md-3">

				<?php
				 
				 	if (isset($_GET['filter'])) 
					{
						$_SESSION['filter'] = $_GET['filter'] ;
						getFilteredPro1stCol() ;
					}
					else
					{
						getPro1stCol() ;
					}

				 ?>

			</div>


			<!-- <2nd column -->
			<div class="col-md-3">

				<?php
					
					if (isset($_GET['filter'])) 
					{
						$_SESSION['filter'] = $_GET['filter'] ;
						getFilteredPro2ndCol() ;
					}
					else
					{
						getPro2ndCol() ;
					}						

				 ?>

			</div>


			<!-- 3rd column -->
			<div class="col-md-3">

				  <?php

				 	if (isset($_GET['filter'])) 
					{
						$_SESSION['filter'] = $_GET['filter'] ;
						getFilteredPro3rdCol() ;
					}
					else
					{
						getPro3rdCol() ;
					}	 

				 ?>

			</div>		

			

		</div>	
	</div>


	<?php include 'footer.php' ; ?>


</body>
</html>
