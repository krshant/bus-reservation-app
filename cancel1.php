<?php
session_start();
if ($_SESSION['id']==false)
{
	header("location:index.php");
}
?>
<html>
<head>
    <title> Cancel Page </title>
	<script src="search.js"> </script>
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
<h2 id="hh">Cancel Ticket</h2> 
<div id="tb">
<form>
<h4 align="center">Enter the PNR No :
<input type="text" name="pnr" onKeyUp="showUser(this.value);"/> 
</h4>
</form>
<p>

<div id="txtHint" align="center"> <b> </b>

</div>
</div>



</div>
</form>          
</center>
</body>
</html>