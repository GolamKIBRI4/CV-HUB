$(document).ready(function() {
    var educationCount = 1; // Initial entry count

    $("#add-education").click(function() {
        if (educationCount < 3) {
            educationCount++;

            var newEducationEntry = $(".education-entry:first").clone();
            newEducationEntry.find("input").val(""); // Clear input values
            newEducationEntry.find("label").each(function() {
                var labelFor = $(this).attr("for");
                $(this).attr("for", labelFor.replace("_1", "_" + educationCount));
            });
            newEducationEntry.find("input").each(function() {
                var inputName = $(this).attr("name");
                $(this).attr("name", inputName.replace("_1", "_" + educationCount));
            });

            $("#education-container").append(newEducationEntry);
        } else {
            alert("Maximum of 3 education entries allowed.");
        }
    });
});
