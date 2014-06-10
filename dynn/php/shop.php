<?php
	// 1. Create a database connection
	$dbhost = "localhost";
	$dbuser = "soloshef";
	$dbpass = "e/3rn@L+00";
	$dbname = "soloshef_DYNN";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// Test if connection occurred
	if(mysqli_connect_errno()) {
		die("Database connection failed " . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")" );
	}
?>

<?php
	// 2. Perform database query

	if (isset($_POST['sortBy']) && $_POST['sortBy'] == 'brand') {
		$query = "SELECT * FROM bakeware ORDER BY brand";
	} else if (isset($_POST['sortBy'])  && $_POST['sortBy'] == 'series') {
		$query = "SELECT * FROM bakeware ORDER BY series";
	} else if (isset($_POST['sortBy'])  && $_POST['sortBy'] == 'pricelow') {
		$query = "SELECT * FROM bakeware ORDER BY price ASC";
	} else if (isset($_POST['sortBy'])  && $_POST['sortBy'] == 'pricehigh') {
		$query = "SELECT * FROM bakeware ORDER BY price DESC";
	} else {
		$query  = "SELECT * ";
		$query .= "FROM bakeware ";
	}

	$result = mysqli_query($connection, $query);

	// test if there was a query error
	if (!$result) {
		die("Database query failed");
	}
?>