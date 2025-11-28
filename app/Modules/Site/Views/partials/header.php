<!-- HEADER -->
<header
    class="border-b border-gray-200 relative z-50 bg-white/90 backdrop-blur supports-backdrop-filter:bg-white/70">
    <div class="max-w-7xl mx-auto flex justify-between items-center px-5 py-2 md:px-8">
        <!-- LOGO -->
        <a href="/" class="flex items-center shrink-0" aria-label="Página inicial">
            <img src="<?php echo base_url('assets/site/img/sua.png'); ?>" alt="Imovirtual" class="h-10 md:h-14" />
        </a>

        <!-- NAV DESKTOP -->
        <nav class="hidden md:flex md:items-center md:gap-8 text-[15px] font-medium">
            <!-- PARA VENDA -->
            <div class="relative group">
                <button class="flex items-center gap-1 hover:text-primary focus:outline-none py-2"
                    aria-haspopup="true" aria-expanded="false">
                    Para venda
                    <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180"
                        viewBox="0 0 24 24">
                        <path fill="currentColor" fill-rule="evenodd"
                            d="M2.001 7h1.414l8.586 8.586L20.587 7h1.414v1.414L12.416 18h-.828L2.001 8.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <!-- Mega menu centralizado, não sai do container -->
                <div
                    class="absolute left-1/2 -translate-x-1/2 top-full bg-white border border-gray-200 shadow-xl py-6 z-40 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 translate-y-2 group-hover:translate-y-0 min-w-[800px] rounded-lg mt-1">
                    <div class="w-full grid grid-cols-4 gap-8 px-8 text-sm">
                        <div>
                            <h4 class="font-semibold uppercase text-xs mb-3 text-gray-500">
                                IMÓVEIS
                            </h4>
                            <ul class="space-y-3">
                                <li><a class="hover:text-primary block py-1" href="#">Apartamentos</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Estúdios</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Moradias</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Terrenos</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Imóveis comerciais</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Escritórios</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Armazéns</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Garagens</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold uppercase text-xs mb-3 text-gray-500">
                                LOCALIZAÇÕES POPULARES
                            </h4>
                            <ul class="space-y-3">
                                <li><a class="hover:text-primary block py-1" href="#">Lisboa</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Porto</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Braga</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Aveiro</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Leiria</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Setúbal</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Faro</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold uppercase text-xs mb-3 text-gray-500">
                                EMPREENDIMENTOS
                            </h4>
                            <ul class="space-y-3">
                                <li><a class="hover:text-primary block py-1" href="#">Apartamentos novos</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Moradias novas</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Comerciais novos</a></li>
                            </ul>
                        </div>
                        <div class="border-l border-gray-200 pl-6">
                            <h4 class="font-semibold uppercase text-xs mb-3 text-gray-500">
                                GUIA DO COMPRADOR
                            </h4>
                            <ul class="space-y-3">
                                <li><a class="hover:text-primary block py-1" href="#">Crédito Habitação</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Impostos a pagar</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Minuta de Contrato</a></li>
                                <li>
                                    <a class="hover:text-primary font-semibold flex items-center gap-1 mt-4"
                                        href="#">
                                        Ver todos
                                        <svg class="w-3 h-3" viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M8.453 22 18 12.707v-1.414L8.453 2H7v1.414L15.82 12 7 20.586V22z" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PARA ARRENDAR -->
            <div class="relative group">
                <button class="flex items-center gap-1 hover:text-primary focus:outline-none py-2"
                    aria-haspopup="true" aria-expanded="false">
                    Para arrendar
                    <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180"
                        viewBox="0 0 24 24">
                        <path fill="currentColor" fill-rule="evenodd"
                            d="M2.001 7h1.414l8.586 8.586L20.587 7h1.414v1.414L12.416 18h-.828L2.001 8.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div
                    class="absolute left-1/2 -translate-x-1/2 top-full bg-white border border-gray-200 shadow-xl py-6 z-40 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 translate-y-2 group-hover:translate-y-0 min-w-[800px] rounded-lg mt-1">
                    <div class="w-full grid grid-cols-4 gap-8 px-8 text-sm">
                        <div>
                            <h4 class="font-semibold uppercase text-xs mb-3 text-gray-500">
                                IMÓVEIS
                            </h4>
                            <ul class="space-y-3">
                                <li><a class="hover:text-primary block py-1" href="#">Apartamentos</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Estúdios</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Moradias</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Quartos</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Garagens</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold uppercase text-xs mb-3 text-gray-500">
                                LOCALIZAÇÕES POPULARES
                            </h4>
                            <ul class="space-y-3">
                                <li><a class="hover:text-primary block py-1" href="#">Lisboa</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Porto</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Braga</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Faro</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold uppercase text-xs mb-3 text-gray-500">
                                PROFISSIONAIS POPULARES
                            </h4>
                            <ul class="space-y-3">
                                <li><a class="hover:text-primary block py-1" href="#">Lisboa</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Porto</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Braga</a></li>
                            </ul>
                        </div>
                        <div class="border-l border-gray-200 pl-6">
                            <h4 class="font-semibold uppercase text-xs mb-3 text-gray-500">
                                GUIA DO ARRENDATÁRIO
                            </h4>
                            <ul class="space-y-3">
                                <li><a class="hover:text-primary block py-1" href="#">Tudo sobre arrendar</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Rescisão de contrato</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Contrato de arrendamento</a>
                                </li>
                                <li>
                                    <a class="hover:text-primary font-semibold flex items-center gap-1 mt-4"
                                        href="#">
                                        Ver todos
                                        <svg class="w-3 h-3" viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M8.453 22 18 12.707v-1.414L8.453 2H7v1.414L15.82 12 7 20.586V22z" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- EMPREENDIMENTOS -->
            <div class="relative group">
                <button class="flex items-center gap-1 hover:text-primary focus:outline-none py-2"
                    aria-haspopup="true" aria-expanded="false">
                    Empreendimentos
                    <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180"
                        viewBox="0 0 24 24">
                        <path fill="currentColor" fill-rule="evenodd"
                            d="M2.001 7h1.414l8.586 8.586L20.587 7h1.414v1.414L12.416 18h-.828L2.001 8.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div
                    class="absolute left-1/2 -translate-x-1/2 top-full bg-white border border-gray-200 shadow-xl py-6 z-40 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 translate-y-2 group-hover:translate-y-0 min-w-[800px] rounded-lg mt-1">
                    <div class="w-full grid grid-cols-4 gap-8 px-8 text-sm">
                        <div>
                            <h4 class="font-semibold uppercase text-xs mb-3 text-gray-500">
                                IMÓVEIS
                            </h4>
                            <ul class="space-y-3">
                                <li><a class="hover:text-primary block py-1" href="#">Apartamentos</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Moradias</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Comerciais</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Garagens</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold uppercase text-xs mb-3 text-gray-500">
                                LOCALIZAÇÕES POPULARES
                            </h4>
                            <ul class="space-y-3">
                                <li><a class="hover:text-primary block py-1" href="#">Lisboa</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Porto</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Faro</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold uppercase text-xs mb-3 text-gray-500">
                                PROFISSIONAIS POPULARES
                            </h4>
                            <ul class="space-y-3">
                                <li><a class="hover:text-primary block py-1" href="#">Lisboa</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Porto</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Setúbal</a></li>
                            </ul>
                        </div>
                        <div class="border-l border-gray-200 pl-6">
                            <h4 class="font-semibold uppercase text-xs mb-3 text-gray-500">
                                NOTÍCIAS DE MERCADO
                            </h4>
                            <ul class="space-y-3">
                                <li><a class="hover:text-primary block py-1" href="#">Preço das casas</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Arrendar para comprar</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Calendário escolar</a></li>
                                <li>
                                    <a class="hover:text-primary font-semibold flex items-center gap-1 mt-4"
                                        href="#">
                                        Ver todos
                                        <svg class="w-3 h-3" viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M8.453 22 18 12.707v-1.414L8.453 2H7v1.414L15.82 12 7 20.586V22z" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PROFISSIONAIS -->
            <div class="relative group">
                <button class="flex items-center gap-1 hover:text-primary focus:outline-none py-2"
                    aria-haspopup="true" aria-expanded="false">
                    Profissionais
                    <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180"
                        viewBox="0 0 24 24">
                        <path fill="currentColor" fill-rule="evenodd"
                            d="M2.001 7h1.414l8.586 8.586L20.587 7h1.414v1.414L12.416 18h-.828L2.001 8.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div
                    class="absolute left-1/2 -translate-x-1/2 top-full bg-white border border-gray-200 shadow-xl py-6 z-40 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 translate-y-2 group-hover:translate-y-0 min-w-[600px] rounded-lg mt-1">
                    <div class="w-full grid grid-cols-3 gap-8 px-8 text-sm">
                        <div>
                            <h4 class="font-semibold uppercase text-xs mb-3 text-gray-500">
                                PROFISSIONAIS
                            </h4>
                            <ul class="space-y-3">
                                <li><a class="hover:text-primary block py-1" href="#">Profissionais</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Profissionais —
                                        Empreendimentos</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold uppercase text-xs mb-3 text-gray-500">
                                É UM PROFISSIONAL?
                            </h4>
                            <button
                                class="border border-gray-900 text-gray-900 font-semibold text-sm px-4 py-2 rounded-md hover:bg-gray-100 mt-2">
                                Publicar anúncio
                            </button>
                        </div>
                        <div class="border-l border-gray-200 pl-6">
                            <h4 class="font-semibold uppercase text-xs mb-3 text-gray-500">
                                PARA ESPECIALISTAS EM IMOBILIÁRIO
                            </h4>
                            <ul class="space-y-3">
                                <li><a class="hover:text-primary block py-1" href="#">Sou consultor imobiliário</a>
                                </li>
                                <li><a class="hover:text-primary block py-1" href="#">Imóvel off-market</a></li>
                                <li><a class="hover:text-primary block py-1" href="#">Academia Imovirtual</a></li>
                                <li>
                                    <a class="hover:text-primary font-semibold flex items-center gap-1 mt-4"
                                        href="#">
                                        Ver todos
                                        <svg class="w-3 h-3" viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M8.453 22 18 12.707v-1.414L8.453 2H7v1.414L15.82 12 7 20.586V22z" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- AÇÕES + MOBILE ÍCONES -->
        <div class="flex items-center gap-3">
            <?php if (!is_logged_in()): ?>

                <!-- Visitante -->
                <a href="<?= base_url('login') ?>" class="flex items-center gap-2 text-white bg-blue-900 hover:bg-blue-950 px-5 py-2 border border-blue-900 rounded-md duration-300">
                   <i class="bi bi-person text-2xl"></i> Minha conta
                </a>

                <a href="<?= base_url('register') ?>"
                    class="border border-blue-900 hover:border-blue-300 duration-300 text-gray-900 px-5 py-2 rounded-md hover:bg-blue-100">
                    <i class="bi bi-plus text-xl font-thin"> </i>Criar conta
                </a>

            <?php else: ?>

                <?php if (is_client()): ?>
                    <!-- CLIENTE -->
                    <a href="/client/dashboard" class="flex items-center gap-2 text-white bg-blue-900 hover:bg-blue-950 px-5 py-2 border border-blue-900 rounded-md duration-300">
                        <i class="ph-user"></i> Conta pessoal
                    </a>

                    <a href="/client/properties/add"
                        class="border border-gray-900 text-gray-900 px-4 py-2 rounded-md hover:bg-gray-100">
                        Adicionar Anúncio
                    </a>
                <?php endif; ?>

                <?php if (is_agent()): ?>
                    <!-- AGENTE -->
                    <a href="/agent" class="flex items-center gap-2 text-white bg-blue-900 hover:bg-blue-950 px-5 py-2 border border-blue-900 rounded-md duration-300">
                        <i class="ph-briefcase"></i> Painel do Agente
                    </a>

                    <a href="/agent/properties/add"
                        class="border border-gray-900 text-gray-900 px-4 py-2 rounded-md hover:bg-gray-100">
                        Adicionar Imóvel
                    </a>
                <?php endif; ?>

                <?php if (is_admin()): ?>
                    <!-- ADMIN -->
                    <a href="/admin" class="flex items-center gap-2 text-white bg-blue-900 hover:bg-blue-950 px-5 py-2 border border-blue-900 rounded-md duration-300">
                        <i class="bi bi-shield"></i> Minha conta
                    </a>
                <?php endif; ?>

                <a href="/logout" class="flex items-center gap-2 text-white bg-red-400 hover:bg-red-500 px-5 py-2 border border-red-600 rounded-md duration-300">
                    Sair
                </a>

            <?php endif; ?>

            <!-- HAMBURGER MOBILE -->
            <button id="menuBtn" class="md:hidden p-2 rounded focus:outline-none focus:ring"
                aria-label="Abrir menu">
                <svg class="w-7 h-7 text-gray-800" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>
