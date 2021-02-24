<?php 

include('templates/header.php');

?>
<main class="club consultoria">
  <section class="hero club consultoria">
    <div class="darken">
      <div class="container">
        <div class="row valign-row-l">
          <div class="col s12 m12 l7">
          <!-- <div class="col s12 m12 l5"> -->
            <h1>Club Consultoría</h1>
            <h5>¿Te gusta resolver problemas? A través del Club Consultoría vas a conocer dicha industria, obteniendo
              herramientas y metodologías de distintos consultores para acercarse al mundo profesional. A lo largo del
              año se realizan eventos y actividades junto con las mejores consultoras para desarrollar tu potencial. ¡Te
              esperamos!</h5>
          </div>
          <div class="col s12 m12 l6 offset-l1">
            <!-- <img src="img/consultoría/event-min.jpg" class="responsive-img" alt="placeholder"> -->
          </div>
        </div>
      </div>
    </div>
  </section>



  <section class="container section team">
    <div class="team-section aos-init aos-animate">
      <h4 style="padding-bottom:20px;">Equipo</h4>
      <div class="row valign-row-l  members-2">
        <div class="col s12 m6 l6 member-card-container">
          <div class="member-card">
            <div class="member-image">
            <img src="img/miembros/tramero43.jpg?v=2" alt="miembro" class="responsive-img member-alt">
            <img src="img/miembros/tramero05.jpg" alt="miembro" class="responsive-img"></div>
            <p class="name">Mateo Krössler</p>
            <p class="position">Coordinador Consultoría y Podcast</p>
            <ul class="contact">
              <li><a href="https://www.linkedin.com/in/mateokrossler/" target="_blank" rel="noreferrer"><i
                    class="fab fa-linkedin-in"></i></a></li>
              <li><a href="mailto:mkrossler@itba.edu.ar" target="_blank" rel="noreferrer"><i class="far fa-envelope"></i></a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col s12 m6 l6 member-card-container">
          <div class="member-card">
            <div class="member-image">
            <img src="img/miembros/tramero18.jpg" alt="miembro" class="responsive-img member-alt">
            <img src="img/miembros/tramero16.jpg" alt="miembro" class="responsive-img"></div>
            <p class="name">Pedro Ceballos</p>
            <p class="position">Coordinador Consultoría</p>
            <ul class="contact">
              <li><a href="https://www.linkedin.com/in/ceballos-pedro/" target="_blank" rel="noreferrer"><i
                    class="fab fa-linkedin-in"></i></a></li>
              <li><a href="mailto:pceballos@itba.edu.ar" target="_blank" rel="noreferrer"><i class="far fa-envelope"></i></a>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="alt-container section main-activity">
    <div class="container">
      <h4 style="margin-bottom:50px">Consulting Prep Club</h4>
    </div>
    <div class="row valign-row-l">
      <div class="col s12 m12 l6">
        <img src="img/consultoría/cpc.png" class="responsive-img" alt="cpc" >
      </div>
      <div class="col s12 m12 l6">
        <p>¿Te gustaría entrar en Bain, McKinsey o BCG? Consulting Prep Club es una comunidad de alumnos que se preparan
          para los procesos de recruiting de las grandes consultoras. Se realizan prácticas semanales de Case Interviews
          junto con consultores que aportan su experiencia y feedback. ¡Estás un paso más cerca! </p>
      </div>
    </div>
  </section>


  <section class="container section center sponsor">
    <h4>Nuestro Sponsor</h4>
    <a class="sponsor" href="https://www.bain.com/" target="_blank" rel="noreferrer"><img
        src="img/sponsors/logo-bain.png" class="responsive-img"  alt="bain"></a>
    <p>Bain & Company es una de las “Big Three” consultoras estratégicas. Fundada en 1973, cuenta con más de 50 oficinas
      distribuidas por el mundo. Se distingue por su mentalidad innovadora, integral y colaborativa. ¿Querés saber más?
      Entrá a <a href="https://www.bain.com/" target="_blank" rel="noreferrer">bain.com</a>.</p>
  </section>


  <?php 

    include('templates/clubes.php');

    ?>





</main>


<?php 

include('templates/footer.php');

?>