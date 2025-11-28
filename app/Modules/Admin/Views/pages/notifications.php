<?= $this->extend('Admin\Views\layouts\master') ?>

<?= $this->section('content') ?>

<!-- Cabeçalho da página -->
<div class="flex flex-col md:flex-row md:items-center md:justify-between w-full fade-in">
    <div class="w-full md:w-auto">
        <h1 class="text-2xl font-bold text-slate-800 dark:text-white">Notificações</h1>
        <p class="text-slate-500 dark:text-slate-400 mt-1">Gerencie suas notificações e alertas</p>
    </div>
    <div class="mt-4 md:mt-0 flex gap-2 md:gap-3 w-full md:w-auto">
        <button class="flex items-center gap-2 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 px-3 md:px-4 py-2.5 text-sm font-medium text-slate-700 dark:text-slate-100 hover:bg-slate-50 dark:hover:bg-slate-700 transition-all duration-200 hover:shadow-sm flex-1 md:flex-none justify-center">
            <i class="bi bi-check2-all"></i>
            <span class="hidden sm:inline">Marcar Todas</span>
        </button>
        <button class="flex items-center gap-2 rounded-xl bg-gradient-to-br from-blue-500 to-blue-900 px-3 md:px-4 py-2.5 text-sm font-medium text-white hover:from-indigo-600 hover:to-purple-700 transition-all duration-200 shadow-lg hover:shadow-xl flex-1 md:flex-none justify-center">
            <i class="bi bi-gear"></i>
            <span class="hidden sm:inline">Configurações</span>
        </button>
    </div>
</div>

<!-- Estatísticas Rápidas -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 w-full fade-in">
    <div class="rounded-2xl bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-4 md:p-6 shadow-lg border border-slate-200 dark:border-slate-700 hover:shadow-xl transition-all duration-300 w-full">
        <div class="flex items-center justify-between w-full">
            <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-100 truncate">
                Total
            </h2>
            <div class="rounded-full bg-blue-50 dark:bg-blue-900/20 p-2 md:p-3 flex-shrink-0 ml-3">
                <i class="bi bi-bell text-blue-500 text-base md:text-lg"></i>
            </div>
        </div>
        <p class="mt-3 md:mt-4 text-xl md:text-3xl font-bold text-slate-900 dark:text-slate-50 truncate">
            47
        </p>
        <p class="mt-1 md:mt-2 text-xs md:text-sm text-slate-500 dark:text-slate-400 flex items-center gap-1">
            <i class="bi bi-clock-history"></i>
            <span class="truncate">Todas as notificações</span>
        </p>
    </div>

    <div class="rounded-2xl bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-4 md:p-6 shadow-lg border border-slate-200 dark:border-slate-700 hover:shadow-xl transition-all duration-300 w-full">
        <div class="flex items-center justify-between w-full">
            <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-100 truncate">
                Não Lidas
            </h2>
            <div class="rounded-full bg-rose-50 dark:bg-rose-900/20 p-2 md:p-3 flex-shrink-0 ml-3">
                <i class="bi bi-bell-fill text-rose-500 text-base md:text-lg"></i>
            </div>
        </div>
        <p class="mt-3 md:mt-4 text-xl md:text-3xl font-bold text-rose-600 dark:text-rose-400 truncate">
            12
        </p>
        <p class="mt-1 md:mt-2 text-xs md:text-sm text-rose-600 dark:text-rose-400 truncate">
            Requerem atenção
        </p>
    </div>

    <div class="rounded-2xl bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-4 md:p-6 shadow-lg border border-slate-200 dark:border-slate-700 hover:shadow-xl transition-all duration-300 w-full">
        <div class="flex items-center justify-between w-full">
            <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-100 truncate">
                Hoje
            </h2>
            <div class="rounded-full bg-emerald-50 dark:bg-emerald-900/20 p-2 md:p-3 flex-shrink-0 ml-3">
                <i class="bi bi-calendar-day text-emerald-500 text-base md:text-lg"></i>
            </div>
        </div>
        <p class="mt-3 md:mt-4 text-xl md:text-3xl font-bold text-slate-900 dark:text-slate-50 truncate">
            8
        </p>
        <p class="mt-1 md:mt-2 text-xs md:text-sm text-emerald-600 dark:text-emerald-400 truncate">
            Notificações de hoje
        </p>
    </div>

    <div class="rounded-2xl bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-4 md:p-6 shadow-lg border border-slate-200 dark:border-slate-700 hover:shadow-xl transition-all duration-300 w-full">
        <div class="flex items-center justify-between w-full">
            <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-100 truncate">
                Urgentes
            </h2>
            <div class="rounded-full bg-amber-50 dark:bg-amber-900/20 p-2 md:p-3 flex-shrink-0 ml-3">
                <i class="bi bi-exclamation-triangle text-amber-500 text-base md:text-lg"></i>
            </div>
        </div>
        <p class="mt-3 md:mt-4 text-xl md:text-3xl font-bold text-amber-600 dark:text-amber-400 truncate">
            3
        </p>
        <p class="mt-1 md:mt-2 text-xs md:text-sm text-amber-600 dark:text-amber-400 truncate">
            Prioridade alta
        </p>
    </div>
