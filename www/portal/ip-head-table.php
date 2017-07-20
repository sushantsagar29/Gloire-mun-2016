<!DOCTYPE html>
<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<html>
<body>
<table class=".table-bordered" style='border: solid 1px black;width:4500px;'>
  <tr><th>Sl No.</th><th>Name</th><th>Email Address</th>
  <th>Contact No.</th><th>Alternative Contact No.</th><th>Gender</th>
  <th>Address</th><th>Date of Birth</th><th>Name of Institute</th>
  <th>Course/Stream</th><th>Year of Study/Class</th><th>Total Number of MUNs attended overall</th>
  <th>Total Number of MUNs attended as an International Press Member</th><th>Past MUN Experiences as an Intl. Press Member</th><th>Accommodation Required?</th>
  <th>How does International Press plays an important role in a Model United Nations?</th><th>Give links to any other articles or work as a member IP that you would like us to know about.</th><th>Describe yourself in 200-250 words</th><th>Write article on: Ongoing Situation in the Middle East with special focus</th>
  <th>State your views on the current situation of mass media in the nation </th>
  <th>Any Experience in this field other than MUNs?</th>
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
     $stmt = $conn->prepare("SELECT * FROM iphd"); 
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