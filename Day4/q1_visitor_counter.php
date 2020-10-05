<?php

	
	$visitors	= 0;
	$file 		= 	file_get_contents("count.txt");
	$visitors	=	$file;

	$visitors 	=	$visitors+1;

	$filenew 	=	fopen("count.txt","w");
	fwrite($filenew, $visitors);

	echo "You are the ".$visitors." visitor";

?>