</div>

<!-- Filtros e Ações -->
<div class="rounded-2xl bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-4 md:p-6 shadow-lg border border-slate-200 dark:border-slate-700 w-full fade-in">
    <div class="flex flex-col lg:flex-row lg:items-center gap-4 w-full">
        <div class="flex-1 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 w-full">
            <select class="rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 px-3 py-2.5 text-sm text-slate-700 dark:text-slate-200 outline-none focus:ring-2 focus:ring-indigo-500 w-full">
                <option>Todas as Categorias</option>
                <option>Sistema</option>
                <option>Imóveis</option>
                <option>Financeiro</option>
                <option>Clientes</option>
            </select>
            <select class="rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 px-3 py-2.5 text-sm text-slate-700 dark:text-slate-200 outline-none focus:ring-2 focus:ring-indigo-500 w-full">
                <option>Todos os Status</option>
                <option>Não Lidas</option>
                <option>Lidas</option>
                <option>Arquivadas</option>
            </select>
            <select class="rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 px-3 py-2.5 text-sm text-slate-700 dark:text-slate-200 outline-none focus:ring-2 focus:ring-indigo-500 w-full">
                <option>Qualquer Período</option>
                <option>Hoje</option>
                <option>Últimos 7 dias</option>
                <option>Este mês</option>
            </select>
            <div class="relative w-full">
                <input type="text" placeholder="Pesquisar notificações..."
                    class="rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 px-3 py-2.5 text-sm text-slate-700 dark:text-slate-200 outline-none focus:ring-2 focus:ring-indigo-500 w-full pl-10">
                <i class="bi bi-search absolute left-3 top-1/2 transform -translate-y-1/2 text-slate-400"></i>
            </div>
        </div>
        <div class="flex gap-2 w-full lg:w-auto">
            <button class="flex items-center gap-2 rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 px-4 py-2.5 text-sm text-slate-700 dark:text-slate-200 hover:bg-slate-50 dark:hover:bg-slate-700 w-full lg:w-auto justify-center">
                <i class="bi bi-funnel"></i>
                <span class="hidden sm:inline">Filtrar</span>
            </button>
            <button class="flex items-center gap-2 rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 px-4 py-2.5 text-sm text-slate-700 dark:text-slate-200 hover:bg-slate-50 dark:hover:bg-slate-700 w-full lg:w-auto justify-center">
                <i class="bi bi-archive"></i>
                <span class="hidden sm:inline">Arquivar</span>
            </button>
        </div>
    </div>
</div>

