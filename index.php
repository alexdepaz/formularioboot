<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">v
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--El meta viewport es necesario para el correcto funcionamiento de Bootstrap -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Calculadora basica</title>

	<!-- Añadiendo Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	
</head>
<body>
	<div class="container">
		<form action="index.php" method="get" accept-charset="utf-8" class="form-horizontal">
			<h1> Calculadora</h1>

		<div class="form-group">
			<label class="col-md-2 control-label">Ingrese numero 1:</label>
			<div class="col-md-4">
				<input type="text" name="txtNum1" class="form-control input-md">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label">Ingrese numero 2:</label>
			<div class="col-md-4">
				<input type="text" name="txtNum2" class="form-control input-md">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label">Seleccione la operacion:</label>
			<div class="col-md-4">
				<select name="cbOperacion">
					<option value="suma">Suma</option>
					<option value="resta">Resta</option>
					<option value="multiplicacion">Multiplicación</option>
					<option value="division">División</option>
					
				</select>
			</div>			
		</div>
		<div class="form-group">
			<label class="col-md-2"></label>
			<button type="submit" name="btnCalcular" class="btn btn-primary">Calcular</button>
			<button type="reset" name="btnLimpiar" class="btn btn-danger">Cancelar</button>
		</div>
		</form>
	</div>

		

	<?php 

		include 'ejemplo2.php';
		if(isset($_GET['btnCalcular'])){

			$num1 = $_GET['txtNum1'];
			$num2 = $_GET['txtNum2'];
			$oper = $_GET['cbOperacion'];
			echo "div";
			echo "<p>El resultado de la operacion es: <strong>".operacion($num1, $num2, $oper)."</strong></p>";

		}

	 ?>



	<!-- Añadiendo Bootstrap .JS -->
	<script src="bootstrap/js/jquery-1.12.4.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>