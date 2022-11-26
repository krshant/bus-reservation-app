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
<title>Bus booking page 2</title>
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
		height:380px;
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
#rt	{
	width:500px;
	height:300px;
	background:white;
	margin-left:200px;
	}
#hh	{
	padding-top:10px;
	}
th	{
	text-align:left;
	}
#btn	{
	width:120px;
	height:25px;
	background:#99FF99;
	margin-top:10px;
	margin-left:80px;
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
<h2 id="hh">Details</h2> 
<div id="tb">
	<?php

	//connection established
	$con=mysql_connect("localhost","root","");

	//database selected
	$db=mysql_select_db("atpl",$con);
	$bb=$_GET['bno'];
	
	$sql="select bno,source,destination,doj,seat,price from bus_schedule where bno='$bb'" ;
	
	$result=mysql_query($sql,$con); 

	
	while( $row=mysql_fetch_array($result))
	{
	$a=$row['bno'];
	$b=$row['source'];
	$c=$row['destination'];
	$d=$row['doj'];
	$e=$row['seat'];
	$f=$row['price'];
	
	echo "<form name='f1' action='Bbooking3.php' method='post'>";
	echo "<table>";
	
	echo "<tr>";
	echo "<th> Bus No. </th>";
	echo "<td> <input readonly type='text' name='bno' value='$a'></td>";
	echo "</tr>";

	echo "<tr>";
	echo "<th>Source </th>";
	echo "<td> <input readonly  type='text' name='sre' value='$b'></td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<th>Destination</th>";
	echo "<td> <input readonly type='text' name='dest' value='$c'></td>";
	echo "</tr>";

	echo "<tr>";
	echo "<th> Date of Journy </th>";
	echo "<td> <input readonly type='text' name='dat' value='$d'></td>";
	echo "</tr>";

	echo "<tr>";
	echo "<th>Seat </th>";
	echo "<td> <input readonly  type='text' name='se' value='$e'></td>";
	echo "</tr>";

	echo "<tr>";
	echo "<th>Price </th>";
	echo "<td> <input readonly type='text' name='pr' value='$f'></td>";
	echo "</tr>";
		
	echo "<tr>";
	echo "<td colspan='2'> <input  type='submit' name='sub' value='Confirm booking' id='btn'></td>";
	echo "</tr>";
	echo "</table>";
	echo "</form>";
	}
	
	?>
</div>
</div>
</div>
	<!-----------Footer part -------------------!>
</div>
<div id="footer">
<div id="ft">
		&copy; Copyright and All right reserved	2021 &nbsp; | &nbsp;&phone;+91-8910244147
		</div>
</div>

</body>
</center>
</html>
