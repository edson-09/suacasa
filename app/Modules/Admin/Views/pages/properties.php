<?= $this->extend('Admin\Views\layouts\master') ?>

<?= $this->section('content') ?>

<!-- Cabeçalho da página -->
<div class="flex flex-col md:flex-row md:items-center md:justify-between">
    <div>
        <h1 class="text-2xl font-bold text-slate-800 dark:text-white">Meus Imóveis</h1>
        <p class="text-slate-500 dark:text-slate-400 mt-1">Gerencie todos os seus imóveis em um só lugar</p>
    </div>
    <div class="mt-4 md:mt-0 flex gap-3">
        <button class="flex items-center gap-2 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 px-4 py-2.5 text-sm font-medium text-slate-700 dark:text-slate-100 hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors duration-200">
            <i class="bi bi-filter"></i>
            Filtrar
        </button>
        <a href="/admin/new-property" class="flex items-center gap-2 rounded-xl bg-linear-to-br from-blue-500 to-blue-900 px-4 py-2.5 text-sm font-medium text-white hover:bg-indigo-700 transition-colors duration-200">
            <i class="bi bi-plus-lg"></i>
            Adicionar Imóvel
        </a>
    </div>
</div>

<!-- Estatísticas rápidas -->
<div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4 grid-cards">
    <div class="rounded-2xl bg-linear-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-5 shadow-md border border-slate-200 dark:border-slate-700">
        <div class="flex items-center justify-between">
            <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-100">
                Total de Imóveis
            </h2>
            <div class="rounded-full bg-blue-50 dark:bg-blue-900/20 p-2">
                <i class="bi bi-house text-blue-500 text-lg"></i>
            </div>
        </div>
        <p class="mt-3 text-2xl font-bold text-slate-900 dark:text-slate-50">
            <?= $total ?>
        </p>
        <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">
            Todos os seus imóveis
        </p>
    </div>

    <div class="rounded-2xl bg-linear-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-5 shadow-md border border-slate-200 dark:border-slate-700">
        <div class="flex items-center justify-between">
            <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-100">
                Alugados
            </h2>
            <div class="rounded-full bg-emerald-50 dark:bg-emerald-900/20 p-2">
                <i class="bi bi-key text-emerald-500 text-lg"></i>
            </div>
        </div>
        <p class="mt-3 text-2xl font-bold text-slate-900 dark:text-slate-50">
            18
        </p>
        <p class="mt-1 text-sm text-emerald-600 dark:text-emerald-400">
            75% ocupação
        </p>
    </div>

    <div class="rounded-2xl bg-linear-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-5 shadow-md border border-slate-200 dark:border-slate-700">
        <div class="flex items-center justify-between">
            <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-100">
                Disponíveis
            </h2>
            <div class="rounded-full bg-amber-50 dark:bg-amber-900/20 p-2">
                <i class="bi bi-house-door text-amber-500 text-lg"></i>
            </div>
        </div>
        <p class="mt-3 text-2xl font-bold text-slate-900 dark:text-slate-50">
            6
        </p>
        <p class="mt-1 text-sm text-amber-600 dark:text-amber-400">
            25% disponíveis
        </p>
    </div>

    <div class="rounded-2xl bg-linear-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-5 shadow-md border border-slate-200 dark:border-slate-700">
        <div class="flex items-center justify-between">
            <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-100">
                Pendentes
            </h2>
            <div class="rounded-full bg-purple-50 dark:bg-purple-900/20 p-2">
                <i class="bi bi-cash-coin text-purple-500 text-lg"></i>
            </div>
        </div>
        <p class="mt-3 text-2xl font-bold text-slate-900 dark:text-slate-50">
            <?= $pendentes ?>
        </p>
        <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">
            Previsão este mês
        </p>
    </div>
</div>

<!-- Filtros e Busca -->
<div class="rounded-2xl bg-linear-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-5 shadow-md border border-slate-200 dark:border-slate-700">
    <div class="flex flex-col md:flex-row md:items-center gap-4">
        <div class="flex-1 grid grid-cols-1 md:grid-cols-3 gap-4">
            <select class="rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 px-3 pr-3 py-3 text-sm text-slate-700 dark:text-slate-200 outline-none">
                <option>Todos os Status</option>
                <option>Alugado</option>
                <option>Disponível</option>
                <option>Manutenção</option>
            </select>
            <select class="rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 px-3 py-2.5 text-sm text-slate-700 dark:text-slate-200 outline-none">
                <option>Todos os Tipos</option>
                <option>Apartamento</option>
                <option>Casa</option>
                <option>Escritório</option>
                <option>Loja</option>
            </select>
            <select class="rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 px-3 py-2.5 text-sm text-slate-700 dark:text-slate-200 outline-none">
                <option>Todos os Bairros</option>
                <option>Polana</option>
                <option>Sommerschield</option>
                <option>Matola</option>
                <option>Baixa</option>
            </select>
        </div>
        <div class="flex gap-2">
            <button class="flex items-center gap-2 rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 px-4 py-2.5 text-sm text-slate-700 dark:text-slate-200 hover:bg-slate-50 dark:hover:bg-slate-700">
                <i class="bi bi-arrow-clockwise"></i>
                Atualizar
            </button>
        </div>
    </div>
