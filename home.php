<div class="mainBlog">
<?php get_header(); ?>

<h2 class="my-5 text-center text-white display-4">DevOps-Pills Blog</h2>
<hr class="bg-light">
        <div class="row">
               <!--Entries-->
            <div class="col-lg-9">  
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
              <div class="card mb-5 team-card offset-sm-1 rounded">
                <div class="card-body">
                    <a href="<?php the_permalink(); ?>"><h1 class="text-center"><?php the_title(); ?></h2></a>
                    <p class="small mb-0">Date: <?php the_time('F j, Y'); ?></p>
                    <p class="small mb-1">Author: <?php the_author(); ?></p>
                    <p class="small">
                        Categories:
                        <?php the_category('/'); ?>
                         tags: 
                        <?php the_tags('', '/', ''); ?>
                    </p>
                    <?php 
                    if(has_post_thumbnail()){
                      the_post_thumbnail('post-thumbnails', array('class' => 'mb-3 img-fluid'));
                    }
                    ?>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" class="btn btn-danger rounded-pill offset-5">See More</a>
                </div>
              </div>
                    <!--Entries--> 
              <?php endwhile; endif; ?>
                <!--Pagination-->
              <div class="card-body">
                    <?php get_template_part('template-parts/content', 'pagination'); ?>
              </div>
                <!--Pagination-->
            </div>
            <!--Aside-->
             <!--Aside-->
      </div>
    </div>
</div>
      <?php get_footer(); ?>
  </body>
</html>