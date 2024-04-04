<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>

    <?php

      header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
      header("Cache-Control: post-check=0, pre-check=0", false);
      header("Pragma: no-cache");

    ?>
    
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--New stylesheet-->
    

    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <?php

      include('db_connection.php');

    ?>

  </head>
  <body>
    
  <?php

      include("header.php")

  ?>

<div class="main-panel">
  <div class="content-wrapper" style="display: flex; justify-content: center;">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card" >
        <div class="card-body">
          <h4 class="card-title">Add Loban Service</h4>
          <p class="card-description">Loban Form </p>
          <form class="forms-sample" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleInputUsername1">image</label>
              <input type="file" name="image" class="form-control" id="exampleInputUsername1" placeholder="Select Image">

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Image Text</label>
              <input type="text" name="imagetext" class="form-control" id="exampleInputEmail1" placeholder="Image Text Here">
            </div>
                      <button type="submit" name="submit2" class="btn btn-gradient-primary me-2">Submit</button>
                      <button class="btn btn-light"><a href="loban.php" style="text-decoration: none; color: black;">Cancel</a></button>
                    </form>

                    <?php
                      if (isset($_POST['submit2'])) {

                          if (isset($_FILES['image'])) {
                              $file_name = $_FILES['image']['name'];
                              $file_size = $_FILES['image']['size'];
                              $file_tmp = $_FILES['image']['tmp_name'];
                              $file_type = $_FILES['image']['type'];
                              move_uploaded_file($file_tmp, "image/" . $file_name);
                          }

                          $query = mysqli_query($con, "SELECT * FROM `loban` WHERE `Image` = '$file_name'");
                          $count = mysqli_num_rows($query);

                          if($count > 0)
                          {
                              //$file_name=$_FILES['videos']['name'];
                              //$_SESSION['status']="Video already exists".$file_name;
                              echo "This file already exists";
                          }
                          else{
                            mysqli_query($con, "INSERT INTO `loban`(`Image`, `Image-Text`) VALUES ('$file_name','$_POST[imagetext]')");
                            exit();
                          }
                          
                      }
                    ?>

                  </div>
                </div>
              </div>
  </div>
            
    <?php include("footer.php");?>
</div>
  </body>
</html>
