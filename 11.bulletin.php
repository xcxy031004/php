#檢查使用者是否已登入。
#如果已登入，顯示公告資料表以及公告管理功能（新增、編輯、刪除）。
#如果未登入，將其重定向至登入頁面。
<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{
        echo "歡迎, ".$_SESSION["id"]."[<a href=12.logout.php>登出</a>] [<a href=18.user.php>管理使用者</a>] [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>";
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $result=mysqli_query($conn, "select * from bulletin");
        echo "<table border=2><tr><td>Notice No</td><td>Notice Category</td><td>title</td><td>Announcement content</td><td>Release time</td></tr>";
        while ($row=mysqli_fetch_array($result)){
            echo "<tr><td><a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a> 
            <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>";
            echo $row["bid"];
            echo "</td><td>";
            echo $row["type"];
            echo "</td><td>"; 
            echo $row["title"];
            echo "</td><td>";
            echo $row["content"]; 
            echo "</td><td>";
            echo $row["time"];
            echo "</td></tr>";
        }
        echo "</table>";
    }
?>
