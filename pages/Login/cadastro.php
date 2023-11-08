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
    <div class="flex items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <div class="w-full bg-white rounded-lg h-[33rem] shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
          <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
            Cadastrar
          </h1>
          <form class="space-y-4 md:space-y-6" action="#">

            <div class="flex w-full gap-3">
              <div>
                <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
                <input type="text" name="nome" id="nome" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
              </div>
              <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="exemplo@gmail.com" required="">
              </div>
            </div>

            <div>
              <label for="usuario" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome de usuário</label>
              <input type="text" name="usuario" id="usuario" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
            </div>

            <div class="flex w-full gap-3">
              <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Senha</label>
                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
              </div>

              <div>
                <label for="cpassword" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirmar senha</label>
                <input type="password" name="cpassword" id="cpassword" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
              </div>
            </div>
            <div class="flex items-center ">
              <input id="tatuador" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tatuador</label>
            </div>

            <button type="button" class=" text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-[90%] px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" id="cadastrar">Cadastrar</button>
            <p class=" text-sm font-light text-gray-500 dark:text-gray-400">
              Já <span id="spanfds"> possui </span> uma conta? <a href="./login.php" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Logar</a>
            </p>
        </div>


        </form>
      </div>

      <div id="inputs" class="hidden -ml-4 h-[33rem] w-full bg-white rounded-lg shadow dark:border-y dark:border-r  md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
          <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">Informações do tatuador</h1>
          <div class="flex w-full gap-3">
            <div>
              <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefone de contato</label>
              <input type="text" name="tel" id="tel" maxlength="14" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="(99) 99999-9999" required="">
            </div>
            <div>
              <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Instagram</label>
              <input type="text" name="insta" id="insta" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 " placeholder="" required="">
            </div>
          </div>
          <div class="flex w-full gap-3">
            <div class="w-full">
              <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seus estilos de tatuagem</label>
              <select id="estilo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Selecione uma opção</option>
                <option value="Tribal">Tribal</option>
                <option value="Realismo">Realismo</option>
                <option value="Old School">Old School</option>
                <option value="Japonês">Japonês</option>
              </select>
            </div>
            <div class="w-full">
              <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tamanhos</label>
              <select id="tamanho" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Selecione uma opção</option>
                <option value="0">Pequeno</option>
                <option value="1">Médio</option>
                <option value="2">Grande</option>
              </select>
            </div>
          </div>
          <div>
            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Local de atendimento:</label>
            <input type="text" name="endereco" id="endereco" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Rua do gordo 478, Ap 101 | Bairro Floresta" required="">
          </div>
          <div class="mt-3">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Suas Caracteristicas</label>
            <textarea id="carac" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escrevas suas caracteristicas aqui..."></textarea>
          </div>

        </div>
      </div>



    </div>
    </div>
  </section>

  <script>
    $("#tatuador").change(function() {
      if (this.checked) {

        // Se o checkbox foi marcado, adicione a div desejada
        $("#inputs").removeClass("hidden")

      } else {
        // Se o checkbox foi desmarcado, remova a div
        $("#inputs").addClass("hidden");
      }
    });
  </script>


  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>

  <script>
    $('#cpf').mask('000.000.000-00', {
      reverse: false
    });

    $('#cadastrar').click(() => {
      const nome = $("#nome").val()
      const email = $("#email").val();
      const usuario = $('#usuario').val();
      const senha = $("#password").val();
      const cSenha = $("#cpassword").val();
      const tatuador = $("#tatuador").is(":checked")

      if (!nome) {
        showToast();
        $("#message").html("Insira o nome!");
      } else if (!email) {
        showToast();
        $("#message").html("Insira o email!");
      } else if (!usuario) {
        showToast();
        $("#message").html("Insira o usuário!");
      } else if (!senha) {
        showToast();
        $("#message").html("Insira a senha!");
      } else if (!cSenha) {
        showToast();
        $("#message").html("Confirme a senha!");
      } else if (senha != cSenha) {
        showToast();
        $("#message").html("As senhas estão diferentes!");
      } else {
        if (!tatuador) {
          $.ajax({
            url: "/tatuagemapi/api/controller/Cadastro.php",
            method: "POST",
            data: {
              nome,
              email,
              usuario,
              senha
            },
            success: (data) => {
              data = JSON.parse(data);

              swal.fire({
                title: "Sucesso",
                html: data.message,
                icon: "success",
                customClass: {
                  popup: 'my-swal-popup-class',
                  confirmButton: 'my-confirm-button-class'
                }
              }).then(() => {
                window.location.href = window.location.href.replace('cadastro', 'login');
              })
            },
            error: (error) => {
              console.log(error)
              swal.fire({
                title: "Erro",
                html: "Erro ao cadastrar",
                icon: "error",
                customClass: {
                  popup: 'my-swal-popup-class',
                  confirmButton: 'my-confirm-button-class'
                }
              })
            }
          })
        } else {
          const tel = $("#tel").val()
          const insta = $("#insta").val()
          const endereco = $("#endereco").val()
          const carac = $("#carac").val()
          const estilo = $("#estilo").val()
          const tamanho = $("#tamanho").val()

          $.ajax({
            url: "/tatuagemapi/api/controller/CadastroTatuador.php",
            method: "POST",
            data: {
              nome,
              email,
              usuario,
              senha,
              tel,
              insta,
              endereco,
              carac,
              estilo,
              tamanho
            },
            success: (data) => {
              data = JSON.parse(data);

              swal.fire({
                title: "Sucesso",
                html: data.message,
                icon: "success",
                customClass: {
                  popup: 'my-swal-popup-class',
                  confirmButton: 'my-confirm-button-class'
                }
              }).then(() => {
                window.location.href = window.location.href.replace('cadastro', 'login');
              })
            },
            error: (error) => {
              console.log(error)
              swal.fire({
                title: "Erro",
                html: "Erro ao cadastrar",
                icon: "error",
                customClass: {
                  popup: 'my-swal-popup-class',
                  confirmButton: 'my-confirm-button-class'
                }
              })
            }
          })
        }


      }
    })
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
  </style>