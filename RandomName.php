<html>
    <p>
	<?php
	$FirstNames = array();
	array_push($FirstNames, "Jeffrey");
	array_push($FirstNames, "Malcom");
	array_push($FirstNames, "Ben");
	array_push($FirstNames, "Craig");
	
	// Create an array and push on the names
    // of your closest family and friends
    //sort($FirstNames);
  //  print join(", ", $FirstNames);
	// Sort the list
    print strtoupper($FirstNames[rand(0,count($FirstNames))])
	// Randomly select a winner!

	// Print the winner's name in ALL CAPS
	?>
	</p>
</html>
