<?php wp_head(); ?>
<main>	
	<?php get_sidebar(); ?>   
	<div class="blog">
		<div class="container">
			<?php if ( have_posts() ) :
				while ( have_posts() ) : 
					the_post(); ?>
					<a class="the_permalink" href="<?php the_permalink(); ?>">
						<div class="blogg__items">
							<div class="blog__title" >
								<?php the_title(); ?>	
							</div>
							<?php the_post_thumbnail('thumbnail');?>
							<div class="blog__text">
								<?php the_content(); ?>
							</div>
						</div> 
					</a>
				<?php endwhile; ?>
			<?php endif; ?>
			<div class="list__house_btn">
				<a class="blog__btn" href="http://localhost/">На главную</a>
			</div>
		</div>
	</div>
</main>		
<?php wp_footer(); ?>



