<?php
$servername = "localhost";
$username = "xxxxxx";
$password = "xxxxxxx";
$dbname = "xxxxxxxxx";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$pod = $_GET['id'];
$mess= $_GET['mess'];


$sql = "UPDATE `email` SET `prima`='$mess' WHERE `id`='$pod'";
if ($conn->query($sql) === TRUE) {
    
    /*echo '<pre>';
    print_r(json_encode(New record created successfully));  
           echo '</pre>';*/ 
    echo json_encode(array('data' => 'ok'));
} else {
    echo json_encode("Error: " . $sql . "<br>" . $conn->error);
}

$conn->close();
?>