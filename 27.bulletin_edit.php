<?php

    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "Please log in your account";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
      #執行 UPDATE 指令，修改公告內容，依據 bid（公告編號），修改公告的標題、內容、發布時間與公告類型 (type)。
        if (!mysqli_query($conn, "update bulletin set title='{$_POST['title']}',content='{$_POST['content']}',time='{$_POST['time']}',type={$_POST['type']} where bid='{$_POST['bid']}'")){
            echo "修改錯誤";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";#如果 SQL 執行失敗，顯示 "修改錯誤"，並在 3 秒後導向公告列表 (11.bulletin.php)。
        }
        else{
            echo "修改成功，三秒鐘後回到佈告欄列表";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";#如果 SQL 執行成功，顯示 "修改成功"，並在 3 秒後跳轉公告列表 (11.bulletin.php)。
        }
    }

?>
