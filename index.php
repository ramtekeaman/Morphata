<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">

  <head>
    <meta charset="UTF-8">
   <title> Morphata Dargah </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="aboutus.css">
    <link rel="stylesheet" href="gallery.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="event.css">
    <link rel="stylesheet" href="event1.css">

    <!-- New Navigation bar -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- Boxicons CDN Link -->
    <!-- <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'> -->
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">

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

   <!-- <div class="preloader" style="background-color: rgb(63, 75, 57);">
        <div class="preloader-inner" id="loader">
                <img src="assets/mosque.png" alt="mosque" style="width: 100px; height: 100px;  border-radius: 50%; top: 60%; left: 60%; margin-top:40%;  margin-bottom: 60%; margin-left: 35%; margin-right: 65%;">
                <div class="spinner" style="position: absolute; top: 30%; left: 25%; right: 50%; bottom: 50%; border: 4px solid rgba(59, 58, 63, 0.3); border-top: 4px solid #7293a3; border-radius: 50%; width: 120px; height: 120px; margin: auto; animation: spin 1s infinite linear;"></div>
                <span></span>
        </div>
    </div> -->

   

 

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
<!-- -----------navbar section end--------------  -->


<!-- ---------- section start--------------  -->
<div class="banner">
  <div class="container">
      <p id="typing-text"></p>
  </div>
  <video autoplay muted loop poster="#" style="filter: brightness(0.4);">
      <!-- <source src="morphata.mp4" type="video/mp4"> -->
      <!-- <source src="https://firebasestorage.googleapis.com/v0/b/morphata-87cf8.appspot.com/o/Video%2Fmorphata.mp4?alt=media&token=c2049460-be35-4ad8-ae0d-0353c170d2ab" type="video/mp4"> -->
  </video>
</div>

<script>
// Define the text to be typed
const textToType = "Saaf Dil Se Usko Dil Laga Ke Mango, Murad Puri Hoogi , Wo Dene Wala Hai, Deta Hi Hai, Sirf Adab Se Rehna Hamara Kaam Hai";

// Function to simulate typing effect
function typeEffect() {
  let index = 0;
  const typingElement = document.getElementById('typing-text');
  typingElement.innerHTML = ''; // Clear existing content
  const interval = setInterval(() => {
    typingElement.innerHTML += textToType[index];
    index++;
    if (index === textToType.length) clearInterval(interval);
  }, 100); // Adjust typing speed by changing this value (milliseconds)
}

// Start the typing effect when the page loads
window.onload = typeEffect;


</script>

<!-- ----------- section end--------------  -->


<!-- -----------khidmat section start--------------  -->
<section class="khidmat" style="padding-top: 50px; margin-top: 50px;">
  <div class="section__hheader text-center">
    <h2 style="font-family:initial;background:  linear-gradient(90deg,#4e33d4,#37a239,#ba3d3d);background-clip: text;color: transparent;">What we Offer</h2>
    <p>Our Popular Services</p>
  </div>

  <div class="container1">

    <div class="card">
      <div class="header">
        <div class="image11"><img src="assets/langar1.jpg" height="250px" width="300px">
        </div>
        <div class="content">
           <span class="title"></span>
           <p class="message">Loban Pesh Karna</p>
        </div>
         <div class="actions">
           <a href="donation_form.php">
            <button class="desactivate" type="button">Donate Now</button>
           </a>
           <!-- <button class="cancel" type="button">Cancel</button> -->
        </div>
      </div>
    </div>

    <div class="card">
      <div class="header">
        <div class="image11"><img src="assets/chirag roshnayi2.jpg" height="250px" width="300px">
        </div>
        <div class="content">
           <span class="title"></span>
           <p class="message">Chirga Roshnayi</p>
        </div>
         <div class="actions">
           <a href="donation_form.php">
              <button class="desactivate" type="button">Donate Now</button>
           </a>
           <!-- <button class="cancel" type="button">Cancel</button> -->
        </div>
      </div>
    </div>

    <div class="card">
      <div class="header">
        <div class="image11"><img src="assets/chadar3.jpg" height="250px" width="300px">
        </div>
        <div class="content">
           <span class="title"></span>
           <p class="message">Chadar Pesh Karna</p>
        </div>
         <div class="actions">
           <a href="donation_form.php">
            <button class="desactivate" type="button">Donate Now</button>
           </a>
           <!-- <button class="cancel" type="button">Cancel</button> -->
        </div>
      </div>
    </div>

    <div class="card">
      <div class="header">
        <div class="image11"><img src="assets/flower pesh.jpg" height="250px" width="300px"></div>
        <div class="content">
           <span class="title"></span>
           <p class="message">Flower Pesh Karna</p>
        </div>
         <div class="actions">
          <a href="donation_form.php">
            <button class="desactivate" type="button">Donate Now</button>
          </a>
           <!-- <button class="cancel" type="button">Cancel</button> -->
        </div>
      </div>
    </div>

    <div class="card">
      <div class="header">
        <div class="image11"><img src="assets/dargah mng5.jpg" height="250px" width="300px"></div>
        <div class="content">
           <span class="title"></span>
           <p class="message">Dargah Vyavashtapan</p>
        </div>
         <div class="actions">
          <a href="donation_form.php">
            <button class="desactivate" type="button">Donate Now</button>
          </a>
           <!-- <button class="cancel" type="button">Cancel</button> -->
        </div>
      </div>
    </div>

    <div class="card">
      <div class="header">
        <div class="image11"><img src="assets/attar6.jpg" height="250px" width="300px"></div>
        <div class="content">
           <span class="title"></span>
           <p class="message">Attar Pesh Karna</p>
        </div>
         <div class="actions">
          <a href="donation_form.php">
            <button class="desactivate" type="button">Donate Now</button>
          </a>
           <!-- <button class="cancel" type="button">Cancel</button> -->
        </div>
      </div>
    </div>

    <div class="card">
      <div class="header">
        <div class="image11"><img src="assets/lungur7.jpeg" height="250px" width="300px"></div>
        <div class="content">
           <span class="title"></span>
           <p class="message">Langar Pesh Karna</p>
        </div>
         <div class="actions">
          <a href="donation_form.php">
            <button class="desactivate" type="button">Donate Now</button>
          </a>
           <!-- <button class="cancel" type="button">Cancel</button> -->
        </div>
      </div>
    </div>

    <div class="card">
      <div class="header">
        <div class="image11"><img src="assets/blanket8.webp" height="250px" width="300px"></div>
        <div class="content">
           <span class="title"></span>
           <p class="message">Murad Puri Karna</p>
        </div>
         <div class="actions">
          <a href="donation_form.php">
            <button class="desactivate" type="button">Donate Now</button>
          </a>
           <!-- <button class="cancel" type="button">Cancel</button> -->
        </div>
      </div>
    </div>

  </div>
