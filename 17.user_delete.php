<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "Please log in to your account";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";#如果 $_SESSION["id"] 不存在（代表使用者未登入），顯示「請先登入帳號」，並在 3 秒後導向登入頁面 (2.login.html)。
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");#這行程式碼連接 db4free.net 的 MySQL 資料庫，使用帳號 immust，密碼 immustimmust，並選擇 immust 資料庫。
        $sql="delete from user where id='{$_GET["id"]}'"; #這行程式碼從 user 資料表中刪除符合 id 條件的帳戶，並且該 id 來自 GET 參數 ($_GET["id"])。
        if (!mysqli_query($conn,$sql)){
            echo "User deletion error";#如果 SQL 執行失敗，就顯示 "User deletion error"。
        }else{
            echo "User deleted successfully";#如果 SQL 執行成功，則顯示 "User deleted successfully"。
        }
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";#無論刪除成功或失敗，都會在 3 秒後導向 18.user.php 頁面。
    }
?>
