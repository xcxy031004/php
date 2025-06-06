<html>
    <head><title>Modify User</title></head>
    <body>
    <?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "Please log in to your account";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");#這行程式碼連接 db4free.net 的 MySQL 資料庫，使用 immust 帳號和 immustimmust 密碼。
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'");#這行程式碼透過 SELECT 指令，取得 user 資料表中符合 id=$_GET['id'] 的帳戶資訊，並將結果存入 $row 變數。
        $row=mysqli_fetch_array($result);
      echo "
        <form method=post action=20.user_edit.php>
            <input type=hidden name=id value={$row['id']}>
            Account：{$row['id']}<br> 
            pwd：<input type=text name=pwd value={$row['pwd']}><p></p>
            <input type=submit value=Revise>
        </form>
        ";
      #id 以 hidden 欄位儲存，避免使用者直接修改。
      #pwd 欄位允許使用者輸入新密碼。
      #提交按鈕 (Revise) 會將新密碼透過 POST 方法送到 20.user_edit.php 處理。
    }
    ?>
    </body>
</html>
