<?php get_header(); ?>

    <article id="main-content" role="main">

        <header class="bg-purple-800 bg-hero-topography w-full py-24 px-6">

            <div class="container mx-auto text-center">
        
                <h2 class="text-5xl text-center font-semibold py-2 text-white"><?php the_title(); ?></h2>
                <p class="text-white text-2xl"><?php get_breadcrumb(); ?></p>
            
            </div>

        </header>

        <section class="bg-white w-full py-12 px-6">

            <div class="container mx-auto prose prose-lg xl:prose-xl">

                <?php the_content(); ?>

            </div>

        </section>

    </article>

<?php get_footer(); ?>