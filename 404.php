<?php get_header(); ?>

    <div class="container mx-auto grid grid-cols-1 items-center text-center">
    
        <h2 class="text-4xl md:text-6xl font-extrabold py-12">Página Não Encontrada</h2>

        <p class="py-3">Aparentemente a página que você está tentando acessar não existe. Não se preocupe, podemos lhe ajudar a achar o caminho certo.</p>
        <p class="py-3 pb-12">Você pode voltar para a <a href="https://yeltsin.xyz/" class="text-purple-700 hover:text-purple-800 underline">página inicial</a>, pode conferir nossas principais páginas no rodapé, pode usar o formulário abaixo para pesquisar as páginas do nosso site ou pode <a href="https://yeltsin.xyz/contato/" class="text-purple-700 hover:text-purple-800 underline">entrar em contato</a> conosco para outras dúvidas.</p>

        <form action="<?php echo home_url( '/' ); ?>" role="search" method="GET">
    
            <div class="grid grid-cols-1 pb-12">
  
                <div class="form-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    <input class="form-input" placeholder="Encontre a página que você estava esperando...">
                </div>

            </div>

        </form>

    </div>

<?php get_footer(); ?>