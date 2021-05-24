<?php

$page = basename($_SERVER['PHP_SELF']);

if ($page == "index.php" || $page == ""){
    $title = "Club Trama";
}else if ($page == "equipo.php"){
    $title = "El Equipo";
}else if ($page == "clubes.php"){
    $title = "Clubes";
}else if ($page == "emprendedores.php"){
    $title = "Club Emprendedores";
}else if ($page == "consultoría.php"){
    $title = "Club Consultoría";
}else if ($page == "finanzas.php"){
    $title = "Club Finanzas";
}else if ($page == "it.php"){
    $title = "Club IT";
}else if ($page == "media.php"){
    $title = "Club Media";
}else if ($page == "comunicación.php"){
    $title = "Club Comunicación";
}else if ($page == "bootcamp.php"){
    $title = "Bootcamp Trama";
}else if ($page == "blog.php"){
    $title = "Blog Trama";
}else if ($page == "articulo.php"){
    $title = $entry->titulo;
}else{
    $title = "Club Trama";
}