<?php
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    $result=mysqli_query($conn, "select * from user");
    $row=mysqli_fetch_array($result); #將第一行的 id 和 pwd 資料輸出到瀏覽器，並加上一個 HTML 的換行標籤 <br>。
    echo $row["id"] . " " . $row["pwd"]."<br>"; # 
    $row=mysqli_fetch_array($result); #從查詢結果中擷取第二行的資料，並存放到 $row 中。
    echo $row["id"] . " " . $row["pwd"];
?>
