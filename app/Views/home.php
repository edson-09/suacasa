<?= $this->extend("master") ?>

<?= $this->section("fragment") ?>
<link rel="stylesheet" href="<?php echo base_url('assets/css/fragment.css'); ?>">
<?= $this->endSection() ?>

<?= $this->section("content") ?>
<!-- ======= Hero Section ======= -->
<section class="relative w-full bg-cover bg-center bg-no-repeat py-16 md:py-24"
    style="background-image: url('<?php echo base_url('assets/img/imovirtual2HomepageBackground202500813.webp'); ?>')">
    <div class="absolute inset-0 bg-black/50"></div>

    <div class="relative z-10 max-w-6xl mx-auto text-center px-4 md:px-6">
        <h1 class="text-2xl sm:text-3xl md:text-4xl font-semibold text-white leading-tight mb-6">
            Procuras casas? Não decidas sem ver tudo.<br class="hidden md:block" />
            Encontra mais no
            <span class="text-primary font-bold">Mechanicalplace</span>
        </h1>

        <!-- Tabs -->
        <div class="flex justify-center items-center mb-6 border-b border-white/30 text-sm">
            <a href="#" class="px-4 sm:px-6 py-2 border-b-2 border-white text-white font-semibold">Procurar</a>
            <a href="#" class="px-4 sm:px-6 py-2 text-white/70 hover:text-white">Empreendimentos</a>
        </div>

        <!-- Form -->
        <form class="bg-white rounded-lg shadow-lg p-4 md:p-8 max-w-5xl mx-auto text-left space-y-6">
            <!-- Linha principal -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="relative">
                    <select
                        class="w-full border border-gray-300 rounded-md px-3 py-2 appearance-none pr-8 text-gray-700">
                        <option>Apartamentos</option>
                        <option>Moradias</option>
                        <option>Terrenos</option>
                    </select>
                    <svg class="w-4 h-4 absolute right-3 top-1/2 -translate-y-1/2 text-gray-500 pointer-events-none"
                        viewBox="0 0 24 24">
                        <path fill="currentColor" d="M7 10l5 5 5-5H7z" />
                    </svg>
                </div>

                <div class="relative">
                    <select
                        class="w-full border border-gray-300 rounded-md px-3 py-2 appearance-none pr-8 text-gray-700">
                        <option>Para comprar</option>
                        <option>Para arrendar</option>
                    </select>
                    <svg class="w-4 h-4 absolute right-3 top-1/2 -translate-y-1/2 text-gray-500 pointer-events-none"
                        viewBox="0 0 24 24">
                        <path fill="currentColor" d="M7 10l5 5 5-5H7z" />
                    </svg>
                </div>

                <input type="text" placeholder="Introduzir localização"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 text-gray-700" />
            </div>

            <!-- Linha secundária -->
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                <select class="border border-gray-300 rounded-md px-3 py-2 text-gray-700">
                    <option>+ 0 km</option>
                    <option>+ 5 km</option>
                    <option>+ 10 km</option>
                </select>

                <div class="col-span-2 flex items-center gap-2">
                    <label class="text-sm font-semibold text-gray-600 w-12 shrink-0">Preço</label>
                    <input type="text" placeholder="de"
                        class="w-full border border-gray-300 rounded-md px-3 py-2" />
                    <input type="text" placeholder="até"
                        class="w-full border border-gray-300 rounded-md px-3 py-2" />
                    <span class="text-gray-600 font-medium">€</span>
                </div>

                <div class="col-span-2 flex items-center gap-2">
                    <label class="text-sm font-semibold text-gray-600 w-12 shrink-0">Área</label>
                    <input type="text" placeholder="de"
                        class="w-full border border-gray-300 rounded-md px-3 py-2" />
                    <input type="text" placeholder="até"
                        class="w-full border border-gray-300 rounded-md px-3 py-2" />
                    <span class="text-gray-600 font-medium">m²</span>
                </div>
            </div>

            <!-- Botão -->
            <div class="flex justify-end">
                <button type="submit"
                    class="flex items-center gap-2 bg-primary text-white font-semibold px-6 py-2 rounded-md hover:bg-[#11244A] transition">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M10.5 17A6.51 6.51 0 0 1 4 10.5C4 6.916 6.916 4 10.5 4S17 6.916 17 10.5 14.084 17 10.5 17m6.669-1.245A8.45 8.45 0 0 0 19 10.5C19 5.813 15.187 2 10.5 2S2 5.813 2 10.5 5.813 19 10.5 19a8.45 8.45 0 0 0 5.254-1.831L20.586 22H22v-1.414z" />
                    </svg>
                    Resultados 67351
                </button>
            </div>
        </form>
    </div>
</section><!-- Fim Hero Section -->

<!-- ======= Imoveis Destacados ======= -->
<section id="imoveisDestacados" class="py-12 imoveis_destacados">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <!-- Cabeçalho -->
        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4 mb-8">
            <div class="flex items-center gap-4">
                <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900">
                    Anúncios destacados
                </h2>
                <a href="<?= base_url('imoveis-destacados') ?>" class="text-gray-700 hover:text-gray-900 font-medium underline underline-offset-2">
                    Mostrar tudo
                </a>
            </div>

            <div class="flex items-center gap-2 self-end sm:self-auto">
                <button id="featured-prev" class="p-2 rounded-full hover:bg-gray-200 transition"
                    aria-label="Anterior">
                    <svg viewBox="0 0 24 24" width="1.5em" height="1.5em" class="text-gray-700">
                        <path fill="currentColor"
                            d="m15.547 2-1.305 1.27L6 11.293v1.414l8.242 8.022L15.547 22H17v-1.414l-1.305-1.271L8.18 12l7.515-7.316L17 3.414V2z" />
                    </svg>
                </button>
                <button id="featured-next" class="p-2 rounded-full hover:bg-gray-200 transition"
                    aria-label="Próximo">
                    <svg viewBox="0 0 24 24" width="1.5em" height="1.5em" class="rotate-180 text-gray-700">
                        <path fill="currentColor"
                            d="m15.547 2-1.305 1.27L6 11.293v1.414l8.242 8.022L15.547 22H17v-1.414l-1.305-1.271L8.18 12l7.515-7.316L17 3.414V2z" />
                    </svg>
                </button>
            </div>
        </div>
        <include-fragment src="<?= base_url('destacados') ?>">
            <?= $this->include('_placeholders/_imoveis_destacados') ?>
        </include-fragment>
    </div>
</section>
<?= $this->endSection() ?>

<?= $this->section("js") ?>
<script type="module">
    import '/assets/js/build/fragment.js';
</script>
<?= $this->endSection() ?>