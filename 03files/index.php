<?php

	/*
		Check out:

			http://w3schools.com/php/php_file.asp
			http://w3schools.com/php/php_ref_filesystem.asp

			http://w3schools.com/php/php_string.asp
			http://w3schools.com/php/php_ref_string.asp
	
		When using files:
			- Open them
			- Do whatever you want with them
			- Close them
	*/

	$file = fopen("myDoc.txt","r") or exit("This is a good way to let yourself know if opening a file fails.");

	/*
		This creates an array -> $line
		by breaking           -> explode
		a string              -> fgets($line)
		around the spaces     -> ' '
		
		Yes, $line is becoming an array right before our eyes.
	*/
	$line = explode(' ',fgets($file));
	
	// A variable to store a name we find
	$name = "";
	
	// Until the end of the file
	while(!feof($file) && sizeof($line) != 0) {

		// React if you find certain strings
		if ($line[0] == "Name:") {
			// Add all of the remaining strings to the name variable
			for ($i=1; $i<sizeof($line); $i++) {
				$name .= " " . $line[$i];
			}
		}
		else if ($line[0] == "Gender:") {
			if ($line[1] == "Male")
				echo "Hello, Mr." . $name . "<br />";
			else
				echo "Hello, Ms." . $name . "<br />";
		}
		else {
			for ($i=0; $i<sizeof($line); $i++)
				echo $line[$i] . " ";
			echo "<br />";
		}

		$line = explode(' ',fgets($file));
			
	}
	
	$file.close();

?>