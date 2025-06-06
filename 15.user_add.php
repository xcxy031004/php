<?php
error_reporting(0);#關閉錯誤報告，防止 PHP 顯示錯誤訊息。
session_start();#讓程式能夠存取目前使用者的登入狀態。
if (!$_SESSION["id"]) {
    echo "Please log in to your account";
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
}
else{    

   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");#這行程式碼連接 db4free.net 的 MySQL 資料庫，使用帳號 immust，密碼 immustimmust，並選擇 immust 資料庫。
   $sql="insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')"; #這行程式碼會將使用者填寫的 ID 和 密碼 ($_POST['id'] 和 $_POST['pwd']) 插入 user 資料表。
   if (!mysqli_query($conn, $sql)) {#如果 SQL 執行失敗，就顯示 "New command error"。
     echo "New command error";
   }
   else{
     echo "Add user successfully, return to web page after three seconds";
     echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";#如果 SQL 執行成功，則顯示 "Add user successfully"，並在 3 秒後導向 18.user.php 頁面。
   }
}
?>
