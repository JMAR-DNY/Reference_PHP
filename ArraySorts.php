<html>
    <p>
	<?php
	// Create an array with several elements in it,
	// then sort it and print the joined elements to the screen
    $myArray = array(45, 65, 345, 654, 354);
    sort($myArray);
    print join(", ", $myArray);
	?>
	</p>
	<p>
	<?php
	// Reverse sort your array and print the joined elements to the screen
    rsort($myArray);
    print join(", ",$myArray);
	?>
	</p>
</html>
