<?php
/* Database connection start */
$servername = "localhost:3306";
$username = "id18331819_root";
$password = "FKven3K[dE>re5Lu";
$dbname = "id18331819_mcet_comments";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>