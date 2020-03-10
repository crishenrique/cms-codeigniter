<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />

        <title>Logs - Campinense Clube</title>

        <meta name="description" content="overview &amp; stats" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!--INCLUINDO CSS-->
        <?php include_once VIEWPATH . 'private/includes/css.php'; ?>
        <!-- inline styles related to this page -->
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
            </div>

            <div class="main-content">
                <div class="main-content-inner">
                    <div class="page-content">
                        <div class="row">
                            <div class="col-xs-12">
                                <h3 class="header smaller lighter blue">Lista dos Logs</h3>
                                <div class="clearfix">
                                    <div class="pull-right tableTools-container"></div>
                                </div>
                                <!--MENSAGEM DE SUCESSO E DE ERRO-->
                                <div class="alert alert-success" style="display: none;"></div>
                                <div class="alert alert-danger" style="display: none;"></div>
                                <div class="alert alert-warning" style="display: none;"></div>
                                <!-- div.table-responsive -->
                                <!-- div.dataTables_borderWrap -->
                                <div>
                                    <form id="myForm2" action="" method="POST">
                                        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Nome</th>
                                                    <th>Acesso</th>
                                                    <th>IP</th>
                                                    <th class="hidden-480">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody id="showdata">
                                            </tbody>
                                        </table>
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
                            </div>
                        </div>
                    </div><!-- /.page-content -->
                </div>
            </div><!-- /.main-content -->
            <!--INCLUINDO FOOTER-->
            <?php include_once VIEWPATH . 'private/includes/footer.php'; ?>
            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->
        <!--INCLUINDO JS-->
        <?php include_once VIEWPATH . 'private/includes/js.php'; ?>
        <!--INCLUINDO AS FUNÇÕES DO AJAX(INSERIR, EDITAR, DELETAR E LISTAR)-->
        <?php include_once VIEWPATH . 'private/logs/functions_js.php'; ?>
    </body>

</html>