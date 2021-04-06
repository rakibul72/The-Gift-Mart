<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	


	<style>
		.loginx{
          display : <?php echo $msg; ?>;
      }

      .uplo{
      	display : <?php echo $msgg; ?>;
      }
	</style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
	<a class="navbar-brand" href="homepage.php" style="color: white">The Gift Mart</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto" >
			<li class="nav-item">
				<a class="nav-link" href="homepage.php" style="color: white ; padding-right: 20px ; font-weight: bold;">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="allProducts.php" style="color: white ; padding-right: 20px ; font-weight: bold;">Product</a>
			</li>

			<li class="nav-item uplo">
				<a class="nav-link" href="privateProducts.php" style="color: white ; padding-right: 20px ; font-weight: bold;">ExclusiveProduct</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="contactUs.php" style="color: white ; padding-right: 20px ; font-weight: bold">Contact Us</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="aboutUs.php" style="color: white ; padding-right: 20px ; font-weight: bold">About Us</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="ourTeam.php" style="color: white ; padding-right: 20px ; font-weight: bold;">Our Team</a>
			</li>
			<li class="nav-item loginx" >
				<a class="nav-link" href="logIn.php" style="color: white ; padding-right: 20px ; font-weight: bold;">Log In
				<i class="fa fa-sign-in mr-3" aria-hidden="true"></i>
				</a>
			</li>

			<li class="nav-item uplo" >
				<a class="nav-link" href="userprofile.php" style="color: white ; padding-right: 20px ; font-weight: bold;">UserProfile</a>
			</li>

			<li class="nav-item uplo" >
				<a class="nav-link" href="logout.php" style="color: white ; padding-right: 20px ; font-weight: bold;">LogOut
                <i class="fa fa-sign-out mr-3" aria-hidden="true"></i>
				</a>

			</li>
		</ul>
	</div>
</nav>
</body>
</html>
