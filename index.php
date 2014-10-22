<?php get_header(); ?>
	<article class="content">
    
        <div class="thepage-title">
            <h1>Blog</h1>
        </div>
            
		<?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            
            <section id="thepost">
            
                <div class="thepost-title">
                    <h2>
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                    </h2>
                </div>
                
                <div class="thepost-meta">Posted on 
                    <span class="thepost-day"><?php the_time('jS') ?></span> 
                    <span class="thepost-month"><?php the_time('F') ?></span> 
                    <span class="thepost-year"><?php the_time('Y') ?></span>
                </div>  
                  
                <div class="thepost-entry">
                    <?php the_excerpt(); ?>
                    <a class="thepost-more" href="<?php the_permalink() ?>">Read full story &raquo;</a>
                </div>
                
            </section>
            <?php endwhile; ?>
            
            <div class="thepost-navigation"> 
                <span class="next-entries"><?php previous_posts_link('&laquo; Previous Page') ?></span> 
                <span class="previous-entries"><?php next_posts_link('Next Page &raquo;') ?></span>
            </div>
    
        <?php else : ?>
            <h2>Not Found</h2>
            <p>Sorry, but you are looking for something that isn't here.</p>
        <?php endif; ?>
        
	</article>

<?php get_sidebar(); ?>
<?php get_footer(); ?>