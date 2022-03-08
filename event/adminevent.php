<?PHP include("headfile.php") ?>
<?PHP include("config.php") ?>

<A href="adminmain.php"> Admin Main </A> <BR> 


<script language="javascript">
function Validate()
{
var x= document.form1.text1.value;
if (x.length<=0)
{
alert("Please enter the EventCode");
return false;
}

x= document.form1.text6.value;
if (x.length<=0)
{
alert("Please enter the Contact Person Name");
return false;
}

var y = document.form1.text7.value;
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




}
</script>

<?php
$res1="";
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$t1=addslashes($_POST['text1']); 
$t2=addslashes($_POST['text2']); 
$t3=addslashes($_POST['text3']); 
$t4=addslashes($_POST['text4']); 
$t5=addslashes($_POST['text5']); 
$t6=addslashes($_POST['text6']); 
$t7=addslashes($_POST['text7']); 


$sql = "SELECT  * from eventTab where eventcode='$t1'";
$result = $conn->query($sql);
if($row = $result->fetch_row()) 
{
$res1="This event code is allready present";
}
 else
 {
$sql="Insert into eventTab values('$t1','$t2','$t3','$t4','$t5','$t6','$t7')";
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

    <form method="POST" name="form1"   action="adminevent.php">
    <table border="1" width="90%" align="center" cellpadding="0" cellspacing="0"> 
    <tr> <td height="20" colspan="2"> <img style="-webkit-user-select: none" src="images/event.bmp"> </td> </tr>    
    <tr> <td height="60" colspan="2">  <?php echo($res1); ?></td> </tr> 
    <tr> <td height="40"> Event Code </td> <td> <input type="text" name="text1" value=""></td> </tr>
    <tr> <td height="40"> Event Name </td> <td> <input type="text" name="text2" value=""></td> </tr>
	<tr> <td height="40"> Event Type </td> <td> 
<select  name=text3 size=1>
<?php
$sql = "SELECT  eventtypename from eventtypeTab order by eventtypename";
$result = $conn->query($sql);
while($row = $result->fetch_row()) {
print "<option>"  .$row[0]. " </option>" ;
}
?>  
</select>
</td> </tr>    
    <tr> <td height="40"> Details </td> <td> <Textarea  name="text4" cols="30" rows="5" > </textarea></td> </tr>
	<tr> <td height="40"> Event Date </td> <td> <input type="text" name="text5" value=""></td> </tr>
    <tr> <td height="40"> Contact Person </td> <td> <input type="text" name="text6" value=""></td> </tr>
    <tr> <td height="40"> MobileNo </td> <td> <input type="text" name="text7" value=""></td> </tr>

    
    <tr> <td height="40">  </td> <td align="center"> <input type="submit" name="Save"  onclick="return Validate()"></td> </tr>       
    
 <tr> <td height="40" colspan="2"> <?php echo($res1); ?> </td> </tr> 

</table>
        </form>
</td><td width="25%"></td></tr>
</table>

<?PHP include("footerfile.php") ?>

