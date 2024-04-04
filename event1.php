<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- New Navigation bar -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="event1.css">
    <link rel="stylesheet" href="style.css">

        <?php

          include('db-connection.php');

        ?>

</head>
<body>

  <div class="loader-content">
    <div class="loader" id="loader">
      <div class="orbe" style="--index: 0"></div>
      <div class="orbe" style="--index: 1"></div>
      <div class="orbe" style="--index: 2"></div>
      <div class="orbe" style="--index: 3"></div>
      <div class="orbe" style="--index: 4"></div>
    </div>
  </div>

    <div id="content" style="visibility: hidden;">
      <div class="image">
        <img src="assets/md1.jpg" alt="Morphata Dargah" width="300px">
      </div>
  
     <nav>
      <div class="navbar">
        <i class='bx bx-menu'></i>
        <div class="logo"><a href="index.php"><img src="assets/MD.png" class="logo" height="90px" width="90px"></a></div>
        <div class="nav-links">
          <div class="sidebar-logo">
            <span class="logo-name">
              <a href="index.php">
                <font style="text-decoration: none; color: white;">Morphata</font>
              </a>
            </span>
            <i class='bx bx-x' ></i>
          </div>
          <ul class="links">
            <li><a href="aboutus.php">ABOUT</a></li>
            <li>
              <a href="#">KHIDMAT</a>
              <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
              <ul class="htmlCss-sub-menu sub-menu">
                <li><a href="khidmat.php">Loban Pesh Karna</a></li>
                <li><a href="churag.php">Chirga Roshnayi</a></li>
                <li><a href="chadar.php">Chadar Pesh Karna</a></li>
                <li><a href="flower.php">Flower Pesh Karna</a></li>
                <li><a href="dargah.php">Dargah Vyavashtapan</a></li>
                <li><a href="attar.php">Attar Pesh Karna</a></li>
                <li><a href="langar.php">Langar Pesh Karna</a></li>
                <li><a href="murad.php">Murad Puri Karna</a></li>
                <!-- <li class="more">
                  <span><a href="#">Events</a>
                  <i class='bx bxs-chevron-right arrow more-arrow'></i>
                </span>
                  <ul class="more-sub-menu sub-menu">
                    <li><a href="#">Neumorphism</a></li>
                    <li><a href="#">Pre-loader</a></li>
                    <li><a href="#">Glassmorphism</a></li>
                  </ul>
                </li> -->
              </ul>
            </li>
            <li>
              <a href="#">EVENTS</a>
              <i class='bx bxs-chevron-down js-arrow arrow '></i>
              <ul class="htmlCss-sub-menu sub-menu">
                <li><a href="event.php">Urus</a></li>
                <li><a href="event1.php">Jashne-E.Sama Mehfil</a></li>
              </ul>
            </li>
            <li>
              <a href="#">GALLERY</a>
              <i class='bx bxs-chevron-down js-arrow arrow '></i>
              <ul class="htmlCss-sub-menu sub-menu">
                <li><a href="gallery.php">Photos</a></li>
                <li><a href="gallery1.php">Videos</a></li>
              </ul>
            </li>
            <li><a href="contact.php">CONTACT US</a></li>
          </ul>
        </div>
        <!-- <div class="search-box">
          <i class='bx bx-search'></i>
          <div class="input-box">
            <input type="text" placeholder="Search...">
          </div>
        </div> -->
        <!-- <li> -->
          <a href="donation_form.php">
            <button>DONATE NOW!
            </button>
          </a>
      <!-- </li> -->
      </div>
    </nav>

    <script>
        // search-box open close js code
      let navbar = document.querySelector(".navbar");
      let searchBox = document.querySelector(".search-box .bx-search");
      // let searchBoxCancel = document.querySelector(".search-box .bx-x");
      
      navbar.addEventListener("click", ()=>{
      navbar.classList.toggle("showInput");
      if(navbar.classList.contains("showInput")){
        searchBox.classList.replace("bx-search" ,"bx-x");
      }else {
        searchBox.classList.replace("bx-x" ,"bx-search");
      }
      });
      
      // sidebar open close js code
      let navLinks = document.querySelector(".nav-links");
      let menuOpenBtn = document.querySelector(".navbar .bx-menu");
      let menuCloseBtn = document.querySelector(".nav-links .bx-x");
      menuOpenBtn.onclick = function() {
      navLinks.style.left = "0";
      }
      menuCloseBtn.onclick = function() {
      navLinks.style.left = "-100%";
      }
      
      
      // sidebar submenu open close js code
      let htmlcssArrow = document.querySelector(".htmlcss-arrow");
      htmlcssArrow.onclick = function() {
      navLinks.classList.toggle("show1");
      }
      let moreArrow = document.querySelector(".more-arrow");
      moreArrow.onclick = function() {
      navLinks.classList.toggle("show2");
      }
      let jsArrow = document.querySelector(".js-arrow");
      jsArrow.onclick = function() {
      navLinks.classList.toggle("show3");
      }
      </script>

      <h1>Jashne-E.Sama Mehfil GALLERY</h1>

      <div class="Jashne">

          <?php

            $query = "SELECT * FROM `mehfil`";
            $result = mysqli_query($con, $query);

            if($result){
            while ($row = mysqli_fetch_array($result)) {

              $imagePath = "videos/" . $row['Video'];
              if (is_file($imagePath)) :

          ?>

          <div class="video-card">
            <video controls>
                <source src="<?php echo $imagePath; ?>" type="video/mp4">
                <?php else : ?>
                Your browser does not support the video tag.
                <p>Video not found: <?php echo $imagePath; ?></p>
                <?php endif; ?>
            </video>
          </div>

          <?php

              }
            } else{
              echo "Query failed: " . mysqli_error($con);
            }
            
          ?>

          <iframe width="450" height="280" src="https://www.youtube.com/embed/MAUfjxw5dY8" title="Kalaam-- Aalam - Mehfil-e-Sama @100th BABA TAJUDDIN(R.A) URS Nagpur Shareef" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            
          <iframe width="450" height="280" src="https://www.youtube.com/embed/QYM2b9IVY4M" title="Yaha Mangle Tu Milega Sab Mehfile Sama At Khanqahe Qattaliya Nagpur Urs Baba Tajuddin R.A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            
          <iframe width="450" height="280" src="https://www.youtube.com/embed/uVodxAL48-Q" title="MEHFIL-E-SAMA ON 23-02-2017 AT KHANKA-E-AHMEDI (SUFI AJAZ MIYAN SHAH)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

      </div>

          

  <!-- <div style="margin: 24.5% 0 24% 0 ;"></div> -->
  <br>

  <!-- ================> Footer section start here <================== -->
  <footer class="footer">
    <a href="http://royalswebtechpvtltd.com/" target="_blank"><h3>Designed and Developed by © Royals Webtech.Pvt.Ltd</h3></a>
  </footer>

  </div>

  <script>
    function init() {
      let loading = document.getElementById("loader");
      let main_div = document.getElementById("content");

      setTimeout(() => {
        loading.style.display = "none";
        main_div.style.visibility = "visible";
      }, 3000);
    }
    init();
  </script>
  
  <!-- ================> Footer section end here <================== -->

    
</body>
</html>