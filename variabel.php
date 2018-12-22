<!DOCTYPE html>
<html>
<head>
	<title>Variabel</title>
</head>
<body>

<?php
$diameter = 200;
$r = 100;
define("phi", 3.14);
$L = 0.5*phi*$r*$r;
$luas = 0.5*phi*pow($diameter/2,2);
echo "Luas Lingkaran = ".$luas." cm^2";
echo "<br/>Luas Lingkaran = ".$L;

?>
</body>
</html>