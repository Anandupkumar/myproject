<?php
    $conn=new mysqli("localhost","root","","mydatabase");
    if(!$conn){
        die("Connection failed: " . $conn->connect_error);
    }else{
        $boat=$_POST['boatname'];
        $days=$_POST['days'];
        $sql="DELETE FROM orders WHERE boatname='$boat' AND days='$days'";
        if($conn->query($sql)){
            echo"<script>alert('Your booking cancelled !')</script>";
            require('mybooking.php');
        }else{
            echo"<script>alert('Enter correct boat name and days !')</script>";
            require('mybooking.php');
        }

    }

?>