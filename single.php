<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h2 class="entry-title"><?php the_title(); ?></h2>

        <div class="authorsection">
            <div class="entry-meta">
            <div class="authorimg">
              <?php echo get_avatar (get_the_author_meta('ID'), 150); ?>
            </div><!-- /.authorimg -->
              <?php // hackeryou_posted_on(); ?>

            <div class="authorname">
              <?php the_author_posts_link(); ?>
            </div><!-- /.authorname -->

            <div class="authorbio">
              <?php echo get_the_author_meta("description"); ?>
            </div><!-- /.authorbio -->

            <div class="socialmedia">
              <i class="fa fa-twitter"></i>
              <i class="fa fa-facebook"></i>
              <i class="fa fa-instagram"></i>
            </div><!-- /.socialmedia -->
          </div><!-- /.authorsection -->

       
          <div class="datetitle">
            <div class="date">
              <?php the_date ('F d, Y'); ?> @<?php the_time (' g:i a')?>
            </div><!-- /.date -->

            <div class="title">
             <div class="contenttitle">
              <h1 class="entry-title"><?php the_title(); ?></h1>
             </div><!-- /.contenttitle -->
            </div><!-- /.title -->
          </div><!-- /.datetitle -->
          </div><!-- .entry-meta -->
       

        <div class="entry-content">
          <div class="contentpicture">
            <?php the_content(); ?>

          <div class="excerpt">
            <?php the_excerpt(); ?>
          </div><!-- /.excerpt -->            
            <a href="" class="readmore">Read More (<?php comments_number ("$one, $more");?>)</a><br>
            <?php the_tags(); ?>

          </div><!-- /.contentpicture -->
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->

          <div class="entry-utility">
            <?php //edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
          </div><!-- .entry-utility -->
        </div><!-- #post-## -->

        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->
        
        <?php //comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

    <?php //get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>