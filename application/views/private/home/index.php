<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Home Painel - loremipsum </title>
        <meta name="description" content="" />
        <meta name="author" content="Agência S.Toledo" />
        <meta name="keywords" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!--INCLUINDO CSS-->
        <?php include_once VIEWPATH . 'private/includes/css.php'; ?>

        <!-- ace settings handler -->
        <script src="<?php echo base_url('assets/admin/'); ?>assets/js/ace-extra.min.js"></script>
    </head>

    <body class="no-skin">

        <!--preloader-->
        <div id="preloader">
            <div id="status"></div>
        </div>

        <!--INCLUINDO HEADER-->
        <?php include_once VIEWPATH . 'private/includes/header.php'; ?>

        <div class="main-container ace-save-state" id="main-container">
            <div id="sidebar" class="sidebar responsive ace-save-state">
                <!--INCLUINDO MENU-->
                <?php include_once VIEWPATH . 'private/includes/menu.php'; ?>
            </div>

            <div class="main-content">
                <div class="main-content-inner">
                    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                        <b style="margin-left: 15px; font-size: 12pt">Olá, seja bem-vindo!</b>
                    </div>

                    <div class="page-content">
                        <div class="row">
                            <div class="col-xs-12">

                                <!-- PAGE CONTENT BEGINS -->
                                <div class="row">
                                    <div class="space-6"></div>
                                    <div class=" col-sm-12 col-md-12 col-lg-12 col-xs-12 infobox-container">

                                        <!-- BANNER -->
                                        <a href="<?php echo base_url('admin/banners'); ?>">
                                            <div id="jq_btn_cad" class="infobox infobox-blue2">
                                                <div class="infobox-icon">
                                                    <i style="background: #374e2b" class="ace-icon fa fa-picture-o"></i>
                                                </div>
                                                <div class="infobox-data">
                                                    <span style="color: #f87c09" class="infobox-data-number">
                                                        <?php
                                                        /*                                                               
                                                            //CONTAGEM DOS DADOS DO BANCO
                                                            if (isset($banners)) {
                                                                echo count($banners);
                                                            }
                                                        */
                                                        ?>
                                                    </span>
                                                    <div class="infobox-content">Banners</div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="<?php echo base_url('admin/servicos'); ?>">
                                            <div id="jq_btn_cad" class="infobox infobox-green">
                                                <div class="infobox-icon">
                                                    <i style="background: #abca9b" class="ace-icon fa fa-server"></i>
                                                </div>
                                                <div class="infobox-data">
                                                    <span class="infobox-data-number">
                                                        <?php
                                                            // if (isset($servicos)) {
                                                            //     echo count($servicos);
                                                            // }
                                                        ?>
                                                    </span>
                                                    <div class="infobox-content">Serviços</div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="<?php echo base_url('admin/about'); ?>">
                                            <div id="jq_btn_cad" class="infobox infobox-green">
                                                <div class="infobox-icon">
                                                    <i style="background: #12ba9b" class="ace-icon fa fa-question"></i>
                                                </div>
                                                <div class="infobox-data">
                                                    <span class="infobox-data-number">
                                                        <?php
                                                            // if (isset($about)) {
                                                            //     echo count($about);
                                                            // }
                                                        ?>
                                                    </span>
                                                    <div class="infobox-content">Sobre loremipsum</div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="<?php echo base_url('admin/servicos'); ?>">
                                            <div id="jq_btn_cad" class="infobox infobox-green">
                                                <div class="infobox-icon">
                                                    <i style="background: #134a9b" class="ace-icon fa fa-check-circle-o"></i>
                                                </div>
                                                <div class="infobox-data">
                                                    <span class="infobox-data-number">
                                                        <?php
                                                            // if (isset($empresas)) {
                                                            //     echo count($empresas);
                                                            // }
                                                        ?>
                                                    </span>
                                                    <div class="infobox-content">Funfacts</div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="<?php echo base_url('admin/portfolios'); ?>">
                                            <div id="jq_btn_cad" class="infobox infobox-green">
                                                <div class="infobox-icon">
                                                    <i style="background: #3f2e2b" class="ace-icon fa fa-building"></i>
                                                </div>
                                                <div class="infobox-data">
                                                    <span class="infobox-data-number">
                                                        <?php
                                                            // if (isset($portfolios)) {
                                                            //     echo count($portfolios);
                                                            // }
                                                        ?>
                                                    </span>
                                                    <div class="infobox-content">Nossos Parceiros</div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="<?php echo base_url('admin/servicos'); ?>">
                                            <div id="jq_btn_cad" class="infobox infobox-green">
                                                <div class="infobox-icon">
                                                    <i style="background: #ffbaa1" class="ace-icon fa fa-users"></i>
                                                </div>
                                                <div class="infobox-data">
                                                    <span class="infobox-data-number">
                                                        <?php
                                                            // if (isset($empresas)) {
                                                            //     echo count($empresas);
                                                            // }
                                                        ?>
                                                    </span>
                                                    <div class="infobox-content">Equipe</div>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- COMENTÁRIOS -->
                                        <a href="<?php echo base_url('admin/testimonials'); ?>">
                                            <div id="jq_btn_cad" class="infobox infobox-blue2">
                                                <div class="infobox-icon">
                                                    <i style="background: #377386" class="ace-icon fa fa-comment"></i>
                                                </div>
                                                <div class="infobox-data">
                                                    <span style="color: #f87c09" class="infobox-data-number">
                                                        <?php
                                                        /*                                                               
                                                            //CONTAGEM DOS DADOS DO BANCO
                                                            if (isset($testimonials)) {
                                                                echo count($testimonials);
                                                            }
                                                        */
                                                        ?>
                                                    </span>
                                                    <div class="infobox-content">Comentários</div>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- EMPRESA -->
                                        <a href="<?php echo base_url('admin/companies'); ?>">
                                            <div id="jq_btn_cad" class="infobox infobox-blue2">
                                                <div class="infobox-icon">
                                                    <i style="background: #312673" class="ace-icon fa fa-suitcase"></i>
                                                </div>
                                                <div class="infobox-data">
                                                    <span style="color: #f87c09" class="infobox-data-number">
                                                        <?php
                                                        /*
                                                            //CONTAGEM DOS DADOS DO BANCO
                                                            if (isset($empresa)) {
                                                                echo count($empresa);
                                                            }
                                                        */
                                                        ?>
                                                    </span>
                                                    <div class="infobox-content">Empresa</div>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- NOTÍCIAS -->
                                        <a href="<?php echo base_url('admin/news'); ?>">
                                            <div id="jq_btn_cad" class="infobox infobox-blue2">
                                                <div class="infobox-icon">
                                                    <i style="background: #863577" class="ace-icon fa fa-bullhorn"></i>
                                                </div>
                                                <div class="infobox-data">
                                                    <span style="color: #f87c09" class="infobox-data-number">
                                                        <?php
                                                        /*
                                                                    //CONTAGEM DOS DADOS DO BANCO
                                                                    if (isset($noticias)) {
                                                                        echo count($noticias);
                                                                    }
                                                                */
                                                        ?>
                                                    </span>
                                                    <div class="infobox-content">Novidades</div>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- CURSOS -->
                                        <a href="<?php echo base_url('admin/courses'); ?>">
                                            <div id="jq_btn_cad" class="infobox infobox-blue2">
                                                <div class="infobox-icon">
                                                    <i style="background: #aa1c22" class="ace-icon fa fa-graduation-cap"></i>
                                                </div>
                                                <div class="infobox-data">
                                                    <span style="color: #f87c09" class="infobox-data-number">
                                                        <?php
                                                        /*
                                                                    //CONTAGEM DOS DADOS DO BANCO
                                                                    if (isset($cursos)) {
                                                                        echo count($cursos);
                                                                    }
                                                                */
                                                        ?>
                                                    </span>
                                                    <div class="infobox-content">Cursos</div>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- PARCERIAS -->
                                        <a href="<?php echo base_url('admin/partners'); ?>">
                                            <div id="jq_btn_cad" class="infobox infobox-blue2">
                                                <div class="infobox-icon">
                                                    <i style="background: #f2abc1" class="ace-icon fa fa-graduation-cap"></i>
                                                </div>
                                                <div class="infobox-data">
                                                    <span style="color: #f87c09" class="infobox-data-number">
                                                        <?php
                                                        /*
                                                                    //CONTAGEM DOS DADOS DO BANCO
                                                                    if (isset($parcerias)) {
                                                                        echo count($parcerias);
                                                                    }
                                                                */
                                                        ?>
                                                    </span>
                                                    <div class="infobox-content">Parcerias</div>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- POSGRADUACOES -->
                                        <a href="<?php echo base_url('admin/postgraduations'); ?>">
                                            <div id="jq_btn_cad" class="infobox infobox-blue2">
                                                <div class="infobox-icon">
                                                    <i style="background: #F12345" class="ace-icon fa fa-graduation-cap"></i>
                                                </div>
                                                <div class="infobox-data">
                                                    <span style="color: #f87c09" class="infobox-data-number">
                                                        <?php
                                                        /*
                                                                    //CONTAGEM DOS DADOS DO BANCO
                                                                    if (isset($posgraduacoes)) {
                                                                        echo count($posgraduacoes);
                                                                    }
                                                                */
                                                        ?>
                                                    </span>
                                                    <div class="infobox-content">Pós Graduações</div>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- GALERIA -->
                                        <a href="<?php echo base_url('admin/photos'); ?>">
                                            <div id="jq_btn_cad" class="infobox infobox-blue2">
                                                <div class="infobox-icon">
                                                    <i style="background: #Fcbd45" class="ace-icon fa fa-camera"></i>
                                                </div>
                                                <div class="infobox-data">
                                                    <span style="color: #f87c09" class="infobox-data-number">
                                                        <?php
                                                        /*
                                                                    //CONTAGEM DOS DADOS DO BANCO
                                                                    if (isset($photos)) {
                                                                        echo count($photos);
                                                                    }
                                                                */
                                                        ?>
                                                    </span>
                                                    <div class="infobox-content">Fotos da galeria</div>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- USUARIOS -->
                                        <a href="<?php echo base_url('admin/users'); ?>">
                                            <div id="jq_btn_cad" class="infobox infobox-blue2">
                                                <div class="infobox-icon">
                                                    <i style="background: #1000f8" class="ace-icon fa fa-user"></i>
                                                </div>
                                                <div class="infobox-data">
                                                    <span style="color: #f87c09" class="infobox-data-number">
                                                        <?php
                                                        /* 
                                                            //CONTAGEM DOS DADOS DO BANCO
                                                            if (isset($usuarios)) {
                                                                echo count($usuarios);
                                                            }
                                                        */
                                                        ?>
                                                    </span>
                                                    <div class="infobox-content">Usuários</div>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- LOGS -->
                                        <a href="<?php echo base_url('admin/logs'); ?>">
                                            <div id="jq_btn_cad" class="infobox infobox-grey">
                                                <div class="infobox-icon">
                                                    <i class="ace-icon fa fa-user-secret"></i>
                                                </div>
                                                <div class="infobox-data">
                                                    <span class="infobox-data-number">
                                                        <?php
                                                        /*
                                                            //CONTAGEM DOS DADOS DO BANCO
                                                            if (isset($logs)) {
                                                                echo count($logs);
                                                            }
                                                        */
                                                        ?>
                                                    </span>
                                                    <div class="infobox-content">Logs</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div><!-- /.row -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.page-content -->
                </div>
            </div><!-- /.main-content -->
            <!-- PAGE CONTENT ENDS -->

            <!--INCLUINDO FOOTER-->
            <?php include_once VIEWPATH . 'private/includes/footer.php'; ?>

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->

        <!--INCLUINDO JS-->
        <?php include_once VIEWPATH . 'private/includes/js.php'; ?>

    </body>

</html>