<?php
session_start();
$id=session_id();	
?>

<html>
<head>
<title>Login page</title>
<style>
#container	{
		width:80%;
		height:450px;
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
#co	{
	color:white;
	}
</style>
</head>
<body>
<center>
<div id="container">
<div id="top">
	<div id="leftlogo">
		<b>	<font color="white"> Bus Reservation System </font></b>
	</div>
</div>
<div id="main"> 
<?php
                   $aa=$_POST['username'];
                   $bb=$_POST['pswd'];
                
                   $conn=mysql_connect("localhost","root","");

                   $db=mysql_select_db("atpl",$conn);
                   $sql="select * from userdetails where username='$aa' and pswd='$bb'";
                   
			$flag=0;
		  
		   $result=mysql_query($sql,$conn); 

		   while($row=mysql_fetch_array($result))
			{
			$flag=1;
			$_SESSION['id']=session_id();	
			$_SESSION['user']=$aa;
			}	
			

                   if($flag==1)
                   {
		      echo " <h3><b>Welcome</b></h3>"; 
                      echo " <h3> You are login succesfully";
		      echo "<br>";
		      echo "<h3> Login as $aa";
		      echo " <br> <a href='Ahome.php'>Process</a>";
                    
		    }
                   else
                   {
                     echo " <h3>Login failed ";
                     echo " <br> <a href='Alogin1.php'>Try again</a>";  
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
