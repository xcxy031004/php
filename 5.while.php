<?php
$conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); #與資料庫伺服器 db4free.net 建立連線。
if (!$conn) {
    die("connection failed: " . mysqli_connect_error());#如果連線失敗，則終止程式執行並輸出錯誤訊息「connection failed」以及具體的錯誤原因。
}
$result = mysqli_query($conn, "SELECT * FROM user");
while ($row = mysqli_fetch_array($result)) { 
    echo $row["id"] . " " . $row["pwd"] . "<br>";#輸出當前行中的 id 欄位與 pwd 欄位，並加上一個換行標籤 <br>，以便在瀏覽器中顯示。
}
mysqli_close($conn);  #執行 mysqli_close 函數，釋放資料庫連線資源。
?>
