<?php get_header(); ?>
<main>
    <?php if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>

        <article class="post">
            <div class="title">
                <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                <p class="date"> - <?php echo get_the_date(); ?></p>
            </div>
            <?php the_excerpt(); ?>
        </article>

        <?php endwhile;
    
    else :
        echo '<p>There are no posts!</p>';

    endif; ?>
    <nav class="pagination">
    <?php echo paginate_links( array(
        'type' => 'list',
        'mid_size' => '2',
        'prev_text' => '<',
        'next_text' => '>'
        )); ?>
    </nav>
</main>
<?php get_footer(); ?>