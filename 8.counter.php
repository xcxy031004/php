#Create a counter that increments every time the page is refreshed, using sessions.
<?php
    session_start(); #
    if (!isset($_SESSION["counter"]))
        $_SESSION["counter"]=1;
    else
        $_SESSION["counter"]++;

    echo "counter=".$_SESSION["counter"];
    echo "<br><a href=9.reset_counter.php>Reset counter</a>";
?
