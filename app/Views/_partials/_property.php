<?= $this->extend("master") ?>

<?= $this->section("property_details_css") ?>
<style>
    .zoom-container {
        transform: scale(0.85);
        transform-origin: top center;
        width: 100%;
    }

    /* Estilos para o carrossel mobile */
    .carousel-container {
        position: relative;
        overflow: hidden;
    }

    .carousel-slide {
        display: none;
        width: 100%;
        height: 300px;
    }

    .carousel-slide.active {
        display: block;
    }

    .carousel-slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .carousel-indicators {
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 8px;
    }

    .indicator {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.5);
        cursor: pointer;
    }

    .indicator.active {
        background-color: white;
    }

    /* Estilos para o swipe dos anúncios semelhantes */
    .similar-ads-container {
        overflow-x: auto;
        overflow-y: hidden;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none;
        /* Firefox */
        -ms-overflow-style: none;
        /* IE 10+ */
        padding-bottom: 10px;
    }

    .similar-ads-container::-webkit-scrollbar {
        display: none;
        /* Chrome, Safari, Opera */
    }

    .similar-ad-item {
        display: inline-block;
        width: 280px;
        white-space: normal;
        vertical-align: top;
        margin-right: 16px;
    }

    .similar-ad-item:last-child {
        margin-right: 0;
    }

    /* Estilo para o overlay sempre visível */
    .overlay-always-visible {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0, 0, 0, 0.7);
        padding: 12px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .overlay-always-visible a {
        text-decoration: none;
    }

    .overlay-always-visible .overlay-button {
        background-color: rgba(59, 130, 246, 0.9);
        color: white;
        font-weight: 600;
        padding: 8px 16px;
        border-radius: 8px;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .overlay-always-visible .overlay-button:hover {
        background-color: rgba(37, 99, 235, 1);
        transform: translateY(-2px);
    }

    /* Media queries para mobile e tablet (768px) */
    @media (max-width: 768px) {
        .zoom-container {
            transform: none;
        }

        /* Layout em bloco para todas as seções */
        .md\:w-3\/4,
        .md\:w-1\/4 {
            width: 100% !important;
        }

        .flex-col.md\:flex-row {
            flex-direction: column !important;
        }

        /* Ajustes para o carrossel */
        .grid-cols-1.md\:grid-cols-12 {
            grid-template-columns: 1fr !important;
        }

        .md\:col-span-6 {
            grid-column: span 1 !important;
        }

        /* Garantir que o carrossel mobile seja visível */
        .md\:hidden {
            display: block !important;
        }

        /* Esconder a versão desktop */
        .hidden.md\:block {
            display: none !important;
        }

        /* Ajustes para os anúncios semelhantes */
        .similar-ads-grid {
            display: block !important;
        }

        .similar-ads-grid>div {
            display: inline-block !important;
            width: 280px !important;
            margin-right: 16px !important;
            vertical-align: top !important;
        }

        .similar-ads-grid>div:last-child {
            margin-right: 0 !important;
        }

        /* NOVO: Ajuste para garantir que o mapa e o formulário fiquem em bloco e 100% de largura */
        .md\:flex-row>.md\:w-3\/4,
        .md\:flex-row>.md\:w-1\/4 {
            width: 100% !important;
            display: block !important;
            /* Garante que o conteúdo dentro da coluna se comporte como bloco se necessário */
        }
    }

    /* NOVO: Media query específica para 768px para garantir o empilhamento e 100% de largura */
    @media (min-width: 768px) and (max-width: 1023px) {

        /* As classes md:w-3/4 e md:w-1/4 já são aplicadas em 768px, mas vamos garantir o empilhamento */
        .md\:flex-row {
            flex-direction: column !important;
        }

        .md\:w-3\/4,
        .md\:w-1\/4 {
            width: 100% !important;
        }
    }

    /* Fim dos novos ajustes */
    .zoom-container {
        transform: none;
    }

    .flex-col.md\\:flex-row {
        flex-direction: column !important;
    }

    /* Ajustes para o carrossel */
    .grid-cols-1.md\\:grid-cols-12 {
        grid-template-columns: 1fr !important;
    }

    .md\\:col-span-6 {
        grid-column: span 1 !important;
    }

    /* Garantir que o carrossel mobile seja visível */
    .md\\:hidden {
        display: block !important;
    }

    /* Esconder a versão desktop */
    .hidden.md\\:block {
        display: none !important;
    }

    /* Ajustes para os anúncios semelhantes */
    .similar-ads-grid {
        display: block !important;
    }

    .similar-ads-grid>div {
        display: inline-block !important;
        width: 280px !important;
        margin-right: 16px !important;
        vertical-align: top !important;
    }

    .similar-ads-grid>div:last-child {
        margin-right: 0 !important;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section("property_details_js") ?>
<script>
    // Script 2: Toggle de Conteúdo e Carrossel Mobile
    document.addEventListener('DOMContentLoaded', function() {
        // Função para alternar a visibilidade do conteúdo oculto
        const toggleButtons = document.querySelectorAll('.car_toggle-content');

        toggleButtons.forEach(button => {
            button.addEventListener('click', function() {
                const contentId = this.getAttribute('data-target');
                const content = document.getElementById(contentId);
                const icon = this.querySelector('i');

                if (content.classList.contains('hidden')) {
                    content.classList.remove('hidden');
                    icon.classList.remove('fa-chevron-down');
                    icon.classList.add('fa-chevron-up');
                } else {
                    content.classList.add('hidden');
                    icon.classList.remove('fa-chevron-up');
                    icon.classList.add('fa-chevron-down');
                }
            });
        });

        // Carrossel para mobile
        if (window.innerWidth <= 768) {
            const slides = document.querySelectorAll('.car_carousel-slide');
            const indicators = document.querySelectorAll('.car_indicator');
            let currentSlide = 0;
            let autoplayInterval;

            // Mostrar o primeiro slide
            if (slides.length > 0) {
                slides[0].classList.add('active');
            }
            if (indicators.length > 0) {
                indicators[0].classList.add('active');
            }

            // Função para mostrar um slide específico
            function car_showSlide(index) {
                if (slides.length === 0) return;

                slides.forEach(slide => slide.classList.remove('active'));
                indicators.forEach(indicator => indicator.classList.remove('active'));

                slides[index].classList.add('active');
                indicators[index].classList.add('active');
                currentSlide = index;
            }

            // Função para avançar para o próximo slide
            function car_nextSlide() {
                if (slides.length === 0) return;
                const nextIndex = (currentSlide + 1) % slides.length;
                car_showSlide(nextIndex);
            }

            // Iniciar autoplay
            function car_startAutoplay() {
                if (slides.length <= 1) return;
                autoplayInterval = setInterval(car_nextSlide, 5000); // Muda a cada 5 segundos
            }

            // Parar autoplay
            function car_stopAutoplay() {
                clearInterval(autoplayInterval);
            }

            // Reiniciar autoplay após interação
            function car_restartAutoplay() {
                car_stopAutoplay();
                car_startAutoplay();
            }

            // Adicionar evento de clique aos indicadores
            indicators.forEach((indicator, index) => {
                indicator.addEventListener('click', () => {
                    car_showSlide(index);
                    car_restartAutoplay();
                });
            });

            // Adicionar evento de swipe
            let touchStartX = 0;
            let touchEndX = 0;

            const carouselContainer = document.querySelector('.car_carousel-container');

            if (carouselContainer) {
                carouselContainer.addEventListener('touchstart', e => {
                    touchStartX = e.changedTouches[0].screenX;
                    car_stopAutoplay(); // Pausar autoplay durante o swipe
                });

                carouselContainer.addEventListener('touchend', e => {
                    touchEndX = e.changedTouches[0].screenX;
                    car_handleSwipe();
                    car_restartAutoplay(); // Reiniciar autoplay após o swipe
                });
            }

            function car_handleSwipe() {
                if (touchEndX < touchStartX - 50) {
                    // Swipe para a esquerda
                    const nextSlide = (currentSlide + 1) % slides.length;
                    car_showSlide(nextSlide);
                }

                if (touchEndX > touchStartX + 50) {
                    // Swipe para a direita
                    const prevSlide = (currentSlide - 1 + slides.length) % slides.length;
                    car_showSlide(prevSlide);
                }
            }

            // Iniciar o autoplay quando a página carregar
            car_startAutoplay();

            // Pausar autoplay quando o usuário interage com o carrossel
            if (carouselContainer) {
                carouselContainer.addEventListener('mouseenter', car_stopAutoplay);
                carouselContainer.addEventListener('mouseleave', car_startAutoplay);
            }
        }
    });
</script>
<?= $this->endSection() ?>

<?= $this->section("property_details") ?>
<main class="bg-[#f2f3f6] min-h-screen">
    <!-- Container principal com zoom aplicado -->
    <div class="zoom-container">
        <!-- Seção do Galeria de Imóveis -->
        <section class="py-6">
            <div class="container mx-auto px-4">
                <!-- Botão Voltar -->
                <div class="mb-6">
                    <a href="<?= previous_url(); ?>" class="w-27 block text-blue-600 hover:text-blue-800 font-medium border py-2 px-5 rounded">
                        <i class="bi bi-arrow-left"></i> Voltar
                    </a>
                </div>

                <!-- Galeria de Imagens - Layout Original 50%/50% -->
                <?=  $images ?>
            </div>
        </section>

        <!-- PRIMEIRA LINHA DE BOXES ABAIXO DA GALERIA - 75%/25% -->
        <section class="py-6">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row gap-6">
                    <!-- Coluna Esquerda (75%) - Duas boxes -->
                    <div class="md:w-3/4">
                        <!-- Box "Aluga-se Pavilhão Amadora" -->
                        <div class="bg-white rounded-lg p-4 shadow-sm mb-6">
                            <div class="flex justify-between items-start">
                                <div class="flex-1">
                                    <h2 class="text-lg font-bold text-gray-800"><?= $title ?></h2>
                                    <p class="text-2xl font-semibold text-black-600 mt-1"><?= $price ?></p>
                                    <p class="text-sm text-gray-600 mt-2"><?= $address ?></p>
                                </div>
                                <div class="flex space-x-3 ml-4">
                                    <button class="text-gray-700 hover:text-gray-900">
                                        <i class="far fa-share-square text-xl"></i>
                                    </button>
                                    <button class="text-gray-700 hover:text-gray-900 relative">
                                        <i class="far fa-heart text-xl"></i>
                                        <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">1</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Box "Navilhão/armazém para arrendar" -->
                        <div class="bg-white rounded-lg p-4 py-6 shadow-sm">
                            <h3 class="text-lg font-bold text-gray-800 mb-4 border-b border-gray-200 pb-2">Navilhão/armazém para arrendar</h3>

                            <!-- Informações com bordas -->
                            <div class="space-y-3">
                                <!-- Área útil -->
                                <div class="border-b border-gray-200 pb-3">
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Área útil</span>
                                        <span class="font-medium">1.000 m²</span>
                                    </div>
                                </div>

                                <!-- Tipo de imóvel -->
                                <div class="border-b border-gray-200 pb-3">
                                    <div class="flex justify-between items-start">
                                        <span class="text-gray-600">Tipo de imóvel</span>
                                        <div class="flex flex-wrap gap-1 justify-end">
                                            <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">Armazém</span>
                                            <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">Escritório</span>
                                            <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">Retalho</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Estado -->
                                <div class="border-b border-gray-200 pb-3">
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Estado</span>
                                        <span class="font-medium">pronto a habitar</span>
                                    </div>
                                </div>

                                <!-- Anunciante -->
                                <div class="border-b border-gray-200 pb-3">
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Anunciante</span>
                                        <span class="font-medium">profissional</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Seções expansíveis -->
                            <div class="mt-4 space-y-3">
                                <!-- Edifício e materiais -->
                                <div class="border border-gray-200 rounded-lg">
                                    <button class="toggle-content w-full flex justify-between items-center p-3 text-left" data-target="building-content">
                                        <span class="font-medium">Edifício e materiais</span>
                                        <i class="fas fa-chevron-down text-gray-500"></i>
                                    </button>
                                    <div id="building-content" class="hidden p-3 pt-0 border-t border-gray-200">
                                        <div class="space-y-2">
                                            <div class="flex justify-between">
                                                <span class="text-gray-600">Tipo de edifício</span>
                                                <span>Industrial</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span class="text-gray-600">Ano de construção</span>
                                                <span>2010</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span class="text-gray-600">Número de pisos</span>
                                                <span>1</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span class="text-gray-600">Estrutura</span>
                                                <span>Betão armado</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Serviços Públicos e Segurança -->
                                <div class="border border-gray-200 rounded-lg">
                                    <button class="toggle-content w-full flex justify-between items-center p-3 text-left" data-target="services-content">
                                        <span class="font-medium">Serviços Públicos e Segurança</span>
                                        <i class="fas fa-chevron-down text-gray-500"></i>
                                    </button>
                                    <div id="services-content" class="hidden p-3 pt-0 border-t border-gray-200">
                                        <div class="space-y-2">
                                            <div class="flex justify-between">
                                                <span class="text-gray-600">Água</span>
                                                <span>Sim</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span class="text-gray-600">Eletricidade</span>
                                                <span>Sim</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span class="text-gray-600">Gás</span>
                                                <span>Sim</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span class="text-gray-600">Sistema de alarme</span>
                                                <span>Sim</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span class="text-gray-600">Vigilância 24h</span>
                                                <span>Sim</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Coluna Direita (25%) - Formulário -->
                    <div class="md:w-1/4">
                        <div class="bg-white rounded-lg p-4 shadow-sm">
                            <div class="mb-4">
                                <h3 class="text-lg font-semibold text-gray-800">Tiago Martins</h3>
                                <p class="text-sm text-gray-600">Anúncio Profissional</p>
                                <button class="text-blue-600 hover:text-blue-800 text-sm font-medium mt-1 flex items-center">
                                    <i class="fas fa-phone-alt mr-1"></i>
                                    Mostrar número
                                </button>
                            </div>

                            <form class="space-y-3">
                                <!-- Nome -->
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nome*</label>
                                    <input type="text" id="name" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm" required>
                                </div>

                                <!-- Email -->
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email*</label>
                                    <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm" required>
                                </div>

                                <!-- Telefone com dois campos -->
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Número de telemóvel*</label>
                                    <div class="flex space-x-2">
                                        <div class="w-1/3">
                                            <input type="text" id="phone-code" name="phone-code" placeholder="+351" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm">
                                        </div>
                                        <div class="w-2/3">
                                            <input type="tel" id="phone" name="phone" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm" required>
                                        </div>
                                    </div>
                                </div>

                                <!-- Mensagem -->
                                <div>
                                    <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Mensagem</label>
                                    <textarea id="message" name="message" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm">Este armazém para arrendar parece-me interessante. Gostaria de saber mais detalhes. Por favor, contacte-me. Cumprimentos.</textarea>
                                </div>

                                <!-- Botões - AGORA EM BLOCO COM SEPARADOR -->
                                <div class="space-y-4">
                                    <!-- Primeiro botão - Preto -->
                                    <button type="submit" class="w-full bg-black hover:bg-gray-800 text-white font-medium py-3 px-4 rounded-md transition duration-300 text-sm">
                                        Enviar mensagem
                                    </button>

                                    <!-- Separador "ou" -->
                                    <div class="relative flex items-center">
                                        <div class="flex-grow border-t border-gray-300"></div>
                                        <span class="flex-shrink mx-4 text-gray-500 text-sm">ou</span>
                                        <div class="flex-grow border-t border-gray-300"></div>
                                    </div>

                                    <!-- Segundo botão - Cor do fundo da página -->
                                    <button type="button" class="w-full bg-[#f2f3f6] hover:bg-gray-200 text-gray-700 font-medium py-3 px-4 rounded-md transition duration-300 text-sm flex items-center justify-center border border-gray-300">
                                        <i class="fas fa-phone-alt mr-2"></i>
                                        Mostrar número
                                    </button>
                                </div>
                            </form>

                            <!-- Informações de privacidade -->
                            <p class="text-xs text-gray-500 mt-3">Ao enviar esta mensagem, autoriza o Idealista a partilhar os seus dados com o anunciante para que este possa contactá-lo. Os seus dados serão tratados de acordo com a nossa Política de Privacidade.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SEGUNDA SEÇÃO - Resto das boxes - 75%/25% -->
        <section class="py-6">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row gap-6">
                    <!-- Coluna Esquerda (75%) - Resto das boxes -->
                    <div class="md:w-3/4">
                        <!-- Box Descrição -->
                        <div class="bg-white rounded-lg p-4 shadow-sm mb-6">
                            <h3 class="text-lg font-bold text-gray-800 mb-4">Descrição</h3>

                            <!-- Parágrafo inicial -->
                            <p class="text-gray-600 mb-4">
                                Aluga-se armazém com 1000m², com escritórios, WC e cozinha.
                            </p>

                            <!-- Lista com traços -->
                            <ul class="list-disc pl-5 space-y-2 text-gray-600 mb-4">
                                <li>5 minutos do Colombo</li>
                                <li>5 minutos da CREL</li>
                                <li>5 minutos da CRIL</li>
                            </ul>

                            <!-- Texto sobre facilidade -->
                            <p class="text-gray-600 mb-4">
                                Facilidade em descarregar camiões
                            </p>

                            <!-- Localização -->
                            <p class="text-gray-600 mb-4">
                                Localização: Moinhos da Funcheira
                            </p>

                            <!-- Linha horizontal -->
                            <div class="border-t border-gray-200 my-4"></div>

                            <!-- ID e Reportar -->
                            <div class="flex justify-between items-center">
                                <div class="text-sm text-gray-500">
                                    ID: 18893629
                                </div>
                                <button class="text-gray-500 hover:text-gray-700 text-sm flex items-center">
                                    <i class="fas fa-flag mr-1"></i>
                                    Reportar
                                </button>
                            </div>
                        </div>

                        <!-- Box Mini Box -->
                        <div class="bg-blue-50 rounded-lg p-4 shadow-sm mb-6">
                            <i class="far fa-eye mr-2"></i>
                            <h3 class="text-lg font-bold text-gray-800 mb-4">Quer estar a par de imóveis semelhantes?</h3>
                            <div class="flex justify-between items-center">
                                <div class="text-sm text-gray-600">
                                    <p>Ative as notificações e não perca um negócio</p>
                                    <p class="mt-1">Será informado quando houver alterações de preço ou novas informações</p>
                                </div>
                                <button class="border border-black text-black bg-transparent hover:bg-gray-100 text-sm font-medium py-2 px-4 rounded-md transition duration-300 flex items-center">
                                    Notificar-me sobre assuntos semelhantes
                                </button>
                            </div>
                        </div>

                        <!-- Box Histórico e Estatísticas -->
                        <div class="bg-white rounded-lg p-4 shadow-sm mb-6">
                            <h3 class="text-lg font-bold text-gray-800 mb-4">Histórico e estatísticas</h3>

                            <!-- Data de atualização -->
                            <div class="text-sm text-gray-500 mb-4">
                                Última atualização: 15.10.2025
                            </div>

                            <!-- Tabela de histórico de preços -->
                            <div class="mb-6">
                                <div class="grid grid-cols-3 gap-2 text-sm font-medium text-gray-700 border-b border-gray-200 pb-2">
                                    <div>Data</div>
                                    <div>Alterar</div>
                                    <div>Preço</div>
                                </div>
                                <div class="grid grid-cols-3 gap-2 text-sm text-gray-600 py-2">
                                    <div>15.10.2025</div>
                                    <div>Preço</div>
                                    <div>7.500 €</div>
                                </div>
                                <div class="grid grid-cols-3 gap-2 text-sm text-gray-600 py-2">
                                    <div>10.10.2025</div>
                                    <div>Preço</div>
                                    <div>7.500 €</div>
                                </div>
                            </div>

                            <!-- Estatísticas -->
                            <div class="grid grid-cols-2 gap-4">
                                <div class="flex items-center">
                                    <i class="fas fa-eye text-blue-500 text-xl mr-2"></i>
                                    <div>
                                        <div class="text-sm text-gray-500">visualizações</div>
                                        <div class="font-medium">24</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-heart text-blue-500 text-xl mr-2"></i>
                                    <div>
                                        <div class="text-sm text-gray-500">vezes guardado</div>
                                        <div class="font-medium">3</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Botão para ver detalhes -->
                            <div class="mt-6 text-center">
                                <button class="border border-black text-black bg-transparent hover:bg-gray-100 text-sm font-medium py-2 px-4 rounded-md transition duration-300">
                                    Iniciar sessão e ver detalhes
                                </button>
                            </div>
                        </div>

                        <!-- Box Mapa -->
                        <div class="bg-white rounded-lg p-4 shadow-sm">
                            <h3 class="text-lg font-bold text-gray-800 mb-4">Mapa</h3>

                            <!-- Aviso sobre localização -->
                            <div class="mb-4 text-sm text-gray-600">
                                <p>O anunciante não disponibilizou a morada exacta desta propriedade mas encontra-se dentro da área assinalada.</p>
                            </div>

                            <!-- Mapa real -->
                            <div class="h-96 w-full rounded-lg overflow-hidden">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12449.37961602778!2d-9.2375!3d38.7544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1ecf0b0047f4a5%3A0x7e6c0a9b1a4e4b4e!2sAmadora%2C%20Portugal!5e0!3m2!1sen!2spt!4v1633024000000!5m2!1sen!2spt"
                                    width="100%"
                                    height="100%"
                                    style="border:0;"
                                    allowfullscreen=""
                                    loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>

                            <!-- Legenda do mapa -->
                            <div class="mt-4 text-sm text-gray-500">
                                <p>Área aproximada do imóvel na Amadora, Portugal</p>
                            </div>
                        </div>
                    </div>

                    <!-- Coluna Direita (25%) - Vazia -->
                    <div class="md:w-1/4">
                        <!-- Espaço vazio -->
                    </div>
                </div>
            </div>
        </section>

        <!-- SEÇÃO ANÚNCIOS SEMELHANTES - Largura total -->
        <section class="py-6">
            <div class="container mx-auto px-4">
                <div class="rounded-lg p-4 shadow-sm">
                    <!-- Título com ícone de interrogação -->
                    <div class="flex items-center mb-6">
                        <h3 class="text-lg font-bold text-gray-800 mr-2">Anúncios semelhantes</h3>
                        <i class="fas fa-question-circle text-gray-400 text-sm"></i>
                    </div>

                    <!-- Container para anúncios semelhantes com overflow horizontal -->
                    <div class="similar-ads-container">
                        <!-- Anúncio 1 -->
                        <div class="similar-ad-item bg-white rounded-lg overflow-hidden hover:bg-gray-50 transition duration-300 border border-gray-200">
                            <div class="h-48 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1073&q=80"
                                    alt="Armazém industrial"
                                    class="w-full h-full object-cover hover:scale-105 transition duration-300">
                            </div>
                            <div class="p-4">
                                <p class="text-lg font-semibold text-blue-600">€ 4.900 /mês</p>
                                <p class="text-sm text-gray-600 mt-1">Alto da Mira – Moinhos da Funcheira –...</p>
                                <div class="flex justify-between text-sm text-gray-500 mt-2">
                                    <span>600 m²</span>
                                    <span>€ 8/m²</span>
                                </div>
                            </div>
                        </div>

                        <!-- Anúncio 2 -->
                        <div class="similar-ad-item bg-white rounded-lg overflow-hidden hover:bg-gray-50 transition duration-300 border border-gray-200">
                            <div class="h-48 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                    alt="Galpão industrial"
                                    class="w-full h-full object-cover hover:scale-105 transition duration-300">
                            </div>
                            <div class="p-4">
                                <p class="text-lg font-semibold text-blue-600">€ 6.000 /mês</p>
                                <p class="text-sm text-gray-600 mt-1">Camarate, Camarate, Unhos e Apelação...</p>
                                <div class="flex justify-between text-sm text-gray-500 mt-2">
                                    <span>1568 m²</span>
                                    <span>€ 4/m²</span>
                                </div>
                            </div>
                        </div>

                        <!-- Anúncio 3 -->
                        <div class="similar-ad-item bg-white rounded-lg overflow-hidden hover:bg-gray-50 transition duration-300 border border-gray-200">
                            <div class="h-48 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1581094794358-5275437b42d4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                    alt="Armazém logístico"
                                    class="w-full h-full object-cover hover:scale-105 transition duration-300">
                            </div>
                            <div class="p-4">
                                <p class="text-lg font-semibold text-blue-600">€ 7.000 /mês</p>
                                <p class="text-sm text-gray-600 mt-1">Rua dos Lavadouros, Pêro Pinheiro,...</p>
                                <div class="flex justify-between text-sm text-gray-500 mt-2">
                                    <span>1670 m²</span>
                                    <span>€ 4/m²</span>
                                </div>
                            </div>
                        </div>

                        <!-- Anúncio 4 -->
                        <div class="similar-ad-item bg-white rounded-lg overflow-hidden hover:bg-gray-50 transition duration-300 border border-gray-200">
                            <div class="h-48 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                    alt="Armazém comercial"
                                    class="w-full h-full object-cover hover:scale-105 transition duration-300">
                            </div>
                            <div class="p-4">
                                <p class="text-lg font-semibold text-blue-600">€ 5.000 /mês</p>
                                <p class="text-sm text-gray-600 mt-1">Rua Álvaro de Sousa, Alfragide,...</p>
                                <div class="flex justify-between text-sm text-gray-500 mt-2">
                                    <span>1500 m²</span>
                                    <span>€ 3/m²</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SEÇÃO FINAL - Caminho de Navegação e Título - Largura total -->
        <section class="py-6">
            <div class="container mx-auto px-4">
                <div class="rounded-lg p-4 shadow-sm">
                    <!-- Caminho de navegação -->
                    <span class="mx-2">></span>
                    <a href="#" class="text-black underline">Lisboa</a>
                    <span class="mx-2">»</span>
                    <a href="#" class="text-black underline">Amadora</a>
                    <span class="mx-2">»</span>
                    <a href="#" class="text-black underline">Mina de Água</a>
                    <span class="mx-2">></span>
                    <a href="#" class="text-black underline">Alto da Mira - Moinhos da Funcheira - Carenque</a>
                </div>

                <!-- Título principal -->
                <h1 class="text-2xl font-bold text-black">Aluga-se Pavilhão Amadora - Moinhos da Funcheira 1.000m2</h1>
            </div>
    </div>
    </section>
    </div>
</main>
<?= $this->endSection() ?>