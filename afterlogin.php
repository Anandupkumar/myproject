<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
  <link rel="stylesheet" href="style.css">
</head>
<body>
        <!-- Sidebar/menu -->
      <nav class="w3-sidebar w3-green w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:280px;font-weight:bold;" id="mySidebar"><br>
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
        <div class="w3-container">
          <h3 class="w3-padding-64"><b>Website<br>Name</b></h3>
        </div>
        <div class="w3-bar-block">
          <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
          <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Services</a>  
          <a href="packages.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Packages</a> 
          <a href="mybooking.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">My bookings</a> 
          <?php
            session_start();
            $ex=$_SESSION['name'];
            if($ex!=0){
                ?>
                <a href="messages.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Messages</a>  
                <?php
            }
            ?>
          <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
          <a href="index.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Log out</a>

          
        </div>
      </nav>

      <!-- Top menu on small screens -->
      <header class="w3-container w3-top w3-hide-large w3-green w3-xlarge w3-padding">
        <a href="javascript:void(0)" class="w3-button w3-green w3-margin-right" onclick="w3_open()">???</a>
        <span>Company Name</span>
      </header>

      <!-- Overlay effect when opening sidebar on small screens -->
      <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

      <!-- !PAGE CONTENT! -->
      <div class="w3-main" style="margin-left:340px;margin-right:40px">

        <!-- Header -->
        <div class="w3-container" style="margin-top:157px" id="showcase">
          <div class="w3-container" style="margin-top: 20%;">
          <h1 class="w3-jumbo w3-text-black" ><b>my website</b></h1>
          <h1 class="w3-xxxlarge w3-text-black"><b>Explore Kuttanad</b></h1>
          
        </div>
        
        <!-- Photo grid (modal) -->
        <div class="w3-row-padding " style="margin-top: 18%;">
          <div class="w3-half">
            <img src="img7.jpg" style="width:100%" onclick="onClick(this)" alt="The Boat races">
            <img src="img1.jpg" style="width:100%" onclick="onClick(this)" alt="The rivers and lakes">
            <img src="img3.jpg" style="width:100%" onclick="onClick(this)" alt="The villagers transporting rice through boats">
          </div>

          <div class="w3-half">
            <img src="img4.jpg" style="width:100%" onclick="onClick(this)" alt="The greeny paddy fields">
            <img src="img5.jpg" style="width:100%" onclick="onClick(this)" alt="The house boat trip">
            <img src="img6.jpg" style="width:100%" onclick="onClick(this)" alt="Large paddy fields">
          </div>
        </div>

        <!-- Modal for full size images on click-->
        <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
          <span class="w3-button w3-black w3-xxlarge w3-display-topright">??</span>
          <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
            <img id="img01" class="w3-image">
            <p id="caption"></p>
          </div>
        </div>

        <!-- Services -->
        <div class="w3-container" id="services" style="margin-top:75px">
          <h1 class="w3-xxxlarge w3-text-green"><b>Services.</b></h1>
          <hr style="width:50px;border:5px solid green" class="w3-round">
          <p>We gives you the ability to search, compare and book house boats from professional third-party providers without leaving the website.</p>
          <p>Some text about our services - what we do and what we offer. We are lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
          dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
        </div>

      <!-- Contact -->
      <div class="w3-container" id="contact" style="margin-top:75px">
        <h1 class="w3-xxxlarge w3-text-green"><b>Contact.</b></h1>
        <hr style="width:50px;border:5px solid green" class="w3-round">
        <p>Do you have any complaints or questions? Fill out the form and fill me in with the details :) We love meeting new people!</p>
        <form action="/action_page.php" target="_blank">
          <div class="w3-section">
            <label>Name</label>
            <input class="w3-input w3-border" type="text" name="Name" required>
          </div>
          <div class="w3-section">
            <label>Email</label>
            <input class="w3-input w3-border" type="text" name="Email" required>
          </div>
          <div class="w3-section">
            <label>Message</label>
            <input class="w3-input w3-border" type="text" name="Message" required>
          </div>
          <button type="submit" class="w3-button w3-block w3-padding-large w3-green w3-margin-bottom">Send Message</button>
        </form>  
      </div>

      <!-- End page content -->
      </div>
        <script src="script.js"></script>
</body>
</html>