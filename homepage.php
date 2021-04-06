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

	<style >
	.productimg{
  	width: 100%;
  	height: 350px;
    }

</style>
	
</head>
<body>

	<!--navigation bar-->
	<?php include 'header.php'; ?>


	<!--Carousel portion-->
	<div class="container">
	  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
	  </ol>
	  <div class="carousel-inner">
		<div class="carousel-item active">
		  <img class="d-block w-100" src="images/gifts1.png" alt="First slide">
		</div>
		<div class="carousel-item">
		  <img class="d-block w-100" src="images/gifts3.png" alt="Second slide">
		</div>
		<div class="carousel-item">
		  <img class="d-block w-100" src="images/gifts4.png" alt="Third slide">
		</div>
		<div class="carousel-item">
		  <img class="d-block w-100" src="images/gifts5.png" alt="Fourth slide">
		</div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
	</div>
	</div>


	<!--Books-->
	<!--heading-->
	<div class="container my-5">
		<div class="row shadow-lg">
			<div class="col-sm-9 col-md-7 col-lg-5 col-xl-4 text-dark blockquote my-0">
				<h4>  Books  </h4>
			</div>
			<div class="col-sm-3 col-md-5 col-lg-7 col-xl-8 extensionOfHeading "></div>
		</div>
	</div>
	<!--content-->
	<div class="container content-bg">
		<div class="row">
			<div class="col-sm-3">
				<img  src="images/book1.png" class="productimg mt-2">
				<div class="text-center"> <a href="allProducts.php">SEE ALL PRODUCTS</a> </div>
			</div>

			<div class="col-sm-3">
				<div class="mt-2">
					<?php
						#$get_pro = 'SELECT * FROM products where product_id=1' ;
						$get_pro = 'SELECT * FROM products where product_id=1' ;
						$run_pro = mysqli_query($link , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							   <a href='productdetails.php?id=$product_id'>

								<img src='$product_img' class='productimg'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>Tk.$product_price</p>
						";
					 ?>
				</div>
				<div>
					<?php
						#$get_pro = 'SELECT * FROM products where product_id=2' ;
						$get_pro = 'SELECT * FROM products where product_id=2' ;
						$run_pro = mysqli_query($link , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='productdetails.php?id=$product_id'>
								<img src='$product_img' class='productimg'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>Tk.$product_price</p>
						";
					 ?>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="mt-2">
					<?php
						#$get_pro = 'SELECT * FROM products where product_id=3' ;
						$get_pro = 'SELECT * FROM products where product_id=3' ;
						$run_pro = mysqli_query($link , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='productdetails.php?id=$product_id'>
								<img src='$product_img' class='productimg'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>Tk.$product_price</p>
						";
					 ?>
				</div>
				<div>
					<?php
						#$get_pro = 'SELECT * FROM products where product_id=4' ;
						$get_pro = 'SELECT * FROM products where product_id=4' ;

						$run_pro = mysqli_query($link , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='productdetails.php?id=$product_id'>
								<img src='$product_img' class='productimg'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>Tk.$product_price</p>
						";
					 ?>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="mt-2">
					<?php
						#$get_pro = 'SELECT * FROM products where product_id=5' ;
						$get_pro = 'SELECT * FROM products where product_id=5' ;
						$run_pro = mysqli_query($link , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='productdetails.php?id=$product_id'>
								<img src='$product_img' class='productimg'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>Tk.$product_price</p>
						";
					 ?>
				</div>
				<div>
					<?php
						#$get_pro = 'SELECT * FROM products where product_id=6' ;
						$get_pro = 'SELECT * FROM products where product_id=6' ;
						$run_pro = mysqli_query($link , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='productdetails.php?id=$product_id'>
								<img src='$product_img' class='productimg'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>Tk.$product_price</p>
						";
					 ?>
				</div>
			</div>
		</div>
	</div>


	<!--Gadgets-->
	<!--heading-->
	<div class="container my-5">
		<div class="row shadow-lg">
			<div class="col-sm-9 col-md-7 col-lg-5 col-xl-4 text-dark blockquote my-0">
				<h4>  Gadgets  </h4>
			</div>
			<div class="col-sm-3 col-md-5 col-lg-7 col-xl-8 extensionOfHeading "></div>
		</div>
	</div>
	<!--content-->
	<div class="container content-bg">
		<div class="row">
			<div class="col-sm-3">
				<img src="images/gadgets.jpg" class="productimg">
				<div class="text-center "> <a href="allProducts.php">SEE ALL PRODUCTS</a> </div>
			</div>
			<div class="col-sm-3">
				<div class="mt-2">
					<?php
						#$get_pro = 'SELECT * FROM products where product_id=7' ;
						$get_pro = 'SELECT * FROM products where product_id=7' ;

						$run_pro = mysqli_query($link , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='productdetails.php?id=$product_id'>
								<img src='$product_img' class='productimg'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>Tk.$product_price</p>
						";
					 ?>
				</div>
				<div>
					<?php
						#$get_pro = 'SELECT * FROM products where product_id=8' ;
						$get_pro = 'SELECT * FROM products where product_id=8' ;

						$run_pro = mysqli_query($link , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='productdetails.php?id=$product_id'>
								<img src='$product_img' class='productimg'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>Tk.$product_price</p>
						";
					 ?>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="mt-2">
					<?php
						#$get_pro = 'SELECT * FROM products where product_id=9' ;
						$get_pro = 'SELECT * FROM products where product_id=9' ;
						$run_pro = mysqli_query($link , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='productdetails.php?id=$product_id'>
								<img src='$product_img' class='productimg'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>Tk.$product_price</p>
						";
					 ?>
				</div>
				<div>
					<?php
						#$get_pro = 'SELECT * FROM products where product_id=10' ;
						$get_pro = 'SELECT * FROM products where product_id=10' ;
						$run_pro = mysqli_query($link , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='productdetails.php?id=$product_id'>
								<img src='$product_img' class='productimg'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>Tk.$product_price</p>
						";
					 ?>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="mt-2">
					<?php
						#$get_pro = 'SELECT * FROM products where product_id=11' ;
						$get_pro = 'SELECT * FROM products where product_id=11' ;
						$run_pro = mysqli_query($link , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='productdetails.php?id=$product_id'>
								<img src='$product_img' class='productimg'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>Tk.$product_price</p>
						";
					 ?>
				</div>
				<div>
					<?php
						#$get_pro = 'SELECT * FROM products where product_id=12' ;
						$get_pro = 'SELECT * FROM products where product_id=12' ;
						$run_pro = mysqli_query($link , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='productdetails.php?id=$product_id'>
								<img src='$product_img' class='productimg'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>Tk.$product_price</p>
						";
					 ?>
				</div>
			</div>
		</div>
	</div>



	<!--Miscellaneous-->
	<!--heading-->
	<div class="container my-5">
		<div class="row shadow-lg">
			<div class="col-sm-9 col-md-7 col-lg-5 col-xl-4 text-dark blockquote my-0">
				<h4>  Miscellaneous Products  </h4>
			</div>
			<div class="col-sm-3 col-md-5 col-lg-7 col-xl-8 extensionOfHeading "></div>
		</div>
	</div>
	<!--content-->
	<div class="container content-bg">
		<div class="row">
			<div class="col-sm-3">
				<img src="images/gifts2.jpg" class="productimg mt-2">
				<div class="text-center"> <a href="allProducts.php">SEE ALL PRODUCTS</a> </div>
			</div>
			<div class="col-sm-3">
				<div class="mt-2">
					<?php
						#$get_pro = 'SELECT * FROM products where product_id=13' ;
						$get_pro = 'SELECT * FROM products where product_id=13' ;
						$run_pro = mysqli_query($link , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='productdetails.php?id=$product_id'>
								<img src='$product_img' class='productimg'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>Tk.$product_price</p>
						";
					 ?>
				</div>
				<div>
					<?php
						#$get_pro = 'SELECT * FROM products where product_id=14' ;
						$get_pro = 'SELECT * FROM products where product_id=14' ;
						$run_pro = mysqli_query($link , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='productdetails.php?id=$product_id'>
								<img src='$product_img' class='productimg'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>Tk.$product_price</p>
						";
					 ?>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="mt-2">
					<?php
						#$get_pro = 'SELECT * FROM products where product_id=15' ;
						$get_pro = 'SELECT * FROM products where product_id=15' ;
						$run_pro = mysqli_query($link , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='productdetails.php?id=$product_id'>
								<img src='$product_img' class='productimg'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>Tk.$product_price</p>
						";
					 ?>
				</div>
				<div>
					<?php
						#$get_pro = 'SELECT * FROM products where product_id=16' ;
						$get_pro = 'SELECT * FROM products where product_id=16' ;
						$run_pro = mysqli_query($link , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='productdetails.php?id=$product_id'>
								<img src='$product_img' class='productimg'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>Tk.$product_price</p>
						";
					 ?>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="mt-2">
					<?php
						#$get_pro = 'SELECT * FROM products where product_id=17' ;
						$get_pro = 'SELECT * FROM products where product_id=17' ;
						$run_pro = mysqli_query($link , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='productdetails.php?id=$product_id'>
								<img src='$product_img' class='productimg'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>Tk.$product_price</p>
						";
					 ?>
				</div>
				<div>
					<?php
						#$get_pro = 'SELECT * FROM products where product_id=18' ;
						$get_pro = 'SELECT * FROM products where product_id=18' ;
						$run_pro = mysqli_query($link , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						echo "
							<a href='productdetails.php?id=$product_id'>
								<img src='$product_img' class='productimg'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>Tk.$product_price</p>
						";
					 ?>
				</div>
			</div>
		</div>
	</div>



	<?php include 'footer.php' ; ?>

	
</body>
</html>
