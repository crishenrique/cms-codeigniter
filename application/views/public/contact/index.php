<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>loremipsum</title>
        <!--INCLUINDO CSS -->
        <?php include_once(VIEWPATH . "public/includes/css.php") ?>
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?= base_url("assets/images/favloremipsum.png") ?>">
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
                    <h2>Contatos</h2>
                </div>
                <div class="col-sm-12 inner-breadcrumb">
                    <ul>
                        <li><a href="<?= base_url('home') ?>">Home</a></li>
                        <li>Contatos</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner Wrapper End -->
        <section class="inner-wrapper contact-wrapper">
            <div class="container">
                <div class="row">
                    <?php
                        if (isset($company) && !empty($company)) {
                            foreach ($company as $key => $item) {
                                ?>
                                <div class="inner-wrapper-main">
                                    <div class="contact-address">
                                        <div class="col-sm-12 col-md-6 no-space-right">
                                            <div class="col-sm-6 contact"><i class="fa fa-map-marker"></i>
                                                <p><span>Local</span><br>
                                                    <?= $item->city_company ?>, <?= $item->state_company ?></p>
                                            </div>
                                            <div class="col-sm-6 contact white"><i class="fa fa-phone"></i>
                                                <p><span>Celular</span><br>
                                                    <?= $item->mobile_company ?></p>
                                            </div>
                                            <div class="col-sm-6 contact white">
                                                <i class="fa fa-volume-control-phone"></i>
                                                <p><span>Telefone</span><br>
                                                    <?= $item->telephone_company ?></p>
                                            </div>
                                            <div class="col-sm-6 contact"><i class="fa fa-envelope"></i>
                                                <p><span>Email</span><br>
                                                    <a href="mailto:support@yourdomain.com"><?= $item->email_company ?></a>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-6 no-space-left">

                                            <!--MENSAGEM RETORNO DO ENVIO DA MENSAGEM-->
                                            <?php if (isset($parte_2) && $parte_2 == "success") { ?>
                                                <div class="alert  alert-success">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <i class="ace-icon fa fa-times"></i>
                                                    </button>
                                                    <p>
                                                        <strong>
                                                            <i class="ace-icon fa fa-check"></i>
                                                            Sucesso!
                                                        </strong>
                                                        Recebemos sua mensagem.
                                                    </p>
                                                </div>
                                            <?php } ?>

                                            <?php if (isset($parte_2) && $parte_2 == "error") { ?>
                                                <div class="alert  alert-danger">
                                                    <button type="button" class="close" data-dismiss="alert">
                                                        <i class="ace-icon fa fa-times"></i>
                                                    </button>
                                                    <p>
                                                        <strong>
                                                            <i class="ace-icon fa fa-check"></i>
                                                            Erro!
                                                        </strong>
                                                        Não foi possível enviar sua mensagem.
                                                    </p>
                                                </div>
                                            <?php } ?>

                                            <div class="form">
                                                <form method='post' action="<?= base_url('enviar_formulario'); ?>" id="contactFrm" name="contactFrm">
                                                    <input type="text" required placeholder="Nome completo" value="" name="nome" class="txt">
                                                    <input type="text" required placeholder="Celular" value="" name="telefone" class="txt"
                                                    maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" OnKeyPress="formatar('## #####-####', this)">
                                                    <input type="text" required placeholder="Email" value="" name="email" class="txt"
                                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                                                    <textarea placeholder="Mensagem" name="mensagem" type="text" class="txt_3"></textarea>
                                                    <div class="g-recaptcha" data-sitekey="6LdzO8cUAAAAAJUAkDkCHgQU3MwrGByMZglZWdZB"></div>
                                                    <input type="submit" value="Enviar" name="submit" class="txt2">
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <?php
                            }
                        }
                    ?>
                </div>
            </div>
            <div id="google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.981572375765!2d-34.85743668469765!3d-7.128127671890313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7acc2ac234aa4b1%3A0x347868aec45c0046!2sAv.%20Expedicion%C3%A1rios%2C%20922%20-%20SALA%20A%20-%20Expedicion%C3%A1rios%2C%20Jo%C3%A3o%20Pessoa%20-%20PB%2C%2058041-010!5e0!3m2!1spt-BR!2sbr!4v1573765479393!5m2!1spt-BR!2sbr" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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