</header>

<!-- BACKDROP PARA O MENU MOBILE -->
<div id="backdrop"
    class="fixed inset-0 bg-black/40 opacity-0 pointer-events-none transition-opacity duration-300 z-40"
    aria-hidden="true"></div>

<!-- MENU MOBILE EM “PÁGINAS”, LADO ESQUERDO -->
<aside id="mobileMenu"
    class="fixed inset-y-0 left-0 w-[80%] max-w-xs bg-white shadow-xl z-50 transform -translate-x-full transition-transform duration-300 flex flex-col"
    aria-hidden="true" tabindex="-1">
    <!-- PÁGINA PRINCIPAL -->
    <div id="mobileMain" class="flex-1 flex flex-col" data-panel="main">
        <div class="flex items-center justify-between px-5 py-4 border-b">
            <span class="font-semibold text-lg">Menu</span>
            <button class="p-2 rounded hover:bg-gray-100" aria-label="Fechar menu" data-close-menu>
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none">
                    <path stroke="currentColor" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <nav class="px-5 py-4 space-y-1 text-[15px]">
            <!-- Botão que abre sub-página “Para venda” -->
            <button class="w-full flex items-center justify-between py-3 border-b border-gray-100 text-left"
                data-open-submenu="sell">
                <span>Para venda</span>
                <i class="fa-solid fa-chevron-right text-xs"></i>
            </button>

            <!-- Botão que abre sub-página “Para arrendar” -->
            <button class="w-full flex items-center justify-between py-3 border-b border-gray-100 text-left"
                data-open-submenu="rent">
                <span>Para arrendar</span>
                <i class="fa-solid fa-chevron-right text-xs"></i>
            </button>

            <!-- Botão que abre sub-página “Empreendimentos” -->
            <button class="w-full flex items-center justify-between py-3 border-b border-gray-100 text-left"
                data-open-submenu="devs">
                <span>Empreendimentos</span>
                <i class="fa-solid fa-chevron-right text-xs"></i>
            </button>

            <!-- Botão que abre sub-página “Profissionais” -->
            <button class="w-full flex items-center justify-between py-3 border-b border-gray-100 text-left"
                data-open-submenu="pros">
                <span>Profissionais</span>
                <i class="fa-solid fa-chevron-right text-xs"></i>
            </button>

            <!-- Links simples -->
            <a href="#" class="flex items-center gap-2 py-3 border-b border-gray-100">
                <i class="fa-regular fa-comment text-sm"></i>
                <span>Mensagens</span>
            </a>
            <a href="#" class="flex items-center gap-2 py-3 border-b border-gray-100">
                <i class="fa-regular fa-heart text-sm"></i>
                <span>Guardados</span>
            </a>
            <a href="#" class="flex items-center gap-2 py-3 border-b border-gray-100">
                <i class="fa-regular fa-user text-sm"></i>
                <span>nandiatead@gmail.com</span>
            </a>
        </nav>

        <div class="px-5 pb-6 mt-auto">
            <button
                class="w-full bg-primary text-white font-semibold text-sm px-4 py-2 rounded-md hover:bg-[#11244A]">
                Adicionar Anúncio
            </button>
        </div>
    </div>

    <!-- SUB-PÁGINA GENÉRICA (reutilizada para cada secção) -->
    <!-- Para venda -->
    <div id="submenu-sell" class="hidden flex-1 flex-col" data-panel="submenu">
        <div class="flex items-center justify-between px-5 py-4 border-b">
            <button class="p-2 -ml-2 rounded hover:bg-gray-100" data-back-main aria-label="Voltar">
                <i class="fa-solid fa-chevron-left text-sm"></i>
            </button>
            <span class="font-semibold text-lg">Para venda</span>
            <button class="p-2 rounded hover:bg-gray-100" data-close-menu aria-label="Fechar menu">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none">
                    <path stroke="currentColor" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <nav class="px-5 py-4 space-y-1 text-[15px]">
            <a class="block py-3 border-b border-gray-100" href="#">Imóveis</a>
            <a class="block py-3 border-b border-gray-100" href="#">Localizações populares</a>
            <a class="block py-3 border-b border-gray-100" href="#">Empreendimentos</a>
            <a class="block py-3 border-b border-gray-100" href="#">Guia do comprador</a>
        </nav>
    </div>

    <!-- Para arrendar -->
    <div id="submenu-rent" class="hidden flex-1 flex-col" data-panel="submenu">
        <div class="flex items-center justify-between px-5 py-4 border-b">
            <button class="p-2 -ml-2 rounded hover:bg-gray-100" data-back-main aria-label="Voltar">
                <i class="fa-solid fa-chevron-left text-sm"></i>
            </button>
            <span class="font-semibold text-lg">Para arrendar</span>
            <button class="p-2 rounded hover:bg-gray-100" data-close-menu aria-label="Fechar menu">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none">
                    <path stroke="currentColor" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <nav class="px-5 py-4 space-y-1 text-[15px]">
            <a class="block py-3 border-b border-gray-100" href="#">Imóveis</a>
            <a class="block py-3 border-b border-gray-100" href="#">Localizações populares</a>
            <a class="block py-3 border-b border-gray-100" href="#">Profissionais populares</a>
            <a class="block py-3 border-b border-gray-100" href="#">Guia do arrendatário</a>
        </nav>
    </div>

    <!-- Empreendimentos -->
    <div id="submenu-devs" class="hidden flex-1 flex-col" data-panel="submenu">
        <div class="flex items-center justify-between px-5 py-4 border-b">
            <button class="p-2 -ml-2 rounded hover:bg-gray-100" data-back-main aria-label="Voltar">
                <i class="fa-solid fa-chevron-left text-sm"></i>
            </button>
            <span class="font-semibold text-lg">Empreendimentos</span>
            <button class="p-2 rounded hover:bg-gray-100" data-close-menu aria-label="Fechar menu">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none">
                    <path stroke="currentColor" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <nav class="px-5 py-4 space-y-1 text-[15px]">
            <a class="block py-3 border-b border-gray-100" href="#">Imóveis</a>
            <a class="block py-3 border-b border-gray-100" href="#">Localizações populares</a>
            <a class="block py-3 border-b border-gray-100" href="#">Profissionais populares</a>
            <a class="block py-3 border-b border-gray-100" href="#">Notícias de mercado</a>
        </nav>
    </div>

    <!-- Profissionais -->
    <div id="submenu-pros" class="hidden flex-1 flex-col" data-panel="submenu">
        <div class="flex items-center justify-between px-5 py-4 border-b">
            <button class="p-2 -ml-2 rounded hover:bg-gray-100" data-back-main aria-label="Voltar">
                <i class="fa-solid fa-chevron-left text-sm"></i>
            </button>
            <span class="font-semibold text-lg">Profissionais</span>
            <button class="p-2 rounded hover:bg-gray-100" data-close-menu aria-label="Fechar menu">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none">
                    <path stroke="currentColor" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <nav class="px-5 py-4 space-y-1 text-[15px]">
            <a class="block py-3 border-b border-gray-100" href="#">Profissionais</a>
            <a class="block py-3 border-b border-gray-100" href="#">Profissionais — Empreendimentos</a>
            <a class="block py-3 border-b border-gray-100" href="#">Para especialistas em imobiliário</a>
        </nav>
    </div>
</aside>