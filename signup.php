<?php
include 'database.php';
$a = $_POST['name'];
$sql = "INSERT INTO Name(mname) VALUES ('$a')";
$result = $conn->query($sql);
$a_sql="SELECT * FROM Name";
$fetch = mysqli_query($conn,$a_sql);
header("Location:login.html");
?>
