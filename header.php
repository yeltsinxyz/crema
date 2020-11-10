<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php wp_head() ?>

</head>
<body>

<a href="#main" class="sr-only">Pular para o conteúdo principal</a>


<nav class="bg-white shadow">
    <div class="container mx-auto px-6 py-3 md:flex">
        <div class="flex justify-between items-center">
            <div>
                <a href="#" class="text-gray-800 text-xl font-bold hover:text-gray-700 md:text-2xl">Brand</a>
            </div>
            
            <!-- Mobile menu button -->
            <div class="flex md:hidden">
                <button type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600" aria-label="toggle menu">
                    <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                        <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div class="w-full hidden md:flex md:items-center md:justify-between">
            <div class="flex flex-col -mx-4 px-2 py-3 md:flex-row md:mx-0 md:py-0">
                <a href="#" class="py-1 px-2 text-gray-800 rounded text-sm hover:bg-gray-900 hover:text-gray-100 hover:font-medium md:mx-2">Home</a>
                <a href="#" class="py-1 px-2 text-gray-800 rounded text-sm hover:bg-gray-900 hover:text-gray-100 hover:font-medium md:mx-2">About</a>
                <a href="#" class="py-1 px-2 text-gray-800 rounded text-sm hover:bg-gray-900 hover:text-gray-100 hover:font-medium md:mx-2">Contact</a>
            </div>
            
            <div>
                <input type="text" class="w-full px-4 py-3 leading-tight text-sm text-gray-100 bg-gray-800 rounded placeholder-gray-200 focus:outline-none focus:bg-gray-700" placeholder="Search" aria-label="Search">
            </div>
        </div>
    </div>
</nav>