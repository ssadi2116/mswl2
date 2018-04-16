<?php 
session_start();
?>
<?php
include 'connectdb.php';
$a = $_POST['function'];
$b = $_SESSION['mname'];
$f=0;
$a_sql="SELECT * FROM Functions";
$fetch = mysqli_query($dbhandle,$a_sql);
while($row = mysqli_fetch_array($fetch))
   {
      if($row['id'] == $a && $row['flag']==1)
      {

        
			if($row['name']==$b)
			{
				  echo "<script type='text/javascript'>alert('Already taken by you');</script>";
		          header( "refresh:0;url=function.php" );
			}
			else
            {
              if($f==0)
              {

                    echo "<script type='text/javascript'>alert('Function is already in use by other client');</script>";
					header( "refresh:0;url=function.php" );
					

			      }  
			}
		}	
			       
		else if($row['id']==$a)
	    {
			$sql = "UPDATE Functions SET flag=1,name='$b' WHERE id='$a' ";
			if ($dbhandle->query($sql) === TRUE) 
		    {
		    	echo "<script type='text/javascript'>alert('Now this function is yours');</script>";
			  header( "refresh:0;url=function.php" );

			} 
			else 
			{
				echo "Error updating record: " . $dbhandle->error;
		    }
	    }
        
     }
$dbhandle->close();
?>