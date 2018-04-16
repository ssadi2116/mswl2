<?php 
session_start();
?>
<?php

include 'connectdb.php';
?>
<!DOCTYPE html>
<html lang="en" style="overflow: hidden;">
 <head>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
    body
  {
      background-image: url('v.jpg');
      background-size: 100%;
      opacity: 0.9;
  }
  h1{
    color: red;
  }
     .end{
            background-color:black;
            height:74px;
            text-align:center
            
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


      #sign_user1{
  font-size:14px;
  color:#FFF;
  text-align:center;
  background-color:#3B5998;
  width:530px;
  padding:10px;
  margin-top:10px;
  cursor: pointer;
  }
   #function{
   overflow:hidden;
   height: 40px;
   width:350px;
   -moz-border-radius: 9px 9px 9px 9px;
   -webkit-border-radius: 9px 9px 9px 9px;
   border-radius: 9px 9px 9px 9px;
   box-shadow: 1px 1px 11px #330033;
   font-family: comic sans ms;
   font-size: 25px;
   background: white ;

}
  
    </style>
    <body>
    <h1 >Welcome <?php echo $_SESSION["mname"]; ?></h1>
    <br><br><br>
       <h1 align="center"> Select your Function</h1>
    <br><br>
<div  align="center">
                 <form action="submit.php" method="POST">
                     <select id="function" name="function"  >
                        <option name="function" class="btn-lg" >Select your function to access</option>
                        <?php 
                        $sql = "SELECT * FROM Functions";
                        $result = $dbhandle->query($sql);
                        while($rs=$result->fetch_assoc()){
                          ?>
                        <option value="<?php echo $rs["id"]; ?>"> <?php echo $rs["function"]; ?> </option>
                      <?php
                        }
                        ?>
                      </select>
                      <br>
                       <br>
                    <input class="btn-success btn-lg" type="submit" value="Submit"></input></a>
                    </li></option>
                  </form>
            </div>
        </div>
         <br>
       <button onclick="location.href = 'logout.php';" id="sign_user" class="float-left submit-button" >  Logout</button>
            <button onclick="location.href = 'show.php';" id="sign_user" class="float-left submit-button" >  Show Functions</button>
            <button onclick="location.href = 'client.php';" id="sign_user" class="float-left submit-button" >  Show Clients</button>

            <!--<button onclick="location.href = 'waitlist.php';" id="sign_user" class="float-left submit-button" >  Show Waitlist</button>-->
            </body>
</head>
</html>