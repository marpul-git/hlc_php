<?php

$langosta=40;
$angula=60;
$caviar=400;

print "Precio langosta= " . $langosta . " €";
print "Precio angula= " . $angula . " €";
print "Precio caviar= " . $caviar . " €";


if($langosta>50 and $angula>70) {

		print "cierto";
		
	}else if($langosta>50 and $caviar>500){

			print "cierto";	
	
		}else if ($angula>70 and $caviar>500){

			print "cierto";
		}else {

			print "falso";
		}	

	

	

?>
