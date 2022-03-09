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
     
     <font face="verdana">     
<Table border="1" align="center" width="80%" cellpadding="10">
<tr bgcolor="#ffffaa"> <td>Event Code </td> <td> RegNo </td><td> Status </td>  <td> Approve </td>  </tr>        
        
<?php
include("config.php");
session_start();

$sql = "SELECT * FROM ApplicantTab  order by eventcode";
$result = $conn->query($sql);

while($row = $result->fetch_row()) {
//print $db_field['authorname'] . ">";    
print "<tr><td >". $row[0] ."</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td><a href=adminapprove1.php?ecode=" . $row[0] . "&scode=" . $row[1] . ">Approve </a></td></tr>" ;
}

?>
        
      
</table>
     
     </font>
             <BR>
       