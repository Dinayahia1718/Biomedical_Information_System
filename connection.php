<?php
// Database credentials
$servername = "localhost";
$username = "rawan";
$password = "rawan";
$dbname = "HIS";

// Create connection
$conn1 = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
}
echo "Connected successfully";


// Database credentials
$servername1 = "localhost";
$username1 = "root";
$password1 = "";
$dbname1 = "supplements";

// Create connection
$conn2 = new mysqli($servername1, $username1, $password1, $dbname1);

// Check connection
if ($conn2->connect_error) {
    die("Connection failed: " . $conn2->connect_error);
}
echo "Connected successfully supplements";
?>