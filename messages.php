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
          <a href="afterlogin.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
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
        <a href="javascript:void(0)" class="w3-button w3-green w3-margin-right" onclick="w3_open()">☰</a>
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
        </div>
        <div class="w3-container">
        <h1 class="w3-xxxlarge w3-text-green"><b>Messages</b></h1>
        <hr style="width:50px;border:5px solid green" class="w3-round">
        <?php
            $conn=new mysqli("localhost","root","","mydatabase");
            if(!$conn){
                die("Connection failed: " . $conn->connect_error);
            }else{
                
                $sql="SELECT messages,boatname FROM orders WHERE username='$ex'";
                $result=$conn->query($sql);
                if($result->num_rows >0){
                    $row=$result->fetch_assoc();
                    $msg=$row['messages'];
                    $boat=$row['boatname'];
                    ?>
                    <h2 class="w3-text-green"><?php
                    echo "$boat";
                    ?>
                    <h2>
                    <hr style="width:50px;border:5px solid green" class="w3-round">   
                    <?php
                    echo "$msg";
                  }else{
                      echo "No messages";
                  }
              }
        ?>
        </div>
        <script src="script.js"></script>
</body>
</html>