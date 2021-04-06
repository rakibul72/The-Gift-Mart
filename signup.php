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
    	 $name  = $_POST["name"]; 
         $email = $_POST["email"];
         $user_phone = $_POST["phone"];
         $user_password = $_POST["password"];
         $confirm_password = $_POST["confirmpassword"];


         date_default_timezone_set('ASIA/DHAKA');
         $currentDate = date('Y-m-d H:i:s');






         $sqlCheck = "SELECT * FROM user where user_email = '".$email."'";

         date_default_timezone_set('ASIA/DHAKA');
         $currentDate = date('Y-m-d H:i:s');

         $flag = 0 ;

         if(strlen($user_phone)!=11){
         	$flag =1;
         }

         if(strlen($user_phone)==11){
         	  if($user_phone[0]!='0')
         	  	$flag=1;

         	  if($user_phone[1]!='1')
         	  	$flag=1;
         }
         

         $resultCheck = mysqli_query($link, $sqlCheck);

         $no_of_data = mysqli_num_rows($resultCheck);

         if($user_password!=$confirm_password){
         	$message="Password doesn't match";
         }

         else if($no_of_data){
         	$message = "Already Register with this email!!";
         }

         else if($flag==1){
         	$message = "Please insert valid phone number!!";
         }



         else{

         	$user_password = md5($_POST["password"]);
            $sqlInsert = 'INSERT INTO user (user_name,user_email,user_phone,user_password,status,created_data,updated_date)
            VALUES ("'.$name.'","'.$email.'","'.$user_phone.'","'.$user_password.'",2,"'.$currentDate.'","'.$currentDate.'")';

            
            $resultInsert = mysqli_query($link, $sqlInsert);
            header('Location:logIn.php');
            
            
            
         }

    }


    include 'connection_end.php';


  
    

?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
	  var check = function() {
      if (document.getElementById('password').value ==
          document.getElementById('confirmpassword').value && document.getElementById('confirmpassword').value!="") {
          document.getElementById('message').style.color = 'green';
          document.getElementById('message').innerHTML = 'Matching';
      } else {
      		document.getElementById('message').style.color = 'red';
          document.getElementById('message').innerHTML = 'Not Matching';
      }
     }
  
    </script>
</head>
<body>
	<?php include 'header.php'; ?>

	<div class="container" style="padding-bottom: 50px">
		<h5 style="text-align: center; padding-top: 50px ; font-size: 30px">Create An Account</h5>
		

		<div class="row justify-content-center">
			<div class="col-md-6 " >
				<div>
					<hr class="bg-dark" style="height: .5px">
					<div align="center" style="color: red ; padding-bottom: 10px"><?php echo $message ;?></div>
					<form method="POST">

						<div class="form-group mb-3">
							<label for="name" style="font-weight: bold;">Name:</label>
							<input type="text" name="name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)"  class="form-control" placeholder="Enter Your Name" required>
							
						</div>
						
						<div class="form-group mb-3">
							<label for="email" style="font-weight: bold;">Email:</label>
						<input type="email" name="email"  class="form-control" placeholder="Enter your email" required>
						</div>

						<div class="form-group mb-3">
							<label for="phone" style="font-weight: bold;" >Phone:</label>
							<input type="text" name="phone" onkeypress="return (event.charCode > 47 && event.charCode < 58)" class="form-control" placeholder="Enter Your Phone Number">
						</div>

						<div class="form-group mb-3">
							<label for="message" style="font-weight: bold;">Password:</label>
							<input type="password" class="form-control"  name="password" id ="password" onkeyup='check();' placeholder="Enter Password" required>
						</div>

						<div class="form-group mb-3">
							<label for="message" style="font-weight: bold;">Confirm Password:</label>
							<input type="password" class="form-control" name="confirmpassword" id ="confirmpassword" onkeyup='check();'  placeholder="Re Enter Password" required>
							<span id='message'></span>
						</div>
						
						<div class="form-group mb-3">
							<input type="submit" style="background-color: skyblue ; border-color: skyblue" class="form-control btn btn-success" name="submit" value="submit">
						</div>

						
					</form>
				</div>
			</div>
		</div>

		


	</div>



	<?php include 'footer.php'; ?>



</body>
</html>