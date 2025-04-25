<?php
  // Initialize the session
  session_start();
  
  // Check if user is logged in or not
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    // User is logged in, move them to the home page
    header("Location: index.php");
    exit();
  }
  
  // Define variables and constants from file math-project/variables.php
  $array1 = array(10, 20);
  $array2 = array(30, 40, 50, 60);
  
  // Output data in PHP format, with an HTML encoding for compatibility
  echo "<p>Array 1: " . json_encode($array1) . "</p>";
  echo "<p>Array 2: " . json_encode($array2) . "</p>";
