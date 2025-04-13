<?php
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   $result=mysqli_query($conn, "select * from user");
   $login=FALSE;
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;
     }
   } 
#If login is successful: display a message and redirect to bulletin.php after 3 seconds
   if ($login==TRUE){echo "Login successful";
    echo "<meta http-equiv=REFRESH content='3,url=bulletin.php'>";
  }
  else{
#if login fails: display error message and still redirect to bulletin.php after 3 seconds
    echo "Account/Password Error";
    echo "<meta http-equiv=REFRESH content='3,url=bulletin.php'>";
  }
?>
