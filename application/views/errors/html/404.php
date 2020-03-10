<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>loremipsum - Home</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">

        <!--INCLUINDO CSS -->
        <?php include_once(VIEWPATH . "public/includes/css.php") ?>
    
    </head>

    <body>
        
        <!-- INCLUINDO HEADER-->
        <?php include_once(VIEWPATH . "public/includes/header.php") ?>
        
        <!--BANNER-->
        <section class="section bg-home home-half" id="home"
                 data-image-src="<?= base_url('assets/images/bg-home.jpg ') ?>">
            <div class="bg-overlay"></div>
            <div class="display-table">
                <div class="display-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2 text-white text-center">
                                <h1 class="home-title">Desculpe, página não encontrada!</h1>
                                <p class="padding-t-15 home-desc">Erro 404</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wave-effect wave-anim">
                <div class="waves-shape shape-one">
                    <div class="wave wave-one"
                         style="background-image: url(<?= base_url('assets/images/wave-shape/wave1.png') ?>);"></div>
                </div>
                <div class="waves-shape shape-two">
                    <div class="wave wave-two"
                         style="background-image: url(<?= base_url('assets/images/wave-shape/wave2.png') ?>);"></div>
                </div>
                <div class="waves-shape shape-three">
                    <div class="wave wave-three"
                         style="background-image: url(<?= base_url('assets/images/wave-shape/wave3.png') ?>);"></div>
                </div>
            </div>
        </section>
        
        
        
        <!--CONTATOS-->
        <section class="section" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h1 class="section-title text-center">Volte para o início</h1>
                        <div class="section-title-border margin-t-20"></div>
                        <br />
                        <div class="col-lg-2 offset-lg-5">
                            <a href="<?= base_url(''); ?>" class="col-lg-12 submitBnt btn btn-custom"> Voltar </a>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <section class="cta bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-inline social margin-t-20">
                            <li class="list-inline-item"><a class="social-icon" href="/JavaScript:Void(0);"><i
                                            class="mdi mdi-facebook"></i></a></li>
                            <li class="list-inline-item"><a class="social-icon" href="/JavaScript:Void(0);"><i
                                            class="mdi mdi-instagram"></i></a></li>
                            <li class="list-inline-item"><a class="social-icon" href="/JavaScript:Void(0);"><i
                                            class="mdi mdi-whatsapp"></i></a></li>
                            <li class="list-inline-item"><a class="social-icon" href="/JavaScript:Void(0);"><i
                                            class="mdi mdi-youtube-play"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 margin-t-30">
                        <p class="margin-b-0 contact-title"><i class="pe-7s-call"></i> &nbsp;+83 3333-3333</p>
                    </div>
                    <div class="col-lg-3 margin-t-30 text-right">
                        <p class="contact-title"><i class="pe-7s-mail-open"></i>&nbsp; contato@email.com.br</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- INCLUINDO FOOTER -->
        <?php include_once(VIEWPATH . "public/includes/footer.php") ?>
        
        <!-- INCLUINDO JS -->
        <?php include_once(VIEWPATH . "public/includes/js.php") ?>
    
    </body>
</html>
