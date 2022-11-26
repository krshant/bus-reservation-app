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
<title>Bus added page1</title>
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
	color:#006600;
	}

#rt	{
	width:400px;
	height:300px;
	background:rgb(245,245,245);
	margin-left:200px;
	}
th	{
	text-align:left;
	}
td	{
	text-align:center;
	}
#hh	{
	padding-top:25px;
	}
select	{
	width:145px;
	}
#ee	{
	width:140px;
	}
#btn	{
	padding-left:100px;
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
	<p>Login : <?php
		echo $_SESSION['user'];
	?></p>
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
<h2 id="hh">Add New Bus Details</h2> 
<div id="tb">
<form action="addBus2.php" name="f2" method="POST">
<table>
<tr>
<th>Source </th>
<td><select name="src">
		<option value="howrah">Howrah</option>
		<option value="patna">Patna</option>
		<option value="delhi">Delhi</option>
	    </select></td>
</tr>

<tr>
<th>Destination </th>
<td><select name="dest">
		<option value="delhi">Delhi</option>
		<option value="howrah">Howrah</option>
		<option value="Patna">Patna</option>
	    </select></td>
</tr>


<tr>
<th>Date </th>
<td width="350px"><input type="date" name="dat" id="ee"></td>
</tr>

<tr>
<th>Seat </th>
<td><input type="text" name="se" id="dd"></td>
</tr>


<tr>
<th>Price </th>
<td width="350px"><input type="text" name="pr" id="ff"></td>
</tr>

<tr>
<th colspan="2" id="btn"><input type="submit" id="bt1" name="btn" value="SUBMIT" ></th>
</tr>
</table>
</form>
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
