<?php
    
    
    session_start();
    $msg="";
    $msgg="";
    include 'connection_start.php';

    $id;

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



    include 'connection_end.php';

?>

<!DOCTYPE html>
<html>
<head>
    <style>
        .inner{
            font-size: 25px;
        }
    </style>
    
</head>
<body>

    <?php include 'header.php'; ?>

    <div class="container" style="padding-bottom: 50px">
        <h5 class="xx" style="text-align: center; padding-top: 50px ; font-size: 40px ; padding-bottom: 0px ; margin-bottom: 0px"><?php echo $name;?>'s Profile
        </h5>
        <div class="row justify-content-center">
            <div class="col-md-6">
            <div>
                    <hr class="bg-dark" style="height: .5px">
                    <form>
                        <div class="form-group">
                            <label for="name" style="font-weight: bold;"> <h5>Name : </h5> </label>
                            <label for="name" class="inner" > <?php echo $name; ?> </label>
                            
                        </div>

                        <div class="form-group">
                            <label for="name" style="font-weight: bold;"> <h5>Email : </h5> </label>
                            <label for="name" class="inner" > <?php echo $email; ?> </label>
                            
                        </div>

                        <div class="form-group">
                            <label for="name" style="font-weight: bold;"> <h5>Phone : </h5> </label>
                            <label for="name" class="inner" > <?php echo $phone; ?> </label>
                            
                        </div>
                    </form>

                    
                </div>


                
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <a href="updateprofile.php" style="font-size: 25px ; font-weight: bold; text-align: center;">Update Profile.</a>
            </div>
        </div>
        

    </div>
    
    

    <?php include 'footer.php'; ?>

    

</body>
</html>