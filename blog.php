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


<section class="section container">
    <div class="container blog row">



        <?php
            // Traverse array and display user data
            foreach ($entries as $id=>$entry) {
            //aca se loopea cada articulo
        ?>  


            <div class="blog-card col s12 m12 l12">
                <a href="articulo.php?id=<?php echo $id; ?>">
                    <h4 class="title"><?php echo $entry->titulo; ?></h5>
                    <h5 class="subtitle"><?php echo $entry->subtitulo; ?></h5>
                </a>
                <p class="author-date"><?php echo $entry->autor; ?> - <?php echo $entry->fecha; ?></p>
                <div class="article-content wysiwyg">
                    <img data-src="<?php echo $entry->miniatura->path; ?>" alt="miniatura" class="lozad responsive-img">
                    <?php echo $entry->contenido; ?>                 
                </div>
                <div class="article-footer">
                    <a href="articulo.php?id=<?php echo $id; ?>">Leer Artículo Completo</a> 
                </div>     
                <hr style="border-top: 1px solid #eee;">      
            </div>

        <?php 
            }
        ?>


    </div>
    </div>
</section>


</main>


<?php 

include('templates/footer.php');

?>