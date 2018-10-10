<!DOCTYPE>
<html>
<body>

<h1>Oak Trees</h1>

<?php
$servername = "localhost:3306";
$username = "nina";
$password = "MIS370";
$dbname = "Oaks3";
$tablename = "PlantName";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql  = 'SELECT * FROM `PlantName`';

?>

<?php
if ($conn->query($sql) === TRUE) {
    echo "Table PlantName accessed successfully";
} else {
    echo "Error viewing table: " . $conn->error;
}
?>

</body>
</html>