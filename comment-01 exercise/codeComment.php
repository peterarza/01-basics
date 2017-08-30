<!DOCTYPE html>
<html>
<head>
	<title>Code Commenting Exercise</title>
</head>
<body>

	<?php

	/* Created 2 variables: $total and $wallet. $total was assigned the value of 56 and $wallet was assigned the value of 80.*/

		$total = 56;
		$wallet = 80;


		/* If the value of $total is greater than the value of $wallet then "You don't have enough money." will be printed. */
		if($total > $wallet) {
			print("You don't have enough money.");
		

		/* Else if the value of $total is less than the value of $wallet, "Purchase successful." will be printed. */
		}else if ($total < $wallet) {
			print("Purchase successful.");
		
		/* If none of the conditions are met then "Try again." will be printed. */
		} else {
			print("Try again.");
		}



	?>

</body>
</html>