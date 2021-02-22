<?php 

include('templates/header.php');

?>
  <main class="clubes">
    <section class="hero short-hero">
      <div class="-blur">
        <div class="container">
          <div class="half-width">
            <h1>Clubes</h1>
          </div>
        </div>
      </div>
      <a href="#acerca" class="arrow bounce"></a>
    </section>

    <?php 

    $index = 1;
    $title = 0;

    include('templates/clubes.php');

    ?>


  </main>


<?php 

include('templates/footer.php');

?>