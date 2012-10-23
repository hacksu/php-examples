<?php
	
	// Check out http://w3schools.com/php/
	
	// I am declaring a function at the top of my program
	function goodBye() {
		echo "This was printed from a function.
<br />
<br />
Notice that we are using PHP to print out an HTML file that the browser is using to show this page.
<br />
Right-click and 'view source' to see what we printed.
<br />
<br />
Have a nice day.";
	}
	
	/*
		We do not need to declare a main program in PHP.
		It runs from the beginning to the end.
		Note: The function above was just stored to be used when needed, like in C++.
	*/
	
	echo "This is a php program.";
	// cout << "This is a php program.";
	
	echo "
<h1>Look how easy it is to print out HTML from PHP.</h1>
<img src=\"http://www.oyepictures.com/o/congratulations/congratulations_002.jpg\" style='height: 200px' />
<h1>Now we can have more powerful, dynamically-controlled websites.</h1>
<br />
";
	
	/*
		Variables in PHP always begin with the dollar sign -> $
		Note: we do not need to declare the type of a variable.
		
		You can print variables by adding ("concatenating") them to strings.
	*/
	$myVar = 3;
	if ($myVar < 5)
		echo "My number was ".$myVar.", and it's less than 5.";
	else
		echo "My number was ".$myVar.", and it's more than 5.";
	
	/*
		You can print variables by adding ("concatenating") them to strings. See above.
		You can print variables by just writing their full name (dollar sign included) in strings. See below.
	*/
	$myString = "quotes";
	echo "
<br />
You can print variables inside the $myString.
";
	
	// I am declaring a function within my program
	function lineBreak($num) {
		for ($i=0; $i<$num; $i++)
			echo "<br />";
	}
	
	lineBreak($myVar);
	
	echo "
A function printed the last $myVar line breaks.
<br />
";
	
	goodBye();
	
?>