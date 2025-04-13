#login and save the user ID into the session if successful,then direct to the 11.bulletin.php page
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
