<?php wp_head(); ?>
<main id="primary" class="site-main">
	
	<div class="blog__items">
		<div class="container">	
			
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
					<?php the_date(); ?>
				</div>
			</div>
			<a href="<?php the_permalink (221); ?>" ><button class="list_btn">Вернуться к списку домов</button></a>
		</div> 
	</div>
</main>
<?php wp_footer(); ?>
