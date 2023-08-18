



<?php



$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$when_it_happened = $_POST['whenithappened'];
$how_long = $_POST['howlong'];
$how_many = $_POST['howmany'];
$alien_description = $_POST['aliendescription'];
$what_they_did = $_POST['whattheydid'];
$fang_spotted = $_POST['fangspotted'];
$email = $_POST['email'];
$other = $_POST['other'];

$dbc = mysqli_connect('localhost', 'root', '', 'aliendatabase')
  or die('Error connecting to MySQL server.');

$query = "INSERT INTO aliens_abduction (first_name, last_name, when_it_happened, how_long, " .
  "how_many, alien_description, what_they_did, fang_spotted, other, email) " .
  "VALUES ('$first_name', '$last_name', '$when_it_happened', '$how_long', '$how_many', " .
  "'$alien_description', '$what_they_did', '$fang_spotted', '$other', '$email')";

$result = mysqli_query($dbc, $query)
  or die('Error querying database.');
  echo "Form submitted successfully!";

mysqli_close($dbc);


?>



 
