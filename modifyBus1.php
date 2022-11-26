<?php
session_start();
if ($_SESSION['id']==false)
{
	header("location:index.php");
}
?>

<html>
<head>
<title>Bus modify page1</title>
<link rel="stylesheet" href="styles.css">
<style>
th	{
	font-size:10px;
	color:black;
	width:60px;
	font-family:verdana;
	padding:5px;
	border:1px solid #ccc;
	background:#FFCC99;
	}

td	{
	font-size:10px;
	color:black;
	width:60px;
	font-family:verdana;
	padding:2px;
	border:2px solid #FFCC99;;
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
		<b><font color="white">Bus Reservation System </font></b>
	</div>
 </div>

<div
<div id="leftPart">
	<div id="gg">
	<img src="admin.png"><br>
	<p id="ss"><strong>Logged In</strong>
	<?php
		echo $_SESSION['Session'];
	?>
	</div>
	<div id="sideMenu">
		<li id="list"><a href="Ahome.php">Dashboard</a></li>
		<li id="list"><a href="addBus1.php">Add Bus </a></li>
		<li id="list"><a href="viewBus1.php">View Bus </a></li>
		<li id="list"><a href="modifyBus1.php"> Modify Bus </a></li>
		<li id="list"><a href="logout.php"><b>Logout</b></a> </li>


	</div>
</div>


<div
<div id="middlePart">
<h2>Update Bus Details</h2>
<?php

//connection established
$con=mysql_connect("localhost","root","");

//database selected
$db=mysql_select_db("atpl",$con);
$sql="select * from bus_schedule";


$result=mysql_query($sql,$con); 

	echo"<center>";
	echo "<table>";
	echo "<tr id='cc'> <th colspan=7>Bus Data </th></tr>";
	echo "<tr>";
	echo "<th> Bus No </th>";
	echo "<th> Source </th>";
	echo "<th> Destination </th>";
	echo "<th> Date </th>";
	echo "<th> Seat </th>";
	echo "<th> Price </th>";
	echo "<th> Edit </th>";
	echo "</tr>";
	while( $row=mysql_fetch_array($result))
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
	echo "<td> <a href='modifyBus2.php?bno=$a'> Edit </a> </td>";
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

</body>
</center>
</html>

