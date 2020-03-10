<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>lorem ipsum</title>
    <!--INCLUINDO CSS -->
    <?php include_once(VIEWPATH . "public/includes/css.php") ?>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url ("assets/images/favloremipsum.png") ?>">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>

  <body>
    <!-- Pre Loader -->
    <div id="dvLoading"></div>
    
    <!-- INCLUINDO HEADER-->
    <?php include_once(VIEWPATH . "public/includes/header.php") ?>
    
    <!-- Inner Banner Wrapper Start -->
    <div class="inner-banner">
      <div class="container">
        <div class="col-sm-12">
          <h2>404</h2>
        </div>
        <div class="col-sm-12 inner-breadcrumb">
          <ul>
            <li><a href="<?= base_url('home') ?>">Home</a></li>
            <li>Pages</li>
            <li>404</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Inner Banner Wrapper End -->
    <section class="inner-wrapper">
      <div class="container">
        <div class="row">
          <div class="inner-wrapper-main not-found">
            <h1>Erro 404</h1>
            <h2>Desculpe, página não encontrada!</h2>
            <p>Verifique se você digitou a URL correta</p>
            <a href="<?= base_url('home') ?>">Volte para o início</a>
          </div>
        </div>
      </div>
    </section>
    
    <!-- INCLUINDO BOTÃO ACTION -->
    <?php include_once VIEWPATH . 'public/actionbtn/index.php' ?>

    <!-- INCLUINDO FOOTER -->
    <?php include_once(VIEWPATH . "public/includes/footer.php") ?>
    
    <!-- INCLUINDO JS -->
    <?php include_once(VIEWPATH . "public/includes/js.php") ?>

  </body>

</html>
