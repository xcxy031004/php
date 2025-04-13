<?php 
    if (($_POST["id"] == "xcxy031004") && ($_POST["pwd"]=="xcxy031004"))  #設定賬密
        echo"Login successful";#如果條件成立，表示使用者輸入的帳號和密碼正確，輸出「Login successful」到瀏覽器。
    else
        echo "Login failed";#如果條件不成立，表示使用者輸入的帳號或密碼不正確，輸出「Login failed」到瀏覽器。
?>
