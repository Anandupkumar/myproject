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
          <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
          <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Services</a>  
          <a href="#packages" onclick="document.getElementById('id01').style.display='block'" class="w3-bar-item w3-button w3-hover-white">Packages</a> 
          <a href="houseboats.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">House boats</a> 
          <a href="#houseboat" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">My bookings</a> 
          <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
          
          
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
          <div class="w3-container" style="margin-top: 0%;">
          <h1 class="w3-jumbo w3-text-white" ><b>my website</b></h1>
          <h1 class="w3-xxxlarge w3-text-white"><b>Explore Kuttanad</b></h1>
          
        </div>
        <div id="id01" class="modal">
            
            <form class="modal-content animate" name="login_form" action="login.php" method="post">
              <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="login_avatar.jpg" alt="Avatar" class="avatar">
              </div>
          
              <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" id="name" name="uname" required>
          
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" id="password" name="psw" required>
                  
                <button type="submit" class="login_btn" onclick="">Login</button>
                <label>
                  <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
              </div>
          
              <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
              </div>
            </form>
          </div>

        <!--login form-->

        <div id="id01" class="modals">
            
            <form class="modals" name="" action="boat_login.php" method="post">
              <div class="imgcontainer">
                <img src="login_avatar.jpg" alt="Avatar" class="avatar">
              </div>
          
              <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" id="name" name="bname" required>
          
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" id="password" name="psw" required>
                  
                <button type="submit" class="login_btn" onclick="">Login</button>
                <label>
                  <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
              </div>
          
              <div class="container" style="background-color:#f1f1f1">
                <span class="psw">Forgot <a href="#">password?</a></span>
              </div>
            </form>
        </div>
        <button type="submit" class="w3-button w3-round-xlarge w3-padding-large w3-black w3-margin-bottom w3-margin-top w3-margin-left" onclick="document.getElementById('id02').style.display='block'">or Sign up</button>
          
          <!--signup form-->

          <div id="id02" class="modal">
  
              <form class="modal-content animate" name="signup_form" onsubmit="return validate()" action="boat_signup.php" method="post">
                <div class="imgcontainer">
                  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                  <img src="login_avatar.jpg" alt="Avatar" class="avatar">
                </div>
            
                <div class="container">
                  <label for="uname"><b>Username(Boat name)</b></label>
                  <input type="text" placeholder="Enter Username" id="name" name="bname" required>
                  <span id="namerror" class="error" style="color:red"></span><br>

                  <label for="email"><b>Email</b></label>
                  <input type="email" placeholder="Enter Email" id="email" name="email" required>
                  <span id="emailerror" class="error" style="color:red"></span><br>

                  <label for="rate"><b>Rate(Per day)</b></label>
                  <input type="number" placeholder="Enter rate" id="rate" name="rate" required>
                  <span id="raterror" class="error" style="color:red"></span><br>

                  <label for="psw"><b>Password (6-8 characters)</b></label>
                  <input type="password" placeholder="Enter Password" id="password" name="psw" required>
                  <span id="password_error" class="error" style="color:red"></span><br>

                  <label for="psw2"><b>Confirm Password</b></label>
                  <input type="password" placeholder="Confirm Password" id="con_password" name="psw2" required>
                  <span id="con_password_error" class="error" style="color:red"></span><br>
                    
                  <input type="submit" value="submit" class="login_btn">
                </div>
            
                <div class="container" style="background-color:#f1f1f1">
                  <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <script src="script.js"></script>
</body>
</html>