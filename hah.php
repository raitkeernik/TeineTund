<?php

	$age = 5;
	
	if ($age < 18) {
		echo "alaealine";
	
	}else {
		echo "t�isealine";
		
	}

?>

<br>

<?php
// for ts�kkel: for (1;2;3) {sisu}
// 1. �ks kord k�ige algus, $i = 0
// 2. enne sisu iga kord, $i<$i
// 3. p�rast sisu, $i= $i+1

	for ($i=0; $i < $age; $i = $i + 1) {
		
		echo ($i+1)."palju";
		
	}
	
	echo "�nne"

?>