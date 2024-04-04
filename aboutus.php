<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- New Navigation bar -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet"  href="aboutus.css">
    <link rel="stylesheet"  href="style.css">
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
            <li><a href="khidmat.php">Chirga Roshnayi</a></li>
            <li><a href="khidmat.php">Chadar Pesh Karna</a></li>
            <li><a href="khidmat.php">Flower Pesh Karna</a></li>
            <li><a href="khidmat.php">Dargah Vyavashtapan</a></li>
            <li><a href="khidmat.php">Attar Pesh Karna</a></li>
            <li><a href="khidmat.php">Langar Pesh Karna</a></li>
            <li><a href="khidmat.php">Murad Puri Karna</a></li>
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

    
    <section class="hero">
        <div class="heading">
            <h1>About Dargah</h1>
        </div>
        <div class="container">
            <div class="hero-content">
                <h2 style="text-transform: uppercase;">Our History</h2>
                <p id="shortText">Khwaja Nazeer Aulia Chisti Nizami R. A. a sufi saint dedicated his life in the devotion of the “Divine Power”. During his meditation and prayers at Ajmer Sharif, where he was called upon by Khwaja ji under the guidance of his preacher he attained spiritual supremacy. There upon he spent most of his time in the benefit of mankind residing at Mor Phata (Peacock Gate). Khwaja Nazeer Aulia Chisti Nizami R. A. had a simple life style and never demanded for himself. He always said “Hame Sirf Ek Khali Bora Chahiye”. People who used visit him, were sent to the sacred Dargah of Hazrat Saki Peer Baba and they found that their prayers were answered when they returned back to darbar of Khwaja Nazeer Aulia Chisti Nizami R. A.</p>
                <p id="fullText" style="display:none;">Khwaja Nazeer Aulia Chisti Nizami R. A. a sufi saint dedicated his life in the devotion of the “Divine Power”. During his meditation and prayers at Ajmer Sharif, where he was called upon by Khwaja ji under the guidance of his preacher he attained spiritual supremacy. There upon he spent most of his time in the benefit of mankind residing at Mor Phata (Peacock Gate). Khwaja Nazeer Aulia Chisti Nizami R. A. had a simple life style and never demanded for himself. He always said “Hame Sirf Ek Khali Bora Chahiye”. People who used visit him, were sent to the sacred Dargah of Hazrat Saki Peer Baba and they found that their prayers were answered when they returned back to darbar of Khwaja Nazeer Aulia Chisti Nizami R. A.<br>
                    Lovingly people used to call him as Bellariwale Baba or Baba Saheb or Khwaja Peer. Baba Saheb used to give “Faiz”in the form of mud of Mor Phata. Even today people who come to pay their reverence to Baba Saheb have strong belief in the eternal power of Soil from Baba Saheb. Innumerable people from all sects of society, caste, creed, religion and tradition regularly visited him and shared their problems and difficulties with him. He used to resolve their problems and difficulties in an unknowing way always stating “Sirf Ek Nazar”. Staying in a simplified hut on the road side bearing all the tremors of nature, Baba Saheb was most caring and loved the followers and believers. He was most eager to comfort them. He could not visualize that believers are in problem or any kind of difficulty. If anyone could not go to him, Baba Saheb used to reach him.

                    Born in a wealthy trader family, Baba Saheb had seen all “UPS & DOWNS”, but was always remained spiritually attached to the “Divine Power” and spent most of his time in worship. With the guidance and instructions of his preacher “ Khwaja Kader Pasha Aulia Chisti Nizami Kader Linga Jagatguru” one fine day Baba Saheb migrated to Mor Phata from Bellari in South India. He never spoke to anyone and worshiped “Devine Power” without food until a day when a saint recognized him and offered him food. There after Baba Saheb resided at Mor Phata till he left for his heavenly abode. Even today, belivers find Baba Saheb at Mor Phata and share their problems and difficulties here at his “Dargah Sharif” and invariably they find their problems resolved. Baba Saheb used to state.</p>
                <button id="learnMoreButton" class="cta-button">Learn More</button>
            </div>
            <div class="hero-image">
                <img src="assets/aboutus1.jpg" class="image11">
            </div>
        </div>
    </section>

    <script>
        document.getElementById("learnMoreButton").addEventListener("click", function() {
            document.getElementById("shortText").style.display = "none";
            document.getElementById("fullText").style.display = "block";
            document.getElementById("learnMoreButton").style.display = "none";
        });
    </script>

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