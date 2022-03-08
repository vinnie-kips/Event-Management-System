<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> KITALA EVENT MANAGEMENT</title>
    </head>
     <body bgcolor="lightblue">
        <img src="images\logo1.jpg">
        <BR>
        <a href="studentmain.php"> <h3> Member Main </h3></A>
        <BR>
     <center><img src="images\appliedlist.bmp"></center>
     <BR>
     
     <font face="verdana">     
<Table border="1" align="center" width="80%" cellpadding="10">
<tr bgcolor="#ffffaa"> <td>Event Code </td> <td> Status </td>  </tr>        
        
<?php
include("config.php");
session_start();
$svar=$_SESSION["regnovar"];
$sql = "SELECT * FROM ApplicantTab where regno='$svar' order by eventcode";
$result = $conn->query($sql);

while($row = $result->fetch_row()) {
//print $db_field['authorname'] . ">";    
print "<tr><td >". $row[0] ."</td><td>" . $row[2] . "</td></tr>" ;
}

?>
        
      
</table>
     
     </font>
             <BR>
       