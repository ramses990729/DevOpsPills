<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
    <title>DevOps Pills</title>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark p-3" style="background-color: rgba(54, 2, 2, 0.6);">
          <a class="navbar-brand" href="./">DevOps-Pills</a>
          <button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link scroll" href="#ourWork">Our Work</a>
              </li>
              <li class="nav-item">
                <a class="nav-link scroll" href="#ourTeam">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link scroll" href="#contact" tabindex="-1">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/home.php" tabindex="-1">Blog</a>
              </li>
            </ul>
          </div> -->
          <?php
        wp_nav_menu( array(
            'theme_location'    => 'main-menu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'navbarNav',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
        </nav>
      <?php 
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post(); ?>
        <section class="jumbo" id="jumbotron">
        <div class="jumbotron jumbotron-fluid m-0 p-0" id="home">
          <div class="container">
            <h1 class="display-4 text-center font-weight-bold font-italic text-white">DevOps-Pills</h1>
            <p class="lead font-weight-bolder text-center text-white m-5">A computer science blog created especially to help you solve problems and clarify issues using small "pills" to make your work easier.</p>
            <div class="button-group text-center">
              <a class="btn btn-outline-danger d-inline-block scroll rounded-pill w-50" href="#ourWork">Keep Exploring ↓</a></div>
          </div>
        </div>
        </section>
        <main>
        <!-----------------OUR WORK SECTION-->
        <section class="work text-white text-center p-3" id="ourWork">
        <div class="container-fluid">
          <div class="row">
            <div class="row col-12 col-sm-6">
            <h2 class="col-12 text-white my-5">Topics that we cover</h2>
            <?php wp_list_categories(); ?>
             <div class="col-12 col-sm-6 mt-5">
               <h3 class="text-white">AWS</h3>
               <a class="cat-link" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/aws.jpg" alt="Work img" class="img-fluid area rounded-pill" style="height: 200px; object-fit: cover;"></a>
            </div>
            <div class="col-12 col-sm-6 mt-5">
              <h3 class="text-white">DEVOPS</h3>
              <a class="cat-link" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/devops.svg" alt="Work img" class="img-fluid area rounded-pill" style="height: 200px; object-fit: cover;"></a>
            </div>
            <div class="col-12 col-sm-6 mt-5">
              <h3 class="text-white">FRONT-END DEV</h3>
              <a class="cat-link" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/frontend.png" alt="Work img" class="img-fluid area rounded-pill" style="height: 200px; object-fit: cover;"></a>
            </div>
            <div class="col-12 col-sm-6 mt-5 ">
              <h3 class="text-white">MICROSOFT AZURE</h3>
              <a class="cat-link" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/azure.png" alt="Work img" class="img-fluid area rounded-pill" style="height: 200px; object-fit: cover;"></a>
            </div>
            </div>
          <div class="row col-12 col-sm-6 text-white p-1">
            <h2 class="col-12 text-white my-5 offset-1">About Us</h2>
            <div class="card team-card rounded-pill offset-1 offset-md-3 pt-4">
              <div class="card-header m-4"><h2>DevOps-Pills is...</h2></div>
              <div>
                
                  <img class="card-img-top img-thumbnail rounded" alt="About us Image" src="<?php echo get_template_directory_uri(); ?>/assets/img/about.jpg"style="height: 200px; max-width: 70%;">
        
              </div>
              <div class="card-body text-white m-4">
              <p class="font-weight-bold">
              DevOps-Pills is a blog aimed at all those computer science workers who are interested in either learning something new, reinforcing an area of knowledge, or simply solving a problem. We are a team of trained professionals and we seek to achieve our mission with each entry that is published and that may be useful to you in the future. We hope this project will help you. Let's keep coding!
              </p>
              <a class="btn btn-outline-danger d-inline-block scroll rounded-pill w-50 mt-3" href="#ourTeam">See Our Team!</a>
              </div>
          </div>
            </div>  
          </div>
        </div>
        </section>
       
        <!-----------------TEAM SECTION-->
        <div class="sec w-100 p-4">
        <div class="container">
        <section class="team m-5" id="ourTeam">
          <div class="row">
            <h2 class="text-center col-12 section-title text-white display-4 font-weight-bold"><strong>Team</strong></h2>
            <div class="card col-12 col-sm-4 text-center my-5 text-white team-card" id="team1">
              <div class="card-header">
                <h3 class="mb-5 text-white">Alex de Sousa</h3>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/alex.jpg" alt="Team Member Photo" style="max-height: 300px; min-height: 300px; object-fit: cover;" class="card-img-top img-fluid rounded-pill mt-2">
              <div class="card-body">
                <p class="mt-2 mb-5">Systems administrator certified as a Microsoft Azure Associate Administrator with 10 years of experience in infrastructure and storage/backup systems.</p>
                <a href="#" class="btn btn-outline-danger shadow stretched-link rounded-pill d-none">See Profile</a>
              </div>
            </div>
            <div class="card col-12 col-sm-4 text-center my-5 text-white team-card" id="team2">
              <div class="card-header">
                <h3 class="mb-5 text-white">Alvaro Almanza</h3>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/alvaro.png" alt="Team Member Photo" style="max-height: 300px; min-height: 300px; object-fit: fill;" class="card-img-top img-fluid rounded-pill mt-2">
              <div class="card-body">
                <p class="mt-2 mb-5">Cloud systems engineer working under devops culture around 5 years  ago and 10 years of experience working as a linux administrator. Using mostly aws as cloud provider.</p>
                <a href="#" class="btn btn-outline-danger shadow stretched-link rounded-pill d-none">See Profile</a>
              </div>
            </div>
            <div class="card col-12 col-sm-4 text-center my-5 text-white team-card" id="team3">
              <div class="card-header">
                <h3 class="mb-5 text-white">Ramsés Almanza</h3>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ramses.jpg" alt="Team Member Photo" style="max-height: 300px; min-height: 300px; object-fit: cover; object-position: center;" class="card-img-top img-fluid rounded-pill mt-2">
              <div class="card-body">
                <p class="mt-2 mb-5">Front-end web developer with 1 year of experience using Javascript as the main language with the React library  to create dynamic web applications.</p>
                <a href="#" class="btn btn-outline-danger shadow rounded-pill stretched-link d-none">See Profile</a>
              </div>
            </div>
          </div> 
        </section>
        <!-----------------CONTACT SECTION-->
        <section class="contact mb-3 mt-5" id="contact">
          <div class="row">
            <h2 class="col-12 text-center mt-5 section-title text-white"><strong>Contact Us</strong></h2>
            <div class="col-12 offset-sm-2 col-sm-8 my-5">
              <form>
                <div class="form-group">
                  <label for="name" class="form-label">Name:</label>
                  <input class="form-control" type="text" name="lastname" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                  <label for="lastname" class="form-label">Last name:</label>
                  <input class="form-control" type="text" name="lastname" placeholder="Your Last name" required>
                </div>
                <div class="form-group">
                  <label for="email" class="form-label">Email:</label>
                  <input class="form-control" type="email" name="email" placeholder="Your email" required>
                </div>
                <div class="form-group">
                  <label for="message" class="form-label">Your Message:</label>
                  <textarea class="form-control" cols='5' rows="5" name="message" required>
                  </textarea>
                  <button type="submit" class="btn btn-outline-danger my-5 px-4 offset-sm-5 rounded-pill">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </section>
      </div>
     
    </main>

            
          <?php endwhile; 
          endif; 
          ?>
    <?php get_footer(); ?>