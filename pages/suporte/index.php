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
                        <input type="hidden" name="_next" value="http://localhost:8080/BoxUp/src/pages/suporte/index.php">
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
                            <button id="enviar" disabled class="cursor-not-allowed uppercase text-sm font-bold tracking-wide bg-blue-600 text-gray-100 p-3 rounded-lg w-full focus:outline-none focus:shadow-outline">
                                Enviar mensagem
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- COMPONENT CODE -->
        </div>
  </section>

 