<!--MENU-->

<?php
/** PARTES DA URL APÓS O NOME DO DOMÍNIO .COM.BR **/
$parte_1 = $this->uri->segment(1);
$parte_2 = $this->uri->segment(2);
$parte_3 = $this->uri->segment(3);
$parte_4 = $this->uri->segment(4);
$parte_5 = $this->uri->segment(5);
$parte_6 = $this->uri->segment(6);
?>

<ul class="nav nav-list">
    <!--VERIFICA QUAL PÁGINA ESTÁ PARA ATIVAR O ITEM DO MENU-->

    <!--HOME-->
    <li <?php if ($parte_2 == 'home') {
            echo 'class=active';
        } ?>>
        <a href="<?php echo base_url('admin/home'); ?>">
            <i class="menu-icon fa fa-home"></i>
            <span class="menu-text"> Início </span>
        </a>
    </li>

    <!-- BANNERS -->
    <li <?php if ($parte_2 == 'banners') {
            echo 'class=active';
        } ?>>
        <a href="<?php echo base_url('admin/banners'); ?>">
            <i class="menu-icon fa fa-picture-o"></i>
            <span class="menu-text"> Banners </span>
        </a>
    </li>

    <li <?php if ($parte_2 === 'servicos') {
            echo 'class=active';
        } ?>>
        <a href="<?php echo base_url('admin/servicos'); ?>">
            <i class="menu-icon fa fa-server"></i>
            <span class="menu-text"> Serviços </span>
        </a>
    </li>

    <li <?php if ($parte_2 === 'about') {
            echo 'class=active';
        } ?>>
        <a href="<?php echo base_url('admin/about'); ?>">
            <i class="menu-icon fa fa-question"></i>
            <span class="menu-text"> Sobre loremipsum </span>
        </a>
    </li>

    <li <?php if ($parte_2 === 'funfacts') {
            echo 'class=active';
        } ?>>
        <a href="<?php echo base_url('admin/funfacts'); ?>">
            <i class="menu-icon fa fa-check-circle-o"></i>
            <span class="menu-text"> Satisfação </span>
        </a>
    </li>

    <li <?php if ($parte_2 === 'portfolios') { ?> class="<?php echo "active";
                                                            } ?>">
        <a href="<?php echo base_url('admin/portfolios'); ?>">
            <i class="menu-icon fa fa-building"></i>
            Nossos Parceiros
        </a>
    </li>

    <li <?php if ($parte_2 === 'equipes') {
            echo 'class=active';
        } ?>>
        <a href="<?php echo base_url('admin/equipes'); ?>">
            <i class="menu-icon fa fa-users"></i>
            <span class="menu-text"> Equipe </span>
        </a>
    </li>

    <!-- COMENTÁRIOS -->
    <li <?php if ($parte_2 == 'admin/testimonials') {
            echo 'class=active';
        } ?>>
        <a href="<?php echo base_url('admin/testimonials'); ?>">
            <i class="menu-icon fa fa-comment"></i>
            <span class="menu-text"> Comentários </span>
        </a>
    </li>

    <!--EMPRESA-->
    <li <?php if ($parte_2 == 'companies') {
            echo 'class=active';
        } ?>>
        <a href="<?php echo base_url('admin/companies'); ?>">
            <i class="menu-icon fa fa-suitcase"></i>
            <span class="menu-text"> Empresa </span>
        </a>
    </li>

    <!--NOTÍCIAS-->
    <li <?php if ($parte_2 == 'news') {
            echo 'class=active';
        } ?>>
        <a href="<?php echo base_url('admin/news'); ?>">
            <i class="menu-icon fa fa-bullhorn"></i>
            <span class="menu-text"> Novidades </span>
        </a>
    </li>

    <!--CURSOS-->
    <li <?php if ($parte_2 == 'courses') {
            echo 'class=active';
        } ?>>
        <a href="<?php echo base_url('admin/courses'); ?>">
            <i class="menu-icon fa fa-graduation-cap"></i>
            <span class="menu-text"> Cursos </span>
        </a>
    </li>

    <!--PARCERIAS-->
    <li <?php if ($parte_2 == 'partners') {
            echo 'class=active';
        } ?>>
        <a href="<?php echo base_url('admin/partners'); ?>">
            <i class="menu-icon fa fa-graduation-cap"></i>
            <span class="menu-text"> Parcerias </span>
        </a>
    </li>

    <!--POSGRADUACOES-->
    <li <?php if ($parte_2 == 'postgraduations') {
            echo 'class=active';
        } ?>>
        <a href="<?php echo base_url('admin/postgraduations'); ?>">
            <i class="menu-icon fa fa-graduation-cap"></i>
            <span class="menu-text"> Pós Graduações </span>
        </a>
    </li>

    <!-- FOTOS -->
    <li <?php if ($parte_2 == 'photos') {
            echo 'class=active';
        } ?>>
        <a href="<?php echo base_url('admin/photos'); ?>">
            <i class="menu-icon fa fa-camera"></i>
            <span class="menu-text"> Fotos da galeria</span>
        </a>
    </li>

    <!--USUÁRIOS-->
    <li <?php if ($parte_2 == 'users') {
            echo 'class=active';
        } ?>>
        <a href="<?php echo base_url('admin/users'); ?>">
            <i class="menu-icon fa fa-user"></i>
            <span class="menu-text"> Usuários </span>
        </a>
    </li>

    <!--LOGS-->
    <li <?php if ($parte_2 == 'logs') {
            echo 'class=active';
        } ?>>
        <a href="<?php echo base_url('admin/logs'); ?>">
            <i class="menu-icon fa fa-user-secret"></i>
            <span class="menu-text"> Logs </span>
        </a>
    </li>
</ul><!-- /.nav-list -->

<!--MINIMIZAR O MENU-->
<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
    <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
</div>
