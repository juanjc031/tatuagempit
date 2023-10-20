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
  <main class="height: 100vh">
    <nav class="relative px-4 py-4 flex justify-between items-center bg-[#14131e] !mb-0 ">
      <a class="text-3xl font-bold leading-none" href="#">
        <div class="flex w-[10] ml-[30px]">
          <img src="./assets/images/logo2.png" class="logo" alt="Tattoo Studio Logo" />
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


        <li><a class="text-sm text-gray-400 hover:text-gray-500" href="/tatuagempit/pages/suporte/index.php">Suporte</a></li>
        <li class="text-gray-300">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
          </svg>
        </li>
        <li><a class="text-sm text-gray-400 hover:text-gray-500" href="/tatuagempit/pages/FAQ/index.php">FAQ</a></li>
      </ul>
      <a class="hidden lg:inline-block py-2 px-6 bg-blue-500 hover:bg-blue-600 text-sm text-white font-bold rounded-xl transition duration-200" href="/tatuagempit/pages/Login/login.php">Logar</a>
    </nav>
    <div class="flex flex-col gap-10 p-10">
      <div class="flex justify-start !mt-0 items-start  !pt-0">
        <div class="w-full sm:w-10/12 md:w-1/2 ">

          <h4 class="text-lg font-semibold text-gray-100 mb-2 opacity-80 mt-3">Filtre aqui as suas preferências</h4>
          <ul class="flex flex-col w-[70%]">
            <li class="bg-gray-800 text-gray-400 my-2 shadow-lg" x-data="accordion(1)">
              <h2 @click="handleClick()" class=" flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                <span>Abrir o filtro</span>
                <svg :class="handleRotate()" class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">
                  <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                </svg>
              </h2>
              <div x-ref="tab" :style="handleToggle()" class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all">
                <div class="flex gap-4 p-6 w-full">
                  <div class="w-full">
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Estilo</label>
                    <select id="estilo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option value="Tribal" selected>Tribal</option>
                      <option value="Realismo">Realismo</option>
                      <option value="Old School">Old School</option>
                      <option value="Japonês">Japonês</option>
                    </select>
                  </div>
                  <div class="w-full">
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tamanho</label>
                    <select id="tamanho" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option selected value="0">Pequeno</option>
                      <option value="1">Médio</option>
                      <option value="2">Grande</option>
                    </select>
                  </div>
                </div>
                <button id="consultar" class="py-2 ml-5 mb-3 px-6 bg-blue-500 hover:bg-blue-600 text-sm text-white font-bold rounded-xl transition duration-200">Consultar</button>
              </div>
            </li>

          </ul>
        </div>
      </div>

      <div id="card-container" class="flex gap-6 flex-wrap w-full px-4"></div>

      <!-- <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Juan Costa</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Estilo de tatuagem:</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Tamanhos de tatuagem:</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Telefone de contato:</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Instagram: @juancsz</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Descrição: teste teste teste</p>

        <a href="#" id="pagar" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          Pagar Adiantado
          <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
          </svg>
        </a>
      </div>
 -->
    </div>
  </main>
</body>

</html>
<script>
  $("#pagar").click(() => {
    swal.fire({
      title: 'Pague adiantado aqui!',
      html: `  <div>
                  <label for="" class="block mb-2 text-sm font-medium text-gray-300 dark:text-gray-500">Valor do pagamento</label>
                  <input type="text" name="tel" id="tel" maxlength="14" class="bg-gray-30 border border-gray-300 text-gray-500 sm:text-sm rounded-lg  block w-full p-2.5 dark:bg-gray-400 dark:border-gray-200 dark:placeholder-gray-500 dark:text-gray-500" placeholder="R$ 00,00" required="">
                </div>`,
      icon: 'info'
    }).then((result) => {
      swal.fire({
        title: 'Pagamento realizado!',
        html: ``,
        icon: 'success'
      })
    })
  })

  function BuscarTatuador(estilo = "", tamanho = "") {
    if (estilo != "") {
      $.ajax({
        url: "/tatuagempit/api/controller/ListaTatuador",
        method: "POST",
        data: {
          estilo,
          tamanho
        },
        success: (data) => {
          console.log(data)

          data = JSON.parse(data)

          console.log(data)

          let html = "";

          data.data.forEach(element => {
            html += `
          <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">${element.nome}</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Estilo de tatuagem: ${element.estilo}</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Tamanhos de tatuagem: ${element.tamanho == 0 ? "Pequeno" : element.tamanho == 1 ? "Médio" : "Grande"}</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Telefone de contato: ${element.telefone}</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Instagram: ${element.instagram}</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Descrição: ${element.caracteristicas}</p>

            <button type="button" id="pagar" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              Pagar Adiantado
              <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
              </svg>
            </button>
          </div>
          `;
          });

          $("#card-container").html(html)

        },
        error: (error) => {
          console.log(error)
        }
      })
    } else {


      $.ajax({
        url: "/tatuagempit/api/controller/ListaTatuador",
        method: "POST",
        data: {
          estilo,
          tamanho
        },
        success: (data) => {
          console.log(data)

          data = JSON.parse(data)

          console.log(data)

          let html = "";

          data.data.forEach(element => {
            html += `
          <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <a href="#">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">${element.nome}</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Estilo de tatuagem: ${element.estilo}</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Tamanhos de tatuagem: ${element.tamanho == 0 ? "Pequeno" : element.tamanho == 1 ? "Médio" : "Grande"}</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Telefone de contato: ${element.telefone}</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Instagram: ${element.instagram}</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Descrição: ${element.caracteristicas}</p>
            
            <a href="#" id="pagar" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Pagar Adiantado
            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
            </a>
            </div>
            `;
          });

          $("#card-container").html(html)

        },
        error: (error) => {
          console.log(error)
        }
      })
    }
  }

  BuscarTatuador()

  $("#consultar").click(() => {
    const estilo = $("#estilo").val()
    const tamanho = $("#tamanho").val()

    console.log(estilo, tamanho)

    BuscarTatuador(estilo, tamanho)
  })
</script>
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