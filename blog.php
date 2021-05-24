<?php 

include('inc/get_blog_data_inc.php');

include('templates/header.php');

?>


<main class="blog">

  <section class="hero blog">
    <div class="darken">
      <div class="container center-align">        
            <h1>Blog Trama</h1>
            <p>Un espacio para compartir grandes ideas.</p>
      </div>
    </div>
  </section>


<section class="section blog container">
    <div class="row">

        <?php 
            //loop each
            foreach ($entries as $id=>$entry) {
        ?>
            <a href="articulo.php?id=<?php echo $id; ?>" class="col s12 m12 l4">
            <div class="card">
                <div class="card-image-container">
                <div class="card-image lozad" data-background-image="<?php echo $entry->miniatura->path;?>">
                </div>
                <!-- <div class="card-image" style="background-image: url('<?php echo $entry->miniatura->path;?>')"> -->
                <!-- </div> -->
                </div>
                <div class="card-content">
                <span class="card-title"><?php echo $entry->titulo;?></span>
                </div>
            </div>
            </a>
        <?php
            }
        ?>


    </div>
</section>


</main>


<?php 

include('templates/footer.php');

?>