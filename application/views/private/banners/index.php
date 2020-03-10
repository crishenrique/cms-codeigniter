<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Banners | loremipsum</title>
        <meta name="description" content="overview &amp; stats" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <!--INCLUINDO CSS-->
        <?php include_once VIEWPATH . 'private/includes/css.php'; ?>

        <script src="<?php echo base_url('assets/admin/'); ?>assets/js/ace-extra.min.js"></script>
    </head>

    <body class="no-skin">
        <!--PRELOADER-->
        <div id="preloader">
            <div id="status"></div>
        </div>
        <!--INCLUINDO HEADER-->
        <?php include_once VIEWPATH . 'private/includes/header.php'; ?>
        <div class="main-container ace-save-state" id="main-container">
            <script type="text/javascript">
                try {
                    ace.settings.loadState('main-container');
                } catch (e) {}
            </script>
            <div id="sidebar" class="sidebar responsive ace-save-state">
                <script type="text/javascript">
                    try {
                        ace.settings.loadState('sidebar');
                    } catch (e) {}
                </script>
                <!--INCLUINDO MENU-->
                <?php include_once VIEWPATH . 'private/includes/menu.php'; ?>
                <!--INCLUINDO O MODAL ADD E UPDATE-->
                <?php include_once VIEWPATH . 'private/banners/modal_add.php'; ?>
                <!--INCLUINDO O MODAL DELETE-->
                <?php include_once VIEWPATH . 'private/includes/modal_delete.php'; ?>
            </div>

            <!-- INÍCIO DO CONTEUDO PRINCIPAL-->
            <div class="main-content">
                <div class="main-content-inner">
                    <div class="page-content">
                        <div class="row">
                            <div class="col-xs-12">
                                <h3 class="header smaller lighter blue">Lista dos Banners</h3>
                                <div class="clearfix">
                                    <div class="pull-right tableTools-container"></div>
                                </div>
                                <!--MENSAGEM DE SUCESSO E DE ERRO-->
                                <div class="alert alert-success" style="display: none;"></div>
                                <div class="alert alert-danger" style="display: none;"></div>
                                <div class="alert alert-warning" style="display: none;"></div>
                                <div style="background-color: #0788c0">
                                    <a id="btnAdd" class="btn btn-add btn-success">
                                        <i class="fa fa-plus"></i> Adicionar
                                    </a>
                                </div>
                                <!--INÍCIO DO FORM-->
                                <div>
                                    <form id="myForm2" action="" method="POST">
                                        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="width: 4%" class="center">
                                                        <label class="pos-rel">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </th>
                                                    <th>Id</th>
                                                    <th>Imagem</th>
                                                    <th>Título</th>
                                                    <!-- <th style="width: 20%">Texto</th> -->
                                                    <th style="width: 15%" class="hidden-480">Link</th>
                                                    <th style="width: 10%">
                                                        <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                                        Atualizado
                                                    </th>
                                                    <th class="hidden-480">Status</th>
                                                    <th>Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody id="showdata"></tbody>
                                        </table>
                                        <div style="background-color: #0788c0">
                                            <button class="btn btn-danger jq_btn_excluir_marcados" type="button">
                                                <i class="fa fa-trash"></i>
                                                Excluir Marcados
                                            </button>
                                        </div>
                                    </form>
                                    <!--NOTIFIICAÇÕES-->
                                    <div class="col-sm-12">
                                        <span class="col-sm-4">
                                            <!--ESCURAS-->
                                            <input hidden="" id="gritter-light" checked="" type="checkbox" class="ace ace-switch ace-switch-5" />
                                            <!--CLARAS-->
                                            <input hidden="" id="gritter-light" checked="" type="checkbox" class="ace ace-switch ace-switch-5" />
                                            <span style="display: none" class="lbl middle"></span>
                                        </span>
                                    </div>
                                </div>
                                <!--FIM DO FORM-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FIM DO CONTEUDO PRINCIPAL-->

            <!--INCLUINDO FOOTER-->
            <?php include_once VIEWPATH . 'private/includes/footer.php'; ?>
            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div>

        <!--INCLUINDO JS-->
        <?php include_once VIEWPATH . 'private/includes/js.php'; ?>
        <!--INCLUINDO AS FUNÇÕES DO AJAX(INSERIR, EDITAR, DELETAR E LISTAR)-->
        <?php include_once VIEWPATH . 'private/banners/functions_js.php'; ?>
    </body>

</html>