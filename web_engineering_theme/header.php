<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,700italic,400italic" rel="stylesheet" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js"></script>

    <meta name="viewport" content="width=device-width">


    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/main.js"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(''); ?> data-spy="scroll" data-offset="0" data-target="#navbar-main">
