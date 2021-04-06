<?php

	
    include 'connection_start.php';



	// col-1
	function getPro1stCol(){
		global $link ;

		#$get_pro = 'SELECT * FROM products;
		$get_pro = 'SELECT * FROM products ORDER BY product_price';
		$run_pro = mysqli_query($link , $get_pro) ;
		$cnt = 1 ;

		while ($row_pro = mysqli_fetch_array($run_pro)) {
			$product_name = $row_pro['product_name'] ;
			$product_price = $row_pro['product_price'] ;
			$product_img = $row_pro['product_image'] ;
			$product_id = $row_pro['product_id'] ;

			$resCnt = $cnt % 3 ;

			if($resCnt == 1){
				echo "

					<div class='mt-2'>
						<a href='productdetails.php?id=$product_id'>
							<img src='$product_img' style='width: 100%; height: 350px;' class='productimg'>
							<div class='text-center'>$product_name</div>
						</a>
						<p class='text-center'>Tk.$product_price</p>
					</div>


			";
			}

			$cnt++ ;
		}
	}


	// col-2
	function getPro2ndCol(){
		global $link ;

		#$get_pro = 'SELECT * FROM products;
		$get_pro = 'SELECT * FROM products ORDER BY product_price';
		$run_pro = mysqli_query($link , $get_pro) ;
		$cnt = 1 ;

		while ($row_pro = mysqli_fetch_array($run_pro)) {
			$product_name = $row_pro['product_name'] ;
			$product_price = $row_pro['product_price'] ;
			$product_img = $row_pro['product_image'] ;
			$product_id = $row_pro['product_id'] ;

			$resCnt = $cnt % 3 ;

			if($resCnt == 2){
				echo "

					<div class='mt-2'>
						<a href='productdetails.php?id=$product_id'>
							<img src='$product_img' style='width: 100%; height: 350px;' class='productimg'>
							<div class='text-center'>$product_name</div>
						</a>
						<p class='text-center'>Tk.$product_price</p>
					</div>


			";
			}

			$cnt++ ;
		}
	}


	// col-3
	function getPro3rdCol(){
		global $link ;

		#$get_pro = 'SELECT * FROM products;
		$get_pro = 'SELECT * FROM products ORDER BY product_price';
		$run_pro = mysqli_query($link , $get_pro) ;
		$cnt = 1 ;

		while ($row_pro = mysqli_fetch_array($run_pro)) {
			$product_name = $row_pro['product_name'] ;
			$product_price = $row_pro['product_price'] ;
			$product_img = $row_pro['product_image'] ;
			$product_id = $row_pro['product_id'] ;

			$resCnt = $cnt % 3 ;

			if($resCnt == 0){
				echo "

					<div class='mt-2'>
						<a href='productdetails.php?id=$product_id'>
							<img src='$product_img' style='width: 100%; height: 350px;' class='productimg'>
							<div class='text-center'>$product_name</div>
						</a>
						<p class='text-center'>Tk.$product_price</p>
					</div>


			";
			}

			$cnt++ ;
		}
	}
	
	
	
	// for filter search
	function getFilteredPro1stCol(){
			global $link ;

			switch ($_GET['filter']) {

				case '':
					# code...
					break;

				case '1':
						$get_pro = 'SELECT * FROM products where product_price BETWEEN 100 AND 500 ORDER BY product_price' ;
						break;

				case '2':
						$get_pro = 'SELECT * FROM products where product_price BETWEEN 501 AND 1000 ORDER BY product_price' ;
						break;

				case '3':
						$get_pro = 'SELECT * FROM products where product_price BETWEEN 1001 AND 3000 ORDER BY product_price' ;
						break;

				case '4':
						$get_pro = 'SELECT * FROM products where product_price BETWEEN 3001 AND 5000 ORDER BY product_price' ;
						break;

				case '5':
						$get_pro = 'SELECT * FROM products where product_price BETWEEN 5001 AND 10000 ORDER BY product_price' ;
						break;

				case '6':
						$get_pro = 'SELECT * FROM products where product_price BETWEEN 10001 AND 50000 ORDER BY product_price' ;
						break;

				case '7':
						$get_pro = 'SELECT * FROM products where product_price > 50000 ORDER BY product_price' ;
						break;
				
				default:
						$get_pro = 'SELECT * FROM products ORDER BY product_price' ;
						break;
			}


			$run_pro = mysqli_query($link , $get_pro) ;
			$cnt = 1 ;

			while ($row_pro = mysqli_fetch_array($run_pro)) {
				$product_name = $row_pro['product_name'] ;
				$product_price = $row_pro['product_price'] ;
				$product_img = $row_pro['product_image'] ;
				$product_id = $row_pro['product_id'] ;

				$resCnt = $cnt % 3 ;

				if($resCnt == 1){
					echo "

						<div class='mt-2'>
							<a href='productdetails.php?id=$product_id'>
								<img src='$product_img' style='width: 100%; height: 350px;'  class='productimg'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>Tk.$product_price</p>
						</div>


				";
				}

				$cnt++ ;
			}
		}


		// col-2
		function getFilteredPro2ndCol(){
			global $link ;

						switch ($_GET['filter']) {

				case '':
					# code...
					break;

				case '1':
						$get_pro = 'SELECT * FROM products where product_price BETWEEN 100 AND 500 ORDER BY product_price' ;
						break;

				case '2':
						$get_pro = 'SELECT * FROM products where product_price BETWEEN 501 AND 1000 ORDER BY product_price' ;
						break;

				case '3':
						$get_pro = 'SELECT * FROM products where product_price BETWEEN 1001 AND 3000 ORDER BY product_price' ;
						break;

				case '4':
						$get_pro = 'SELECT * FROM products where product_price BETWEEN 3001 AND 5000 ORDER BY product_price' ;
						break;

				case '5':
						$get_pro = 'SELECT * FROM products where product_price BETWEEN 5001 AND 10000 ORDER BY product_price' ;
						break;

				case '6':
						$get_pro = 'SELECT * FROM products where product_price BETWEEN 10001 AND 50000 ORDER BY product_price' ;
						break;

				case '7':
						$get_pro = 'SELECT * FROM products where product_price > 50000 ORDER BY product_price' ;
						break;
				
				default:
						$get_pro = 'SELECT * FROM products ORDER BY product_price' ;
						break;
			}


			$run_pro = mysqli_query($link , $get_pro) ;
			$cnt = 1 ;

			while ($row_pro = mysqli_fetch_array($run_pro)) {
				$product_name = $row_pro['product_name'] ;
				$product_price = $row_pro['product_price'] ;
				$product_img = $row_pro['product_image'] ;
				$product_id = $row_pro['product_id'] ;

				$resCnt = $cnt % 3 ;

				if($resCnt == 2){
					echo "

						<div class='mt-2'>
							<a href='productdetails.php?id=$product_id'>
								<img src='$product_img' style='width: 100%; height: 350px;' class='productimg'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>Tk.$product_price</p>
						</div>


				";
				}

				$cnt++ ;
			}
		}


		// col-3
		function getFilteredPro3rdCol(){
			global $link ;

						switch ($_GET['filter']) {

				case '':
					# code...
					break;

				case '1':
						$get_pro = 'SELECT * FROM products where product_price BETWEEN 100 AND 500 ORDER BY product_price' ;
						break;

				case '2':
						$get_pro = 'SELECT * FROM products where product_price BETWEEN 501 AND 1000 ORDER BY product_price' ;
						break;

				case '3':
						$get_pro = 'SELECT * FROM products where product_price BETWEEN 1001 AND 3000 ORDER BY product_price' ;
						break;

				case '4':
						$get_pro = 'SELECT * FROM products where product_price BETWEEN 3001 AND 5000 ORDER BY product_price' ;
						break;

				case '5':
						$get_pro = 'SELECT * FROM products where product_price BETWEEN 5001 AND 10000 ORDER BY product_price' ;
						break;

				case '6':
						$get_pro = 'SELECT * FROM products where product_price BETWEEN 10001 AND 50000 ORDER BY product_price' ;
						break;
				
				case '7':
						$get_pro = 'SELECT * FROM products where product_price > 50000 ORDER BY product_price' ;
						break;
				
				default:
						$get_pro = 'SELECT * FROM products ORDER BY product_price' ;
						break;
			}


			$run_pro = mysqli_query($link , $get_pro) ;
			$cnt = 1 ;

			while ($row_pro = mysqli_fetch_array($run_pro)) {
				$product_name = $row_pro['product_name'] ;
				$product_price = $row_pro['product_price'] ;
				$product_img = $row_pro['product_image'] ;
				$product_id = $row_pro['product_id'] ;

				$resCnt = $cnt % 3 ;

				if($resCnt == 0){
					echo "

						<div class='mt-2'>
							<a href='productdetails.php?id=$product_id'>
								<img src='$product_img' style='width: 100%; height: 350px;' class='productimg'>
								<div class='text-center'>$product_name</div>
							</a>
							<p class='text-center'>Tk.$product_price</p>
						</div>


				";
				}

				$cnt++ ;
			}
		}

?>
