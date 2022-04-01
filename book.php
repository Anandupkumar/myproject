<?php
    session_start();
    $conn=new mysqli("localhost","root","","mydatabase");
    if(!$conn){
        die("Connection failed: " . $conn->connect_error);
    }else{
        $email=$_SESSION['email'];
        $ex=$_SESSION['name'];
        if($ex!=0){
            $boat=$_POST['boatname'];
            $days=$_POST['days'];
            $date=$_POST['date'];
            $sql="SELECT * FROM boat WHERE boatname='$boat'";
            $result=$conn->query($sql);
            if($result->num_rows >0){
                $row=$result->fetch_assoc();
                $boat=$row['boatname'];
                $rate=$row['rate'];
                $sql1="INSERT INTO orders (username ,boatname ,days ,rate, email,date ) VALUES ('$ex','$boat','$days','$rate','$email','$date')";
                $conn->query($sql1);
                echo"<script>alert('Your trip booked')</script>";
                require('mybooking.php');
            }else{
                echo"<script>alert('enter correct name of boat !')</script>";
                    require('packages.php');
            }
        }else{
            echo"<script>alert('Login as a user to book packages !')</script>";
            require('index.html');
        }
    
    }     
?>
