<?php // index.php ?>

<?php get_header(); // Includes the content of header.php ?>
            <?php 
            // This is the beginning of the Loop.
            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="l-main-content">
            <h1 class="post-headline"><?php the_title(); ?></h1>
            <div class="post-meta">
            	<?php // This section is for things like number of comments, date posted, author, etc. ?>
            </div>
              <?php the_content(); // Echoes the content of whatever post we're looping through. ?>
          </div>

            <?php 
            // This is where the Loop ends.
            endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
<?php get_footer(); //Includes the content of footer.php ?>