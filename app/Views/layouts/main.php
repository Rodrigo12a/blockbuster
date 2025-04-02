
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $nombre_pagina?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?=base_url(RECURSOS_PORTA_LOGIN_CSS.'/bootstrap.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?=base_url(RECURSOS_PORTA_LOGIN_CSS.'/font-awesome.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?=base_url(RECURSOS_PORTA_LOGIN_CSS.'/elegant-icons.css')?>" type="text/css">
    <link rel="stylesheet" href="<?=base_url(RECURSOS_PORTA_LOGIN_CSS.'/plyr.css')?>" type="text/css">
    <link rel="stylesheet" href="<?=base_url(RECURSOS_PORTA_LOGIN_CSS.'/nice-select.css')?>" type="text/css">
    <link rel="stylesheet" href="<?=base_url(RECURSOS_PORTA_LOGIN_CSS.'/owl.carousel.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?=base_url(RECURSOS_PORTA_LOGIN_CSS.'/slicknav.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?=base_url(RECURSOS_PORTA_LOGIN_CSS.'/style.css')?>" type="text/css">
</head>
<body>

        

        <?= $this->include('portal/components/header')?>

        <?php $this->renderSection('content');?>

        <?= $this->include('portal/components/footer') ?>

      <!-- Search model Begin -->
      <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="<?=base_url(RECURSOS_PORTA_LOGIN_JS.'/jquery-3.3.1.min.js')?>"></script>
    <script src="<?=base_url(RECURSOS_PORTA_LOGIN_JS.'/bootstrap.min.js')?>"></script>
    <script src="<?=base_url(RECURSOS_PORTA_LOGIN_JS.'/player.js')?>"></script>
    <script src="<?=base_url(RECURSOS_PORTA_LOGIN_JS.'/jquery.nice-select.min.js')?>"></script>
    <script src="<?=base_url(RECURSOS_PORTA_LOGIN_JS.'/mixitup.min.js')?>"></script>
    <script src="<?=base_url(RECURSOS_PORTA_LOGIN_JS.'/jquery.slicknav.js')?>"></script>
    <script src="<?=base_url(RECURSOS_PORTA_LOGIN_JS.'/owl.carousel.min.js')?>"></script>
    <script src="<?=base_url(RECURSOS_PORTA_LOGIN_JS.'/main.js')?>"></script>


</body>
</html>