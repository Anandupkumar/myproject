<?php
  session_start();
?>
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
          <a href="#houseboat" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">My bookings</a> 
          <?php
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
        <div class="w3-container" style="margin-top:0%">

          <h1 class="w3-xxxlarge w3-text-green"><b>My Booking.</b></h1>
            <hr style="width:50px;border:5px solid green" class="w3-round">
        <?php
                    $conn=new mysqli("localhost","root","","mydatabase");
                    if(!$conn){
                        die("Connection failed: " . $conn->connect_error);
                    }else{ 
                        $ex=$_SESSION['name'];
                        if($ex!=0){
                            $sql="SELECT boatname,days,rate,date FROM orders WHERE username='$ex'";
                            $result=$conn->query($sql);
                            if($result->num_rows >0){
                              
                                while($row=$result->fetch_assoc()){
                                    
                                    $boat=$row['boatname'];
                                    $days=$row['days'];
                                    $rate=$row['rate'];
                                    $date=$row['date'];
                                    $rate=$rate*$days;
                                    ?>
                                    <form action="packages.php" method="post">
                                        <div class="w3-third w3-margin-bottom">
                                            
                                            <ul class="w3-ul w3-border w3-white w3-center w3-opacity-min w3-hover-opacity-off" >
                                            <li class="w3-black w3-xxxlarge" style="padding: 0"><img src="houseboat.jpg" style="width:100%"></li>
                                            <li class="w3-padding-16"><b name="bname"><?php echo "$boat"; ?></b></li>
                                            <li class="w3-padding-16"><?php echo "$date"; ?></li>
                                            <li class="w3-padding-16"><?php echo "$days"; ?></li>
                                            <span class="w3-opacity">days</span>
                                            <li class="w3-padding-16">
                                                <h2 name="rate"><?php echo "$rate"; ?></h2>
                                                <span class="w3-opacity">rupees</span>
                                            </li>
                                            
                                            </ul>
                                            
                                        </div>
                                    </form>
                                    <?php
                                }
                            }else{
                                echo"<script>alert('you have no booking !')</script>";
                                header('location: afterlogin.php');
                            }
                            ?>
                              <div class="w3-container">
                              <button class="w3-button w3-block w3-black w3-padding-large w3-hover-green" onclick="document.getElementById('id01').style.display='block'" name="btn">Cancel booking</button>
                            <?php
                          }else{
                            $boat=$_SESSION['bname'];
                            $sql1="SELECT username,days,rate,email,date FROM orders WHERE boatname='$boat'";
                            $result=$conn->query($sql1);
                            if($result->num_rows >0){

                                while($row=$result->fetch_assoc()){

                                  $username=$row['username'];
                                  $days=$row['days'];
                                  $rate=$row['rate'];
                                  $email=$row['email'];
                                  $date=$row['date'];
                                  $rate=$rate*$days;

                                  ?>
                                  <form action="packages.php" method="post">
                                        <div class="w3-third w3-margin-bottom">
                                            
                                            <ul class="w3-ul w3-border w3-white w3-center w3-opacity-min w3-hover-opacity-off" >
                                            <li class="w3-black w3-xxxlarge" style="padding: 0"><img src="houseboat.jpg" style="width:100%"></li>
                                            <span class="w3-opacity">user</span>
                                            <li class="w3-padding-16"><b name="bname"><?php echo "$username"; ?></b></li>
                                            <span class="w3-opacity">date</span>
                                            <li class="w3-padding-16"><?php echo "$date"; ?></li>
                                            <span class="w3-opacity">days</span>
                                            <li class="w3-padding-16"><?php echo "$days"; ?></li>
                                            <span class="w3-opacity">email</span>
                                            <li class="w3-padding-16"><b><?php echo "$email"; ?></b></li>
                                            <li class="w3-padding-16">
                                                <h2 name="rate"><?php echo "$rate"; ?></h2>
                                                <span class="w3-opacity">rupees</span>
                                            </li>
                                            
                                            </ul>
                                            
                                        </div>
                                    </form>
                                  <?php
                                }
                            }else{
                                echo"<script>alert('you have no booking !')</script>";
                                header('location: afterlogin.php');
                            }
                          }
                      }

              ?>
                
                <?php
                  $ex=$_SESSION['name'];
                  if($ex==0){
                    ?>
                    <button class="w3-button w3-block w3-black w3-padding-large w3-hover-green" onclick="document.getElementById('id02').style.display='block'" name="btn">Message to user</button>
                    <?php
                  }
                ?>
                
                <div id="id01" class="modal">
            
                  <form class="modal-content animate" name="" action="cancelbooking.php" method="post">
                    <div class="imgcontainer">
                      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                  
                    </div>
                
                    <div class="container">
                      <label for="boatname"><b>Boatname</b></label>
                      <input type="text" placeholder="Enter Boat name" id="name" name="boatname" required>
                
                      <label for="psw"><b>Number of days</b></label>
                      <input type="number" placeholder="Enter Number of days" id="password" name="days" required>
                        
                      <button type="submit" class="login_btn" onclick="">Cancel booking</button>
                      
                    </div>
                
                    <div class="container" style="background-color:#f1f1f1">
                      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                      
                    </div>
                  </form>
                </div>
                <div id="id02" class="modal">
            
                  <form class="modal-content animate" name="" action="boatmessage.php" method="post">
                    <div class="imgcontainer">
                      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                  
                    </div>
                
                    <div class="container">
                      <label for="boatname"><b>Username</b></label>
                      <input type="text" placeholder="Enter user name" id="name" name="username" required>
                
                      <label for="psw"><b>Type Messages</b></label>
                      <input type="text" placeholder="Type messages" id="password" name="message" required>
                        
                      <button type="submit" class="login_btn" onclick="">Send</button>
                      
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