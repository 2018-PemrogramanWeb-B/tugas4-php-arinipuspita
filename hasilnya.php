<!DOCTYPE html>
<html>
<head>
<title>HAI!</title>
<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<h2>You Have Sign In!
<br/> SELAMAT DATANG!!</h2>
<div class="date">
<?php
$tanggal= mktime(date("m"),date("d"),date("y"));
echo "Tanggal : <b>".date("m-d-y", $tanggal)."</b> ";
date_default_timezone_set('Asia/Jakarta');
$jam=date("H:i:s");
echo "<br/>";
echo "Pukul : <b>". $jam." "."</b>";
$a = date ("H");
echo "<br/>";
if (($a>=4) && ($a<=12)){
echo "<b> Selamat Pagi !!</b>";
}
else if(($a>12) && ($a<=15))
{
echo " Selamat Siang !!";}
else if (($a>15) && ($a<=18)){
echo " Selamat Sore !!";}
else { echo ", <b> Selamat Malam </b>";}
?>
<br/>
</div>
</div>
<body>
</html>