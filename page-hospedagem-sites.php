<?php get_header(); ?>

    <article id="main-content" role="main">

        <header class="bg-purple-800 bg-hero-topography w-full py-24 px-6">

            <div class="container mx-auto text-center">
        
                <h2 class="text-5xl text-center font-semibold py-2 text-white"><?php the_title(); ?></h2>
                <p class="text-white text-2xl"><?php get_breadcrumb(); ?></p>
            
            </div>

        </header>

        <section class="bg-white w-full py-12 px-6">

            <div class="container mx-auto">

                <p class="text-xl leading-9 pb-6">Realizamos a hospedagem de sites, através da nossa parceira de infraestrutura <strong>Umbler</strong>. Todos os nossos sites são armazenados em infraestrutura brasileira, permitindo maior carregamento do site. Além disso, não trabalhamos com <strong>revenda de hospedagem</strong>, pelo menos não no aspecto de utilizar um plano de revenda, que no geral torna o carregamento de um site bastante lento. Todos os nossos planos são relativos ao armazenamento do seu site na Umbler + taxa de serviço pelo gerenciamento do servidor.</p>

                <p class="text-xl leading-9 pb-6">Entendemos que muitos clientes querem ter o controle total dos seus planos. Por isso, você pode adquirir um plano diretamente pela <a href="https://www.umbler.com/br/seja-bem-vindo?a=rj05q66e" class="underline" title="Umbler - Planos de Hospedagem">Umbler</a> e, caso tenha interesse, compartilhar o acesso com a nossa empresa, permitindo que possamos gerenciar seu servidor. Assim, você paga a hospedagem diretamente com a Umbler e paga o serviço de gerenciamento para a nossa empresa.</p>

                <p class="text-xl leading-9 pb-6"><strong>Nós recomendamos a contratação diretamente conosco</strong>. Assim, você só precisa pagar uma fatura por mês, ao invés de pagar duas faturas diferentes, em dias diferentes.</p>

                <p class="text-xl leading-9 pb-8">Para melhor atender aos nossos clientes, não temos assinatura automática. Queremos primeiro entender as suas necessidades para poder recomendar o melhor plano. Por exemplo, se entendermos que o seu site é suficiente para o plano A320, mas você precisa de 2 contas de e-mail, não iremos lhe cobrar o preço do A350, mas sim o do A320 + uma conta de e-mail. Confira nossos <a href="https://yeltsin.xyz/termos-uso/" class="underline">termos de uso</a> para outros detalhes.</p>

                <section class="px-4 pt-24 pb-12">

                    <div class="w-full mx-auto text-left md:w-11/12 xl:w-9/12 md:text-center">

                        <h1 class="block pb-2 mb-5 text-4xl font-extrabold leading-none tracking-normal text-transparent md:text-6xl md:tracking-tight text-purple-500">
                        Preços simples e transparentes.
                        </h1>
                        <p class="px-0 mb-10 text-lg text-gray-500 md:text-xl lg:px-24">Preços para sites pequenos e médios.</p>

                    </div>

                    <div class="w-full mx-auto xl:w-4/5">

                        <div class="grid grid-cols-1 gap-16 lg:grid-cols-3 sm:gap-8">

                            <div class="border-0 rounded-none shadow-none card sm:rounded-lg md:border">

                                <div class="flex flex-col justify-between p-6 border-b border-gray-200">
                            
                                    <p class="mb-1 text-lg font-semibold text-yellow-600">A320</p>

                                    <p class="pb-0 my-2 font-mono text-4xl font-extrabold text-gray-900">R$55</p>
                                    <p class="text-sm text-gray-500">por mês</p>
                                    <a href="https://yeltsin.xyz/contato/" class="w-full mt-6 btn btn-warning btn-lg">Fale Conosco &rarr;</a>
        
                                </div>
            
                                <ul class="flex flex-col flex-grow p-6 space-y-3">
                
                                    <li class="flex items-start">
                                        
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-yellow-600">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>

                                        <span class="text-gray-800 border-b-2 border-gray-500 border-dotted cursor-pointer" x-data="tooltip()" x-spread="tooltip" x-position="top" title="Espaço em disco usado para armazenar os dados do seu site.">1 GB de espaço em disco</span>

                                    </li>

                                    <li class="flex items-start">
                                        
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-yellow-600">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>

                                        <span class="text-gray-800 border-b-2 border-gray-500 border-dotted cursor-pointer" x-data="tooltip()" x-spread="tooltip" x-position="top" title="Quantidade de núcleos destinados ao seu site.">2 Cores</span>

                                    </li>

                                    <li class="flex items-start">
                                        
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-yellow-600">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>

                                        <span class="text-gray-800 border-b-2 border-gray-500 border-dotted cursor-pointer" x-data="tooltip()" x-spread="tooltip" x-position="top" title="Quantidade de memória RAM destinada ao seu site.">512 MB RAM</span>

                                    </li>

                                    <li class="flex items-start">
                                        
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-yellow-600">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>

                                        <span class="text-gray-800 border-b-2 border-gray-500 border-dotted cursor-pointer" x-data="tooltip()" x-spread="tooltip" x-position="top" title="Quantidade de banda destinada ao seu site. Exemplo: um visitante 'carrega' um arquivo de 1 MB toda vez que o seu site carrega. 256GB equivale a 256.000 MB ou 256 mil visitas por mês.">256 GB Tráfego</span>

                                    </li>

                                    <li class="flex items-start">

                                        <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-yellow-600">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-gray-700">1 site/domínio</span>

                                    </li>

                                    <li class="flex items-start">

                                        <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-yellow-600">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-gray-700">1 conta de e-mail com 5 GB</span>

                                    </li>

                                </ul>

                            </div>

                            <div class="border-0 rounded-none shadow-none card sm:rounded-lg md:border">

                                <div class="flex flex-col justify-between p-6 border-b border-gray-200">
                            
                                    <div>
                                    
                                        <div class="flex items-center justify-between">
                                            
                                            <p class="mb-1 text-lg font-semibold text-purple-700">A350</p>
                                            <span class="badge bg-primary-light text-primary">Custo/Benefício</span>
                                
                                    </div>
                                
                                    <p class="my-2 font-mono text-4xl font-extrabold text-gray-900">R$85</p>
                                    <p class="text-sm text-gray-500">por mês</p>
                            
                                </div>
    
                                <a href="https://yeltsin.xyz/contato/" class="w-full mt-6 btn btn-primary btn-lg">Fale Conosco &rarr;</a>
    
                            </div>

                            <ul class="flex flex-col flex-grow p-6 space-y-3">
                                
                                <li class="flex items-start">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-purple-700">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    10 GB de espaço em disco
                                </li>
            
                                <li class="flex items-start">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-purple-700">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    2 Cores
                                </li>

                                <li class="flex items-start">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-purple-700">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    1.024 MB RAM
                                </li>

                                <li class="flex items-start">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-purple-700">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    512 GB Tráfego
                                </li>

                                <li class="flex items-start">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-purple-700">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    1 site/domínio
                                </li>

                                <li class="flex items-start">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-purple-700">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    2 contas de e-mails com 5 GB/cada
                                </li>
                        
                            </ul>

                        </div>

                        <div class="border-0 rounded-none shadow-none card sm:rounded-lg md:border">

                            <div class="flex flex-col justify-between p-6 border-b border-gray-200">
                                
                                <div>
                                    <p class="mb-1 text-lg font-semibold text-pink-600">A380</p>
                                    <p class="my-2 text-4xl font-bold text-gray-900">R$220</p>
                                    <p class="text-sm text-gray-500">por mês</p>
                                </div>
                            
                                <a href="https://yeltsin.xyz/contato/" class="w-full mt-6 btn bg-pink-600 hover:bg-pink-900 text-white btn-lg">Fale Conosco &rarr;</a>
                            
                            </div>
                            
                                <ul class="flex flex-col flex-grow p-6 space-y-3">
                            
                                    <li class="flex items-start">
                             
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-pink-700">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>

                                        40 GB de espaço em disco
                    
                                    </li>

                                    <li class="flex items-start">
                             
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-pink-700">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>

                                        4 Cores
                    
                                    </li>

                                    <li class="flex items-start">
                             
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-pink-700">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>

                                        4.096 MB de RAM
                    
                                    </li>

                                    <li class="flex items-start">
                             
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-pink-700">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>

                                        2.048 GB de Tráfego
                    
                                    </li>

                                    <li class="flex items-start">
                             
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-pink-700">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>

                                        1 site/domínio
                    
                                    </li>

                                    <li class="flex items-start">
                             
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-pink-700">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>

                                        5 contas de e-mail com 5 GB cada
                    
                                    </li>
                    
                                </ul>

                            </div>

                        </div>

                    </div>

                </section>

            </div>

        </section>

    </article>

<?php get_footer(); ?>