<!-- Lista de Notificações -->
<div class="rounded-2xl bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-4 md:p-6 shadow-lg border border-slate-200 dark:border-slate-700 w-full fade-in">
    <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-4 md:mb-6 w-full">
        <h2 class="text-base md:text-lg font-bold text-slate-800 dark:text-slate-100 mb-2 sm:mb-0">
            🔔 Notificações Recentes
        </h2>
        <div class="flex items-center gap-2 text-slate-500 dark:text-slate-400 text-sm">
            <span class="hidden md:inline">12 não lidas</span>
            <button class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-700 dark:hover:text-indigo-300">
                <i class="bi bi-trash"></i>
            </button>
        </div>
    </div>

    <!-- Lista de Notificações -->
    <div class="space-y-3 md:space-y-4">
        <!-- Notificação 1 - Urgente -->
        <div class="flex gap-3 md:gap-4 p-3 md:p-4 rounded-xl border border-rose-200 dark:border-rose-800 bg-rose-50 dark:bg-rose-900/20 transition-all duration-200 hover:shadow-md">
            <div class="flex-shrink-0">
                <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-rose-100 dark:bg-rose-800 flex items-center justify-center">
                    <i class="bi bi-exclamation-triangle text-rose-600 dark:text-rose-400 text-lg"></i>
                </div>
            </div>
            <div class="flex-1 min-w-0">
                <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-2">
                    <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-slate-800 dark:text-white text-sm md:text-base">
                            Pagamento Atrasado - T3 Sommerschield
                        </h3>
                        <p class="text-slate-600 dark:text-slate-300 text-xs md:text-sm mt-1">
                            O inquilino Marta Zimba está com o pagamento do aluguel atrasado em 5 dias.
                        </p>
                        <div class="flex flex-wrap gap-2 mt-2">
                            <span class="inline-flex items-center gap-1 bg-rose-100 dark:bg-rose-800 text-rose-700 dark:text-rose-300 px-2 py-1 rounded-full text-xs">
                                <i class="bi bi-clock"></i>
                                Urgente
                            </span>
                            <span class="inline-flex items-center gap-1 bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-400 px-2 py-1 rounded-full text-xs">
                                <i class="bi bi-house"></i>
                                Imóvel
                            </span>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 sm:gap-4">
                        <span class="text-xs text-slate-500 dark:text-slate-400 whitespace-nowrap">
                            Há 2 horas
                        </span>
                        <button class="text-slate-400 hover:text-slate-600 dark:hover:text-slate-300">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Notificação 2 - Nova Mensagem -->
        <div class="flex gap-3 md:gap-4 p-3 md:p-4 rounded-xl border border-blue-200 dark:border-blue-800 bg-blue-50 dark:bg-blue-900/20 transition-all duration-200 hover:shadow-md">
            <div class="flex-shrink-0">
                <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-blue-100 dark:bg-blue-800 flex items-center justify-center">
                    <i class="bi bi-chat-dots text-blue-600 dark:text-blue-400 text-lg"></i>
                </div>
            </div>
            <div class="flex-1 min-w-0">
                <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-2">
                    <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-slate-800 dark:text-white text-sm md:text-base">
                            Nova Mensagem de Carlos Manuel
                        </h3>
                        <p class="text-slate-600 dark:text-slate-300 text-xs md:text-sm mt-1">
                            "Gostaria de agendar uma visita para o imóvel T2 Polana amanhã às 15h."
                        </p>
                        <div class="flex flex-wrap gap-2 mt-2">
                            <span class="inline-flex items-center gap-1 bg-blue-100 dark:bg-blue-800 text-blue-700 dark:text-blue-300 px-2 py-1 rounded-full text-xs">
                                <i class="bi bi-person"></i>
                                Cliente
                            </span>
                            <span class="inline-flex items-center gap-1 bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-400 px-2 py-1 rounded-full text-xs">
                                <i class="bi bi-envelope"></i>
                                Mensagem
                            </span>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 sm:gap-4">
                        <span class="text-xs text-slate-500 dark:text-slate-400 whitespace-nowrap">
                            Há 4 horas
                        </span>
                        <button class="text-slate-400 hover:text-slate-600 dark:hover:text-slate-300">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Notificação 3 - Manutenção -->
        <div class="flex gap-3 md:gap-4 p-3 md:p-4 rounded-xl border border-amber-200 dark:border-amber-800 bg-amber-50 dark:bg-amber-900/20 transition-all duration-200 hover:shadow-md">
            <div class="flex-shrink-0">
                <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-amber-100 dark:bg-amber-800 flex items-center justify-center">
                    <i class="bi bi-tools text-amber-600 dark:text-amber-400 text-lg"></i>
                </div>
            </div>
            <div class="flex-1 min-w-0">
                <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-2">
                    <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-slate-800 dark:text-white text-sm md:text-base">
                            Manutenção Agendada - Moradia Matola
                        </h3>
                        <p class="text-slate-600 dark:text-slate-300 text-xs md:text-sm mt-1">
                            A manutenção da piscina está agendada para sexta-feira, 28 de Junho.
                        </p>
                        <div class="flex flex-wrap gap-2 mt-2">
                            <span class="inline-flex items-center gap-1 bg-amber-100 dark:bg-amber-800 text-amber-700 dark:text-amber-300 px-2 py-1 rounded-full text-xs">
                                <i class="bi bi-calendar-check"></i>
                                Agendado
                            </span>
                            <span class="inline-flex items-center gap-1 bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-400 px-2 py-1 rounded-full text-xs">
                                <i class="bi bi-wrench"></i>
                                Manutenção
                            </span>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 sm:gap-4">
                        <span class="text-xs text-slate-500 dark:text-slate-400 whitespace-nowrap">
                            Hoje, 09:30
                        </span>
                        <button class="text-slate-400 hover:text-slate-600 dark:hover:text-slate-300">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Notificação 4 - Sistema -->
        <div class="flex gap-3 md:gap-4 p-3 md:p-4 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 transition-all duration-200 hover:shadow-md">
            <div class="flex-shrink-0">
                <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-slate-100 dark:bg-slate-700 flex items-center justify-center">
                    <i class="bi bi-cloud-arrow-up text-slate-600 dark:text-slate-400 text-lg"></i>
                </div>
            </div>
            <div class="flex-1 min-w-0">
                <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-2">
                    <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-slate-800 dark:text-white text-sm md:text-base">
                            Backup do Sistema Concluído
                        </h3>
                        <p class="text-slate-600 dark:text-slate-300 text-xs md:text-sm mt-1">
                            O backup automático do sistema foi concluído com sucesso.
                        </p>
                        <div class="flex flex-wrap gap-2 mt-2">
                            <span class="inline-flex items-center gap-1 bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-400 px-2 py-1 rounded-full text-xs">
                                <i class="bi bi-shield-check"></i>
                                Sistema
                            </span>
                            <span class="inline-flex items-center gap-1 bg-emerald-100 dark:bg-emerald-800 text-emerald-700 dark:text-emerald-300 px-2 py-1 rounded-full text-xs">
                                <i class="bi bi-check-circle"></i>
                                Concluído
                            </span>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 sm:gap-4">
                        <span class="text-xs text-slate-500 dark:text-slate-400 whitespace-nowrap">
                            Ontem, 23:45
                        </span>
                        <button class="text-slate-400 hover:text-slate-600 dark:hover:text-slate-300">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Notificação 5 - Financeiro -->
        <div class="flex gap-3 md:gap-4 p-3 md:p-4 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 transition-all duration-200 hover:shadow-md">
            <div class="flex-shrink-0">
                <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-emerald-100 dark:bg-emerald-800 flex items-center justify-center">
                    <i class="bi bi-cash-coin text-emerald-600 dark:text-emerald-400 text-lg"></i>
                </div>
            </div>
            <div class="flex-1 min-w-0">
                <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-2">
                    <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-slate-800 dark:text-white text-sm md:text-base">
                            Recebimento Confirmado - Escritório Baixa
                        </h3>
                        <p class="text-slate-600 dark:text-slate-300 text-xs md:text-sm mt-1">
                            Pagamento do aluguel no valor de 45.000 MT confirmado pela Empresa X.
                        </p>
                        <div class="flex flex-wrap gap-2 mt-2">
                            <span class="inline-flex items-center gap-1 bg-emerald-100 dark:bg-emerald-800 text-emerald-700 dark:text-emerald-300 px-2 py-1 rounded-full text-xs">
                                <i class="bi bi-currency-dollar"></i>
                                Financeiro
                            </span>
                            <span class="inline-flex items-center gap-1 bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-400 px-2 py-1 rounded-full text-xs">
                                <i class="bi bi-building"></i>
                                Comercial
                            </span>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 sm:gap-4">
                        <span class="text-xs text-slate-500 dark:text-slate-400 whitespace-nowrap">
                            15 Jun, 2024
                        </span>
                        <button class="text-slate-400 hover:text-slate-600 dark:hover:text-slate-300">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Paginação -->
    <div class="mt-6 md:mt-8 flex flex-col sm:flex-row sm:items-center justify-between gap-4 pt-4 border-t border-slate-200 dark:border-slate-700">
        <p class="text-sm text-slate-500 dark:text-slate-400 text-center sm:text-left">
            Mostrando 5 de 47 notificações
        </p>
        <div class="flex gap-1 md:gap-2 justify-center sm:justify-end">
            <button class="w-8 h-8 md:w-9 md:h-9 rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 flex items-center justify-center text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-700 text-sm">
                <i class="bi bi-chevron-left"></i>
            </button>
            <button class="w-8 h-8 md:w-9 md:h-9 rounded-lg bg-indigo-600 text-white flex items-center justify-center text-sm font-medium">
                1
            </button>
            <button class="w-8 h-8 md:w-9 md:h-9 rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 flex items-center justify-center text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-700 text-sm">
                2
            </button>
            <button class="w-8 h-8 md:w-9 md:h-9 rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 flex items-center justify-center text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-700 text-sm">
                3
            </button>
            <button class="w-8 h-8 md:w-9 md:h-9 rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 flex items-center justify-center text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-700 text-sm">
                <i class="bi bi-chevron-right"></i>
            </button>
        </div>
    </div>
