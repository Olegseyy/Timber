<?php wp_head(); ?>
<main>	
	<?php get_sidebar(); ?>   
	<?php dynamic_sidebar('top_sidebar'); ?> 
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
							<div class="aythor_date">
								<div class="author">
									<?php the_author(); ?>
								</div>
								<div class="date">
									<?php the_time('d - m - Y') ?>
								</div>
							</div>
							<?php the_post_thumbnail('thumbnail');?>
							<div class="blog__text">
								<?php the_content(); ?>
							</div>
							<div class="dod">
								<div class="catrgories">
									<?php 
									$category = get_the_category_list( ', ' );
									echo '<p>Категория: '. $category .'</p>';
									?>
								</div>
								<div class="blog_tags">
									<?php the_tags('Tags:',' | ' ); ?>
								</div>
							</div> 
						</div>
					</a>
				<?php endwhile; ?>
			<?php endif; ?>
			<div class="list__house_btn">
				<a class="blog__btn" href="<?php echo esc_url( home_url( '/' ) ) ; ?>
">На главную</a>
			</div>
			<div class="lkjhgfd"></div>
		</div>
	</div>
</main>		
<?php wp_footer(); ?>



