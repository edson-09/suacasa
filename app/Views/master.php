<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo esc($title ?? 'Sua Casa') ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo base_url('assets/img/favicon.png') ?>" rel="icon">
    <link href="<?php echo base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <!-- <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet"> -->
    <link href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <!-- <link href="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet"> -->
    <!-- <link href="<?php echo base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet"> -->
    <link href="<?php echo base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">

    <!-- Template Main CSS Files -->
    <!-- <link href="<?php echo base_url('assets/css/variables.css') ?>" rel="stylesheet"> -->
    <link href="<?php echo base_url('assets/css/build/build.css') ?>" rel="stylesheet">
    <?php echo $this->renderSection("fragment"); ?>
</head>

<body class="font-sans text-textDark bg-[#F2F3F6] antialiased">
    <?= $this->include('partials/header') ?>

    <?= $this->renderSection("content") ?>

    <?= $this->include('partials/footer') ?>

    <script src="<?php echo base_url('assets/js/main.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/build/fragment.js') ?>"></script>

</body>

</html>