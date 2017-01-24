<?PHP
$servername = "sql.hiwaay.net";
$username = "Administrator";
$password = "irondale9";
$dbName = "irondale_com_testDB";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
echo "</br>Database Connection Successful</br></br>";

?>