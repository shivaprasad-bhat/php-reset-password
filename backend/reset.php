<?php

//Check value submitted from form
if (isset($_POST['submit'])) {
    //include file for connection
    require('./connect.php');

    //Validate old password
    $query = "SELECT password from user WHERE id = 1";
    $result = $conn->query($query);

    //If old password matches then proceed for updation
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $password = $row['password'];
        $userPassword = trim(htmlspecialchars(stripslashes($_POST['current-password'])));
        if ($password === $userPassword) {
            $newPassword = trim(htmlspecialchars(stripslashes($_POST['new-password'])));    
            $query = "UPDATE user SET password = '$newPassword' WHERE id = 1";

            $result = $conn->query($query);
            if ($result === TRUE) {
                echo "Password updated";
            } else {
                echo "Some error in updating the password";
            }
        } else {
            echo "Old password didn't match";
        }
    } else {
        echo "User not found";
    }

    //Close the connection
    $conn->close();
} else {
    //In case of direct access before submission
    echo "Please submit the form before resetting";
}
