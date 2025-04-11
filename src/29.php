<?php
// Define variables
$student_id = 1;
$subject = "Math";
$current_time = date("Y-m-d H:i:s");

// Add new student entry to database
$new_student_entry = "INSERT INTO students (id, subject) VALUES ('$student_id', '$subject')";

// Log the current time in a file
$log_file = "/path/to/log/file.log";
file_put_contents($log_file, $current_time . PHP_EOL, FILE_APPEND);

echo "New student entry added successfully.";
?>
