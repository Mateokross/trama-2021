<?php 

include('templates/header.php');

include('inc/get_blog_data_inc.php');

?>
<main class="blog">

  <section class="hero blog">
    <div class="darken">
      <div class="container center-align">        
            <h1>Blog Trama</h1>
            <h5>Un espacio para compartir grandes ideas.</h5>
      </div>
    </div>
  </section>


  <!--
<section class="container center-align">
    <div>
        <ul id="blog-nav">
            <li><a href="">Seguir</a></li>
            <li><a href="">Más populares</a></li>
            <li><a href="">Categorías</a></li>
            <li><a href="">Buscar</a></li>
        </ul>
    </div>
</section>
-->

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
                <p class="date"><?php echo $entry->fecha; ?></p>
                <div class="article-content"><?php echo $entry->contenido; ?></div>
                <div class="tags"></div><!-- PENDIENTE-->
                <div class="article-footer">
                    <a href="articulo.php?id=<?php echo $id; ?>">Leer Artículo Completo</a> 
                </div>     
                <hr style="border-top: 1px solid #eee;">      
            </div>

        <?php 
            }
        ?>

        


        <!-- <div class="blog-card col s12 m12 l12">
            <span class="categoria">Categoria</span> · <span> </span> <span class="fecha">9 de diciembre del 2018</span>
            <h4 class="titulo">Este es el título de la nota</h5>
            <h5 class="subtitulo">Un subtitulo que especifica un poco mas</h5>
            
            <div class="contenido">
                Feetus deleetus consectetur adipisicing elit. Magnam, delectus. Sapiente exercitationem mollitia voluptatum nostrum fugit dolorum, quasi alias explicabo quos tenetur debitis possimus laudantium deserunt quo quod labore a?
                <img class="responsive-img" src="img/placeholder.jpg" alt="foto">
                sit amet consectetur adipisicing elit. Magnam, delectus. Sapiente exercitationem mollitia voluptatum nostrum fugit dolorum, quasi alias explicabo quos tenetur debitis possimus laudantium deserunt quo quod labore a?
            </div>

            <div class="article-footer row">
                <div class="left-align col s6 m6 l6">
                    <a href="">Read More</a> 
                </div>
                <div class="right-align col s6 m6 l6">
                    <a href="">Share <i class="fas fa-share"></i></a> 
                </div>
            </div>     
            <hr style="border-top: 1px solid #bbb;">      
        </div>

        <div class="blog-card col s12 m12 l12">
            <span class="categoria">Categoria</span> · <span> </span> <span class="fecha">9 de diciembre del 2018</span>
            <h4 class="titulo">Este es el título de la nota</h5>
            <h5 class="subtitulo">Un subtitulo que especifica un poco mas</h5>
            
            <div class="contenido">
                sit amet consectetur adipisicing elit. Magnam, delectus. Sapiente exercitationem mollitia voluptatum nostrum fugit dolorum, quasi alias explicabo quos tenetur debitis possimus laudantium deserunt quo quod labore a?
                <img class="responsive-img" src="img/placeholder.jpg" alt="foto">
                sit amet consectetur adipisicing elit. Magnam, delectus. Sapiente exercitationem mollitia voluptatum nostrum fugit dolorum, quasi alias explicabo quos tenetur debitis possimus laudantium deserunt quo quod labore a?
            </div>

            <div class="article-footer row">
                <div class="left-align col s6 m6 l6">
                    <a href="">Read More</a> 
                </div>
                <div class="right-align col s6 m6 l6">
                    <a href="">Share <i class="fas fa-share"></i></a> 
                </div>
            </div>     
            <hr style="border-top: 1px solid #bbb;">      
        </div>

        <div class="blog-card col s12 m12 l12">
            <span class="categoria">Categoria</span> · <span> </span> <span class="fecha">9 de diciembre del 2018</span>
            <h4 class="titulo">Este es el título de la nota</h5>
            <h5 class="subtitulo">Un subtitulo que especifica un poco mas</h5>
            
            <div class="contenido">
                Feetus deleetus. Magnam, delectus. Sapiente exercitationem mollitia voluptatum nostrum fugit dolorum, quasi alias explicabo quos tenetur debitis possimus laudantium deserunt quo quod labore a?
                <img class="responsive-img" src="img/placeholder.jpg" alt="foto">
                sit amet consectetur adipisicing elit. Magnam, delectus. Sapiente exercitationem mollitia voluptatum nostrum fugit dolorum, quasi alias explicabo quos tenetur debitis possimus laudantium deserunt quo quod labore a?
            </div>

            <div class="article-footer row">
                <div class="left-align col s6 m6 l6">
                    <a href="">Read More</a> 
                </div>
                <div class="right-align col s6 m6 l6">
                    <a href="">Share <i class="fas fa-share"></i></a> 
                </div>
            </div>     
            <hr style="border-top: 1px solid #bbb;">      
        </div>         -->

    </div>
    </div>
</section>



</main>


<?php 

include('templates/footer.php');

?>