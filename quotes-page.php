<?php
/**
 * Template Name: Quotes
 *
 * The page template used for the about yunus page.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container" class="one-column">
			<div id="content" role="main" class="homepage">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">


            <h2 >Quotes</h2>

                      
          <div style="float:left;width:356px;">
              <img src="<?php bloginfo('template_directory'); ?>/images/quotes/quotes-yunus.jpg" alt="Professor Yunus" style='border:solid 1px #E5DCBF;'/>
          </div>

          <div style="float:left;width:315px;border:1px solid #E4DBBE;padding:14px 20px 10px 20px;background-color:#F0EBDB;margin-left:15px;font-size:13px;height:242px;">
            <p>
              CISB will bring people together – students, corporations, foundations and individuals to look at the world’s most serious issues and find business solutions for them. It is a place to expose the next generation of business, political and social leaders to international and multi-cultural problems because they are the ones who will inherit the world we have built…..they will find the solutions. They will address these issues head on because they want a different world and they understand that the systems we have built have failed.

              <br /><b>&ndash; Muhammad Yunus</b>
            </p>
          </div>

              
          <div style="clear:both;padding-top:1px;">
            <?php the_content(); ?>
          </div>

          <div class="clear"></div>

            <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>

            
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

<?php endwhile; ?>

			</div><!-- #content -->
		</div><!-- #container -->



<?php get_footer(); ?>
