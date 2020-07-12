<?php
if (isset($_POST['submit'])) {
    require('./connect.php');
    $query = "SELECT password from user WHERE id = 1";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $password = $row['password'];
        $userPassword = trim(htmlspecialchars(stripslashes($_POST['current-password'])));
        if ($password === $userPassword) {
            $newPassword = trim(htmlspecialchars(stripslashes($_POST['new-password'])));
            $newPassword = md5($newPassword);
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
    $conn->close();
} else {
    echo "Please submit the form before resetting";
}
