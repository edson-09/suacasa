<?= $this->extend('Admin\Views\layouts\master') ?>

<?= $this->section('content') ?>

<!-- Cabeçalho da página -->
<div class="flex flex-col md:flex-row md:items-center md:justify-between w-full fade-in">
    <div class="w-full md:w-auto">
        <h1 class="text-2xl font-bold text-slate-800 dark:text-white">Mensagens</h1>
        <p class="text-slate-500 dark:text-slate-400 mt-1">Gerencie suas conversas e mensagens</p>
    </div>
    <div class="mt-4 md:mt-0 flex gap-2 md:gap-3 w-full md:w-auto">
        <button class="flex items-center gap-2 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 px-3 md:px-4 py-2.5 text-sm font-medium text-slate-700 dark:text-slate-100 hover:bg-slate-50 dark:hover:bg-slate-700 transition-all duration-200 hover:shadow-sm flex-1 md:flex-none justify-center">
            <i class="bi bi-archive"></i>
            <span class="hidden sm:inline">Arquivar</span>
        </button>
        <button onclick="openNewMessage()" class="flex items-center gap-2 rounded-xl bg-gradient-to-br from-blue-500 to-blue-900 px-3 md:px-4 py-2.5 text-sm font-medium text-white hover:from-indigo-600 hover:to-purple-700 transition-all duration-200 shadow-lg hover:shadow-xl flex-1 md:flex-none justify-center">
            <i class="bi bi-pencil-square"></i>
            <span class="hidden sm:inline">Nova Mensagem</span>
        </button>
    </div>
</div>

