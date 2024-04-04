<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- New navigation bar -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Responsive Contact Us Page Design using Html CSS</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="contact.css">

    <link rel="stylesheet" href="style.css">

    <?php

      include("db-connection.php");

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
              <li><a href="chirag.php">Chirga Roshnayi</a></li>
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
    
    <br><br>

    <h1 >
      Contact Us
    </h1>

    <section id="section-wrapper">
        <div class="box-wrapper">
            <div class="info-wrap">
                <h2 class="info-title">Contact Information</h2>
                <h3 class="info-sub-title">Fill up the form and our Team will get back to you within 24 hours</h3>
                <ul class="info-details">
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <span>Phone:</span> <a href="tel:+ 1235 2355 98">+ 1235 2355 98</a>
                    </li>
                    <li>
                        <i class="fas fa-paper-plane"></i>
                        <span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a>
                    </li>
                    <li>
                        <i class="fas fa-globe"></i>
                        <span>Website:</span> <a href="#">yoursite.com</a>
                    </li>
                </ul>
                <ul class="social-icons">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
            <div class="form-wrap">
                <form method="post">
                    <h2 class="form-title">Send us a message</h2>
                    <div class="form-fields">
                        <div class="form-group">
                            <input type="text" class="fname" placeholder="First Name" name="fname" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="lname" placeholder="Last Name" name="lname" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="email" placeholder="Mail" name="email" required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="phone" placeholder="Phone" name="number" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="" placeholder="Write your message" name="message" required></textarea>
                        </div>
                    </div>
                    <input type="submit" value="Send Message" class="submit-button" name="submit1">
                </form>

                <?php
    
                    if (isset($_POST['submit2'])) {
                    // Validating Firstname and Lastname to allow only letters
                    $firstname = $_POST['fname'];
                    $lastname = $_POST['lname'];
                    $number = $_POST['number'];
                    
                        if (!preg_match("/^[a-zA-Z]+$/", $firstname) && !preg_match("/^[a-zA-Z]+$/", $lastname)) {
                            echo "Error: Firstname and Lastname should only contain letters.";
                        } else {
                            
                            $email = $_POST['email'];
                            
                            if (!preg_match("/^[a-zA-Z0-9_.]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/", $email)) {
                                echo "Error: Invalid Email format.";
                            } else {
                                
                                $message = $_POST['message'];

                                // Perform database insertion here
                                mysqli_query($con, "INSERT INTO `contact_us`(`Firstname`, `Lastname`, `Email`, `Number`, `Message`) VALUES 
                                    ('$firstname','$lastname','$email','$number','$message')");
                                
                                echo "Form submitted successfully!";
                            }
                        }
                    }

                ?>

            </div>
        </div>
    </section>

    <br><br><br><br>

    <!-- ================> Footer section start here <================== -->
<footer class="footer">
  <a href="http://royalswebtechpvtltd.com/"><h3>Designed and Developed by © Royals Webtech.Pvt.Ltd</h3></a>
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