</div>

<!-- Lista de Imóveis -->
<div class="rounded-2xl bg-linear-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-5 shadow-md border border-slate-200 dark:border-slate-700">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-lg font-bold text-slate-800 dark:text-slate-100">
            Meus Imóveis (24)
        </h2>
        <div class="flex items-center gap-2 text-slate-500 dark:text-slate-400">
            <span class="text-sm">Visualização:</span>
            <button class="p-2 rounded-lg bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">
                <i class="bi bi-grid-3x3-gap"></i>
            </button>
            <button class="p-2 rounded-lg border border-slate-300 dark:border-slate-700 text-slate-700 dark:text-slate-300">
                <i class="bi bi-list-task"></i>
            </button>
        </div>
    </div>

    <!-- Grid de Imóveis -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Card de Imóvel 1 -->
        <div class="property-card rounded-2xl bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
            <div class="relative">
                <div class="h-48 relative overflow-hidden bg-center bg-cover" style="background-image: url(img/12322.jpg);">
                    <span class="absolute top-3 left-3 status-badge py-1 px-2 rounded-full bg-emerald-500 text-white font-medium text-sm">
                        Alugado
                    </span>
                    <span class="absolute top-3 right-3 status-badge rounded-full bg-white dark:bg-slate-800 text-slate-700 dark:text-slate-300 font-medium text-sm py-1 px-2">
                        <i class="bi bi-star-fill text-amber-400 mr-1"></i> 4.8
                    </span>
                </div>
                <button class="absolute bottom-3 right-3 w-8 h-8 rounded-full bg-white dark:bg-slate-800 shadow-md flex items-center justify-center text-slate-600 dark:text-slate-400 hover:text-red-500">
                    <i class="bi bi-heart"></i>
                </button>
            </div>
            <div class="p-4">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="font-bold text-slate-800 dark:text-white">T3 - Sommerschield</h3>
                    <span class="text-lg font-bold text-slate-800 dark:text-white">25,000 MT</span>
                </div>
                <p class="text-slate-600 dark:text-slate-400 text-sm mb-3 flex items-center">
                    <i class="bi bi-geo-alt mr-2"></i> Sommerschield, Maputo
                </p>
                <div class="flex items-center justify-between text-sm text-slate-500 dark:text-slate-400 mb-4">
                    <span class="flex items-center">
                        <i class="bi bi-door-closed mr-1"></i> 3 quartos
                    </span>
                    <span class="flex items-center">
                        <i class="bi bi-droplet mr-1"></i> 2 banheiros
                    </span>
                    <span class="flex items-center">
                        <i class="bi bi-arrows-fullscreen mr-1"></i> 120m²
                    </span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-xs text-slate-500 dark:text-slate-400">
                        Inquilino: Marta Zimba
                    </span>
                    <div class="flex gap-2">
                        <button class="w-8 h-8 rounded-lg bg-slate-100 dark:bg-slate-700 flex items-center justify-center text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-600">
                            <i class="bi bi-pencil"></i>
                        </button>
                        <button class="w-8 h-8 rounded-lg bg-slate-100 dark:bg-slate-700 flex items-center justify-center text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-600">
                            <i class="bi bi-eye"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card de Imóvel 2 -->
        <div class="property-card rounded-2xl bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
            <div class="relative">
                <div class="h-48 bg-center bg-cover relative overflow-hidden" style="background-image: url(img/12322.jpg);">
                    <span class="absolute top-3 left-3 status-badge rounded-full bg-amber-500 text-white font-medium text-sm py-1 px-2">
                        Disponível
                    </span>
                    <span class="absolute top-3 right-3 status-badge rounded-full bg-white dark:bg-slate-800 text-slate-700 dark:text-slate-300 font-medium text-sm py-1 px-2">
                        <i class="bi bi-star-fill text-amber-400 mr-1"></i> 4.5
                    </span>
                </div>
                <button class="absolute bottom-3 right-3 w-8 h-8 rounded-full bg-white dark:bg-slate-800 shadow-md flex items-center justify-center text-slate-600 dark:text-slate-400 hover:text-red-500">
                    <i class="bi bi-heart"></i>
                </button>
            </div>
            <div class="p-4">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="font-bold text-slate-800 dark:text-white">T2 - Polana</h3>
                    <span class="text-lg font-bold text-slate-800 dark:text-white">18,000 MT</span>
                </div>
                <p class="text-slate-600 dark:text-slate-400 text-sm mb-3 flex items-center">
                    <i class="bi bi-geo-alt mr-2"></i> Polana, Maputo
                </p>
                <div class="flex items-center justify-between text-sm text-slate-500 dark:text-slate-400 mb-4">
                    <span class="flex items-center">
                        <i class="bi bi-door-closed mr-1"></i> 2 quartos
                    </span>
                    <span class="flex items-center">
                        <i class="bi bi-droplet mr-1"></i> 1 banheiro
                    </span>
                    <span class="flex items-center">
                        <i class="bi bi-arrows-fullscreen mr-1"></i> 85m²
                    </span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-xs text-emerald-500 dark:text-emerald-400 font-medium">
                        Disponível agora
                    </span>
                    <div class="flex gap-2">
                        <button class="w-8 h-8 rounded-lg bg-slate-100 dark:bg-slate-700 flex items-center justify-center text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-600">
                            <i class="bi bi-pencil"></i>
                        </button>
                        <button class="w-8 h-8 rounded-lg bg-slate-100 dark:bg-slate-700 flex items-center justify-center text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-600">
                            <i class="bi bi-eye"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card de Imóvel 3 -->
        <div class="property-card rounded-2xl bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
            <div class="relative">
                <div class="h-48 bg-center bg-cover relative overflow-hidden" style="background-image: url(img/12322.jpg);">
                    <span class="absolute top-3 left-3 status-badge rounded-full bg-slate-500 text-white font-medium text-sm py-1 px-2">
                        Manutenção
                    </span>
                    <span class="absolute top-3 right-3 status-badge rounded-full bg-white dark:bg-slate-800 text-slate-700 dark:text-slate-300 font-medium text-sm py-1 px-2">
                        <i class="bi bi-star-fill text-amber-400 mr-1"></i> 4.2
                    </span>
                </div>
                <button class="absolute bottom-3 right-3 w-8 h-8 rounded-full bg-white dark:bg-slate-800 shadow-md flex items-center justify-center text-slate-600 dark:text-slate-400 hover:text-red-500">
                    <i class="bi bi-heart"></i>
                </button>
            </div>
            <div class="p-4">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="font-bold text-slate-800 dark:text-white">Moradia - Matola</h3>
                    <span class="text-lg font-bold text-slate-800 dark:text-white">35,000 MT</span>
                </div>
                <p class="text-slate-600 dark:text-slate-400 text-sm mb-3 flex items-center">
                    <i class="bi bi-geo-alt mr-2"></i> Matola Gare, Maputo
                </p>
                <div class="flex items-center justify-between text-sm text-slate-500 dark:text-slate-400 mb-4">
                    <span class="flex items-center">
                        <i class="bi bi-door-closed mr-1"></i> 4 quartos
                    </span>
                    <span class="flex items-center">
                        <i class="bi bi-droplet mr-1"></i> 3 banheiros
                    </span>
                    <span class="flex items-center">
                        <i class="bi bi-arrows-fullscreen mr-1"></i> 200m²
                    </span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-xs text-amber-500 dark:text-amber-400 font-medium">
                        Em manutenção
                    </span>
                    <div class="flex gap-2">
                        <button class="w-8 h-8 rounded-lg bg-slate-100 dark:bg-slate-700 flex items-center justify-center text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-600">
                            <i class="bi bi-pencil"></i>
                        </button>
                        <button class="w-8 h-8 rounded-lg bg-slate-100 dark:bg-slate-700 flex items-center justify-center text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-600">
                            <i class="bi bi-eye"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Paginação -->
    <div class="mt-8 flex items-center justify-between">
        <p class="text-sm text-slate-500 dark:text-slate-400">
            Mostrando 3 de 24 imóveis
        </p>
        <div class="flex gap-2">
            <button class="w-9 h-9 rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 flex items-center justify-center text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-700">
                <i class="bi bi-chevron-left"></i>
            </button>
            <button class="w-9 h-9 rounded-lg bg-indigo-600 text-white flex items-center justify-center">
                1
            </button>
            <button class="w-9 h-9 rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 flex items-center justify-center text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-700">
                2
            </button>
            <button class="w-9 h-9 rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 flex items-center justify-center text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-700">
                3
            </button>
            <button class="w-9 h-9 rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 flex items-center justify-center text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-700">
                <i class="bi bi-chevron-right"></i>
            </button>
        </div>
    </div>
</div>

<?= $this->endSection() ?>