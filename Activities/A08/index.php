<!DOCTYPE html>
<html>

<head>
  <title>W3.CSS Template</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/font/font.css">
  <style>
    body,
    html {
      margin: 0;
      padding: 0;
      height: 100%;
    }

    video {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
      /* ensure vid is behind all */
    }

    img {
      margin-bottom: -7px;
    }

    .w3-row-padding img {
      margin-bottom: 12px;
    }

    body,
    h1 {
      font-family: "Inside Out", sans-serif;
      color: #ffffff;
      text-shadow: 2px 2px 5px black;
    }

    .w3-opacity {
      opacity: 1 !important;
    }
  </style>
  </style>
</head>

<body>

  <!-- Video Background -->
  <div class="bgimg w3-display-container w3-animate-opacity w3-text-white" id="home">
    <video autoplay muted loop>
      <source src="assets/vid/coreMemory.mp4">
    </video>

    <!-- Sidebar -->
    <nav class="w3-sidebar w3-black w3-animate-top w3-xxlarge" style="display:none;padding-top:150px" id="mySidebar">
      <a href="javascript:void(0)" onclick="w3_close()"
        class="w3-button w3-black w3-xxlarge w3-padding w3-display-topright" style="padding:6px 24px">
        <i class="fa fa-remove"></i>
      </a>
      <div class="w3-bar-block w3-center">
        <a href="#home" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="w3_close()">Home</a>
        <a href="#myGrid" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="w3_close()">Photos</a>
        <a href="#contact" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="w3_close()">Contact</a>
      </div>
    </nav>

    <!-- !PAGE CONTENT! -->
    <div class="w3-content" style="width: 100%; height: 100vh;">

      <!-- Header -->
      <div class="w3-opacity" style="display: flex; justify-content: center; align-items: center; height: 100%;">
        <span class="w3-button w3-xxlarge w3-white w3-right" onclick="w3_open()"
          style="position: fixed; top: 20px; right: 20px;">
          <i class="fa fa-bars"></i>
        </span>
        <header class="w3-center">
          <h1 style="font-size: 4em; margin-bottom: 20px;"><b>INSIDE OUT</b></h1>
          <p style="font-size: 1.5em; line-height: 1.8;"><b>This is my Islands of Personality.</b>
          </p>
          <p style="margin-top: 30px;">
            <a href="islandsPersonalityList.php" class="w3-button w3-black w3-large" style="padding: 16px 32px;">
              View Islands of Personality
            </a>
          </p>

          <p style="margin-top: 30px;">
            <button class="w3-button w3-black w3-large" style="padding: 16px 32px;" onclick="myFunction()">Toggle
              Characters</button>
          </p>
        </header>
      </div>
    </div>


    <!-- Photo Grid -->
    <div class="w3-row" id="myGrid" style="margin-bottom:128px">
      <div class="w3-third">
        <img src="assets/img/1.jpg" style="width:100%">
        <img src="assets/img/2.jpg" style="width:100%">
        <img src="assets/img/3.jpg" style="width:100%">
        <img src="assets/img/4.jpg" style="width:100%">
        <img src="assets/img/5.jpg" style="width:100%">
        <img src="assets/img/6.jpg" style="width:100%">
      </div>

      <div class="w3-third">
        <img src="assets/img/7.jpg" style="width:100%">
        <img src="assets/img/8.jpg" style="width:100%">
        <img src="assets/img/9.jpg" style="width:100%">
        <img src="assets/img/10.jpg" style="width:100%">
        <img src="assets/img/11.jpg" style="width:100%">
        <img src="assets/img/12.jpg" style="width:100%">
      </div>

      <div class="w3-third">
        <img src="assets/img/13.jpg" style="width:100%">
        <img src="assets/img/14.jpg" style="width:100%">
        <img src="assets/img/15.jpg" style="width:100%">
        <img src="assets/img/16.jpg" style="width:100%">
        <img src="assets/img/17.jpg" style="width:100%">
        <img src="assets/img/18.jpg" style="width:100%">
      </div>
    </div>

    <!-- End Page Content -->
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge" style="margin-top:128px"
    id="contact">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank"
        class="w3-hover-text-green">w3.css</a></p>
  </footer>

  <script>
    // Toggle grid padding and border-radius
    function myFunction() {
      var x = document.getElementById("myGrid");
      var images = x.getElementsByTagName("img");

      if (x.className === "w3-row") {
        x.className = "w3-row-padding";
        for (var i = 0; i < images.length; i++) {
          images[i].style.borderRadius = "10px"; // Add border-radius
        }
      } else {
        x.className = x.className.replace("w3-row-padding", "w3-row");
        for (var i = 0; i < images.length; i++) {
          images[i].style.borderRadius = ""; // Remove border-radius
        }
      }
    }

    // Open and close sidebar
    function w3_open() {
      document.getElementById("mySidebar").style.width = "100%";
      document.getElementById("mySidebar").style.display = "block";
    }

    function w3_close() {
      document.getElementById("mySidebar").style.display = "none";
    }
  </script>

</body>

</html>