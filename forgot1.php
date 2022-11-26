<?php
session_start();
if ($_SESSION['id']==false)
{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Forgot password</title>
<style>
#container	{
		width:80%;
		height:400px;
		background:lightgreen;
		}
#he	{
	font-size:28px;
	font-weight:bold:
	}

table	{
	width:300px;
	margin:30px;
	}
</style>

</head>
<body>
<center>
<div id="container">
<div id="he">Change Password</div>
<form name="f1" action="forgot2.php" method="POST">
<table>
	<tr>
	 <th>username</th>
	 <td><input type="text" name="username"></td>
	</tr>
	<tr>
	 <th>Security Q</th>
	 <td><select name="securityQ">
<option value="">select</option>

<?php

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("atpl",$con);

$sql="select distinct securityQ from userdetails";

$result=mysql_query($sql,$con); //F9

while($row=mysql_fetch_array($result))
{
$d=$row['securityQ'];
echo "<option value='$d'>$d</option>";	
}

?>
</select></tr>
	<tr>
	 <th>Answer</th>
	 <td><input type="text" name="ans"></td>
	</tr>

	<tr>
	 <th>Click Here</th>
	 <td><input type="submit" name="btn"></td>
	</tr>
</table>
</form>
</div>
</center>
</body>
</html>