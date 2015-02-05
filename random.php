<?php 

    $args = array(
            'post_type' => 'post',
            'posts_per_page' =>9,
            'orderby' => 'rand'
            );
            $the_query = new WP_Query($args);   

?><?php  if ( $the_query->have_posts() ) { ?>

    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

    <?php the_title() . "<br>"; ?>


    <?php endwhile; ?>

<?php
     } else { ?>
       <h2>Oh No!!</h2>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php    } 
    wp_reset_postdata();      /* Restore original Post Data */

?>