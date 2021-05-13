<?php  
//naming de pestaña
include('inc/page_name_inc.php');

//versión
$v = "1.7";

?>


<!DOCTYPE html>
<html lang="es">

<head>
  <!-- set up -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title><?php echo $title; ?></title>

  <?php $desc = $page == "articulo.php" ? $entry->subtitulo : "Acercando el mundo profesional a los estudiantes universitarios desde 2012"; ?>
  <meta name="description" content="<?php echo $desc; ?>">

  <link rel="shortcut icon" href="trama.ico" />
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">

  <meta name="theme-color" content="#c883ec" />
  <meta name="msapplication-navbutton-color" content="#c883ec">
  <meta name="apple-mobile-web-app-status-bar-style" content="#c883ec">

  <!-- fuentes  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <!-- css -->
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <link href="css/aos.min.css" rel="stylesheet">
  <link href="css/main.css?v=<?php echo $v;?>" type="text/css" rel="stylesheet" media="screen" />
  <!-- <link rel="stylesheet" href="styles/debug.css"> -->


  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-JQ7LDZVKQC"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-JQ7LDZVKQC');
  </script>

</head>

<body class="loading">
  <!--PRELOADER-->
  <div class="preloader">
    <div class="preloader-circle"></div>
    <div class="preloader-circle"></div>
  </div>
  <!---->

  <header>
    <ul id="nav-mobile" class="sidenav">
      <li>
        <a href="index.php" class="brand-logo"><img src="img/logo-negro.png" alt="Trama logo"></a>
      </li>
      <li><a href="index.php">Home</a></li>
      <!-- <li><a href="index.php#acerca" class="section-link">Acerca</a></li> -->
      <li><a href="equipo.php">Equipo</a></li>
      <li><a href="clubes.php">Clubes</a></li>
      <li><a href="blog.php">Blog</a></li>
      <li class="icon"><a href="https://www.instagram.com/trama.itba/" target="_blank" rel="noreferrer"><i class="lab la-instagram"></i></a></li>
      <li class="icon"><a href="https://www.linkedin.com/company/club-trama"  target="_blank" rel="noreferrer"><i class="lab la-linkedin-in"></i></a></li>
      <li class="icon"><a href="https://open.spotify.com/show/7tcE6aC8G2qFLOUBxT4sPI"  target="_blank" rel="noreferrer"><i class="lab la-spotify"></i></a></li>
    </ul>

    <nav class=" transparent z-depth-0">
      <div class="nav-wrapper container">
        <?php $link = $page == "articulo.php" || $page == "blog.php" ? "blog.php" : "index.php" ?>
        <a href="<?php echo $link;?>" class="brand-logo">
          <img src="img/logo.png" alt="Trama logo">
          <?php echo $link == "blog.php" ? "<span>Blog</span>": "" ?>
        </a>
        <ul class="right hide-on-med-and-down">
          <li><a href="index.php">Home</a></li>
          <!-- <li><a href="index.php#section-1" class="section-link">Acerca</a></li> -->
          <li><a href="equipo.php">Equipo</a></li>
          <li>
            <a href="clubes.php" class='dropdown-trigger' data-target='dropdown'>Clubes</a>
            <ul id='dropdown' class='dropdown-content'>
              <li><a href="emprendedores.php">Emprendedores</a></li>
              <li><a href="consultoría.php">Consultoría</a></li>
              <li><a href="finanzas.php">Finanzas</a></li>
              <li><a href="it.php">IT</a></li>
              <li><a href="media.php">Media</a></li>
              <li><a href="comunicación.php">Comunicación</a></li>
            </ul>
          </li>
          <li><a href="blog.php">Blog</a></li>
          <li class="icon"><a href="https://www.instagram.com/trama.itba/" target="_blank" rel="noreferrer"><i class="lab la-instagram"></i></a></li>
          <li class="icon"><a href="https://www.linkedin.com/company/club-trama"  target="_blank" rel="noreferrer"><i class="lab la-linkedin-in"></i></a></li>
          <li class="icon"><a href="https://open.spotify.com/show/7tcE6aC8G2qFLOUBxT4sPI"  target="_blank" rel="noreferrer"><i class="lab la-spotify"></i></a></li>
          
        </ul>
        <a href="#!" data-target="nav-mobile" class="sidenav-trigger right"><i class="material-icons ">menu</i></a>
      </div>
    </nav>
  </header>


  