</section>

<!-- -----------khidmat section end here--------------  -->


<!-- ---------gallery section start-------------- -->
<div></div>
<div class="section__header text-center">
  <h2 style="font-family:initial;background:  linear-gradient(90deg,#4e33d4,#37a239,#ba3d3d);background-clip: text;color: transparent;">GALLERY</h2>
  <p>Recently Most Viewed Or liked Posts</p>
  <br>
</div>
  <div>
    <div class="carousel">
      <input type="radio" name="position" />
      <input type="radio" name="position" />
      <input type="radio" name="position" checked />
      <input type="radio" name="position" />
      <input type="radio" name="position" />
      <main id="carousel">
        <div class="item"><img src="assets/image1.jpeg" width="300px" height="300px" alt=""></div>
        <div class="item"><img src="assets/image2.jpeg" width="300px" height="300px" alt=""></div>
        <div class="item"><img src="assets/image3.jpeg" width="300px" height="300px" alt=""></div>
        <div class="item"><img src="assets/image4.jpeg" width="300px" height="300px" alt=""></div>
        <div class="item"><img src="assets/image5.jpeg" width="300px" height="300px" alt=""></div>
      <main>
        
    </div>
  </div>
  <div class="button-div">
  <a href="gallery.php">
  <button class="button1"> View More
  </button>
  </a>
  </div>


<!-- ---------gallery section end-------------- -->

<!-- ----------contact section start-------------- -->

<section id="section-wrapper">
  <div class="section__header text-center">
    <h2 style="font-family:initial;background:  linear-gradient(90deg,#4e33d4,#37a239,#ba3d3d);background-clip: text;color: transparent;">Contact Us</h2>
    <p>Fill The Information.</p>
  </div>
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
                      <input type="text" class="phone" placeholder="Phone" name="number" required>
                  </div>
                  <div class="form-group">
                      <textarea name="message" id="" placeholder="Write your message" name="message" required></textarea>
                  </div>
              </div>
              <input type="submit" value="Send Message" class="submit-button" name="submit2">
          </form>

          <?php
    
              if (isset($_POST['submit2'])) {
              // Validating Firstname and Lastname to allow only letters
              $firstname = $_POST['fname'];
              $lastname = $_POST['lname'];
              
              
                  if (!preg_match("/^[a-zA-Z]+$/", $firstname) && !preg_match("/^[a-zA-Z]+$/", $lastname)) {
                      echo "Error: Firstname and Lastname should only contain letters.";
                  } else {
                      
                      $email = $_POST['email'];
                      
                      if (!preg_match("/^[a-zA-Z0-9_.]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/", $email)) {
                          echo "Error: Invalid Email format.";
                      } else {
                          
                          $message = $_POST['message'];
                          $number = $_POST['number'];

                          // Perform database insertion here
                          mysqli_query($con, "INSERT INTO `contact_us`(`Firstname`, `Lastname`, `Email`, `Number`, `Message`) VALUES 
                              ('$firstname','$lastname','$email','$number','$message')");
                          
                          // echo "Form submitted successfully!";
                      }
                  }
              }

          ?>
      </div>
  </div>
</section>
            
           
            
<!-- ----------contact section end-------------- -->


<!-- ================> Footer section start here <================== -->
<footer class="footer">
  <a href="http://royalswebtechpvtltd.com/" target="_blank"><h3>Designed and Developed by © Royals Webtech.Pvt.Ltd</h3></a>
</footer>

<!-- ================> Footer section end here <================== -->


  <script src="script.js"></script>

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
    
</body>
</html>