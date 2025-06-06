<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "Please Log In Your Acocount";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")){#根據使用者提交的 id ($_POST['id'])，更新其密碼為 pwd ($_POST['pwd'])。
            echo "Fix Error";
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
            #如果 SQL 更新失敗，顯示 "Fix Error"，並在 3 秒後導向 18.user.php 頁面。                                                                                       
        }else{
            echo "The modification is successful and the webpage will be returned in three seconds";
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";#如果 SQL 更新成功，顯示 "The modification is successful..."，同樣在 3 秒後導向 18.user.php。  
        }
    }
?>
