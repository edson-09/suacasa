<div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-shadow">
    <a href="<?= base_url('imoveis-destacados/' . $slug) ?>">
        <div class="flex flex-col md:flex-row gap-0">
            <div class="relative bg-gray-200 w-full md:w-80 lg:w-110 min-h-68 card-image-mobile-full shrink-0 flex items-center justify-center group">
                <div id="card-<?= $id ?>-img" class="w-full h-full object-cover bg-cover bg-no-repeat bg-center" style="background-image: url(<?= $cover_image_url ?>);"></div>
                <button class="absolute left-3 top-1/2 -translate-y-1/2 bg-black/50 hover:bg-black/70 text-white p-2 rounded opacity group-hover:opacity-100 transition-opacity cursor-pointer" onclick="prevCard('<?= $id ?>')">
                    <i class="bi bi-chevron-left"></i>
                </button>
                <button class="absolute right-3 top-1/2 -translate-y-1/2 bg-black/50 hover:bg-black/70 text-white p-2 rounded opacity group-hover:opacity-100 transition-opacity cursor-pointer" onclick="nextCard('<?= $id ?>')">
                    <i class="bi bi-chevron-right"></i>
                </button>
                <div class="absolute bottom-3 right-3 bg-black/80 text-white px-2.5 py-1 rounded text-xs font-semibold"><i class="bi bi-camera"></i> <span id="<?= $id ?>-count">1</span> / <?= count($gallery) ?></div>
            </div>

            <div class="flex-1 p-5 flex flex-col">
                <div class="flex justify-between items-start mb-2">
                    <div>
                        <div class="text-2xl font-bold text-gray-900"><?= number_format($price, 2, ',', '.') ?> MZN</div>
                        <div class="text-sm text-gray-500"><?= number_format($price / $area, 2, ',', '.') ?> MZN/m²</div>
                    </div>
                    <button class="p-2 hover:bg-gray-100 rounded-full transition-colors"
                        onclick="toggleHeart(this)">
                        <i class="far fa-heart text-gray-400" style="font-size: 20px;"></i>
                    </button>
                </div>

                <h3 class="text-lg font-semibold text-gray-900 mb-1"><?= $title ?></h3>
                <p class="text-sm text-gray-600 mb-3"><?= $address ?></p>

                <div class="flex gap-4 mb-3 text-sm text-gray-700">
                    <div class="flex items-center gap-1">
                        <i class="fas fa-home"></i>
                        <span>T<?= $bedrooms ?></span>
                    </div>
                    <div class="flex items-center gap-1">
                        <i class="fas fa-expand"></i>
                        <span><?= $area ?> m²</span>
                    </div>
                    <div class="flex items-center gap-1">
                        <i class="fas fa-users"></i>
                        <span>3 piso</span>
                    </div>
                </div>

                <div class="space-y-2 relative border border-t-0 border-l-0 border-r-0 border-b-stone-300 pb-3 mb-2">
                    <details class="group [&amp;_summary::-webkit-details-marker]:hidden">
                        <summary class="flex cursor-pointer items-center justify-between gap-4 py-3 font-medium text-gray-900">
                            <span class="flex items-center gap-4 text-sm">
                                Ver descrição do anúncio
                                <svg class="size-5 shrink-0 transition-transform duration-300 group-open:-rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </span>

                            <p class="text-xs absolute bottom-2 right-4">Destacado</p>
                        </summary>

                        <div class="text-sm duration-200">
                            <p class="text-gray-700"><?= $description ?></p>
                        </div>
                    </details>
                </div>

                <span class="text-xs text-neutral-500 font-regular">Oferta privada</span>
            </div>
        </div>
    </a>
</div>