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


	<?php
		$product_id = $_GET['id'] ;
		global $link ;
		$get_pro = 'SELECT * FROM privateProducts where product_id = '.$product_id ;
		$run_pro = mysqli_query($link , $get_pro) ;
		$row_pro = mysqli_fetch_array($run_pro) ;

		$product_name = $row_pro['product_name'] ;
		$product_price = $row_pro['product_price'] ;
		$product_img = $row_pro['product_image'] ;
		$product_detail = $row_pro['product_description'] ;
		$product_rating = $row_pro['product_rating'] ;
		$product_quantity = $row_pro['product_quantity'] ;
		$product_category = $row_pro['product_category'] ;

	?>

	<div class="container my-5 pb-5" >
		<div class="row py-2">
			<div class="col-md-6">
				<?php
					echo "
						<img src='$product_img' style='width: 100%; height: 100%;'>
					";
				?>
			</div>
			<div class="col-md-6 py-5 bg-secondary text-light ">

					<div>
						<?php
							echo "
								<h1>$product_name</h1>
								<p>Product Details: $product_detail</p>
								<p>Price: $product_price Tk.</p>
								<p>Rating: $product_rating / 5</p>
								<p>Available Quantity: $product_quantity</p>
								<p>Product Category: $product_category</p>
							";
						?>
					</div>
					
					<form method='POST' action='productdetails2.php?id=<?php echo $product_id ; ?>'>
						<div>
							<input type='submit' name='click_to_buy' class='btn btn-success' value='Click To Buy' />
						</div>
					</form>

			</div>
		</div>
	</div>



	<?php include 'footer.php' ; ?>



</body>
</html>
