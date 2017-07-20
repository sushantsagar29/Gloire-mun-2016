<!DOCTYPE html>
<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<html>
<body>

<?php
?>
<table class=".table-bordered" style='border: solid 1px black;width:4500px;'>
  <tr><th>Sl no.</th><th>Name</th><th>Email Address</th>
  <th>Contact No.</th><th>Alternative Contact No.</th><th>Gender</th>
  <th>Address</th><th>Date of Birth</th><th>Name of Institute</th>
  <th>Course/Stream</th><th>Year of Study/Class</th><th>Total Number of MUNs attended as an International Press Member</th>
  <th>Past MUN Experiences </th><th>Accommodation Required?</th><th>Committee Preference</th>
  <th>Position to Apply</th><th>Agency Preferences (for Reporter)</th><th>How would you like to pay for Gloire MUN 2016?</th><th>Would you like to join us for the Socials?</th>
  <th>Anything else you would like us to know.</th>
  </tr>
  <?php

class TableRows extends RecursiveIteratorIterator { 
     function __construct($it) { 
         parent::__construct($it, self::LEAVES_ONLY); 
     }

     function current() {
         return "<td style='border: 1px solid black;'>" . parent::current(). "</td>";
     }

     function beginChildren() { 
         echo "<tr>"; 
     } 

     function endChildren() { 
         echo "</tr>" . "\n";
     } 
} 

require_once('connect.php');//connecting to the server

try {
     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $stmt = $conn->prepare("SELECT * FROM ip"); 
     $stmt->execute();

     // set the resulting array to associative
     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

     foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
         echo $v;
     }
}
catch(PDOException $e) {
     echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>  

</body>
</html>