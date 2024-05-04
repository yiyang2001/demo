<?php
// Simulate a slow server response
sleep(2);

// You can also process the data and return a JSON response
$data = array("message" => "Data fetched successfully!");

echo json_encode($data);
?>