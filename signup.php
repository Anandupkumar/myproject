<?php
    $conn=new mysqli("localhost","root","","mydatabase");
    if(!$conn){
        die("Connection failed: " . $conn->connect_error);
    }else{
            $name = $email = $password = "";
            $name=$_POST["uname"];
            $email=$_POST["email"];
            $password=$_POST["psw"];
            $sql1="SELECT * FROM users WHERE name= '$name'";
            $result=$conn->query($sql1);
            if($result->num_rows >0){
                echo"<script>alert('username already taken !')</script>";
                require('index.php');
            }else{
                $sql = "INSERT INTO users (name, email, password)VALUES('$name','$email','$password')";
                $conn->query($sql);
                header('location: afterlogin.php');
                
            }
          }
?>