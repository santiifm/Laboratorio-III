<!DOCTYPE html>
<html>
<body>
<?php
	echo "<table border='1'><br>";
	echo "<th><h3>Tabla del 3 </h3></th>";
	
	for($i=1;$i<=3;$i++){
		$valor=3*$i;
		echo "<tr>";
		echo "<td>3 X $i</td>";
		echo "<td>$valor</td>";
		echo "</tr>";
	}
	echo "<tr><td>Multiplicacion</td><td>Resultado</td></tr>";
	echo "</table>";
	
	echo "<table border='1'><br>";
	echo "<th><h3>Tabla del 3 </h3></th>";
	$s=1;
	while ($s <=3){
		$valor=3*$s;
		echo "<tr>";
		echo "<td>3 X $s</td>";
		echo "<td>$valor</td>";
		echo "</tr>";
		$s=$s+1;
	}
	echo "<tr><td>Multiplicacion</td><td>Resultado</td></tr>";
	echo "</table>";
	
	echo "<table border='1'><br>";
	echo "<th><h3>Tabla del 3 </h3></th>";
	$s=1;
	do{
		$valor=3*$s;
		echo "<tr>";
		echo "<td>3 X $s</td>";
		echo "<td>$valor</td>";
		echo "</tr>";
		$s=$s+1;
	}while ($s <=3);
	echo "<tr><td>Multiplicacion</td><td>Resultado</td></tr>";
	echo "</table>";
?>
</body>
</html>