<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<?php
?>
<table class=".table-bordered" style='border: solid 1px black;width:4500px;'>
<tr>
  <th>Sl no</th><th>Name</th><th>Email Address</th>
  <th>Contact No.</th><th>Gender</th>
  <th>Address</th><th>Date of Birth</th><th>Name of Institute</th>
  <th>Total Number of MUNs attended</th>
  <th>Past MUN Experiences  as a Delegate </th><th>Past MUN Experiences as an Executive Board Member </th><th>Accommodation Required?</th>
  <th>Country Preference 1</th><th>Country Preference 2</th><th>Provide two agendas for your preferred committee and give reasons for the same?</th><th>What step would you take if the delegates are deviating from the mandate/agenda of the respective committee?</th>
  <th>Why should we select you in the Executive Board for Gloire Model United Nations, 2016?</th>
  <th>How would you encourage the first timers to indulge in the debate?</th>
  <th>If not the chairperson, are you open to be vice-chairperson or Rapporteur in the Executive Board?</th>
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
     $stmt = $conn->prepare("SELECT * FROM eb"); 
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