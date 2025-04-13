<?php
$conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); 
if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
}
$result = mysqli_query($conn, "SELECT * FROM user");
while ($row = mysqli_fetch_array($result)) {    #show all rows with loop
    echo $row["id"] . " " . $row["pwd"] . "<br>";
}
mysqli_close($conn);    #close connection
?>
