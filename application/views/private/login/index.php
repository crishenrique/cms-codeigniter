<?php
//PEGA A URL ATUAL
$url_atual = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

//SE JÁ ESTIVER LOGADO E VOLTAR PARA LOGIN, SERÁ REDIRECIONADO PRA HOME.
if ($url_atual == base_url() . "admin") {
    if ($this->session->userdata('usuario') || $this->session->userdata('logado')) {
        redirect("admin/home");
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <title>Painel admin | loremipsum </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon shortcut" type="image/x-icon" href="<?php echo base_url('assets/'); ?>imagens/favicon.png" />
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_v12/'); ?>vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_v12/'); ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_v12/'); ?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_v12/'); ?>vendor/animate/animate.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_v12/'); ?>vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_v12/'); ?>vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_v12/'); ?>css/util.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_v12/'); ?>css/main.css">
        <!--===============================================================================================-->
    </head>

    <body>

        <div class="limiter">
            <!-- IMAGEM DE FUNDO NA PARTE ADMIN -->
            <div class="container-login100" style="background-image: url('<?php echo base_url('assets/login_v12/'); ?>images/verde-background.png');">
                <div class="wrap-login100 p-t-190 p-b-30">
                    <form id="MyForm" action="" method="POST" enctype="multipart/form-data" data-parsley-validate class="login100-form validate-form">
                        <div class="login100-form-avatar">
                            <!-- IMAGEM DO CENTRO NA PARTE ADMIN -->
                            <img src="<?php echo base_url('assets/login_v12/'); ?>images/verde-background.png" alt="AVATAR" style="margin-top: 65px;">
                        </div>

                        <span class="login100-form-title p-t-20 p-b-45">
                            loremipsum
                        </span>

                        <div class="wrap-input100 validate-input m-b-10" data-validate="Usuário é requerido">
                            <input class="input100" type="text" name="usuario" placeholder="Usuário">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input m-b-10" data-validate="Senha é requerida!">
                            <input class="input100" type="password" name="senha" placeholder="Senha">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock"></i>
                            </span>
                        </div>

                        <div class="container-login100-form-btn p-t-10">
                            <button id="MyBtn" class="login100-form-btn">
                                Login
                            </button>

                            <br style="clear:both" />

                            <!--MSG DE ERRO-->
                            <section style="margin-top:25px" id="jq_msg"></section>


                        </div>

                        <div class="text-center w-full p-t-25 ">
                            <a href="#" class="txt1">
                                Esqueceu sua senha ou usuário?
                            </a>
                            <br /><br /><br />
                            <a href="#" class="txt1">
                                <img src="<?php echo base_url('assets/login_v12/'); ?>images/icons/favicon.ico" alt="" title="">
                            </a>
                            <br /><br /><br /><br /><br /><i style="color:#333333"></i>
                        </div>
                    </form>

                </div>
            </div>
        </div>




        <!--===============================================================================================-->
        <script src="<?php echo base_url('assets/login_v12/'); ?>vendor/jquery/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/admin/assets/js/form.js'); ?>"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url('assets/login_v12/'); ?>vendor/bootstrap/js/popper.js"></script>
        <script src="<?php echo base_url('assets/login_v12/'); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url('assets/login_v12/'); ?>vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url('assets/login_v12/'); ?>js/main.js"></script>

        <!--INCLUINDO FUNC JS DAS MSGS-->
        <?php include_once VIEWPATH . 'private/includes/func_login_js.php'; ?>

    </body>

</html>