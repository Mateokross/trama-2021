<?php 

include('inc/get_blog_data_inc.php');

include('inc/articulo_inc.php');

include('templates/header.php');

?>


<main class="articulo">

    <section class="hero">
        <div class="darken">
            <div class="container center-align">
            </div>
        </div>
    </section>



    <section class="section container">
        <div class="container article row">
            <div class="blog-card col s12 m12 l12">
                <h4 class="title"><?php echo $entry->titulo; ?></h5>
                <h5 class="subtitle"><?php echo $entry->subtitulo; ?></h5>
                <p class="author-date"><?php echo $entry->autor; ?> <span>-</span> <?php echo $entry->fecha; ?></p>
                <div class="article-content wysiwyg">
                    <img data-src="<?php echo $entry->miniatura->path; ?>" alt="miniatura" class="lozad responsive-img">
                    <?php echo $entry->contenido; ?>
                </div>
            </div>
        </div>
    </section>

</main>


<?php 

include('templates/footer.php');

?>