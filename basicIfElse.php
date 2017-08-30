<!DOCTYPE html>
<html>
<head>
	<title>Basic If, Else Commenting</title>
</head>
<body>
	
	<?php
		
		/* Created 2 variables: $cat and $dog. Variables hold 2 numbers to be used in the if conditional below. */
		$cat = 1;
		$dog = 2;
		
		/* Created an if, else if conditional statement that evaluates for the variables above. If the value of $cat is equal to 1 then php will print "Meow." */

		if($cat == 1) {
			print('meow.') 
		/* else if $dog is equal to 1 then php will print "woof." */
		}else if ($dog == 1) {
			print('Woof.');
		/* else if $cat doesn't equal 1 and $dog doesn't equal 1, php will print "not an animal."*/
		}else {
			print('Not an animal.');
		}
		


	?>


</body>
</html>