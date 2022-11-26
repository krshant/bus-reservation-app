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
<title>Bus added page 2</title>
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
		width:68%;
		height:340px;
		}

#rightPart	{
		width:10%;
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
		letter-spacing:0px;
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
	padding-left:150px;	
	}

#ss	{
	color:#006600;
	}

</style>
</head>
<body>
<center>
<div id="container">
<div id="banner">
	<div id="header">
		<b>	<font color="white">Bus Reservation System </font></b>
	</div>
</div>
<div
<div id="leftPart">
<div id="gg">
<img src="admin.png"><br>
<p>Login : <?php
		echo $_SESSION['user'];
	?></p>
	</div>
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
<div id="rightPart">
<p><strong>Logged in:</strong> 
	<?php 
		echo $_SESSION['user'];  
	?> 
</div>

<div 
<div id="middlePart">
<?php   

$aa=$_POST['src'];  
$bb=$_POST['dest'];
$cc=$_POST['dat'];
$dd=$_POST['se'];
$ee=$_POST['pr']; 


$con=mysql_connect("localhost","root",""); 
$db=mysql_select_db("atpl",$con);

$sql="INSERT INTO bus_schedule(source,destination,doj,seat,price) VALUES('$aa','$bb','$cc',$dd,'$ee')";


$result=mysql_query($sql,$con); 	
	
                   if($result)
                   {
		   echo " <h3> Bus added succesfully";                                  
		    }
                   else
                   {
                     echo " <h3>Bus not added ";
                     echo " <br> <a href='addBus1.php'>Try again</a>";  
                  }  
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