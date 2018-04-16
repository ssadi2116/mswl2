<?php include 'connectdb.php'; ?>
<!DOCTYPE html>
<html>
 <head>
<title>FRUITS</title>
  </head>
  <body>
            <div  align="center">
                 <form action="submit.php" method="POST">
                     <select name="fruit" id="fruit">
                        <option name="fruit">Select your fruit</option>
                        <?php 
                        $sql = "SELECT * FROM fruits";
                        $result = $dbhandle->query($sql);
                        while($rs=$result->fetch_assoc()){
                          ?>
                        <option value="<?php echo $rs["id"]; ?>"> <?php echo $rs["fruit"]; ?> </option>
                      <?php
                        }
                        ?>
                      </select>
                    <br>
                    <br>
                    <input type="submit" value="SUBMIT"></input>
                  </form>
            </div>
            <a href="logout.php">Logout</a>
            <a href="show.php">Show fruits</a>
</body>
</html>
