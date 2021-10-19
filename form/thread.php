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
  $id=$_GET['threadid']; 
  echo $id;
  $query="SELECT * FROM `thread2` WHERE thread_id='$id'";
  $result=mysqli_query($conn,$query);
//  if($result){
//      echo 'true';
//  }
//  else{
//      echo 'false';
//  }
  while($row=mysqli_fetch_assoc($result)){
   
      $title=$row['thread_title'];
	  $desc=$row['thread_description'];
	  $user_id=$row['user_id'];
	  $thread_id=$row['user_id'];
	  
  $qu2="SELECT * FROM `usersign` WHERE sno='$user_id'";
  $result2=mysqli_query($conn,$qu2);
  $row2=mysqli_fetch_assoc($result2);

  $qu3="SELECT * FROM `usersign` WHERE sno='$thread_id'";
  $result3=mysqli_query($conn,$qu3);
  $row3=mysqli_fetch_assoc($result3);


    //   $id=$row['id']; 
  }
    ?>
	<?php

$method=$_SERVER['REQUEST_METHOD'];
$showalert=false;
if($method=='POST'){
	$comment=$_POST['comment'];

	


	$query="INSERT INTO `comments` (`comment_text`, `thread_id`, `thread_time`, `comment_by`) VALUES ( '$comment', '$id', current_timestamp(), '0')";
	$result=mysqli_query($conn,$query);
	$showalert=true;
}
if($showalert){
   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  Your comment has been added!
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

}
	   
	   ?>





	<div class="container mt-5">

		<div class="alert alert-success" role="alert">
			<h4 class="alert-heading">Well done!</h4>
			<p>Here is the result</p>
			<?php echo $title; ?>alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with
			this kind of content.</p>
			<hr>

			<?php echo $desc; ?>utilities to keep things nice and tidy.</p>
			<p>
				<b>Posted by :
					<?php
					 if($row3['user_email']){
echo $row3['user_email'];
					}
					else{
					echo 'error';	
					}
					
					?>
				</b>
			</p>





		</div>
		<?php
		
	
		if(isset($_SESSION['loggedin']) && $_SESSION["loggedin"]=='true'){
		echo '<div class="container">
			<h2>Post a comment</h2>

			<form action="'. $_SERVER['REQUEST_URI'].'" method="POST">

				<div class="form-floating ">
					<textarea class="form-control " placeholder="Leave a comment here " id="comment" name="comment" style="height: 100px "></textarea>
					<label for="title ">Type your comment</label>
					
				</div>
				<button type="submit " class="btn btn-primary mt-2 ">Submit</button>
			</form>
		</div>';
		}


		else{

			echo '<div class="container">
			<p>You are not logged in</p>
			<div>';
		}


		?>



		<h2>Discussions</h2>

		<?php 
  $id=$_GET['threadid'];
  $query="SELECT * FROM `comments` WHERE thread_id='$id'";
  $result=mysqli_query($conn,$query);
  $showalert=false;
//  if($result){
//      echo 'true';
//  }
//  else{
//      echo 'false';
//  }
  while($row=mysqli_fetch_assoc($result)){
    $showalert=true;
      $comment_id=$row['comment_id'];
	  $comment_text=$row['comment_text'];
	  $comment_time=$row['thread_time'];
	
	  
	  $qu2="SELECT * FROM `usersign` WHERE sno='$comment_id'";
	  $result2=mysqli_query($conn,$qu2);
	  $row2=mysqli_fetch_assoc($result2);

    //   $id=$row['id']; 
echo '	<div class="d-flex">

<div class="flex-shrink-0">
    <img src="img/image.jpg" width="54px" alt="...">
</div>

<div class="flex-grow-1 ms-1">
<p class="fw-bold my-0">'.$row2['user_email'].' at '. $comment_time.'</p>
    
    '.$comment_text.'
</div>

</div>';


  }
     ?>




		<!-- <div class="d-flex">

			<div class="flex-shrink-0">
				<img src="img/image.jpg" width="54px" alt="...">
			</div>
			<div class="flex-grow-1 ms-1">
				<a href="">Python</a>
				<p>I have a serious problem with editing</p>
			</div>
		</div>


		<div class="d-flex">

			<div class="flex-shrink-0">
				<img src="img/image.jpg" width="54px" alt="...">
			</div>
			<div class="flex-grow-1 ms-1">
				<a href="">Python</a>
				<p>I have a serious problem with editing</p>
			</div>
		</div> -->








	</div>


	<?php
 
      include 'footer.php';
  ?>


</body>

</html>