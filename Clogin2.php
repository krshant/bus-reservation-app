<?php
session_start();
$id=session_id();	
?>

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
</style>
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
<?php

	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db("atpl",$con);

	$aa=$_POST['username'];
	$bb=$_POST['pswd'];
	$flag=0; //false; 


	$sql="select * from userdetails where username='$aa' AND pswd='$bb'";


	$result=mysql_query($sql,$con); 

	while( $row=mysql_fetch_array($result))
	{
	$flag=1; // true;
	
			$_SESSION['id']=session_id();	
			$_SESSION['user']=$aa;
	}

	
	if($flag==1){

	echo "<h3> Login successfully </h3> ";

	$result=mysql_query($sql,$con);
	$row=mysql_fetch_array($result);
	
	$_SESSION['userid']=$aa; //session created
	echo "<br> Logged in: ".$_SESSION['userid'] ."<br>";	
	echo "<br>";
	echo "<a href='Uhome.php'> proceed now </a> ";
	echo "</h3>";
	}

	else
	{
	echo "<h4> Login failed </h4> ";
	echo " <h4> <a href='Clogin1.php'> Try Again </a> </h4>";
	}


	?>

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
