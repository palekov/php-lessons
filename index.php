<?php
	function greeting($name, $day) {

		$workDay = "Хорошего и продуктивного рабочего дня!";
		$weekEnd = "Желаю вам хорошо отдохнуть в этот день!";

		echo "Привет $name! ";

		switch ( $day ) {
			case '1':
				echo $workDay;
				break;			
			case '2':
				echo $workDay;
				break;
			case '3':
				echo $workDay;
				break;
			case '4':
				echo $workDay;
				break;	
			case '5':
				echo $workDay;
				break;							
			case '6':
				echo $weekEnd;
				break;
			case '7':
				echo $weekEnd;
				break;
			default:
				echo "Нет такого дня недели!";
		}	
		echo "<br>";
	}

	greeting("Alexander", 4);
	greeting("Palekov", 7);
	greeting("Sashkus", 9);	
?>