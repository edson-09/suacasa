<?= $this->extend('Admin\Views\layouts\master') ?>

<?= $this->section('content') ?>

<!-- Cabeçalho da página -->
<div class="flex flex-col md:flex-row md:items-center md:justify-between w-full">
    <div class="w-full md:w-auto">
        <h1 class="text-2xl font-bold text-slate-800 dark:text-white">Minha Carteira</h1>
        <p class="text-slate-500 dark:text-slate-400 mt-1">Gerencie suas finanças e transações</p>
    </div>
    <div class="mt-4 md:mt-0 flex gap-2 md:gap-3 w-full md:w-auto">
        <button class="flex items-center gap-2 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 px-3 md:px-4 py-2.5 text-sm font-medium text-slate-700 dark:text-slate-100 hover:bg-slate-50 dark:hover:bg-slate-700 transition-all duration-200 hover:shadow-sm flex-1 md:flex-none justify-center">
            <i class="bi bi-download"></i>
            <span class="hidden sm:inline">Exportar</span>
        </button>

        <!-- drawer init and toggle -->
        <div class="text-center">
            <button class="flex items-center gap-2 rounded-xl bg-gradient-to-br from-blue-500 to-blue-900 px-3 md:px-4 py-2.5 text-sm font-medium text-white hover:from-indigo-600 hover:to-purple-700 transition-all duration-200 shadow-lg hover:shadow-xl flex-1 md:flex-none justify-center" type="button" data-drawer-target="drawer-right-example" data-drawer-show="drawer-right-example" data-drawer-placement="right" aria-controls="drawer-right-example">
                <i class="bi bi-plus-lg"></i>
                <span class="hidden sm:inline">Adicionar Fundos</span>
            </button>
        </div>

        <!-- drawer component -->
        <div id="drawer-right-example" class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-neutral-primary-soft w-96" tabindex="-1" aria-labelledby="drawer-right-label">
            <div class="border-b border-default pb-4 mb-5 flex items-center">
                <h5 id="drawer-right-example" class="inline-flex items-center text-lg font-medium text-body">
                    <svg class="w-5 h-5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    Adicionar Fundos
                </h5>
                <button type="button" data-drawer-hide="drawer-right-example" aria-controls="drawer-right-example" class="cursor-pointer text-body bg-transparent hover:text-heading hover:bg-neutral-tertiary rounded-base w-9 h-9 absolute top-2.5 end-2.5 flex items-center justify-center">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                    </svg>
                    <span class="sr-only">Close menu</span>
                </button>
            </div>
            <div class="content">
                <form action="">
                    <div class="mb-3">
                        <label for="first_name" class="block mb-2.5 text-sm font-medium text-heading">Insira o Valor</label>
                        <input type="number" id="first_name" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="300" required />
                    </div>
                    <div class="mb-3">
                        <label for="countries" class="block mb-2.5 text-sm font-medium text-heading">Método de Pagamento</label>
                        <select id="countries" class="block w-full px-3 py-2.5 bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand shadow-xs placeholder:text-body">
                            <option value="M-Pesa" selected>M-Pesa</option>
                            <option value="E-Mola">E-Mola</option>
                            <option value="Banco">Banco</option>
                        </select>
                    </div>
                    <button type="submit" class="py-1.5 px-8 rounded-md bg-blue-500 text-white cursor-pointer">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Saldo e Cartões -->
