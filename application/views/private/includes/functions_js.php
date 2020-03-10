<!--PARA HOVER DOS BTNS DA PÁGINA HOME-->
<script>
    $(function() {
        $('#jq_btn_cad*').mouseenter(function() 
        {
            $(this).css('background-color', 'rgba(0,0,0,0.2)');
        }).mouseleave(function() {
            $(this).css('background-color', '#FFF');
        });
    });
</script>

<!--PARA PRELOAD DE TODAS AS PÁGINAS-->
<script>
    //preloader
    // makes sure the whole site is loaded
    $(window).on("load", function() 
    {
        // will first fade out the loading animation
        jQuery("#status").fadeOut();
        // will fade out the whole DIV that covers the website.
        jQuery("#preloader").delay(1000).fadeOut("slow");
    });
</script>

<!--INPUT DE UPLOAD DA IMAGEM-->
<script>
    $('#id-input-file-1 , #id-input-file-2').ace_file_input({
        no_file: 'Nenhum arquivo ...',
        btn_choose: 'Escolher',
        btn_change: 'Trocar',
        droppable: false,
        onchange: null,
        thumbnail: false //| true | large
        //whitelist: 'gif|png|jpg|jpeg'
        //blacklist:'exe|php'
        //onchange:''
        //
    });
</script>

<!-- NOTIFICAÇÕES -->
<script type="text/javascript">
    function regular(titulo, txt) 
    {
        $.gritter.add({
            title: titulo,
            text: txt,
            //image: 'assets/images/avatars/avatar1.png', //in Ace demo ./dist will be replaced by correct assets path
            sticky: false,
            time: '',
            class_name: (!$('#gritter-light').get(0).checked ? 'gritter-light' : '')
        });

        return false;
    };

    function sucesso(titulo, txt) 
    {
        $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: titulo,
            // (string | mandatory) the text inside the notification
            text: txt,
            class_name: 'gritter-success' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
        });
    };

    function info(titulo, txt) 
    {
        var unique_id = $.gritter.add({
            title: titulo,
            text: txt,
            //image: 'assets/images/avatars/avatar.png',
            sticky: true,
            time: '',
            class_name: 'gritter-info' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
        });
    };

    function atencao(titulo, txt) 
    {
        $.gritter.add({
            title: titulo,
            text: txt,
            //image: 'assets/images/avatars/avatar3.png', //in Ace demo ./dist will be replaced by correct assets path
            sticky: false,
            before_open: function() 
            {
                if ($('.gritter-item-wrapper').length >= 3) {
                    return false;
                }
            },
            class_name: 'gritter-warning' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
        });
    };

    function central(titulo, txt) 
    {
        $.gritter.add({
            title: titulo,
            text: txt,
            class_name: 'gritter-info gritter-center' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
        });
    };

    function erro(titulo, txt) 
    {
        $.gritter.add({
            title: titulo,
            text: txt,
            class_name: 'gritter-error' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
        });
    };

    function remove() 
    {
        $.gritter.removeAll();
    };


    jQuery(function($) {
        ///////////
        $(document).one('ajaxloadstart.page', function(e) 
        {
            $.gritter.removeAll();
            $('.modal').modal('hide');
        });

    });
</script>

<!--EDITOR DE TEXTO SUMMERNOTE-->
<script>
    //1
    $(document).ready(function() 
    {
        $('#summernote').summernote({
            placeholder: 'Digite seu texto aqui...',
            tabsize: 2,
            height: 100,
            lang: 'pt-BR'
        });
    });

    //2
    $(document).ready(function() 
    {
        $('#summernote_2').summernote({
            placeholder: 'Digite seu texto aqui...',
            tabsize: 2,
            height: 100,
            lang: 'pt-BR'
        });
    });

    //3
    $(document).ready(function() 
    {
        $('#summernote_3').summernote({
            placeholder: 'Digite seu texto aqui...',
            tabsize: 2,
            height: 100,
            lang: 'pt-BR'
        });
    });

    //4
    $(document).ready(function() 
    {
        $('#summernote_4').summernote({
            placeholder: 'Digite seu texto aqui...',
            tabsize: 2,
            height: 100,
            lang: 'pt-BR'
        });
    });

    //EXCLUSIVO PARA CONTATOS
    $(document).ready(function() 
    {
        $('#summernote_contatos').summernote({
            placeholder: 'Digite seu texto aqui os contatos da empresa, \nEx: Geral: (83) 3333-3333; \nEx: Financeiro: (83) 9-9999-9999...',
            tabsize: 2,
            height: 100,
            lang: 'pt-BR'
        });
    });
</script>