<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article class="">

    <header class="text-center w-full bg-purple-900 bg-hero-topography py-40">
    
        <h2 class="text-5xl text-white font-bold"><?php the_title(); ?></h2>

    </header>

    <section class="container mx-auto py-20 prose lg:prose-xl">

        <?php the_content(); ?>

    </section>

</article>

<?php endwhile; else : ?>

<?php endif; ?>

<?php get_footer(); ?>