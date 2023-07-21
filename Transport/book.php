<?php
$name = $_POST['uname'];
$registration = $_POST['regno'];
$email = $_POST['mail'];
$seatno = $_POST['seatno'];
$time = $_POST['time'];
$destination = $_POST['destin'];
$status =1;

// Create a new MySQLi connection
$conn = new mysqli('localhost', 'root', '', 'vreg');

// Check if the connection was successful
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

// Prepare the INSERT statement
$stmt = $conn->prepare("insert into btable(name,regno,email,seatno,time,destination,status) values(?,?,?,?,?,?,?)");

// Check if the statement was prepared successfully
if ($stmt === false) {
  die('Prepare failed: ' . $conn->error);
}

// Bind the parameters to the statement
$stmt->bind_param("sisissi", $name, $registration, $email, $seatno,$time,
	$destination,$status);


// Execute the statement and check if it was successful
if ($stmt->execute()) {
  echo "The seat is successfully booked make payment and print ticket";
} else {
  echo "An error occurred while registering the vehicle...";
}


// Create a button that links to payment page
echo '<button type="button" onclick="window.location.href=\'payment.html\'">MAKE PAYMENT</button>';



// Close the statement and connection
$stmt->close();
$conn->close();

?>