<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

          <div class="entry-meta date">
            <?php echo get_the_date('F d, Y'); ?>@<?php the_time ('g:i a') ?>
          </div><!-- .entry-meta -->

          <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h3 class="entry-title"><?php the_title(); ?></h3>

          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->

          <div class="entry-utility">
            <?php hackeryou_posted_in(); ?>
            <?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
          </div><!-- .entry-utility -->
        </div><!-- #post-## -->

        <div class="aboutauthor">

          <div class="authorinfo">
            <div class="authorimg"><?php echo get_avatar(get_the_author_meta('ID'), 100); ?></div>

            <div class="authorname"><?php the_author_posts_link(); ?></div>
          </div> <!-- /.authorinfo -->

          <div class="authordesc">

            <div class="authorbio">
              <?php echo get_the_author_meta("description"); ?>
            </div><!-- /.authorbio -->

            <div class="socialmedia">
              <i class="fa fa-twitter"></i>
              <i class="fa fa-facebook"></i>
              <i class="fa fa-instagram"></i>
            </div><!-- /.socialmedia -->

          </div> <!-- /.authordesc -->

        </div> <!-- /.aboutauthor -->


        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>