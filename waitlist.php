<!DOCTYPE HTML>
<html>
<head>
	<title>wait list</title>
	<style>
	table {
    border-collapse: collapse;
    width: 100%;
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
	</style>
</head>
<body>
Factorial :
<table style="width:100%">
  <tr>
    <th>Name</th>
    <th>Rank</th> 
  </tr>
  <?php
  include 'database.php';
  $a_sql="SELECT * FROM waitlist";
  $fetch = mysqli_query($conn,$a_sql); 
  while($row = mysqli_fetch_array($fetch)) {
      if($row['function']=="Factorial")
      {
          echo  "<tr>
               <td>".$row['name']."</td>
               <td>".$row['rank']."</td>
                </tr>"; 
      }
        
   }
?>
</table>
<br>
Squareroot :
<table style="width:100%">
  <tr>
    <th>Name</th>
    <th>Rank</th> 
  </tr>
  <?php
  include 'database.php';
  $a_sql="SELECT * FROM waitlist";
  $fetch = mysqli_query($conn,$a_sql); 
  while($row = mysqli_fetch_array($fetch)) {
      if($row['function']=="Squareroot")
      {
          echo  "<tr>
               <td>".$row['name']."</td>
               <td>".$row['rank']."</td>
                </tr>"; 
      }
        
   }
?>
</table>
<br>
Sort :
<table style="width:100%">
  <tr>
    <th>Name</th>
    <th>Rank</th> 
  </tr>
  <?php
  include 'database.php';
  $a_sql="SELECT * FROM waitlist";
  $fetch = mysqli_query($conn,$a_sql); 
  while($row = mysqli_fetch_array($fetch)) {
      if($row['function']=="Sort")
      {
          echo  "<tr>
               <td>".$row['name']."</td>
               <td>".$row['rank']."</td>
                </tr>"; 
      }
        
   }
?>
</table>
<br>
Search :
<table style="width:100%">
  <tr>
    <th>Name</th>
    <th>Rank</th> 
  </tr>
  <?php
  include 'database.php';
  $a_sql="SELECT * FROM waitlist";
  $fetch = mysqli_query($conn,$a_sql); 
  while($row = mysqli_fetch_array($fetch)) {
      if($row['function']=="Search")
      {
          echo  "<tr>
               <td>".$row['name']."</td>
               <td>".$row['rank']."</td>
                </tr>"; 
      }
        
   }
?>
<br>
</table>

</body>
</html>