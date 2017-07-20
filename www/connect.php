<?php
$servername = 'servername';
$username = 'username';
$password = 'password';
$dbname = 'gloire_mun';

// Create connection
$dbh = new PDO('mysql:host='.$servername.';dbname='.$dbname, $username, $password);
// Check connection
if(!$dbh)
{
  echo "Error in connection"."<br/>"."Please try submitting the form again"."<br />";
  exit;
}

 ?>