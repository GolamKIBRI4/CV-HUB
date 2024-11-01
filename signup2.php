<?php
include '_dbconnect.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if($_FILES['image']['size'] != 0) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check != false)
        {
            $name1 = $_POST['first_name'];
            $name2 = $_POST['last_name'];
            $email = $_POST['email'];
            
            $gender = $_POST['gender'];
            
            $password = $_POST['password'];
            $cpassword = $_POST['cpassword'];

            $phone = $_POST['phone'];
            // $image = $_FILES['image']['tmp_name'];
            // $imgContent = addslashes(file_get_contents($image));

            $img_name = rand() . $_FILES['image']['name'];
            $img_tmp_name = $_FILES['image']['tmp_name'];
            $img_size = $_FILES['image']['size'];
            //$targetDir = __DIR__ . DIRECTORY_SEPARATOR . 'profileImage' . DIRECTORY_SEPARATOR;

            

            if($password == $cpassword){
                $sql2 = "SELECT * FROM user WHERE email = '$email'";
                $result1 = mysqli_query($con, $sql2);
                $num1 = mysqli_num_rows($result1);
                
                
                if ($num1 == 0 && move_uploaded_file($img_tmp_name,"profileImage/".$img_name)) {
                        $sql = "INSERT INTO `user`( `first_name`, `last_name`, `email`, `phone_number`, `password`, `gender`, `image`)
                        VALUES ('$name1','$name2','$email','$phone','$password','$gender','$img_name')";
                        $result = mysqli_query($con, $sql);
                        $_SESSION['success'] = "Account created successfully";
                        header("Location:login.php");
                        exit();
                }
                else{
                    $_SESSION['not_success'] = "Email already used before";
                header("Location:signup.php");
                exit();   
                }
                    
            }
            $_SESSION['pasword'] = "Password did not matched";
            header("Location:signup.php");
            exit();
            }
        }
    else{
        $name1 = $_POST['first_name'];
        $name2 = $_POST['last_name'];
        $email = $_POST['email'];
            
        $gender = $_POST['gender'];
            
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        $phone = $_POST['phone'];
        $image = $_FILES['image']['tmp_name'];
        
        

        if($password == $cpassword){
            $sql2 = "SELECT * FROM user WHERE email = '$email'";
            $result1 = mysqli_query($con, $sql2);
            $num1 = mysqli_num_rows($result1);
            
            
            if ($num1 == 0) {
                    if($_POST['gender']=="Male"){
                        $sql = "INSERT INTO `user`(`first_name`, `last_name`, `email`, `phone_number`, `password`, `gender`, `image`)
                        VALUES ('$name1','$name2','$email','$phone','$password','$gender','MaleImage')";
                        $result = mysqli_query($con, $sql);
                        $_SESSION['success'] = "Account created successfully";
                        header("Location:login.php");
                        exit();
                    }
                    if($_POST['gender']=="Female"){
                        $sql = "INSERT INTO `user`( `first_name`, `last_name`, `email`, `phone_number`, `password`, `gender`, `image`)
                        VALUES ('$name1','$name2','$email','$phone','$password','$gender','FemaleImage')";
                        $result = mysqli_query($con, $sql);
                        $_SESSION['success'] = "Account created successfully";
                        header("Location:login.php");
                        exit();
                    }
            }
            else{
                $_SESSION['not_success'] = "Email already used before";
            header("Location:signup.php");
             exit();   
            }
                 
        }
        $_SESSION['pasword'] = "Password did not matched";
        header("Location:signup.php");
        exit();
    }
    
}
?>