<!-- component -->
<!doctype html>
<html lang="en">

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/BoxUp/src/js/jquery.min.js"></script>
    <title>InkFy!</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
</head>
<style>
    ::-webkit-scrollbar {
        width: 0px;
    }
</style>

<body class="h-screen ">
    <nav class="relative px-4 py-4 flex justify-between items-center bg-[#14131e] !mb-0 ">
        <a class="text-3xl font-bold leading-none" href="#">
            <div class="flex w-[10] ml-[30px]">

            </div>
        </a>
        <div class="lg:hidden">
            <button class="navbar-burger flex items-center text-blue-600 p-3">
                <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu Mobile</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </button>
        </div>
        <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:items-center lg:w-auto lg:space-x-6">
            <li><a class="text-sm text-gray-400 hover:text-gray-500" href="/TatuagemApi/pages/home/home.php">Home</a></li>
            <li class="text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                </svg>
            </li>
            <li><a class="text-sm text-gray-400 hover:text-gray-500" href="/TatuagemApi/pages/suporte/index.php">Suporte</a></li>
            <li class="text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                </svg>
            </li>
            <li><a class="text-sm text-blue-600 font-bold" href="/TatuagemApi/pages/FAQ/index.php">FAQ</a></li>
        </ul>
        <a class="hidden lg:inline-block py-2 px-6 bg-blue-500 hover:bg-blue-600 text-sm text-white font-bold rounded-xl transition duration-200" href="/TatuagemApi/pages/Login/login.php">Sair</a>
    </nav>
    <main class="p-2 bg-gray-900 flex ">
        <div class="flex justify-start items-start ml-6 w-2/4 pl-10">
            <div class=" w-full my-1 pt-4">
                <h2 class="text-2xl font-semibold text-gray-100 mb-2">FAQ - Perguntas frequentes, termos, Etc.</h2>
                <h4 class="text-lg font-semibold text-gray-100 mb-2 opacity-80 mt-3">Bem-vindo ao nosso site de transporte de objetos. Antes de utilizar nossos serviços, pedimos que você leia atentamente e concorde com esta política. Ao utilizar nosso site, você está concordando com a política estabelecida.</h4>
                <ul class="flex flex-col">
                    <li class="bg-gray-800 text-gray-100 my-2 shadow-lg" x-data="accordion(1)">
                        <h2 @click="handleClick()" class=" flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                            <span>O que é o InkFy?</span>
                            <svg :class="handleRotate()" class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">
                                <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                            </svg>
                        </h2>
                        <div x-ref="tab" :style="handleToggle()" class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all">
                            <p class="p-3">
                                O InkFy é uma plataforma online que conecta entusiastas de tatuagens com tatuadores talentosos em sua região. Nós facilitamos a busca, a reserva de consultas e o contato com tatuadores profissionais.
                            </p>
                        </div>
                    </li>
                    <li class="bg-gray-800 text-gray-100 my-2 shadow-lg" x-data="accordion(2)">
                        <h2 @click="handleClick()" class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                            <span>Como funciona InkFy?</span>
                            <svg :class="handleRotate()" class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">
                                <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                            </svg>
                        </h2>
                        <div class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all" x-ref="tab" :style="handleToggle()">
                            <p class="p-3">
                                Nosso site oferece uma ampla lista de tatuadores locais, onde você pode navegar, ver seus trabalhos e marcar consultas. Basta encontrar um tatuador que você goste, agendar uma consulta e começar a planejar sua próxima tatuagem.
                            </p>
                        </div>
                    </li>
                    <li class="bg-gray-800 text-gray-100 my-2 shadow-lg" x-data="accordion(3)">
                        <h2 @click="handleClick()" class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                            <span>Quais são os benefícios de usar o Inkfy para encontrar tatuadores?</span>
                            <svg :class="handleRotate()" class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">
                                <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                            </svg>
                        </h2>
                        <div class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all" x-ref="tab" :style="handleToggle()">
                            <p class="p-3">
                                O Inkfy simplifica o processo de encontrar o tatuador perfeito para sua tatuagem. Você pode ver o trabalho dos tatuadores, ler avaliações de outros clientes e agendar consultas diretamente através do nosso site, tornando todo o processo conveniente e seguro.
                            </p>
                        </div>
                    </li>
                    <li class="bg-gray-800 text-gray-100 my-2 shadow-lg" x-data="accordion(4)">
                        <h2 @click="handleClick()" class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                            <span>O Inkfy é gratuito para os usuários?</span>
                            <svg :class="handleRotate()" class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">
                                <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                            </svg>
                        </h2>
                        <div class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all" x-ref="tab" :style="handleToggle()">
                            <p class="p-3 ">
                                Sim, o Inkfy é totalmente gratuito para os usuários. Você pode navegar por tatuadores, ver seus portfólios e marcar consultas sem nenhum custo.
                            </p>
                        </div>
                    </li>
                    <li class="bg-gray-800 text-gray-100 my-2 shadow-lg" x-data="accordion(5)">
                        <h2 @click="handleClick()" class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                            <span>Existem filtros de pesquisa disponíveis para refinar minha busca?</span>
                            <svg :class="handleRotate()" class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">
                                <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                            </svg>
                        </h2>
                        <div class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all" x-ref="tab" :style="handleToggle()">
                            <p class="p-3">
                                Sim, oferecemos filtros de pesquisa que permitem refinar sua busca com base em critérios como estilo de tatuagem, preço, classificação e muito mais. Isso ajuda a encontrar o tatuador que atenda às suas necessidades.
                            </p>
                        </div>
                    </li>
                    <li class="bg-gray-800 text-gray-100 my-2 shadow-lg" x-data="accordion(6)">
                        <h2 @click="handleClick()" class=" flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                            <span>Posso visualizar o portfólio de um tatuador antes de entrar em contato?</span>
                            <svg :class="handleRotate()" class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">
                                <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                            </svg>
                        </h2>
                        <div x-ref="tab" :style="handleToggle()" class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all">
                            <p class="p-3">
                                Como faço para entrar em contato com um tatuador que encontrei no site?
                            </p>
                        </div>
                    </li>
                    <li class="bg-gray-800 text-gray-100 my-2 shadow-lg" x-data="accordion(7)">
                        <h2 @click="handleClick()" class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                            <span>O Inkfy verifica a qualidade dos tatuadores listados?</span>
                            <svg :class="handleRotate()" class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">
                                <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                            </svg>
                        </h2>
                        <div class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all" x-ref="tab" :style="handleToggle()">
                            <p class="p-3">
                                Nosso site oferece uma ampla lista de tatuadores locais, onde você pode navegar, ver seus trabalhos e marcar consultas. Basta encontrar um tatuador que você goste, agendar uma consulta e começar a planejar sua próxima tatuagem.
                            </p>
                        </div>
                    </li>
                    <li class="bg-gray-800 text-gray-100 my-2 shadow-lg" x-data="accordion(8)">
                        <h2 @click="handleClick()" class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                            <span>Como agendo uma consulta com um tatuador?</span>
                            <svg :class="handleRotate()" class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">
                                <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                            </svg>
                        </h2>
                        <div class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all" x-ref="tab" :style="handleToggle()">
                            <p class="p-3">
                                O Inkfy simplifica o processo de encontrar o tatuador perfeito para sua tatuagem. Você pode ver o trabalho dos tatuadores, ler avaliações de outros clientes e agendar consultas diretamente através do nosso site, tornando todo o processo conveniente e seguro.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="text-white flex justify-center items-center">
            <div class="mt-8 ml-8 opacity-75">
                <svg class="w-[38rem] max-w-screen-sm mx-auto" xmlns="http://www.w3.org/2000/svg" id="ffb55883-6880-4c99-84fd-4a8eccb5f463" data-name="Layer 1" viewBox="0 0 887.5 444.00977">
                    <title>faq</title>
                    <rect x="458.1306" y="29.39525" width="395.03806" height="197.51903" fill="#e6e6e6" />
                    <path d="M568.96144,634.04282l9.35626-2.69673a122.56069,122.56069,0,0,0,4.24249-13.14691l-4.39393-.16027,4.79042-1.38071c1.3869-5.52747,1.95534-9.27568,1.95534-9.27568s-18.97583,5.65159-33.26621,16.68071l-1.763,12.37-1.68667-9.51114a49.58614,49.58614,0,0,0-4.39157,4.42083c-13.75738,15.817-19.74417,33.13225-13.37187,38.67479s22.69063-2.78652,36.448-18.60347a65.281,65.281,0,0,0,10.215-17.07477Z" transform="translate(-156.25 -227.99512)" fill="#e6e6e6" />
                    <path d="M214.48456,577.6872l-5.333-21.03429a273.13505,273.13505,0,0,0-28.97793-10.39639l-.67337,9.77549-2.73045-10.7696c-12.212-3.48717-20.51983-5.02321-20.51983-5.02321s11.222,42.67366,34.7592,75.29821l27.42605,4.81755-21.30654,3.072a110.50373,110.50373,0,0,0,9.53072,10.10012c34.24,31.78207,72.377,46.36387,85.18129,32.5693s-4.57281-50.7417-38.81285-82.52378c-10.61475-9.85276-23.94912-17.75951-37.29676-23.98229Z" transform="translate(-156.25 -227.99512)" fill="#e6e6e6" />
                    <path d="M265.20535,554.84444l6.30739-20.76292a273.13512,273.13512,0,0,0-19.4325-23.8785l-5.6294,8.02019,3.22943-10.63064c-8.6515-9.29757-14.96939-14.90682-14.96939-14.90682s-12.45158,42.33122-9.16631,82.42573l20.98772,18.30061-19.82728-8.3836a110.50259,110.50259,0,0,0,2.938,13.57259c12.88281,44.90561,37.9924,77.10132,56.08389,71.91112s22.31392-45.80088,9.43111-90.70649c-3.9938-13.92118-11.32161-27.58227-19.53122-39.80866Z" transform="translate(-156.25 -227.99512)" fill="#e6e6e6" />
                    <polygon points="194.275 413.765 196.478 423.676 211.894 422.574 210.793 411.563 194.275 413.765" fill="#ffb8b8" />
                    <polygon points="155.735 413.765 153.533 423.676 138.116 422.574 139.218 411.563 155.735 413.765" fill="#ffb8b8" />
                    <circle cx="151.33025" cy="71.30647" r="20.92191" fill="#ffb8b8" />
                    <polygon points="138.116 76.812 132.611 102.139 160.139 110.948 159.038 79.015 138.116 76.812" fill="#ffb8b8" />
                    <path d="M304.27679,333.43735l-13.85405-10.48912s-2.66325-3.82588-3.7644-.52242S275.6468,337.842,275.6468,337.842l7.70808,90.29458,58.36113,1.10115s-22.80488-105.25891-25.71743-101.63078S305.378,331.235,304.27679,333.43735Z" transform="translate(-156.25 -227.99512)" fill="#d0cde1" />
                    <path d="M315.8389,320.77408s-4.40461,4.40462-2.2023,7.70808.55057,9.42916,2.75288,9.94506-2.20231,37.95511,4.40461,47.86549,3.30346,35.23691,3.30346,39.64152,6.60692,30.8323,6.60692,30.8323,22.02307,2.2023,22.02307-3.30346-7.70807-44.04614-7.70807-44.04614l6.60692-68.27151s0-6.60692-7.70808-8.80923-23.12422-7.70807-23.12422-7.70807Z" transform="translate(-156.25 -227.99512)" fill="#2f2e41" />
                    <path d="M347.22178,400.6077H341.716s-28.63,2.20231-26.42768-9.91038,24.22537-3.30346,24.22537-3.30346l6.60692,3.30346Z" transform="translate(-156.25 -227.99512)" fill="#ffb8b8" />
                    <path d="M291.29793,318.92237s-9.04421,5.70575-10.14536,7.90806-26.42768,14.315-26.42768,23.12422,7.70807,18.71961,7.70807,18.71961l9.91038,96.90149s16.5173,5.50577,17.61846,1.10116,5.50577-101.30611,3.30346-105.71073-2.20231-33.0346-2.20231-33.0346Z" transform="translate(-156.25 -227.99512)" fill="#2f2e41" />
                    <path d="M262.433,478.7896l-1.10115,6.60692s1.10115,22.02306,9.91038,20.92191,3.30346-23.12422,3.30346-23.12422l-1.10115-4.40461Z" transform="translate(-156.25 -227.99512)" fill="#ffb8b8" />
                    <path d="M275.6468,422.63077s1.10116,99.10381,6.60692,131.03726,7.70808,86.99112,7.70808,86.99112,14.315,2.2023,16.5173,3.30346,7.70807-2.20231,7.70807-2.20231l1.10116-162.9707,20.92191,73.77727s3.30346,89.19343,9.91038,91.39574,26.42768-2.20231,26.42768-2.20231-7.70807-84.78881-9.91038-88.09227-7.70807-100.205-16.5173-117.82342l-3.30346-12.11268S280.05142,425.93423,275.6468,422.63077Z" transform="translate(-156.25 -227.99512)" fill="#2f2e41" />
                    <path d="M353.8287,647.26607s-5.50577-4.40462-5.50577-1.10116-5.50577,23.6748,1.10115,23.6748,50.65306,3.854,49.5519-4.95519-27.59858-22.87573-27.59858-22.87573-9.84063,3.055-10.94178,4.15612S353.8287,647.26607,353.8287,647.26607Z" transform="translate(-156.25 -227.99512)" fill="#2f2e41" />
                    <path d="M308.68141,647.26607s5.50576-4.40462,5.50576-1.10116,5.50577,23.6748-1.10115,23.6748-50.65306,3.854-49.5519-4.95519,27.59858-22.87573,27.59858-22.87573,9.84063,3.055,10.94179,4.15612S308.68141,647.26607,308.68141,647.26607Z" transform="translate(-156.25 -227.99512)" fill="#2f2e41" />
                    <path d="M343.91831,340.04427l7.70808,1.10115,15.41615,44.04614s4.40461,22.02306-2.20231,25.32652-19.07675,2.658-19.07675,2.658L343.91831,388.495l5.50577,1.10115-5.50577-11.01153Z" transform="translate(-156.25 -227.99512)" fill="#2f2e41" />
                    <path d="M260.23066,345.55l-5.50577,4.40462s-5.50577,56.15882-4.40461,61.66459,7.70807,72.67612,7.70807,72.67612l18.71961-4.40461L263.53412,346.65119Z" transform="translate(-156.25 -227.99512)" fill="#2f2e41" />
                    <path d="M284.43436,284.0949s-6.09134-7.72731,0-11.591v1.93183s13.05289-14.4887,20.88462-10.625l6.96153-1.93183v1.93183l4.351-1.93183-.87019,2.89774h6.09135l-2.61058,1.93183s20.01442-.96591,7.83173,13.52279c0,0,5.7908,8.68684.28482,13.51959,0,0-4.63578-10.62185-10.72713-7.72411a9.70029,9.70029,0,0,1-10.4423-.96592s-12.18269-.96591-10.44231,4.82957.87019,7.7273.87019,7.7273-4.351,2.89774-3.48076,4.82957.87019,7.72731.87019,7.72731-4.351-6.7614-6.09135-5.79548S276.60264,295.68586,284.43436,284.0949Z" transform="translate(-156.25 -227.99512)" fill="#2f2e41" />
                    <polygon points="366.909 125.259 320.608 126.409 314.376 71.2 366.909 71.2 366.909 125.259" fill="#2f2e41" />
                    <path d="M474.14767,424.824,457.247,542.00238s-14.6473,41.68845-15.774,61.96932l-4.50686,29.29459,20.28087,4.50686L478.65453,555.523l29.29459-74.36319L504.569,566.79011l-6.76029,69.85632,20.28087,3.38015,12.39386-89.01048L544.004,485.66663s10.14043-56.33574-5.63358-61.96932Z" transform="translate(-156.25 -227.99512)" fill="#2f2e41" />
                    <path d="M455.89071,626.0754l-2.255,27.4237s24.13474,13.953,16.39086,16.65768-18.34306-.77494-20.511-1.38964c-2.28947-.64916-6.56374-1.68443-9.798-2.45052a7.18577,7.18577,0,0,1-5.56211-6.47165l-.00613-.10088c-.195-3.37452,7.41845-32.69953,7.41845-32.69953Z" transform="translate(-156.25 -227.99512)" fill="#2f2e41" />
                    <path d="M514.49932,626.76125l1.90016,26.22255s27.483,10.21078,20.39862,14.34536-18.15314,2.74447-20.39862,2.55536c-4.14007-.34865-14.4434-.69647-14.4434-.69647s-1.90464,1.64917-2.74087-1.6259,1.1154-32.53174,1.1154-32.53174Z" transform="translate(-156.25 -227.99512)" fill="#2f2e41" />
                    <circle cx="341.55869" cy="80.77727" r="21.40758" fill="#ffb8b8" />
                    <polygon points="329.165 93.171 324.658 117.959 343.812 126.973 348.319 95.425 329.165 93.171" fill="#ffb8b8" />
                    <path d="M483.16139,438.3446l23.661,16.90073s10.14043,25.91444,18.02744,21.40758-9.01372-27.04116-9.01372-27.04116L496.682,430.4576Z" transform="translate(-156.25 -227.99512)" fill="#ffb8b8" />
                    <path d="M550.76429,430.4576l2.25343,13.52058s-5.63358,28.16787-12.39387,22.5343,2.25343-23.661,2.25343-23.661l-1.12671-11.26715Z" transform="translate(-156.25 -227.99512)" fill="#ffb8b8" />
                    <path d="M497.80869,348.20741l-2.25343-9.01372-13.52058-6.76029-4.50686,5.63357-14.6473,4.50686,16.90073,90.1372s57.46246,3.38014,58.58917-5.63357S527.10327,393.276,527.10327,393.276s3.38015-12.39387,2.25343-19.15416l-4.50685-27.04116-18.02744-5.63357-4.11722-4.981-3.76979,6.10768Z" transform="translate(-156.25 -227.99512)" fill="#d0cde1" />
                    <path d="M466.26067,344.82726l-3.38015-2.25343s-6.76029,1.12672-9.01372,10.14044,0,49.57546,5.63358,57.46246,21.40758,31.548,21.40758,31.548l21.40759-10.14044-22.5343-25.91444-5.63358-32.67473Z" transform="translate(-156.25 -227.99512)" fill="#d0cde1" />
                    <path d="M515.83613,349.33412l9.01372-2.25343s5.63357,2.25343,7.887,10.14044,14.64729,47.322,13.52058,50.70217,10.14043,25.91444,10.14043,25.91444l-15.774,1.12672-9.01372-23.661-9.01371-23.661Z" transform="translate(-156.25 -227.99512)" fill="#d0cde1" />
                    <path d="M460.70526,329.10222c4.51467-2.47918,6.61571-8.04376,6.76543-13.19219.14991-5.14842-1.09878-10.24369-1.1969-15.39337a11.89831,11.89831,0,0,1,.26706-3.139,12.0737,12.0737,0,0,1,1.72656-3.57385c5.871-8.99594,16.07638-15.324,26.82591-15.42354a11.91425,11.91425,0,0,1,4.53922.8345c1.11138.4451,1.47478.39062,1.68776,1.7552a11.35932,11.35932,0,0,1,7.79582.24789,26.37535,26.37535,0,0,1,6.81743,4.06012,30.74851,30.74851,0,0,1,3.44684,2.98431c5.68082,5.8851,6.989,14.95526,5.34326,22.96761-.535,2.60491,2.03216,5.11969,4.15627,6.71966s4.577,3.06917,5.62012,5.51537c1.00328,2.35308.45227,5.04423.65429,7.59432a12.98875,12.98875,0,0,0,8.28633,10.9132,3.99764,3.99764,0,0,1-3.85684,1.35637,9.49223,9.49223,0,0,1-4.019-1.91335,23.90592,23.90592,0,0,1-8.91221-13.22354c-.62394,2.83768-.382,5.76453-.359,8.66988a24.21712,24.21712,0,0,0,1.756,9.46973,13.86611,13.86611,0,0,0,6.38417,7.0296c-2.78639,1.36442-5.85713.3755-8.21836-1.63719a17.17514,17.17514,0,0,1-4.72933-7.87993,39.274,39.274,0,0,1-1.89246-14.9056,21.28284,21.28284,0,0,0-2.67076,14.51,22.18356,22.18356,0,0,0,7.52421,13.06028,43.219,43.219,0,0,1-19.78109-4.98172,11.196,11.196,0,0,1-4.05724-3.12461c-1.96347-2.72383-1.49895-6.43879-.94825-9.7511.43559-2.619-2.83727-6.40531-.963-8.28589a3.107,3.107,0,0,1,2.08315-.89535A18.43658,18.43658,0,0,0,514.823,321.194a21.31607,21.31607,0,0,0,3.54906-10.93016,19.88941,19.88941,0,1,0-38.88607,5.90222,39.91139,39.91139,0,0,1,1.4478,6.74031,52.9588,52.9588,0,0,0,1.61427,7.84106c1.418,4.93761,3.82032,9.97577,8.2654,12.5512a12.89972,12.89972,0,0,1-4.91486,1.04076c-5.57763.61458-11.44377.47888-16.49215-1.97081C464.35786,339.91887,460.34554,334.70206,460.70526,329.10222Z" transform="translate(-156.25 -227.99512)" fill="#2f2e41" />
                    <path d="M472.87622,307.24719c16.01859-6.42024,31.81044-7.78979,47.19079,0V294.3063a8.42853,8.42853,0,0,0-8.42852-8.42853H479.53485a6.65863,6.65863,0,0,0-6.65863,6.65863Z" transform="translate(-156.25 -227.99512)" fill="#2f2e41" />
                    <ellipse cx="321.61098" cy="83.48803" rx="2.36098" ry="3.77757" fill="#ffb8b8" />
                    <rect y="442.00977" width="520" height="2" fill="#3f3d56" />
                    <path d="M1043.75,427.51514H646.71v-199.52h397.04Zm-395.04-2h393.04v-195.52H648.71Z" transform="translate(-156.25 -227.99512)" fill="#3f3d56" />
                    <path d="M844.08008,390.28522a16.13845,16.13845,0,1,1-16.15015-16.15A16.10482,16.10482,0,0,1,844.08008,390.28522Z" transform="translate(-156.25 -227.99512)" fill="#667eea" />
                    <path d="M844.08008,390.28522a16.13845,16.13845,0,1,1-16.15015-16.15A16.10482,16.10482,0,0,1,844.08008,390.28522Z" transform="translate(-156.25 -227.99512)" opacity="0.3" />
                    <path d="M873.33008,308.87524a37.39369,37.39369,0,0,1-3.18994,15.33,38.17082,38.17082,0,0,1-3.31006,5.95,49.25668,49.25668,0,0,1-9.43994,10.2c-.62012.52-1.3,1.06-2.21021,1.76-1.13989.85-2.40991,1.74-3.86987,2.7a80.77833,80.77833,0,0,0-7.43018,5.43,16.48378,16.48378,0,0,0-3.60986,3.9c-1.23,2.15-1.8501,6.31-1.8501,12.37v1H811.46v-4.68c0-3.66.09009-6.74.26-9.42a67.41416,67.41416,0,0,1,.76-7.25,17.99478,17.99478,0,0,1,1.87988-6.05c1.77-2.95,6.04-6.96,13.04-12.26.3-.22.6001-.45.91016-.68.29-.2.56982-.41.85986-.63a41.5209,41.5209,0,0,0,6.66016-5.9,21.33529,21.33529,0,0,0,1.61987-2.16l.13013-.2a17.275,17.275,0,0,0,2.22-9.12,15.976,15.976,0,0,0-.15991-2.41,12.74827,12.74827,0,0,0-4.06006-8.12006,14.52355,14.52355,0,0,0-9.11011-3.8c-.42993-.04-.82983-.05-1.24-.05a19.34631,19.34631,0,0,0-4.73.56,14.2523,14.2523,0,0,0-7.43994,4.6,19.34265,19.34265,0,0,0-2.6001,3.97,57.9819,57.9819,0,0,0-4.48,17.14l-.1001,1.05-25.37988-6.76v-11.19c.12012-.45.25-.9.39014-1.34a50.4992,50.4992,0,0,1,7.62988-15.63,39.6736,39.6736,0,0,1,4.92993-5.57c.42993-.43.90015-.85,1.37012-1.26a45.57309,45.57309,0,0,1,10.08984-6.64l.32007-.15a50.78274,50.78274,0,0,1,22.03-4.68006c.79,0,1.72.01,2.63989.06a50.32075,50.32075,0,0,1,21.69019,5.53,44.20118,44.20118,0,0,1,8.42993,5.68,36.01482,36.01482,0,0,1,13.01,23.68A42.2326,42.2326,0,0,1,873.33008,308.87524Z" transform="translate(-156.25 -227.99512)" fill="#667eea" />
                    <path d="M873.33008,308.87524a37.39369,37.39369,0,0,1-3.18994,15.33,38.17082,38.17082,0,0,1-3.31006,5.95,49.25668,49.25668,0,0,1-9.43994,10.2c-.62012.52-1.3,1.06-2.21021,1.76-1.13989.85-2.40991,1.74-3.86987,2.7a80.77833,80.77833,0,0,0-7.43018,5.43,16.48378,16.48378,0,0,0-3.60986,3.9c-1.23,2.15-1.8501,6.31-1.8501,12.37v1H811.46v-4.68c0-3.66.09009-6.74.26-9.42a67.41416,67.41416,0,0,1,.76-7.25,17.99478,17.99478,0,0,1,1.87988-6.05c1.77-2.95,6.04-6.96,13.04-12.26.3-.22.6001-.45.91016-.68.29-.2.56982-.41.85986-.63a41.5209,41.5209,0,0,0,6.66016-5.9,21.33529,21.33529,0,0,0,1.61987-2.16l.13013-.2a17.275,17.275,0,0,0,2.22-9.12,15.976,15.976,0,0,0-.15991-2.41,12.74827,12.74827,0,0,0-4.06006-8.12006,14.52355,14.52355,0,0,0-9.11011-3.8c-.42993-.04-.82983-.05-1.24-.05a19.34631,19.34631,0,0,0-4.73.56,14.2523,14.2523,0,0,0-7.43994,4.6,19.34265,19.34265,0,0,0-2.6001,3.97,57.9819,57.9819,0,0,0-4.48,17.14l-.1001,1.05-25.37988-6.76v-11.19c.12012-.45.25-.9.39014-1.34a50.4992,50.4992,0,0,1,7.62988-15.63,39.6736,39.6736,0,0,1,4.92993-5.57c.42993-.43.90015-.85,1.37012-1.26a45.57309,45.57309,0,0,1,10.08984-6.64l.32007-.15a50.78274,50.78274,0,0,1,22.03-4.68006c.79,0,1.72.01,2.63989.06a50.32075,50.32075,0,0,1,21.69019,5.53,44.20118,44.20118,0,0,1,8.42993,5.68,36.01482,36.01482,0,0,1,13.01,23.68A42.2326,42.2326,0,0,1,873.33008,308.87524Z" transform="translate(-156.25 -227.99512)" opacity="0.3" />
                    <path d="M833.08008,390.28522a16.13845,16.13845,0,1,1-16.15015-16.15A16.10482,16.10482,0,0,1,833.08008,390.28522Z" transform="translate(-156.25 -227.99512)" fill="#667eea" />
                    <path d="M862.33008,308.87524a37.39369,37.39369,0,0,1-3.18994,15.33,38.17082,38.17082,0,0,1-3.31006,5.95,49.25668,49.25668,0,0,1-9.43994,10.2c-.62012.52-1.3,1.06-2.21021,1.76-1.13989.85-2.40991,1.74-3.86987,2.7a80.77833,80.77833,0,0,0-7.43018,5.43,16.48378,16.48378,0,0,0-3.60986,3.9c-1.23,2.15-1.8501,6.31-1.8501,12.37v1H800.46v-4.68c0-3.66.09009-6.74.26-9.42a67.41416,67.41416,0,0,1,.76-7.25,17.99478,17.99478,0,0,1,1.87988-6.05c1.77-2.95,6.04-6.96,13.04-12.26.3-.22.6001-.45.91016-.68.29-.2.56982-.41.85986-.63a41.5209,41.5209,0,0,0,6.66016-5.9,21.33529,21.33529,0,0,0,1.61987-2.16l.13013-.2a17.275,17.275,0,0,0,2.22-9.12,15.976,15.976,0,0,0-.15991-2.41,12.74827,12.74827,0,0,0-4.06006-8.12006,14.52355,14.52355,0,0,0-9.11011-3.8c-.42993-.04-.82983-.05-1.24-.05a19.34631,19.34631,0,0,0-4.73.56,14.2523,14.2523,0,0,0-7.43994,4.6,19.34265,19.34265,0,0,0-2.6001,3.97c-1.80005,3.59-2.97,8.35-3.48,14.14l-.1001,1.05-28.53979-4.07.13989-.99a71.62346,71.62346,0,0,1,2.41016-11.23,50.4992,50.4992,0,0,1,7.62988-15.63,39.6736,39.6736,0,0,1,4.92993-5.57c.42993-.43.90015-.85,1.37012-1.26a45.57309,45.57309,0,0,1,10.08984-6.64l.32007-.15a50.78274,50.78274,0,0,1,22.03-4.68006c.79,0,1.72.01,2.63989.06a50.32075,50.32075,0,0,1,21.69019,5.53,44.20118,44.20118,0,0,1,8.42993,5.68,36.01482,36.01482,0,0,1,13.01,23.68A42.2326,42.2326,0,0,1,862.33008,308.87524Z" transform="translate(-156.25 -227.99512)" fill="#667eea" />
                </svg>
            </div>
        </div>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.store('accordion', {
            tab: 0
        });

        Alpine.data('accordion', (idx) => ({
            init() {
                this.idx = idx;
            },
            idx: -1,
            handleClick() {
                this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
            },
            handleRotate() {
                return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
            },
            handleToggle() {
                return this.$store.accordion.tab === this.idx ? `max-height: ${this.$refs.tab.scrollHeight}px` : '';
            }
        }));
    })
</script>

</html>