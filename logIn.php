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


	$message = "";


    
    if(!empty($_POST))
    {   
       
    	$email= $_POST["email"];
    	$pass = md5($_POST["password"]);

    	$sqlCheck = "SELECT * FROM user where user_email = '".$email."'";

    	$resultCheck = mysqli_query($link, $sqlCheck);

        $no_of_data = mysqli_num_rows($resultCheck);

        if($no_of_data){
        	$row = mysqli_fetch_assoc($resultCheck);
        	if($row['user_password']==$pass)
        		{
        			

        			$userData = array(
        				"id" => $row["user_id"]

        			);

                    $_SESSION['user_data']= $userData;
        			header('Location:homepage.php');

        		}

        	else{
        		$message="Incorrect email or password";
        	}
        }

        else{
        	$message ="Incorrect email or password";
        }

    }


    include 'connection_end.php';


  
    

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include 'header.php'; ?>

	<div class="container" style="padding-bottom: 100px">
		<h5 style="text-align: center; padding-top: 50px ; font-size: 30px">Log In</h5>
		

		<div class="row justify-content-center">
			<div class="col-md-6 " >
				<div>
					<hr class="bg-dark" style="height: .5px">
					<div align="center" style="color: red ; padding-bottom: 10px"><?php echo $message ;?></div>
					<form method="POST">
						
						<div class="form-group mb-3">
							<label for="email" style="font-weight: bold;">Email:</label>
							<input type="email" name="email" class="form-control" placeholder="Enter your email" required>
						</div>

						<div class="form-group mb-3">
							<label for="message" style="font-weight: bold;">Enter Password:</label>
							<input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" required>
                           
							
						</div>
						
						<div class="form-group mb-3">
							<input type="submit" style="background-color: skyblue ; border-color: skyblue" class="form-control btn btn-success" name="login" value="Login">
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-md-6">
				<p class="p-0 m-0">Don't have an Account?</p>
				<a href="signup.php">Click here to create a new account.</a>
			</div>
		</div>


	</div>



	<?php include 'footer.php'; ?>

</body>
</html>