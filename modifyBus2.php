<?php
session_start();
if ($_SESSION['id']==false)
{
	header("location:index.php");
}
?>
<html>
<head>
<title>Bus modify page2</title>
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
	border:1px solid #ccc;
	text-align:center;
	}

tr:nth-child(even) {
  background: #FFCCE5;
}

tr:nth-child(odd) {
  background: #CCFFE5;
}	

a	{
	text-decoration:none;
	}


button	{
	width :100px;
	height: 40px;
	padding:10px;
	background:#FFB266;
	}

#bb	{
	width:150px;
	height:25px;
	background:#FF99FF;
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
	<a href="adminHome1.php"><b>ADMIN</b></a>
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
<h2>Update Bus Details</h2>
<?php

//connection established
$con=mysql_connect("localhost","root","");

//database selected
$db=mysql_select_db("atpl",$con);  


$bb=$_GET['bno']; 

$sql="select * from bus_schedule where bno='$bb'";


$result=mysql_query($sql,$con);
	 
	echo"<center>";
	echo "<table>";
	while( $row=mysql_fetch_array($result))
	{
	$a=$row['bno'];
	$b=$row['source'];
	$c=$row['destination'];
	$d=$row['doj'];
	$e=$row['seat'];
	$f=$row['price'];

	echo "<form name='f1' action='ModifyBus3.php' method='POST'>";

	echo "<tr>";
	echo "<th> Book No </th>";
	echo "<td> <input readonly type='text' name='bno' value='$a'></td>";
	echo "</tr>";

	echo "<tr>";
	echo "<th> Source </th>";
	echo "<td> <input readonly type='text' name='source' value='$b'></td>";
	echo "</tr>";

	echo "<tr>";
	echo "<th> Destination </th>";
	echo "<td> <input readonly type='text' name='destination' value='$c'></td>";
	echo "</tr>";

	echo "<tr>";
	echo "<th>Date </th>";
	echo "<td> <input type='text' name='doj' value='$d'></td>";
	echo "</tr>";

	echo "<tr>";
	echo "<th> Seat </th>";
	echo "<td> <input  type='text' name='seat' value='$e'></td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<th>Price</th>";
	echo "<td> <input readonly type='text' name='price' value='$f'></td>";
	echo "</tr>";


	echo "<tr>";
	echo "<th> UPDATE </th>";
	echo "<td> <input  type='submit' id='btn' name='sub' value='Update'></td>";
	echo "</tr>";

	echo "</form>";
	}
	echo"</table>";
        echo"</center>";  
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





