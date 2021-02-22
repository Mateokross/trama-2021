<?php 

include('templates/header.php');

?>
<main class="club comunicacion">
  <section class="hero club comunicacion">
    <div class="darken">
      <div class="container">
        <div class="row valign-row-l">
        <div class="col s12 m12 l7">
          <!-- <div class="col s12 m12 l5"> -->
            <h1>Club Comunicación</h1>
            <h5>En en club Comunicación creemos en la importancia de la inspiración, de la creatividad, de la
              introspección y en el valor de las relaciones humanas en este mundo interconectado.
              Por eso realizamos actividades que ayudan a: mejorar la manera en que uno como futuro profesional logra
              comunicarse, a desarrollar la inteligencia emocional y a potenciar habilidades como el liderazgo, la
              negociación y la oratoria.
            </h5>
          </div>
          <div class="col s12 m12 l6 offset-l1">

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
            <img src="img/miembros/tramero04.jpg" alt="miembro" class="responsive-img member-alt">
            <img src="img/miembros/tramero06.jpg" alt="miembro" class="responsive-img"></div>
          <p class="name">Luciano Ceschin</p>
          <p class="position">Coordinador Comunicación</p>
          <ul class="contact">
            <li><a href="https://www.linkedin.com/in/luciano-ceschin-040b711b4/" target="_blank" rel="noreferrer"><i
                  class="fab fa-linkedin-in"></i></a></li>
            <li><a href="mailto:lceschin@itba.edu.ar" target="_blank" rel="noreferrer"><i class="far fa-envelope"></i></a></li>
          </ul>
        </div>
      </div>

      <div class="col s12 m6 l6 member-card-container">
        <div class="member-card">
          <div class="member-image">
            <img src="img/miembros/tramero25.jpg" alt="miembro" class="responsive-img member-alt">
            <img src="img/miembros/tramero25.jpg" alt="miembro" class="responsive-img"></div>
          <p class="name">Sofia Ivnisky</p>
          <p class="position">Coordinadora Comunicación</p>
          <ul class="contact">
            <li><a href="https://www.linkedin.com/in/sofia-ivnisky-77a8501a7/" target="_blank" rel="noreferrer"><i
                  class="fab fa-linkedin-in"></i></a></li>
            <li><a href="mailto:sivnisky@itba.edu.ar" target="_blank" rel="noreferrer"><i class="far fa-envelope"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="alt-container section main-activity">
    <div class="container">
      <h4 style="margin-bottom:50px">In&Out</h4>
    </div>
    <div class="row valign-row-l">
      <div class="col s12 m12 l6">
        <img src="img/comunicación/in&out.png" class="responsive-img" alt="placeholder">
      </div>
      <div class="col s12 m12 l6">
        <p>Como principal evento del club Comunicación, el In&Out propone un día lleno de actividades para potenciar las
          habilidades de comunicación, liderazgo y negociación. Al mismo tiempo, realizamos actividades para aprender
          cómo razonamos, cómo sentimos y cómo conectarnos mejor con nosotros mismos para así poder comunicarnos mejor
          con el resto del mundo. </p>
      </div>
    </div>
  </section>


  <section class="container section center sponsor" id="section-3">
    <h4>Nuestro Sponsor</h4>
    <a class="sponsor" href="https://www.clarin.com/" target="_blank" rel="noreferrer" alt="clarin"><img
        src="img/sponsors/logo-clarin.png" class="responsive-img"></a>
    <p>Clarín es una compañía de medios con más de 70 años de experiencia, líder en prensa gráfica y digital de
      Argentina. A través de la calidad periodística de sus colaboradores y sus más de 25 productos editoriales, brinda
      servicios informativos que reflejan y analizan los principales intereses y preocupaciones de la sociedad.</p>
  </section>


  <?php 

    include('templates/clubes.php');

    ?>





</main>


<?php 

include('templates/footer.php');

?>