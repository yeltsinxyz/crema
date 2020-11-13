<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article class="">

    <header class="text-center w-full bg-gray-900 bg-hero-topography py-40">
    
        <h2 class="text-5xl font-black text-purple-200"><?php the_title(); ?></h2>
        <p class="text-xl py-4 text-purple-100 italic">Publicado em <?php the_date(); ?> em <?php the_category( ', ' ); ?></p>

    </header>

    <section class="container mx-auto py-20 prose lg:prose-xl">

        <?php the_content(); ?>

    </section>

</article>

<?php endwhile; else : ?>

<?php endif; ?>

<?php get_footer(); ?>