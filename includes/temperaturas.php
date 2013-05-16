<?php
	include 'conexion.php';
	$num;
	for($i=1;$i<=10;$i++){
		$query = "SELECT * FROM mediciones,municipios WHERE MUN_ME=" . $i ." ORDER by ID_ME DESC LIMIT 1";
		$result = mysqli_query($link, $query);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		$num[$i] = $row["TEMP_ME"];
		$lum[$i] = $row["LUM_ME"];
		$id[$i] = $row["MUN_ME"];
	}
	for ($i=1; $i <=10 ; $i++) { 
		$query = "SELECT * FROM municipios WHERE ID_MU=" . $i;
		$result = mysqli_query($link, $query);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		$mun[$i] = $row["COD_MU"];
	}

	mysqli_free_result($result);

	/* cerrar la conexión */
	mysqli_close($link);

?>