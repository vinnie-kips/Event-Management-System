<?PHP include("headfile.php") ?>
<?PHP include("config.php") ?>

<A href="adminmain.php"> Admin Main </A> <BR> 


<script language="javascript">
function Validate()
{
var x= document.form1.text1.value;
if (x.length<=0)
{
alert("Please enter the UserName");
return false;
}

x= document.form1.pass1.value;
if (x.length <= 0)
{
alert("Please enter the Password");
return false;
}

y = document.form1.text6.value;
if(isNaN(y)||y.indexOf(" ")!=-1)
{
alert("Enter numeric value")
return false; 
}
if (y.length!=10)
{
alert("enter 10 characters");
return false;
}


var emailID = document.form1.text7.value;
atpos = emailID.indexOf("@");
dotpos = emailID.lastIndexOf(".");
if (atpos < 1 || ( dotpos - atpos < 2 )) 
{
alert("Please enter correct email ID")
return false;
}



}
</script>

<?php
$res1="";
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$t1=addslashes($_POST['text1']); 
$p1=addslashes($_POST['pass1']); 
$t2=addslashes($_POST['text2']); 
$t3=addslashes($_POST['text3']); 
//$t4=addslashes($_POST['text4']); 
//$t5=addslashes($_POST['text5']); 
$t6=addslashes($_POST['text6']); 
$t7=addslashes($_POST['text7']); 


$sql = "SELECT  * from StudentTab where RegNo='$t1'";
$result = $conn->query($sql);
if($row = $result->fetch_row()) 
{
$res1="This MemberNo is allready present";
}
 else
 {
$sql="Insert into StudentTab values('$t1','$p1','$t2','$t3','$t6','$t7')";
//echo($sql);
$result = $conn->query($sql);
if(!$result)
{
    $res1= "Record not inserted";
//header("location: custmain.php");
}
else 
{
    $res1= "Record inserted successfully";
}
 }
}
?>




<table border="0" width="100%" align="center"> 
<tr><td height ="100" width="25%"></td><td>

    <form method="POST" name="form1"   action="AdminMember.php">
    <table border="1" width="90%" align="center" cellpadding="0" cellspacing="0"> 
    <tr> <td height="20" colspan="2"> <img style="-webkit-user-select: none" src="images/studentmain.bmp"> </td> </tr>    
    <tr> <td height="60" colspan="2">  <?php echo($res1); ?></td> </tr> 
    <tr> <td height="40"> MemberNo </td> <td> <input type="text" name="text1" value=""></td> </tr>
    <tr> <td height="40"> Password </td> <td> <input type="password" name="pass1" value="abcd"></td> </tr>
    <tr> <td height="40"> Member Name </td> <td> <input type="text" name="text2" value=""></td> </tr>
    <tr> <td height="40"> Address </td> <td> <Textarea  name="text3" cols="30" rows="5" > </textarea></td> </tr>
    <tr> <td height="40"> MobileNo </td> <td> <input type="text" name="text6" value=""></td> </tr>
    <tr> <td height="40"> Email Id </td> <td> <input type="text" name="text7" value=""></td> </tr>
 
</td>  </tr>
	
	
	
    <tr> <td height="40">  </td> <td align="center"> <input type="submit" name="Save"  onclick="return Validate()"></td> </tr>       
    
 <tr> <td height="40" colspan="2"> <?php echo($res1); ?> </td> </tr> 

</table>
        </form>
</td><td width="25%"></td></tr>
</table>

<?PHP include("footerfile.php") ?>

