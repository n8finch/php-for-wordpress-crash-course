<?php
/**
 * Getting started
 * 1. Set up LocalWP, spin up new site
 * 2. Pull code from Github: https://github.com/n8finch/php-for-wordpress-crash-course
 * 3. Download extra PHP versions
 * 4. Show PHP on Mac
 * 5. Can use https://sandbox.onlinephpfunctions.com/
 * 6. Can use Virtual Box to run Linux
 * 7. Install PHP Intelephense: https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client
 * 8. index.php is the entry file.
 */

// A simple howdy.
echo 'Howdy folks! 🤠';

print 'How y\'all doin\'?';

echo '<pre>';
var_dump("I'm your hucklberry...");
echo '</pre>';

// Declare a variable.
$bye = 'Y\'all come back now!';

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<p>

		<?php
		echo $bye;
		?>
	</p>
</body>

</html>

<?php
// And the beat goes on...
