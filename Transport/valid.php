<?php

// Define the SQL query
$sql = "SELECT * FROM signup WHERE user_name = :user_name AND password = :password";

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=vreg', 'root', '');

// Create a PDOStatement object
$stmt = $db->prepare($sql);

// Check if the user is already logged in
if (isset($_SESSION['username'])) {
    // The user is already logged in, so redirect them to the home page
    header('Location: home.html');
    exit;
}

// Check if the login form has been submitted
if (isset($_POST['user_name']) && isset($_POST['password'])) {

    // Get the username and password from the POST request
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    // Bind the parameters to the statement
    $stmt->bindParam(':user_name', $user_name);
    $stmt->bindParam(':password', $password);

    // Get the user from the database
    $stmt->execute();

    // Check if the user was found in the database
    if ($stmt->rowCount() > 0) {

        // The user was found in the database, so log them in
        $_SESSION['username'] = $user_name;

        // Redirect the user to the home page
        header('Location: home.html');
        exit;

        // Echo a message to the screen
        echo '<p>User logged in successfully.</p>';
    } else {

        // The user was not found in the database, so show an error message
        echo '<p>Invalid username or password.</p>';
    }
}
?>
