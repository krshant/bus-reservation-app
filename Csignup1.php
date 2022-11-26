<!DOCTYPE html>
<html>
<head>
<title>User signup page</title>
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
	background:#FF3399;
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

select	{
	width:140px;
	}

</style>
<script>
function uSign(){
a = document.frm.username.value;
b = document.frm.pswd.value;
c = document.frm.phone_no.value;
d = document.frm.email.value;

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
else if(c=="")
{
	alert("Phone can't be blank");
	return false;
}
else if(d=="")
{
	alert("Email can't be blank");
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
		<b><font color="white"> Bus Reservation System </font></b>
	</div>
</div>
<form action="Csignup2.php" method="POST" name="frm" onsubmit="return uSign()">
<h2>User Signup</h2> 
<b>Username :&nbsp;</b><input type="text" name="username" id="aa">&nbsp;&nbsp;

<b>Password :&nbsp;</b><input type="text" name="pswd" id="bb"><br><br>


<b>Phone :&nbsp;</b><input type="text" name="phone_no" id="bb">&nbsp;&nbsp;&nbsp;


<b>Email :&nbsp&nbsp;&nbsp;</b><input type="text" name="email" id="bb"><br><br>


<b>SecurityQ :&nbsp;</b><select name="securityQ" id="bb">
			<option value="how old are you">How old are you?</option>
			<option value="your favourite subject">Your favourite subject?</option>
			</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


<b>Answer :&nbsp;</b><input type="text" name="ans" id="bb"><br><br>


 &nbsp; &nbsp; &nbsp; &nbsp; <input type="submit" name="sub" id="btn" value="Signup" >

</form>
<div id="ad">
<h3 id="ad1">Already Signup?<a href="Clogin1.php">&nbsp;Login</a></h3>
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
