#delete the login session and redirect the user back to the login page
<?php
    session_start();#啟動會話
    unset($_SESSION["id"]);#刪除使用者 ID
    echo "Logout successful....";#顯示登出成功訊息
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
?>
