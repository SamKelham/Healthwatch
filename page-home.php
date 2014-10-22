<?php /* Template Name: Home Page Template */ get_header(); ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
    <div class="featured-banner" style="background: url('<?php echo $image[0]; ?>') no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
        <div class="container">
            <h1>Volunteer and be a voice<br /> for improving community<br /> health services</h1>
        </div>
    </div>

    <div class="wrapper">
        <div class="container">

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
        </div>
    </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>