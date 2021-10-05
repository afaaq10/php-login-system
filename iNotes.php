<?php
$server_name='localhost';
$user_name='root';
$password='';
$database="afaaq";

$conn=mysqli_connect($server_name,$user_name,$password,$database);

if (!$conn) {
  die(' <br><b>sorry could not connect due to</b> '.mysqli_connect_error());
} 


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
        <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">






    </head>

    <body>

        <!-- Button trigger modal
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
            Launch demo modal
        </button> -->

        <!-- Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/project/iNotes.php" method="post">
                            <div class="mb-3">
                                <label for="edittitle" class="form-label">Title</label>
                                <input type="text" class="form-control" id="edittitle" name="edittitle" placeholder="Add title">
                            </div>
                            <div class="mb-3">
                                <label for="editdescription" class="form-label">Description</label>
                                <textarea class="form-control" id="editdescription" name="editdescription" rows="3"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="#">Action</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Another action</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="container mt-5">
            <form action="/project/iNotes.php" method="post">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Add title">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
        <div class="container mt-4">



            <?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $title=$_POST['title'];
    $description=$_POST['description'];
   

$insert="INSERT INTO `new3_table` ( `title`, `description`) VALUES ( '$title', '$description')";
$res2= mysqli_query($conn,$insert);
if ($res2) {
    
} else {
    echo ' '.mysqli_error($conn);
}
}


?>

                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Actions</th>
                        </tr>

                    </thead>
                    <tbody>


                        <?php
      $disp="SELECT * FROM `new3_table`";
      $query=mysqli_query($conn,$disp);
      $id=0;
      while($fetch=mysqli_fetch_assoc($query)){
          $id++;
     

      
      
      echo "  <tr>
      <th scope='row'>".$id."</th>
      <td>".$fetch['title']."</td>
      <td>".$fetch['description']."</td>
      <td>".'<button class="btn btn-sm btn-primary edit">Edit</button>'."</td>
    </tr>";
}
      
?>

                    </tbody>
                </table>

        </div>





        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
            crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#myTable').DataTable();
            });
        </script>

        <script>

            x = document.getElementsByClassName('edit');
            Array.from(x).forEach(element => {
                element.addEventListener('click', (e) => {
                    y = e.target.parentNode.parentNode;
                    title = y.getElementsByTagName('td')[0].innerText;
                    desc = y.getElementsByTagName('td')[1].innerText;
                    edittitle.value = title;
                    editdescription.value = desc;
                    var myModal = new bootstrap.Modal(document.getElementById('editModal'), {
                        keyboard: false
                    })
                    myModal.toggle();

                })

            });

        </script>


    </body>

    </html>