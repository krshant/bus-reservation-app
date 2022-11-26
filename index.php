<html>
<head>
<title>Login page</title>

<style>
#container	{
		width:80%;
		height:450px;
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

#left	{
	width:40%;
	height:300px;
	background:#99FF99;
	float:left;
	margin-top:20px;
	margin-left:90px;
	}

#right	{
	width:40%;
	height:300px;
	background:white;
	float:right;
	margin-top:20px;
	margin-right:87px;
	}

#footer	{
	width:80%;
	height:80px;
	background:#202020;
	}
#btn	{
	width:80px;
	height:25px;
	background:#99FF99;
	margin-right:50px;
	margin-top:0px;
	}
#ft	{
	padding-top:30px;
	color:#FFFFFF;
	letter-spacing:1px;
	font-family:arial;
	font-size:14px;
	text-decoration:none;
	}

select	{
	width:145px;
	}
#us1 a	{
	text-decoration:none;
	color:green;
	}
img	{
	width:95%;
	height:250px;
	margin-top:40px;
	}
</style>

<script>
function logIn(){
a = document.f1.aa.value;
b = document.f1.bb.value;

if(a=="")
{
	alert("username can't be blank");
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
<div
<div id="left">
<img src="bus.png">
</div>
<div 
<div id="right">

<form action="index1.php" method="POST" name="f1"  onsubmit="return logIn()">
<h2>Admin Login</h2> 
<b>Username:&nbsp;</b><input type="text" name="username" id="aa"><br><br>

<b>Password:&nbsp;</b><input type="password" name="pswd" id="bb"><br><br>

<br>

&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="submit" name="sub" id="btn" value="Login" >
<br>
</form>
<div id="us">
<h3 id="us1">Login as:<a href="Clogin1.php">&nbsp;User</a></h3>
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
