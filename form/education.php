<?php
include '../_dbconnect.php';

session_start();
$u_email = $_SESSION['email'];
$i_id = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $result = $con->query("SELECT max(id)as id FROM information WHERE u_email = '$u_email'");
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $i_id = $row['id'];

        // Loop through potential education entries (assuming max 3)
        for ($i = 1; $i <= 3; $i++) {
            if (isset($_POST["school_$i"]) && isset($_POST["degree_$i"]) && isset($_POST["from_$i"]) && isset($_POST["to_$i"]) && isset($_POST["grade_$i"])) {
                // Get education data for this entry
                $school = $_POST["school_$i"];
                $degree = $_POST["degree_$i"];
                $from_date = $_POST["from_$i"];
                $to_date = $_POST["to_$i"];
                $grade = $_POST["grade_$i"];

                // Modify the SQL query to retrieve data from the database
                $sql_education = "INSERT INTO education (school, degree, from_date, to_date, grade, email, i_id)
                                  VALUES ('$school', '$degree', '$from_date', '$to_date', '$grade', '$u_email', $i_id)";
                
                

                if ($con->query($sql_education) !== TRUE) {
                    echo "Error: " . $sql_education . "<br>" . $con->error;
                }
                else
                {
                    header("Location:exprience.php");
                }
            }
        }
    } else {
        echo "Error: Unable to retrieve user ID.";
    }

    // Close connection
    $con->close();
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Form</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="css/edu.css">
</head>
<body>
    <h2>User Information Form</h2>
    <form action=""method="post" enctype="multipart/form-data">
        <!-- Previous form fields -->
        <!-- Education Section -->
        <h3>Education (Max: 3)</h3>
        <div id="education-container">
            <div class="education-entry">

                <label for="school_1">School/College/University:</label>
                <input type="text" name="school_1" required><br>

                <label for="degree_1">Degree Name:</label>
                <input type="text" name="degree_1" required><br>

                <label for="from_1">From:</label>
                <input type="text" name="from_1" required><br>

                <label for="to_1">To:</label>
                <input type="text" name="to_1" required><br>

                <label for="grade_1">Grade/Score/CGPA:</label>
                <input type="text" name="grade_1" required><br>
                <hr>
            </div>
        </div>

        <button type="button" id="add-education">Add Education</button>

        <!-- Repeat the above block for education entries 2 and 3 -->

        <input type="submit" value="Next">
    </form>
</body>
</html>




