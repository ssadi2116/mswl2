<?php 
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>MY unctions</title>
	<style>
	table {
    border-collapse: collapse;
    width: 75%;
}
th, td {
    text-align: left;
    padding: 8px;
}
tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}		
     #sign_user{
  font-size:14px;
  color:#FFF;
  text-align:center;
  background-color:#3B5998;
  width:262px;
  padding:10px;
  margin-top:10px;
  cursor: pointer;
  }
	</style>
</head>
<body>

<table style="width:100%">
  <tr>
    <th>Function list of yours</th>  
  </tr>
  <?php
  include 'connectdb.php';
  $a = $_SESSION['mname'];
  $a_sql="SELECT * FROM Functions";
  $fetch = mysqli_query($dbhandle,$a_sql); 
  while($row = mysqli_fetch_array($fetch))
   {
      if($row['name']==$a && $row['flag']==1)
      {
          echo  "<tr>
               <td>".$row['function']."</td>
                </tr>"; 
      }   
   }
?>
</table>
<br>
<button onclick="location.href = 'remove.html';" id="sign_user" class="float-left submit-button" > Release Function</button>
</body>
</html>