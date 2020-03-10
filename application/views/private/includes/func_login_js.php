<script type="text/javascript">
    //PARA DESABILITAR O SUBMIT NATURAL DO FORM
    $('#MyForm').submit(function() 
    {
        return false;
    });

    $(document).keypress(function(e) 
    {
        if (e.which == 13) $('#MyBtn').click();
    });

    $(function() 
    {
        $('#MyBtn').click(function() 
        {

            //SETA ACTION DO FORM
            $('#MyForm').attr('action', '<?= base_url() ?>private/LoginController/authentication');

            //ENCAPSULANDO AS VARS
            var usuario = $('input[name=usuario]');
            var senha = $('input[name=senha]');
            var formValido = false;

            if (usuario.val() === '' || senha.val() === '') {
                //REMOVE SE TIVER ALGUM...
                $('.alert-info').remove();

                //MSG DE INFO
                $('#jq_msg').append("<div class='alert alert-info'>" +
                    "<button type='button' class='close' data-dismiss='alert'>" +
                    "<i class='ace-icon fa fa-times'></i>" +
                    "</button>" +
                    "<strong>Atenção! </strong>" +
                    "<br />" +
                    "Todos os campos são obrigatótios." +
                    "</div>");

                //RETIRA A INFO COM 2 SEG
                $('.alert-info').delay(2000).fadeOut('slow');

            } else {
                //CAMPOS PREENCHHIDOS
                formValido = true;
            }

            //SE CAMPOS PREENCHIDOS...
            if (formValido === true) {
                var url = $('#MyForm').attr('action'); //SET AÇÃO AO FORM
                var data = $('#MyForm').serialize(); //PERCORRE TODOS CAMPOS DO FORM

                //ENVIA O FORM POR AJAX
                $('#MyForm').ajaxSubmit({
                    url: url,
                    method: 'post',
                    dataType: 'json',
                    beforeSend: function() 
                    {
                        //REMOVE SE TIVER ALGUMA MSG!
                        $('.alert-warning').remove();

                        //MSG DE INFO
                        $('#jq_msg').append("<div class='alert alert-warning'>" +
                            "<button type='button' class='close' data-dismiss='alert'>" +
                            "<i class='ace-icon fa fa-times'></i>" +
                            '</button>' +
                            '<strong>Autenticando... </strong> ' +
                            "Em instantes." +
                            '<br />' +
                            '</div>');
                    },
                    success: function(dados) 
                    {
                        //VERIFICA SE DADOS VEIO COM ERRO
                        if (dados['erro'] === true) {
                            //REMOVE O AUTENTICANDO...
                            $('.alert-warning').remove();

                            //REMOVE SE TIVER ALGUMA MSG!
                            $('.alert-danger').remove();

                            //MSG DE ERRO
                            $('#jq_msg').append("<div class='alert alert-danger'>" +
                                "<button type='button' class='close' data-dismiss='alert'>" +
                                "<i class='ace-icon fa fa-times'></i>" +
                                "</button>" +
                                '<strong>' +
                                "<i class='ace-icon fa fa-times'></i>" +
                                'Ops! ' +
                                '</strong>' +
                                'Credenciais inválidas.' +
                                '<br />' +
                                '</div> ');

                            //APARECE A MSG DE ERRO E RETIRA COM 2 SEG
                            $('.alert-danger').fadeIn('slow').delay(2000).fadeOut('slow');

                        } else {
                            //REMOVE O AUTENTICANDO...
                            $('.alert-warning').remove();

                            //REMOVE SE TIVER ALGUMA MSG!
                            $('.alert-success').remove();

                            //MSG DE SUCESSO
                            $('#jq_msg').append("<div class='alert alert-success'>" +
                                "<button type='button' class='close' data-dismiss='alert'>" +
                                "<i class='ace-icon fa fa-times'></i>" +
                                "</button>" +
                                '<strong>' +
                                "<i class='ace-icon fa fa-check'></i>" +
                                'Autenticado! ' +
                                '</strong>' +
                                ' Redirecionando...' +
                                '<br />' +
                                '</div> ');

                            //APARECE A MSG DE SUCESSO E RETIRA COM 2 SEG
                            $('.alert-success').fadeIn('slow').delay(2000).fadeOut('slow');

                            //REDIRECIONA COM JQ PARA A PÁGINA HOME ADMIN
                            setTimeout(function() 
                            {
                                $(location).attr("href", '<?php echo base_url('admin/home') ?>');
                            }, 2000);

                        }

                        //LIMPANDO CAMPOS DO FORM
                        usuario.val('');
                        senha.val('');

                    },
                    error: function() 
                    {
                        //MSG DE ERRO DE SISTEMA
                        //REMOVE SE TIVER ALGUMA MSG!
                        $('.alert-warning').remove();
                        $('.alert-danger').remove();

                        //MSG DE ERRO DE SISTEMA
                        $('#jq_msg').append("<div class='alert alert-danger'>" +
                            "<button type='button' class='close' data-dismiss='alert'>" +
                            "<i class='ace-icon fa fa-times'></i>" +
                            "</button>" +
                            '<strong>' +
                            "<i class='ace-icon fa fa-times'></i>" +
                            'Erro de sistema!' +
                            '</strong>' +
                            '<br />' +
                            'Contate o administrador. Erro: 515.' +
                            '</div> ');

                        //LIMPANDO CAMPOS DO FORM
                        usuario.val('');
                        senha.val('');

                        //APARECE A MSG DE ERRO E RETIRA COM 2 SEG
                        $('.alert-danger').fadeIn('slow').delay(2000).fadeOut('slow');
                    }

                }); //FIM DI SUBMIT AJAX

            } //FIM DO IF VALIDAÇÃO

        }); //FIM DA FUNÇÃO DO CLICK

    }); //FIM DA FUNÇÃO GERAL
</script>