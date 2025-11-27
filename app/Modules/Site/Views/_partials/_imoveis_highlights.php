<?= $this->extend("Site\Views\layouts\master") ?>

<?= $this->section('advancedFormCss') ?>
<!-- <style>
    .accordion-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-out;
    }

    .accordion-content.active {
        max-height: 500px;
        transition: max-height 0.4s ease-in;
    }

    .tipologia-btn.selected {
        background-color: #dbeafe;
        border-color: #3b82f6;
        color: #1e40af;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: white;
        border: 1px solid #ccc;
        border-top: none;
        border-radius: 0 0 4px 4px;
        max-height: 300px;
        overflow-y: auto;
        z-index: 50;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .dropdown-menu.active {
        display: block;
    }

    .dropdown-button {
        position: relative;
    }

    .dropdown-item {
        padding: 8px 16px;
        display: flex;
        align-items: center;
        gap: 8px;
        cursor: pointer;
        border-bottom: 1px solid #f0f0f0;
    }

    .dropdown-item:last-child {
        border-bottom: none;
    }

    .dropdown-item:hover {
        background-color: #f5f5f5;
    }

    .dropdown-item input[type="checkbox"] {
        cursor: pointer;
    }

    .selected-count {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 20px;
        height: 20px;
        background-color: #1f2937;
        color: white;
        border-radius: 50%;
        font-size: 12px;
        font-weight: bold;
        margin-left: 4px;
    }

    .tag-button {
        padding: 6px 12px;
        border: 1px solid #d1d5db;
        border-radius: 4px;
        background-color: white;
        color: #374151;
        cursor: pointer;
        font-size: 14px;
        transition: all 0.2s;
    }

    .tag-button.selected {
        background-color: #3b82f6;
        border-color: #ffffff;
        color: #ffffff;
    }

    .tag-button.selected::after {
        content: " ✓";
        font-weight: bold;
    }

    .filtros-detalhados {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-out;
    }

    .filtros-detalhados.active {
        max-height: 2000px;
    }

    .filter-dropdown {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: white;
        border: 1px solid #d1d5db;
        border-radius: 0.375rem;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        z-index: 50;
    }

    .filter-dropdown.active {
        display: block;
    }

    /* Accordion dos ultimos dois cards */
    .card-accordion-content {
        transition: all 0.3s ease-in-out;
        max-height: 0;
        opacity: 0;
        overflow: hidden;
    }

    .card-accordion-content.active {
        max-height: 500px;
        opacity: 1;
    }

    .accordion-arrow {
        transition: transform 0.3s ease;
        display: inline-block;
    }
</style> -->
<?= $this->endSection() ?>

<?= $this->section('advancedForm') ?>

<!-- SECÇÃO LISTAGEM DE IMÓVEIS -->
<section class="max-w-7xl mx-auto px-4 py-8">
    <div class="flex gap-8">
        <!-- Left Column -->
        <div class="flex-1 space-y-4">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-900">Anúncios destacados (<?= $total ?>)</h2>
            </div>

            <?= $cards ?>
            <ul class="flex justify-center gap-3 text-gray-900">
                <li>
                    <a href="#" class="grid size-8 place-content-center rounded border border-gray-200 transition-colors hover:bg-gray-50 rtl:rotate-180" aria-label="Previous page">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>

                <li class="text-sm/8 font-medium tracking-widest">2/12</li>

                <li>
                    <a href="#" class="grid size-8 place-content-center rounded border border-gray-200 transition-colors hover:bg-gray-50 rtl:rotate-180" aria-label="Next page">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>

<script>
    <?php
    $allCarousels = [];

    foreach ($properties as $property) {
        $id = $property['id'];
        $gallery = $property['gallery']; 
        $allCarousels[$id] = [
            'images' => array_column($gallery, 'url'),
            'current' => 0
        ];
    }
    ?>

    const carousels = <?= json_encode($allCarousels, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>;

    function updateCarousel(id) {
        const data = carousels[id];
        if (!data) return;

        const divImg = document.getElementById(`card-${id}-img`);
        const counterEl = document.getElementById(`${id}-count`);

        if (divImg) divImg.style.backgroundImage = `url(${data.images[data.current]})`;
        if (counterEl) counterEl.textContent = `${data.current + 1}`;
    }

    function nextCard(id) {
        const data = carousels[id];
        if (!data) return;
        data.current = (data.current + 1) % data.images.length;
        updateCarousel(id);
    }

    function prevCard(id) {
        const data = carousels[id];
        if (!data) return;
        data.current = (data.current - 1 + data.images.length) % data.images.length;
        updateCarousel(id);
    }
</script>

<?= $this->endSection() ?>

<?= $this->section('advancedFormJs') ?>

<?= $this->endSection() ?>