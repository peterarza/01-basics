<!DOCTYPE html>
<html>
<head>
	<title>PHP Recap, Basics</title>
</head>
<body>

	<?php
	/* All PHP code blocks must start with <?php and they must end with ?> */

	/* In php, variables are declared with a $ in front of them. This is php's version of the var keyword. It tells the language that what follows is the vars name. */
	$myVariable;

	/* Unlike JS and some other programming languages php requires you to end all statemtns with a ; failure to do so may result in the rest of the code throwing errors. */
	$myStatement = "Everything is fine.";

	print($myStatement);

	/* Variables are not immutable. this means that they can be manipulated and changed during your program's run time. Variables are often changed by using math operations or through concatenation. */

	$age = 10;
	$years = 20;

	$bobAge = $age + $years;

	print($bobAge);

	/* Variables can be overwritten or declared in a single line to save time and space. */

	$janeAge = $years + 30;
	print($janeAge);

	/* You can declare multiple variables in one line with the same value. */

	$side1 = $side2 = $side3 = $side4 = 120;
	print($side3);

	print('<br>');

	/* Data types exist in every language. PHP supports a standard amount of data types including numbers, strings characters, booleans, arrays and objects. */

	/* Booleans are the simplest data types they can only be T or F. */

	$password = true;
	$username = false;

	/* Integers are numbers are the next simplest data types. They are whole numbers including negative numbers. */

	$posInt = 383829;
	$negInt = -292849;

	/* Floats or floating point numbers are fractional or numbers with decimals. You can also specify floats using scientific notation. */

	$currentTemperature = 78.24;

	/* Strings are a sequence of characters. Strings should be enclosed in quotes either single or double. */

	$mySentence = 'Batman rules.';
	print($mySentence);

	/* Operators are elements that allow you to perform certain actions and functions on your variables and data types. We've already been working woth one operator: the assignment operator of = sign. It assigns a value to a variable. Other operators include arithmetic and comparison operators. */

	$howMuch = 2;
	$price = 50;
	$sale = 12;
	
	$orderTotal = $howMuch * $price - $sale;
	print($orderTotal);

	/* You can use the adding subtracting shorthand operators in PHP. */

	$firstNum = 5;
	$firstNum = $firstNum + 15;
	// Is the same as
	$firstNum += 15;

	/* Strings can be concatenated using the + sign in JS and most other languages. In php, you concatenate using the . symbol. */

	$partOne ="winter";
	$partTwo ="Olympic";
	$partThree ="Games";
	// Concat the 3 variables using dot symbol.

	$announcement = "<br>" . $partOne . " " . $partTwo . " " . $partThree;
	print($announcement);

	/* You can concat and assignement simultaneously just like you add or subtract and asign like above. */

	$begin = "Let the";
	$end = "m eat cake.";

	// Combine them together through concat traditionally
	$state = $begin . $end;

	// Concat a string and assign a string simultaneously
	$begin.= "m eat cake.";
	print($begin);



	?>


</body>
</html>