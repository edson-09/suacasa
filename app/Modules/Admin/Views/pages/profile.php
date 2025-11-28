<?= $this->extend('Admin\Views\layouts\master') ?>

<?= $this->section('content') ?>

<!-- Cabeçalho do Perfil -->
<div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold text-slate-900 dark:text-slate-100">Meu Perfil</h1>
        <p class="text-slate-600 dark:text-slate-400 mt-1">Gerencie suas informações pessoais e preferências</p>
    </div>
    <div class="flex space-x-3 mt-4 md:mt-0">
        <button class="rounded-xl bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 px-4 py-2 text-sm font-medium text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors duration-200 flex items-center space-x-2">
            <i class="bi bi-download"></i>
            <span>Exportar Dados</span>
        </button>

        <!-- drawer init and toggle -->
        <button class="flex items-center gap-2 rounded-xl bg-linear-to-br from-blue-500 to-blue-900 px-3 md:px-4 py-2.5 text-sm font-medium text-white hover:from-indigo-600 hover:to-purple-700 transition-all duration-200 shadow-lg hover:shadow-xl flex-1 md:flex-none justify-center" type="button" data-drawer-target="drawer-edit-profile" data-drawer-show="drawer-edit-profile" data-drawer-placement="right" aria-controls="drawer-edit-profile">
            <i class="bi bi-pencil"></i>
            <span>Editar Perfil</span>
        </button>

        <!-- drawer component -->
        <div id="drawer-edit-profile"
            class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white dark:bg-slate-800 w-96"
            tabindex="-1"
            aria-labelledby="drawer-edit-profile-label">
            <div class="border-b border-slate-200 dark:border-slate-700 pb-4 mb-5 flex items-center justify-between">
                <h5 id="drawer-edit-profile-label" class="text-lg font-semibold text-slate-900 dark:text-white flex items-center gap-2">
                    <i class="bi bi-person-gear text-blue-500"></i>
                    Editar Perfil
                </h5>
                <button type="button"
                    data-drawer-hide="drawer-edit-profile"
                    aria-controls="drawer-edit-profile"
                    class="text-slate-400 hover:text-slate-600 dark:hover:text-slate-300 bg-transparent hover:bg-slate-100 dark:hover:bg-slate-700 rounded-lg w-8 h-8 flex items-center justify-center transition-colors">
                    <i class="bi bi-x-lg"></i>
                    <span class="sr-only">Fechar menu</span>
                </button>
            </div>

            <div class="content">
                <form id="editProfileForm" onsubmit="updateProfile(event)">
                    <!-- Foto de Perfil -->
                    <div class="mb-6 text-center">
                        <div class="relative inline-block">
                            <div class="w-24 h-24 rounded-2xl bg-linear-to-br from-blue-500 to-blue-600 flex items-center justify-center text-white text-2xl font-bold shadow-lg mb-3">
                                JM
                            </div>
                            <button type="button"
                                onclick="triggerAvatarUpload()"
                                class="absolute -bottom-2 -right-2 w-8 h-8 bg-slate-700 hover:bg-slate-800 rounded-full flex items-center justify-center text-white text-sm border-2 border-white dark:border-slate-800 transition-colors">
                                <i class="bi bi-camera"></i>
                            </button>
                        </div>
                        <input type="file" id="avatarUpload" class="hidden" accept="image/*" onchange="handleAvatarChange(event)">
                        <p class="text-sm text-slate-500 dark:text-slate-400 mt-2">Clique no ícone para alterar a foto</p>
                    </div>

                    <div class="space-y-4">
                        <!-- Nome Completo -->
                        <div>
                            <label for="editFullName" class="block mb-2 text-sm font-medium text-slate-700 dark:text-slate-300">
                                Nome Completo *
                            </label>
                            <input type="text"
                                id="editFullName"
                                value="João Mendes"
                                class="w-full rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700 px-3 py-2.5 text-sm text-slate-900 dark:text-white placeholder-slate-400 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                                placeholder="Seu nome completo"
                                required>
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="editEmail" class="block mb-2 text-sm font-medium text-slate-700 dark:text-slate-300">
                                Email *
                            </label>
                            <input type="email"
                                id="editEmail"
                                value="joao.mendes@suacasa.co.mz"
                                class="w-full rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700 px-3 py-2.5 text-sm text-slate-900 dark:text-white placeholder-slate-400 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                                placeholder="seu.email@exemplo.com"
                                required>
                        </div>

                        <!-- Telefone -->
                        <div>
                            <label for="editPhone" class="block mb-2 text-sm font-medium text-slate-700 dark:text-slate-300">
                                Telefone
                            </label>
                            <input type="tel"
                                id="editPhone"
                                value="+258 84 123 4567"
                                class="w-full rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700 px-3 py-2.5 text-sm text-slate-900 dark:text-white placeholder-slate-400 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                                placeholder="+258 84 123 4567">
                        </div>

                        <!-- Cargo -->
                        <div>
                            <label for="editPosition" class="block mb-2 text-sm font-medium text-slate-700 dark:text-slate-300">
                                Cargo
                            </label>
                            <input type="text"
                                id="editPosition"
                                value="Corretor Sênior"
                                class="w-full rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700 px-3 py-2.5 text-sm text-slate-900 dark:text-white placeholder-slate-400 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                                placeholder="Seu cargo">
                        </div>

                        <!-- Departamento -->
                        <div>
                            <label for="editDepartment" class="block mb-2 text-sm font-medium text-slate-700 dark:text-slate-300">
                                Departamento
                            </label>
                            <select id="editDepartment"
                                class="w-full rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700 px-3 py-2.5 text-sm text-slate-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                <option value="vendas" selected>Vendas</option>
                                <option value="marketing">Marketing</option>
                                <option value="administrativo">Administrativo</option>
                                <option value="suporte">Suporte ao Cliente</option>
                                <option value="gerencia">Gerência</option>
                            </select>
                        </div>

                        <!-- Biografia -->
                        <div>
                            <label for="editBio" class="block mb-2 text-sm font-medium text-slate-700 dark:text-slate-300">
                                Biografia
                            </label>
                            <textarea id="editBio"
                                rows="3"
                                class="w-full rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700 px-3 py-2.5 text-sm text-slate-900 dark:text-white placeholder-slate-400 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors resize-none"
                                placeholder="Escreva uma breve descrição sobre você...">Corretor sênior com mais de 8 anos de experiência no mercado imobiliário moçambicano. Especializado em imóveis residenciais de alto padrão.</textarea>
                        </div>

                        <!-- Redes Sociais -->
                        <div>
                            <label class="block mb-2 text-sm font-medium text-slate-700 dark:text-slate-300">
                                Redes Sociais
                            </label>
                            <div class="space-y-2">
                                <div class="flex items-center gap-2">
                                    <i class="bi bi-linkedin text-blue-600 w-5"></i>
                                    <input type="text"
                                        placeholder="URL do LinkedIn"
                                        class="flex-1 rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700 px-3 py-2 text-sm text-slate-900 dark:text-white placeholder-slate-400 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                </div>
                                <div class="flex items-center gap-2">
                                    <i class="bi bi-facebook text-blue-500 w-5"></i>
                                    <input type="text"
                                        placeholder="URL do Facebook"
                                        class="flex-1 rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700 px-3 py-2 text-sm text-slate-900 dark:text-white placeholder-slate-400 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                </div>
                                <div class="flex items-center gap-2">
                                    <i class="bi bi-instagram text-pink-500 w-5"></i>
                                    <input type="text"
                                        placeholder="URL do Instagram"
                                        class="flex-1 rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700 px-3 py-2 text-sm text-slate-900 dark:text-white placeholder-slate-400 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Botões de Ação -->
                    <div class="flex gap-3 mt-8 pt-4 border-t border-slate-200 dark:border-slate-700">
                        <button type="button"
                            data-drawer-hide="drawer-edit-profile"
                            class="flex-1 py-2.5 px-4 text-sm font-medium text-slate-700 dark:text-slate-300 bg-slate-100 dark:bg-slate-700 rounded-lg hover:bg-slate-200 dark:hover:bg-slate-600 transition-colors">
                            Cancelar
                        </button>
                        <button type="submit"
                            class="flex-1 py-2.5 px-4 text-sm font-medium text-white bg-linear-to-br from-blue-500 to-blue-700 rounded-lg hover:from-blue-600 hover:to-blue-800 transition-all duration-200 shadow-sm">
                            Salvar Alterações
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="grid gap-6 lg:grid-cols-3 prevent-overflow">
    <!-- Coluna Esquerda - Informações Pessoais -->
    <div class="lg:col-span-2 space-y-6">
        <!-- Informações Básicas -->
        <section class="rounded-2xl bg-linear-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-5 shadow-md border border-slate-200 dark:border-slate-700">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-lg font-bold text-slate-800 dark:text-slate-100">
                    Informações Pessoais
                </h2>
                <button class="text-blue-500 hover:text-blue-600 text-sm font-medium flex items-center space-x-1">
                    <i class="bi bi-pencil"></i>
                    <span>Editar</span>
                </button>
            </div>

            <div class="flex flex-col md:flex-row items-start md:items-center space-y-6 md:space-y-0 md:space-x-6">
                <div class="flex-shrink-0">
                    <div class="w-24 h-24 rounded-2xl bg-linear-to-br from-blue-500 to-blue-600 flex items-center justify-center text-white text-2xl font-bold shadow-lg">
                        JM
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 flex-1">
                    <div>
                        <label class="text-sm text-slate-500 dark:text-slate-400">Nome Completo</label>
                        <p class="text-slate-800 dark:text-slate-100 font-medium mt-1">João Mendes</p>
                    </div>
                    <div>
                        <label class="text-sm text-slate-500 dark:text-slate-400">Cargo</label>
                        <p class="text-slate-800 dark:text-slate-100 font-medium mt-1">Corretor Sênior</p>
                    </div>
                    <div>
                        <label class="text-sm text-slate-500 dark:text-slate-400">Email</label>
                        <p class="text-slate-800 dark:text-slate-100 font-medium mt-1">joao.mendes@suacasa.co.mz</p>
                    </div>
                    <div>
                        <label class="text-sm text-slate-500 dark:text-slate-400">Telefone</label>
                        <p class="text-slate-800 dark:text-slate-100 font-medium mt-1">+258 84 123 4567</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Estatísticas Pessoais -->
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            <section class="rounded-2xl bg-linear-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-5 shadow-md border border-slate-200 dark:border-slate-700 transition-all duration-300 hover:shadow-lg hover:border-slate-300 dark:hover:border-slate-600">
                <div class="flex items-center justify-between">
                    <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-100">
                        Imóveis Ativos
                    </h2>
                    <div class="rounded-full bg-blue-50 dark:bg-blue-900/20 p-2">
                        <i class="bi bi-building text-blue-500 text-lg"></i>
                    </div>
                </div>
                <p class="mt-3 text-2xl font-bold text-slate-900 dark:text-slate-50">
                    24
                </p>
                <p class="mt-1 text-sm text-emerald-600 dark:text-emerald-400 flex items-center">
                    <i class="bi bi-arrow-up-right mr-1"></i> +3 este mês
                </p>
            </section>

            <section class="rounded-2xl bg-linear-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-5 shadow-md border border-slate-200 dark:border-slate-700 transition-all duration-300 hover:shadow-lg hover:border-slate-300 dark:hover:border-slate-600">
                <div class="flex items-center justify-between">
                    <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-100">
                        Taxa de Conversão
                    </h2>
                    <div class="rounded-full bg-emerald-50 dark:bg-emerald-900/20 p-2">
                        <i class="bi bi-graph-up-arrow text-emerald-500 text-lg"></i>
                    </div>
                </div>
                <p class="mt-3 text-2xl font-bold text-slate-900 dark:text-slate-50">
                    68%
                </p>
                <p class="mt-1 text-sm text-emerald-600 dark:text-emerald-400 flex items-center">
                    <i class="bi bi-arrow-up-right mr-1"></i> +5% vs anterior
                </p>
            </section>

            <section class="rounded-2xl bg-linear-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-5 shadow-md border border-slate-200 dark:border-slate-700 transition-all duration-300 hover:shadow-lg hover:border-slate-300 dark:hover:border-slate-600">
                <div class="flex items-center justify-between">
                    <h2 class="text-sm font-semibold text-slate-800 dark:text-slate-100">
                        Avaliação
                    </h2>
                    <div class="rounded-full bg-amber-50 dark:bg-amber-900/20 p-2">
                        <i class="bi bi-star-fill text-amber-500 text-lg"></i>
                    </div>
                </div>
                <p class="mt-3 text-2xl font-bold text-slate-900 dark:text-slate-50">
                    4.8
                </p>
                <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">
                    47 avaliações
                </p>
            </section>
        </div>

        <!-- Metas e Progresso -->
        <section class="rounded-2xl bg-linear-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-5 shadow-md border border-slate-200 dark:border-slate-700">
            <h2 class="text-lg font-bold text-slate-800 dark:text-slate-100 mb-6">
                Metas do Mês
            </h2>

            <div class="space-y-6">
                <div>
                    <div class="flex justify-between text-sm text-slate-600 dark:text-slate-400 mb-2">
                        <span>Vendas Concluídas</span>
                        <span class="font-medium">8/10</span>
                    </div>
                    <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-3">
                        <div class="bg-emerald-500 h-3 rounded-full" style="width: 80%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between text-sm text-slate-600 dark:text-slate-400 mb-2">
                        <span>Novos Clientes</span>
                        <span class="font-medium">12/15</span>
                    </div>
                    <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-3">
                        <div class="bg-blue-500 h-3 rounded-full" style="width: 80%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between text-sm text-slate-600 dark:text-slate-400 mb-2">
                        <span>Receita Mensal</span>
                        <span class="font-medium">1.2M/1.5M MT</span>
                    </div>
                    <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-3">
                        <div class="bg-purple-500 h-3 rounded-full" style="width: 80%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between text-sm text-slate-600 dark:text-slate-400 mb-2">
                        <span>Visitas Realizadas</span>
                        <span class="font-medium">18/20</span>
                    </div>
                    <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-3">
                        <div class="bg-amber-500 h-3 rounded-full" style="width: 90%"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Coluna Direita - Informações Adicionais -->
    <div class="space-y-6">
        <!-- Informações de Contacto -->
        <section class="rounded-2xl bg-linear-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-5 shadow-md border border-slate-200 dark:border-slate-700">
            <h2 class="text-lg font-bold text-slate-800 dark:text-slate-100 mb-4">
                Contactos
            </h2>

            <div class="space-y-4">
                <div class="flex items-center space-x-3 p-3 rounded-lg bg-slate-50 dark:bg-slate-800/50">
                    <div class="w-10 h-10 rounded-full bg-blue-100 dark:bg-blue-900/20 flex items-center justify-center">
                        <i class="bi bi-telephone text-blue-500"></i>
                    </div>
                    <div>
                        <p class="text-sm text-slate-500 dark:text-slate-400">Telefone Principal</p>
                        <p class="text-slate-800 dark:text-slate-100 font-medium">+258 84 123 4567</p>
                    </div>
                </div>

                <div class="flex items-center space-x-3 p-3 rounded-lg bg-slate-50 dark:bg-slate-800/50">
                    <div class="w-10 h-10 rounded-full bg-green-100 dark:bg-green-900/20 flex items-center justify-center">
                        <i class="bi bi-whatsapp text-green-500"></i>
                    </div>
                    <div>
                        <p class="text-sm text-slate-500 dark:text-slate-400">WhatsApp</p>
                        <p class="text-slate-800 dark:text-slate-100 font-medium">+258 84 123 4567</p>
                    </div>
                </div>

                <div class="flex items-center space-x-3 p-3 rounded-lg bg-slate-50 dark:bg-slate-800/50">
                    <div class="w-10 h-10 rounded-full bg-purple-100 dark:bg-purple-900/20 flex items-center justify-center">
                        <i class="bi bi-envelope text-purple-500"></i>
                    </div>
                    <div>
                        <p class="text-sm text-slate-500 dark:text-slate-400">Email</p>
                        <p class="text-slate-800 dark:text-slate-100 font-medium">joao.mendes@suacasa.co.mz</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Especialidades -->
        <section class="rounded-2xl bg-linear-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-5 shadow-md border border-slate-200 dark:border-slate-700">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-bold text-slate-800 dark:text-slate-100">
                    Especialidades
                </h2>
                <button class="text-blue-500 hover:text-blue-600 text-sm font-medium flex items-center space-x-1">
                    <i class="bi bi-plus-lg"></i>
                    <span>Adicionar</span>
                </button>
            </div>

            <div class="flex flex-wrap gap-2">
                <span class="inline-flex items-center rounded-full bg-blue-100 text-blue-700 dark:bg-blue-900/40 dark:text-blue-300 px-3 py-1 text-xs font-medium">
                    Apartamentos
                </span>
                <span class="inline-flex items-center rounded-full bg-emerald-100 text-emerald-700 dark:bg-emerald-900/40 dark:text-emerald-300 px-3 py-1 text-xs font-medium">
                    Moradias
                </span>
                <span class="inline-flex items-center rounded-full bg-purple-100 text-purple-700 dark:bg-purple-900/40 dark:text-purple-300 px-3 py-1 text-xs font-medium">
                    Escritórios
                </span>
                <span class="inline-flex items-center rounded-full bg-amber-100 text-amber-700 dark:bg-amber-900/40 dark:text-amber-300 px-3 py-1 text-xs font-medium">
                    Imóveis de Luxo
                </span>
                <span class="inline-flex items-center rounded-full bg-sky-100 text-sky-700 dark:bg-sky-900/40 dark:text-sky-300 px-3 py-1 text-xs font-medium">
                    Investimento
                </span>
            </div>
        </section>

        <!-- Atividade Recente -->
        <section class="rounded-2xl bg-linear-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-5 shadow-md border border-slate-200 dark:border-slate-700">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-bold text-slate-800 dark:text-slate-100">
                    Atividade Recente
                </h2>
                <button class="text-blue-500 hover:text-blue-600 text-sm font-medium">
                    Ver tudo
                </button>
            </div>

            <div class="space-y-4">
                <div class="flex gap-3">
                    <div class="w-2 h-2 mt-2 rounded-full bg-emerald-500 flex-shrink-0"></div>
                    <div class="flex-1">
                        <p class="text-sm text-slate-800 dark:text-slate-100">
                            Contrato assinado - <strong class="text-emerald-600 dark:text-emerald-400">T3 Polana</strong>
                        </p>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Hoje, 14:30 • Cliente: Maria Santos</p>
                    </div>
                </div>

                <div class="flex gap-3">
                    <div class="w-2 h-2 mt-2 rounded-full bg-amber-500 flex-shrink-0"></div>
                    <div class="flex-1">
                        <p class="text-sm text-slate-800 dark:text-slate-100">
                            Visita agendada - <strong class="text-amber-600 dark:text-amber-400">Moradia Matola</strong>
                        </p>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Amanhã, 10:00 • Cliente: Carlos Silva</p>
                    </div>
                </div>

                <div class="flex gap-3">
                    <div class="w-2 h-2 mt-2 rounded-full bg-sky-500 flex-shrink-0"></div>
                    <div class="flex-1">
                        <p class="text-sm text-slate-800 dark:text-slate-100">
                            Novo lead - <strong class="text-sky-600 dark:text-sky-400">Escritório Baixa</strong>
                        </p>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Ontem, 16:45 • Empresa TecnoLógica</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<?= $this->endSection() ?>