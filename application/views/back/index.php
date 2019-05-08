<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trainer</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link href="https://fonts.googleapis.com/css?family=Inconsolata|Rubik:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url("assets/trainer/")?>css/styles-merged.css">
    <link rel="stylesheet" href="<?=base_url("assets/trainer/")?>css/style.min.css">
    <link rel="stylesheet" href="<?=base_url("assets/trainer/")?>css/custom.css">

    <!--[if lt IE 9]>
    <script src="<?=base_url('assets/trainer/')?>js/vendor/html5shiv.min.js"></script>
    <script src="<?=base_url('assets/trainer/')?>js/vendor/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- START: header -->

<header role="banner" class="probootstrap-header">
    <?php include('header.php')?>
</header>
<!-- END: header -->


<?php if (!isset($active)){
    include('acceuil.php');
}else include($active.'.php')?>




<footer class="probootstrap-footer">
    <?php include('footer.php')?>
</footer>

<script src="<?=base_url("assets/trainer/")?>js/scripts.min.js"></script>
<script src="<?=base_url("assets/trainer/")?>js/main.min.js"></script>
<script src="<?=base_url("assets/trainer/")?>js/custom.js"></script>

</body>
</html>