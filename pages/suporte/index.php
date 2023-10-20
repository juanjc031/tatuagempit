<head>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="/BoxUp/src/js/jquery.min.js"></script>
  <title>InkFy!</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<?php

include_once('../toast.php');

?>

<body>
  <section class="bg-gray-50 dark:bg-gray-900">
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
        <li><a class="text-sm text-blue-600 font-bold" href="/TatuagemApi/pages/home/home.php">Home</a></li>
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
        <li><a class="text-sm text-gray-400 hover:text-gray-500" href="/TatuagemApi/pages/FAQ/index.php">FAQ</a></li>
      </ul>
      <a class="hidden lg:inline-block py-2 px-6 bg-blue-500 hover:bg-blue-600 text-sm text-white font-bold rounded-xl transition duration-200" href="/TatuagemApi/pages/Login/login.php">Sair</a>
    </nav>
  <div class="h-[100vh] flex  justify-center items-center bg-gray-900">
            <!-- COMPONENT CODE -->
            <div class=" h-[100vh]container w-3/4 mx-auto px-4 lg:px-20">
                <div class="w-full p-8 my-4 mr-auto rounded-2xl shadow-2xl bg-gray-800">
                    <div class="flex gap-2 items-center">
                        <h1 class="font-regular opacity-70 uppercase text-xl text-white">Entre em </h1>
                        <h1 class="font-bold text-blue-600 uppercase text-2xl">contato!</h1>
                    </div>
                    <form id='form' action="https://formsubmit.co/juancostacizilio@gmail.com" method="POST" encType='multipart/form-data'>
                        <input type="hidden" name="_captcha" value="false">
                        <input type="hidden" name="_next" value="http://localhost:8080/TatuagemApi/pages/suporte/index.php">
                        <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
                            <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text" placeholder="Primeiro Nome*" id="nome" name="nome" required />
                            <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text" placeholder="Ultimo Nome*" id="sobrenome" name="sobrenome" required />
                            <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="email" placeholder="Email*" id="email" name="email" required />
                            <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text" placeholder="Celular*" maxlength="15" id="celular" name="celular" required />
                        </div>
                        <div class="my-4">
                            <textarea placeholder="Mensagem*" class="w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" name="mensagem" required id="mensagem"></textarea>
                        </div>
                        <div class="my-2 w-1/2 lg:w-1/4">
                            <button id="enviar" class=" uppercase text-sm font-bold tracking-wide bg-blue-600 text-gray-100 p-3 rounded-lg w-full focus:outline-none focus:shadow-outline">
                                Enviar mensagem
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- COMPONENT CODE -->
        </div>
  </section>

 