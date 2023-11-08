<?php
// session_start();
?>

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

<body class="bg-[#191825]">
  <main id="main" class="height: 100vh">
    <nav class="relative px-4 py-4 flex justify-between items-center bg-[#14131e] !mb-0 ">
      <a class="text-3xl font-bold leading-none" href="#">
        <div class="flex w-[10] ml-[30px]">
          <img src="/TatuagemApi/src/images/logo2.png" width="40" class="logo" alt="Tattoo Studio Logo" />
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
        <li><a class="text-sm text-blue-600 font-bold" href="#">Home</a></li>
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
    <div class="flex flex-col gap-2 p-6">
      <div class="flex justify-center !mt-0 items-start  !pt-0">
        <div class="w-full sm:w-10/12 md:w-1/2 ">
          <h4 class="text-lg font-semibold text-gray-100 opacity-80">Filtre aqui as suas preferências</h4>
          <ul class="flex flex-col w-[90%]">
            <li class="bg-gray-800 text-gray-400 my-2 rounded-md shadow-lg" x-data="accordion(1)">
              <h2 @click="handleClick()" class=" flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                <span>Abrir o filtro</span>
                <svg :class="handleRotate()" class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">
                  <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                </svg>
              </h2>
              <div x-ref="tab" :style="handleToggle()" class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all">
                <div class="flex gap-4 p-6 w-full items-end">
                  <div class="w-[80%]">
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Estilo</label>
                    <select id="filtroestilo" name="filtroestilo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option value="" selected>Não filtrar</option>
                      <option value="Tribal">Tribal</option>
                      <option value="Realismo">Realismo</option>
                      <option value="Old School">Old School</option>
                      <option value="Japonês">Japonês</option>
                    </select>
                  </div>
                  <div class="w-[80%]">
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tamanho</label>
                    <select id="filtrotamanho" name="filtrotamanho" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option value="" selected>Não filtrar</option>
                      <option value="0">Pequeno</option>
                      <option value="1">Médio</option>
                      <option value="2">Grande</option>
                    </select>
                  </div>
                  <div class="w-full">
                    <button href="#" type="button" onclick="BuscarTatuador()" id="filtrarr" class="inline-flex items-center px-2 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      Realizar o filtro
                      <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </li>

          </ul>
        </div>
      </div>

      <div id="card-container" class="flex gap-4 flex-wrap justify-evenly">

      </div>

      <div id="todoscards" class="flex gap-4 flex-wrap justify-evenly">

      </div>
    </div>

  </main>
  <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
          <svg class="w-3 h-3 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
          </svg>
          <span class="sr-only">Close modal</span>
        </button>
        <div class="p-6 text-center">
          <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
          </svg>
          <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Digite aqui o valor do pagamento</h3>
          <input type="text" name="pagamento" id="pagamento" class="bg-gray-50  border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2 dark:bg-gray-800 dark:border-gray-900 dark:placeholder-gray-400 dark:text-gray-300" placeholder="R$ 00,00">
          <button data-modal-hide="popup-modal" id="btnconfirm" type="button" class="text-white mt-5 bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
            Pagar
          </button>
          <button id="btncancel" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
  <div id="popup-star" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
          <svg class="w-3 h-3 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
          </svg>
          <span class="sr-only">Close modal</span>
        </button>
        <div class="p-6 text-center flex flex-col items-center">
          <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
          </svg>
          <h3 class="mb-5 text-xl font-normal text-gray-300 dark:text-gray-200">Avalie o tatuador aqui!</h3>
          <div id="ratingStars" class="flex items-center space-x-1">

          </div>
          <div>
            <button id="btnenviar" type="button" class="text-white mt-5 bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
              Enviar
            </button>
            <button id="btncancelar" type="button" class="mt-10 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
              Cancelar
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>

