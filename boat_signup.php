<?php
    session_start();
    $conn=new mysqli("localhost","root","","mydatabase");
    if(!$conn){
        die("Connection failed: " . $conn->connect_error);
    }else{
            $name = $email = $rate=  $password = "";
            $name=$_POST["bname"];
            $email=$_POST["email"];
            $rate=$_POST["rate"];
            $password=$_POST["psw"];
            $sql="SELECT * FROM boat WHERE boatname= '$name'";
            $result=$conn->query($sql);
            if($result->num_rows >0){
                echo"<script>alert('username already taken !')</script>";
                require('houseboats.php');
            }else{
                $_SESSION['name']=0;
                $sql = "INSERT INTO boat (boatname, email, rate, password)VALUES('$name','$email','$rate','$password')";
                $conn->query($sql);
                header('location: packages.php');
                
            }
          }
?>