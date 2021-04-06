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


    $sqlCheck = "SELECT * FROM aboutus";

    $resultCheck = mysqli_query($link, $sqlCheck);

    $no_of_data = mysqli_num_rows($resultCheck);
    

    if($no_of_data){
    while ($row = mysqli_fetch_assoc($resultCheck)) {
           $image[]=$row['image'];
           $header[] = $row['header'];
           $body[] = $row['body'];
    }

    }
	
	include 'connection_end.php';

?>


<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<style>
		  .aboutimg{
		  	width: 100%;
		  	height: 100%;
		  }
	</style>
	
</head>
<body>

	<!--navigation bar-->
	<?php include 'header.php'; ?>

	<div class="container">
		<div class="row m-5">
			<div class="col my-auto">
				<h2><?php echo $header[0]; ?></h2>
				<p style="color: black"><?php echo $body[0]; ?></p>
			</div>
			<div class="col">
				<img src="<?php echo $image[0]; ?>" class='aboutimg'>
			</div>
		</div>
		<div class="row m-5">
			<div class="col">
				<img src="<?php echo $image[1]; ?>" class='aboutimg'>
			</div>
			<div class="col my-auto">
				<h2><?php echo $header[1]; ?></h2>
				<p style="color: black"><?php echo $body[1];?></p>
			</div>
		</div>
		<div class="row m-5">
			<div class="col my-auto">
				<h2><?php echo $header[2]; ?></h2>
				<p><?php echo nl2br($body[2]);?></p>
			</div>
			<div class="col">
				<img src="<?php echo $image[2]; ?>" class='aboutimg'>
			</div>
		</div>
		</div>



	<?php include 'footer.php' ; ?>





</body>
</html>
