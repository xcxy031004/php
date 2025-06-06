<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "Please log in your account";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   #執行delete指令，透過 bid ($_GET["bid"])，從 bulletin 表中刪除該公告。
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $sql="delete from bulletin where bid='{$_GET["bid"]}'";
        if (!mysqli_query($conn,$sql)){
            echo "Notice deletion error";#如果 SQL 執行失敗，顯示 "Notice deletion error"。
        }else{
            echo "Notice deleted successfully";#如果 SQL 執行成功，則顯示 "Notice deleted successfully"。
        }
      echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";#無論刪除成功或失敗，都會在 3 秒後跳轉回公告列表 (11.bulletin.php)。
    }
?>
