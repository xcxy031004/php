<?php
    session_start();
    unset($_SESSION["counter"]);
    echo "Counter reset successfully....";#透過 echo 輸出一條訊息到網頁，告知使用者計數器已成功重置。
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";#使用 HTML 的 <meta> 標籤，在 2 秒後自動跳轉到 8.counter.php 頁面（通常是顯示計數器的主頁面）。

?>
