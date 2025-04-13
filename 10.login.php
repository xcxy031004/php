#登入成功後將使用者ID 儲存至會話中，然後跳轉至11.bulletin.php頁面。
<?php
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   $result=mysqli_query($conn, "select * from user");
   $login=FALSE;
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;
     }
   } 
   if ($login==TRUE) {
    session_start();
    $_SESSION["id"]=$_POST["id"];
    echo "Login successful";
    echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
   }

  else{
    echo "Account/Password Error";
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
  }
?>
