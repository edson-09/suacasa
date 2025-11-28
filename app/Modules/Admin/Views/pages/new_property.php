<?= $this->extend('Admin\Views\layouts\master') ?>

<?= $this->section('content') ?>
<!-- Cabeçalho da página -->
<div class="flex flex-col md:flex-row md:items-center md:justify-between w-full mb-6">
    <div class="w-full md:w-auto">
        <h1 class="text-2xl font-bold text-slate-800 dark:text-white">Adicionar Novo Imóvel</h1>
        <p class="text-slate-500 dark:text-slate-400 mt-1">Preencha as informações do novo imóvel</p>
    </div>
    <div class="mt-4 md:mt-0 flex gap-2 md:gap-3 w-full md:w-auto">
        <a href="/admin/properties" class="flex items-center gap-2 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 px-6 py-3 text-sm font-medium text-slate-700 dark:text-slate-100 hover:bg-slate-50 dark:hover:bg-slate-700 transition-all duration-200">
            <i class="bi bi-arrow-left"></i>
            <span class="hidden sm:inline">Voltar</span>
        </a>
    </div>
</div>

<!-- Stepper -->
<div class="mb-8">
    <div class="flex items-center justify-between w-full max-w-6xl mx-auto">
        <!-- Step 1 -->
        <div class="flex items-center cursor-pointer step-indicator" data-step="1">
            <div class="w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center font-semibold text-sm step-number">
                1
            </div>
            <span class="ml-3 text-sm font-medium text-blue-600 dark:text-indigo-400 hidden sm:block">Informações Básicas</span>
        </div>

        <!-- Linha -->
        <div class="flex-1 h-1 bg-indigo-200 dark:bg-indigo-800 mx-4 step-line" data-step="1"></div>

        <!-- Step 2 -->
        <div class="flex items-center cursor-pointer step-indicator" data-step="2">
            <div class="w-10 h-10 rounded-full bg-slate-200 dark:bg-slate-700 text-slate-500 dark:text-slate-400 flex items-center justify-center font-semibold text-sm step-number">
                2
            </div>
            <span class="ml-3 text-sm font-medium text-slate-500 dark:text-slate-400 hidden sm:block">Detalhes</span>
        </div>

        <!-- Linha -->
        <div class="flex-1 h-1 bg-slate-200 dark:bg-slate-700 mx-4 step-line" data-step="2"></div>

        <!-- Step 3 -->
        <div class="flex items-center cursor-pointer step-indicator" data-step="3">
            <div class="w-10 h-10 rounded-full bg-slate-200 dark:bg-slate-700 text-slate-500 dark:text-slate-400 flex items-center justify-center font-semibold text-sm step-number">
                3
            </div>
            <span class="ml-3 text-sm font-medium text-slate-500 dark:text-slate-400 hidden sm:block">Valores</span>
        </div>

        <!-- Linha -->
        <div class="flex-1 h-1 bg-slate-200 dark:bg-slate-700 mx-4 step-line" data-step="3"></div>

        <!-- Step 4 -->
        <div class="flex items-center cursor-pointer step-indicator" data-step="4">
            <div class="w-10 h-10 rounded-full bg-slate-200 dark:bg-slate-700 text-slate-500 dark:text-slate-400 flex items-center justify-center font-semibold text-sm step-number">
                4
            </div>
            <span class="ml-3 text-sm font-medium text-slate-500 dark:text-slate-400 hidden sm:block">Finalizar</span>
        </div>
    </div>
</div>

