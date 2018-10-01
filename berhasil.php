<!DOCTYPE html>

<?php
session_start();
	if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) 
	{
		header("Location: index.php");
	}
	?>
<html>
<head>
<title>HAI!</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h2>You Have Logged In!
<br/> SELAMAT DATANG!!</h2>
<div class="date">
<?php
$Date= mktime(date("m"),date("d"),date("y"));
echo "Date : <b>".date("m-d-y", $Date)."</b> ";
date_default_timezone_set('Asia/Jakarta');
$Time=date("H:i:s");
echo "<br/>";
echo "Time : <b>". $Time." "."</b>";
$a = date ("H");
echo "<br/>";
if (($a>=3) && ($a<=12)){
echo "<b> Good Morning!!</b>";
}
else if(($a>12) && ($a<=19))
{
echo " Good Afternoon!!";}
else { echo ", <b> Good Night </b>";}
?>
<br/>
Have a Good Time :)
</div>
</div>
<body>
</html>