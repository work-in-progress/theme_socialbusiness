<?php
/**
 * Template Name: About Yunus 
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

          

            <div style="float:left;width:514px;">
            
            <h2 class="homepage">Professor Yunus</h2>
              <hr style="height:3px;background-color:#EFE8D5;color:#EFE8D5;border: none 0px;"/>
              
            <div style="float:left;width:235px;">
              <img src="<?php bloginfo('template_directory'); ?>/images/AboutYunus/aboutus-profyunus.jpg" alt="Portrait of Professor Yunus" style='border:solid 1px #E5DCBF;'/>
              </div>
            <div style="float:left;width:238px;margin-left:20px;">
              <?php the_content(); ?>


            </div>

            <div class="clear" style="height:25px;"></div>

              <h2  class="homepage" style="padding-top:20px;">Photos</h2>
              <hr style="height:3px;background-color:#EFE8D5;color:#EFE8D5;border: none 0px;"/>

              <div style="float:left;width:117px;">
                <img src="<?php bloginfo('template_directory'); ?>/images/AboutYunus/about-yunus1.jpg" alt="Media" style='border:solid 1px #E5DCBF;'/>

                </div>
              <div style="float:left;width:81px;margin-left:13px;">
                <img src="<?php bloginfo('template_directory'); ?>/images/AboutYunus/about-yunus2.jpg" alt="Media" style='border:solid 1px #E5DCBF;'/>
                </div>

              <div style="float:left;width:140px;margin-left:13px;">
                <img src="<?php bloginfo('template_directory'); ?>/images/AboutYunus/about-yunus3.jpg" alt="Media" style='border:solid 1px #E5DCBF;'/>
                </div>

              <div style="float:left;width:137px;margin-left:13px;">
                <img src="<?php bloginfo('template_directory'); ?>/images/AboutYunus/about-yunus4.jpg" alt="Media" style='border:solid 1px #E5DCBF;'/>
                </div>


              <div class="clear"></div>
              <div style="display:none;">
                <?php the_content(); ?>
              </div>
              
              
            </div>
            <div style="float:left;width:188px;margin-left:24px;min-height:300px">
              <h2 class="homepage">Latest Blog Posts</h2>
              <hr style="height:3px;background-color:#EFE8D5;color:#EFE8D5;border: none 0px;"/>
              
              <div style="border:1px solid #E4DBBE;background-color:#F1EBDB;padding:10px;">


                <?php
                
function new_excerpt_length($length) {
	return 10;
}
function new_excerpt_more($more) {
       global $post;
	return '...<br/><a href="'. get_permalink($post->ID) . '">' . 'View' . '</a> &raquo;';
}
add_filter('excerpt_length', 'new_excerpt_length');
add_filter('excerpt_more', 'new_excerpt_more');


 global $post;
 $myposts = get_posts('numberposts=4');
 foreach($myposts as $post) :
   setup_postdata($post);
 ?>

                <h4  class="homepage">
                  <?php the_title(); ?>
                </h4>
                <p>
                  <?php the_excerpt(); ?>
                </p>
                <hr style="height:1px;background-color:#E9E1CA;color:#E9E1CA;border: none 0px;"/>
                               
                <?php endforeach; ?>

              </div>
            </div>
            <div class="clear"></div>

            <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>

            
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

<?php endwhile; ?>

			</div><!-- #content -->
		</div><!-- #container -->



<?php get_footer(); ?>
