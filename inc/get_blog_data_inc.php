<?php


error_reporting(E_ALL ^ E_WARNING);


// //start session
session_start();

//Get blog data if needed
if (!isset($_SESSION['articulos'])) {

    // Define Api Url
    $api_url = 'http://trama.mateokrossler.com/admin/api/collections/get/Articulos';

    // Read JSON file
    $json_data = file_get_contents($api_url);

    // Decode JSON data into PHP array
    $response_data = json_decode($json_data);

    // All article data exists in 'entries' object
    $entries = $response_data->entries;

    // Reverse entries array so newer articles are displayed first
    $entries = array_reverse($entries, true);

    // lazy loading        
    foreach ($entries as $id=>$entry) {
        $entry->contenido = str_replace("<img src=","<img class='lozad' data-src=",$entry->contenido);
    }


    //save into session 
    $_SESSION['articulos'] = $entries;


}else{
    $entries = $_SESSION['articulos'];
}
