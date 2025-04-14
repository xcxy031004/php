<?php
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   $result=mysqli_query($conn, "select * from user");
   $login=FALSE;#比較使用者提交的帳號（$_POST["id"]）和密碼（$_POST["pwd"]）是否與每一行的 id 和 pwd 相符。
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;#如果找到匹配的記錄，將 $login 變數設為 TRUE，表示登入成功。
     }
   } 
   if ($login==TRUE){echo "Login successful";
    echo "<meta http-equiv=REFRESH content='3,url=bulletin.php'>";
  }
  else{
    echo "Account/Password Error";
    echo "<meta http-equiv=REFRESH content='3,url=bulletin.php'>";
  }
?>
