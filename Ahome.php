<?php
session_start();
if ($_SESSION['id']==false)
{
	header("location:index.php");
}
?>

<html>
<head>
<title>Admin Login page</title>
<style>
#container	{   		
		width:80%;
		height:440px;
		background:#CCFFCC;
		}

#banner		{
		width:100%;
		height:100px;
		background:#66CC00;
		}

#header		{
		font-size:34px;
		padding-top:25px;
		text-align:left;
		padding-left:35px;
		}
#leftPart	{
		width:20%;
		height:340px;
		float:left;
		background:#99FFCC;
		}

#middlePart	{
		width:80%;
		height:340px;
		float:right;
		}

#gg	{
	width:100%;
	height:90px;
	text-align:center;
	font-size:16px;
	padding-top:10px;
	border-bottom:2px solid black;
	}

#gg a	{
	color:black;
	text-decoration:none;
	
	}

#sideMenu	{
		width:100%;
		height:300px;
		padding-top:0px;	
		}

#list	{
	color:black;
	padding-top:2px;
	list-style-type:none;
	float:left;
	}

#sideMenu a	{
		padding-left: 45px;
  		text-decoration: none;
  		font-size: 18px;
  		color: black;
  		display: block;
		padding-top:5px;
		}

img	{
	width:50px;
	height:50px;
	}

#ss	{
	color:#006600;
	}

#footer	{
	width:80%;
	height:60px;
	background:#202020;
	}

#ft	{
	padding-top:20px;
	color:#FFFFFF;
	letter-spacing:1px;
	font-family:arial;
	font-size:14px;
	text-decoration:none;
	}



#im	{
	margin-top:20px;
	}

#la	{
	color:black;
	text-decoration:none;
	}

table	{
	margin-top:40px;
	margin-left:60px;
	float:left;
	}

#kk	{
	font-size:34px;
	font-weight:bold;
	text-align:center;
	color:white;
	}
#kk a	{
	color:white;
	text-decoration:none;
	
	}

#nn	{
	font-size:14px;
	font-weight:bold;
	text-align:center;
	color:white;
	}
#ds	{
	font-size:26px;
	float:center;
	font-weight:bold;
	color:black;
	padding-top:10px;
	
	}

#pp	{
	font-size:28px;
	text-align:left;
	padding:10px 20px;
	font-family:Century Gothic;
	color:#696969;
	}

#sesLog{
	font-family:verdana;
	font-size:12px;
	line-height:180%;
	}

td	{
	border-radius:15px;
box-shadow: inset 0.2em 0.2em 0.2em 0 rgba(255,255,255,0.5), 

inset -0.2em -0.2em 0.2em 0 rgba(0,0,0,0.5);
	}
</style>
</head>
<body>
<center>		
<div id="container">
  <div id="banner">
	<div id="header">
		<b><font color="white"> Bus Reservation System </font></b>
	</div>
  </div>		


		<!----- Left part  -------!>
<div
<div id="leftPart">
	
<div id="gg">
		<img src="admin.png">
			<!----- session part -----!>
	<p><strong>Logged in:</strong>
	<?php
		echo $_SESSION['user'];
	?>
		</div>

	<div id="sideMenu">
		<li id="list"><a href="Ahome.php">Dashboard</a></li>
		<li id="list"><a href="addBus1.php">Add Bus </a></li>
		<li id="list"><a href="viewBus1.php">View Bus </a></li>
		<li id="list"><a href="Acancel1.php">Cancel Ticket</a></li>
		<li id="list"><a href="history.php">History</a></li>
		<li id="list"><a href="logout.php"><b>Logout</b></a> </li>



	</div>
</div>
		<!----- Middle part  -------!>
<div id="middlePart">
<span id="ds">WELCOME TO DASHBOARD</span>

<table width="80%">
	<tr>
	<td width=170 height=120 bgcolor="#3657A6">
	 <div id="kk"><a href="addBus1.php">Add Bus </a></div>
	<div id="nn"> add new bus <div>	
	</td> 
	<td width=130 height=120 bgcolor="#F8860C"> 
	 <div id="kk"><a href="viewBus1.php">View Bus </a></div>
	<div id="nn"> view all bus<div>
	 </td> 
	</tr>
	<tr>	
	<td width=170 height=120 bgcolor="#2DC87C"> 
	 <div id="kk"><a href="modifyBus1.php"> Update Bus </a></div>
	<div id="nn"> update bus details <div>	

	 </td> 
	
	<td width=130 height=120 bgcolor="#CC00CC"> 
	 <div id="kk"> Cancellation </div>
	<div id="nn"> view cancellation request <div>	

	 </td> 

	</tr>

	</table>

<?php
//connection established
$con=mysql_connect("localhost","root","");
//database selected
$db=mysql_select_db("atpl",$con);

?>

	
</div>
</div>
</div>	
		<!---- footer part ----!>
<div id="footer">
	<div id="ft">
	&copy; Copyright and All right reserved	2021 &nbsp; | &nbsp;&phone;+91-8910244147
	</div>
</div>

</body>
</center>
</html>
