#delete the login session and redirect the user back to the login page
<?php
    session_start();
    unset($_SESSION["id"]);
    echo "Logout successful....";
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
?>
