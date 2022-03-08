<?php

include("config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from Form 
$myusername=addslashes($_POST['text1']); 
$mypassword=addslashes($_POST['text2']); 
echo($myusername);
$sql="SELECT uName FROM logintab WHERE uname='$myusername' and pword='$mypassword'";
$result = $conn->query($sql);

// If result matched $myusername and $mypassword, table row must be 1 row
if($result->num_rows > 0)
{


$_SESSION['adminvar']=$myusername;

header("location: adminmain.php");
}
else 
{
$error="Your Login Name or Password is invalid";
echo("fail");
}
}
?>
