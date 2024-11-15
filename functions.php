<?php
//md mirajul islam
?>

<ul class="products">
<?php
$args = array(
    'post_type'   => 'product',
    'post_status' => 'publish',
    'posts_per_page' => -1,  // -1 will get all the product. Specify positive integer value to get the number given number of product
    );
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) : $the_query->the_post();

        // Get default product template
        wc_get_template_part( 'content', 'product' );

    endwhile;
} else {
    echo __( 'No products found' );
}
wp_reset_postdata();
?>
</ul>
