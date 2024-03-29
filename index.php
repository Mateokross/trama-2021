<?php 

// include('inc/get_blog_data_inc.php');

include('templates/header.php');

?>
  <main class="index">
    <section class="hero">
      <div class="-blur">
        <div class="container">
          <div class="half-width" data-aos="fade-up">
            <h1>Club Trama</h1>
            <p>Acercamos el mundo profesional a los estudiantes para aprender y crecer.</p>
          </div>
        </div>
      </div>
      <a href="#acerca" class="arrow bounce"></a>
    </section>



    <section class="container section quienes-somos" id="acerca">
      <div class="row valign-row-l">
        <div class="col s12 m12 l6 valign-wrapper">
          <h4>Acerca de Nosotros</h4>
          <p>Trama es una organización de estudiantes que nace en 2012 con dos objetivos principales, por un lado acercar el mundo laboral a los estudiantes y por otro generar en los jóvenes interés en las temáticas de actualidad.
          </p><p>
            La organización cuenta con cinco clubes: Emprendedores, Finanzas, Consultoría, Comunicación y IT, también con un departamento de Media. Cada club tiene un ciclo de actividades cuatrimestral, abierto a todos los estudiantes, que brinda la posibilidad de conocer de cerca cada uno de estos campos.</p>
        </div>
        <div class="col s12 m12 l6 center">
          <img id="img-5-clubes" class="responsive-img" src="img/5clubes_new.png" alt="Clubes Trama">
        </div>
      </div>
    </section>


    <section class="section alt-container sponsors" style="margin-bottom:0;">
      <h4 class="center-align" >Nuestros Sponsors</h4>
      <div class="carousel" id="sponsors-carousel">
        <!-- Emprendedores - Main Sponsor -->
        <a class="carousel-item" href="https://www.lemon.me/" target="_blank" rel="noreferrer" ><img class="lozad" data-src="img/sponsors/logo-lemon.png" alt="lemon"></a>
        <!-- <a class="carousel-item" href="https://www.mercadolibre.com/" target="_blank" rel="noreferrer" ><img src="img/sponsors/logo-mercadolibre.png" alt="mercado libre"></a> -->
        <a class="carousel-item" href="https://www.bancogalicia.com/" target="_blank" rel="noreferrer"><img src="img/sponsors/logo-galicia.png" alt="banco galicia"></a>
        <a class="carousel-item" href="https://www.bain.com/" target="_blank" rel="noreferrer"><img src="img/sponsors/logo-bain.png" alt="bain"></a>
        <!-- <a class="carousel-item" href="https://www.clarin.com/" target="_blank" rel="noreferrer"><img class="lozad" data-src="img/sponsors/logo-clarin.png" alt="clarin"></a> -->
        <a class="carousel-item" href="https://www.globant.com/" target="_blank" rel="noreferrer"><img class="lozad" data-src="img/sponsors/logo-globant.png" alt="globant"></a>
        <!-- Emprendedores - Platinum -->
        <a class="carousel-item" href="https://www.areatresworkplace.com/" target="_blank" rel="noreferrer" ><img class="lozad" data-src="img/sponsors/logo-a3.png" alt="A3"></a>

        <a class="carousel-item" href="https://www.kavak.com/ar" target="_blank" rel="noreferrer" ><img class="lozad" data-src="img/sponsors/logo-kavak.png" alt="Kavak"></a>
        <a class="carousel-item" href="https://www.despegar.com.ar" target="_blank" rel="noreferrer" ><img class="lozad" data-src="img/sponsors/logo-despegar.png" alt="Despegar"></a>
        <a class="carousel-item" href="https://balanz.com/" target="_blank" rel="noreferrer" ><img class="lozad" data-src="img/sponsors/logo-balanz.png" alt="Balanz"></a>
        <a class="carousel-item" href="https://www.eklos.com.ar/" target="_blank" rel="noreferrer"><img class="lozad" data-src="img/sponsors/logo-eklos.png" alt="eklos"></a>
        <!-- Emprendedores -  Gold -->
        <a class="carousel-item" href="https://www.cabrales.com/" target="_blank" rel="noreferrer"><img class="lozad" data-src="img/sponsors/logo-cabrales.png" alt="cabrales"></a>
        <!-- Emprendedores -  Silver -->
        <a class="carousel-item" href="https://www.bigbox.com.ar/" target="_blank" rel="noreferrer"><img class="lozad" data-src="img/sponsors/logo-bigbox.png" alt="big box"></a>
        <a class="carousel-item" href="https://www.infinidad.com.ar/" target="_blank" rel="noreferrer"><img class="lozad" data-src="img/sponsors/logo-infinidad.png" alt="Infinidad"></a>
        <a class="carousel-item" href="https://www.hdi.com.ar/" target="_blank" rel="noreferrer"><img class="lozad" data-src="img/sponsors/logo-hdi.png" alt="HDI"></a>
        <!-- Emprendedores -  Nos apoya -->
        <a class="carousel-item" href="https://www.itba.edu.ar/" target="_blank" rel="noreferrer"><img src="img/sponsors/logo-itba.png" alt="itba"></a>
      </div>
    </section>


    <?php 

    $index = 1;
    include('templates/clubes.php');

    ?>





    <!--  Noticias-->
     <!-- <section class="alt-container section blog">
       <div class="container">

        <h4><a href="blog.php">Blog Trama</a></h4>

        <div class="row"> -->
        <?php 
          //get last three articles
          //$entries = array_slice($entries, 0, 3, true);
          //loop each
          //foreach ($entries as $id=>$entry) {
        ?>
          <!-- <a href="articulo.php?id=<?php //  echo $id; ?>" class="col s12 m12 l4">
            <div class="card">
              <div class="card-image-container">
                <div class="card-image lozad" data-background-image="<?php // echo $entry->miniatura->path;?>">
                </div> -->
                <!-- <div class="card-image" style="background-image: url('<?php // echo $entry->miniatura->path;?>')"> -->
                <!-- </div> -->
              <!-- </div>
              <div class="card-content">
                <span class="card-title"><?php // echo $entry->titulo;?></span>
              </div>
            </div>
          </a> -->
        <?php
          //}
        ?>


        </div>
    </section>   

    <!-- Podcast -->
    <!-- <section class="container section podcast" id="acerca"> -->
    <section class="alt-container section podcast" id="acerca">
      <div class="row valign-row-l">
        <div class="col s12 m12 l6 center">
          <img id="img-5-clubes" class="responsive-img border-radius" src="img/podcast/logopodcast.png" alt="Podcast Trama" style="width:520px">
        </div>
        <div class="col s12 m12 l6 valign-wrapper">
          <h4>El Podcast</h4>
          <p>En este podcast entrevistamos a profesionales interesantes e importantes emprendedores, brindando herramientas e información útil, charlando sobre grandes personalidades y analizando libros sobre temas de interés como liderazgo, productividad, entre otros. Podés escucharlo en cualquier lugar, incluyendo Spotify. 
          </p>
          <p style="padding-top:20px;" class="center"><a href="https://open.spotify.com/show/7tcE6aC8G2qFLOUBxT4sPI" class="podcast btn" target="_blank" rel="noreferrer">Escuchalo en Spotify</a></p>
          
        </div>
      </div>
    </section>

    

    <!--Trayecto-->
    <!-- <section class="section alt-container" id="Trayecto">
      <div class="container" data-aos="fade-up">
      <h4 style="margin-bottom:50px">Trayecto</h4>
      </div>
      <div class="timeline" data-aos="fade-up">

        <div class="container container-left">
        <div class="image" style="background-image:url('https://images.pexels.com/photos/307008/pexels-photo-307008.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=100')"></div>
          <div class="content">
              <span>2013/2014</span>
              <h2>Great Title Here</h2>
              <p>
                Et hinc magna voluptatum usu, cum veniam graece et. Ius ea scripserit temporibus, pri cu harum tacimates neglegentur. At adipisci incorrupte nam. Cu qui sumo appareat constituto.
              </p>
          </div>
        </div>
        <div class="container container-right" >
            <div class="image" style="background-image:url('https://images.pexels.com/photos/210012/pexels-photo-210012.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=100')"></div>
            <div class="content">
              <span>2014/15</span>
              <h2>Great Title Here</h2>
              <p>
                Et hinc magna voluptatum usu, cum veniam graece et. Ius ea scripserit temporibus, pri cu harum tacimates neglegentur. At adipisci incorrupte nam. Cu qui sumo appareat constituto.
              </p>
          </div>
        </div>
        <div class="container container-left">
            <div class="image" style="background-image:url('https://images.pexels.com/photos/2104152/pexels-photo-2104152.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=100')"></div>
            <div class="content">
              <span>2015/16</span>
              <h2>Great Title Here</h2>
              <p>
                Et hinc magna voluptatum usu, cum veniam graece et. Ius ea scripserit temporibus, pri cu harum tacimates neglegentur. At adipisci incorrupte nam. Cu qui sumo appareat constituto.
              </p>
            </div>
        </div>

      </div>
    </section> -->

    <!-- <section class="section alt-container" id="section-2">
    <div class="row" data-aos="fade-up">
      <div class="container" >

        <div class="col l4" id="div-eventos">
          <h5 class="white-text">Proximos eventos</h5>
          <ul>
              <li class="li-eventos">Evento 1 morondana - Fecha</li>
              <li class="li-eventos">Evento 2 - Fecha</li>
              <li class="li-eventos">Evento 3 - Fecha</li>
              <li class="li-eventos">Evento 4 - Fecha</li>
              <li class="li-eventos">Evento 5 - Fecha</li>
              <li class="li-eventos">Evento 6 - Fecha</li>
              <li class="li-eventos">Evento 7 maradona - Fecha</li>
              <li class="li-eventos">Evento 8 - Fecha</li>
          </ul>
        </div>  
      
      <div class="col s12 m12 l8">
        Mate do your magic
      </div>

    </div>
  </div>
  </section> -->





  </main>


<?php 

include('templates/footer.php');

?>