<div class="grid gap-6 lg:grid-cols-3 w-full">
    <!-- Saldo Principal -->
    <div class="lg:col-span-2 w-full">
        <div class="rounded-2xl bg-gradient-to-br from-blue-500 to-blue-900 p-10 text-white shadow-2xl wallet-card relative overflow-hidden w-full">
            <div class="absolute inset-0 bg-black/10"></div>
            <div class="relative z-10 w-full">
                <div class="flex items-center justify-between mb-4 md:mb-6 w-full">
                    <div class="flex-1 min-w-0">
                        <h2 class="text-lg font-semibold truncate">Saldo Disponível</h2>
                        <p class="text-indigo-100 text-sm truncate">Saldo atual na conta</p>
                    </div>
                    <div class="rounded-full bg-white/20 p-2 md:p-3 backdrop-blur-sm flex-shrink-0 ml-4">
                        <i class="bi bi-wallet2 text-xl"></i>
                    </div>
                </div>
                <div class="mb-4 md:mb-6 w-full">
                    <p class="text-2xl md:text-4xl font-bold value-pulse mb-2 truncate">1.245.000 MT</p>
                    <p class="text-indigo-100 text-sm flex items-center gap-1">
                        <i class="bi bi-arrow-up-right text-emerald-300"></i>
                        <span class="text-emerald-300 font-medium">+45.000 MT</span>
                        <span class="hidden sm:inline">este mês</span>
                    </p>
                </div>
                <div class="flex gap-2 md:gap-3 w-full">
                    <button class="flex-1 bg-white/20 hover:bg-white/30 backdrop-blur-sm rounded-xl py-2 md:py-3 px-2 md:px-4 text-center transition-all duration-200 hover:transform hover:scale-105 border border-white/10 min-w-0">
                        <span class="text-xs md:text-sm font-medium truncate">Depositar com M-Pesa</span>
                    </button>
                    <button class="flex-1 bg-white/20 hover:bg-white/30 backdrop-blur-sm rounded-xl py-2 md:py-3 px-2 md:px-4 text-center transition-all duration-200 hover:transform hover:scale-105 border border-white/10 min-w-0">
                        <span class="text-xs md:text-sm font-medium truncate">Depositar com E-Mola</span>
                    </button>
                    <button class="flex-1 bg-white/20 hover:bg-white/30 backdrop-blur-sm rounded-xl py-2 md:py-3 px-2 md:px-4 text-center transition-all duration-200 hover:transform hover:scale-105 border border-white/10 min-w-0">
                        <span class="text-xs md:text-sm font-medium truncate">Depositar via banco</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Cartões Vinculados -->
    <div class="space-y-4 md:space-y-6 w-full">
        <!-- Cartão Principal -->
        <div class="rounded-2xl bg-gradient-to-br from-slate-800 to-slate-900 p-4 md:p-5 text-white shadow-xl wallet-card relative overflow-hidden border border-slate-700 w-full">
            <div class="absolute top-0 right-0 w-16 h-16 md:w-20 md:h-20 bg-white/5 rounded-full -mr-8 -mt-8 md:-mr-10 md:-mt-10"></div>
            <div class="relative z-10 w-full">
                <div class="flex items-center justify-between mb-3 md:mb-4 w-full">
                    <span class="text-sm font-medium text-slate-300 truncate">Cartão Principal</span>
                    <i class="bi bi-wifi text-lg transform rotate-90 text-slate-400 flex-shrink-0 ml-2"></i>
                </div>
                <div class="mb-4 md:mb-6 w-full">
                    <p class="text-lg md:text-xl font-mono font-medium mb-2 md:mb-3 tracking-wider truncate">•••• •••• •••• 4679</p>
                    <div class="flex justify-between text-xs md:text-sm text-slate-400">
                        <span class="truncate mr-2">Edson Munguambe</span>
                        <span class="flex-shrink-0">08/28</span>
                    </div>
                </div>
                <div class="flex items-center justify-between w-full">
                    <div class="flex items-center gap-2 min-w-0">
                        <div class="w-6 h-6 md:w-8 md:h-8 bg-white rounded-full flex items-center justify-center flex-shrink-0">
                            <span class="text-slate-800 font-bold text-xs">V</span>
                        </div>
                        <span class="text-sm text-slate-300 truncate">Visa Platinum</span>
                    </div>
                    <div class="text-slate-400 flex-shrink-0 ml-2">
                        <i class="bi bi-shield-check"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Adicionar Cartão -->
        <div class="rounded-2xl bg-gradient-to-br from-slate-50 to-slate-100 dark:from-slate-800 dark:to-slate-900 py-1 md:p-6 border-2 border-dashed border-slate-300 dark:border-slate-600 text-center cursor-pointer hover:border-indigo-400 dark:hover:border-indigo-500 transition-all duration-300 hover:bg-slate-75 dark:hover:bg-slate-800/50 group w-full">
            <div class="flex flex-row gap-3 items-center justify-center h-full w-full">
                <div class="w-10 h-10 md:w-14 md:h-14 rounded-full bg-slate-200 dark:bg-slate-700 flex items-center justify-center group-hover:bg-indigo-100 dark:group-hover:bg-indigo-900/30 transition-colors duration-300">
                    <i class="bi bi-plus-lg text-slate-600 dark:text-slate-400 text-lg md:text-xl group-hover:text-indigo-600 dark:group-hover:text-indigo-400"></i>
                </div>
                <div class="text text-start">
                    <p class="text-sm font-medium text-slate-700 dark:text-slate-300 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 truncate w-full">Adicionar Cartão</p>
                    <p class="text-xs text-slate-500 dark:text-slate-400 mt-1 hidden sm:block">Visa, Mastercard, Amex</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Estatísticas Rápidas -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 w-full">
    <div class="rounded-2xl bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-4 md:p-6 shadow-lg border border-slate-200 dark:border-slate-700 hover:shadow-xl transition-all duration-300 w-full">
        <div class="flex items-center justify-between w-full">
            <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-100 truncate">
                Receita do Mês
            </h2>
            <div class="rounded-full bg-emerald-50 dark:bg-emerald-900/20 p-2 md:p-3 flex-shrink-0 ml-3">
                <i class="bi bi-arrow-down-left text-emerald-500 text-base md:text-lg"></i>
            </div>
        </div>
        <p class="mt-3 md:mt-4 text-xl md:text-3xl font-bold text-slate-900 dark:text-slate-50 truncate">
            485,000 MT
        </p>
        <p class="mt-1 md:mt-2 text-xs md:text-sm text-emerald-600 dark:text-emerald-400 flex items-center gap-1">
            <i class="bi bi-graph-up"></i>
            <span class="truncate">+12% vs mês anterior</span>
        </p>
    </div>

    <div class="rounded-2xl bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-4 md:p-6 shadow-lg border border-slate-200 dark:border-slate-700 hover:shadow-xl transition-all duration-300 w-full">
        <div class="flex items-center justify-between w-full">
            <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-100 truncate">
                Despesas
            </h2>
            <div class="rounded-full bg-rose-50 dark:bg-rose-900/20 p-2 md:p-3 flex-shrink-0 ml-3">
                <i class="bi bi-arrow-up-right text-rose-500 text-base md:text-lg"></i>
            </div>
        </div>
        <p class="mt-3 md:mt-4 text-xl md:text-3xl font-bold text-slate-900 dark:text-slate-50 truncate">
            127,500 MT
        </p>
        <p class="mt-1 md:mt-2 text-xs md:text-sm text-rose-600 dark:text-rose-400 truncate">
            Manutenção e taxas
        </p>
    </div>

    <div class="rounded-2xl bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-4 md:p-6 shadow-lg border border-slate-200 dark:border-slate-700 hover:shadow-xl transition-all duration-300 w-full">
        <div class="flex items-center justify-between w-full">
            <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-100 truncate">
                Lucro Líquido
            </h2>
            <div class="rounded-full bg-blue-50 dark:bg-blue-900/20 p-2 md:p-3 flex-shrink-0 ml-3">
                <i class="bi bi-graph-up text-blue-500 text-base md:text-lg"></i>
            </div>
        </div>
        <p class="mt-3 md:mt-4 text-xl md:text-3xl font-bold text-slate-900 dark:text-slate-50 truncate">
            357,500 MT
        </p>
        <p class="mt-1 md:mt-2 text-xs md:text-sm text-blue-600 dark:text-blue-400 truncate">
            73.7% margem
        </p>
    </div>

    <div class="rounded-2xl bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-4 md:p-6 shadow-lg border border-slate-200 dark:border-slate-700 hover:shadow-xl transition-all duration-300 w-full">
        <div class="flex items-center justify-between w-full">
            <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-100 truncate">
                Transações
            </h2>
            <div class="rounded-full bg-purple-50 dark:bg-purple-900/20 p-2 md:p-3 flex-shrink-0 ml-3">
                <i class="bi bi-arrow-left-right text-purple-500 text-base md:text-lg"></i>
            </div>
        </div>
        <p class="mt-3 md:mt-4 text-xl md:text-3xl font-bold text-slate-900 dark:text-slate-50 truncate">
            47
        </p>
        <p class="mt-1 md:mt-2 text-xs md:text-sm text-slate-500 dark:text-slate-400 truncate">
            Este mês
        </p>
    </div>
