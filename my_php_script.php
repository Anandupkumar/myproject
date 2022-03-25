<?php
    $conn=new mysqli("localhost","root","","mydatabase");
    if(!$conn){
        die("Connection failed: " . $conn->connect_error);
    }else{
            $name = $email = $password = "";
            $name=$_POST["uname"];
            $email=$_POST["email"];
            $password=$_POST["psw"];
            $sql = "INSERT INTO users (name, email, password)VALUES('$name','$email','$password')";
            $conn->query($sql);
            include('afterlogin.html');
          }
?>