
<section class="section <?php echo isset($index) ? "container" : "alt-container"?> clubs">
    <?php echo isset($index) ? "" : "<div class='container'>"?>
      <?php echo isset($title) ? '' : '<h4 style="margin-bottom:50px">Clubes</h4>'?>
    <?php echo isset($index) ? "" : "</div>"?>
  <div class="row">
    <a href="emprendedores.php" class="col s12 m6 l4 club emprendedores">
      <div class="club-background-img"></div>
      <div class="club-background-color"><div class="club-text"><p>Emprendedores</p></div></div>
    </a>
    <a href="consultoría.php" class="col s12 m6 l4 club consultoria">
      <div class="club-background-img"></div>
      <div class="club-background-color"><div class="club-text"><p>Consultoría</p></div></div>
    </a>
    <a href="it.php" class="col s12 m6 l4 club it">
      <div class="club-background-img"></div>
      <div class="club-background-color"><div class="club-text"><p>IT</p></div></div>
    </a>
    <a href="media.php" class="col s12 m6 l6 club media">
      <div class="club-background-img"></div>
      <div class="club-background-color"><div class="club-text"><p>Media</p></div></div>
    </a>
    <!--<a href="comunicación.php" class="col s12 m6 l4 club comunicacion">
      <div class="club-background-img"></div>
      <div class="club-background-color"><div class="club-text"><p>Comunicación</p></div></div>
    </a>-->
    <a href="finanzas.php" class="col s12 m12 l6 club finanzas">
      <div class="club-background-img"></div>
      <div class="club-background-color"><div class="club-text"><p>Finanzas</p></div></div>
    </a>
  </div>
</section>
