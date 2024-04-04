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
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php

      include('db_connection.php');

    ?>

  </head>
  <body>


    <?php include("header.php");?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            
            
            
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <a href="add_chirag.php">
                        <button style="background-color: green; color: white; border-radius: 5px; font-weight: bold; border-width: 0cap; height: 30px; float: right;">
                            ADD CONTENT
                        </button>
                    </a>
                    <h4 class="card-title">Chirag Information</h4>
                
                    </p>

                    <form method="post" enctype="multipart/form-data">
                      <?php
                        $dis = mysqli_query($con, "SELECT * FROM chirag");

                  if($dis){
                      
                    echo '<table class="table table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Image</th>
                          <th>Image Text</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>';

                      while($row = mysqli_fetch_array($dis)){
                        echo "<tr>";
                          echo "<td>"; echo $row['ID']; echo "</td>";
                          echo "<td>";?><img src="image/<?php echo $row['Image'];?>"> <?php echo "</td>";
                          echo "<td>"; echo $row['Text']; echo "</td>";
                        echo "<td>";
                        ?>
                    </form>
                          <form method="post" action="del_chirag.php">
                              <input type="hidden" name="delete_id" value="<?php echo $row['ID']; ?>">
                              <button type="submit" name="delete_btn" onclick="return confirmDelete(<?php echo $row['ID']; ?>)" style="background-color: red; color: white; padding: 4px 10px; border: none; border-radius: 5px; margin-right: 10px; height: 26px; width: 60px"><i class="fa-solid fa-trash"></i></button>
                              <!-- <svg xmlns="http://www.w3.org/2000/svg" name="delete_btn" x="0px" y="0px" width="30" height="30" viewBox="0,0,256,256">
<g fill="#f34403" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" onclick="confirmDelete(<?php echo $row['ID']; ?>)" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(10.66667,10.66667)"><path d="M10,2l-1,1h-4c-0.6,0 -1,0.4 -1,1c0,0.6 0.4,1 1,1h2h10h2c0.6,0 1,-0.4 1,-1c0,-0.6 -0.4,-1 -1,-1h-4l-1,-1zM5,7v13c0,1.1 0.9,2 2,2h10c1.1,0 2,-0.9 2,-2v-13zM9,9c0.6,0 1,0.4 1,1v9c0,0.6 -0.4,1 -1,1c-0.6,0 -1,-0.4 -1,-1v-9c0,-0.6 0.4,-1 1,-1zM15,9c0.6,0 1,0.4 1,1v9c0,0.6 -0.4,1 -1,1c-0.6,0 -1,-0.4 -1,-1v-9c0,-0.6 0.4,-1 1,-1z"></path></g></g>
</svg> -->
                          </form>
                      </td>
                      <script>

                        function confirmDelete(id)
                          {
                            var confirmDelete = confirm("Are you sure you want to delete this entry?");
                            if (confirmDelete)
                            {
                                document.getElementById('deleteForm' + id).submit();
                            } 
                            else {
                              return false;
                            }
                          }

                      </script>
                      </tr>
                    <?php
                      }
                        
                      echo "</tbody>
                    </table>";
                  } else{
                    echo "Error: " . mysqli_error($con);
                  }
                  ?>
                  </div>
                </div>
            </div>
            
            
          </div>
          <?php include("footer.php");?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      
    <!-- container-scroller -->
    
    <!-- End custom js for this page -->
  </body>
</html>