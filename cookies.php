<html>
</body>
<?php
setcookie("username", "Diya_Dey",time()+30*24*60*60);
?>
<HTML>
<head>
<title>Create cookies in PHP</title>
</head>
<body>
<?php
echo " The cookies created for name and id : ";
echo "<font color='red'>";
echo $_COOKIE["username"];
echo "</font>";
?>
</body>
</html>