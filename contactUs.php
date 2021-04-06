<?php

    session_start();
    $msg="";
    $msgg="";
    include 'connection_start.php';
    $name=null;
    $email=null;
    $status=1;
    $message=null;
    if(isset($_SESSION['user_data'])){
        $msg="none";

        $id= $_SESSION['user_data']['id'];
        $sqlCheck = "SELECT * FROM user where user_id = ".$id."";
        $status = 2;

        $resultCheck = mysqli_query($link, $sqlCheck);

        $no_of_data = mysqli_num_rows($resultCheck);

        if($no_of_data){
            $row = mysqli_fetch_assoc($resultCheck);
            $name = $row['user_name'];
            $email = $row['user_email'];
        }
        
    }

    else{
       
        $msgg="none";
    }

     if(!empty($_POST))
    {    
         $user_name  = $_POST["name"]; 
         $user_email = $_POST["email"];
         $message = $_POST["message"];

         date_default_timezone_set('ASIA/DHAKA');
         $currentDate = date('Y-m-d H:i:s');

         $sql = 'INSERT INTO contact (name,email,message,status,created_date,updated_date) VALUES ("'.$user_name.'", "'.$user_email.'", "'.$message.'", "'.$status.'","'.$currentDate.'","'.$currentDate.'" )' ;

         $result = mysqli_query($link,$sql);
         $message="Thank your for your feedback!!";
      
    }






    include 'connection_end.php';

?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php include 'header.php'; ?>

	<div class="container" style="padding-bottom: 50px">
		<h5 style="text-align: center; padding-top: 50px ; font-size: 30px">Contact With Us</h5>
		

		<div class="row justify-content-center">
			<div class="col-md-6 " >
				<div>
					<hr class="bg-dark" style="height: .5px">
					<div align="center" style="color:green ; padding-bottom: 10px"><?php echo $message ;?></div>
					<form method="POST">
						<div class="form-group mb-3">
							<label for="name" style="font-weight: bold;">Name:</label>
							<input type="text" name="name" id="id1"  class="form-control" placeholder="Enter Your Name" onkeypress=
							"return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || 
							(event.charCode==32)" required>

                            <script type="text/javascript">

                             
                              document.getElementById("id1").value = '<?php echo $name;?>';
                              
                            </script>
						</div>
						
						<div class="form-group mb-3">
							<label for="email" style="font-weight: bold;">Email:</label>
							<input type="email" name="email"  class="form-control" placeholder="Enter your email" 
							  required value=<?php echo $email; ?>>
						</div>


						<div class="form-group mb-3">
							<label for="message" style="font-weight: bold;">Message:</label>
							<textarea name="message" class="form-control" placeholder="Write your message here" required></textarea>
						</div>


						<div class="form-group mb-3">
							<input type="submit"  class="form-control btn btn-success" name="sendComplain" value="Submit">
						</div>
					</form>
				</div>
			</div>


		</div>


	</div>






	<?php include 'footer.php'; ?>
</body>
</html>