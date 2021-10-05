<?php
$server_name='localhost';
$user_name='root';
$password='';
$database="mynotes";

$conn=mysqli_connect($server_name,$user_name,$password,$database);
$ins=false;
if (!$conn) {
  die(' <br><b>sorry could not connect due to</b> '.mysqli_connect_error());
} else 
{



  if ($_SERVER['REQUEST_METHOD']=='POST') {

    if(isset($_POST['snoedit'])){
        $note=$_POST['noteEdit'];
        $description=$_POST['descriptionEdit'];
        $id=$_POST['snoedit'];
        $insert="UPDATE `jotting` SET `note` = '$note', `description` = '$description' WHERE `jotting`.`id` = $id";
        $res2= mysqli_query($conn,$insert);
    }
  else{
      $note=$_POST['note'];
      $description=$_POST['description'];
      $insert="INSERT INTO `jotting` ( `note`, `description`) VALUES ('$note', '$description')";
      $res2= mysqli_query($conn,$insert);
  }
  if ($res2) {
      $ins=true;
  } else {
      echo ' '.mysqli_error($conn);
  }
  
  }

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
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.2/css/jquery.dataTables.min.css">
    <title>iNotes</title>

  </head>

  <body>
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
  Launch demo modal
</button> -->

    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModaLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editModaLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/project/boo.php" method="post">
              <input type="hidden" name="snoedit" id="snoedit">
              <div class="mb-3">
                <label for="noteEdit" class="form-label">Note</label>
                <input type="text" class="form-control" id="noteEdit" name="noteEdit" aria-describedby="emailHelp">

              </div>
              <div class="form-floating">
                <textarea class="form-control" placeholder="Add description" id="descriptionEdit" name="descriptionEdit" style="height: 100px"></textarea>
                <label for="descriptionEdit">Description</label>

                <button type="submit" class="btn btn-primary mt-2">Update Note</button>
              </div>




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
        <a class="navbar-brand" href="#">iNotes</a>
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

    <div class="container mt-2">
      <form action="/project/boo.php" method="post">
        <div class="mb-3">
          <label for="note" class="form-label">Note</label>
          <input type="text" class="form-control" id="note" name="note" aria-describedby="emailHelp">

        </div>
        <div class="form-floating">
          <textarea class="form-control" placeholder="Add description" id="description" name="description" style="height: 100px"></textarea>
          <label for="description">Description</label>

          <button type="submit" class="btn btn-primary mt-2 mb-3">Submit</button>
        </div>




      </form>

      <div class="container mt-2">

        <?php
if($ins){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
   <strong>Item has been inserted</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div> ';
}


?>
      </div>
      <table class="table" id="myTable">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">note</th>
            <th scope="col">description</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>


          <?php
  $disp="SELECT * FROM `jotting`";
  $query=mysqli_query($conn,$disp);
  $id=0;
  
  while($fetch=mysqli_fetch_assoc($query)){
    $id++;
 echo "  <tr>
 <th scope='row'>".$id."</th>
 <td>".$fetch['note']."</td>
 <td>".$fetch['description']."</td>
 <td><button class=' edit btn btn-sm btn-primary' id=".$fetch['id'].">Edit</button> <button class='btn btn-sm btn-primary'>Delete</button></td>
</tr>";
  }
   
   
   ?>

        </tbody>
      </table>













      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>

      <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
      <script src="//cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
      <script>
        $(document).ready(function () {
          $('#myTable').DataTable();
        });




      </script>
      <script>
        edits = document.getElementsByClassName('edit');

        Array.from(edits).forEach((element) => {
          element.addEventListener('click', (e) => {


            tr = e.target.parentNode.parentNode;
            note = tr.getElementsByTagName("td")[0].innerText;
            description = tr.getElementsByTagName("td")[1].innerText;
            console.log(note, description);
            noteEdit.value = note;
            descriptionEdit.value = description;
            snoedit.value = e.target.id;
            console.log(e.target.id);
            var editModal = new bootstrap.Modal(document.getElementById('editModal'), {
              keyboard: false
            })
            editModal.toggle();
          })
        });
      </script>

  </body>


  </html>