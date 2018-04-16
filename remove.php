<?php 
session_start();
?>
<?php
include 'connectdb.php';
$a = $_POST['function'];
$b = $_SESSION['mname'];
$a_sql = "UPDATE Functions SET flag=0,name='\0' WHERE function='$a' and name='$b' ";
$fetch=mysqli_query($dbhandle,$a_sql);
if ($dbhandle->query($a_sql) === TRUE) 
{
	header( "refresh:0;url=function.php" );
} 
else 
{
	echo "Error deleting record: " . $dbhandle->error;
}
	
$dbhandle->close();
?>