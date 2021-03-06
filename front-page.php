<?php

/*
  Template Name: Full Page, No Sidebar
*/

get_header();  ?>

<div class="main">
<div class="homecontent">
  <div class="container">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>

  <div class="aboutus">
      <?php the_content(); ?>
    </div><!-- /.aboutus -->

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
  </div> <!-- /.homecontent -->
</div> <!-- /.main -->

<?php get_footer(); ?>