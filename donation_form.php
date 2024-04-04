<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morphata Dragah</title>

    <!-- New Navigation bar -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- Razorpay payment gateway -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    
    <link rel="shortcut icon" href="assets/css/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- main css for template -->
    <link rel="stylesheet" href="donation.css">

    <!-- New Navigation bar -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="style.css">

     <style>

        #qrcode {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 90%; /* Set a maximum width for responsiveness */
            max-height: 90vh; /* Set a maximum height for responsiveness */
        }

        /* Optional: Add responsive styling for the button */
        .btn3 {
            font-size: 16px; /* Adjust font size for smaller screens if needed */
            /* Add more responsive styling as needed */
        }
    
    
    @keyframes slideInFromBottom {
        0% {
            opacity: 0;
            transform: translateY(100%);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }  

   /* Apply animation to the form */
    .form1 {
        animation: slideInFromBottom 1s ease-out;
    }


    </style>

    



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
                  <li><a href="chirag.php">Chirga Roshnayi</a></li>
                  <li><a href="chadar.php">Chadar Pesh Karna</a></li>
                  <li><a href="flower.php">Flower Pesh Karna</a></li>
                  <li><a href="dragah.php">Dargah Vyavashtapan</a></li>
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
            <!-- <a href="donation_form.html">
              <button>DONATE NOW!
              </button>
            </a> -->
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



<section style="background-image: url(assets/images/bg-img/donate.jpeg);background-repeat: no-repeat;background-size:cover;">

<section class="Donatenow" style="background-color: #abbfc0;">

<form class="form1" method="post" enctype="multipart/form-data" name="donation">
    <p class="title">DONATE NOW</p>
   
    <label>
        <input required type="text" class="input" name="Name" id="name">
        <span>Full Name</span>
    </label>  
    <label>
        <input required type="email" class="input" name="Email" id="email">
        <span>Email</span>
    </label> 
    <label>
        <input required type="text" class="input" name="Address" id="address1">
        <span>Address</span>
    </label> 
    <label>
        <input required type="tel" class="input" name="Number" id="number">
        <span>Number</span>
    </label>  
    
    <label>
        <select required class="input" name="DonationServices" id="donation_service1">
            <option value="" disabled selected hidden></option>
            <option value="Loban Pesh Karna">Loban Pesh Karna</option>
            <option value="Chirag Roshnayi">Chirag Roshnayi</option>
            <option value="Chadar Pesh Karna">Chadar Pesh Karna</option>
            <option value="Flower Pesh Karna">Flower Pesh Karna</option>
            <option value="Dargah Vyavashtapan">Dargah Vyavashtapan</option>
            <option value="Attar Pesh Karna">Attar Pesh Karna</option>
            <option value="Langar Pesh Karna">Langar Pesh Karna</option>
            <option value="Kambal Dan Karna">Kambal Dan Karna</option>
        </select>
        <span>Donation Services</span>
    </label>
    <p style="color: black;">Donation Amount</p>
    
    <label id="otherAmountLabel">
        <input  type="text" class="input" name="Amount" id="amnt">
        <span style="color: black;">Enter the Donation Amount</span>
    </label>
    
    <button class="btn3" name="submit1" onclick="showQRCode(event)" style="z-index: 100;">
        <span class="transition"></span>
        <span class="gradient"></span>
        <span class="label">SUBMIT</span>
    </button>   

    <div id="qrcode" style="display: none; justify-content: center; flex-direction: column;">
      <img src="assets/QR.jpg" alt="qrcode" style="width: 200px; height: 200px; object-fit: contain; z-index: 10000; left: 50%;">
      <!-- <input type="submit" name="submit2"> -->

      <button class="Btn" name="submit2">
        Pay
        <svg class="svgIcon" viewBox="0 0 576 512"><path d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z"></path></svg>
      </button>
    </div>

</form>

<script>
 function showQRCode(event) {
    event.preventDefault(); // Prevent form submission
    var qrcode = document.getElementById('qrcode');
    qrcode.style.display = 'block';
    // Prevent click propagation to document
    event.stopPropagation();
}

// Function to hide the QR code
function hideQRCode() {
    var qrcode = document.getElementById('qrcode');
    qrcode.style.display = 'none';
}

// Event listener to hide QR code when clicking outside of it
document.addEventListener('click', function(event) {
    var qrcode = document.getElementById('qrcode');
    var submitBtn = document.getElementById('submitBtn');

    // Check if the clicked element is not the QR code itself and not the submit button
    if (event.target !== qrcode && event.target !== submitBtn) {
        hideQRCode();
    }
});
</script>

</section>

        
        <?php

          if(isset($_POST['submit2'])) {

            mysqli_query($con, "INSERT INTO `donation`(`Name`, `Email`, `Address`, `Number`, `DonationServices`, `Amount`) VALUES 
            ('$_POST[Name]', '$_POST[Email]', '$_POST[Address]', '$_POST[Number]', '$_POST[DonationServices]', '$_POST[Amount]')");
          }

        ?>           
        
    </section>

</section>

        <footer class="footer">
            <a href="http://royalswebtechpvtltd.com/"><h3><b>Designed and Developed by © Royals Webtech.Pvt.Ltd</b></h3></a>
        </footer>
        
        <!-- ================> Footer section end here <================== -->
    
    
    
    
    
        <!-- scrollToTop start here -->
        <a href="#" class="scrollToTop"><i class="fas fa-arrow-up"></i><span class="pluse_1"></span><span class="pluse_2"></span></a>
       
        <!-- scrollToTop ending here -->
    
    
    
    
    
        <!-- vendor plugins -->
        <script src="assets/js/jquery-3.6.0.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <!-- <script src="assets/js/all.min.js"></script> -->
        <script src="assets/js/swiper.min.js"></script>
        <script src="assets/js/lightcase.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/donate-range.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/wow.js"></script>
        <script src="assets/js/custom.js"></script>
    
       

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