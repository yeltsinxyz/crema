<?php get_header(); ?>


<section class="bg-purple-800 bg-hero-topography w-full">

<div class="container mx-auto py-24 px-4">

    <h2 class="text-4xl text-white leading-tight mb-2 font-extrabold text-center">Nossos clientes</h2>
    <p class="text-lg text-gray-200 text-center">Confira nossos clientes. Que tal se tornar um <a href="https://yeltsin.xyz/contato" class="underline">novo cliente</a>? Estamos prontos para lhe atender.</p>

</div>

</section>


<section id="articles" class="w-full bg-white">

    <section class="container mx-auto py-24 px-4">

        <?php echo do_shortcode('[ajax_load_more id="5953020712" loading_style="white" container_type="div" css_classes="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-12" post_type="clientes" posts_per_page="6" transition_container="false" button_label="Carregar mais" button_loading_label="Carregando artigos..." button_done_label="Nenhum outro post encontrado..." no_results_text="Nenhum artigo encontrado."]'); ?>

    </section>

</section>   

<?php get_footer(); ?>