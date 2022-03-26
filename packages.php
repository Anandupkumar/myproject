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
          <h3 class="w3-padding-64"><b>Company<br>Name</b></h3>
        </div>
        <div class="w3-bar-block">
          <a href="afterlogin.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
          <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Services</a>  
          <a href="#packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Packages</a> 
          <a href="mybooking.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">My bookings</a>  
          <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
          <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Log out</a>

          
        </div>
      </nav>
       <!-- Top menu on small screens -->
       <header class="w3-container w3-top w3-hide-large w3-green w3-xlarge w3-padding">
        <a href="javascript:void(0)" class="w3-button w3-green w3-margin-right" onclick="w3_open()">☰</a>
        <span>Company Name</span>
      </header>

      <!-- Overlay effect when opening sidebar on small screens -->
      <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
    
      <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:340px;margin-right:40px">

        <!-- Header -->
        <div class="w3-container" style="margin-top:157px" id="showcase">
          <div class="w3-container" style="margin-top: 10%;">
          <h1 class="w3-jumbo w3-text-white" ><b>my website</b></h1>
          <h1 class="w3-xxxlarge w3-text-white"><b>Explore Kuttanad</b></h1>
          
    </div>

        
        <div class="w3-container" style="margin-top:15%">
            <h1 class="w3-xxxlarge w3-text-green"><b>Packages.</b></h1>
            <hr style="width:50px;border:5px solid green" class="w3-round">
            <div class="w3-center">
                <div class="w3-row-padding" style="margin:0 -16px">
                        <div class="w3-third w3-margin-bottom">
                            <ul class="w3-ul w3-border w3-white w3-center w3-opacity-min w3-hover-opacity-off" >
                            <li class="w3-black w3-xxxlarge" style="padding: 0"><img src="houseboat.jpg" style="width:100%"></li>
                            <li class="w3-padding-16"><b>Lake cruise</b></li>
                            <li class="w3-padding-16">A houseboat with basic facilities</li>
                            <li class="w3-padding-16">Neat and clean rooms</li>
                            <li class="w3-padding-16">Air conditioned rooms</li>
                            <li class="w3-padding-16">
                                <h2>2500</h2>
                                <span class="w3-opacity">per day</span>
                            </li>
                            <li class="w3-light-grey w3-padding-24">
                                <button class="w3-button w3-teal w3-padding-large w3-hover-black">Book</button>
                            </li>
                            </ul>
                        </div>
                        
                        <div class="w3-third w3-margin-bottom">
                            <ul class="w3-ul w3-border w3-white w3-center w3-opacity-min w3-hover-opacity-off">
                            <li class="w3-black w3-xxxlarge" style="padding: 0"><img src="houseboat.jpg" style="width:100%"></li>
                            <li class="w3-padding-16"><b>Lake cruise</b></li>
                            <li class="w3-padding-16">Photography</li>
                            <li class="w3-padding-16">50GB Storage</li>
                            <li class="w3-padding-16">Endless Support</li>
                            <li class="w3-padding-16">
                                <h2>$ 25</h2>
                                <span class="w3-opacity">per day</span>
                            </li>
                            <li class="w3-light-grey w3-padding-24">
                                <button class="w3-button w3-teal w3-padding-large w3-hover-black">Book</button>
                            </li>
                            </ul>
                        </div>
                        
                        <div class="w3-third">
                            <ul class="w3-ul w3-border w3-white w3-center w3-opacity-min w3-hover-opacity-off">
                            <li class="w3-black w3-xxxlarge" style="padding: 0"><img src="houseboat.jpg" style="width:100%"></li>
                            <li class="w3-padding-16"><b>Lake cruise</b></li>
                            <li class="w3-padding-16">Photography</li>
                            <li class="w3-padding-16">Unlimited Storage</li>
                            <li class="w3-padding-16">Endless Support</li>
                            <li class="w3-padding-16">
                                <h2>$ 25</h2>
                                <span class="w3-opacity">per day</span>
                            </li>
                            <li class="w3-light-grey w3-padding-24">
                                <button class="w3-button w3-teal w3-padding-large w3-hover-black">Book</button>
                            </li>
                            </ul>
                        </div>
                </div>
            </div><br><br>
            <div class="w3-center">
                <div class="w3-row-padding" style="margin:0 -16px">
                        <div class="w3-third w3-margin-bottom">
                            <ul class="w3-ul w3-border w3-white w3-center w3-opacity-min w3-hover-opacity-off">
                            <li class="w3-black w3-xxxlarge" style="padding: 0"><img src="houseboat.jpg" style="width:100%"></li>
                            <li class="w3-padding-16"><b>Lake cruise</b></li>
                            <li class="w3-padding-16">Photography</li>
                            <li class="w3-padding-16">1GB Storage</li>
                            <li class="w3-padding-16">Mail Support</li>
                            <li class="w3-padding-16">
                                <h2>$ 10</h2>
                                <span class="w3-opacity">per day</span>
                            </li>
                            <li class="w3-light-grey w3-padding-24">
                                <button class="w3-button w3-teal w3-padding-large w3-hover-black">Book</button>
                            </li>
                            </ul>
                        </div>
                        
                        <div class="w3-third w3-margin-bottom">
                            <ul class="w3-ul w3-border w3-white w3-center w3-opacity-min w3-hover-opacity-off">
                            <li class="w3-black w3-xxxlarge" style="padding: 0"><img src="houseboat.jpg" style="width:100%"></li>
                            <li class="w3-padding-16"><b>Lake cruise</b></li>
                            <li class="w3-padding-16">Photography</li>
                            <li class="w3-padding-16">50GB Storage</li>
                            <li class="w3-padding-16">Endless Support</li>
                            <li class="w3-padding-16">
                                <h2>$ 25</h2>
                                <span class="w3-opacity">per day</span>
                            </li>
                            <li class="w3-light-grey w3-padding-24">
                                <button class="w3-button w3-teal w3-padding-large w3-hover-black">Book</button>
                            </li>
                            </ul>
                        </div>
                        
                        <div class="w3-third">
                            <ul class="w3-ul w3-border w3-white w3-center w3-opacity-min w3-hover-opacity-off">
                            <li class="w3-black w3-xxxlarge" style="padding: 0"><img src="houseboat.jpg" style="width:100%"></li>
                            <li class="w3-padding-16"><b>Lake cruise</b></li>
                            <li class="w3-padding-16">Photography</li>
                            <li class="w3-padding-16">Unlimited Storage</li>
                            <li class="w3-padding-16">Endless Support</li>
                            <li class="w3-padding-16">
                                <h2>$ 25</h2>
                                <span class="w3-opacity">per day</span>
                            </li>
                            <li class="w3-light-grey w3-padding-24">
                                <button class="w3-button w3-teal w3-padding-large w3-hover-black">Book</button>
                            </li>
                            </ul>
                        </div>
                </div>
            </div>
            <div class="container w3-green">

            </div>

        </div>
    <script src="script.js"></script>

</body>
</html>