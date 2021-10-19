 <?php		
global $post;

$query = new WP_Query( [
	'posts_per_page' => 3,
	'post_type'      => 'price',
  'order'          => 'ASC'
] );

if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
		?>
    <div class="col-lg-4 col-sm-6">
            <div class="pricing-block">
              <div class="price-header">
                <i class="icofont-<?php if(!empty(get_post_meta($post->ID, 'price-icon', true))) {
                  echo get_post_meta($post->ID, 'price-icon', true);
                } else {
                  echo 'alarm';
                } ?>"></i>

                <h4 class="price"><?php the_title(); ?><small>₽</small></h4>
                <h5><?php the_excerpt(); ?></h5>
              </div>
              <div class="line"></div>
              <?php the_content(); ?>

              <a href="#" class="btn btn-hero btn-circled">выбрать тариф</a>
            </div>
          </div>
		<!-- Вывода постов, функции цикла: the_title() и т.д. -->
		<?php 
	}
} else {
	// Постов не найдено
}

wp_reset_postdata(); // Сбрасываем $post
?>