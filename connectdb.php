<?php
define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","Server");


$dbhandle = new mysqli(HOSTNAME,USERNAME,PASSWORD,DATABASE) or die("Connection failed");



?>