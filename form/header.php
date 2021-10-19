<?php
session_start();
?>

<!doctype html>


<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
	 crossorigin="anonymous">

	<title>Hello, world!</title>
</head>

<body>



	<?php
	
	include 'notes.php';

   
echo	'<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="/project/form/in.php">iForm</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
			 aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="in.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.php">About</a>
					</li>';

				





	$qu2="SELECT category,id FROM `user2` LIMIT 3"; $result2=mysqli_query($conn,$qu2); while($row2=mysqli_fetch_assoc($result2)){
	echo '
	<a class="dropdown-item" href="threadlist.php?catid='.$row2[" id "].'"> '.$row2["category"].'</a>
	</li>'; } if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=='true'){ echo '
	<form class="d-flex">
		<p class="text-light my-2 mx-2">welcome '.$_SESSION['useremail'].'</p>
		<a href="logout.php" class="btn btn-success" type="submit">Logout</a>

	</form>'; } else{ echo '
	<div class="btn btn-outline-secondary mx-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</div>
	<div class="btn btn-outline-secondary mx-2" data-bs-toggle="modal" data-bs-target="#signupModal">Signup</div>
	</div>'; } echo '
	</div>
	</nav>'; ?>
	<?php
  include 'login.php';
  include 'signup.php';
  
  if(isset($_GET['signupsuccess'])&& $_GET['signupsuccess']=='true'){
echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>You can login now</strong>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }
  ?>


	<!-- // new oner  -->





	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
	 crossorigin="anonymous"></script>


</body>

</html>