</div>

<!-- Gráfico e Metas -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 w-full">
    <!-- Gráfico de Receitas -->
    <div class="lg:col-span-2 rounded-2xl bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-4 md:p-6 shadow-lg border border-slate-200 dark:border-slate-700 w-full overflow-hidden">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-4 md:mb-6 w-full">
            <h2 class="text-base md:text-lg font-bold text-slate-800 dark:text-slate-100 mb-2 sm:mb-0">
                Histórico de Receitas
            </h2>
            <select class="rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 px-3 py-2 text-xs text-slate-700 dark:text-slate-200 outline-none focus:ring-2 focus:ring-indigo-500 w-full sm:w-auto">
                <option>Últimos 6 meses</option>
                <option>Este ano</option>
                <option>Último ano</option>
            </select>
        </div>

        <!-- Gráfico Responsivo -->
        <div class="h-32 md:h-48 flex items-end justify-between gap-1 md:gap-3 px-2 md:px-4 mb-4 md:mb-6 w-full overflow-x-auto">
            <!-- Barras do gráfico -->
            <div class="flex-1 min-w-[40px] md:min-w-0 flex flex-col items-center group">
                <div class="w-full bg-gradient-to-t from-indigo-400 to-indigo-600 rounded-t-lg transition-all duration-500 hover:from-indigo-500 hover:to-indigo-700" style="height: 40%"></div>
                <span class="text-xs text-slate-500 dark:text-slate-400 mt-2 group-hover:text-indigo-600 dark:group-hover:text-indigo-400">Jan</span>
            </div>
            <div class="flex-1 min-w-[40px] md:min-w-0 flex flex-col items-center group">
                <div class="w-full bg-gradient-to-t from-indigo-400 to-indigo-600 rounded-t-lg transition-all duration-500 hover:from-indigo-500 hover:to-indigo-700" style="height: 60%"></div>
                <span class="text-xs text-slate-500 dark:text-slate-400 mt-2 group-hover:text-indigo-600 dark:group-hover:text-indigo-400">Fev</span>
            </div>
            <div class="flex-1 min-w-[40px] md:min-w-0 flex flex-col items-center group">
                <div class="w-full bg-gradient-to-t from-indigo-400 to-indigo-600 rounded-t-lg transition-all duration-500 hover:from-indigo-500 hover:to-indigo-700" style="height: 80%"></div>
                <span class="text-xs text-slate-500 dark:text-slate-400 mt-2 group-hover:text-indigo-600 dark:group-hover:text-indigo-400">Mar</span>
            </div>
            <div class="flex-1 min-w-[40px] md:min-w-0 flex flex-col items-center group">
                <div class="w-full bg-gradient-to-t from-indigo-400 to-indigo-600 rounded-t-lg transition-all duration-500 hover:from-indigo-500 hover:to-indigo-700" style="height: 65%"></div>
                <span class="text-xs text-slate-500 dark:text-slate-400 mt-2 group-hover:text-indigo-600 dark:group-hover:text-indigo-400">Abr</span>
            </div>
            <div class="flex-1 min-w-[40px] md:min-w-0 flex flex-col items-center group">
                <div class="w-full bg-gradient-to-t from-indigo-400 to-indigo-600 rounded-t-lg transition-all duration-500 hover:from-indigo-500 hover:to-indigo-700" style="height: 90%"></div>
                <span class="text-xs text-slate-500 dark:text-slate-400 mt-2 group-hover:text-indigo-600 dark:group-hover:text-indigo-400">Mai</span>
            </div>
            <div class="flex-1 min-w-[40px] md:min-w-0 flex flex-col items-center group">
                <div class="w-full bg-gradient-to-t from-indigo-400 to-indigo-600 rounded-t-lg transition-all duration-500 hover:from-indigo-500 hover:to-indigo-700" style="height: 75%"></div>
                <span class="text-xs text-slate-500 dark:text-slate-400 mt-2 group-hover:text-indigo-600 dark:group-hover:text-indigo-400">Jun</span>
            </div>
        </div>

        <div class="flex justify-between items-center pt-4 border-t border-slate-200 dark:border-slate-700 w-full">
            <div class="text-center flex-1">
                <p class="text-lg md:text-2xl font-bold text-slate-800 dark:text-white">485K</p>
                <p class="text-xs text-slate-500 dark:text-slate-400">Receita Atual</p>
            </div>
            <div class="text-center flex-1">
                <p class="text-lg md:text-2xl font-bold text-emerald-600 dark:text-emerald-400">+12%</p>
                <p class="text-xs text-slate-500 dark:text-slate-400">Crescimento</p>
            </div>
            <div class="text-center flex-1">
                <p class="text-lg md:text-2xl font-bold text-indigo-600 dark:text-indigo-400">600K</p>
                <p class="text-xs text-slate-500 dark:text-slate-400">Meta</p>
            </div>
        </div>
    </div>

    <!-- Metas Financeiras -->
    <div class="rounded-2xl bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-4 md:p-6 shadow-lg border border-slate-200 dark:border-slate-700 w-full">
        <h2 class="text-base md:text-lg font-bold text-slate-800 dark:text-slate-100 mb-4 md:mb-6">
            Metas Financeiras
        </h2>

        <div class="space-y-4 md:space-y-6">
            <!-- Meta 1 -->
            <div class="space-y-2 md:space-y-3">
                <div class="flex justify-between items-center w-full">
                    <span class="text-xs md:text-sm font-medium text-slate-700 dark:text-slate-300 truncate"> Fundo de Emergência</span>
                    <span class="text-xs md:text-sm font-bold text-emerald-600 dark:text-emerald-400 flex-shrink-0 ml-2">75%</span>
                </div>
                <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2">
                    <div class="bg-emerald-500 h-2 rounded-full transition-all duration-1000" style="width: 75%"></div>
                </div>
                <p class="text-xs text-slate-500 dark:text-slate-400 truncate">375,000 MT / 500,000 MT</p>
            </div>

            <!-- Meta 2 -->
            <div class="space-y-2 md:space-y-3">
                <div class="flex justify-between items-center w-full">
                    <span class="text-xs md:text-sm font-medium text-slate-700 dark:text-slate-300 truncate"> Investimento</span>
                    <span class="text-xs md:text-sm font-bold text-blue-600 dark:text-blue-400 flex-shrink-0 ml-2">45%</span>
                </div>
                <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2">
                    <div class="bg-blue-500 h-2 rounded-full transition-all duration-1000" style="width: 45%"></div>
                </div>
                <p class="text-xs text-slate-500 dark:text-slate-400 truncate">900,000 MT / 2M MT</p>
            </div>

            <!-- Meta 3 -->
            <div class="space-y-2 md:space-y-3">
                <div class="flex justify-between items-center w-full">
                    <span class="text-xs md:text-sm font-medium text-slate-700 dark:text-slate-300 truncate"> Reforma</span>
                    <span class="text-xs md:text-sm font-bold text-amber-600 dark:text-amber-400 flex-shrink-0 ml-2">30%</span>
                </div>
                <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2">
                    <div class="bg-amber-500 h-2 rounded-full transition-all duration-1000" style="width: 30%"></div>
                </div>
                <p class="text-xs text-slate-500 dark:text-slate-400 truncate">150,000 MT / 500K MT</p>
            </div>
        </div>

        <button class="w-full mt-4 md:mt-6 flex items-center justify-center gap-2 rounded-xl border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 py-2 md:py-3 text-sm font-medium text-slate-700 dark:text-slate-100 hover:bg-slate-50 dark:hover:bg-slate-700 transition-all duration-200 hover:shadow-sm">
            <i class="bi bi-plus-lg"></i>
            Nova Meta
        </button>
    </div>
