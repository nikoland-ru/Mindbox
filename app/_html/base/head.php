<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php
        if(!isset($pageName)){
            $pageName = "Заголовок страницы";
        }
        echo $pageName;
    ;?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">

    
    <!-- build:css ../styles/lib.css -->
    <!-- bower:css-->
    <link rel="stylesheet" href="../../bower_components/normalize.css/normalize.css" />
    <link rel="stylesheet" href="../../bower_components/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" href="../../bower_components/slick-carousel/slick/slick-theme.css" />
    <link rel="stylesheet" href="../../bower_components/nouislider/distribute/nouislider.min.css" />
    <link rel="stylesheet" href="../../bower_components/magnific-popup/dist/magnific-popup.css" />
    <link rel="stylesheet" href="../../bower_components/animate.css/animate.css" />
    <!-- endbower-->

    <link rel="stylesheet" href="../../bower_components/jQuery.TosRUs/src/css/jquery.tosrus.all.css">
    <!-- endbuild -->

    <!-- build:css ../styles/app.css -->
    <!-- inject:css-->
    <link rel="stylesheet" href="../css/styles.css">
    <!-- endinject-->
    <!-- endbuild -->

    <!-- build:css ../styles/blog.css -->

    <link rel="stylesheet" href="../css/blog.css">

    <!-- endbuild -->


    <!-- build:js ../scripts/vendor/modernizr.js -->

    <script src="../../bower_components/modernizr/modernizr.js"></script>
    
    <!-- endbuild -->
</head>

