<?php
$q=$_GET["q"];

$con=mysql_connect("localhost","root","");
mysql_select_db('atpl',$con);

if($q!=""){
$sql="SELECT * FROM bkbus WHERE pnr=$q";
	$result = mysql_query($sql);
	
if(mysql_num_rows($result)>0) 
{ 

$row=mysql_fetch_array($result);
$a=$row['status'];
if($a=="OK")
{
	$b=$row['pnr'];
	$c=$row['username'];
	$d=$row['mail'];
	$e=$row['bno'];
	$f=$row['source'];
	$g=$row['destination'];
	$h=$row['seats'];
	$i=$row['doj'];
	$j=$row['tot_price'];
	$k=$row['status'];
	$l=$row['price'];
	echo "<br>";
	echo "<br>";
	echo "<table>";
	echo "<tr>";
	echo "<th>PNR No.</th>";
	echo "<th>Username</th>";
	echo "<th>Mail</th>";
	echo "<th>Bus No.</th>";
	echo "<th>Source</th>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>".$b."</td>";
	echo "<td>".$c."</td>";
	echo "<td>".$d."</td>";
	echo "<td>".$e."</td>";
	echo "<td>".$f."</td>";
	echo "</tr>";
	echo "</table>";
	echo "<br>";
	echo "<table>";
	echo "<tr>";
	echo "<th>Destination</th>";
	echo "<th>No. of Person</th>";
	echo "<th>Doj</th>";
	echo "<th>Total Price</th>";
	echo "<th>Status</th>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>".$g."</td>";
	echo "<td>".$h."</td>";
	echo "<td>".$i."</td>";
	echo "<td>".$j."</td>";
	echo "<td><a href='cancle3.php?pnr=$b'>Cancel</a></td>";
	echo "</tr>";
	echo "</table>";
}
else
{
	
	echo "No PNR found";
}
}
else
{
	
	echo " PNR not Found ";
} 
}
?>