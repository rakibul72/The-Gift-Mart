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

    $sqlCheck = "SELECT * FROM ourteam";

    $resultCheck = mysqli_query($link, $sqlCheck);

    $no_of_data = mysqli_num_rows($resultCheck);
    

    if($no_of_data){
    while ($row = mysqli_fetch_assoc($resultCheck)) {
           $image[]=$row['image'];
           $name[] = $row['name'];
           $univ_id[] = $row['univ_id'];
           $facebook[] = $row['facebook'];
           $instagram[] =$row['instagram'];
           $linkedin[]= $row['linkedin'];
           $twitter[]=$row['twitter'];
    }

    }

    include 'connection_end.php';


?>




<!DOCTYPE html>
<html>
<head>
<style >
.ourteamimage{
  width: 100%;
  height: 350px;
}

</style>		    
</head>
<body>


	<?php
	include 'header.php';
	?>

	<div class="ourteam">
		<div class="container">
			<h5 class="xx" style="text-align: center; padding-top: 50px ; font-size: 40px ; padding-bottom: 50px">Our Team Member</h5>

			<div class="row" style="padding-bottom: 50px">
                <div class="col-md-6 text-center">
                        <img src="<?php echo $image[0]; ?>" class="ourteamimage">

                        <div class="info">
                            <h4 style="padding-top: 15px"><?php echo $name[0]; ?></h4>

                        </div>
 
                        <div class="Social" style="padding-bottom: 30px">
                        	<a href="<?php echo $linkedin[0]; ?>" ><i class="fa fa-linkedin mr-3"></i></a>
                            <a href="<?php echo $twitter[0]; ?>" ><i class="fa fa-twitter mr-3"></i></a>
                            <a href="<?php echo $instagram[0]; ?>" ><i class="fa fa-instagram mr-3 "></i></a>
                            <a href="<?php echo $facebook[0]; ?>" ><i class="fa fa-facebook-f mr-3"></i></a>
                        </div>
                </div>

                <div class="col-md-6 text-center">
                        <img src="<?php echo $image[1]; ?>" class="ourteamimage">

                        <div class="info">
                            <h4 style="padding-top: 15px"><?php echo $name[1]; ?></h4>
                            
                        </div>




                        <div class="Social">
                        	<a href="<?php echo $linkedin[1]; ?>" ><i class="fa fa-linkedin mr-3"></i></a>
                            <a href="<?php echo $twitter[1]; ?>" ><i class="fa fa-twitter mr-3"></i></a>
                            <a href="<?php echo $instagram[1]; ?>" ><i class="fa fa-instagram mr-3 "></i></a>
                            <a href="<?php echo $facebook[1]; ?>" ><i class="fa fa-facebook-f mr-3"></i></a>
                        </div>

            </div>

        </div>

		</div>
		
	</div>


	<?php
	include 'footer.php';
	?>

</body>
</html>