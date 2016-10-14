<?php /* Template Name: Legal */ ?>

<?php get_header('legal'); ?>

<main role="main" id="two-column-content">

	<section class="content-full">
		<div class="pure-g row">
			<div class="pure-u-1">

			<h1>TEST</h1>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php the_content(); ?>
			</article>
			<?php endwhile; else: 
			echo '<p>Sorry, no posts matched your criteria.</p>';
			endif; ?>
			</div>
			
		</div>
	</section>	
</main>	

<?php get_footer(); ?>