<?php

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=vreg;charset=utf8mb4', 'root', '');

// Get the values of seatno from the table btable
$bTable = $db->query('SELECT seatno FROM btable')->fetchAll();

// Check if the user has selected any radio buttons
if (empty($_POST['radio'])) {
  // Loop through the bTable and turn all radio buttons green and inactive
  for ($i = 1; $i <= 40; $i++) {
    $radioValue = $i;
    document.querySelector('input[name="radio"][value="' . $radioValue . '"]').classList.add('green', 'inactive');
  }
} else {
  // Get the values of radio buttons selected by the user
  $selectedRadios = $_POST['radio'];

  // Loop through the bTable and turn the radio buttons green and inactive if the value is present in the selectedRadios array
  foreach ($bTable as $row) {
    $radioValue = $row['seatno'];
    if (in_array($radioValue, $selectedRadios)) {
      document.querySelector('input[name="radio"][value="' . $radioValue . '"]').classList.add('green', 'inactive');
    }
  }
}



