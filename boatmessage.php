<?php
    $conn=new mysqli("localhost","root","","mydatabase");
    if(!$conn){
        die("Connection failed: " . $conn->connect_error);
    }else{
        $name=$_POST['username'];
        $msg=$_POST['message'];
        $sql="UPDATE orders SET messages='$msg' WHERE username='$name'";
        if($conn->query($sql)== TRUE){
            echo"<script>alert('Message sent')</script>";
            require('mybooking.php');
        }else{
            echo"<script>alert('Enter correct username')</script>";
            require('mybooking.php');
        }
    }
?>