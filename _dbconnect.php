<?php
 $server = "localhost";
 $username = "root";
 $password = "";
 $dbname = "cv-hub";
 
 $con = mysqli_connect($server,$username,$password,$dbname);
 if(!$con){
   die("error " . mysqli_connect_error(). "no_connetion") ;
   
 }
 
 ?>