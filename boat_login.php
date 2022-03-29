<?php
    session_start();
    $conn=new mysqli("localhost","root","","mydatabase");
    if(!$conn){
        die("Connection failed: " . $conn->connect_error);
    }else{
            $_SESSION['name']=0;
            $bname = $password = "";
            $bname=$_POST["bname"];
            $password=$_POST["psw"];
            $_SESSION['bname']=$bname;
            $sql="SELECT * FROM boat WHERE boatname= '$bname' AND password= '$password'";
            $result=$conn->query($sql);
            if($result->num_rows >0){
                $row=$result->fetch_assoc();
                if($row['boatname']== $bname && $row['password']== $password){
                    header('location: mybooking.php');
                }else{
                    echo '<script>alert("invalid username or password !");</script>';
                }
            }else{
                
                echo '<script>alert("invalid username or password !");</script>';
                include('houseboats.php');
                }
        }
?>