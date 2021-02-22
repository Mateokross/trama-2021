<?php 

include('templates/header.php');

?>
<main class="club it">
  <section class="hero club it">
    <div class="darken">
      <div class="container">
        <div class="row valign-row-l">
          <div class="col s12 m12 l7">
          <!-- <div class="col s12 m12 l5"> -->
            <h1>Club IT</h1>
            <h5>¿Te interesa la tecnología? ¿queres saber cuales son las novedades en el sector? En el Club IT vas a
              aprender sobre las innovaciones tecnológicas y también a aplicarlas de maneras disruptivas.</h5>
          </div>
          <div class="col s12 m12 l7">
          </div>
        </div>
      </div>
    </div>
  </section>



  <section class="container section team">
    <h4 style="padding-bottom:20px;">Equipo</h4>
    <!-- ROW -->
    <div class="row valign-row-l members-2">
      <div class="col s12 m6 l6 member-card-container">
        <div class="member-card">
          <div class="member-image">
            <img src="img/miembros/tramero23.jpg" alt="miembro" class="responsive-img member-alt">
            <img src="img/miembros/tramero22.jpg" alt="miembro" class="responsive-img"></div>
          <p class="name">Lautaro Hernando</p>
          <p class="position">Coordinador IT</p>
          <ul class="contact">
            <li><a href="https://www.linkedin.com/in/lautaro-hernando-060b31164/" target="_blank" rel="noreferrer"><i
                  class="fab fa-linkedin-in"></i></a></li>
            <li><a href="mailto:lhernando@itba.edu.ar" target="_blank" rel="noreferrer"><i
                  class="far fa-envelope"></i></a></li>
          </ul>
        </div>
      </div>

      <div class="col s12 m6 l6 member-card-container">
        <div class="member-card">
          <div class="member-image">
            <img src="img/miembros/tramero12.jpg" alt="miembro" class="responsive-img member-alt">
            <img src="img/miembros/tramero11.jpg" alt="miembro" class="responsive-img"></div>
          <p class="name">Santiago Colantonio</p>
          <p class="position">Coordinador IT</p>
          <ul class="contact">
            <li><a href="https://www.linkedin.com/in/santiago-colantonio-9392b61ab/" target="_blank" rel="noreferrer"><i
                  class="fab fa-linkedin-in"></i></a></li>
            <li><a href="mailto:scolantonio@itba.edu.ar" target="_blank" rel="noreferrer"><i
                  class="far fa-envelope"></i></a></li>
          </ul>
        </div>
      </div>

    </div>
  </section>

  <section class="alt-container section main-activity">
    <div class="container">
      <h4 style="margin-bottom:50px">Bot Challenge</h4>
    </div>
    <div class="row valign-row-l">
      <div class="col s12 m12 l6">
        <img src="img/it/robocode.png" class="responsive-img" alt="placeholder">
      </div>
      <div class="col s12 m12 l6">
        <p>BotChallenge es una competencia de Inteligencia Artificial donde en equipo se programaran uno o varios bots
          para competir en combates virtuales contra los de otros equipos. Un evento para despertar la curiosidad,
          desarrollar habilidades y derrumbar las “barreras”causadas por el temor a lo desconocido.</p>
      </div>
    </div>
  </section>


  <section class="container section center sponsor">
    <h4>Nuestro Sponsor</h4>
    <a class="sponsor" href="https://www.globant.com/" target="_blank" rel="noreferrer" alt="globant"><img
        src="img/sponsors/logo-globant.png" class="responsive-img"></a>
    <p>Globant es una empresa de ingeniería de software y tecnología de la información originaria de Argentina con sede
      en Luxemburgo.​ Es considerada como uno de los cuatro unicornios argentinos ¿Querés saber más? Entrá a <a
        href="https://www.globant.com/" target="_blank" rel="noreferrer">globant.com</a>.</p>
  </section>


  <?php 

    include('templates/clubes.php');

    ?>




</main>


<?php 

include('templates/footer.php');

?>