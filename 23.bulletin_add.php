<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $sql="insert into bulletin(title, content, type, time) 
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')";#執行 INSERT 指令，將公告存入資料庫
        if (!mysqli_query($conn, $sql)){
            echo "New command error";#如果 SQL 執行失敗，顯示 "New command error"。
        }
        else{
            echo "The new notice was added successfully, and the web page will be returned after three seconds.";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";#如果 SQL 執行成功，顯示 "The new notice was added successfully"，並在 3 秒後導向 11.bulletin.php。
        }
    }
?>
