<html>
    <head><title>User Management</title></head>
    <body>
    <?php
        error_reporting(0);
        session_start();
        if (!$_SESSION["id"]) {#檢查是否登入 (if (!$_SESSION["id"]))
            echo "Please log in to your account";
            echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
        }
        else{   
            echo "<h1>User Management</h1>
                [<a href=14.user_add_form.php>Add new user</a>] [<a href=11.bulletin.php>Back to bulletin board list</a>]<br>
                <table border=1>
                    <tr><td></td><td>Account</td><td>pwd</td></tr>";
          #如果已登入，則顯示使用者管理介面
          #輸出 「User Management」 標題。
          #提供 新增使用者 (<a href=14.user_add_form.php>Add new user</a>) 與 返回公告欄列表 (<a href=11.bulletin.php>Back to bulletin board list</a>) 的連結。
          #顯示一個 表格 (<table border=1>)
          
            $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
            $result=mysqli_query($conn, "select * from user");
            while ($row=mysqli_fetch_array($result)){
                echo "<tr><td><a href=19.user_edit_form.php?id={$row['id']}>修改</a>||<a href=17.user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
            }
            echo "</table>";
          #第一行顯示表頭（帳號、密碼）。
          #透過 mysqli_connect() 連接 db4free.net 的 MySQL 資料庫，使用 immust 帳號和 immustimmust 密碼。
          #執行 SQL 指令 SELECT * FROM user，取得 user 資料表內的所有使用者資訊。
          #使用 while ($row=mysqli_fetch_array($result)) 迴圈讀取每一個使用者，並將其 id 和 pwd 顯示在表格內：
          #提供修改 (<a href=19.user_edit_form.php?id={$row['id']}>修改</a>) 和刪除 (<a href=17.user_delete.php?id={$row['id']}>刪除</a>) 的選項。
        }
    ?> 
    </body>
</html>
