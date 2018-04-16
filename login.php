<?php 
session_start();
?>
<html>

<?php

include 'database.php';

$a = $_POST['mname'];
$_SESSION['mname'] = $a;
$sql = "SELECT * FROM Name WHERE mname='$a' ";
$result = $conn->query($sql);
if (!$row = $result->fetch_assoc()) {
	echo "<script type='text/javascript'>alert('Invalid login');</script>";
	header( "refresh:0;url=login.html" );
}
else{
	header("Location: function.php");
}

?>

</html>