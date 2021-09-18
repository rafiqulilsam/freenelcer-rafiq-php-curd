<?php
include_once("config.php");


$data = mysqli_query($mysqli,"SELECT * FROM user");

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
    <div class="container">
      <div class="row mt-3">
        <div class="col-md-8 col-offset-2">
          <a href="add.php"><button class="btn btn-success" type="submit">Add New</button></a>
          <table class="table table-hover">
            <thead>
              <tr>
                <td>#</td>
                <td>Name</td>
                <td>Email</td>
                <td>Action</td>
              </tr>
            </thead>
            <tbody>
              <?php 
              $i;
              while($result = mysqli_fetch_array($data)) { $i++; ?>
                <tr>
                  <td><?= $i; ?></td>
                  <td><?= $result['name']; ?></td>
                  <td><?= $result['email']; ?></td>
                  <td>
                    <a href="edit.php?id=<?= $result['id'] ?>"><input type="submit" name="edit" value="Edit" class="btn btn-primary btn-sm"></a>
                    <a href="delete.php?id=<?= $result['id'] ?>"><input type="submit" onclick="return confirm('Are you sure to delete!')" name="edit" value="Delete" class="btn btn-danger btn-sm"></a>
                  </td>
                </tr>
              <?php  }
              ?>
              
            </tbody>          
          </table>
        </div>
      </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>