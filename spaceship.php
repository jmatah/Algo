<?php
	/* Read input from STDIN. Print your output to STDOUT*/
	$fp = fopen('php://stdin', 'r');
	//Write code here
	// reads one line from STDIN
	$line1 = trim(fgets(STDIN)); // reads one line from STDIN
	$time1 = implode(":", explode(" ", $line1));
	
	$line2 = trim(fgets(STDIN)); // reads one line from STDIN
	$time2 = implode("hours ", explode(" ", $line2)).' minutes';
	
	$date1 = date( 'Y-m-d H:i:s', strtotime( date('Y-m-d'). ' '. $time1.':00') );

	echo $date1.';;'.$time2."\n\n";

	$add = date( 'Y-m-d H i s', (strtotime( $date1 .' + '. $time2 )) );

	echo $add;