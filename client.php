<?php
include 'database.php';
 $a_sql="SELECT * FROM Functions";
$fetch = mysqli_query($conn,$a_sql);

?>
<!DOCTYPE html>
<html>
<head>
<style>
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

<table style="width:100%">
  <tr>
    <th>Function</th>
    <th>Flag</th> 
    <th>Name</th> 
  </tr>
  <?php while($row = mysqli_fetch_array($fetch)) {
          echo  "<tr>
               <td>".$row['function']."</td>
               <td>".$row['flag']."</td>
               <td>".$row['name']."</td>
            </tr>";  
   }
?>
</table>
<br><br><br><br><br>
<button onclick="location.href = 'login.html';" id="sign_user" class="float-left submit-button" > Main </button>

</body>
</html>