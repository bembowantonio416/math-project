<?php
// Define variables
$fname = "example.txt";
$fpath = "/var/www/your_project/files/$fname";

// Read file content
$data = file_get_contents($fpath);

// Print file data
echo $data;
?>
