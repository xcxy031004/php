<?php
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   $result=mysqli_query($conn, "select * from user");
   $login=FALSE;
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {#比較使用者在表單中提交的 id 和 pwd 是否與每一行的 id 和 pwd 相符。
       $login=TRUE;#如果找到匹配的記錄，將 $login 設為 TRUE，表示登入成功。
     }
   } 
   if ($login==TRUE) {
    session_start();
    $_SESSION["id"]=$_POST["id"];
    echo "Login successful";#顯示訊息：輸出「Login successful」以通知使用者登入成功。
    echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";#跳轉頁面：在 3 秒後自動跳轉到 11.bulletin.php 頁面（通常是公告頁面）。
   }

  else{
    echo "Account/Password Error";#顯示錯誤訊息：輸出「Account/Password Error」通知使用者登入失敗。
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";#跳轉頁面：在 3 秒後自動跳轉到 2.login.html 頁面（通常是登入頁面）。
  }
?>
