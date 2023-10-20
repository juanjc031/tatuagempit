<!-- component -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="./assets/styles/styles.css" /> -->
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
</head>

<body class="h-screen ">
    <main class="p-5 bg-gray-900">
        <div class="flex justify-center items-start my-2">
            <div class="w-full sm:w-10/12 md:w-1/2 my-1 pt-16">
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
                    <li class="bg-gray-800 text-gray-100 my-2 shadow-lg" x-data="accordion(1)">
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
                    <li class="bg-gray-800 text-gray-100 my-2 shadow-lg" x-data="accordion(2)">
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
                    <li class="bg-gray-800 text-gray-100 my-2 shadow-lg" x-data="accordion(3)">
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
    </main>
</body>
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