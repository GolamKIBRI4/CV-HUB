<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Form</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="css/ex.css">
</head>

<body>
    <h2>User Information Form</h2>
    <form action="" method="post" enctype="multipart/form-data">

        <h3>Language (Max: 3)</h3>
        <div id="experience-container">
            <div class="experience-entry">
                <label for="title_1">Title:</label>
                <input type="text" name="title_1" required><br>

                <label for="description_1">Description:</label>
                <textarea name="description_1" rows="4" required></textarea><br>
                <hr>
            </div>
        </div>

        <button type="button" id="add-experience">Add Experience</button>

        <!-- Repeat the above block for experience entries 2 and 3 -->

        <input type="submit" value="Next">
    </form>


    <script>
    $(document).ready(function() {
        var experienceCount = 1; // Initial entry count

        $("#add-experience").click(function() {
            if (experienceCount < 3) {
                experienceCount++;

                var newExperienceEntry = $(".experience-entry:first").clone();
                newExperienceEntry.find("input, textarea").val(""); // Clear input values
                newExperienceEntry.find("label").each(function() {
                    var labelFor = $(this).attr("for");
                    $(this).attr("for", labelFor.replace("_1", "_" + experienceCount));
                });
                newExperienceEntry.find("input, textarea").each(function() {
                    var inputName = $(this).attr("name");
                    $(this).attr("name", inputName.replace("_1", "_" + experienceCount));
                });

                $("#experience-container").append(newExperienceEntry);
            } else {
                alert("Maximum of 3 experience entries allowed.");
            }
        });
    });
    </script>
</body>

</html>


<?php
include '../_dbconnect.php';

session_start();
$u_email =$_SESSION['email'];
$i_id = "";
$result = $con->query("SELECT max(id)as id FROM information WHERE u_email = '$u_email'");
    
if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $i_id = $row['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    for ($i = 1; $i <= 3; $i++) {
        if (isset($_POST["title_$i"]) && isset($_POST["description_$i"])) {
            $title = $_POST["title_$i"];
            $description = $_POST["description_$i"];

            $sql_experience = "INSERT INTO exprience ( title, `description`,email,i_id)
                               VALUES ('$title', '$description','$u_email',$i_id)";
           
            if ($con->query($sql_experience) !== TRUE) {
                echo "Error: " . $sql_experience . "<br>" . $con->error;
            }
            else
            {
                header("Location:skill.php");
            }
        }
    }
    $con->close();
  }
 }
    
?>