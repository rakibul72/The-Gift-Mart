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
	
	<!--heading-->
	<div class="container my-5">
		<div class="row shadow-lg">
			<div class="col-sm-9 col-md-7 col-lg-5 col-xl-4 text-dark blockquote my-0">
				<h4>  Exclusive Products  </h4>
			</div>
			<div class="col-sm-3 col-md-5 col-lg-7 col-xl-8 extensionOfHeading "></div>
		</div>
	</div>

	<!--content-->
	<div class="container content-bg">
		<div class="row" >

			<div class="col-sm-4">
				
					<?php
						#$get_pro = 'SELECT * FROM privateProducts where product_id=1' ;
						$get_pro = 'SELECT * FROM privateProducts where product_id=1' ;
						$run_pro = mysqli_query($link , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

					 ?>

					 <a href= "productdetails2.php?id= <?php echo $product_id; ?>">
								<img src="<?php echo $product_img; ?>" class="productimg">
								<div class='text-center'><?php echo $product_name; ?></div>
							</a>
							<p class='text-center'>Tk.<?php echo $product_price; ?></p>
				
				
			</div>
			<div class="col-sm-4">
				
					<?php
						#$get_pro = 'SELECT * FROM privateProducts where product_id=3' ;
						$get_pro = 'SELECT * FROM privateProducts where product_id=3' ;
						$run_pro = mysqli_query($link , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						
					 ?>

					 <a href= "productdetails2.php?id= <?php echo $product_id; ?>">
					 <img src="<?php echo $product_img; ?>" class="productimg">
					 <div class='text-center'><?php echo $product_name; ?></div>
					 </a>
					<p class='text-center'>Tk.<?php echo $product_price; ?></p>
				
			</div>
			<div class="col-sm-4">
				
					<?php
						#$get_pro = 'SELECT * FROM privateProducts where product_id=5' ;
						$get_pro = 'SELECT * FROM privateProducts where product_id=5' ;
						$run_pro = mysqli_query($link , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						
					 ?>


                            
							<a href= "productdetails2.php?id= <?php echo $product_id; ?>">
								<img src="<?php echo $product_img; ?>" class="productimg">
								<div class='text-center'><?php echo $product_name; ?></div>
							</a>
							<p class='text-center'>Tk.<?php echo $product_price; ?></p>
					
			</div>
		</div>


		<div class="row">

			  <div class="col-sm-6">
					<?php
						#$get_pro = 'SELECT * FROM privateProducts where product_id=2' ;
						$get_pro = 'SELECT * FROM privateProducts where product_id=2' ;
						$run_pro = mysqli_query($link , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

					?>


						<a href= "productdetails2.php?id= <?php echo $product_id; ?>">
								<img src="<?php echo $product_img; ?>" class="productimg">
								<div class='text-center'><?php echo $product_name; ?></div>
							</a>
						<p class='text-center'>Tk.<?php echo $product_price; ?></p>

						
				</div>

				<div class="col-sm-6">
					<?php
						
						$get_pro = 'SELECT * FROM privateProducts where product_id=4' ;

						$run_pro = mysqli_query($link , $get_pro) ;
						$row_pro = mysqli_fetch_array($run_pro) ;
						$product_name = $row_pro['product_name'] ;
						$product_price = $row_pro['product_price'] ;
						$product_img = $row_pro['product_image'] ;
						$product_id = $row_pro['product_id'] ;

						
					 ?>

					 <a href= "productdetails2.php?id= <?php echo $product_id; ?>">
								<img src="<?php echo $product_img; ?>" class="productimg">
								<div class='text-center'><?php echo $product_name; ?></div>
							</a>
						<p class='text-center'>Tk.<?php echo $product_price; ?></p>
				</div>
			     
		</div>
	</div>


	<?php include 'footer.php' ; ?>


</body>
</html>
