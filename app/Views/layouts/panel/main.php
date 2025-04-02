<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?= $nombre_pagina?></title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap Core Css -->
    <link href="<?=base_url(RECURSOS_PANEL_PLUGINS.'/bootstrap/css/bootstrap.css')?>" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?=base_url(RECURSOS_PANEL_PLUGINS.'/node-waves/waves.css')?>" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?=base_url(RECURSOS_PANEL_PLUGINS.'/animate-css/animate.css') ?>" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="<?=base_url(RECURSOS_PANEL_PLUGINS.'/morrisjs/morris.css')?>" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?=base_url(RECURSOS_PANEL_CSS.'/style.css')?>" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?=base_url(RECURSOS_PANEL_CSS.'/themes/all-themes.css')?>" rel="stylesheet" />
</head>

<body class="theme-red">
    
    <?=$this->include('panel/components/header')?>

    <?=$this->include('panel/components/sidebar')?>
    <?php $this->renderSection('content')?>

    <?=$this->include('panel/components/footer')?>







    <!-- Jquery Core Js -->
    <script src="<?=base_url(RECURSOS_PANEL_PLUGINS.'/jquery/jquery.min.js')?>"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?=base_url(RECURSOS_PANEL_PLUGINS.'/bootstrap/js/bootstrap.js')?>"></script>

    <!-- Select Plugin Js -->
    <script src="<?=base_url(RECURSOS_PANEL_PLUGINS.'/bootstrap-select/js/bootstrap-select.js')?>"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?=base_url(RECURSOS_PANEL_PLUGINS.'/jquery-slimscroll/jquery.slimscroll.js')?>"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?=base_url(RECURSOS_PANEL_PLUGINS.'/node-waves/waves.js')?>"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="<?=base_url(RECURSOS_PANEL_PLUGINS.'/jquery-countto/jquery.countTo.js')?>"></script>

    <!-- Morris Plugin Js -->
    <script src="<?=base_url(RECURSOS_PANEL_PLUGINS.'/raphael/raphael.min.js')?>"></script>
    <script src="<?=base_url(RECURSOS_PANEL_PLUGINS.'/morrisjs/morris.js')?>"></script>

    <!-- ChartJs -->
    <script src="<?=base_url(RECURSOS_PANEL_PLUGINS.'/chartjs/Chart.bundle.js')?>"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="<?=base_url(RECURSOS_PANEL_PLUGINS.'/flot-charts/jquery.flot.js')?>"></script>
    <script src="<?=base_url(RECURSOS_PANEL_PLUGINS.'/flot-charts/jquery.flot.resize.js')?>"></script>
    <script src="<?=base_url(RECURSOS_PANEL_PLUGINS.'/flot-charts/jquery.flot.pie.js')?>"></script>
    <script src="<?=base_url(RECURSOS_PANEL_PLUGINS.'/flot-charts/jquery.flot.categories.js')?>"></script>
    <script src="<?=base_url(RECURSOS_PANEL_PLUGINS.'/flot-charts/jquery.flot.time.js')?>"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="<?=base_url(RECURSOS_PANEL_PLUGINS.'/jquery-sparkline/jquery.sparkline.js')?>"></script>

    <!-- Custom Js -->
    <script src="<?=base_url(RECURSOS_PANEL_JS.'/admin.js')?>"></script>
    <script src="<?=base_url(RECURSOS_PANEL_JS.'/pages/index.js')?>"></script>

    <!-- Demo Js -->
    <script src="<?=base_url(RECURSOS_PANEL_JS.'/demo.js')?>"></script>
</body>
</html>