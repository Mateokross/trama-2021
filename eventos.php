<?php 

include('templates/header.php');





$api_url = 'http://localhost/trama-2021/admin/api/collections/get/eventos';

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);

// All user data exists in 'entries' object
$entries = $response_data->entries;

// Cut long data into small & select only first 10 records
$entries = array_slice($entries, 0, 9);

// Print data if need to debug
// print_r($user_data);

// Traverse array and display user data
foreach ($entries as $entry) {
  echo "name: ".$entry->nombre;
  echo "<img src='".$entry->thumbnail->path."'>";
}













include('templates/footer.php');

?>