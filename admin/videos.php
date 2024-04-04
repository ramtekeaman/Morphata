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
                    <a href="add_videos.php">
                        <button style="background-color: green; color: white; border-radius: 5px; font-weight: bold; border-width: 0cap; height: 30px; float: right;">
                            ADD CONTENT
                        </button>
                    </a>
                    <h4 class="card-title">All Videos</h4>
                
                    </p>

                    <form method="post" enctype="multipart/form-data">
                      <?php
                        $dis = mysqli_query($con, "SELECT * FROM videos");

                  if($dis){
                      
                    echo '<table class="table table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Video</th>
                          <th>Video Text</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>';

                      while($row = mysqli_fetch_array($dis)){
                        echo "<tr>";
                          echo "<td>"; echo $row['ID']; echo "</td>";
                          echo "<td>";?><video width="50px" height="50px" controls>
                                            <source src="videos/<?php echo $row['Video'];?>" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video> 
                                        <?php echo "</td>";
                          echo "<td>"; echo $row['Video-Text']; echo "</td>";
                        echo "<td>";
                        ?>
                    </form>
                          <form method="post" action="del_videos.php">
                              <input type="hidden" name="delete_id" value="<?php echo $row['ID']; ?>">
                              <button type="submit" name="delete_btn" onclick="return confirmDelete(<?php echo $row['ID']; ?>)" style="background-color: red; color: white; padding: 4px 10px; border: none; border-radius: 5px; margin-right: 10px; height: 26px; width: 60px"><i class="fa-solid fa-trash"></i></button>
                          </form>
                      </td>
                      <script>

                        function confirmDelete(id)
                          {
                            var confirmDelete = confirm("Are you sure you want to delete this video?");
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