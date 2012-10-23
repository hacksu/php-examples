<?php

	/*
		Check out: http://w3schools.com/php/php_includes.asp

		We want to include many files in one main file.

		include
			- Your program will continue if this fails
		require
			- Your php program will stop running if this fails
	*/

	include("top.html");

	include("page1.html");
	include("page2.html");

	// Try renaming "bottom.html" to "end.html" and see your program not run
	require("bottom.html");
	
?>
