<?= $this->extend('master') ?>

<?= $this->section('resultados_css') ?>
<style>
    .accordion-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-out;
    }

    .accordion-content.active {
        max-height: 500px;
        transition: max-height 0.4s ease-in;
    }

    .tipologia-btn.selected {
        background-color: #dbeafe;
        border-color: #3b82f6;
        color: #1e40af;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: white;
        border: 1px solid #ccc;
        border-top: none;
        border-radius: 0 0 4px 4px;
        max-height: 300px;
        overflow-y: auto;
        z-index: 50;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .dropdown-menu.active {
        display: block;
    }

    .dropdown-button {
        position: relative;
    }

    .dropdown-item {
        padding: 8px 16px;
        display: flex;
        align-items: center;
        gap: 8px;
        cursor: pointer;
        border-bottom: 1px solid #f0f0f0;
    }

    .dropdown-item:last-child {
        border-bottom: none;
    }

    .dropdown-item:hover {
        background-color: #f5f5f5;
    }

    .dropdown-item input[type="checkbox"] {
        cursor: pointer;
    }

    .selected-count {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 20px;
        height: 20px;
        background-color: #1f2937;
        color: white;
        border-radius: 50%;
        font-size: 12px;
        font-weight: bold;
        margin-left: 4px;
    }

    .tag-button {
        padding: 6px 12px;
        border: 1px solid #d1d5db;
        border-radius: 4px;
        background-color: white;
        color: #374151;
        cursor: pointer;
        font-size: 14px;
        transition: all 0.2s;
    }

    .tag-button.selected {
        background-color: #3b82f6;
        border-color: #ffffff;
        color: #ffffff;
    }

    .tag-button.selected::after {
        content: " ✓";
        font-weight: bold;
    }

    .filtros-detalhados {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-out;
    }

    .filtros-detalhados.active {
        max-height: 2000px;
    }

    .filter-dropdown {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: white;
        border: 1px solid #d1d5db;
        border-radius: 0.375rem;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        z-index: 50;
    }

    .filter-dropdown.active {
        display: block;
    }

    /* Accordion dos ultimos dois cards */
    .card-accordion-content {
        transition: all 0.3s ease-in-out;
        max-height: 0;
        opacity: 0;
        overflow: hidden;
    }

    .card-accordion-content.active {
        max-height: 500px;
        opacity: 1;
    }

    .accordion-arrow {
        transition: transform 0.3s ease;
        display: inline-block;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('resultados') ?>

<!-- SECÇÃO FILTROS DE PESQUISA -->
<section class="bg-white border-b border-gray-200 py-6">
    <div class="max-w-7xl mx-auto px-4">
        <!-- Breadcrumb -->
        <div class="flex items-center space-x-2 text-sm text-gray-600 mb-6">
            <i class="fas fa-home"></i>
            <span class="hover:text-blue-500 cursor-pointer">Imovirtual</span>
            <span>›</span>
            <span class="hover:text-blue-500 cursor-pointer">Apartamentos para comprar</span>
            <span>›</span>
            <span class="text-gray-800">Imóveis novos</span>
        </div>

        <!-- Main Filter Row -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-3 mb-4">
            <!-- Apartamentos Dropdown -->
            <div class="relative">
                <button
                    class="filter-dropdown-trigger w-full border border-gray-300 rounded-md px-4 py-3 text-left flex items-center justify-between hover:border-gray-400 focus:outline-none focus:border-blue-500"
                    data-target="apartamentos-dropdown">
                    <span class="text-gray-800" id="apartamentos-selected">Apartamentos</span>
                    <i class="fas fa-chevron-down text-gray-500 text-sm transition-transform"></i>
                </button>
                <div id="apartamentos-dropdown" class="filter-dropdown">
                    <div class="py-2">
                        <button
                            class="dropdown-option w-full text-left px-4 py-2 hover:bg-gray-50 text-gray-800 flex items-center justify-between"
                            data-value="Apartamentos">
                            <span>Apartamentos</span>
                            <i class="fas fa-check text-blue-500"></i>
                        </button>
                        <button class="dropdown-option w-full text-left px-4 py-2 hover:bg-gray-50 text-gray-700"
                            data-value="Estúdios">
                            Estúdios
                        </button>
                        <button class="dropdown-option w-full text-left px-4 py-2 hover:bg-gray-50 text-gray-700"
                            data-value="Moradias">
                            Moradias
                        </button>
                        <button class="dropdown-option w-full text-left px-4 py-2 hover:bg-gray-50 text-gray-700"
                            data-value="Empreendimentos">
                            Empreendimentos
                        </button>
                        <button class="dropdown-option w-full text-left px-4 py-2 hover:bg-gray-50 text-gray-700"
                            data-value="Quartos">
                            Quartos
                        </button>
                        <button class="dropdown-option w-full text-left px-4 py-2 hover:bg-gray-50 text-gray-700"
                            data-value="Terrenos">
                            Terrenos
                        </button>
                        <button class="dropdown-option w-full text-left px-4 py-2 hover:bg-gray-50 text-gray-700"
                            data-value="Imóveis comerciais">
                            Imóveis comerciais
                        </button>
                        <button class="dropdown-option w-full text-left px-4 py-2 hover:bg-gray-50 text-gray-700"
                            data-value="Armazéns">
                            Armazéns
                        </button>
                        <button class="dropdown-option w-full text-left px-4 py-2 hover:bg-gray-50 text-gray-700"
                            data-value="Garagens">
                            Garagens
                        </button>
                    </div>
                </div>
            </div>

            <!-- Para comprar Dropdown -->
            <div class="relative">
                <button
                    class="filter-dropdown-trigger w-full border border-gray-300 rounded-md px-4 py-3 text-left flex items-center justify-between hover:border-gray-400 focus:outline-none focus:border-blue-500"
                    data-target="comprar-dropdown">
                    <span class="text-gray-800" id="comprar-selected">Para comprar</span>
                    <i class="fas fa-chevron-down text-gray-500 text-sm transition-transform"></i>
                </button>
                <div id="comprar-dropdown" class="filter-dropdown">
                    <div class="py-2">
                        <button
                            class="dropdown-option w-full text-left px-4 py-2 hover:bg-gray-50 text-gray-800 flex items-center justify-between"
                            data-value="Para comprar">
                            <span>Para comprar</span>
                            <i class="fas fa-check text-blue-500"></i>
                        </button>
                        <button class="dropdown-option w-full text-left px-4 py-2 hover:bg-gray-50 text-gray-700"
                            data-value="Para arrendar">
                            Para arrendar
                        </button>
                    </div>
                </div>
            </div>

            <!-- Location Input -->
            <input type="text" placeholder="Introduzir localização"
                class="border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:border-blue-500 hover:border-gray-400" />

            <!-- Distance Dropdown -->
            <div class="relative">
                <button
                    class="filter-dropdown-trigger w-full border border-gray-300 rounded-md px-4 py-3 text-left flex items-center justify-between hover:border-gray-400 focus:outline-none focus:border-blue-500"
                    data-target="distance-dropdown">
                    <span class="text-gray-800" id="distance-selected">+ 0 km</span>
                    <i class="fas fa-chevron-down text-gray-500 text-sm transition-transform"></i>
                </button>
                <div id="distance-dropdown" class="filter-dropdown max-h-60 overflow-y-auto">
                    <div class="py-2">
                        <button
                            class="dropdown-option w-full text-left px-4 py-2 hover:bg-gray-50 text-gray-800 flex items-center justify-between"
                            data-value="+ 0 km">
                            <span>+ 0 km</span>
                            <i class="fas fa-check text-blue-500"></i>
                        </button>
                        <button class="dropdown-option w-full text-left px-4 py-2 hover:bg-gray-50 text-gray-700"
                            data-value="+ 5 km">
                            + 5 km
                        </button>
                        <button class="dropdown-option w-full text-left px-4 py-2 hover:bg-gray-50 text-gray-700"
                            data-value="+ 10 km">
                            + 10 km
                        </button>
                        <button class="dropdown-option w-full text-left px-4 py-2 hover:bg-gray-50 text-gray-700"
                            data-value="+ 15 km">
                            + 15 km
                        </button>
                        <button class="dropdown-option w-full text-left px-4 py-2 hover:bg-gray-50 text-gray-700"
                            data-value="+ 25 km">
                            + 25 km
                        </button>
                        <button class="dropdown-option w-full text-left px-4 py-2 hover:bg-gray-50 text-gray-700"
                            data-value="+ 50 km">
                            + 50 km
                        </button>
                        <button class="dropdown-option w-full text-left px-4 py-2 hover:bg-gray-50 text-gray-700"
                            data-value="+ 75 km">
                            + 75 km
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Secondary Filter Row -->
        <div class="max-w-7xl mx-auto bg-white rounded-lg">
            <!-- Filtros Container -->
            <div class="flex flex-wrap gap-6 items-end">
                <!-- Preço (25%) -->
                <div class="flex-1 min-w-[200px] max-w-[25%]">
                    <label class="text-xs text-gray-600 mb-1 block">Preço</label>
                    <div class="flex space-x-2">
                        <div class="relative flex-1">
                            <input type="text" placeholder="de"
                                class="border border-gray-300 rounded-md pl-4 pr-8 py-2 w-full focus:outline-none focus:border-blue-500 hover:border-gray-400" />
                            <span class="absolute right-3 top-2.5 text-gray-500 text-sm">€</span>
                        </div>
                        <div class="relative flex-1">
                            <input type="text" placeholder="até"
                                class="border border-gray-300 rounded-md pl-4 pr-8 py-2 w-full focus:outline-none focus:border-blue-500 hover:border-gray-400" />
                            <span class="absolute right-3 top-2.5 text-gray-500 text-sm">€</span>
                        </div>
                    </div>
                </div>

                <!-- Área (25%) -->
                <div class="flex-1 min-w-[200px] max-w-[25%]">
                    <label class="text-xs text-gray-600 mb-1 block">Área</label>
                    <div class="flex space-x-2">
                        <div class="relative flex-1">
                            <input type="text" placeholder="de"
                                class="border border-gray-300 rounded-md pl-4 pr-10 py-2 w-full focus:outline-none focus:border-blue-500 hover:border-gray-400" />
                            <span class="absolute right-3 top-2.5 text-gray-500 text-xs">m²</span>
                        </div>
                        <div class="relative flex-1">
                            <input type="text" placeholder="até"
                                class="border border-gray-300 rounded-md pl-4 pr-10 py-2 w-full focus:outline-none focus:border-blue-500 hover:border-gray-400" />
                            <span class="absolute right-3 top-2.5 text-gray-500 text-xs">m²</span>
                        </div>
                    </div>
                </div>

                <!-- Tipologia (50%) -->
                <div class="w-full lg:flex-1 lg:min-w-[400px] lg:max-w-[50%]">
                    <label class="text-xs text-gray-600 mb-1 block">Tipologia</label>
                    <div class="flex flex-wrap gap-2 sm:flex-nowrap sm:space-x-2">
                        <button
                            class="tipologia-btn flex-1 border border-gray-300 rounded-md px-3 py-2 hover:bg-gray-50 focus:outline-none transition-colors text-sm"
                            data-value="T0">
                            T0
                        </button>
                        <button
                            class="tipologia-btn flex-1 border border-gray-300 rounded-md px-3 py-2 hover:bg-gray-50 focus:outline-none transition-colors text-sm"
                            data-value="T1">
                            T1
                        </button>
                        <button
                            class="tipologia-btn flex-1 border border-gray-300 rounded-md px-3 py-2 hover:bg-gray-50 focus:outline-none transition-colors text-sm"
                            data-value="T2">
                            T2
                        </button>
                        <button
                            class="tipologia-btn flex-1 border border-gray-300 rounded-md px-3 py-2 hover:bg-gray-50 focus:outline-none transition-colors text-sm"
                            data-value="T3">
                            T3
                        </button>
                        <button
                            class="tipologia-btn flex-1 border border-gray-300 rounded-md px-3 py-2 hover:bg-gray-50 focus:outline-none transition-colors text-sm"
                            data-value="T4">
                            T4
                        </button>
                        <button
                            class="tipologia-btn flex-1 border border-gray-300 rounded-md px-3 py-2 hover:bg-gray-50 focus:outline-none transition-colors text-sm"
                            data-value="T5+">
                            T5+
                        </button>
                    </div>
                </div>

                <!-- Actions -->
                <div class="flex items-center gap-4 ml-auto">
                    <button id="limpar-filtros" class="text-gray-600 hover:text-gray-800 font-bold text-sm">
                        Limpar filtros
                    </button>
                    <button id="mais-filtros-btn"
                        class="flex items-center gap-2 text-dark px-4 py-2 rounded-md font-bold text-sm transition-colors">
                        <span
                            class="bg-gray-900 text-white rounded-full h-5 w-5 flex items-center justify-center text-xs font-bold">1</span>
                        Mais filtros
                        <i class="fas fa-chevron-down text-xs transition-transform" id="mais-filtros-icon"></i>
                    </button>
                    <button
                        class="flex items-center gap-2 bg-gray-800 hover:bg-gray-900 text-white px-6 py-2.5 rounded-md font-semibold transition-colors">
                        <i class="fas fa-search"></i>
                        Resultados 25661
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtros Detalhados (Accordion) -->
    <div class="max-w-7xl mx-auto filtros-detalhados mt-6">
        <!-- Andar, Tipo de Imóvel, Tipo de Anunciante -->
        <div class="grid grid-cols-3 gap-4 mb-4">
            <!-- ANDAR - Dropdown com Checkboxes -->
            <div class="dropdown-button">
                <label class="block text-xs font-semibold text-gray-700 mb-2">Andar</label>
                <div class="relative">
                    <button type="button"
                        class="w-full px-4 py-2 border border-gray-400 rounded focus:outline-none focus:ring-2 focus:ring-blue-400 text-gray-700 text-left flex justify-between items-center dropdown-trigger"
                        data-dropdown="andar">
                        <span id="andar-text">qualquer</span>
                        <svg class="w-4 h-4 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div class="dropdown-menu" id="dropdown-andar">
                        <div class="dropdown-item">
                            <input type="checkbox" id="andar-semi-cave" value="Semi-cave" class="andar-checkbox" />
                            <label for="andar-semi-cave" class="flex-1 cursor-pointer">Semi-cave</label>
                        </div>
                        <div class="dropdown-item">
                            <input type="checkbox" id="andar-res" value="Rés do chão" class="andar-checkbox" />
                            <label for="andar-res" class="flex-1 cursor-pointer">Rés do chão</label>
                        </div>
                        <div class="dropdown-item">
                            <input type="checkbox" id="andar-1" value="1" class="andar-checkbox" />
                            <label for="andar-1" class="flex-1 cursor-pointer">1</label>
                        </div>
                        <div class="dropdown-item">
                            <input type="checkbox" id="andar-2" value="2" class="andar-checkbox" />
                            <label for="andar-2" class="flex-1 cursor-pointer">2</label>
                        </div>
                        <div class="dropdown-item">
                            <input type="checkbox" id="andar-3" value="3" class="andar-checkbox" />
                            <label for="andar-3" class="flex-1 cursor-pointer">3</label>
                        </div>
                        <div class="dropdown-item">
                            <input type="checkbox" id="andar-4" value="4" class="andar-checkbox" />
                            <label for="andar-4" class="flex-1 cursor-pointer">4</label>
                        </div>
                        <div class="dropdown-item">
                            <input type="checkbox" id="andar-5" value="5" class="andar-checkbox" />
                            <label for="andar-5" class="flex-1 cursor-pointer">5</label>
                        </div>
                        <div class="dropdown-item">
                            <input type="checkbox" id="andar-6" value="6" class="andar-checkbox" />
                            <label for="andar-6" class="flex-1 cursor-pointer">6</label>
                        </div>
                        <div class="dropdown-item">
                            <input type="checkbox" id="andar-7" value="7" class="andar-checkbox" />
                            <label for="andar-7" class="flex-1 cursor-pointer">7</label>
                        </div>
                        <div class="dropdown-item">
                            <input type="checkbox" id="andar-8" value="8" class="andar-checkbox" />
                            <label for="andar-8" class="flex-1 cursor-pointer">8</label>
                        </div>
                        <div class="dropdown-item">
                            <input type="checkbox" id="andar-9" value="9" class="andar-checkbox" />
                            <label for="andar-9" class="flex-1 cursor-pointer">9</label>
                        </div>
                        <div class="dropdown-item">
                            <input type="checkbox" id="andar-10" value="10" class="andar-checkbox" />
                            <label for="andar-10" class="flex-1 cursor-pointer">10</label>
                        </div>
                        <div class="dropdown-item">
                            <input type="checkbox" id="andar-mais10" value="> 10" class="andar-checkbox" />
                            <label for="andar-mais10" class="flex-1 cursor-pointer">> 10</label>
                        </div>
                        <div class="dropdown-item">
                            <input type="checkbox" id="andar-aguas" value="Águas-furtadas" class="andar-checkbox" />
                            <label for="andar-aguas" class="flex-1 cursor-pointer">Águas-furtadas</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TIPO DE IMÓVEL - Dropdown com Checkboxes -->
            <div class="dropdown-button">
                <label class="block text-xs font-semibold text-gray-700 mb-2">Tipo de imóvel</label>
                <div class="relative">
                    <button type="button"
                        class="w-full px-4 py-2 border border-gray-400 rounded focus:outline-none focus:ring-2 focus:ring-blue-400 text-gray-700 text-left flex justify-between items-center dropdown-trigger"
                        data-dropdown="tipo-imovel">
                        <span id="tipo-imovel-text">qualquer</span>
                        <svg class="w-4 h-4 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div class="dropdown-menu" id="dropdown-tipo-imovel">
                        <div class="dropdown-item">
                            <input type="checkbox" id="tipo-bloco" value="Bloco de apartamentos"
                                class="tipo-imovel-checkbox" />
                            <label for="tipo-bloco" class="flex-1 cursor-pointer">Bloco de apartamentos</label>
                        </div>
                        <div class="dropdown-item">
                            <input type="checkbox" id="tipo-edificio" value="Edifício dividido em habitações"
                                class="tipo-imovel-checkbox" />
                            <label for="tipo-edificio" class="flex-1 cursor-pointer">Edifício dividido em
                                habitações</label>
                        </div>
                        <div class="dropdown-item">
                            <input type="checkbox" id="tipo-casa" value="Casa" class="tipo-imovel-checkbox" />
                            <label for="tipo-casa" class="flex-1 cursor-pointer">Casa</label>
                        </div>
                        <div class="dropdown-item">
                            <input type="checkbox" id="tipo-terreno" value="Terreno baldio"
                                class="tipo-imovel-checkbox" />
                            <label for="tipo-terreno" class="flex-1 cursor-pointer">Terreno baldio</label>
                        </div>
                        <div class="dropdown-item">
                            <input type="checkbox" id="tipo-moradia" value="Moradia em banda"
                                class="tipo-imovel-checkbox" />
                            <label for="tipo-moradia" class="flex-1 cursor-pointer">Moradia em banda</label>
                        </div>
                        <div class="dropdown-item">
                            <input type="checkbox" id="tipo-predio" value="Prédio" class="tipo-imovel-checkbox" />
                            <label for="tipo-predio" class="flex-1 cursor-pointer">Prédio</label>
                        </div>
                        <div class="dropdown-item">
                            <input type="checkbox" id="tipo-loft" value="Loft" class="tipo-imovel-checkbox" />
                            <label for="tipo-loft" class="flex-1 cursor-pointer">Loft</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TIPO DE ANUNCIANTE - Dropdown com Checkboxes -->
            <div class="dropdown-button">
                <label class="block text-xs font-semibold text-gray-700 mb-2">Tipo de anunciante</label>
                <div class="relative">
                    <button type="button"
                        class="w-full px-4 py-2 border border-gray-400 rounded focus:outline-none focus:ring-2 focus:ring-blue-400 text-gray-700 text-left flex justify-between items-center dropdown-trigger"
                        data-dropdown="tipo-anunciante">
                        <span id="tipo-anunciante-text">Todos</span>
                        <svg class="w-4 h-4 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div class="dropdown-menu" id="dropdown-tipo-anunciante">
                        <div class="dropdown-item">
                            <input type="checkbox" id="anunciante-agencia" value="Agência"
                                class="tipo-anunciante-checkbox" />
                            <label for="anunciante-agencia" class="flex-1 cursor-pointer">Agência</label>
                        </div>
                        <div class="dropdown-item">
                            <input type="checkbox" id="anunciante-privado" value="Privado"
                                class="tipo-anunciante-checkbox" />
                            <label for="anunciante-privado" class="flex-1 cursor-pointer">Privado</label>
                        </div>
                        <div class="dropdown-item">
                            <input type="checkbox" id="anunciante-profissionais"
                                value="Profissionais - Empreendimentos" class="tipo-anunciante-checkbox" />
                            <label for="anunciante-profissionais" class="flex-1 cursor-pointer">Profissionais -
                                Empreendimentos</label>
                        </div>
                        <div class="dropdown-item">
                            <input type="checkbox" id="anunciante-profissionais2" value="Profissionais"
                                class="tipo-anunciante-checkbox" />
                            <label for="anunciante-profissionais2"
                                class="flex-1 cursor-pointer">Profissionais</label>
                        </div>
                        <div class="dropdown-item">
                            <input type="checkbox" id="anunciante-particulares" value="Particulares"
                                class="tipo-anunciante-checkbox" />
                            <label for="anunciante-particulares" class="flex-1 cursor-pointer">Particulares</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- N.º de andares, Ano de construção, Nova construção -->
        <div class="grid grid-cols-3 gap-4 mb-4">
            <div>
                <label class="block text-xs font-semibold text-gray-700 mb-2">N.º de andares</label>
                <div class="flex gap-2">
                    <input type="text" placeholder="de"
                        class="flex-1 px-3 py-2 border border-gray-400 rounded text-sm focus:outline-none focus:ring-2 focus:ring-blue-400" />
                    <input type="text" placeholder="até"
                        class="flex-1 px-3 py-2 border border-gray-400 rounded text-sm focus:outline-none focus:ring-2 focus:ring-blue-400" />
                </div>
            </div>
            <div>
                <label class="block text-xs font-semibold text-gray-700 mb-2">Ano de construção</label>
                <div class="flex gap-2">
                    <input type="text" placeholder="de"
                        class="flex-1 px-3 py-2 border border-gray-400 rounded text-sm focus:outline-none focus:ring-2 focus:ring-blue-400" />
                    <input type="text" placeholder="até"
                        class="flex-1 px-3 py-2 border border-gray-400 rounded text-sm focus:outline-none focus:ring-2 focus:ring-blue-400" />
                </div>
            </div>
            <div>
                <label class="block text-xs font-semibold text-gray-700 mb-2">Nova construção</label>
                <select
                    class="w-full px-4 py-2 border border-gray-400 rounded focus:outline-none focus:ring-2 focus:ring-blue-400 text-gray-700">
                    <option>Sim</option>
                    <option>Não</option>
                </select>
            </div>
        </div>

        <!-- Preço por m², Material de construção, Parte da descrição -->
        <div class="grid grid-cols-3 gap-4 mb-4">
            <div>
                <label class="block text-xs font-semibold text-gray-700 mb-2">Preço por m²</label>
                <div class="flex gap-1 items-center">
                    <input type="text" placeholder="de"
                        class="flex-1 px-3 py-2 border border-gray-400 rounded text-sm focus:outline-none focus:ring-2 focus:ring-blue-400" />
                    <span class="text-gray-500 text-xs">€/m²</span>
                    <input type="text" placeholder="até"
                        class="flex-1 px-3 py-2 border border-gray-400 rounded text-sm focus:outline-none focus:ring-2 focus:ring-blue-400" />
                    <span class="text-gray-500 text-xs">€/m²</span>
                </div>
            </div>

            <!-- MATERIAL DE CONSTRUÇÃO - Dropdown com Checkboxes -->
            <div class="dropdown-button">
                <label class="block text-xs font-semibold text-gray-700 mb-2">Material de construção</label>
                <div class="relative">
                    <button type="button"
                        class="w-full px-4 py-2 border border-gray-400 rounded focus:outline-none focus:ring-2 focus:ring-blue-400 text-gray-700 text-left flex justify-between items-center dropdown-trigger"
                        data-dropdown="material">
                        <span id="material-text">qualquer</span>
                        <svg class="w-4 h-4 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div class="dropdown-menu" id="dropdown-material">
                        <div class="dropdown-item">
                            <input type="checkbox" id="material-tijolo" value="Tijolo" class="material-checkbox" />
                            <label for="material-tijolo" class="flex-1 cursor-pointer">Tijolo</label>
                        </div>
                        <div class="dropdown-item">
                            <input type="checkbox" id="material-madeira" value="Madeira"
                                class="material-checkbox" />
                            <label for="material-madeira" class="flex-1 cursor-pointer">Madeira</label>
                        </div>
                        <div class="dropdown-item">
                            <input type="checkbox" id="material-betao" value="Bloco de betão"
                                class="material-checkbox" />
                            <label for="material-betao" class="flex-1 cursor-pointer">Bloco de betão</label>
                        </div>
                        <div class="dropdown-item">
                            <input type="checkbox" id="material-argila" value="Argila expandida"
                                class="material-checkbox" />
                            <label for="material-argila" class="flex-1 cursor-pointer">Argila expandida</label>
                        </div>
                        <div class="dropdown-item">
                            <input type="checkbox" id="material-paineis" value="Blocos de painéis"
                                class="material-checkbox" />
                            <label for="material-paineis" class="flex-1 cursor-pointer">Blocos de painéis</label>
                        </div>
                        <div class="dropdown-item">
                            <input type="checkbox" id="material-betao2" value="Betão" class="material-checkbox" />
                            <label for="material-betao2" class="flex-1 cursor-pointer">Betão</label>
                        </div>
                        <div class="dropdown-item">
                            <input type="checkbox" id="material-silicato" value="Bloco de silicato"
                                class="material-checkbox" />
                            <label for="material-silicato" class="flex-1 cursor-pointer">Bloco de silicato</label>
                        </div>
                        <div class="dropdown-item">
                            <input type="checkbox" id="material-celular" value="Betão celular"
                                class="material-checkbox" />
                            <label for="material-celular" class="flex-1 cursor-pointer">Betão celular</label>
                        </div>
                        <div class="dropdown-item">
                            <input type="checkbox" id="material-outro" value="Outro" class="material-checkbox" />
                            <label for="material-outro" class="flex-1 cursor-pointer">Outro</label>
                        </div>
                        <div class="dropdown-item">
                            <input type="checkbox" id="material-armado" value="Betão armado"
                                class="material-checkbox" />
                            <label for="material-armado" class="flex-1 cursor-pointer">Betão armado</label>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <label class="block text-xs font-semibold text-gray-700 mb-2">Parte da descrição</label>
                <input type="text" placeholder=""
                    class="w-full px-4 py-2 border border-gray-400 rounded focus:outline-none focus:ring-2 focus:ring-blue-400 text-gray-700" />
            </div>
        </div>

        <!-- Data de criação -->
        <div class="mb-4">
            <label class="block text-xs font-semibold text-gray-700 mb-2">Data de criação</label>
            <div class="flex gap-8">
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="radio" name="data" value="qualquer" checked class="w-4 h-4 text-gray-700" />
                    <span class="text-sm text-gray-700">Qualquer</span>
                </label>
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="radio" name="data" value="24h" class="w-4 h-4 text-gray-700" />
                    <span class="text-sm text-gray-700">Últimas 24 horas</span>
                </label>
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="radio" name="data" value="3d" class="w-4 h-4 text-gray-700" />
                    <span class="text-sm text-gray-700">Últimos 3 dias</span>
                </label>
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="radio" name="data" value="7d" class="w-4 h-4 text-gray-700" />
                    <span class="text-sm text-gray-700">Últimos 7 dias</span>
                </label>
            </div>
        </div>

        <!-- Informações adicionais -->
        <div>
            <label class="block text-xs font-semibold text-gray-700 mb-2">Informações adicionais</label>
            <div class="flex flex-wrap gap-2">
                <button type="button" class="tag-button" data-tag="varanda">
                    Varanda
                </button>
                <button type="button" class="tag-button" data-tag="terraco">
                    Terraço
                </button>
                <button type="button" class="tag-button" data-tag="garagem">
                    Garagem
                </button>
                <button type="button" class="tag-button" data-tag="cave">
                    Cave
                </button>
                <button type="button" class="tag-button" data-tag="elevador">
                    Elevador
                </button>
                <button type="button" class="tag-button" data-tag="cozinha">
                    Cozinha separada
                </button>
                <button type="button" class="tag-button" data-tag="jardim">
                    Jardim
                </button>
                <button type="button" class="tag-button" data-tag="andares">
                    2 andares
                </button>
                <button type="button" class="tag-button" data-tag="fotografias">
                    Fotografias
                </button>
            </div>
        </div>
    </div>
</section>

<!-- SECÇÃO LISTAGEM DE IMÓVEIS -->
<section class="max-w-7xl mx-auto px-4 py-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-5">
        <div class="col-span-1 lg:col-span-9">
            <div class="w-full space-y-4">
                <div class="flex justify-between items-start gap-8 results-header-row">
                    <div class="flex-1">
                        <h1 class="text-2xl font-bold text-gray-900">
                            Casas e apartamentos novos: Todo o país
                        </h1>
                        <p class="text-sm text-gray-600 mt-2">
                            1-36 de 25660 anúncios
                        </p>
                    </div>
                    <div class="flex items-center gap-2">
                        <label class="block font-medium text-gray-500" for="name">Ordernar <br>por: </label>
                        <select name="order_by" id="" class="px-4 py-4 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white cursor-pointer sort-select-mobile">
                            <option>Predefinição</option>
                            <option>Data do anúncio: mais recentes</option>
                            <option>Data do anúncio: mais antiga</option>
                            <option>Preço: mais baixo</option>
                            <option>Preço: mais alto</option>
                            <option>Área: menor</option>
                            <option>Área: maior</option>
                        </select>
                    </div>
                </div>
                <div class="flex justify-between items-center mb-3">
                    <h2 class="text-2xl font-bold text-gray-900">Anúncios destacados</h2>
                    <a href="<?= base_url('imoveis-destacados') ?>" class="text-gray-600 underline hover:text-gray-700 text-sm">Ver todos</a>
                </div>

                <?= $cards ?>

            </div>
            <div class="w-full space-y-4 mt-6">
                <div class="flex justify-between items-center mb-3">
                    <h2 class="text-2xl font-bold text-gray-900">Todos imóveis</h2>
                </div>

                <?= $cards ?>

            </div>
        </div>
        <div class="col-span-1 lg:col-span-3">
            <div class="w-full space-y-6">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Empreendimentos destacados</h3>
                <?= $cards ?>
            </div>
        </div>

    </div>

</section>

<script>
    <?php
    $allCarousels = [];

    foreach ($properties as $property) {
        $id = $property['id'];
        $gallery = $property['gallery'];
        $allCarousels[$id] = [
            'images' => array_column($gallery, 'url'),
            'current' => 0
        ];
    }
    ?>

    const carousels = <?= json_encode($allCarousels, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>;

    function updateCarousel(id) {
        const data = carousels[id];
        if (!data) return;

        const divImg = document.getElementById(`card-${id}-img`);
        const counterEl = document.getElementById(`${id}-count`);

        if (divImg) divImg.style.backgroundImage = `url(${data.images[data.current]})`;
        if (counterEl) counterEl.textContent = `${data.current + 1}`;
    }

    function nextCard(id) {
        const data = carousels[id];
        if (!data) return;
        data.current = (data.current + 1) % data.images.length;
        updateCarousel(id);
    }

    function prevCard(id) {
        const data = carousels[id];
        if (!data) return;
        data.current = (data.current - 1 + data.images.length) % data.images.length;
        updateCarousel(id);
    }
</script>

<?= $this->endSection() ?>