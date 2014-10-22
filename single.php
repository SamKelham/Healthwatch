<?php get_header(); ?>

	<article id="content">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

		<section class="the-page">
			<div class="the-page-title">
				<h1>
					<?php the_title(); ?>
                </h1>
			</div>
            
			<div class="entry">
                <p><span class="post-meta">Posted on <span class="post-day"><?php the_time('jS') ?></span> <span class="post-month"><?php the_time('F') ?></span> <span class="post-year"><?php the_time('Y') ?></span></span></p>
				<?php the_content('Read the rest of this entry &raquo;'); ?>
				<?php //comments_template(); ?>
			</div>
		</section>

		<?php endwhile; ?>
	<?php else : ?>

		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>

	<?php endif; ?>
	</article>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
