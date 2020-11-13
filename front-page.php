<?php get_header(); ?>

    <?php include_once ( 'lib/php/hero.php' ); ?>
    <?php include_once ( 'lib/php/features.php' ); ?>

    <section class="container mx-auto py-24 px-4">

        <h2 class="text-3xl text-gray-900 leading-tight mb-2 font-extrabold">Nossos Artigos</h2>

        <p class="text-lg text-gray-600 mb-20">Artigos selecionados especialmente para você.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-12">

            <?php
            $args = array(
                'post_type'              => array( 'post' ),
                'post_status'            => array( 'publish' ),
                'nopaging'               => true,
                'ignore_sticky_posts'    => true,
                'posts_per_page'         => '6',
                'order'                  => 'DESC',
                'cache_results'          => false,
                'update_post_meta_cache' => false,
                'update_post_term_cache' => false,
            );
            $postsHome = new WP_Query( $args );
            ?>

            <?php 

            if ( $postsHome->have_posts() ) {
                while ( $postsHome->have_posts() ) {
                    $postsHome->the_post();

            ?>
            
            <div>
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('blog-home', ['class' => 'object-cover bg-center h-56 w-full rounded mb-5']); ?>
            </a>
            <h2 class="text-gray-900 text-lg font-semibold mb-2">
                <a href="<?php the_permalink(); ?>" class="text-gray-900 hover:text-purple-700"><?php the_title(); ?></a>
            </h2>
            <p class="text-sm text-gray-600 font-normal mb-3">
                <?php the_excerpt(); ?>
            </p>
            <p class="text-sm text-gray-600 font-normal mt-6 mb-3"><a href="<?php the_author_link(); ?>" class="text-gray-900 hover:text-purple-700 font-medium"><?php the_author(); ?></a> • <?php the_date(); ?></p>
            </div>
            <?php 
            } } else {
            ?>
            <div>
            Bummer. Não tem nenhum post ainda! :(
            </div>
            <?php 
            }
            wp_reset_postdata(); 
            ?>
        </div>
        <div class="flex items-center justify-center space-x-0 md:space-x-2 space-y-2 md:space-y-0 mt-20 flex-col md:flex-row">
            <a href="https://yeltsin.xyz/artigos/" class="btn btn-light btn-xl rounded-full w-full md:w-auto">Confira todos os artigos publicados</a>
        </div>
        </section>

<?php get_footer(); ?>