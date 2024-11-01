<?php
session_start();
include '../_dbconnect.php';
$u_email = $_SESSION['email'];

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $about_me = $_POST['about_me'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $profession = $_POST['profession'];

    // Upload picture
    $target_dir = "upload/";
    $target_file = $_FILES["picture"]["name"];



    // Move the uploaded file to the specified directory
    if (move_uploaded_file($_FILES["picture"]["tmp_name"],$target_dir.$target_file)) {
        // Insert data into the database
        $sql = "INSERT INTO information (about_me,profession,first_name, last_name, phone_number, email, picture_path,u_email)
            VALUES ('$about_me','$profession', '$first_name', '$last_name', '$phone_number', '$email', '$target_file','$u_email')";

        if (mysqli_query($con, $sql)) {
            header("Location:education.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Error uploading file.";
    }
    mysqli_close($con);
}
?>

    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Form</title>
    <link rel="stylesheet" href="css/info.css">
</head>
<body>
    <h2>User Information Form</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="picture">Picture:</label>
        <input type="file" name="picture" accept="image/*" required><br>

        <label for="about_me">About Me:</label>
        <textarea name="about_me" rows="4" required></textarea><br>
        
        <label for="profession">Profession:</label>
        <input type = "text" name="profession" required></input><br>

        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" required><br>

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" required><br>

        <label for="phone_number">Phone Number:</label>
        <input type="tel" name="phone_number" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <input type="submit" value="Next">
    </form>
</body>
</html>
