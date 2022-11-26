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
<title>Cancel Page</title>
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
	font-size:8px;
	}
th	{
	text-align:center;
	border:1x solid #99FF99;
	padding:2px;
	background:#99FF99;
	font-size:10px;
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
<h2 id="hh">Ticket Cancel Details</h2> 
<?php

//connection established
$con=mysql_connect("localhost","root","");

//database selected
$db=mysql_select_db("atpl",$con);
$sql="select * from bkbus where status='CANCLE REQ' ";

$result=mysql_query($sql,$con); 

$flag=0;

while($row=mysql_fetch_array($result))
		{
			
			$flag=1;
		}

if($flag == 0)
		{
		echo "</br>";
		echo "</br>";
		echo "</br>";
		echo "</br>";

		echo "<h2>NO CANCEL REQUEST</h2>";
		echo "<a href='Ahome.php'><font color='blue'>GO TO HOME PAGE</font></a>";
		echo "<br> <br>";
		}
else
{
	$sql="select * from bkbus where status='CANCLE REQ' ";
	$result=mysql_query($sql,$con);
	
	echo "<table class='table1'>";
	echo "<tr>";
	echo "<th>PNR</th>";
	echo "<th>USERNAME</th>";
	echo "<th>MAIL</th>";
	echo "<th>BNO</th>";
	echo "<th>SOURCE</th>";
	echo "<th>DESTINATION</th>";
	echo "<th>SEAT</th>";
	echo "<th>DOJ</th>";
	echo "<th>TOTAL_PRICE</th>";
	echo "<th>STATUS</th>";
	
	
	echo "<th>CANCEL</th>";
	echo "</tr>";
	
	echo "<tr>";

		while($row=mysql_fetch_array($result))
		{
		$aa=$row['pnr'];
			$bb=$row['username'];
			$cc=$row['mail'];
			$dd=$row['bno'];
			$ee=$row['source'];
			$ff=$row['destination'];
			$gg=$row['seats'];
			$hh=$row['doj'];
			$ii=$row['tot_price'];
			$jj=$row['status'];

			echo "<td>".$aa."</td>";
			echo "<td>".$bb."</td>";
			echo "<td>".$cc."</td>";
			echo "<td>".$dd."</td>";
			echo "<td>".$ee."</td>";
			echo "<td>".$ff."</td>";
			echo "<td>".$gg."</td>";
			echo "<td>".$hh."</td>";
			echo "<td>".$ii."</td>";
			echo "<td>".$jj."</td>";
	
	echo "<td> <a href='Acancel2.php?pnr=$aa'> CANCEL </a> </td>";
	echo "</tr>";
	}
	echo "</table>";

}
?>
</div>
</div>     
</center>
</body>
</html>

   