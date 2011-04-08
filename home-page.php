<?php
/**
 * Template Name: Home Page (use on first page)
 *
 * The page template used for the first page.
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

            <div class="homeleftarea leftfloat">
              <div class="hometabpage" id="tabpage4">
                <img src="<?php bloginfo('template_directory'); ?>/images/Page1/Page1FlowImage_4.jpg" alt=""/>
                <div class="textcontainer">
                  <h4>President Rush</h4>
                  <p>1st Global Grameen Meeting in Wolfsberg.</p>
                </div>
              </div>

              <div class="hometabpage" id="tabpage3">
                <img src="<?php bloginfo('template_directory'); ?>/images/Page1/Page1FlowImage_3.jpg" alt=""/>
                  <div class="textcontainer">
                    <h4>Steven M. Hilton</h4>
                    <p>Accepting the Yunus Social Innovation Medal</p>
                  </div>
              </div>
              <div class="hometabpage" id="tabpage2">
                <img src="<?php bloginfo('template_directory'); ?>/images/Page1/Page1FlowImage_2.jpg" alt=""/>
                <div class="textcontainer">
                  <h4>Professor Yunus</h4>
                  <p>First visit to the campus. </p>
                </div>
              </div>
              <div class="hometabpage" id="tabpage1" style="display:block;">
                <img src="<?php bloginfo('template_directory'); ?>/images/Page1/Page1FlowImage_1.jpg" alt=""/>
                <div class="textcontainer">
                  <h4>Professor Yunus</h4>
                  <p>Peace Nobel Price Winner</p>
                </div>
              </div>

              <div class="hometabpagecommandarea" style='width:110px;'>
                <a>4</a>
                <a>3</a>
                <a>2</a>
                <a>1</a>
              </div>
            </div>
            <div class="homerightarea leftfloat">
              <div class='videored'>
                <h3>Latest Video</h3>
                <div class='videoborder'>
                  <object width="321" height="266">
                    <param name="movie" value="http://www.youtube.com/v/nuW5bH0BnM8&amp;hl=en_US&amp;fs=1" />
                    <param name="allowFullScreen" value="true" />
                    <param name="allowscriptaccess" value="always" />
                    <param name="wmode" value="opaque" />
                    <embed src="http://www.youtube.com/v/nuW5bH0BnM8&amp;hl=en_US&amp;fs=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="321" height="266" wmode="opaque"></embed>
                  </object>
                </div>
              </div>

            </div>

            <div class="clear" style="height:25px;"></div>

            <div style="float:left;width:514px;">
            
            <h2 class="homepage">Welcome to the California Institute for Social Business</h2>
              <hr style="height:3px;background-color:#EFE8D5;color:#EFE8D5;border: none 0px;"/>
              
            <div style="float:left;width:255px;">
              <img src="<?php bloginfo('template_directory'); ?>/images/Page1/HomeImageMain.jpg" alt="Woman" style='border:solid 1px #E5DCBF;'/>
              </div>
            <div style="float:left;width:238px;margin-left:20px;">
              <p>The California Institute for Social Business (CISB) in collaboration with Professor Muhammad Yunus was established as part of the California State University Channel Islands’ commitment to prepare students for the world they will inherit upon graduation. 
              <br/><br/><a href="/csib/about-us">Read more</a> &raquo;
              </p>
            </div>

            <div class="clear" style="height:25px;"></div>

              <h2  class="homepage" style="padding-top:20px;"> Media</h2>
              <hr style="height:3px;background-color:#EFE8D5;color:#EFE8D5;border: none 0px;"/>

              <div style="float:left;width:120px">
                <img src="<?php bloginfo('template_directory'); ?>/images/Page1/Media1.jpg" alt="Media" style='border:solid 1px #E5DCBF;'/>

              </div>
              <div style="float:left;width:120px;margin-bottom:60px;"">
                <h4 class="homepage">More Videos</h4>
                <p>Check out our video page.<a href="/media/videos/">View</a> &raquo;
                </p>
              </div>

              <div style="float:left;width:120px">
                <img src="<?php bloginfo('template_directory'); ?>/images/Page1/Media2.jpg" alt="Media" style='border:solid 1px #E5DCBF;'/>
              </div>
              <div style="float:left;width:120px;margin-bottom:60px;">
                <h4 class="homepage">Photos</h4>
                <p>Our institute and Prof Yunus.<a href="/media/photos/">View</a> &raquo;
                </p>
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
 $myposts = get_posts('numberposts=2');
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
