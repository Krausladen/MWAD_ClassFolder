<!--
attempting to update the database with inputs at the website.
-->
<?php

include 'connection.php';

echo 'Connecting to database...<br>';
$dbname = "modulethree";
$conn = new mysqli ($servername, $username, $password, $dbname);
echo 'Verifying connection...<br>';
if ($conn->connect_error){
  die ("Database Connection Failure " . $conn->connect_error);
}
echo 'Successfully connected to database...<br>';

$myquery = "SELECT customer_id, customername, customercode, salesperson_id FROM customer";
$queryresult = $conn->query($myquery);

if ($queryresult->num_rows > 0) {
  while($row = $queryresult->fetch_assoc()) {
    echo "Customer ID: " . $row["customer_id"]. " ||  Customer Name: " . $row["customername"]. " ||  Customer Code " . $row["customercode"]. " ||  Salesperson ID: " . $row["salesperson_id"]. "<br>";
  }
} else {
  echo "... 0 results.<br>";
}
echo 'All data displayed. <br>';
// Block 6

// Block 7
mysqli_close($connection);
echo "Connection closed. <br>";
echo "<a href='http://krausladenshome.centralus.cloudapp.azure.com/module3/salesapp/apphome.html'>Return to App Home</a>";
?>
