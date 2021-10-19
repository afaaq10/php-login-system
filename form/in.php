<!doctype html>
<html lang="en">

<body>



	<?php
	 include 'notes.php';
  include 'header.php';
 
 
                
  ?>

	<!-- // carousel here -->
	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true"
			 aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src=" https://source.unsplash.com/1200x400/?coding,python " class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src=" https://source.unsplash.com/1200x400/?coding,laptop " class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src=" https://source.unsplash.com/1200x400/?coding,hardware " class="d-block w-100" alt="...">
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>




	<div class="container mt-5">
		<h2 class="text-center">iDiscuss Browse categories</h2>
		<div class="row">

			<!-- // query and connecting to database -->
			<?php
           
            $query="SELECT * FROM `user2`";
            $result=mysqli_query($conn,$query);
            
            while($row=mysqli_fetch_assoc($result)){
                
                $cat=$row['category'];
                $desc=$row['description'];
                $id=$row['id'];
          
               echo ' <div class="col-md-4 my-3">
				<div class="card" style="width: 18rem;">
					<img src="https://source.unsplash.com/1600x900/?'.$cat.',coding" class="card-img-top" alt="images">
					<div class="card-body">
						<h5 class="card-title"><a href="threadlist.php?catid='.$id.' ">'.$cat.'</a></h5>
						<p class="card-text">'.substr($desc,0,20).'...</p>
						<a href="threadlist.php?catid='.$id.'" class="btn btn-primary">Explore</a>
					</div>
				</div>
			</div>';

            }

             ?>



			<!-- // categories here -->



		</div>
	</div>



	<?php
 
  include 'footer.php';
  ?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
	 crossorigin="anonymous"></script>

</body>

</html>