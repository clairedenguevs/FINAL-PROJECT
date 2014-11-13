<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="babyrecord"; // Database name 
$tbl_name="info"; // Table name 

// Create connection
$conn = new mysqli($host, $username, $password, $db_name, $tbl_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO info(q1_babysName, q11_address11,q6_mothersName, q7_fathersName, q3_birthday3) VALUES
('$q1_babysName', '$q11_address11', '$q6_mothersName', '$q7_fathersName', '$q3_birthday3')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>