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

$sql = "SELECT `mail`, `prima`, `seconda`, `terza` FROM `email` WHERE `id`='$pod'";
$result = $conn->query($sql);


           $json_array = array();  
           while($row = $result->fetch_assoc())
           {  
                $json_array[] = $row;  
           }  
 
           /*echo '<pre>';  
           print_r(json_encode($json_array));  
           echo '</pre>';*/  
           echo json_encode($json_array);
          

?> 