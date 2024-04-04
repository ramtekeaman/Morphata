
    <div class="container-scroller">
          
          <!-- partial:partials/_navbar.html -->
          <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
              <a class="navbar-brand brand-logo" href="index.php"><img src="image/faces/logo7.png" alt="logo" style="width: 70px;height:60px;"/></a>
              <a class="navbar-brand brand-logo-mini" href="index.php"><img src="image/faces/logo7.png" alt="logo" style="width: 50px;height:40px;"/></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
              <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
              </button>
              
              <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                
                  <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="#">
                      <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                      <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
                  </div>
                </li>
                <li class="nav-item d-none d-lg-block full-screen-link">
                  <a class="nav-link">
                    <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                  </a>
                </li>

                <!-- <li class="nav-item nav-logout d-none d-lg-block">
                  <form action="login.php" method="post">
                    <input type="hidden" name="logout" value="true">
                    <a class="nav-link" href="login.php">
                    <i class="mdi mdi-power"></i>
                  </a>
                  </form>
                </li> -->


                <li class="nav-item nav-logout d-none d-lg-block">
                  <form id="logoutForm" action="login.php" method="post">
                    <input type="hidden" name="logout" value="true">
                    <button type="submit" class="nav-link" style="border: 0cap; background-color: transparent;" onclick="return confirmLogout()">
                      <i class="mdi mdi-power"></i>
                    </button>
                  </form>
                </li>

                <script>

                  function confirmLogout() {
                    var confirmLogout = confirm("Are you sure you want to logout?");
                    if (confirmLogout) {
                      document.getElementById("logoutForm").submit();
                    }
                    else{
                      return false;
                    }
                  }

                </script>
                
              </ul>
              <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
              </button>
            </div>
          </nav>
          <!-- partial -->
          <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
              <ul class="nav">
              
                <li class="nav-item">
                  <a class="nav-link" href="index.php">
                    <span class="menu-title">Dashboard</span>
                    <i class="mdi mdi-home menu-icon"></i>
                  </a>
                </li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>

                <li class="nav-item"><a class="nav-link" href="donate.php">Donate</a></li>


                <!-- <li class="nav-item"><a class="nav-link" href="#">Services</a></li> -->
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <span class="menu-title">Khidmat</span>
                    <i class="menu-arrow"></i>
                    
                  </a>
                  <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="loban.php">Loban Peshkarna</a></li>
                      <li class="nav-item"> <a class="nav-link" href="chirag.php">Chirag Roshnayi</a></li>
                      <li class="nav-item"> <a class="nav-link" href="chadar.php">Chadar Peshkarna</a></li>
                      <li class="nav-item"> <a class="nav-link" href="flower.php">Flower Peshkarna</a></li>
                      <li class="nav-item"> <a class="nav-link" href="dargah.php">Dargah Vyavasthapan</a></li>
                      <li class="nav-item"> <a class="nav-link" href="attar.php">Attar Peshkarna</a></li>
                      <li class="nav-item"> <a class="nav-link" href="langar.php">Langar Peshkarna</a></li>
                      <li class="nav-item"> <a class="nav-link" href="murad.php">Murad Purikarna</a></li>
                    </ul>
                  </div>
                </li>


                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <span class="menu-title">Gallery</span>
                    <i class="menu-arrow"></i>
                    
                  </a>
                  <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="images.php">Images</a></li>
                      <li class="nav-item"> <a class="nav-link" href="videos.php">Videos</a></li>
                    </ul>
                  </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <span class="menu-title">Events</span>
                    <i class="menu-arrow"></i>
                    
                  </a>
                  <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="urs.php">Urs</a></li>
                      <li class="nav-item"> <a class="nav-link" href="sama-mehfil.php">Jashne-E.sama Mehfil</a></li>
                    </ul>
                  </div>
                </li>
                
                <!-- <li class="nav-item">
                  <a class="nav-link" href="pages/forms/basic_elements.html">
                    <span class="menu-title">Forms</span>
                    <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                  </a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="pages/tables/basic-table.html">
                    <span class="menu-title">Tables</span>
                    <i class="mdi mdi-table-large menu-icon"></i>
                  </a>
                </li> -->
                
              </ul>
            </nav>