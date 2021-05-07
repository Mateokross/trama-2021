<?php 

include('templates/header.php');

include('inc/get_blog_data_inc.php');

include('inc/articulo_inc.php');

?>
<main class="articulo">

    <section class="hero">
        <div class="darken">
            <div class="container center-align">
                <!-- <h1>Blog Trama</h1> -->
                <!-- <h5>Un espacio para compartir grandes ideas.</h5> -->
            </div>
        </div>
    </section>



    <section class="section container">
        <div class="container article row">
            <div class="blog-card col s12 m12 l12">
                <h4 class="title"><?php echo $entry->titulo; ?></h5>
                <h5 class="subtitle"><?php echo $entry->subtitulo; ?></h5>
                <p class="date"><?php echo $entry->fecha; ?></p>
                <div class="article-content wysiwyg"><?php echo $entry->contenido; ?></div>
                <div class="tags"></div><!-- PENDIENTE-->
            </div>
        </div>
    </section>

</main>


<?php 

include('templates/footer.php');

?>