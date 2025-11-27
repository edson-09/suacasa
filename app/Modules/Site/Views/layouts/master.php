<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo esc($title ?? 'Sua Casa') ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo base_url('assets/site/img/favicon.png') ?>" rel="icon">
    <link href="<?php echo base_url('assets/site/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url('assets/site/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="<?php echo base_url('assets/site/vendor/aos/aos.css') ?>" rel="stylesheet">

    <!-- Template Main CSS Files -->
    <link href="<?php echo base_url('assets/site/css/build/build.css') ?>" rel="stylesheet">
    <?php echo $this->renderSection("fragment"); ?>
    <?php echo $this->renderSection("property_details_css"); ?>
    <?php echo $this->renderSection("advancedFormCss"); ?>
    <?php echo $this->renderSection("resultados_css"); ?>
    <?php echo $this->renderSection("new_property_css"); ?>
</head>

<body class="font-sans text-textDark bg-[#F2F3F6] antialiased">
    <?= $this->include('Site\Views\partials\header') ?>

    <?= $this->renderSection("home") ?>
    <?= $this->renderSection("property_details") ?>
    <?= $this->renderSection('advancedForm') ?>
    <?= $this->renderSection('resultados') ?>
    <?= $this->renderSection('new_property') ?>

    <?= $this->include('Site\Views\partials\footer') ?>

    <script src="<?php echo base_url('assets/site/js/main.js') ?>"></script>
    <script src="<?php echo base_url('assets/site/js/build/fragment.js') ?>"></script>
    <?php echo $this->renderSection("property_details_js"); ?>
    <?php echo $this->renderSection("advancedFormJs"); ?>
    <?php echo $this->renderSection("imoveis_highlight_card_js"); ?>
    <script src="https://unpkg.com/lucide@latest"></script>

</body>

</html>