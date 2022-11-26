<!DOCTYPE html>
<html>
<head>
<title>User login page</title>
<style>
#container	{
		width:80%;
		height:440px;
		background:#CCFFCC;
		}
#top	{
	width:100%;
	height:100px;
	background:#66CC00;
	}

#leftlogo	{
		font-size:34px;
		padding-top:25px;
		text-align:left;
		padding-left:35px;
		}
#footer	{
	width:80%;
	height:80px;
	background:#202020;
	}
#btn	{
	width:100px;
	height:30px;
	background:#66FF66;
	}
#ft	{
	padding-top:30px;
	color:#FFFFFF;
	letter-spacing:1px;
	font-family:arial;
	font-size:14px;
	text-decoration:none;
	}
#ad1 a	{
	text-decoration:none;
	color:green;
	}
#nu a	{
	text-decoration:none;
	color:green;
	}
#leftpart{	
	width:40%;
	height:250px;
	float:left;
	}
#bi	{
	width:90%;
	height:250px;
	margin-left:120px;
	}
#fm	{
	width:300px;
	height:250px;
	background:rgb(255,255,255);
	margin-left:350px;
	}
</style>
<script>
function usignIn(){
a = document.fn.username.value;
b = document.fn.pswd.value;

if(a=="")
{
	alert("Username can't be blank");
	return false;
}
else if(b=="")
{
	alert("password can't be blank");
	return false;
}
else
{
	return true;
}
}
</script>
</head>
<body>
<center>
<div id="container">
<div id="top">
	<div id="leftlogo">
		<b>	<font color="white"> Bus Reservation System </font></b>
	</div>
</div>
<div id="main">
<div id="leftpart">
<img id="bi" src="bus1.png">
</div>
<div id="fm">
<form action="Clogin2.php" method="POST" name="fn" onsubmit="return usignIn()">
<h2>User Login</h2> 
<b>Username :&nbsp;</b><input type="text" name="username" id="aa"><br><br>

<b>Password :&nbsp;</b><input type="password" name="pswd" id="bb"><br><br>


 &nbsp; &nbsp; &nbsp; &nbsp; <input type="submit" name="sub" id="btn" value="Login" >

</form>
<div id="nu">
<h3 id="ad1">New User?<a href="Csignup1.php">&nbsp;Signup</a></h3>
</div>
<div id="ad">
<h3 id="ad1">Login as:<a href="index.php">&nbsp;Admin</a></h3>
</div>
</div>
</div>
</div>

<div id="footer">
	<div id="ft">
	&copy; Copyright and All right reserved	2021 &nbsp; | &nbsp;&phone;+91-8910244147
	</div>
</div>

</body>
</center>
</html>
