<?php 

	$resultado=0;
	function suma($a, $b){
		return $a+$b;
	}

	function resta($a, $b){
		return $a-$b;
	}

	function operacion($a, $b, $op){
		if($op=="suma"){
			return $a+$b;
		}else if($op == "resta"){
			return $a-$b;
		}else if($op == "multiplicacion"){
			return $a*$b;
		}else if($op=="division"){
			if($b!=0){
				return $a/$b;
			}else{
				return "no existe division entre cero";
			}
		}else{
			return "no se definio la operacion";
		}

	}
	/*
	echo "La suma es ".suma(10,2);
	echo "<br>";
	echo "La resta es ".resta(10,2);
	echo "<br>";

	echo "la operacion es: ".operacion(10, 0,"division");

	*/
 ?>



