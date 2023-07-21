<?php

// Connect to the MySQL database
$conn = new mysqli('localhost', 'root', '', 'vreg');

// Check if the connection was successful
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

// Get the user's email address from the form
$email = $_POST['mail'];

// Check if the email address exists in the database
$sql = "SELECT email FROM signup WHERE email = '$email'";
$result = $conn->query($sql);

// If the email address exists in the database, send an email to the user with a link to reset their password
if ($result->num_rows > 0) {

  // Generate a random password
  $password = md5(uniqid());

  // Update the user's password in the database
  $sql = "UPDATE signup SET password = '$password' WHERE email = '$email'";
  $conn->query($sql);

  // Send an email to the user with a link to reset their password
  $subject = "Password Reset";
  $message = "Hello,

You have requested to reset your password. To reset your password, please click on the following link:

https://example.com/reset-password?password=$password

If you did not request to reset your password, please ignore this email.

Thank you,
The Team";

  mail($email, $subject, $message);

  echo "A password reset email has been sent to your email address.";

} else {

  echo "The email address you entered does not exist.";

}

// Close the connection to the MySQL database
$conn->close();

?>