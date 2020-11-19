<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/favicon.png"/>

    <?php wp_head(); ?>

</head>

<body class="bg-gradient-to-b from-indigo-600 via-indigo-800 to-purple-900 p-5">

    <a href="#main-content" class="skip-link">Pular para o conteúdo principal</a>

    <nav class="bg-white py-6" role="banner">
    
        <div class="container mx-auto py-2 px-1 sm:px-6">
        
            <div class="flex flex-row items-center justify-between">
            
                <div>

                    <h1 class="sr-only">Yeltsin</h1>
                    <picture>
                    
                        <a href="https://yeltsin.xyz" title="Voltar para a página inicial">

                        <source type="image/webp" srcset="https://res.cloudinary.com/ddxnyuivo/image/upload/c_scale,h_100,q_auto:eco/v1605045629/yeltsin/logo-colors_yzmwqn.webp" width="222" height="100">
                        <source type="image/png" srcset="https://res.cloudinary.com/ddxnyuivo/image/upload/c_scale,h_100,q_auto:eco/v1605045629/yeltsin/logo-colors_yzmwqn.png" width="222" height="100">
                        <img src="https://res.cloudinary.com/ddxnyuivo/image/upload/c_scale,h_100,q_auto:eco/v1605045629/yeltsin/logo-colors_yzmwqn.png" alt="Logo da Yeltsin, colorido" width="222" height="100">

                        </a>

                    </picture>

                </div>

                <div class="place-items-end">

                    <button onclick="openNav()" class="transform hover:scale-125 transition-transform duration-150" data-message="Abrir menu" aria-label="Abrir Menu">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:rotate(180deg);-ms-filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=2)"><path d="M4 6H20V8H4zM4 11H20V13H4zM4 16H20V18H4z"></path></svg>
                    </button>
                
                </div>

            </div>

        </div>

    </nav>

    <div id="myNav" class="h-full w-0 fixed z-10 left-0 top-0 overflow-x-hidden transition-all duration-700 bg-black opacity-75">

        <a href="javascript:void(0)" class="closebtn absolute" onclick="closeNav()">
    
            <span class="sr-only">Clique para fechar o menu</span>

            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" style="fill:rgba(255, 255, 255, 1);transform:rotate(180deg);-ms-filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=2)"><path d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z"></path></svg>

        </a>

        <div class="overlay-content text-center mt-5 w-full relative" role="navigation">
            <ul>
                <li class="pb-4"><a href="https://yeltsin.xyz" class="block text-white hover:text-purple-400 transition-colors duration-300 text-5xl">Home</a></li>
                <li class="pb-4"><a href="https://yeltsin.xyz/sobre/" class="block text-white hover:text-purple-400 transition-colors duration-300 text-5xl">Sobre</a></li>
                <li class="pb-4"><a href="https://yeltsin.xyz/clientes/" class="block text-white hover:text-purple-400 transition-colors duration-300 text-5xl">Clientes</a></li>
                <li class="pb-4"><a href="https://yeltsin.xyz/servicos/" class="block text-white hover:text-purple-400 transition-colors duration-300 text-5xl">Serviços</a></li>
                <li class="pb-4"><a href="https://yeltsin.xyz/artigos/" class="block text-white hover:text-purple-400 transition-colors duration-300 text-5xl">Artigos</a></li>
                <li><a href="https://yeltsin.xyz/contato/" class="block text-white hover:text-purple-400 transition-colors duration-300 text-5xl">Contato</a></li>
            </ul>
        </div>

    </div>