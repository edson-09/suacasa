<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <title>Suacasa - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Tailwind via CDN (apenas para desenvolvimento / protótipo) -->
    <link rel="stylesheet" href="./src/output.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Stack+Sans+Text:wght@200..700&display=swap" rel="stylesheet">

    <style>
        /* Estilos mobile adicionais */
        @media (max-width: 768px) {
            .table-container {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table-container table {
                min-width: 600px;
            }

            .mobile-collapse {
                padding: 16px !important;
            }

            .mobile-text-lg {
                font-size: 1.5rem !important;
            }

            .mobile-stack {
                flex-direction: column;
                gap: 12px;
            }

            .mobile-full-width {
                width: 100% !important;
            }

            .mobile-padding {
                padding: 12px !important;
            }

            .mobile-text-sm {
                font-size: 0.75rem !important;
            }
        }

        @media (max-width: 640px) {
            .mobile-hide {
                display: none !important;
            }

            .mobile-show {
                display: block !important;
            }
        }

        @media (max-width: 480px) {
            .mobile-text-xs {
                font-size: 0.7rem !important;
            }

            .mobile-padding-xs {
                padding: 8px !important;
            }
        }
    </style>
</head>

<body class="bg-slate-50 dark:bg-slate-900 transition-all duration-500 ease-in-out overflow-x-hidden prevent-overflow">

    <div class="flex h-screen flex-container">

        <?php include "./partials/sidebar.php" ?>

        <!-- CONTEÚDO PRINCIPAL -->
        <div id="main-content" class="flex flex-1 flex-col transition-all duration-200 prevent-overflow">

            <!-- TOPBAR -->
            <?php include "./partials/header.php" ?>

            <!-- CONTEÚDO -->
            <main class="flex-1 overflow-y-auto p-4 md:p-6 space-y-4 md:space-y-6 prevent-overflow">
                <!-- KPIs principais - CORRIGIDO PARA MOBILE -->
                <div class="grid gap-4 md:gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 grid-cards">
                    <section class="rounded-2xl bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-4 md:p-5 shadow-md border border-slate-200 dark:border-slate-700 transition-all duration-300 hover:shadow-lg hover:border-slate-300 dark:hover:border-slate-600 mobile-collapse">
                        <div class="flex items-center justify-between">
                            <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-100">
                                Imóveis ativos
                            </h2>
                            <div class="rounded-full bg-blue-50 dark:bg-blue-900/20 p-2">
                                <i class="bi bi-building text-blue-500 text-lg"></i>
                            </div>
                        </div>
                        <p class="mt-3 text-xl md:text-2xl font-bold text-slate-900 dark:text-slate-50 mobile-text-lg">
                            182
                        </p>
                        <p class="mt-1 text-xs md:text-sm text-emerald-600 dark:text-emerald-400 flex items-center">
                            <i class="bi bi-arrow-up-right mr-1"></i> +12 imóveis este mês
                        </p>
                    </section>

                    <section class="rounded-2xl bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-4 md:p-5 shadow-md border border-slate-200 dark:border-slate-700 transition-all duration-300 hover:shadow-lg hover:border-slate-300 dark:hover:border-slate-600 mobile-collapse">
                        <div class="flex items-center justify-between">
                            <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-100">
                                Unidades alugadas
                            </h2>
                            <div class="rounded-full bg-emerald-50 dark:bg-emerald-900/20 p-2">
                                <i class="bi bi-key text-emerald-500 text-lg"></i>
                            </div>
                        </div>
                        <p class="mt-3 text-xl md:text-2xl font-bold text-slate-900 dark:text-slate-50 mobile-text-lg">
                            147
                        </p>
                        <p class="mt-1 text-xs md:text-sm text-emerald-600 dark:text-emerald-400">
                            Taxa de ocupação: <span class="font-semibold">87%</span>
                        </p>
                    </section>

                    <section class="rounded-2xl bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-4 md:p-5 shadow-md border border-slate-200 dark:border-slate-700 transition-all duration-300 hover:shadow-lg hover:border-slate-300 dark:hover:border-slate-600 mobile-collapse">
                        <div class="flex items-center justify-between">
                            <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-100">
                                Receita este mês
                            </h2>
                            <div class="rounded-full bg-amber-50 dark:bg-amber-900/20 p-2">
                                <i class="bi bi-cash-stack text-amber-500 text-lg"></i>
                            </div>
                        </div>
                        <p class="mt-3 text-xl md:text-2xl font-bold text-slate-900 dark:text-slate-50 mobile-text-lg">
                            1 245 000 MT
                        </p>
                        <p class="mt-1 text-xs md:text-sm text-emerald-600 dark:text-emerald-400 flex items-center">
                            <i class="bi bi-arrow-up-right mr-1"></i> +9% vs mês anterior
                        </p>
                    </section>

                    <section class="rounded-2xl bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-4 md:p-5 shadow-md border border-slate-200 dark:border-slate-700 transition-all duration-300 hover:shadow-lg hover:border-slate-300 dark:hover:border-slate-600 mobile-collapse">
                        <div class="flex items-center justify-between">
                            <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-100">
                                Novos leads
                            </h2>
                            <div class="rounded-full bg-purple-50 dark:bg-purple-900/20 p-2">
                                <i class="bi bi-people text-purple-500 text-lg"></i>
                            </div>
                        </div>
                        <p class="mt-3 text-xl md:text-2xl font-bold text-slate-900 dark:text-slate-50 mobile-text-lg">
                            56
                        </p>
                        <p class="mt-1 text-xs md:text-sm text-slate-500 dark:text-slate-400">
                            Últimos 7 dias
                        </p>
                    </section>
                </div>

                <!-- Leads recentes + estatísticas de portfólio - CORRIGIDO -->
                <div class="grid gap-4 md:gap-6 grid-cols-1 lg:grid-cols-3 prevent-overflow">
                    <!-- Leads recentes -->
                    <section class="lg:col-span-2 rounded-2xl bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-4 md:p-5 shadow-md border border-slate-200 dark:border-slate-700 mobile-collapse">
                        <div class="flex items-center justify-between mb-4 mobile-stack">
                            <div>
                                <h2 class="text-base font-bold text-slate-800 dark:text-slate-100">
                                    Leads recentes
                                </h2>
                                <p class="text-xs md:text-sm text-slate-500 dark:text-slate-400">
                                    Contatos que entraram nas últimas 24 horas
                                </p>
                            </div>
                            <button
                                class="w-full md:w-auto inline-flex items-center justify-center rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 px-4 py-2 text-sm font-medium text-slate-700 dark:text-slate-100 hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors duration-200 mobile-full-width">
                                Ver todos
                            </button>
                        </div>

                        <div class="table-container rounded-xl border border-slate-200 dark:border-slate-700">
                            <table class="min-w-full text-sm">
                                <thead class="bg-slate-50 dark:bg-slate-800/50">
                                    <tr class="text-left text-slate-500 dark:text-slate-400 border-b border-slate-200 dark:border-slate-700">
                                        <th class="py-3 px-3 md:px-4 font-semibold mobile-padding-xs">Nome</th>
                                        <th class="py-3 px-3 md:px-4 font-semibold mobile-padding-xs mobile-hide md:table-cell">Imóvel</th>
                                        <th class="py-3 px-3 md:px-4 font-semibold mobile-padding-xs mobile-hide lg:table-cell">Origem</th>
                                        <th class="py-3 px-3 md:px-4 font-semibold mobile-padding-xs">Status</th>
                                        <th class="py-3 px-3 md:px-4 font-semibold mobile-padding-xs mobile-hide md:table-cell">Data</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors duration-150">
                                        <td class="py-3 px-3 md:px-4 font-medium text-slate-800 dark:text-slate-100 mobile-padding-xs">Ana João</td>
                                        <td class="py-3 px-3 md:px-4 text-slate-600 dark:text-slate-300 mobile-padding-xs mobile-hide md:table-cell">T2 – Polana</td>
                                        <td class="py-3 px-3 md:px-4 text-slate-600 dark:text-slate-300 mobile-padding-xs mobile-hide lg:table-cell">Website</td>
                                        <td class="py-3 px-3 md:px-4 mobile-padding-xs">
                                            <span class="inline-flex items-center rounded-full bg-emerald-100 text-emerald-700 dark:bg-emerald-900/40 dark:text-emerald-300 px-2.5 py-1 text-xs font-medium">
                                                Em negociação
                                            </span>
                                        </td>
                                        <td class="py-3 px-3 md:px-4 text-slate-600 dark:text-slate-300 mobile-padding-xs mobile-hide md:table-cell">Hoje, 09:32</td>
                                    </tr>
                                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors duration-150">
                                        <td class="py-3 px-3 md:px-4 font-medium text-slate-800 dark:text-slate-100 mobile-padding-xs">Carlos Manuel</td>
                                        <td class="py-3 px-3 md:px-4 text-slate-600 dark:text-slate-300 mobile-padding-xs mobile-hide md:table-cell">Moradia – Matola</td>
                                        <td class="py-3 px-3 md:px-4 text-slate-600 dark:text-slate-300 mobile-padding-xs mobile-hide lg:table-cell">Facebook Ads</td>
                                        <td class="py-3 px-3 md:px-4 mobile-padding-xs">
                                            <span class="inline-flex items-center rounded-full bg-sky-100 text-sky-700 dark:bg-sky-900/40 dark:text-sky-300 px-2.5 py-1 text-xs font-medium">
                                                Novo lead
                                            </span>
                                        </td>
                                        <td class="py-3 px-3 md:px-4 text-slate-600 dark:text-slate-300 mobile-padding-xs mobile-hide md:table-cell">Hoje, 08:17</td>
                                    </tr>
                                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors duration-150">
                                        <td class="py-3 px-3 md:px-4 font-medium text-slate-800 dark:text-slate-100 mobile-padding-xs">Lourenço Mucavele</td>
                                        <td class="py-3 px-3 md:px-4 text-slate-600 dark:text-slate-300 mobile-padding-xs mobile-hide md:table-cell">Escritório – Baixa</td>
                                        <td class="py-3 px-3 md:px-4 text-slate-600 dark:text-slate-300 mobile-padding-xs mobile-hide lg:table-cell">Indicação</td>
                                        <td class="py-3 px-3 md:px-4 mobile-padding-xs">
                                            <span class="inline-flex items-center rounded-full bg-amber-100 text-amber-700 dark:bg-amber-900/40 dark:text-amber-300 px-2.5 py-1 text-xs font-medium">
                                                Visita agendada
                                            </span>
                                        </td>
                                        <td class="py-3 px-3 md:px-4 text-slate-600 dark:text-slate-300 mobile-padding-xs mobile-hide md:table-cell">Ontem, 17:40</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>

                    <!-- Estatísticas de portfólio -->
                    <section class="rounded-2xl bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-4 md:p-5 shadow-md border border-slate-200 dark:border-slate-700 mobile-collapse">
                        <h2 class="text-base font-bold text-slate-800 dark:text-slate-100">
                            Portfólio de imóveis
                        </h2>
                        <p class="mt-1 text-xs md:text-sm text-slate-500 dark:text-slate-400">
                            Distribuição por tipo
                        </p>

                        <div class="mt-4 space-y-3 text-sm">
                            <div class="flex items-center justify-between p-3 rounded-lg bg-slate-50 dark:bg-slate-800/50">
                                <span class="flex items-center gap-2 font-medium text-slate-700 dark:text-slate-200">
                                    <span class="h-3 w-3 rounded-full bg-indigo-500"></span>
                                    Apartamentos
                                </span>
                                <span class="font-bold text-slate-900 dark:text-slate-100">98</span>
                            </div>
                            <div class="flex items-center justify-between p-3 rounded-lg bg-slate-50 dark:bg-slate-800/50">
                                <span class="flex items-center gap-2 font-medium text-slate-700 dark:text-slate-200">
                                    <span class="h-3 w-3 rounded-full bg-emerald-500"></span>
                                    Moradias
                                </span>
                                <span class="font-bold text-slate-900 dark:text-slate-100">52</span>
                            </div>
                            <div class="flex items-center justify-between p-3 rounded-lg bg-slate-50 dark:bg-slate-800/50">
                                <span class="flex items-center gap-2 font-medium text-slate-700 dark:text-slate-200">
                                    <span class="h-3 w-3 rounded-full bg-amber-500"></span>
                                    Escritórios
                                </span>
                                <span class="font-bold text-slate-900 dark:text-slate-100">21</span>
                            </div>
                            <div class="flex items-center justify-between p-3 rounded-lg bg-slate-50 dark:bg-slate-800/50">
                                <span class="flex items-center gap-2 font-medium text-slate-700 dark:text-slate-200">
                                    <span class="h-3 w-3 rounded-full bg-sky-500"></span>
                                    Lojas
                                </span>
                                <span class="font-bold text-slate-900 dark:text-slate-100">11</span>
                            </div>
                        </div>

                        <div class="mt-6">
                            <h3 class="text-sm font-bold text-slate-700 dark:text-slate-200">
                                Bairros com mais procura
                            </h3>
                            <ul class="mt-3 space-y-2 text-sm text-slate-600 dark:text-slate-300">
                                <li class="flex items-center justify-between p-2 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors duration-150">
                                    <span class="font-medium">Polana</span>
                                    <span class="text-slate-500 dark:text-slate-400">24 leads</span>
                                </li>
                                <li class="flex items-center justify-between p-2 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors duration-150">
                                    <span class="font-medium">Matola</span>
                                    <span class="text-slate-500 dark:text-slate-400">18 leads</span>
                                </li>
                                <li class="flex items-center justify-between p-2 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors duration-150">
                                    <span class="font-medium">Baixa</span>
                                    <span class="text-slate-500 dark:text-slate-400">15 leads</span>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>

                <!-- Visitas agendadas + actividade recente - CORRIGIDO -->
                <div class="grid gap-4 md:gap-6 grid-cols-1 lg:grid-cols-2 prevent-overflow">
                    <section class="rounded-2xl bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-4 md:p-5 shadow-md border border-slate-200 dark:border-slate-700 mobile-collapse">
                        <h2 class="text-base font-bold text-slate-800 dark:text-slate-100">
                            Visitas agendadas
                        </h2>
                        <p class="mt-1 text-xs md:text-sm text-slate-500 dark:text-slate-400">
                            Próximas visitas aos imóveis
                        </p>

                        <ul class="mt-4 space-y-3 text-sm">
                            <li class="flex items-start justify-between p-3 rounded-lg bg-blue-50 dark:bg-blue-900/20 border border-blue-100 dark:border-blue-800/30">
                                <div>
                                    <p class="font-bold text-slate-800 dark:text-slate-100">
                                        T3 – Sommerschield
                                    </p>
                                    <p class="text-slate-500 dark:text-slate-400 mt-1">
                                        Cliente: Marta Zimba
                                    </p>
                                </div>
                                <div class="text-right">
                                    <p class="font-bold text-blue-600 dark:text-blue-400">Hoje</p>
                                    <p class="text-slate-500 dark:text-slate-400">15:30</p>
                                </div>
                            </li>
                            <li class="flex items-start justify-between p-3 rounded-lg bg-slate-50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700">
                                <div>
                                    <p class="font-bold text-slate-800 dark:text-slate-100">
                                        Moradia – Matola Gare
                                    </p>
                                    <p class="text-slate-500 dark:text-slate-400 mt-1">
                                        Cliente: Daniel Langa
                                    </p>
                                </div>
                                <div class="text-right">
                                    <p class="font-bold text-slate-800 dark:text-slate-100">Amanhã</p>
                                    <p class="text-slate-500 dark:text-slate-400">10:00</p>
                                </div>
                            </li>
                            <li class="flex items-start justify-between p-3 rounded-lg bg-slate-50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700">
                                <div>
                                    <p class="font-bold text-slate-800 dark:text-slate-100">
                                        Escritório – Baixa
                                    </p>
                                    <p class="text-slate-500 dark:text-slate-400 mt-1">
                                        Cliente: Empresa X
                                    </p>
                                </div>
                                <div class="text-right">
                                    <p class="font-bold text-slate-800 dark:text-slate-100">Amanhã</p>
                                    <p class="text-slate-500 dark:text-slate-400">16:15</p>
                                </div>
                            </li>
                        </ul>
                    </section>

                    <section class="rounded-2xl bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-4 md:p-5 shadow-md border border-slate-200 dark:border-slate-700 mobile-collapse">
                        <h2 class="text-base font-bold text-slate-800 dark:text-slate-100">
                            Actividade recente
                        </h2>
                        <p class="mt-1 text-xs md:text-sm text-slate-500 dark:text-slate-400">
                            Últimas ações na plataforma
                        </p>

                        <ul class="mt-4 space-y-3 text-sm">
                            <li class="flex gap-3 p-3 rounded-lg bg-slate-50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700">
                                <span class="mt-1.5 h-2.5 w-2.5 rounded-full bg-emerald-500 flex-shrink-0"></span>
                                <div>
                                    <p class="text-slate-800 dark:text-slate-100">
                                        Imóvel <strong class="text-emerald-600 dark:text-emerald-400">T2 – Polana</strong> marcado como alugado.
                                    </p>
                                    <p class="text-slate-500 dark:text-slate-400 mt-1">Há 12 minutos</p>
                                </div>
                            </li>
                            <li class="flex gap-3 p-3 rounded-lg bg-slate-50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700">
                                <span class="mt-1.5 h-2.5 w-2.5 rounded-full bg-sky-500 flex-shrink-0"></span>
                                <div>
                                    <p class="text-slate-800 dark:text-slate-100">
                                        Novo imóvel <strong class="text-sky-600 dark:text-sky-400">Moradia – Costa do Sol</strong> adicionado.
                                    </p>
                                    <p class="text-slate-500 dark:text-slate-400 mt-1">Há 1 hora</p>
                                </div>
                            </li>
                            <li class="flex gap-3 p-3 rounded-lg bg-slate-50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700">
                                <span class="mt-1.5 h-2.5 w-2.5 rounded-full bg-amber-500 flex-shrink-0"></span>
                                <div>
                                    <p class="text-slate-800 dark:text-slate-100">
                                        Lead <strong class="text-amber-600 dark:text-amber-400">Carlos Manuel</strong> movido para "Visita agendada".
                                    </p>
                                    <p class="text-slate-500 dark:text-slate-400 mt-1">Há 3 horas</p>
                                </div>
                            </li>
                        </ul>
                    </section>
                </div>
            </main>
        </div>
    </div>

    <script src="./src/main.js"></script>
</body>

</html>