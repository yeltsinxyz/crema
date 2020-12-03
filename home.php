<?php get_header(); ?>


<section class="bg-purple-800 bg-hero-topography w-full">

<div class="container mx-auto py-24 px-4">

    <h2 class="text-3xl text-white leading-tight mb-2 font-extrabold text-center">Nossos artigos</h2>
    <p class="text-lg text-gray-200 text-center">Confira nossas postagens mais recentes. Conteúdo exclusivo, para todos os públicos.</p>

</div>

</section>


<section id="articles" class="w-full bg-white">

    <section class="container mx-auto py-24 px-4">

        <?php echo do_shortcode('[ajax_load_more id="9188068007" loading_style="light-grey" container_type="div" css_classes="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-12" post_type="post" transition_container="false" sticky_posts="true" posts_per_page="6" images_loaded="true" button_label="Carregar mais" button_loading_label="Carregando artigos..." button_done_label="Nenhum outro post encontrado..." no_results_text="Nenhum artigo encontrado."]'); ?>

    </section>

</section>   

<?php get_footer(); ?>