<?php
$uname = $_POST['uname'];
$email = $_POST['mail'];
$password = $_POST['psw'];
$rpassword = $_POST['pssw'];

// Create a new MySQLi connection
$conn = new mysqli('localhost', 'root', '', 'vreg');

// Check if the connection was successful
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

// Prepare the INSERT statement
$stmt = $conn->prepare("insert into signup(user_name,email,password,confirm_password) values(?,?,?,?)");

// Check if the statement was prepared successfully
if ($stmt === false) {
  die('Prepare failed: ' . $conn->error);
}

// Bind the parameters to the statement
$stmt->bind_param("ssss", $uname, $email, $password, $rpassword);

// Execute the statement
$stmt->execute();

// Close the statement and connection
$stmt->close();
$conn->close();
// Redirect the user to the home page
        header('Location: index.html');
// Echo a success message
echo "The user is successfully registered...";

?>