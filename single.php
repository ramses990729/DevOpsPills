<?php get_header();?>
<?php 

if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>


<main class="text-white main p-5">
  <div class="container h-100">
    <div class="row m-auto">
       <section class="col-12 text-justify">
         <p class="text-center text-justify">
           <h2 class="text-center mb-5 mt-5 display-4"><?php the_title(); ?></h2>
           <hr class="bg-light">
                    <p class="small mb-0">Date: <?php the_time('F j, Y'); ?></p>
                    <p class="small mb-0">Author: <?php the_author(); ?></p>
                    <p class="small">
                        Categories:
                        <?php the_category('/'); ?>
                         tags: 
                        <?php the_tags('', '/', ''); ?>
                    </p>
                    <?php 
                      if(has_post_thumbnail())
                      {
                        the_post_thumbnail('post-thumbnails', array('class' => 'mb-3 img-fluid'));
                      }
                    ?>
                    <?php the_content(); ?>
                    <?php
                    if( comments_open() || get_comments_number() ) :
                      comments_template();
                    endif;
                    ?></p>
       </section>
  </div>

  
</main>



<?php get_footer(); ?>
</body>
</html>
<?php wp_footer(); ?>
                 
          <?php endwhile; 
          endif; 
          ?>