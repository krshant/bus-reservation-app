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
<title>Bus booking page 1</title>
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
td	{
	text-align:center;
	border:2px solid #99FF99;
	padding:3px;
	}
th	{
	text-align:center;
	border:2px solid #99FF99;
	padding:3px;
	background:#99FF99;
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
<h2 id="hh">Search Result</h2> 
<div id="tb">
	<?php
	$sr=$_POST['sre'];
      	$des=$_POST['dest'];
      	$mnth=$_POST['month'];
      	$dt=$_POST['date'];
      	$yr=$_POST['year'];
      	$d_j=$yr."/".$mnth."/".$dt;
	//connection established
	$con=mysql_connect("localhost","root","");

	//database selected
	$db=mysql_select_db("atpl",$con);
	

	
	$sql="select bno,source,destination,doj,seat,price from bus_schedule where source='$sr' and destination='$des' and doj='$d_j' " ;
	$result=mysql_query($sql,$con); 
	 
      	 $flag = 0;

	while($row = mysql_fetch_array($result))
      	{
      	
      	$flag = 1;
      	}
	
	if($flag== 0)
            {
            echo "Bus Route not found";
            }
	else
	{
	$result=mysql_query($sql,$con);
	while($row = mysql_fetch_array($result))
	{
	 
	
	$a=$row['bno'];
	$b=$row['source'];
	$c=$row['destination'];
	$d=$row['doj'];
	$e=$row['seat'];
	$f=$row['price'];

	echo "<table>";
	echo "<tr>";
	echo "<th>Bus no. </th>";
	echo "<th>Source</th>";
	echo "<th>Destination</th>";
	echo "<th>Date of Journy </th>";
	echo "<th>  Seat no. </th>";
	echo "<th>Price </th>";
	echo "<th> Book </th>";
	echo "</tr>";

	echo "<tr>";
	
	
	
	echo "<td>  ".$a."</td>";
	echo "<td>  ".$b."</td>";
	
	echo "<td>  ".$c."</td>";
	echo "<td>  ".$d."</td>";
	echo "<td>  ".$e."</td>";
	echo "<td>  ".$f."</td>";
	echo "<br>";
	
	
	


	echo "<td> <a href='Bbooking2.php?bno=$a'>Book</a> </td>";
	echo "</tr>";
	
	echo "</table>";
	}
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