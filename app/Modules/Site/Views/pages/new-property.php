<?= $this->extend('Site\Views\layouts\master') ?>

<?= $this->section('new_property_css') ?>
<style>
    /* Estilo para a cor de fundo da div profissional */
    .professional-bg {
        background-color: #1c2637;
    }

    /* Estilo para a borda preta quando o card for selecionado */
    .card-selected {
        border: 2px solid black;
    }

    /* **SOLUÇÃO DEFINITIVA PARA O SCROLL** */
    /* 1. Garantir que o HTML e o BODY ocupem 100% da viewport */
    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
    }

    /* 2. Usar Flexbox no body para empilhar o conteúdo e o "rodapé" */
    body {
        display: flex;
        flex-direction: column;
        background-color: #f2f3f6;
        /* Cor de fundo alterada */
    }

    /* 3. Fazer com que o container principal ocupe o espaço restante */
    .main-content-container {
        /* flex-grow: 1 faz com que esta div se expanda para preencher o espaço restante */
        flex-grow: 1;
        /* min-h-screen removido para evitar forçar altura mínima */
        padding-bottom: 0;
        /* Remove padding-bottom desnecessário */
    }

    /* 4. Ajustar o espaçamento do botão para ser mínimo */
    .continue-button-container {
        margin-top: 2rem;
        /* Espaço após o conteúdo "Tipo de Imóvel" */
        /* Removido margin-bottom: 0 para permitir que a classe mb-8 funcione */
    }

    /* 5. Garantir que o "rodapé" não tenha margem superior */
    .professional-footer {
        margin-top: 0;
    }

    /* Estilos para mobile */
    @media (max-width: 640px) {

        /* Botão fixo na parte inferior */
        .mobile-continue-button {
            position: relative;
            bottom: auto;
            left: auto;
            right: auto;
            background-color: white;
            padding: 1rem;
            margin-top: 2rem;
            margin-bottom: 2rem;
            z-index: 50;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Botão fixo quando a seção profissional não está visível */
        .mobile-continue-button.is-fixed {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
            margin-top: 0;
            margin-bottom: 0;
        }

        /* Esconder o botão original em mobile */
        .desktop-continue-button {
            display: none;
        }

        /* Ajustar o container principal para não ficar atrás do botão fixo */
        .main-content-container {
            padding-bottom: 0;
            /* Removido padding para o botão fixo */
        }

        /* Layout em bloco para os cards */
        .mobile-card-layout {
            display: block !important;
        }

        .mobile-card-layout>div {
            width: 100% !important;
            margin-bottom: 1rem;
        }

        /* Cards retangulares com ícone e texto em linha */
        .property-card {
            display: flex !important;
            flex-direction: row !important;
            align-items: center !important;
            justify-content: flex-start !important;
            padding: 1rem !important;
            min-height: auto !important;
            height: 80px !important;
        }

        .property-card>div:first-child {
            margin-bottom: 0 !important;
            margin-right: 1rem !important;
        }
    }

    /* Estilos para desktop */
    @media (min-width: 641px) {

        /* Esconder o botão fixo em desktop */
        .mobile-continue-button {
            display: none;
        }

        /* Mostrar o botão original em desktop */
        .desktop-continue-button {
            display: block;
        }
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('new_property') ?>

<section>
    <!-- Conteúdo principal -->
    <!-- Aplicando as classes Flexbox e removendo min-h-screen -->
    <div id="imovel-main-content" class="main-content-container pt-12 px-4">
        <div class="max-w-4xl mx-auto">
            <!-- Título -->
            <h1 class="text-4xl font-bold text-gray-900 mb-8">Adicionar Anúncio</h1>

            <!-- Filter Tag -->
            <div id="imovel-filter-tag" class="text-lg font-medium text-blue-600 mb-4 h-6"></div>

            <!-- Radio Options -->
            <div class="space-y-4 mb-12">
                <label class="flex items-center p-4 border border-gray-200 rounded-lg cursor-pointer bg-white">
                    <input type="radio" name="imovel-property-action" value="vender" class="w-4 h-4 text-blue-600" />
                    <span class="ml-3 text-lg font-medium text-gray-900">Vender</span>
                </label>
                <label class="flex items-center p-4 border border-gray-200 rounded-lg cursor-pointer bg-white">
                    <input type="radio" name="imovel-property-action" value="arrendar" class="w-4 h-4 text-blue-600" />
                    <span class="ml-3 text-lg font-medium text-gray-900">Arrendar</span>
                </label>
            </div>

            <!-- Tipo de Imóvel -->
            <div id="imovel-property-type-section" class="hidden">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Tipo de imóvel</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4 mobile-card-layout" id="imovel-first-row"></div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mobile-card-layout" id="imovel-second-row"></div>
            </div>

            <!-- Botão Continuar (Desktop) -->
            <!-- Aplicando a classe de container ajustada -->
            <div class="continue-button-container mb-8 desktop-continue-button">
                <button id="imovel-continue-button" disabled class="px-6 py-3 bg-cyan-500 text-white font-semibold rounded-lg hover:bg-cyan-600 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-opacity-75 disabled:bg-gray-400 disabled:opacity-100 transition">
                    Continuar
                </button>
            </div>
        </div>
    </div>

    <!-- Botão Continuar (Mobile) -->
    <div id="imovel-mobile-continue-container" class="mobile-continue-button">
        <button id="imovel-mobile-continue-button" disabled class="px-6 py-3 bg-cyan-500 text-white font-semibold rounded-lg hover:bg-cyan-600 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-opacity-75 disabled:bg-gray-400 disabled:opacity-100 transition w-full max-w-md">
            Continuar
        </button>
    </div>

    <!-- Div Profissionais -->
    <!-- Aplicando a classe de rodapé ajustada -->
    <div id="imovel-professional-section" class="professional-bg w-full py-16 professional-footer">
        <div class="max-w-4xl mx-auto text-center text-white px-4">
            <h2 class="text-3xl font-bold mb-4">É um Profissional?</h2>
            <button class="px-8 py-3 mb-0 border border-white text-white font-semibold rounded-lg hover:bg-white hover:text-cyan-500 transition">
                Iniciar sessão
            </button>
            <p class="text-xl font-bold mt-2">
                Ainda não tem conta no Imovirtual?
            </p>
            <p class="text-lg mt-1">
                <a href="#" class="underline font-semibold hover:text-cyan-400">Verifique</a>
                <span class="text-gray-300">a nossa oferta para profissionais</span>
            </p>
        </div>
    </div>
</section>

<script>
    // Script 4: Seleção de Imóveis - VERSÃO CORRIGIDA PARA SEU HTML
    (function() {
        const imovelIcons = {
            "Building": '<i data-lucide="building" class="w-8 h-8"></i>',
            "Home": '<i data-lucide="home" class="w-8 h-8"></i>',
            "Trees": '<i data-lucide="trees" class="w-8 h-8"></i>',
            "Store": '<i data-lucide="store" class="w-8 h-8"></i>',
            "Factory": '<i data-lucide="factory" class="w-8 h-8"></i>',
            "Warehouse": '<i data-lucide="warehouse" class="w-8 h-8"></i>',
            "Sofa": '<i data-lucide="sofa" class="w-8 h-8"></i>'
        };

        const imovelVenderCategories = [{
                id: "apartamentos",
                icon: "Building",
                label: "Apartamentos",
                color: "text-blue-500"
            },
            {
                id: "moradias",
                icon: "Home",
                label: "Moradias",
                color: "text-red-500"
            },
            {
                id: "terrenos",
                icon: "Trees",
                label: "Terrenos",
                color: "text-purple-500"
            },
            {
                id: "comerciais",
                icon: "Store",
                label: "Imóveis comerciais",
                color: "text-slate-600"
            },
            {
                id: "armazem",
                icon: "Factory",
                label: "Armazém",
                color: "text-orange-500"
            },
            {
                id: "garagens",
                icon: "Warehouse",
                label: "Garagens",
                color: "text-cyan-500"
            }
        ];

        const imovelArrendaCategories = [{
                id: "apartamentos",
                icon: "Building",
                label: "Apartamentos",
                color: "text-blue-500"
            },
            {
                id: "moradias",
                icon: "Home",
                label: "Moradias",
                color: "text-red-500"
            },
            {
                id: "quartos",
                icon: "Sofa",
                label: "Quartos",
                color: "text-pink-500"
            },
            {
                id: "terrenos",
                icon: "Trees",
                label: "Terrenos",
                color: "text-purple-500"
            },
            {
                id: "comerciais",
                icon: "Store",
                label: "Imóveis comerciais",
                color: "text-slate-600"
            },
            {
                id: "armazem",
                icon: "Factory",
                label: "Armazém",
                color: "text-orange-500"
            },
            {
                id: "garagens",
                icon: "Warehouse",
                label: "Garagens",
                color: "text-cyan-500"
            }
        ];

        let imovelSelectedCategory = null;

        function createPropertyCard(category) {
            const iconHtml = imovelIcons[category.icon];
            return `<div 
                class="imovel-property-card bg-white rounded-lg p-6 cursor-pointer flex flex-col items-center justify-center min-h-[160px] border-2 border-transparent hover:border-gray-200 transition-all duration-200 shadow-sm"
                data-category-id="${category.id}"
                data-category-label="${category.label}"
            >
                <div class="${category.color} mb-3">${iconHtml}</div>
                <p class="text-center text-gray-900 font-medium">${category.label}</p>
            </div>`;
        }

        function updatePropertyList() {
            const selectedRadio = document.querySelector('input[name="imovel-property-action"]:checked');
            const propertyTypeSection = document.getElementById('imovel-property-type-section');
            const firstRow = document.getElementById('imovel-first-row');
            const secondRow = document.getElementById('imovel-second-row');

            if (!selectedRadio || !propertyTypeSection || !firstRow || !secondRow) {
                console.error('Elementos não encontrados no DOM');
                return;
            }

            // Mostrar a seção de tipos de propriedade
            propertyTypeSection.classList.remove('hidden');

            // Determinar quais categorias mostrar baseado na seleção
            const categories = selectedRadio.value === "vender" ? imovelVenderCategories : imovelArrendaCategories;

            // Preencher as linhas com os cards
            firstRow.innerHTML = categories.slice(0, 4).map(createPropertyCard).join('');
            secondRow.innerHTML = categories.slice(4).map(createPropertyCard).join('');

            // Re-aplicar event listeners aos novos cards
            attachCardEventListeners();

            // Resetar seleção
            imovelSelectedCategory = null;

            // Atualizar estados dos botões
            const continueButton = document.getElementById('imovel-continue-button');
            const mobileContinueButton = document.getElementById('imovel-mobile-continue-button');
            if (continueButton) continueButton.disabled = true;
            if (mobileContinueButton) mobileContinueButton.disabled = true;

            updateFilterTag();

            // Atualizar ícones Lucide
            if (window.lucide && typeof window.lucide.createIcons === 'function') {
                window.lucide.createIcons();
            }
        }

        function attachCardEventListeners() {
            document.querySelectorAll('.imovel-property-card').forEach(card => {
                card.addEventListener('click', function() {
                    selectCategory(this, this.getAttribute('data-category-label'));
                });
            });
        }

        function selectCategory(cardElement, categoryLabel) {
            // Remover seleção de todos os cards
            document.querySelectorAll('.imovel-property-card').forEach(card => {
                card.classList.remove('border-blue-500', 'bg-blue-50', 'shadow-md');
                card.classList.add('border-transparent');
            });

            // Adicionar seleção ao card clicado
            cardElement.classList.add('border-blue-500', 'bg-blue-50', 'shadow-md');
            cardElement.classList.remove('border-transparent');

            imovelSelectedCategory = categoryLabel;

            // Habilitar botões
            const continueButton = document.getElementById('imovel-continue-button');
            const mobileContinueButton = document.getElementById('imovel-mobile-continue-button');
            if (continueButton) continueButton.disabled = false;
            if (mobileContinueButton) mobileContinueButton.disabled = false;

            console.log('Categoria selecionada:', categoryLabel);
        }

        function updateFilterTag() {
            const filterTagElement = document.getElementById('imovel-filter-tag');
            const selectedRadio = document.querySelector('input[name="imovel-property-action"]:checked');
            if (filterTagElement && selectedRadio) {
                const actionText = selectedRadio.value === "vender" ? "Vender" : "Arrendar";
                filterTagElement.textContent = actionText;
            }
        }

        function handleScroll() {
            if (window.innerWidth <= 640) {
                const professionalSection = document.getElementById('imovel-professional-section');
                const mobileContinueButtonContainer = document.getElementById('imovel-mobile-continue-container');

                if (professionalSection && mobileContinueButtonContainer) {
                    const rect = professionalSection.getBoundingClientRect();

                    // Se a seção profissional não estiver visível, fixar o botão
                    if (rect.top >= window.innerHeight || rect.bottom <= 0) {
                        mobileContinueButtonContainer.classList.add('fixed', 'bottom-0', 'left-0', 'right-0', 'p-4', 'bg-white', 'border-t', 'border-gray-200', 'shadow-lg');
                        mobileContinueButtonContainer.classList.remove('mobile-continue-button');
                    } else {
                        mobileContinueButtonContainer.classList.remove('fixed', 'bottom-0', 'left-0', 'right-0', 'p-4', 'bg-white', 'border-t', 'border-gray-200', 'shadow-lg');
                        mobileContinueButtonContainer.classList.add('mobile-continue-button');
                    }
                }
            } else {
                // Em desktop, garantir que o botão móvel volte ao normal
                const mobileContinueButtonContainer = document.getElementById('imovel-mobile-continue-container');
                if (mobileContinueButtonContainer) {
                    mobileContinueButtonContainer.classList.remove('fixed', 'bottom-0', 'left-0', 'right-0', 'p-4', 'bg-white', 'border-t', 'border-gray-200', 'shadow-lg');
                    mobileContinueButtonContainer.classList.add('mobile-continue-button');
                }
            }
        }

        // Inicialização quando o DOM estiver pronto
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Script de propriedades inicializado');

            // Adicionar eventos de change aos radio buttons
            const radioButtons = document.querySelectorAll('input[name="imovel-property-action"]');
            radioButtons.forEach(radio => {
                radio.addEventListener('change', updatePropertyList);
            });

            // Inicializar o estado
            const propertyTypeSection = document.getElementById('imovel-property-type-section');
            if (propertyTypeSection) propertyTypeSection.classList.add('hidden');

            // Inicializar botões como desabilitados
            const continueButton = document.getElementById('imovel-continue-button');
            const mobileContinueButton = document.getElementById('imovel-mobile-continue-button');
            if (continueButton) continueButton.disabled = true;
            if (mobileContinueButton) mobileContinueButton.disabled = true;

            // Atualizar ícones Lucide
            if (window.lucide && typeof window.lucide.createIcons === 'function') {
                window.lucide.createIcons();
            }

            // Adicionar eventos de scroll
            window.addEventListener('scroll', handleScroll);
            window.addEventListener('resize', handleScroll);

            // Verificar inicialmente
            handleScroll();
        });

        // Expor funções globalmente se necessário
        window.selectCategory = selectCategory;
        window.updatePropertyList = updatePropertyList;

    })();
</script>

<?= $this->endSection() ?>