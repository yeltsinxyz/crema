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

                <p class="text-xl leading-9 pb-6">Possuímos duas opções de servidores dedicados em datacenters internacionais e uma opção em datacenter brasileiro. Infelizmente ainda não possuímos datacenter próprio, nem colocation, mas em breve iremos oferecer servidores próprios, diminuindo os custos tanto para você quanto para a nossa empresa.</p>

                <p class="text-xl leading-9 pb-6">Todos os nossos servidores são gerenciados, com instalação do software de sua preferência (consulte os termos de uso para maiores informações), atualização do sistema, monitoramento do uso bem como monitoramento do aplicativo.</p>

                <p class="text-xl leading-9 pb-6"><strong>Os dois servidores localizados nos Estados Unidos ficam no datacenter DataPort localizado em St. Louis no Missouri, o servidor localizado no Brasil está no datacenter MH1, localizado em São Paulo. Confira nossos <a href="https://yeltsin.xyz/termos-uso/" class="underline">termos de uso</a> para outros detalhes.</strong></p>

                <section class="px-4 pt-24 pb-12">

                    <div class="w-full mx-auto text-left md:w-11/12 xl:w-9/12 md:text-center">

                        <h1 class="block pb-2 mb-5 text-4xl font-extrabold leading-none tracking-normal text-transparent md:text-6xl md:tracking-tight text-purple-500">
                        Preços simples e transparentes.
                        </h1>
                        <p class="px-0 mb-10 text-lg text-gray-500 md:text-xl lg:px-24">Servidores para todos os tipos de aplicação.</p>

                    </div>

                    <div class="w-full mx-auto xl:w-4/5">

                        <div class="grid grid-cols-1 gap-16 lg:grid-cols-3 sm:gap-8">

                            <div class="border-0 rounded-none shadow-none card sm:rounded-lg md:border">

                                <div class="flex flex-col justify-between p-6 border-b border-gray-200">
                            
                                    <p class="mb-1 text-lg font-semibold text-yellow-600">Opteron (USA)</p>

                                    <p class="pb-0 my-2 font-mono text-4xl font-extrabold text-gray-900">R$730</p>
                                    <p class="text-sm text-gray-500">por mês</p>
                                    <a href="https://yeltsin.xyz/contato/" class="w-full mt-6 btn btn-warning btn-lg">Fale Conosco &rarr;</a>
        
                                </div>
            
                                <ul class="flex flex-col flex-grow p-6 space-y-3">
                
                                    <li class="flex items-start">
                                        
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-yellow-600">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>

                                        <span class="text-gray-800 border-b-2 border-gray-500 border-dotted cursor-pointer" x-data="tooltip()" x-spread="tooltip" x-position="top" title="O processador do seu servidor.">Octa-Core, 8 x 2.4 GHz</span>

                                    </li>

                                    <li class="flex items-start">
                                        
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-yellow-600">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>

                                        <span class="text-gray-800 border-b-2 border-gray-500 border-dotted cursor-pointer" x-data="tooltip()" x-spread="tooltip" x-position="top" title="Quantidade de memória destinada ao servidor.">32 GB DDR3</span>

                                    </li>

                                    <li class="flex items-start">
                                        
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-yellow-600">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>

                                        <span class="text-gray-800 border-b-2 border-gray-500 border-dotted cursor-pointer" x-data="tooltip()" x-spread="tooltip" x-position="top" title="Quantidade de espaço no seu servidor.">2 x 250 GB SSD</span>

                                    </li>

                                    <li class="flex items-start">
                                        
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-yellow-600">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>

                                        <span class="text-gray-800 border-b-2 border-gray-500 border-dotted cursor-pointer" x-data="tooltip()" x-spread="tooltip" x-position="top" title="É a banda destinada ao seu site, também chamado de tráfego.">100 Mbits/s</span>

                                    </li>

                                    <li class="flex items-start">

                                        <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-yellow-600">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-gray-700">1 IP, 3 no máximo</span>

                                    </li>

                                    <li class="flex items-start">

                                        <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-yellow-600">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-gray-700">Plesk Obsidian Web Admin</span>

                                    </li>

                                </ul>

                            </div>

                            <div class="border-0 rounded-none shadow-none card sm:rounded-lg md:border">

                                <div class="flex flex-col justify-between p-6 border-b border-gray-200">
                            
                                    <div>
                                    
                                        <div class="flex items-center justify-between">
                                            
                                            <p class="mb-1 text-lg font-semibold text-purple-700">Skylake (USA)</p>
                                            <span class="badge bg-primary-light text-primary">Custo/Benefício</span>
                                
                                    </div>
                                
                                    <p class="my-2 font-mono text-4xl font-extrabold text-gray-900">R$1.788</p>
                                    <p class="text-sm text-gray-500">por mês</p>
                            
                                </div>
    
                                <a href="https://yeltsin.xyz/contato/" class="w-full mt-6 btn btn-primary btn-lg">Fale Conosco &rarr;</a>
    
                            </div>

                            <ul class="flex flex-col flex-grow p-6 space-y-3">
                                
                                <li class="flex items-start">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-purple-700">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Quad-Core, 4 x 4.0 GHz
                                </li>
            
                                <li class="flex items-start">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-purple-700">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    32 GB DDR4
                                </li>

                                <li class="flex items-start">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-purple-700">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    2 x 500 GB SSD
                                </li>

                                <li class="flex items-start">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-purple-700">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    1 Gbits/s
                                </li>

                                <li class="flex items-start">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-purple-700">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    1 IP, 7 no máximo
                                </li>

                                <li class="flex items-start">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-purple-700">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Plesk Obsidian Web Admin
                                </li>
                        
                            </ul>

                        </div>

                        <div class="border-0 rounded-none shadow-none card sm:rounded-lg md:border">

                            <div class="flex flex-col justify-between p-6 border-b border-gray-200">
                                
                                <div>
                                    <p class="mb-1 text-lg font-semibold text-pink-600">Xeon (Brasil)</p>
                                    <p class="my-2 text-4xl font-bold text-gray-900">R$5.900</p>
                                    <p class="text-sm text-gray-500">por mês</p>
                                </div>
                            
                                <a href="https://yeltsin.xyz/contato/" class="w-full mt-6 btn bg-pink-600 hover:bg-pink-900 text-white btn-lg">Fale Conosco &rarr;</a>
                            
                            </div>
                            
                                <ul class="flex flex-col flex-grow p-6 space-y-3">
                            
                                    <li class="flex items-start">
                             
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-pink-700">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>

                                        2 x Deca-Core, 20 x 2.2 GHz
                    
                                    </li>

                                    <li class="flex items-start">
                             
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-pink-700">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>

                                        128 GB DDR4
                    
                                    </li>

                                    <li class="flex items-start">
                             
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-pink-700">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>

                                        2 x 1 TB SSD
                    
                                    </li>

                                    <li class="flex items-start">
                             
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-pink-700">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>

                                        20 TB de Tráfego
                    
                                    </li>

                                    <li class="flex items-start">
                             
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-pink-700">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>

                                        1 IP / Sem Limite
                    
                                    </li>

                                    <li class="flex items-start">
                             
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-pink-700">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>

                                        Plesk Obsidian Web Admin
                    
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