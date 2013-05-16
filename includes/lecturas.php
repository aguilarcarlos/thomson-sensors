<?php 
	include 'class/class_String.php';

	$strings = new StringsChars();

	$archivo = file('files/log.txt');

	//print_r($archivo);
	
	$trama = $strings->setStringToSplit('RX -416 : CW (2012-11-28 16:59Z):',$archivo[3]);
	
	$dir = count($trama);

	for($i=0;$i<$dir;$i++){
		echo $trama[$i] . '<br />';
	}

	$strings->setStrings($trama[1]);

	echo "Tamaño de la trama: " . $strings->getNumberChars();
	echo "<br />";
	echo "Dígito para el lugar: " . $strings->getCharsByNumber(0,1);
	echo "<br />";
	echo "Dígitos para la temperatura: " . $strings->getCharsByNumber(1,3);
	echo "<br />";
	echo "Dígitos para el tiempo: " . $strings->getCharsByNumber(4,2);
	echo "<br />";
	echo "Dígitos para la sumatoria: " . $strings->getCharsByNumber(6,2);
	echo "<br />";
	echo "Dígitos para #1's: " . $strings->getCharsByNumber(8,2);
	echo "<br />";
	echo "Finalización de la trama: " . $strings->getCharsByNumber(10,3); 
?>