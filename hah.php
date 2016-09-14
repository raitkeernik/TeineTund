<?php

	$age = 5;
	
	if ($age < 18) {
		echo "alaealine";
	
	}else {
		echo "täisealine";
		
	}

?>

<br>

<?php
// for tsükkel: for (1;2;3) {sisu}
// 1. üks kord kõige algus, $i = 0
// 2. enne sisu iga kord, $i<$i
// 3. pärast sisu, $i= $i+1

	for ($i=0; $i < $age; $i = $i + 1) {
		
		echo ($i+1)."palju";
		
	}
	
	echo "õnne"

?>