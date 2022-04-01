<?php
    session_start();
    $conn=new mysqli("localhost","root","","mydatabase");
    if(!$conn){
        die("Connection failed: " . $conn->connect_error);
    }else{
            $uname = $password = "";
            $uname=$_POST["uname"];
            $password=$_POST["psw"];
            $sql="SELECT * FROM users WHERE name= '$uname' AND PASSWORD= '$password'";
            $result=$conn->query($sql);
            if($result->num_rows >0){
                $row=$result->fetch_assoc();
                if($row['name']== $uname && $row['password']== $password){
                    $_SESSION['email']=$row['email'];
                    $_SESSION['name']=$row['name'];
                    header('location: afterlogin.php');
                }
            }else{
                
                echo '<script>alert("invalid username or password !");</script>';
                require('index.html');
            }
            
    }
?>