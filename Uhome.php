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
table	{
	width:96%;
	margin-top:20px;
	margin-left:10px;
	float:left;
	}

#kk	{
	font-size:34px;
	font-weight:bold;
	text-align:center;
	color:white;
	}
#nn	{
	font-size:16px;
	font-weight:bold;
	text-align:center;
	color:white;
	}
#ds	{
	font-size:34px;
	float:center;
	margin-left:13px;
	margin-top:5px;
	font-weight:bold;
	color:black;
	}

td	{
	border-radius:5px;
box-shadow: inset 0.2em 0.2em 0.2em 0 rgba(255,255,255,0.5), 

inset -0.2em -0.2em 0.2em 0 rgba(0,0,0,0.5);
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
<img src="user.png">
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

<span id="ds">DASHBOARD</span>
<?php
//connection established
$con=mysql_connect("localhost","root","");
//database selected
$db=mysql_select_db("atpl",$con);

/*
CALCULATIONS AND BOOK STOCKS
*/

$sql="select * from bkbus";
$result=mysql_query($sql,$con); 
$sum=0;
$count=0;
while($row=mysql_fetch_array($result))
{
	$p=$row['bno'];
	$sum=$sum+$p;
	$count++;

}


$sql="select * from bus_schedule";
$result=mysql_query($sql,$con); 
$busTotal=0;
while($row=mysql_fetch_array($result))
{
	$busTotal++;
}



$sql1="select * from bus_schedule where source='HOWRAH'";
$result1=mysql_query($sql1,$con); 
$HOWRAHTotal=0;
while($row=mysql_fetch_array($result1))
{
	$HOWRAHTotal++;
}

$sql2="select * from bus_schedule where source='PATNA'";
$result2=mysql_query($sql2,$con); 
$PATNATotal=0;
while($row=mysql_fetch_array($result2))
{
	$PATNATotal++;
}

$sql3="select * from bus_schedule where source='DELHI'";
$result3=mysql_query($sql3,$con); 
$DELHITotal=0;
while($row=mysql_fetch_array($result3))
{
	$DELHITotal++;
}
?>
<table>
	<tr>
	<td width=150 height=100 bgcolor="#990000"> 
	 <div id="kk"> <?php echo $busTotal ?> </div>
	<div id="nn">  Total Bus <div>	
	 </td> 
	<td width=150 height=100 bgcolor="#CC00CC"> 
	 <div id="kk"> <?php echo $HOWRAHTotal ?> </div>
	<div id="nn">  Bus From Howrah <div>	
	 </td>
	<td width=150 height=100 bgcolor="#0000CC"> 
	 <div id="kk"> <?php echo $PATNATotal ?> </div>
	<div id="nn">  Bus From Patna <div>	
	 </td>
	<td width=150 height=100 bgcolor="#009999"> 
	 <div id="kk"> <?php echo $DELHITotal ?> </div>
	<div id="nn">  Bus From Delhi <div>	
	 </td>
	</tr>

</table>


	
</div>
</div>
</div>
</center>
	<!-----------Footer part -------------------!>
<center>
<div id="footer">
		
</div>
</center>
</body>

</html>
