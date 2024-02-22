<html>
<body>
<?php

// Check if one of the student name links was clicked
if(isset($_GET["action"]) && $_GET["action"] == "get_student") {
    
    // Get the specific student data
    $student_id = isset($_GET["id"]) ? $_GET["id"] : null;
    if($student_id !== null) {
        $student_info = file_get_contents('http://localhost/tutorial3/api.php?action=get_student&id=' . $student_id);
        
        // Decode from JSON into an array
        $student_info = json_decode($student_info, true);
        
        // Display student info
        if($student_info !== null && is_array($student_info)) {
?>

First Name : <?php echo $student_info["first_name"] ?><br />
Last Name : <?php echo $student_info["last_name"] ?><br />
Address : <?php echo $student_info["address"] ?><br />

<?php
        } else {
            echo "Failed to retrieve student information.";
        }
    } else {
        echo "Student ID is missing.";
    }
} else {
    // Fetch and display the list of students
    $student_list = file_get_contents('http://localhost/tutorial3/api.php?action=get_student_list');
    $student_list = json_decode($student_list, true);
    
    // Check if the decoding was successful and $student_list is an array
    if($student_list !== null && is_array($student_list)) {
        foreach($student_list as $student) {
?>
<a href="http://localhost/tutorial3/rest_client.php?action=get_student&id=<?php echo $student["id"]; ?>">
    <?php echo $student["name"]; ?>
</a><br />
<?php
        }
    } else {
        echo "Failed to retrieve student list.";
    }
}

?>

</body>
</html>
