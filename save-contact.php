<?php

// in this script, we'll insert the contact information
// into a database we've created.
//
// NOTE WELL: This is dangerous out in the real world!
//            We'll fix this later.

// Gather up the data
$name = $_POST['name'];
$comments = $_POST['comments'];

// Connect using the information about our contacts database
$mysqli = new mysqli("localhost", "tamouse", "", "contacts");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

// Build the SQL statement
$sql = "INSERT INTO contacts(name, comments) values( '$name', '$comments' ) ";
// Insert the data. DANGEROUS!!
$mysqli->query($sql);
// check for errors
if ($mysqli->errno) {
    echo "Insert failed with error: (" . $mysqli->errorno . ") " . $mysqli->error;
}

// VERY IMPORTANT!! Always close the database connection you opened earlier
$mysqli->close();

?>

<h1>Thanks for the comments!</h1>