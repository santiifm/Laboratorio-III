<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<h1>Ingrese sus Datos Por Favor:</h1>

<form action="EJ5.php" method="GET">
<label for="nombre">Nombre:</label><br>
<input type="text" name="nombre" required><br>
<label for="apellido">Apellido:</label><br>
<input type="text" name="apellido" required><br>
<label for="dni">DNI:</label><br>
<input type="number" min=1 name="dni" required><br>
<p>Sexo:</p>
<input type="radio" id="masculino" name="sexo" value="Masculino">
<label for="masculino">Masculino</label>
<input type="radio" id="femenino" name="sexo" value="Femenino">
<label for="femenino">Femenino<label><br>
<label for="mail">Email:</label><br>
<input type="email" name="mail" required><br>
<label for="pais">País:</label><br>
<input type="text" name="pais" required><br>
<label for="provincia">Provincia:</label><br>
<input type="text" name="provincia" required><br>
<label for="localidad">Localidad:</label><br>
<input type="text" name="localidad" required><br>
<label for="calle">Calle:</label><br>
<input type="text" name="calle" required><br>
<label for="numero">Número:</label><br>
<input type="number" min=1 name="numero" required><br>
<label for="piso">Piso/Dpto.:</label><br>
<input type="text" name="piso"><br>
<label for="edad">Edad:</label><br>
<input type="number" min=1 name="edad" required><br>
<label for="estcivil">Estado Civil:</label>
<select name="estcivil" id="estcivil">
  <option value="Soltero">Soltero</option>
  <option value="Casado">Casado</option>
  <option value="Divorciado">Divorciado</option>
  <option value="Viudo">Viudo</option>
</select><br>
<label for="hijos">Hijos:</label><br>
<input type="number" name="hijos"><br>
<p>Hobbies</p>
<input type="checkbox" id="nadar" name="hobbies" value="Nadar">
<label for="nadar">Nadar</label>
<input type="checkbox" id="futbol" name="hobbies" value="Jugar al Futbol">
<label for="futbol">Jugar al Fútbol</label><br>
<input type="submit" value="Enviar y Finalizar">
</form>

<?php
	if(isset($_GET['nombre']))
	{
		echo "<br>";
		echo $_GET['nombre'];
		echo " ";
		echo $_GET['apellido'];
		echo "<br>";
		echo $_GET['dni'];
		echo "<br>";
		echo $_GET['sexo'];
		echo "<br>";
		echo $_GET['mail'];
		echo "<br>";
		echo $_GET['pais'];
		echo "<br>";
		echo $_GET['provincia'];
		echo "<br>";
		echo $_GET['localidad'];
		echo "<br>";
		echo $_GET['calle'];
		echo "<br>";
		echo $_GET['piso'];
		echo "<br>";
		echo $_GET['edad'];
		echo "<br>";
		echo $_GET['estcivil'];
		echo "<br>";
		echo $_GET['hijos'];
		echo "<br>";
	}
?>
</body>
</html>