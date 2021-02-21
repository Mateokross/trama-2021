<?php 

include('templates/header.php');

?>
  <main>
    <section class="hero">
      <div class="-blur">
        <div class="container">
          <div class="half-width" data-aos="fade-up">
            <h1>Club Trama</h1>
            <h5>Acercamos el mundo profesional a los estudiantes para aprender y crecer.  </h5>
          </div>
        </div>
      </div>
      <a href="#acerca" class="arrow bounce"></a>
    </section>



    <section class="container section quienes-somos" id="acerca">
      <div class="row valign-row-l" data-aos="fade-up">
        <div class="col s12 m12 l6 valign-wrapper">
          <h4>Acerca de Nosotros</h4>
          <p>Trama es una organización de estudiantes que nace en 2012 con dos objetivos principales, por un lado acercar el mundo laboral a los estudiantes y por otro generar en los jóvenes interés en las temáticas de actualidad.
          </p><p>
            La organización cuenta con cinco clubes: Emprendedores, Finanzas, Consultoría, Comunicación y IT, también con un departamento de Media. Cada club tiene un ciclo de actividades cuatrimestral, abierto a todos los estudiantes, que brinda la posibilidad de conocer de cerca cada uno de estos campos.</p>
        </div>
        <div class="col s12 m12 l6 center">
          <img id="img-5-clubes" class="responsive-img" src="img/5clubes.png" alt="Clubes Trama">
        </div>
      </div>
    </section>


    <section class="section alt-container sponsors" style="margin-bottom:0;">
      <h4 class="center-align" >Nuestros Sponsors</h4>
      <div class="carousel" id="sponsors-carousel">
        <a class="carousel-item" href="https://www.mercadolibre.com/" target="_blank" rel="noreferrer" ><img src="img/sponsors/logo-mercadolibre.png" alt="mercado libre"></a>
        <a class="carousel-item" href="https://www.bancogalicia.com/" target="_blank" rel="noreferrer"><img src="img/sponsors/logo-galicia.png" alt="banco galicia"></a>
        <a class="carousel-item" href="https://www.bain.com/" target="_blank" rel="noreferrer"><img src="img/sponsors/logo-bain.png" alt="bain"></a>
        <a class="carousel-item" href="https://www.clarin.com/" target="_blank" rel="noreferrer"><img src="img/sponsors/logo-clarin.png" alt="clarin"></a>
        <a class="carousel-item" href="https://www.globant.com/" target="_blank" rel="noreferrer"><img src="img/sponsors/logo-globant.png" alt="globant"></a>
      </div>
    </section>


    <?php 

    $index = 1;
    include('templates/clubes.php');

    ?>



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



    
    <!--Noticias-->
    <!-- <section class="container section" id="Noticias">
      <div class="row" class="container">
        <div class="noticias-head">
          <div class="col s6 m6 l6 left-align"><h4>Noticias</h4></div>
          <div class="col s6 m6 l6 right-align"><h4><a href="">Ir al Blog <i class="far fa-newspaper"></i></a></h4></div>
        </div>
        <div class="col s12 m12 l4"> 

          <div class="card small">
            <div class="card-image">
              <img src="img/_DSC0764.jpg">
              <span  class="card-title" id="card-tit">Bootcamp Experience</span>
            </div>
            <div class="card-content">
              <p id="card-text" class="truncate-overflow">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti voluptate, perferendis ad laudantium at voluptatum reiciendis. Labore, illo delectus. Libero possimus explicabo consequatur quibusdam exercitationem veniam assumenda! Veritatis, quis vitae.</p>
              <a id="read-more" href="">Leer más</a>  
            </div>
            <div class="card-date">09/12/2018</div>
          </div>
          
        </div>

        <div class="col s12 m12 l4"> 
          <div class="card small">
            <div class="card-image">
              <img src="img/_DSC0764.jpg">
              <span  class="card-title" id="card-tit">Bootcamp Experience</span>
            </div>
            <div class="card-content">
              <p id="card-text" class="truncate-overflow">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti voluptate, perferendis ad laudantium at voluptatum reiciendis. Labore, illo delectus. Libero possimus explicabo consequatur quibusdam exercitationem veniam assumenda! Veritatis, quis vitae.</p>
              <a id="read-more" href="">Leer más</a>  
            </div>
            <div class="card-date">09/12/2018</div>
          </div>
          
        </div>

        <div class="col s12 m12 l4"> 
          <div class="card small">
            <div class="card-image">
              <img src="img/_DSC0764.jpg">
              <span  class="card-title" id="card-tit">Bootcamp Experience</span>
            </div>
            <div class="card-content">
              <p id="card-text" class="truncate-overflow">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti voluptate, perferendis ad laudantium at voluptatum reiciendis. Labore, illo delectus. Libero possimus explicabo consequatur quibusdam exercitationem veniam assumenda! Veritatis, quis vitae.</p>
              <a id="read-more" href="">Leer más</a>  
            </div>
            <div class="card-date">09/12/2018</div>
          </div>
          
        </div>
        
      </div>
    </section>   -->





  </main>


<?php 

include('templates/footer.php');

?>