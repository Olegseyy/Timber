<?php wp_head(); ?>
<main id="primary" class="site-main">
	<?php 
		$cats = get_the_category_list( ', ' );
		echo '<p>Категория: '. $cats .'</p>';
	?>
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
			<a href= <?php home_url(); ?> ><button class="list_btn">Вернуться к списку домов</button></a>	
		</div> 
	</div>
</main>
<?php wp_footer(); ?>

