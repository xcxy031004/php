#Resets the counter value stored in the session, then returns to the main counter page
<?php
    session_start();
    unset($_SESSION["counter"]);
    echo "Counter reset successfully....";
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";

?>
