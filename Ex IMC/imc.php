<?php

	$Peso = $_POST['txtPeso'];
	$Alt = $_POST['txtAlt'];
	$Imc = $Peso / ($Alt*2);

	echo "Seu IMC é: <b> $Imc </b><br>";

	if ($Imc <=18.4)
	{
	echo "Classificação: Abaixo do peso normal";	
	}
	
	elseif ($Imc >18.5 && $Imc<24.9)
	{
	echo "Classificação: Peso normal";	
	}

	elseif ($Imc >25.0 && $Imc<29.9) 
	{
	echo "Classificação: Excesso de peso";	
	}
	
	elseif ($Imc >30.0 && $Imc<34.9) 
	{
	echo "Classificação: Obesidade classe I";	
	}
	
	elseif ($Imc >35.0 && $Imc<39.9) 
	{
	echo "Seu IMC é: Obesidade classe II";
	}
	
	elseif ($Imc >40.0) 
	{
	echo "Classificação: Obesidade classe III";  	
	}

 
?>

<html>
		<body>
		<form method="POST" action="index.html">
				<input type="submit" name="btnVoltar" id="btnVoltar" value="Novo Cálculo";>
		</form>		
		
</body>
</html>