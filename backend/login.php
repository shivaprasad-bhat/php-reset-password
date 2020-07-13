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
    $query = "SELECT * FROM user WHERE user_id = '$userid'";

    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $dbPassword = strval($row['user_pass']);
        if ($dbPassword === $password) {
            $_SESSION['userid'] = $userid;
            $conn->close();
            echo '
            <script language="javascript">
            alert("Logged in successfully")
            window.location.href="/reset/frontend/reset.php"
            </script>
            ';
        } else {
            $conn->close();
            echo '
            <script language="javascript">
            alert("Password didn\'t match. Please enter valid password")
            window.location.href="/reset/frontend/"
            </script>
            ';
        }
    } else {
        $conn->close();
        echo '
        <script type="text/javascript">
            alert("User not found. Please enter valid userid")
             window.location.href="/reset/frontend/"
        </script>
        ';
    }
} else {
    echo "Post values not set";
}
