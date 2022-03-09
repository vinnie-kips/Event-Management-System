<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> KITALA EVENT MANAGEMENT</title>
    </head>
     <body bgcolor="lightblue">
        <img src="images\logo11.bmp">
        <BR>
        <a href="adminmain.php"> <h3> Admin Main </h3></A>
        <BR>
     <center><img src="images\appliedlist.bmp"></center>
     <BR>
     

  
        
<?php
include("config.php");
session_start();
$t1=$_GET['ecode'];
$t2=$_GET['scode'];
$sql = "update ApplicantTab set sStatus='Y' where eventcode='$t1' and regno='$t2'";
$result = $conn->query($sql);
header("location: admineventapproval.php");

?>
        
      
</table>
     
     </font>
             <BR>
       