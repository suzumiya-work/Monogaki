<?php

get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>

    <article class="post">
        <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
        <p><?php the_time("Y年n月j日"); ?></p>
        <?php the_excerpt(); ?>
    </article>

    <?php endwhile;

else :
    echo '<p>There are no posts!</p>';

endif;

get_footer();

?>