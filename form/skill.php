<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Form</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="css/skill.css">
</head>

<body>
    <h2>User Information Form</h2>
    <form action="" method="post" enctype="multipart/form-data">

        <h3>Skills (Max: 4)</h3>
        <div id="skills-container">
            <div class="skills-entry">
                <label for="skill_name_1">Skillset Name:</label>
                <input type="text" name="skill_name[]" required><br>

                <label for="skill_level_1">Skill Level:</label>
                <select name="skill_level[]" required>
                    <option value="1">Novice</option>
                    <option value="2">Beginner</option>
                    <option value="3">Competent</option>
                    <option value="4">Proficient</option>
                    <option value="5">Expert</option>
                </select><br>

                <hr>
            </div>
        </div>

        <button type="button" id="add-skill">Add Skill</button>

        <input type="submit" value="Next">
    </form>

    <script>
    $(document).ready(function() {
        var skillsCount = 1; // Initial entry count

        $("#add-skill").click(function() {
            if (skillsCount < 4) {
                skillsCount++;

                var newSkillsEntry = $(".skills-entry:first").clone();
                newSkillsEntry.find("input").val(""); // Clear input values
                newSkillsEntry.find("label").each(function() {
                    var labelFor = $(this).attr("for");
                    $(this).attr("for", labelFor.replace("_1", "_" + skillsCount));
                });
                newSkillsEntry.find("input").each(function() {
                    var inputName = $(this).attr("name");
                    $(this).attr("name", inputName.replace("_1", "_" + skillsCount));
                });

                $("#skills-container").append(newSkillsEntry);
            } else {
                alert("Maximum of 4 skills entries allowed.");
            }
        });
    });
    </script>
</body>

</html>


<?php
include '../_dbconnect.php';

session_start();
$u_email = $_SESSION['email'];
$i_id = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $result = $con->query("SELECT max(id) as id FROM information WHERE u_email = '$u_email'");

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $i_id = $row['id'];

        // Check if skills data is set in the form
        if (isset($_POST['skill_name']) && isset($_POST['skill_level'])) {
            $skill_names = $_POST['skill_name'];
            $skill_levels = $_POST['skill_level'];

            // Loop through skills data
            for ($i = 0; $i < count($skill_names); $i++) {
                // Get skill data for this entry
                $skill_name = $con->real_escape_string($skill_names[$i]);
                $skill_level = $con->real_escape_string($skill_levels[$i]);

                // Insert skill data into the database
                $sql_skill = "INSERT INTO skills (skill_name, skill_level, email, i_id)
                               VALUES ('$skill_name', '$skill_level', '$u_email', $i_id)";

                

                if ($con->query($sql_skill) !== TRUE) {
                    echo "Error: " . $sql_skill . "<br>" . $con->error;
                }
                else
                {
                    header("Location:experience2.php");
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
