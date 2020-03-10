<!-- basic scripts -->

<!--[if !IE]> -->
<script src="<?php echo base_url('assets/admin/'); ?>assets/js/jquery-2.1.4.min.js"></script>

<!-- <![endif]-->

<script type="text/javascript">
  if ('ontouchstart' in document.documentElement)
    document.write("<script src='<?php echo base_url('assets/admin/'); ?>assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
</script>
<script src="<?php echo base_url('assets/admin/'); ?>assets/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
  <script src="<?php echo base_url('assets/admin/'); ?>assets/js/excanvas.min.js"></script>
<![endif]-->
<script src="<?php echo base_url('assets/admin/'); ?>assets/js/jquery-ui.custom.min.js"></script>
<script src="<?php echo base_url('assets/admin/'); ?>assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="<?php echo base_url('assets/admin/'); ?>assets/js/jquery.easypiechart.min.js"></script>
<script src="<?php echo base_url('assets/admin/'); ?>assets/js/jquery.sparkline.index.min.js"></script>
<script src="<?php echo base_url('assets/admin/'); ?>assets/js/jquery.flot.min.js"></script>
<script src="<?php echo base_url('assets/admin/'); ?>assets/js/jquery.flot.pie.min.js"></script>
<script src="<?php echo base_url('assets/admin/'); ?>assets/js/jquery.flot.resize.min.js"></script>
<!-- page specific plugin scripts -->
<script src="<?php echo base_url('assets/admin/'); ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/admin/'); ?>assets/js/jquery.dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/admin/'); ?>assets/js/dataTables.buttons.min.js"></script>
<!--<script src="<?php echo base_url('assets/admin/'); ?>assets/js/buttons.flash.min.js"></script>-->
<script src="<?php echo base_url('assets/admin/'); ?>assets/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url('assets/admin/'); ?>assets/js/buttons.print.min.js"></script>
<script src="<?php echo base_url('assets/admin/'); ?>assets/js/buttons.colVis.min.js"></script>
<script src="<?php echo base_url('assets/admin/'); ?>assets/js/dataTables.select.min.js"></script>

<!--NOTIFICAÇÕES-->
<script src="<?php echo base_url('assets/admin/'); ?>assets/js/jquery.gritter.min.js"></script>
<script src="<?php echo base_url('assets/admin/'); ?>assets/js/bootbox.js"></script>
<script src="<?php echo base_url('assets/admin/'); ?>assets/js/spin.js"></script>

<!-- ace scripts -->
<script src="<?php echo base_url('assets/admin/'); ?>assets/js/ace-elements.min.js"></script>
<script src="<?php echo base_url('assets/admin/'); ?>assets/js/ace.min.js"></script>

<!--PARA OS FORMULÁRIOS-->
<script type="text/javascript" src="<?php echo base_url('assets/admin/assets/js/form.js'); ?>"></script>

<!--SWITCH DE STATUS DOS FORM-->
<script src="<?php echo base_url('assets/admin/'); ?>assets/js/ios-switch/ios7-switch.js" type="text/javascript"></script>

<!--EDITOR DE TEXTO-->
<script src="<?php echo base_url('assets/admin/'); ?>assets/js/bootstrap-wysiwyg.min.js"></script>
<script src="<?php echo base_url('assets/admin/'); ?>assets/js/markdown.min.js"></script>
<script src="<?php echo base_url('assets/admin/'); ?>assets/js/bootstrap-markdown.min.js"></script>
<script src="<?php echo base_url('assets/admin/'); ?>assets/js/jquery.hotkeys.index.min.js"></script>
<script src="<?php echo base_url('assets/admin/'); ?>assets/js/bootstrap-wysiwyg.min.js"></script>

<!--EDITOR DE TEXTO SUMMERNOTE-->
<script src="<?php echo base_url('assets/'); ?>summernote-0.8.8-dist/dist/summernote.js"></script>
<!-- include summernote-ko-KR -->
<script src="<?php echo base_url('assets/'); ?>summernote-0.8.8-dist/dist/lang/summernote-pt-BR.js"></script>

<!-- DATEPICKER -->
<script type="text/javascript" src="<?php echo base_url('assets/admin/'); ?>assets/js/moment-with-locales.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/admin/'); ?>assets/js/bootstrap-datetimepicker.js"></script>

<!--INCLUINDO FUNCTIONS_JS AQUI-->
<?php include_once VIEWPATH . 'private/includes/functions_js.php';
