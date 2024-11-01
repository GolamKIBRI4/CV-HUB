<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $name = $_POST['insta'];
    $email = $_POST['email'];
    echo $name;
    echo $email;
}
?>