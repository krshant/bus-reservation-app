<?php
session_start();
if ($_SESSION['id']==false)
{
	header("location:index.php");
}
?>

<html>
<head>
<title> Bus Updated page </title>
<link rel="stylesheet" href="styles.css">
<style>
#btn	{
	width:100px;
	height:30px;
	background:#FF3399;
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
	border:1px solid #FFCC99;;
	text-align:center;
	}
#aa	{
	background:lightgreen;
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
		<b><font color="White"> Bus Reservation System </font></b>
  </div>
	</div>

<div
<div id="leftPart">
	<div id="gg">
	<img src="admin.png"><br>
	<a href="Ahome1.php"><b>ADMIN</b></a>
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
<div id="rightPart">
<p id="ss"><strong>Logged In</strong>
	<?php
		echo $_SESSION['Session'];
	?>
</div>

<div
<div id="middlePart">
<h2>Updated Bus Details</h2>
<?php

//connection established
$con=mysql_connect("localhost","root","");

//database selected
$db=mysql_select_db("atpl",$con); 

$aa=$_POST['bno'];
$bb=$_POST['source'];
$cc=$_POST['destination'];
$dd=$_POST['doj'];
$ee=$_POST['seat'];
$ff=$_POST['price'];


$sql="update bus_schedule set seat='$ee',price='$ff' where bno='$aa'";

$result=mysql_query($sql,$con); //F9



$sql="select * from bus_schedule where bno='$aa'";

$result=mysql_query($sql,$con); 

	echo"<center>";
	echo "<table>";
	echo "<tr id='aa'> <th colspan=6>Bus Details Updated </th></tr>";
	echo "<tr>";
	echo "<th> Bus No </th>";
	echo "<th> Source </th>";
	echo "<th> Destination </th>";
	echo "<th> Date </th>";
	echo "<th> Seat </th>";
	echo "<th> Price </th>";
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
	echo "</tr>";
	}
	echo "</table>";
	echo"</center>";  

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




