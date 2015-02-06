<?php
/**
 * Template Name: Blogfeed-carousel
 * The custom page template file
 */
?>

<div class="container-fluid text-center blog-header hidden-xs speech-bubble-yellow" style="min-height:0px;">

    <h2>Uudised</h2>
    
</div>

<div class="container-fluid hidden-xs" style="margin:-15px 0;">
    <div class="row">

    <div id="postCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
            <?php
            $args = array( 'posts_per_page' => 5 );
            $the_query = new WP_Query( $args );
            if ( $the_query->have_posts() ) :
            $i = 0;
            while ( $the_query->have_posts() ) : $the_query->the_post();
            $i++;
            if ( $i == 1 ) {
                echo '<div class="item active">';
            }
                        echo '<div class="col-sm-4">';
            echo '<div class="speech-bubble-blue">';
                // the_post_thumbnail('medium');
            $content = get_the_content();

            echo '<h2><a href="'.get_the_permalink().'" rel="bookmark">'.get_the_title().'</a></h2>';

            echo '<p>'.wp_trim_words($content, 20).'</p>';
            echo '</div>';
            echo '</div>';
            
            if ( $i % 3 == 0 && $i != 10 ) { echo '</div><div class="item">'; }
            endwhile;
                        echo '</div>';
            wp_reset_postdata();
            endif;
            ?>
      </div>
      <a class="left carousel-control" href="#postCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#postCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
    
    </div>
</div>