<?php
$vehicletype = $_POST['vtype'];
$registrationno = $_POST['regno'];
$total_seat = $_POST['capacity'];

// Create a new MySQLi connection
$conn = new mysqli('localhost', 'root', '', 'vreg');

// Check if the connection was successful
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

// Prepare the INSERT statement
$stmt = $conn->prepare("insert into vtable(registrationno,total_seat,vehicletype) values(?,?,?)");

// Check if the statement was prepared successfully
if ($stmt === false) {
  die('Prepare failed: ' . $conn->error);
}

// Bind the parameters to the statement
$stmt->bind_param("iss", $registrationno, $total_seat, $vehicletype);

// Execute the statement
$stmt->execute();

// Close the statement and connection
$stmt->close();
$conn->close();

// Echo a success message
echo "The vehicle is successfully registered...";

?>