<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <title>Suacasa - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Tailwind via CDN (apenas para desenvolvimento / protótipo) -->
    <link rel="stylesheet" href="<?= base_url('assets/site/css/build/build.css') ?>">
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

         <?= $this->include('Admin\Views\partials\sidebar') ?>

        <!-- CONTEÚDO PRINCIPAL -->
        <div id="main-content" class="flex flex-1 flex-col transition-all duration-200 prevent-overflow">

            <!-- TOPBAR -->
            <?= $this->include('Admin\Views\partials\navbar') ?>

            <!-- CONTEÚDO -->
            <main class="flex-1 overflow-y-auto p-4 md:p-6 space-y-4 md:space-y-6 prevent-overflow">

                <?= $this->renderSection('content') ?>

            </main>
        </div>
    </div>

    <script src="<?= base_url('assets/admin/js/main.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
</body>

</html>