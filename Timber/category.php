<?php wp_head(); ?>
<main id="primary" class="site-main">
	<?php get_sidebar(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="container">	
			<div class="blog__items">
				<div class="blog__title" > 
					<?php the_title(); ?> 
				</div>
				<?php the_post_thumbnail('medium_large');?>
				<div class="blog__text">
					<?php the_content(); ?>
				</div>			
				
				<div class="aythor_date">
					<div class="author">
						<?php the_author(); ?>
					</div>
					<div class="date">
						<?php the_time('F jS, Y') ?>
					</div>
				</div>
				<?php 
					$category = get_the_category_list( ', ' );
					echo '<p>Категория: '. $category .'</p>';
				 ?>
			</div> 
		</div>
	<?php endwhile; 
		else: ?>
		<?php do_action('my_action') ?>
	<?php endif; ?>
	<a href="/localhost/home/" ><button class="list_btn">Вернуться к списку домов</button></a>
</main>
<?php wp_footer(); ?>