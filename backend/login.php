<?php
session_start();

/**
 * Function to format input data;
 * @param string $data
 * @return string $data
 * @author Shivaprasad Bhat
 */
function formatData($data)
{
    $data = trim(htmlspecialchars(stripslashes($data)));
    return $data;
}

if (isset($_POST['submit'])) {
    $userid = formatData($_POST['userid']);
    $password = formatData($_POST['password']);
    require('./connect.php');
    $query = "SELECT * FROM users";
} else {
    echo "Post values not set";
}