<script>
  let loading = `
<div role="status" class="mt-40">
        <svg aria-hidden="true" class="w-8 h-8 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/><path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/></svg>
        <span class="sr-only">Loading...</span>
    </div>
`;

  BuscarTatuador()
  $("#btnconfirm").click(function() {
    $('#popup-modal').addClass("hidden")
    $('#popup-modal').removeClass("flex justify-center items-center")
    $('#main').removeClass("opacity-30")
    swal.fire({
      title: "Pagamento bem sucessedido",
      icon: "success",
      confirmButtonText: 'Ok',
      customClass: {
        popup: 'my-swal-popup-class',
        confirmButton: 'my-confirm-button-class'
      }
    })
  })

  function criarEstrelas() {
    let htmlE = `
    <svg class="w-6 h-6 cursor-pointer text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
      <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
    </svg>
    <svg class="w-6 h-6 cursor-pointer text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
      <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
    </svg>
    <svg class="w-6 h-6 cursor-pointer text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
      <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
    </svg>
    <svg class="w-6 h-6 cursor-pointer text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
      <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
    </svg>
    <svg class="w-6 h-6 cursor-pointer text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
      <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
    </svg>`;
    $('#ratingStars').html(htmlE);
  }

  criarEstrelas(); // Crie as estrelas antes de adicionar o evento de clique
  function avaliar() {
    console.log("clicou aee")
    $('#popup-star').removeClass('hidden')
    $('#popup-star').addClass("flex justify-center items-center")
    $('#main').addClass("opacity-30")

    $('#ratingStars svg').on('click', function() {
      const index = $(this).index();
      $('#ratingStars svg').each(function(i) {
        if (i <= index) {
          $(this).removeClass('text-gray-300').addClass('text-yellow-300');
        } else {
          $(this).removeClass('text-yellow-300').addClass('text-gray-300');
        }
      });
      // Aqui você pode enviar a avaliação selecionada para o servidor ou fazer qualquer outra ação necessária
    });

    $("#btnenviar").on('click', function() {
      $('#popup-star').addClass('hidden')
      $('#popup-star').removeClass("flex justify-center items-center")
      $('#main').removeClass("opacity-30")
      swal.fire({
        title: "Tatuador avaliado com sucesso!",
        icon: "success",
        confirmButtonText: 'Ok',
        customClass: {
          popup: 'my-swal-popup-class',
          confirmButton: 'my-confirm-button-class'
        }
      })
    });

    $("#btncancelar").on('click', function() {
      $('#popup-star').addClass('hidden')
      $('#popup-star').removeClass("flex justify-center items-center")
      $('#main').removeClass("opacity-30")
    });
  }


  $("#btncancel").click(function() {
    console.log("clicou ze")
    $('#popup-modal').addClass("hidden")
    $('#popup-modal').removeClass("flex justify-center items-center")
    $('#main').removeClass("opacity-30")

  })

  async function BuscarTatuador() {

    $("#card-container").html(loading);

    function sleep() {
      return new Promise((resolve) => {
        setTimeout(resolve, 1000);
      })
    }

    await sleep();

    $.ajax({
      url: "/tatuagemapi/api/controller/ListaTatuador",
      method: "POST",
      data: {
        filtroestilo: $("#filtroestilo").val(),
        filtrotamanho: $("#filtrotamanho").val()
      },
      success: (data) => {
        console.log($("#filtroestilo").val());

        data = JSON.parse(data)

        let html = "";


        data.data.forEach(element => {
          if (element.tamanho == 0) {
            element.tamanho = "Pequena"
          } else if (element.tamanho == 1) {
            element.tamanho = "Média"
          } else if (element.tamanho == 2) {
            element.tamanho = "Grande"
          } else {
            element.tamanho = ""
          }
          html += `
          <div class="max-w-[30rem] p-6  mb-5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <div class="flex items-center justify-start gap-2">
            <div class="flex w-[20]">
              <img src="/TatuagemApi/src/images/perfil.png" width="80" class="" alt="Perfil" />
            </div>
            <div>
              <h5 class=" text-2xl font-bold tracking-tight text-gray-900 dark:text-white">${element.nome}</h5>
              <a class="flex items-center gap-2 dark:hover:text-gray-600" href="https://www.instagram.com/${element.instagram}/" target="_blank">
                <p class=" text-base font-bold tracking-tight text-gray-900 dark:text-gray-500">${element.instagram}</p>
                <svg class="w-4 h-4 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                  <path d="M17 0h-5.768a1 1 0 1 0 0 2h3.354L8.4 8.182A1.003 1.003 0 1 0 9.818 9.6L16 3.414v3.354a1 1 0 0 0 2 0V1a1 1 0 0 0-1-1Z" />
                  <path d="m14.258 7.985-3.025 3.025A3 3 0 1 1 6.99 6.768l3.026-3.026A3.01 3.01 0 0 1 8.411 2H2.167A2.169 2.169 0 0 0 0 4.167v11.666A2.169 2.169 0 0 0 2.167 18h11.666A2.169 2.169 0 0 0 16 15.833V9.589a3.011 3.011 0 0 1-1.742-1.604Z" />
                </svg>
              </a>
            </div>
          </div>
          <div class="flex gap-4 mt-4 w-full">
            <div class="w-full">
              <label for="nome" class="block mb-1 text-sm font-normal dark:text-gray-400">Estilo de tatuagem:</label>
              <input type="text" disabled value="${element.estilo}" name="nome" id="nome" class="bg-gray-50  border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2 dark:bg-gray-900 dark:border-black dark:placeholder-gray-400 dark:text-gray-300" placeholder="" required="">
            </div>
            <div class="w-full">
              <label for="nome" class="block mb-1 text-sm font-normal dark:text-gray-400">Tamanho de tatuagem:</label>
              <input type="text" disabled value="${element.tamanho}" name="nome" id="nome" class="bg-gray-50  border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2 dark:bg-gray-900 dark:border-black dark:placeholder-gray-400 dark:text-gray-300" placeholder="" required="">
            </div>
          </div>
          <div class="flex gap-4 mt-3">
            <div class="w-full">
              <label for="nome" class="block mb-1 text-sm font-normal dark:text-gray-400">Telefone de contato:</label>
              <input type="text" disabled value="${element.telefone}" name="nome" id="nome" class="bg-gray-50  border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2 dark:bg-gray-900 dark:border-black dark:placeholder-gray-400 dark:text-gray-300" placeholder="" required="">
            </div>
            <div class="w-full">
              <label for="nome" class="block mb-1 text-sm font-normal dark:text-gray-400">Instagram:</label>
              <input type="text" disabled value="${element.instagram}" name="nome" id="nome" class="bg-gray-50  border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2 dark:bg-gray-900 dark:border-black dark:placeholder-gray-400 dark:text-gray-300" placeholder="" required="">
            </div>
          </div>
          <div class="w-full">
            <label for="nome" class="block mb-1 text-sm font-normal dark:text-gray-400 mt-2">Local de atendimento:</label>
            <input type="text" disabled value="${element.endereco}" name="nome" id="nome" class="bg-gray-50  border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2 dark:bg-gray-900 dark:border-black dark:placeholder-gray-400 dark:text-gray-300" placeholder="" required="">
          </div>
          <div class="mt-3">
            <label for="message" class="block mb-1 text-sm font-normal text-gray-900 dark:text-gray-400">Descrição do tatuador:</label>
            <textarea id="carac" disabled rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 dark:bg-gray-900 dark:border-black dark:placeholder-gray-400 dark:text-gray-300 dark:focus:ring-blue-500 dark:focus:border-blue-500">${element.caracteristicas}</textarea>
          </div>
          <div class="flex gap-6 flex-wrap mt-4">
            <button onClick="pagaraqui()" class="inline-flex items-center px-2.5 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              Realizar o pagamento adiantado
              <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
              </svg>
            </button>
            <button onClick="avaliar()" class="inline-flex items-center px-2.5 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              Avaliar o tatuador
              <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
              </svg>
            </button>
          </div>
        </div>
          `;
        });

        $("#card-container").html(html)

      },
      error: (error) => {
        console.log(error)
      }
    })
  };

  function pagaraqui() {
    console.log("clicou")
    $('#popup-modal').removeClass("hidden")
    $('#popup-modal').addClass("flex justify-center items-center")
    $('#main').addClass("opacity-30")
  }
</script>
<style>
  .my-swal-popup-class {
    background-color: #374151;
    color: white;
  }

  .my-confirm-button-class {
    background-color: #2563eb;
    color: black;
  }

  ::-webkit-scrollbar {
    width: 0px;
  }
</style>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
<style>
  textarea::-webkit-scrollbar {
    width: 1px;
    /* Largura da barra de rolagem */
  }
</style>