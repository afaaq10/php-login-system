<!doctype html>

<html lang="en">

<head>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
	 crossorigin="anonymous">
</head>

<body>



	<?php
	include 'notes.php';
  include 'header.php';
  
  ?>


	<?php 
  $id=$_GET['catid']; 
  echo $id;
  $query="SELECT * FROM `user2` WHERE id='$id'";
  $result=mysqli_query($conn,$query);
//  if($result){
//      echo 'true';
//  }
//  else{
//      echo 'false';
//  }
  while($row=mysqli_fetch_assoc($result)){
   
      $cat_title=$row['category'];
      $cat_desc=$row['description'];
    //   $id=$row['id']; 
  }
    ?>

	<?php

 $method=$_SERVER['REQUEST_METHOD'];
 $showalert=false;
if($method=='POST'){
	 $th=$_POST['title'];
	 $td=$_POST['desc'];
	
	 $query="INSERT INTO `thread2` ( `thread_title`, `thread_description`, `cat_id`, `user_id`, `time`) VALUES ( '$th', '$td', '$id', '$sno', current_timestamp())";
	 $result=mysqli_query($conn,$query);
	 $showalert=true;
}
if($showalert){
	echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> Yor query has been inserted. Please wait until someone responds!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

}
		
		?>






	<div class="container mt-5">

		<div class="alert alert-success" role="alert">
			<h4 class="alert-heading">Well done!</h4>
			<p>Aww yeah, you successfully read this
				<?php echo $cat_title; ?>alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with
				this kind of content.</p>
			<hr>
			<p class="mb-0">Whenever you need to, be sure to use
				<?php echo $cat_desc; ?>utilities to keep things nice and tidy.</p>
		</div>





	</div>


	<div class="container">
		<h2>Start a discussion</h2>

		<?php

		if(isset($_SESSION['loggedin']) && $_SESSION["loggedin"]=='true'){

	echo '	<form action=" '. $_SERVER["REQUEST_URI"]. ' " method="POST">
			<div class="mb-3 ">
				<label for="title " class="form-label ">Be the first person to ask a question</label>
				<input type="text " class="form-control " id="title " name="title" aria-describedby="emailHelp ">
				<div id="emailHelp " class="form-text ">Keep it crisp and short.</div>
			</div>
			
			<div class="form-floating ">
				<textarea class="form-control " placeholder="Leave a comment here " id="desc" name="desc" style="height: 100px "></textarea>
				<label for="title ">Please ellaborate your query</label>
			</div>
			<button type="submit " class="btn btn-primary mt-2 ">Submit</button>
		</form>
	</div>';
		}


		else
		{ 
			echo ' <br><b>You are not logged in</b><br> '; 
		}
		 ?>









		<!-- <div class="d-flex ">

			<div class="flex-shrink-0 ">
				<img src="img/image.jpg " width="54px " alt="... ">
			</div>
			<div class="flex-grow-1 ms-1 ">
				<a href=" ">Python</a>
				<p>I have a serious problem with editing</p>
			</div>
		</div>


		<div class="d-flex ">

			<div class="flex-shrink-0 ">
				<img src="img/image.jpg " width="54px " alt="... ">
			</div>
			<div class="flex-grow-1 ms-1 ">
				<a href=" ">Python</a>
				<p>I have a serious problem with editing</p>
			</div>
		</div> -->

	</div>

	<div class="container">
		<br>
		<h2>Browse questions</h2>

		<?php 
  $id=$_GET['catid'];
  $query="SELECT * FROM `thread2` WHERE cat_id='$id'";
  $result=mysqli_query($conn,$query);
 
  
//  if($result){
//      echo 'true';
//  }
//  else{
//      echo 'false';
//  }
$noresult=true;
  while($row=mysqli_fetch_assoc($result)){
		$noresult=false;
      $thread_title=$row['thread_title'];
	  $thread_desc=$row['thread_description'];
	

    //   $id=$row['id']; 
echo '	<div class="d-flex">

<div class="flex-shrink-0">
    <img src="img/image.jpg" width="54px" alt="...">
</div>
<div class="flex-grow-1 ms-1">
    <a href="thread.php?threadid='.$id.'" class="text-dark">'.$thread_title.'</a>
    <p>'.$thread_desc.'</p>
</div>
</div>';
	}

if($noresult){


echo '<div class="alert alert-success" role="alert">

<p class="mb-0">No results found.</p>
</div>';


	}
	 ?>



		<?php
 
      include 'footer.php ';
  ?>


</body>

</html>