<!-- Layout Principal no Estilo Gmail -->
<div class="flex flex-col lg:flex-row gap-6 w-full">
    <!-- Sidebar de Categorias -->
    <div class="lg:w-64 flex-shrink-0">
        <div class="rounded-2xl bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-4 md:p-6 shadow-lg border border-slate-200 dark:border-slate-700 h-full">
            <!-- Botão Nova Mensagem Mobile -->
            <button onclick="openNewMessage()" class="w-full flex items-center gap-3 rounded-xl bg-gradient-to-br from-blue-500 to-blue-900 mb-6 px-4 py-3 text-white hover:from-indigo-600 hover:to-purple-700 transition-all duration-200 shadow-lg lg:hidden">
                <i class="bi bi-pencil-square text-lg"></i>
                <span class="font-medium">Nova Mensagem</span>
            </button>

            <!-- Menu de Navegação -->
            <nav class="space-y-1" id="sidebar-nav">
                <button onclick="setActiveCategory('inbox')" data-category="inbox" class="w-full flex items-center gap-3 rounded-xl bg-indigo-50 dark:bg-indigo-900/20 text-indigo-600 dark:text-indigo-400 px-3 py-2.5 text-sm font-medium transition-all duration-200 sidebar-nav-item active">
                    <i class="bi bi-inbox"></i>
                    <span>Caixa de Entrada</span>
                    <span class="ml-auto bg-indigo-600 text-white text-xs px-2 py-1 rounded-full">12</span>
                </button>

                <button onclick="setActiveCategory('starred')" data-category="starred" class="w-full flex items-center gap-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-700 px-3 py-2.5 text-sm font-medium transition-all duration-200 sidebar-nav-item">
                    <i class="bi bi-star"></i>
                    <span>Destacadas</span>
                </button>

                <button onclick="setActiveCategory('snoozed')" data-category="snoozed" class="w-full flex items-center gap-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-700 px-3 py-2.5 text-sm font-medium transition-all duration-200 sidebar-nav-item">
                    <i class="bi bi-clock"></i>
                    <span>Adiadas</span>
                </button>

                <button onclick="setActiveCategory('sent')" data-category="sent" class="w-full flex items-center gap-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-700 px-3 py-2.5 text-sm font-medium transition-all duration-200 sidebar-nav-item">
                    <i class="bi bi-send"></i>
                    <span>Enviadas</span>
                </button>

                <button onclick="setActiveCategory('drafts')" data-category="drafts" class="w-full flex items-center gap-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-700 px-3 py-2.5 text-sm font-medium transition-all duration-200 sidebar-nav-item">
                    <i class="bi bi-file-earmark-text"></i>
                    <span>Rascunhos</span>
                    <span class="ml-auto bg-slate-400 text-white text-xs px-2 py-1 rounded-full">3</span>
                </button>

                <button onclick="setActiveCategory('trash')" data-category="trash" class="w-full flex items-center gap-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-700 px-3 py-2.5 text-sm font-medium transition-all duration-200 sidebar-nav-item">
                    <i class="bi bi-trash"></i>
                    <span>Lixeira</span>
                </button>
            </nav>

            <!-- Separador -->
            <div class="my-4 border-t border-slate-200 dark:border-slate-700"></div>

            <!-- Categorias -->
            <div class="space-y-1">
                <h3 class="text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wider px-3 mb-2">
                    Categorias
                </h3>

                <button onclick="setActiveCategory('properties')" data-category="properties" class="w-full flex items-center gap-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-700 px-3 py-2 text-sm transition-all duration-200 sidebar-nav-item">
                    <div class="w-3 h-3 rounded-full bg-blue-500"></div>
                    <span>Imóveis</span>
                </button>

                <button onclick="setActiveCategory('financial')" data-category="financial" class="w-full flex items-center gap-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-700 px-3 py-2 text-sm transition-all duration-200 sidebar-nav-item">
                    <div class="w-3 h-3 rounded-full bg-emerald-500"></div>
                    <span>Financeiro</span>
                </button>

                <button onclick="setActiveCategory('clients')" data-category="clients" class="w-full flex items-center gap-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-700 px-3 py-2 text-sm transition-all duration-200 sidebar-nav-item">
                    <div class="w-3 h-3 rounded-full bg-amber-500"></div>
                    <span>Clientes</span>
                </button>

                <button onclick="setActiveCategory('suppliers')" data-category="suppliers" class="w-full flex items-center gap-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-700 px-3 py-2 text-sm transition-all duration-200 sidebar-nav-item">
                    <div class="w-3 h-3 rounded-full bg-purple-500"></div>
                    <span>Fornecedores</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Área Principal de Mensagens -->
    <div class="flex-1 flex flex-col min-w-0">
        <!-- Barra de Ferramentas -->
        <div class="rounded-2xl bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-4 shadow-lg border border-slate-200 dark:border-slate-700 mb-4">
            <div class="flex flex-col sm:flex-row sm:items-center gap-4">
                <!-- Checkbox e Ações -->
                <div class="flex items-center gap-4">
                    <div class="flex items-center">
                        <input type="checkbox" class="rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                    </div>
                    <div class="flex gap-2">
                        <button class="p-2 text-slate-400 hover:text-slate-600 dark:hover:text-slate-300 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700">
                            <i class="bi bi-archive"></i>
                        </button>
                        <button class="p-2 text-slate-400 hover:text-slate-600 dark:hover:text-slate-300 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700">
                            <i class="bi bi-trash"></i>
                        </button>
                        <button class="p-2 text-slate-400 hover:text-slate-600 dark:hover:text-slate-300 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700">
                            <i class="bi bi-envelope"></i>
                        </button>
                        <button class="p-2 text-slate-400 hover:text-slate-600 dark:hover:text-slate-300 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700">
                            <i class="bi bi-clock"></i>
                        </button>
                    </div>
                </div>

                <!-- Filtros e Busca -->
                <div class="flex-1 flex gap-2">
                    <div class="relative flex-1 max-w-md">
                        <input type="text" placeholder="Pesquisar mensagens..."
                            class="w-full rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 px-3 py-2 pl-10 text-sm text-slate-700 dark:text-slate-200 outline-none focus:ring-2 focus:ring-indigo-500">
                        <i class="bi bi-search absolute left-3 top-1/2 transform -translate-y-1/2 text-slate-400"></i>
                    </div>
                    <button class="p-2 text-slate-400 hover:text-slate-600 dark:hover:text-slate-300 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700">
                        <i class="bi bi-filter"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Lista de Mensagens -->
        <div class="flex-1 rounded-2xl bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 shadow-lg border border-slate-200 dark:border-slate-700 overflow-hidden">
            <!-- Cabeçalho da Lista -->
            <div class="border-b border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800/50 px-4 py-3 hidden sm:grid grid-cols-12 gap-4 text-xs font-semibold text-slate-500 dark:text-slate-400">
                <div class="col-span-1"></div>
                <div class="col-span-1"></div>
                <div class="col-span-4">De</div>
                <div class="col-span-4">Assunto</div>
                <div class="col-span-2 text-right">Data</div>
            </div>

            <!-- Mensagens -->
            <div class="divide-y divide-slate-200 dark:divide-slate-700 max-h-[500px] overflow-y-auto">
                <!-- Mensagem 1 - Não lida -->
                <div onclick="openChat('Maria João', 'MJ', 'bg-gradient-to-r from-blue-500 to-indigo-600')"
                    class="grid grid-cols-12 gap-4 px-4 py-3 bg-blue-50 dark:bg-blue-900/10 border-l-4 border-blue-500 hover:bg-slate-100 dark:hover:bg-slate-700 cursor-pointer transition-colors duration-150"
                    data-message-category="properties">
                    <div class="col-span-1 flex items-center">
                        <input type="checkbox" class="rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                    </div>
                    <div class="col-span-1 flex items-center">
                        <button class="text-slate-400 hover:text-amber-400">
                            <i class="bi bi-star"></i>
                        </button>
                    </div>
                    <div class="col-span-4 flex items-center gap-3 min-w-0">
                        <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full flex items-center justify-center text-white text-sm font-semibold flex-shrink-0">
                            MJ
                        </div>
                        <div class="min-w-0 flex-1">
                            <p class="font-semibold text-slate-800 dark:text-white text-sm truncate">Maria João</p>
                            <p class="text-slate-500 dark:text-slate-400 text-xs truncate">Para: Edson Munguambe</p>
                        </div>
                    </div>
                    <div class="col-span-4 flex items-center min-w-0">
                        <div class="min-w-0 flex-1">
                            <p class="font-semibold text-slate-800 dark:text-white text-sm truncate">
                                Visita ao T3 Sommerschield - Confirmação
                            </p>
                            <p class="text-slate-600 dark:text-slate-400 text-xs truncate mt-1">
                                Olá Edson, gostaria de confirmar a visita para amanhã às 15h no apartamento T3...
                            </p>
                        </div>
                        <div class="flex gap-1 ml-2 flex-shrink-0">
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-300">
                                Imóvel
                            </span>
                        </div>
                    </div>
                    <div class="col-span-2 flex items-center justify-end gap-2 text-xs text-slate-500 dark:text-slate-400">
                        <span class="font-medium">15:30</span>
                        <i class="bi bi-paperclip"></i>
                    </div>
                </div>

                <!-- Mensagem 2 - Não lida -->
                <div class="grid grid-cols-12 gap-4 px-4 py-3 bg-blue-50 dark:bg-blue-900/10 border-l-4 border-blue-500 hover:bg-slate-100 dark:hover:bg-slate-700 cursor-pointer transition-colors duration-150">
                    <div class="col-span-1 flex items-center">
                        <input type="checkbox" class="rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                    </div>
                    <div class="col-span-1 flex items-center">
                        <button class="text-slate-400 hover:text-amber-400">
                            <i class="bi bi-star"></i>
                        </button>
                    </div>
                    <div class="col-span-4 flex items-center gap-3 min-w-0">
                        <div class="w-8 h-8 bg-gradient-to-r from-emerald-500 to-green-600 rounded-full flex items-center justify-center text-white text-sm font-semibold flex-shrink-0">
                            CM
                        </div>
                        <div class="min-w-0 flex-1">
                            <p class="font-semibold text-slate-800 dark:text-white text-sm truncate">Carlos Manuel</p>
                            <p class="text-slate-500 dark:text-slate-400 text-xs truncate">Para: Edson Munguambe</p>
                        </div>
                    </div>
                    <div class="col-span-4 flex items-center min-w-0">
                        <div class="min-w-0 flex-1">
                            <p class="font-semibold text-slate-800 dark:text-white text-sm truncate">
                                Problema com torneira - Moradia Matola
                            </p>
                            <p class="text-slate-600 dark:text-slate-400 text-xs truncate mt-1">
                                Boa tarde, a torneira da cozinha está com vazamento. Pode enviar alguém para...
                            </p>
                        </div>
                        <div class="flex gap-1 ml-2 flex-shrink-0">
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-rose-100 text-rose-800 dark:bg-rose-900 dark:text-rose-300">
                                Urgente
                            </span>
                        </div>
                    </div>
                    <div class="col-span-2 flex items-center justify-end text-xs text-slate-500 dark:text-slate-400">
                        <span class="font-medium">14:15</span>
                    </div>
                </div>

                <!-- Mensagem 3 - Lida -->
                <div class="grid grid-cols-12 gap-4 px-4 py-3 hover:bg-slate-50 dark:hover:bg-slate-700 cursor-pointer transition-colors duration-150">
                    <div class="col-span-1 flex items-center">
                        <input type="checkbox" class="rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                    </div>
                    <div class="col-span-1 flex items-center">
                        <button class="text-amber-400">
                            <i class="bi bi-star-fill"></i>
                        </button>
                    </div>
                    <div class="col-span-4 flex items-center gap-3 min-w-0">
                        <div class="w-8 h-8 bg-gradient-to-r from-purple-500 to-pink-600 rounded-full flex items-center justify-center text-white text-sm font-semibold flex-shrink-0">
                            MZ
                        </div>
                        <div class="min-w-0 flex-1">
                            <p class="text-slate-800 dark:text-white text-sm truncate">Marta Zimba</p>
                            <p class="text-slate-500 dark:text-slate-400 text-xs truncate">Para: Edson Munguambe</p>
                        </div>
                    </div>
                    <div class="col-span-4 flex items-center min-w-0">
                        <div class="min-w-0 flex-1">
                            <p class="text-slate-800 dark:text-white text-sm truncate">
                                Transferência realizada - Aluguel Junho
                            </p>
                            <p class="text-slate-600 dark:text-slate-400 text-xs truncate mt-1">
                                Olá Edson, acabei de realizar a transferência do aluguel. Valor: 25.000 MT...
                            </p>
                        </div>
                        <div class="flex gap-1 ml-2 flex-shrink-0">
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800 dark:bg-emerald-900 dark:text-emerald-300">
                                Financeiro
                            </span>
                        </div>
                    </div>
                    <div class="col-span-2 flex items-center justify-end text-xs text-slate-500 dark:text-slate-400">
                        <span>12:45</span>
                    </div>
                </div>

                <!-- Mensagem 4 - Lida -->
                <div class="grid grid-cols-12 gap-4 px-4 py-3 hover:bg-slate-50 dark:hover:bg-slate-700 cursor-pointer transition-colors duration-150">
                    <div class="col-span-1 flex items-center">
                        <input type="checkbox" class="rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                    </div>
                    <div class="col-span-1 flex items-center">
                        <button class="text-slate-400 hover:text-amber-400">
                            <i class="bi bi-star"></i>
                        </button>
                    </div>
                    <div class="col-span-4 flex items-center gap-3 min-w-0">
                        <div class="w-8 h-8 bg-gradient-to-r from-amber-500 to-orange-600 rounded-full flex items-center justify-center text-white text-sm font-semibold flex-shrink-0">
                            LM
                        </div>
                        <div class="min-w-0 flex-1">
                            <p class="text-slate-800 dark:text-white text-sm truncate">Lourenço Mucavele</p>
                            <p class="text-slate-500 dark:text-slate-400 text-xs truncate">Para: Edson Munguambe</p>
                        </div>
                    </div>
                    <div class="col-span-4 flex items-center min-w-0">
                        <div class="min-w-0 flex-1">
                            <p class="text-slate-800 dark:text-white text-sm truncate">
                                Documentação do escritório - Baixa
                            </p>
                            <p class="text-slate-600 dark:text-slate-400 text-xs truncate mt-1">
                                Precisamos atualizar a documentação do contrato do escritório. Pode enviar...
                            </p>
                        </div>
                        <div class="flex gap-1 ml-2 flex-shrink-0">
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-300">
                                Documentos
                            </span>
                        </div>
                    </div>
                    <div class="col-span-2 flex items-center justify-end text-xs text-slate-500 dark:text-slate-400">
                        <span>Ontem</span>
                    </div>
                </div>

                <!-- Mensagem 5 - Lida -->
                <div class="grid grid-cols-12 gap-4 px-4 py-3 hover:bg-slate-50 dark:hover:bg-slate-700 cursor-pointer transition-colors duration-150">
                    <div class="col-span-1 flex items-center">
                        <input type="checkbox" class="rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                    </div>
                    <div class="col-span-1 flex items-center">
                        <button class="text-slate-400 hover:text-amber-400">
                            <i class="bi bi-star"></i>
                        </button>
                    </div>
                    <div class="col-span-4 flex items-center gap-3 min-w-0">
                        <div class="w-8 h-8 bg-gradient-to-r from-slate-500 to-slate-700 rounded-full flex items-center justify-center text-white text-sm font-semibold flex-shrink-0">
                            EX
                        </div>
                        <div class="min-w-0 flex-1">
                            <p class="text-slate-800 dark:text-white text-sm truncate">Empresa X</p>
                            <p class="text-slate-500 dark:text-slate-400 text-xs truncate">Para: Edson Munguambe</p>
                        </div>
                    </div>
                    <div class="col-span-4 flex items-center min-w-0">
                        <div class="min-w-0 flex-1">
                            <p class="text-slate-800 dark:text-white text-sm truncate">
                                Renovação de contrato - Escritório Baixa
                            </p>
                            <p class="text-slate-600 dark:text-slate-400 text-xs truncate mt-1">
                                Gostaríamos de discutir a renovação do contrato do escritório. Estamos...
                            </p>
                        </div>
                        <div class="flex gap-1 ml-2 flex-shrink-0">
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-purple-100 text-purple-800 dark:bg-purple-900 dark:text-purple-300">
                                Contrato
                            </span>
                        </div>
                    </div>
                    <div class="col-span-2 flex items-center justify-end gap-2 text-xs text-slate-500 dark:text-slate-400">
                        <span>15 Jun</span>
                        <i class="bi bi-paperclip"></i>
                    </div>
                </div>
            </div>

            <!-- Rodapé com Paginação -->
            <div class="border-t border-slate-200 dark:border-slate-700 px-4 py-3 bg-slate-50 dark:bg-slate-800/50">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <p class="text-sm text-slate-500 dark:text-slate-400 text-center sm:text-left">
                        Mostrando 1-5 de 47 mensagens
                    </p>
                    <div class="flex gap-1 justify-center sm:justify-end">
                        <button class="w-8 h-8 rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 flex items-center justify-center text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-700 text-sm">
                            <i class="bi bi-chevron-left"></i>
                        </button>
                        <button class="w-8 h-8 rounded-lg bg-indigo-600 text-white flex items-center justify-center text-sm font-medium">
                            1
                        </button>
                        <button class="w-8 h-8 rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 flex items-center justify-center text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-700 text-sm">
                            2
                        </button>
                        <button class="w-8 h-8 rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 flex items-center justify-center text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-700 text-sm">
                            <i class="bi bi-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Área do Chat (hidden por padrão) -->
    <div id="chatArea" class="hidden flex-1 flex flex-col min-w-0">
        <!-- Cabeçalho do Chat -->
        <div class="rounded-2xl bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-4 shadow-lg border border-slate-200 dark:border-slate-700 mb-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <button onclick="closeChat()" class="p-2 text-slate-400 hover:text-slate-600 dark:hover:text-slate-300 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700">
                        <i class="bi bi-arrow-left"></i>
                    </button>
                    <div id="chatContactInfo">
                        <!-- Informações do contato serão preenchidas via JS -->
                    </div>
                </div>
                <div class="flex gap-2">
                    <button class="p-2 text-slate-400 hover:text-slate-600 dark:hover:text-slate-300 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700">
                        <i class="bi bi-telephone"></i>
                    </button>
                    <button class="p-2 text-slate-400 hover:text-slate-600 dark:hover:text-slate-300 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700">
                        <i class="bi bi-info-circle"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Área de Mensagens do Chat -->
        <div id="chatMessages" class="flex-1 rounded-2xl bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 shadow-lg border border-slate-200 dark:border-slate-700 p-4 mb-4 overflow-y-auto max-h-[500px]">
            <!-- Mensagens serão carregadas aqui via JS -->
            <div id="emptyChat" class="text-center py-12">
                <div class="w-16 h-16 bg-slate-100 dark:bg-slate-700 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="bi bi-chat-text text-2xl text-slate-400"></i>
                </div>
                <p class="text-slate-500 dark:text-slate-400">Nenhuma mensagem ainda</p>
                <p class="text-sm text-slate-400 dark:text-slate-500 mt-1">Inicie uma conversa enviando uma mensagem</p>
            </div>
        </div>

        <!-- Área de Nova Mensagem (para quando não há contato selecionado) -->
        <div id="newMessageArea" class="hidden rounded-2xl bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-6 shadow-lg border border-slate-200 dark:border-slate-700 mb-4">
            <h3 class="text-lg font-semibold text-slate-800 dark:text-white mb-4">Nova Mensagem</h3>
            <form id="newMessageForm" onsubmit="sendNewMessage(event)">
                <div class="space-y-4">
                    <div>
                        <label for="recipientType" class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                            Tipo de Destinatário
                        </label>
                        <select id="recipientType" onchange="toggleRecipientField()" class="w-full rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 px-3 py-2 text-sm text-slate-700 dark:text-slate-200 outline-none focus:ring-2 focus:ring-indigo-500">
                            <option value="phone">Número de Telefone</option>
                            <option value="email">Email</option>
                        </select>
                    </div>

                    <div id="phoneField">
                        <label for="phoneNumber" class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                            Número de Telefone
                        </label>
                        <input type="tel" id="phoneNumber" placeholder="+258 84 123 4567"
                            class="w-full rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 px-3 py-2 text-sm text-slate-700 dark:text-slate-200 outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>

                    <div id="emailField" class="hidden">
                        <label for="emailAddress" class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                            Email
                        </label>
                        <input type="email" id="emailAddress" placeholder="exemplo@email.com"
                            class="w-full rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 px-3 py-2 text-sm text-slate-700 dark:text-slate-200 outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>

                    <div>
                        <label for="messageContent" class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                            Mensagem
                        </label>
                        <textarea id="messageContent" rows="4" placeholder="Escreva sua mensagem aqui..."
                            class="w-full rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 px-3 py-2 text-sm text-slate-700 dark:text-slate-200 outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
                    </div>
                </div>

                <div class="flex gap-3 mt-6">
                    <button type="button" onclick="closeChat()" class="flex-1 py-2.5 px-4 text-sm font-medium text-slate-700 dark:text-slate-300 bg-slate-100 dark:bg-slate-700 rounded-lg hover:bg-slate-200 dark:hover:bg-slate-600 transition-colors">
                        Cancelar
                    </button>
                    <button type="submit" class="flex-1 py-2.5 px-4 text-sm font-medium text-white bg-gradient-to-br from-blue-500 to-blue-900 rounded-lg hover:from-indigo-600 hover:to-purple-700 transition-all duration-200">
                        Enviar Mensagem
                    </button>
                </div>
            </form>
        </div>

        <!-- Input de Mensagem (para chat existente) -->
        <div id="messageInputArea" class="hidden rounded-2xl bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-4 shadow-lg border border-slate-200 dark:border-slate-700">
            <div class="flex gap-3">
                <input type="text" id="messageInput" placeholder="Digite sua mensagem..."
                    class="flex-1 rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 px-3 py-2 text-sm text-slate-700 dark:text-slate-200 outline-none focus:ring-2 focus:ring-indigo-500">
                <button onclick="sendMessage()" class="bg-gradient-to-br from-blue-500 to-blue-900 text-white px-4 py-2 rounded-lg hover:from-indigo-600 hover:to-purple-700 transition-all duration-200">
                    <i class="bi bi-send"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>