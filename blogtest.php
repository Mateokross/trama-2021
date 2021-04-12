<?php 

include('templates/header.php');



$api_url = 'http://trama.mateokrossler.com/admin/api/collections/get/Articulos';

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);

// All user data exists in 'entries' object
$entries = $response_data->entries;

// Cut long data into small & select only first 10 records
$entries = array_slice($entries, 0, 9);


// Traverse array and display user data
foreach ($entries as $entry) {
  //aca se loopea cada articulo
  ?>  

  <div class="card">
    <h1 class="titulo"><?php echo $entry->titulo; ?></h1>
    <h3 class="subtitulo"><?php echo $entry->subtitulo; ?></h3>
    <p class="autor"><?php echo $entry->autor; ?></p>
    <p class="fecha"><?php echo $entry->fecha; ?></p>
    <div class="contenido"><?php echo $entry->contenido; ?></div>
  </div>
  
<?php 
}















include('templates/footer.php');

?>