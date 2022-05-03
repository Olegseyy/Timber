
<?php wp_head(); ?>
<main>
	<div class="blog">
		<div class="container">
			<div class="category">
				<?php 
					if(have_posts()) {
						while(have_posts()) {
							the_post();
						?>
							<?php the_category(); ?>			
						<?php }
					}
				 ?>
			</div>
			<?php
				if(have_posts()) {
					while(have_posts()) {
						the_post();
					?>
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
					<?php }
				}
			?>					
			<div class="list__house_btn">
				<a class="blog__btn" href="">На главную</a>
			</div>
		</div>		
	</div>
</main>		

<?php wp_footer(); ?>




