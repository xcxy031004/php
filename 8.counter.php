<?php
    session_start(); #
    if (!isset($_SESSION["counter"]))
        $_SESSION["counter"]=1;#如果 $_SESSION["counter"] 尚未被設置（頁面第一次載入時），則將其初始化為 1。
    else
        $_SESSION["counter"]++;#如果 $_SESSION["counter"] 已經存在，則表示頁面已被刷新，計數器遞增 1。

    echo "counter=".$_SESSION["counter"];#透過 echo 在網頁上顯示目前的計數值（counter）。
    echo "<br><a href=9.reset_counter.php>Reset counter</a>";
?
