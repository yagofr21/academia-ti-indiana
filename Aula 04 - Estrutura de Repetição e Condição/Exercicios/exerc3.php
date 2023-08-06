<?php
$vetor1 = array(0,1,2,3,4,5,6,7,8,9,43);
$vetor2 = array(9,8,7,6,5,4,3,2,1,0,23);

foreach($vetor1  as $indice1 => $array1){
	
	foreach($vetor2 as $indice2 => $array2){
		
		if($indice1 == $indice2){
			echo "Indice [$indice1]: $array1 + Indice [$indice2]: $array2 => A soma é [".$array1 + $array2."]<br>";
		}
	}
}
