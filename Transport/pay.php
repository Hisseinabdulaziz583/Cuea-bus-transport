<?php

// Import the MPesa library
require 'vendor/autoload.php';


// Create an instance of the MPesa client
$client = new Kabangi\Mpesa\Init\Client();

// Set the API credentials
$client->setCredentials('CONSUMER_KEY', 'CONSUMER_SECRET');

// Set the transaction details
$transaction = [
  'phone_number' => '254712345678',
  'amount' => 100,
  'description' => 'Test transaction'
];

// Prompt the user for a PIN
$pin = readline('Enter your PIN: ');

// Send the payment
$response = $client->sendPayment($transaction, $pin);

// Check the response status
if ($response->isSuccessful()) {
  echo 'Payment successful!';
} else {
  echo 'Payment failed!';
}

?>
