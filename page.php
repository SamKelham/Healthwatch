<?php get_header(); ?>

    <article class="content">
		<?php while (have_posts()) : the_post(); ?>
        <section class="thepage">
            <div class="thepage-title">
                <h1><?php the_title(); ?></h1>
            </div>
            
            <div class="page-entry">
                <?php the_content('Read the rest of this entry &raquo;'); ?>
            </div>
        </section>
        <?php endwhile; ?>
    </article>

<?php get_sidebar(); ?>
<?php get_footer(); ?>