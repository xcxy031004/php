<?php
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); #database connection
    $result=mysqli_query($conn, "select * from user"); #take data from user
    $row=mysqli_fetch_array($result); #take the first row of the query
    echo $row["id"] . " " . $row["pwd"]."<br>"; # 
    $row=mysqli_fetch_array($result); #take the second row of the query
    echo $row["id"] . " " . $row["pwd"];
?>
