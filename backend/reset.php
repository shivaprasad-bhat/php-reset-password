<?php
if (!isset($_SESSION['userid'])) {
    session_start();
}
function formatData($data)
{
    $data = trim(htmlspecialchars(stripslashes($data)));
    return $data;
}

isset($_SESSION['userid']) ? $userid = $_SESSION['userid'] : "";

if ($userid !== "") {
    require("./connect.php");
    if (isset($_POST['submit'])) {
        $newPassword = formatData($_POST['new-password']);
        $query = "UPDATE user SET user_pass = '$newPassword' WHERE user_id = '$userid'";
        $result = $conn->query($query);
        $conn->close();
        if ($result === TRUE) {
            session_unset();
            session_destroy();
            echo '
                    <script language="javascript">
                    alert("Password Updated Successfully. Logged out from the system.")
                    window.location.href="/reset/frontend/"
                    </script>
                ';
        } else {
            echo '
                    <script language="javascript">
                    alert("Failed to update password. Please retry")
                    window.location.href="/reset/frontend/reset.php"
                    </script>
                ';
        }
    } else {
        echo '
                    <script language="javascript">
                    alert("Please submit form before using the reset option")
                    window.location.href="/reset/frontend/"
                    </script>
                ';
    }
} else {
    echo '
            <script language="javascript">
            alert("Something Went Wrong. Can\'t commit. Please retry")
            window.location.href="/reset/frontend/"
            </script>
        ';
}
