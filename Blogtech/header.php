<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" conte nt="ie=edge">
  <title><?php bloginfo('title'); ?></title>
  <link rel="icon" href="favicon.png" type="image/png">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="<?php bloginfo('stylesheet_url'); ?>" href="css/main.css">
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  <?php wp_head(); ?>
</head>



<body>

  <header>
    <nav>
      <?php wp_nav_menu(); ?>
        </nav>

    <h1><?php bloginfo('name'); ?></h1>
  </header>

  <div class="container-fluid">
    <div class="row">
      <section class="col-xs-12 row">
