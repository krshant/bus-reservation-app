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
<title>Bus booking page 3</title>
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
<img src="user.png"><br>
<p><strong>Logged :</strong>
	<?php
		echo $_SESSION['userid'];
	?>
</div>
<div id="sideMenu">
		<li id="list"><a href="Uhome.php">User Home</a></li>
		<li id="list"><a href="Bsearch.php">Search Bus</a></li>
		<li id="list"><a href="cancel1.php">Search Ticket</a></li>
		<li id="list"><a href="logout1.php"><b>Logout</b></a> </li>

	</div>
</div>

	<!-----------Middle part -------------------!>

<div
<div id="middlePart">
<div id="rt">
<h2 id="hh">Booking Details</h2> 

	<?php

	$userid=$_SESSION['userid'];
	$email=$_POST['email'];
	$bno=$_POST['bno'];
	$source=$_POST['sre'];
	$dest=$_POST['dest'];
	$doj=$_POST['dat'];
	$price=$_POST['pr'];
	$bookSeat=$_POST['np'];
	
	$tot_price=$bookSeat*$price;

	

	//connection established
	$con=mysql_connect("localhost","root","");

	//database selected
	$db=mysql_select_db("atpl",$con);
	
	$sql="update bus_schedule set seat=seat-$bookSeat where bno=$bno";

	$result=mysql_query($sql,$con); 
	
	//insert data in bkbus table
	
	$sql1="insert into bkbus(username,mail,bno,source,destination,seats,doj,price,tot_price,STATUS) values('$userid','$email',$bno,'$source','$dest',$bookSeat,'$doj',$price,$tot_price,'OK')" ;
	
	$result1=mysql_query($sql1,$con); 
	
	
	$sql2="select * from bkbus where username='$userid'";
	$result2=mysql_query($sql2,$con); 
	

	if($result1)
	{
	$result2=mysql_query($sql2,$con); 
	$row=mysql_fetch_array($result2);
	
	echo "<table>";
	
	echo "<tr>";
	echo "<th>PNR</th>";
	echo "<th>NAME </th>";
	echo "<th>EMAIL </th>";
	echo "<th>BUS NO. </th>";
	echo "<th>SOURCE </th>";
	echo "<th>DEST </th>";
	echo "<th>SEATS</th>";
	echo "<th>DOJ</th>";
	echo "<th>COST </th>";
	echo "<th>TOT COST </th>";
	echo "<th>STATUS </th>";
	echo "</tr>"; 
$row=mysql_fetch_array($result2);  
	
	echo "<tr>";
	$a1=$row['pnr'];
	$a2=$row['username'];
	$a3=$row['mail'];
	$a4=$row['bno'];
	$a5=$row['source'];
	$a6=$row['destination'];
	$a7=$row['seats'];
	$a8=$row['doj'];
	$a9=$row['price'];
	$a10=$row['tot_price'];
	

	echo "<td>".$a1." </td>";
	echo "<td>".$a2." </td>";
	echo "<td>".$a3." </td>";
	echo "<td>".$a4."</td>";
	echo "<td>".$a5."</td>";
	echo "<td>".$a6."</td>";
	echo "<td>".$a7."</td>";
	echo "<td>".$a8." </td>";
	echo "<td>".$a9."</td>";
	echo "<td>".$a10." </td>";
	echo "<td>OK</td>";
	echo "</tr>";

	

	
	echo "</table>";
	
	
	}
		
	else
	{
	echo " insertion fail";
	}  
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