<!-- Formulário -->
<div class="w-full max-w-full">
    <form id="property-form" class="rounded-2xl bg-gradient-to-br mb-16 from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 p-6 md:p-8 shadow-lg border border-slate-200 dark:border-slate-700">

        <!-- Step 1: Informações Básicas -->
        <div class="step-content" data-step="1">
            <h2 class="text-xl font-bold text-slate-800 dark:text-white mb-6 flex items-center gap-3">
                <div class="w-8 h-8 rounded-full bg-indigo-100 dark:bg-indigo-900 flex items-center justify-center">
                    <i class="bi bi-house text-indigo-600 dark:text-indigo-400 text-sm"></i>
                </div>
                Informações Básicas do Imóvel
            </h2>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Tipo de Imóvel -->
                <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                        Tipo de Imóvel *
                    </label>
                    <select name="tipo_imovel" required class="step-field w-full rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 px-4 py-3 text-slate-700 dark:text-slate-200 outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        <option value="">Selecione o tipo</option>
                        <option value="apartamento">Apartamento</option>
                        <option value="casa">Casa</option>
                        <option value="escritorio">Escritório</option>
                        <option value="loja">Loja</option>
                        <option value="galpao">Galpão</option>
                        <option value="terreno">Terreno</option>
                    </select>
                </div>

                <!-- Status do Imóvel -->
                <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                        Status *
                    </label>
                    <select name="status" required class="step-field w-full rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 px-4 py-3 text-slate-700 dark:text-slate-200 outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        <option value="">Selecione o status</option>
                        <option value="disponivel">Disponível</option>
                        <option value="alugado">Alugado</option>
                        <option value="manutencao">Em Manutenção</option>
                        <option value="vendido">Vendido</option>
                    </select>
                </div>

                <!-- Bairro -->
                <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                        Bairro *
                    </label>
                    <select name="bairro" required class="step-field w-full rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 px-4 py-3 text-slate-700 dark:text-slate-200 outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        <option value="">Selecione o bairro</option>
                        <option value="polana">Polana</option>
                        <option value="sommerschield">Sommerschield</option>
                        <option value="matola">Matola</option>
                        <option value="baixa">Baixa</option>
                        <option value="costa-sol">Costa do Sol</option>
                        <option value="coop">Coop</option>
                    </select>
                </div>

                <!-- Cidade -->
                <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                        Cidade *
                    </label>
                    <select name="cidade" required class="step-field w-full rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 px-4 py-3 text-slate-700 dark:text-slate-200 outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        <option value="">Selecione a cidade</option>
                        <option value="maputo">Maputo</option>
                        <option value="matola">Matola</option>
                        <option value="beira">Beira</option>
                        <option value="nampula">Nampula</option>
                        <option value="chimoio">Chimoio</option>
                    </select>
                </div>

                <!-- Endereço (campo de texto obrigatório) -->
                <div class="lg:col-span-2">
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                        Endereço Completo *
                    </label>
                    <input type="text" name="endereco" required
                        placeholder="Ex: Rua Principal, Nº 123"
                        class="step-field w-full rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 px-4 py-3 text-slate-700 dark:text-slate-200 outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                </div>
            </div>
        </div>

        <!-- Step 2: Detalhes do Imóvel -->
        <div class="step-content hidden" data-step="2">
            <h2 class="text-xl font-bold text-slate-800 dark:text-white mb-6 flex items-center gap-3">
                <div class="w-8 h-8 rounded-full bg-slate-100 dark:bg-slate-700 flex items-center justify-center">
                    <i class="bi bi-grid-3x3 text-slate-600 dark:text-slate-400 text-sm"></i>
                </div>
                Detalhes do Imóvel
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Quartos -->
                <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                        Quartos
                    </label>
                    <select name="quartos" class="step-field w-full rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 px-4 py-3 text-slate-700 dark:text-slate-200 outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        <option value="0">0 quartos</option>
                        <option value="1">1 quarto</option>
                        <option value="2" selected>2 quartos</option>
                        <option value="3">3 quartos</option>
                        <option value="4">4 quartos</option>
                        <option value="5">5+ quartos</option>
                    </select>
                </div>

                <!-- Banheiros -->
                <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                        Banheiros
                    </label>
                    <select name="banheiros" class="step-field w-full rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 px-4 py-3 text-slate-700 dark:text-slate-200 outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        <option value="0">0 banheiros</option>
                        <option value="1">1 banheiro</option>
                        <option value="2" selected>2 banheiros</option>
                        <option value="3">3 banheiros</option>
                        <option value="4">4+ banheiros</option>
                    </select>
                </div>

                <!-- Vagas na Garagem -->
                <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                        Vagas Garagem
                    </label>
                    <select name="vagas_garagem" class="step-field w-full rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 px-4 py-3 text-slate-700 dark:text-slate-200 outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        <option value="0">0 vagas</option>
                        <option value="1">1 vaga</option>
                        <option value="2" selected>2 vagas</option>
                        <option value="3">3 vagas</option>
                        <option value="4">4+ vagas</option>
                    </select>
                </div>

                <!-- Área Total -->
                <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                        Área Total (m²)
                    </label>
                    <select name="area_total" class="step-field w-full rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 px-4 py-3 text-slate-700 dark:text-slate-200 outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        <option value="0-50">0-50 m²</option>
                        <option value="51-100">51-100 m²</option>
                        <option value="101-150" selected>101-150 m²</option>
                        <option value="151-200">151-200 m²</option>
                        <option value="201-300">201-300 m²</option>
                        <option value="301+">301+ m²</option>
                    </select>
                </div>

                <!-- Área Construída -->
                <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                        Área Construída (m²)
                    </label>
                    <select name="area_construida" class="step-field w-full rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 px-4 py-3 text-slate-700 dark:text-slate-200 outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        <option value="0-50">0-50 m²</option>
                        <option value="51-100">51-100 m²</option>
                        <option value="101-150" selected>101-150 m²</option>
                        <option value="151-200">151-200 m²</option>
                        <option value="201-300">201-300 m²</option>
                        <option value="301+">301+ m²</option>
                    </select>
                </div>

                <!-- Andar -->
                <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                        Andar
                    </label>
                    <select name="andar" class="step-field w-full rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 px-4 py-3 text-slate-700 dark:text-slate-200 outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        <option value="terreo">Térreo</option>
                        <option value="1">1º Andar</option>
                        <option value="2" selected>2º Andar</option>
                        <option value="3">3º Andar</option>
                        <option value="4">4º Andar</option>
                        <option value="5+">5º+ Andar</option>
                    </select>
                </div>
            </div>

            <!-- Características (Checkboxes) -->
            <div class="mt-6">
                <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-3">
                    Características do Imóvel
                </label>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
                    <label class="flex items-center gap-2 text-sm text-slate-700 dark:text-slate-300">
                        <input type="checkbox" name="caracteristicas[]" value="varanda" class="step-field rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                        <span>Varanda</span>
                    </label>
                    <label class="flex items-center gap-2 text-sm text-slate-700 dark:text-slate-300">
                        <input type="checkbox" name="caracteristicas[]" value="piscina" class="step-field rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                        <span>Piscina</span>
                    </label>
                    <label class="flex items-center gap-2 text-sm text-slate-700 dark:text-slate-300">
                        <input type="checkbox" name="caracteristicas[]" value="area_servico" class="step-field rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                        <span>Área de Serviço</span>
                    </label>
                    <label class="flex items-center gap-2 text-sm text-slate-700 dark:text-slate-300">
                        <input type="checkbox" name="caracteristicas[]" value="elevador" class="step-field rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                        <span>Elevador</span>
                    </label>
                    <label class="flex items-center gap-2 text-sm text-slate-700 dark:text-slate-300">
                        <input type="checkbox" name="caracteristicas[]" value="quintal" class="step-field rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                        <span>Quintal</span>
                    </label>
                    <label class="flex items-center gap-2 text-sm text-slate-700 dark:text-slate-300">
                        <input type="checkbox" name="caracteristicas[]" value="churrasqueira" class="step-field rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                        <span>Churrasqueira</span>
                    </label>
                    <label class="flex items-center gap-2 text-sm text-slate-700 dark:text-slate-300">
                        <input type="checkbox" name="caracteristicas[]" value="seguranca" class="step-field rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                        <span>Segurança 24h</span>
                    </label>
                    <label class="flex items-center gap-2 text-sm text-slate-700 dark:text-slate-300">
                        <input type="checkbox" name="caracteristicas[]" value="academia" class="step-field rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                        <span>Academia</span>
                    </label>
                </div>
            </div>
        </div>

        <!-- Step 3: Valores e Condições -->
        <div class="step-content hidden" data-step="3">
            <h2 class="text-xl font-bold text-slate-800 dark:text-white mb-6 flex items-center gap-3">
                <div class="w-8 h-8 rounded-full bg-slate-100 dark:bg-slate-700 flex items-center justify-center">
                    <i class="bi bi-currency-dollar text-slate-600 dark:text-slate-400 text-sm"></i>
                </div>
                Valores e Condições
            </h2>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Tipo de Transação -->
                <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                        Tipo de Transação *
                    </label>
                    <select name="tipo_transacao" required class="step-field w-full rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 px-4 py-3 text-slate-700 dark:text-slate-200 outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        <option value="">Selecione o tipo</option>
                        <option value="venda">Venda</option>
                        <option value="aluguel" selected>Aluguel</option>
                        <option value="venda-aluguel">Venda ou Aluguel</option>
                    </select>
                </div>

                <!-- Valor -->
                <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                        Valor (MT) *
                    </label>
                    <input type="number" name="valor" required
                        placeholder="Ex: 25000"
                        class="step-field w-full rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 px-4 py-3 text-slate-700 dark:text-slate-200 outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                </div>

                <!-- Condições de Pagamento -->
                <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                        Condições de Pagamento
                    </label>
                    <select name="condicoes_pagamento" class="step-field w-full rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 px-4 py-3 text-slate-700 dark:text-slate-200 outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        <option value="mensal">Mensal</option>
                        <option value="trimestral">Trimestral</option>
                        <option value="semestral">Semestral</option>
                        <option value="anual">Anual</option>
                    </select>
                </div>

                <!-- Aceita Animais -->
                <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                        Aceita Animais
                    </label>
                    <select name="aceita_animais" class="step-field w-full rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 px-4 py-3 text-slate-700 dark:text-slate-200 outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        <option value="sim">Sim</option>
                        <option value="nao" selected>Não</option>
                        <option value="pequenos">Apenas Pequenos</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Step 4: Descrição e Fotos -->
        <div class="step-content hidden" data-step="4">
            <h2 class="text-xl font-bold text-slate-800 dark:text-white mb-6 flex items-center gap-3">
                <div class="w-8 h-8 rounded-full bg-slate-100 dark:bg-slate-700 flex items-center justify-center">
                    <i class="bi bi-camera text-slate-600 dark:text-slate-400 text-sm"></i>
                </div>
                Descrição e Fotos
            </h2>

            <!-- Descrição (campo de texto obrigatório) -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                    Descrição do Imóvel *
                </label>
                <textarea name="descricao" required
                    rows="4"
                    placeholder="Descreva o imóvel, suas características principais, localização, etc..."
                    class="step-field w-full rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 px-4 py-3 text-slate-700 dark:text-slate-200 outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent resize-none"></textarea>
            </div>

            <!-- Upload de Fotos -->
            <div>
                <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-3">
                    Fotos do Imóvel
                </label>
                <div class="border-2 border-dashed border-slate-300 dark:border-slate-600 rounded-2xl p-8 text-center hover:border-indigo-400 dark:hover:border-indigo-500 transition-colors duration-200 cursor-pointer">
                    <i class="bi bi-cloud-arrow-up text-4xl text-slate-400 dark:text-slate-500 mb-3"></i>
                    <p class="text-slate-600 dark:text-slate-400 font-medium mb-1">
                        Arraste as fotos aqui ou clique para selecionar
                    </p>
                    <p class="text-slate-500 dark:text-slate-500 text-sm">
                        PNG, JPG até 10MB cada
                    </p>
                </div>
            </div>
        </div>

        <!-- Botões de Navegação -->
        <div class="flex justify-between items-center mt-8 pt-6 border-t border-slate-200 dark:border-slate-700">
            <button type="button" class="btn-prev flex items-center gap-2 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 px-6 py-3 text-sm font-medium text-slate-700 dark:text-slate-100 hover:bg-slate-50 dark:hover:bg-slate-700 transition-all duration-200">
                <i class="bi bi-arrow-left"></i>
                Anterior
            </button>

            <div class="flex gap-3">
                <button type="button" class="flex items-center gap-2 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 px-6 py-3 text-sm font-medium text-slate-700 dark:text-slate-100 hover:bg-slate-50 dark:hover:bg-slate-700 transition-all duration-200">
                    Salvar Rascunho
                </button>
                <button type="button" class="btn-next flex items-center gap-2 rounded-xl bg-gradient-to-br from-blue-600 to-blue-900 px-6 py-3 text-sm font-medium text-white hover:from-indigo-600 hover:to-purple-700 transition-all duration-200 shadow-lg hover:shadow-xl">
                    Próximo
                    <i class="bi bi-arrow-right"></i>
                </button>
                <button type="submit" class="btn-submit hidden flex items-center gap-2 rounded-xl bg-gradient-to-r from-emerald-500 to-green-600 px-6 py-3 text-sm font-medium text-white hover:from-emerald-600 hover:to-green-700 transition-all duration-200 shadow-lg hover:shadow-xl">
                    <i class="bi bi-check-lg"></i>
                    Finalizar
                </button>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection() ?>