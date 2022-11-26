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
<title>History page</title>
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
		width:22%;
		height:340px;
		float:left;
		background:#99FFCC;
		}

#middlePart	{
		width:78%;
		height:340px;
		float:right;
		}

#gg	{
	width:100%;
	height:100px;
	text-align:center;
	font-size:16px;
	padding-top:12px;
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
		padding-left: 55px;
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

#rt	{
	width:90%;
	height:300px;
	background:white;
	margin-left:20px;
	}
#hh	{
	padding-top:10px;
	}
td	{
	text-align:center;
	border:1px solid #99FF99;
	padding:2px;
	font-size:10px;
	}
th	{
	text-align:center;
	border:1x solid #99FF99;
	padding:2px;
	background:#99FF99;
	font-size:12px;
	}
#btn	{
	margin-top:10px;
	margin-left:80px;
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
</style>
</head>
<body>
<center>
<div id="container">
<div id="banner">
	<div id="header">
		<b><font color="white">Bus Reservation System </font></b>
	</div>
</div>

  	<!-----------Left part -------------------!>
<div
<div id="leftPart">
<div id="gg">
<img src="admin.png"><br>
<p><strong>Logged :</strong>
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

	<!-----------Middle part -------------------!>

<div
<div id="middlePart">
<div id="rt">
<h2 id="hh">Booking History</h2> 

	<?php

	//connection established
	$con=mysql_connect("localhost","root","");
	//database selected
	$db=mysql_select_db("atpl",$con);

	$sql="select * from Cancel_history";
	$result=mysql_query($sql,$con); 

	echo "<table>";
	echo "<tr>";
	echo "<th>CID</th>";
	echo "<th>Username </th>";
	echo "<th>PNR </th>";
	echo "<th>Request Date </th>";
	echo "<th>Approve Date </th>";
	echo "<th>Amount </th>";
	echo "<th>Remark</th>";
	echo "</tr>"; 
	while($row=mysql_fetch_array($result))
	{  
	
	echo "<tr>";
	$a1=$row['cid'];
	$a2=$row['uname'];
	$a3=$row['pnr'];
	$a4=$row['cancel_request_date'];
	$a5=$row['cancel_approve_date'];
	$a6=$row['amount'];

	echo "<td>".$a1." </td>";
	echo "<td>".$a2." </td>";
	echo "<td>".$a3." </td>";
	echo "<td>".$a4."</td>";
	echo "<td>".$a5."</td>";
	echo "<td>".$a6."</td>";
	echo "<td>APPROVE</td>";
	echo "</tr>";

	}

	echo "</table>";
?>	
	
</div>
</div>
</div>

<!-----------Footer part -------------------!>
<div id="footer">
<div id="ft">
		&copy; Copyright and All right reserved	2021 &nbsp; | &nbsp;&phone;+91-8910244147
		</div>
</div>

</body>
</center>
</html>