<?php
function OpenCon()
 {
 $dbhost = "f76364ec.ngrok.io";
 $dbuser = "root";
 $dbpass = "";
 $db = "ecl";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>