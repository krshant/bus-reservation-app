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
<title>View all bus page</title>
<link rel="stylesheet" href="styles.css">
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
		padding-left: 55px;
  		text-decoration: none;
  		font-size: 18px;
  		color: black;
  		display: block;
		letter-spacing:0px;
		padding-top:5px;
 		}

img	{
	width:60px;
	height:60px;
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


#tb	{
	padding-left:30px;	
	}

#bt1	{
	width:100px;
	height:30px;
	background:#6666FF;
	margin-right:50px;
	margin-top:15px;
	color:white;
	}

#ss	{
	color:#404040;
	margin-top:3px;
	}

#rt	{
	width:400px;
	height:300px;
	background:rgb(245,245,245);
	margin-left:200px;
	}

th	{
	font-size:10px;
	color:black;
	width:70px;
	font-family:verdana;
	padding:5px;
	border:1px solid #ccc;
	background:#FFCC99;
	}	

td	{
	font-size:10px;
	color:black;
	width:70px;
	font-family:verdana;
	padding:2px;
	border:2px solid #FFCC99;
	text-align:center;
	}	

tr:nth-child(even) {
  background: #FFFFFF;
}

tr:nth-child(odd) {
  background: #FFFFFF;
}
	
a	{
	text-decoration:none;
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

<div
<div id="leftPart">
	<div id="gg">
	<img src="admin.png"><br>
	<p id="ss"><strong>Login :</strong>
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


<div
<div id="middlePart">
	<h2>Total Bus</h2>

<?php
//connection established
$con=mysql_connect("localhost","root","");
//database selected
$db=mysql_select_db("atpl",$con);
$sql="select * from bus_schedule"; 

$result=mysql_query($sql,$con);

	echo "<center>";
	echo "<br>";
	echo "<table>";
	echo "<tr>";
	echo "<th> Bus No </th>";
	echo "<th> Source </th>";
	echo "<th> Destination </th>";
	echo "<th> Date </th>";
	echo "<th> seat </th>";
	echo "<th> price </th>";
	echo "</tr>";   
while($row=mysql_fetch_array($result))
{
	echo "<tr>";
	$a=$row['bno'];
	$b=$row['source']; 
	$c=$row['destination'];
	$d=$row['doj'];
	$e=$row['seat'];
	$f=$row['price'];
	echo "<td id='bb'>  ".$a."</td>";
	echo "<td id='bb'>  ".$b."</td>";
	echo "<td id='bb'>  ".$c."</td>";
	echo "<td id='bb'>  ".$d."</td>";
	echo "<td id='bb'>  ".$e."</td>";
	echo "<td id='bb'>  ".$f."</td>"; 
	echo "</tr>";
}
	echo "</table>";
	echo "</center>"; 
?>
</div>
</div>
<div id="footer">
	<div id="ft">
	&copy; Copyright and All right reserved	2021 &nbsp; | &nbsp;&phone;+91-8910244147
	</div>
</div>
</center>
</body>
</html>

