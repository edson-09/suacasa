<div class="grid grid-cols-1 md:grid-cols-12 gap-6">
    <!-- Versão Desktop -->
    <div class="hidden md:block md:col-span-6">
        <div class="overflow-hidden rounded-lg h-[500px] bg-white">
            <img src="<?= $images[0]['url'] ?>" alt="Estacionamento externo" class="w-full h-full object-cover">
        </div>
    </div>

    <div class="hidden md:block md:col-span-6">
        <div class="grid grid-cols-2 gap-4 h-[500px]">
            <!-- Imagem 1 -->
            <div class="overflow-hidden rounded-lg bg-white">
                <img src="<?= $images[1]['url'] ?? null ?>" alt="Fachada do prédio" class="w-full h-full object-cover">
            </div>

            <!-- Imagem 2 -->
            <div class="overflow-hidden rounded-lg bg-white">
                <img src="<?= $images[2]['url'] ?? null ?>" alt="Portão de ferro" class="w-full h-full object-cover">
            </div>

            <!-- Imagem 3 -->
            <div class="overflow-hidden rounded-lg bg-white">
                <img src="<?= $images[3]['url'] ?? null ?>" alt="Sala vazia" class="w-full h-full object-cover">
            </div>

            <!-- Imagem 4 - COM OVERLAY SEMPRE VISÍVEL -->
            <div class="overflow-hidden rounded-lg bg-white relative">
                <img src="<?= $images[3]['url'] ?? null ?>" alt="Corredor" class="w-full h-full object-cover">
                <!-- Overlay sempre visível -->
                <div class="overlay-always-visible">
                    <a href="galeria.html" class="overlay-button">
                        <i class="fas fa-images"></i>
                        Todas as imagens (17)
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Versão Mobile - Carrossel -->
    <div class="md:hidden carousel-container">
        <!-- Slide 1 -->
        <div class="carousel-slide">
            <img src="https://images.unsplash.com/photo-1548199973-03cce0bbc87b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Estacionamento externo">
        </div>

        <!-- Slide 2 -->
        <div class="carousel-slide">
            <img src="https://images.unsplash.com/photo-1580587771525-78b9dba3b914?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" alt="Fachada do prédio">
        </div>

        <!-- Slide 3 -->
        <div class="carousel-slide">
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Portão de ferro">
        </div>

        <!-- Slide 4 -->
        <div class="carousel-slide">
            <img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Sala vazia">
        </div>

        <!-- Slide 5 -->
        <div class="carousel-slide">
            <img src="https://images.unsplash.com/photo-1600566753376-12c8ab7fb75b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Corredor">
        </div>

        <!-- Indicadores -->
        <div class="carousel-indicators">
            <div class="indicator"></div>
            <div class="indicator"></div>
            <div class="indicator"></div>
            <div class="indicator"></div>
            <div class="indicator"></div>
        </div>
    </div>

    <!-- Botão "Todas as imagens" para mobile -->
    <div class="md:hidden mt-4">
        <button class="w-full flex items-center justify-center bg-white border border-gray-300 rounded-lg py-3 text-gray-700 hover:bg-gray-50 transition-colors duration-300">
            <i class="fas fa-camera mr-2"></i>
            Todas as imagens (17)
        </button>
    </div>
</div>