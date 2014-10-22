<?php

get_header(); ?>

	<article class="content" class="fourofour">

        <section class="thepage">
            <div class="thepage-title">
                <h1><?php _e( 'Page Not Found', 'twentyten' ); ?></h1>
            </div>
            <div class="page-entry">
                <p><?php _e( 'We&apos;re sorry, but we can&apos; find the page your looking for. Perhaps searching will help.', 'twentyten' ); ?></p>
                <?php get_search_form(); ?>
            </div>
        </section>

	</article>
<?php get_footer(); ?>