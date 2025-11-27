<li class="featured-carousel-card shrink-0">
    <a href="<?= base_url("imoveis-destacados/$slug") ?>">
        <article class="bg-white rounded-lg shadow-sm overflow-hidden card-hover h-full border border-gray-100">

            <div class="w-full aspect-video overflow-hidden bg-gray-100">
                <img src="<?php echo $cover_image_url ?>"
                    alt="<?php echo $title ?>"
                    class="w-full h-full object-cover object-center" />
            </div>

            <div class="p-5">
                <p class="text-xl font-bold text-gray-900 mb-2"><?php echo $price ?> MZN</p>
                <p class="text-sm text-gray-700 truncate mb-1"><?php echo $address ?></p>

                <div class="flex justify-between items-center mt-3">
                    <p class="text-sm text-gray-500"><?php echo $purpose ?></p>
                    <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">
                        <?php echo $bedrooms ?>
                    </span>
                </div>
            </div>

        </article>
    </a>
</li>