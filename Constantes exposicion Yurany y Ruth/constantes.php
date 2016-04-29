<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	define("COM", "123");
	const K123 = 23;
	echo "K123";

	echo "Versión", PHP_VERSION;

	echo "<br>Ruta", _FILE_;

	echo "línea", _FILE_;
	
	echo _DIR_;

	function TRABAJO(){
		print "funcion";
		echo _FUNCTION_;
	}
	TRABAJO();
?>
</body>
</html>