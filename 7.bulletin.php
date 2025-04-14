#bulletin in html table form
<?php
    error_reporting(0);
    $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    $result=mysqli_query($conn, "select * from bulletin");
    echo "<table border=2><tr><td>Notice No</td><td>Notice Category</td><td>title</td><td>Announcement content</td><td>Release time</td></tr>";
    while ($row=mysqli_fetch_array($result)){
        echo "<tr><td>";#每行的 id、type、title、content 和 time 資料分別填入 HTML 表格中，並使用 <td> 標籤顯示。
        echo $row["bid"];
        echo "</td><td>";
        echo $row["type"];
        echo "</td><td>"; 
        echo $row["title"];
        echo "</td><td>";
        echo $row["content"]; 
        echo "</td><td>";
        echo $row["time"];
        echo "</td></tr>";#每行資料均包裹在 <tr> 標籤中，形成表格的每一列。
    }
    echo "</table>"
?>
