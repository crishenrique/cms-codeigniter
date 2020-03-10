<!--VERIFICA SE ESTÁ LOGADO-->
<?php
    if (!$this->session->userdata('usuario') || !$this->session->userdata('logado')) {
        redirect("admin/");
    }
?>

<!--HEADER-->
<div id="navbar" class="navbar navbar-default          ace-save-state">
    <div class="navbar-container ace-save-state" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>
        </button>

        <div class="navbar-header pull-left">
            <a href="<?php echo base_url("admin/home"); ?>" class="navbar-brand">
                <small>
                    <i class="fa fa-television"></i>
                    Painel Admin - loremipsum
                </small>
            </a>
        </div>

        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">

                <li class="light-blue dropdown-modal">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <?php if ($this->session->userdata('img')) { ?>
                            <img class="nav-user-photo" src="<?php echo base_url('assets/uploads/users/') . $this->session->userdata('img'); ?>" alt="" />
                        <?php   } else { ?>
                            <img class="nav-user-photo" src="<?php echo base_url('assets/images/user.png') ?>" alt="" />
                        <?php   } ?>
                        <span class="user-info">
                            <small>Bem Vindo,</small>
                            <?php echo $this->session->userdata('usuario') ?>
                        </span>

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="#">
                                <i class="ace-icon fa fa-cog"></i>
                                Configurações
                            </a>
                        </li>

                        <li class="divider"></li>
                        <li><a href="<?php echo base_url("admin/logout"); ?>"><i class="ace-icon fa fa-power-off"></i>Sair</a></li>

                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.navbar-container -->
</div>