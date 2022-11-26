<?php
$con=mysql_connect("localhost","root",""); 
$db=mysql_select_db("atpl",$con);

	$a=$_POST['username'];	
	$b=$_POST['securityQ'];	
	$c=$_POST['ans'];	


	$sql="select * from userdetails where username='$a' AND securityQ='$b' AND ans='$c'";

	$result1=mysql_query($sql,$con);
	$s=0;
if($result1)
{
	while($row=mysql_fetch_array($result1))
	{
		$ps=$row['pswd'];
		$s=1;	
	}
        
	if($s==1)
        {
	echo "<h3>Password retrieved successfully: '.$ps.'<h3>";		
	echo "<h3><a href='Clogin1.php'>goto Login</a>";	              
	}	
	else 
	{
	echo "<h3> Sorry, Security credential wrong ";
	echo "<h3><a href='Forgot1.php'> Try another user </a>";	
	}
	
}
else{
echo "<br> Incorrect access <br>";
echo "<h3><a href='Forgot1.php'> Try another user </a>";	
} 
?>