</div>

<!-- Transações Recentes -->
<div class="rounded-2xl bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-4 md:p-6 shadow-lg border border-slate-200 dark:border-slate-700 w-full overflow-hidden">
    <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-4 md:mb-6 w-full">
        <h2 class="text-base md:text-lg font-bold text-slate-800 dark:text-slate-100 mb-2 sm:mb-0">
            Transações Recentes
        </h2>
        <button class="flex items-center gap-2 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 px-3 md:px-4 py-2 text-sm font-medium text-slate-700 dark:text-slate-100 hover:bg-slate-50 dark:hover:bg-slate-700 transition-all duration-200 hover:shadow-sm w-full sm:w-auto justify-center">
            <span>Ver Todas</span>
            <i class="bi bi-arrow-right"></i>
        </button>
    </div>

    <div class="overflow-x-auto w-full">
        <table class="min-w-full text-sm w-full">
            <thead class="bg-slate-50 dark:bg-slate-800/50">
                <tr class="text-left text-slate-500 dark:text-slate-400 border-b border-slate-200 dark:border-slate-700">
                    <th class="py-3 px-2 md:px-4 font-semibold whitespace-nowrap">Descrição</th>
                    <th class="py-3 px-2 md:px-4 font-semibold whitespace-nowrap hidden sm:table-cell">Categoria</th>
                    <th class="py-3 px-2 md:px-4 font-semibold whitespace-nowrap">Data</th>
                    <th class="py-3 px-2 md:px-4 font-semibold text-right whitespace-nowrap">Valor</th>
                    <th class="py-3 px-2 md:px-4 font-semibold whitespace-nowrap hidden md:table-cell">Status</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                <!-- Transação 1 -->
                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 cursor-pointer">
                    <td class="py-3 px-2 md:px-4">
                        <div class="flex items-center gap-2 md:gap-3 min-w-0">
                            <div class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/20 flex items-center justify-center flex-shrink-0">
                                <i class="bi bi-house text-emerald-600 dark:text-emerald-400 text-sm md:text-base"></i>
                            </div>
                            <div class="min-w-0 flex-1">
                                <p class="font-medium text-slate-800 dark:text-slate-100 truncate text-xs md:text-sm">Aluguel - T3 Sommerschield</p>
                                <p class="text-xs text-slate-500 dark:text-slate-400 truncate">Marta Zimba</p>
                            </div>
                        </div>
                    </td>
                    <td class="py-3 px-2 md:px-4 whitespace-nowrap hidden sm:table-cell">
                        <span class="inline-flex items-center gap-1 text-slate-600 dark:text-slate-300 text-xs md:text-sm">
                            <i class="bi bi-arrow-down-left text-emerald-500"></i>
                            Receita
                        </span>
                    </td>
                    <td class="py-3 px-2 md:px-4 text-slate-600 dark:text-slate-300 whitespace-nowrap text-xs md:text-sm">
                        Hoje, 09:00
                    </td>
                    <td class="py-3 px-2 md:px-4 text-right whitespace-nowrap">
                        <span class="font-medium text-emerald-600 dark:text-emerald-400 text-xs md:text-sm">+25,000 MT</span>
                    </td>
                    <td class="py-3 px-2 md:px-4 whitespace-nowrap hidden md:table-cell">
                        <span class="inline-flex items-center rounded-full bg-emerald-100 text-emerald-700 dark:bg-emerald-900/40 dark:text-emerald-300 px-2 py-1 text-xs font-medium">
                            <i class="bi bi-check-circle mr-1"></i>
                            Concluído
                        </span>
                    </td>
                </tr>

                <!-- Transação 2 -->
                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 cursor-pointer">
                    <td class="py-3 px-2 md:px-4">
                        <div class="flex items-center gap-2 md:gap-3 min-w-0">
                            <div class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-rose-100 dark:bg-rose-900/20 flex items-center justify-center flex-shrink-0">
                                <i class="bi bi-tools text-rose-600 dark:text-rose-400 text-sm md:text-base"></i>
                            </div>
                            <div class="min-w-0 flex-1">
                                <p class="font-medium text-slate-800 dark:text-slate-100 truncate text-xs md:text-sm">Manutenção - Moradia</p>
                                <p class="text-xs text-slate-500 dark:text-slate-400 truncate">Serviços gerais</p>
                            </div>
                        </div>
                    </td>
                    <td class="py-3 px-2 md:px-4 whitespace-nowrap hidden sm:table-cell">
                        <span class="inline-flex items-center gap-1 text-slate-600 dark:text-slate-300 text-xs md:text-sm">
                            <i class="bi bi-arrow-up-right text-rose-500"></i>
                            Despesa
                        </span>
                    </td>
                    <td class="py-3 px-2 md:px-4 text-slate-600 dark:text-slate-300 whitespace-nowrap text-xs md:text-sm">
                        Ontem, 14:30
                    </td>
                    <td class="py-3 px-2 md:px-4 text-right whitespace-nowrap">
                        <span class="font-medium text-rose-600 dark:text-rose-400 text-xs md:text-sm">-8,500 MT</span>
                    </td>
                    <td class="py-3 px-2 md:px-4 whitespace-nowrap hidden md:table-cell">
                        <span class="inline-flex items-center rounded-full bg-rose-100 text-rose-700 dark:bg-rose-900/40 dark:text-rose-300 px-2 py-1 text-xs font-medium">
                            <i class="bi bi-check-circle mr-1"></i>
                            Concluído
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>