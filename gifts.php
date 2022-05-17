<?php
	/* Read input from STDIN. Print your output to STDOUT*/
	$fp = fopen('php://stdin', 'r');
	//Write code here
	$line1 = trim(fgets(STDIN));
	$total = [];

	foreach( range(1, (int)$line1 ) as $a ) {
		$gifts = trim(fgets(STDIN));
		$available = trim(fgets(STDIN));
		$prices = trim(fgets(STDIN));
		$prices = explode( " ", $prices );
		sort( $prices );
		$prices = array_slice( $prices, 0, $gifts );
		$total[] = array_sum( $prices );
	}

	foreach( $total as $t ) {
		echo $t."\n";
	}