</div>

<!-- Configurações Rápidas -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 w-full fade-in">
    <!-- Preferências de Notificação -->
    <div class="rounded-2xl bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-4 md:p-6 shadow-lg border border-slate-200 dark:border-slate-700 w-full">
        <h2 class="text-base md:text-lg font-bold text-slate-800 dark:text-slate-100 mb-4 md:mb-6">
            ⚙️ Preferências de Notificação
        </h2>

        <div class="space-y-4">
            <div class="flex items-center justify-between">
                <div>
                    <p class="font-medium text-slate-800 dark:text-white text-sm">Notificações por Email</p>
                    <p class="text-slate-500 dark:text-slate-400 text-xs">Receba notificações por email</p>
                </div>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" class="sr-only peer" checked>
                    <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-indigo-600"></div>
                </label>
            </div>

            <div class="flex items-center justify-between">
                <div>
                    <p class="font-medium text-slate-800 dark:text-white text-sm">Notificações Push</p>
                    <p class="text-slate-500 dark:text-slate-400 text-xs">Notificações no navegador</p>
                </div>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" class="sr-only peer" checked>
                    <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-indigo-600"></div>
                </label>
            </div>

            <div class="flex items-center justify-between">
                <div>
                    <p class="font-medium text-slate-800 dark:text-white text-sm">Alertas Sonoros</p>
                    <p class="text-slate-500 dark:text-slate-400 text-xs">Som para notificações urgentes</p>
                </div>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" class="sr-only peer">
                    <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-indigo-600"></div>
                </label>
            </div>
        </div>
    </div>

    <!-- Tipos de Notificação -->
    <div class="rounded-2xl bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-4 md:p-6 shadow-lg border border-slate-200 dark:border-slate-700 w-full">
        <h2 class="text-base md:text-lg font-bold text-slate-800 dark:text-slate-100 mb-4 md:mb-6">
            🔔 Tipos de Notificação
        </h2>

        <div class="space-y-4">
            <div class="flex items-center justify-between">
                <div>
                    <p class="font-medium text-slate-800 dark:text-white text-sm">Notificações Financeiras</p>
                    <p class="text-slate-500 dark:text-slate-400 text-xs">Pagamentos, recebimentos, etc.</p>
                </div>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" class="sr-only peer" checked>
                    <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-indigo-600"></div>
                </label>
            </div>

            <div class="flex items-center justify-between">
                <div>
                    <p class="font-medium text-slate-800 dark:text-white text-sm">Notificações de Imóveis</p>
                    <p class="text-slate-500 dark:text-slate-400 text-xs">Visitas, manutenções, etc.</p>
                </div>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" class="sr-only peer" checked>
                    <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-indigo-600"></div>
                </label>
            </div>

            <div class="flex items-center justify-between">
                <div>
                    <p class="font-medium text-slate-800 dark:text-white text-sm">Notificações de Sistema</p>
                    <p class="text-slate-500 dark:text-slate-400 text-xs">Atualizações, backups, etc.</p>
                </div>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" class="sr-only peer" checked>
                    <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-indigo-600"></div>
                </label>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>