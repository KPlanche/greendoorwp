<?php

/*
  Template Name: Full Page, No Sidebar
*/

get_header();  ?>

<div class="main">
  <div class="container">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>

  <!-- <div class="content"> -->
      <?php the_content(); ?>
    <!-- </div> --><!-- /.aboutus -->

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>