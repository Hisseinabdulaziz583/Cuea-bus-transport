<?php

// Define the new_password and uname variables
$new_password = $_POST['new_password'];
$uname = $_POST['uname'];

// Create a new MySQLi connection
$conn = new mysqli('localhost', 'root', '', 'vreg');

// Check if the connection was successful
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

// Check if the mysqli object is still open
if ($conn->ping()) {

  // Prepare the UPDATE statement
  $stmt = $conn->prepare("update signup set password=? where user_name=?");

  // Bind the parameters to the statement
  $stmt->bind_param("ss", $new_password, $uname);

  // Execute the statement
  $stmt->execute();

  // Close the statement and connection
  $stmt->close();
  $conn->close();

  // Get the table data
  $sql = "select count(*) as total_users from signup";
  $result = $conn->query($sql);

  // Print the table data in a table format
  echo "<table>";
  echo "<tr>";
  echo "<th>Number of Users</th>";
  echo "</tr>";

  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['total_users'] . "</td>";
    echo "</tr>";
  }

  echo "</table>";
} else {
  echo "The mysqli object is already closed.";
}
?>
