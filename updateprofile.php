<?php
      
    session_start();
    $msg="";
    $msgg="";
    include 'connection_start.php';
    $id;
    $name;

    if(isset($_SESSION['user_data'])){
        $msg="none";
        $id= $_SESSION['user_data']['id'];
        $sqlCheck = "SELECT * FROM user where user_id = ".$id."";

        $resultCheck = mysqli_query($link, $sqlCheck);

        $no_of_data = mysqli_num_rows($resultCheck);

        if($no_of_data){
            $row = mysqli_fetch_assoc($resultCheck);
            $name = $row['user_name'];
            $email = $row['user_email'];
            $phone = $row['user_phone'];

        }

        
        
    }

    else{
       
        $msgg="none";
    }


    $message = "";


     if(!empty($_POST))
    {    
         $user_name  = $_POST["name"]; 
         $user_email = $_POST["email"];
         $user_phone = $_POST["phone"];

    

         $sqlCheck = "SELECT * FROM user where user_email = '".$user_email."'";

         $flag = 0;

         if(strlen($user_phone)!=11){
            $flag =1;
         }

         if(strlen($user_phone)==11){
              if($user_phone[0]!='0')
                $flag=1;

              if($user_phone[1]!='1')
                $flag=1;
         }


     

         date_default_timezone_set('ASIA/DHAKA');
         $currentDate = date('Y-m-d H:i:s');
         

         $resultCheck = mysqli_query($link, $sqlCheck);

         $no_of_data = mysqli_num_rows($resultCheck);

         if($flag==1){
            $message = "Please insert valid phone number";
         }

         else if($no_of_data==1){
               if($email!=$user_email){
                  $message="You cant use this email";
               }

               else{
                $sqlInsert = 'UPDATE user SET user_name= "'.$user_name.'", user_email="'.$user_email.'" , user_phone="'.$user_phone.'",
                updated_date="'.$currentDate.'" where user_id= '.$id.'';

               
               $resultInsert = mysqli_query($link, $sqlInsert);
               header('Location:userprofile.php');


               }

         }

         else{
            
            $sqlInsert = 'UPDATE user SET user_name= "'.$user_name.'", user_email="'.$user_email.'" , user_phone="'.$user_phone.'",
                updated_date="'.$currentDate.'" where user_id= '.$id.'';

               
             $resultInsert = mysqli_query($link, $sqlInsert);
             header('Location:userprofile.php');

        

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

    <div class="container" style="padding-bottom: 50px">
        <h5 style="text-align: center; padding-top: 50px ; font-size: 30px">Update Profile</h5>
        

        <div class="row justify-content-center">
            <div class="col-md-6" >
                <div>
                    <hr class="bg-dark" style="height: .5px">
                    <div align="center" style="color: red ; padding-bottom: 10px"><?php echo $message;?></div>
                    <form method="POST">

                        <div class="form-group mb-3">
                            <label for="name" style="font-weight: bold;">Name:</label>
                            <input type="text" name="name" id="id1" class="form-control" placeholder="Enter Your Name"  
                          onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)"  required>
                            
                           <script type="text/javascript">
                              document.getElementById("id1").value = '<?php echo $name;?>';
                          </script>
                            
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="email" style="font-weight: bold;">Email:</label>
                        <input type="email" name="email" value=<?php echo $email; ?>   class="form-control" placeholder="Enter your email" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="phone" style="font-weight: bold;" >Phone:</label>
                            <input type="text" value=<?php echo $phone; ?> name="phone" onkeypress="return (event.charCode > 47 && event.charCode < 58)" class="form-control" placeholder="Enter Your Phone Number">
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
