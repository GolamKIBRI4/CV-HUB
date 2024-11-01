<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    $_SESSION['email'] = $email;
    
    $sql2 = " SELECT * FROM user WHERE email = '$email' and password = '$password'";
    $result1 = mysqli_query($con, $sql2);
    $num1 = mysqli_num_rows($result1);

    if ($num1 == 1) {  
        $_SESSION['not_break'] = 1; 
        $_SESSION['email'] = $email;  
        header("Location:home.php");
        exit(); 
    }
    else{
        $_SESSION['wrong'] = "Wrong Email or Password";
        header("Location:login.php");
        exit(); 
    }
}