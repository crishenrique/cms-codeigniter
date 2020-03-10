<?php

/** PARTES DA URL APÓS O NOME DO DOMÍNIO .COM.BR **/
$parte_1 = $this->uri->segment(1);
$parte_2 = $this->uri->segment(2);
$parte_3 = $this->uri->segment(3);
$parte_4 = $this->uri->segment(4);
$parte_5 = $this->uri->segment(5);
$parte_6 = $this->uri->segment(6);

?>

<header>
    <!-- RECAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <div class="top-wrapper hidden-xs">
        <div class="container">
            <div class="col-md-4 col-sm-6 hidden-xs top-wraper-left no-padding">
                <ul class="header-social-icons">
                    <?php
                    if (isset($company) && !empty($company)) {
                        foreach ($company as $key => $item) {
                            ?>
                            <li class="facebook">
                                <a href="<?= $item->facebook_company  ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="instagram">
                                <a href="<?= $item->instagram_company  ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                            </li>
                    <?php
                        }
                    }
                    ?>
                </ul>
            </div>
            <div class="col-md-8 col-sm-6">
                <!--                        <ul class="top-right pull-right ">-->
                <!--                            &lt;!&ndash; Login &ndash;&gt;-->
                <!--                            <li class="login"><a href="javascript:void(0)"><i class="fa fa-lock"></i>Login</a>-->
                <!--                                <div class="login-form">-->
                <!--                                    <h4>Login</h4>-->
                <!--                                    <form action="#" method="post">-->
                <!--                                        <input type="text" name="name" placeholder="Username">-->
                <!--                                        <input type="password" name="password" placeholder="Password">-->
                <!--                                        <button type="submit" class="btn">Login</button>-->
                <!--                                    </form>-->
                <!--                                </div>-->
                <!--                            </li>-->
                <!--                            &lt;!&ndash; Register &ndash;&gt;-->
                <!--                            <li class="register"><a href="javascript:void(0)"><i class="fa fa-user"></i>Sign Up</a>-->
                <!--                                <div class="register-form">-->
                <!--                                    <h4>Sign Up</h4>-->
                <!--                                    <span>Please sign up the account</span>-->
                <!--                                    <form action="#" method="post">-->
                <!--                                        <input type="text" name="user-name" placeholder="Username">-->
                <!--                                        <input type="email" name="user-email" placeholder="Email">-->
                <!--                                        <input type="password" name="user-password" placeholder="Password">-->
                <!--                                        <button type="submit" class="btn">Register</button>-->
                <!--                                    </form>-->
                <!--                                </div>-->
                <!--                            </li>-->
                <!--                            <li class="search"><i class="fa fa-search" aria-hidden="true"></i>-->
                <!--                                <div id="search-form-container">-->
                <!--                                    <form id="search-form" action="#" style="display: none;" class="">-->
                <!--                                        <input type="search" id="search" name="search" placeholder="Search...">-->
                <!--                                        <input type="submit" id="search-submit" value="">-->
                <!--                                        <span id="close-form" class="close">x</span>-->
                <!--                                    </form>-->
                <!--                                </div>-->
                <!--                            </li>-->
                <!--                        </ul>-->
            </div>
        </div>
    </div>
    <div class="logo-bar hidden-xs">
        <div class="container">
            <?php
            if (isset($company) && !empty($company)) {
                foreach ($company as $key => $item) {
                    ?>
                    <!-- Logo -->
                    <div class="row">
                        <div class="col-sm-4"><a href="<?= base_url('home') ?>">
                                <img src="<?= base_url("assets/images/logoteste2.png") ?>" alt="Cursos de Qualidade"></a></div>
                        <div class="col-sm-8">
                            <ul class="contact-info pull-right">
                                <li><i class="fa fa-phone"></i>
                                    <p>
                                        <span>Contato</span><br>
                                        <?= $item->mobile_company ?>
                                    </p>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <p><span>E-mail</span><br>
                                        <a href="mailto:contato@loremipsum.com.br">
                                            <?= $item->email_company ?>
                                        </a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
    <div class="wow fadeInDown navigation" data-offset-top="197" data-spy="affix">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="row">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span>
                            <span class="icon-bar"></span> <span class="icon-bar"></span></button>
                        <a class="navbar-brand" href="<?= base_url('home') ?>">
                            <img src="<?= base_url("assets/images/logoteste2.png") ?>" alt="Cursos de Qualidade" />
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li <?php if ($parte_1 == 'home') echo 'class="active"' ?>>
                                <a href="<?= base_url('home') ?>">Home</a>
                            </li>
                            <li <?php if ($parte_1 == 'sobre-loremipsum') echo 'class="active"' ?>>
                                <a href="<?= base_url('sobre-loremipsum') ?>">Conheça-nos</a>
                            </li>
                            <li <?php if ($parte_1 == 'cursos') echo 'class="active dropdown"' ?> class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ensino
                                    <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?= base_url('cursos') ?>">Nossos Cursos</a></li>
                                    <li><a href="<?= base_url('parcerias') ?>">Parcerias</a></li>
                                    <li><a href="<?= base_url('posgraduacoes') ?>">Pós graduação</a></li>
                                </ul>
                            </li>
                            <li <?php if ($parte_1 == 'novidades') echo 'class="active"' ?>>
                                <a href="<?= base_url('novidades') ?>">Novidades</a>
                            </li>
                            <li <?php if ($parte_1 == 'galeria') echo 'class="active"' ?>>
                                <a href="<?= base_url('galeria') ?>">Fotos</a>
                            </li>
                            <li <?php if ($parte_1 == 'contato') echo 'class="active"' ?>>
                                <a href="<?= base_url('contato') ?>">Contatos</a>
                            </li>
                            <li style="background-color: #404040" <?php if ($parte_1 == 'matricula') echo 'class="active"' ?>>
                                <a href="<?= base_url('matricula') ?>">Pré-matrícula!</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
            </nav>
        </div>
    </div>
</header>