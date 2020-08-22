<?php 
	if ($_POST ["numero1"] !="" and $_POST ["numero2"]!=""){
		if ($_POST["operador"] == "suma") {
			print ($resultado = $_POST ["numero1"] + $_POST ["numero2"]);
			print ('<br /><a href="Index.php">regresar</a>');
		} elseif ($_POST["operador"] == "resta") {
			print ($resultado = $_POST ["numero1"] - $_POST ["numero2"]);
			print ('<br /><a href="Index.php">regresar</a>');
		} elseif ($_POST["operador"] == "multiplicacion") {
			print ($resultado = $_POST ["numero1"] * $_POST ["numero2"]);
			print ('<br /><a href="Index.php">regresar</a>');
		} elseif ($_POST["operador"] == "division") {
			print ($resultado = $_POST ["numero1"] / $_POST ["numero2"]);
			print ('<br /><a href="Index.php">regresar</a>');
		}
	} else {
		print("NO deje campos vacios :/");
		print ('<br /><a href="Index.php">regresar</a>');
	}
?>
