<html>
    <head><title>Add new user</title></head>
    <body>
<?php        
    error_reporting(0);#關閉錯誤報告，避免顯示 PHP 執行時的錯誤訊息。
    session_start();#啟動 session，讓程式能夠存取已登入的使用者資訊。
    if (!$_SESSION["id"]) {#如果 $_SESSION["id"] 不存在（代表使用者未登入），則顯示「請先登入帳號」，並透過 <meta> 標籤在 3 秒後自動導向 10.login.html 這個登入頁面。
        echo "Please log in to your account";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{    
        echo "
            <form action=15.user_add.php method=post>
                iD ：<input type=text name=id><br> 
                PWD：<input type=text name=pwd><p></p>
                <input type=submit value=Added> <input type=reset value=Clear>
            </form>
        ";
    }
?>
    </body>
</html>
