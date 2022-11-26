<!DOCTYPE html>
<html>
<head>
<title>User signup page 2</title>
<style>
#container	{
		width:80%;
		height:440px;
		background:#CCFFCC;
		}
#top	{
	width:100%;
	height:100px;
	background:#66CC00;
	}

#leftlogo	{
		font-size:34px;
		padding-top:25px;
		text-align:left;
		padding-left:35px;
		}
#footer	{
	width:80%;
	height:80px;
	background:#202020;
	}
#btn	{
	width:100px;
	height:30px;
	background:#FF3399;
	}
#ft	{
	padding-top:30px;
	color:#FFFFFF;
	letter-spacing:1px;
	font-family:arial;
	font-size:14px;
	text-decoration:none;
	}
#ad1 a	{
	text-decoration:none;
	color:green;
	}

select	{
	width:140px;
	}

</style>
</head>
<body>
<center>
<div id="container">
<div id="top">
	<div id="leftlogo">
		<b><font color="white"> Bus Reservation System </font></b>
	</div>
</div>
<?php   

$aa=$_POST['username'];  
$bb=$_POST['pswd'];
$cc=$_POST['phone_no'];
$dd=$_POST['email'];
$ee=$_POST['securityQ']; 
$ff=$_POST['ans']; 

$s=0;
$con=mysql_connect("localhost","root",""); 
$db=mysql_select_db("atpl",$con);

$sql1="select email from userdetails";
$result1=mysql_query($sql1,$con);
if($result1) {
	while($row=mysql_fetch_array($result1))
 	{
	if($row['email']==$dd)
		$s=1;
	}
                   if($s==1)
                   {
			echo "<br>";
		        echo "<h3>User Already Registered";
			echo " <br> <a href='Clogin1.php'>goto Login</a>";	                              
		    }

                   else if($s==0)
                    { 
			$sql2="INSERT INTO userdetails(username,pswd,phone_no,email,securityQ,ans) VALUES('$aa','$bb','$cc','$dd','$ee','$ff')";
			$result2=mysql_query($sql2,$con);			
                 		echo " <h3> Signup succesfully"; 
		   		echo " <br> <a href='Clogin1.php'>goto Login</a>";
		   		}
			  else
   				 {
      				  echo "<h4>Error adding user in database";
				echo " <br> <a href='Csignup1.php'>Try Again</a>";
    				}  
}
else
{ 
	echo "<h4>Error please try again";
}
             
?>


</div>
<div id="footer">
	<div id="ft">
	&copy; Copyright and All right reserved	2021 &nbsp; | &nbsp;&phone;+91-8910244147
	</div>
</div>


</body>
</center>
</html>