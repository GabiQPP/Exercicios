<?php

	$Area = $_POST['txtArea'];
	$Litros = $Area/3;
	$Lata = $Litros/18;
	$Lata2 = ceil($Lata);
	$Qtd= $Lata2*80;

	echo "Área a ser pintada: <b> $Area m² </b><br>";
	echo "Litros usados: <b> $Litros </b><br>";
	echo "Latas usadas: <b> $Lata2 </b><br>";
	echo "Valor Gasto: <b> R$ $Qtd </b><br>";

?>

<html>
		<body>
		<form method="POST" action="index.html">
				<input type="submit" name="btnVoltar" id="btnVoltar" value="Novo Cálculo";>
		</form>		
		
</body>
</html>