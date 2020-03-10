<!--BOTÃO DE STATUS-->
<script>
    /* Webarch private Dashboard 
    /* This JS is only for DEMO Purposes - Extract the code that you need
    -----------------------------------------------------------------*/
    //Cool ios7 switch - Beta version
    //Done using pure Javascript
    if (!$('html').hasClass('lte9')) {
        var Switch = require('ios7-switch'),
            checkbox = document.querySelector('.ios'),
            mySwitch = new Switch(checkbox);
        mySwitch.toggle();
        mySwitch.el.addEventListener('click', function(e) {
            e.preventDefault();
            mySwitch.toggle();
        }, false);
        //CRIANDO MULTIPLAS INSTÂNCIAS
        var Switch2 = require('ios7-switch'),
            checkbox = document.querySelector('.iosblue'),
            mySwitch2 = new Switch2(checkbox);

        mySwitch2.el.addEventListener('click', function(e) {
            e.preventDefault();
            mySwitch2.toggle();
        }, false);
    }
</script>

<!--CRUD-->
<script>
    $(function() 
    {
        showAllPostgraduations();
        // ATUALIZANDO EM TEMPO REAL O TEXTO DO STATUS E O VALOR
        $('.ios-switch').click(function() 
        {
            if ($(this).hasClass('on')) {
                $(this).next('input:checkbox').attr('checked', true).val('1');
                $('.stt').html('Ativo');
            } else {
                $(this).next('input:checkbox').removeAttr('checked').val('0');
                $('.stt').html('Inativo');
            }
        });

        //Add New
        $('#btnAdd').click(function() 
        {
            $('#myModal').modal('show');
            $('#img_atual').hide();
            $('#myModal').find('.modal-title').text('Adicionar Novo Curso');
            $('#myForm').attr('action', '<?php echo base_url() ?>private/PostgraduationsController/add');
            //INICIA O EDITOR DE TEXTO SUMMERNOTE EM BRANCO
            $('#summernote').summernote('code', '');
            //SETANDO VALORES INICIAIS DO FORM
            $('#myForm')[0].reset();
            $('.ios-switch').removeClass('off').addClass('on').next('input:checkbox').attr('checked', true).val('1');
        });

        //PARA DESABILITAR O SUBMIT NATURAL DO FORM
        $('#myForm').submit(function() 
        {
            return false;
        });
        $('#btnSave').click(function() 
        {
            //ENCAPSULANDO INPUTS
            var title = $('input[name=title_postgraduate]');
            var text = $('input[name=text_postgraduate]');
            var price = $('input[name=price_postgraduate]');
            var image = $('input[name=image_postgraduate]');
            var extension = $('input[name=image_postgraduate]').val().split('.').pop().toLowerCase();

            //PEGA OS VALORES EXATOS DO EDITOR
            var markupStr = $('#summernote').summernote('code');
            //SETA NO VALOR DA VARIÁVEL TEXTO
            text.val(markupStr);

            var url = $('#myForm').attr('action');
            var data = $('#myForm').serialize();
            var result = '';

            if (title.val() === '') {
                title.parent().parent().addClass('has-error');
            } else {
                title.parent().parent().removeClass('has-error');
                result += '1';
            }

            if (text.val() === '') {
                text.parent().parent().addClass('has-error');
            } else {
                text.parent().parent().removeClass('has-error');
                result += '2';
            }

            if (price.val() === '') {
                price.parent().parent().addClass('has-error');
            } else {
                price.parent().parent().removeClass('has-error');
                result += '3';
            }

            if (image.val() !== '' && jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) === -1) {
                //ALERT("ARQUIVO INVÁLIDO, DE EXTENSÃO: " + EXTENSION);
                $('#myModal').modal('hide');
                $('.alert-danger').html('Arquivo inválido, de extenção: ' + extension + ' Favor colocar imagem do tipo: jpg, png, gif! <br /> Com no máximo 2Mb').fadeIn().delay(6000).fadeOut('slow');
                $('input[name=image_postgraduate]').val('');
                image.parent().parent().addClass('has-error');
                return false;
            } else {
                image.parent().parent().removeClass('has-error');
                result += '4';
            }

            if (result === '1234') {
                $('#myForm').ajaxSubmit({
                    url: url,
                    method: 'post',
                    dataType: 'json',
                    success: function(response) 
                    {
                        if (response.success) {
                            $('#myModal').modal('hide');
                            $('#myForm')[0].reset();
                            if (response.type === 'add') {
                                var type = 'adicionado';
                            } else if (response.type === 'update') {
                                var type = "atualizado";
                            }
                            sucesso('Curso ' + type + ' com sucesso', '');
                            showAllPostgraduations();
                        } else {
                            erro('Não foi possível add curso!', 'Erro Cod: 002');
                            $('#myModal').modal('hide');
                        }
                    },
                    error: function() 
                    {
                        erro('Não foi possível add curso!', 'Erro Cod: 002');
                        $('#myModal').modal('hide');
                        //LIMPA OS CAMPOS
                        $('#myForm')[0].reset();
                    }
                });
            }
        });

        //edit
        $('#showdata').on('click', '.item-edit', function() 
        {
            var id_postgraduate = $(this).attr('data');
            $('#myModal').modal('show');
            $('#img_atual').fadeIn('fast');
            $('#myModal').find('.modal-title').text('Editar curso');
            $('#myForm').attr('action', '<?php echo base_url() ?>private/PostgraduationsController/update');
            $.ajax({
                type: 'ajax',
                method: 'get',
                url: '<?php echo base_url() ?>private/PostgraduationsController/getById',
                data: {
                    id_postgraduate: id_postgraduate
                },
                async: false,
                dataType: 'json',
                success: function(data) 
                {
                    $('input[name=title_postgraduate]').val(data.title_postgraduate);
                    $('input[name=text_postgraduate]').val(data.text_postgraduate);

                    $('#summernote').summernote('code', data.text_postgraduate);

                    $('input[name=price_postgraduate]').val(data.price_postgraduate);
                    $('.aqui').attr("src", "<?php echo base_url('assets/uploads/postgraduations/'); ?>" + data.image_postgraduate);
                    $('input[name=id_postgraduate]').val(data.id_postgraduate);

                    if (data.status == '1') {
                        $('.ios-switch').removeClass('off').addClass('on').next('input:checkbox').attr('checked', true).val('1');
                        $('.stt').html('Ativo');
                    } else {
                        $('.ios-switch').removeClass('on').addClass('off').next('input:checkbox').removeAttr('checked').val('0');
                        $('.stt').html('inativo');
                    }
                },
                error: function() 
                {
                    erro('Não foi conectar!', 'Erro Cod: 003');
                    $('#myModal').modal('hide');
                }
            });
        });

        //ATUALIZANDO IMAGEM ATUAL EM TEMPO REAL
        $('input[name=image_postgraduate]').on('change', function() 
        {
            var src = document.getElementById("id-input-file-2").files[0];
            var image = window.URL.createObjectURL(src);
            $('.aqui').attr("src", image);
        });

        //delete- 
        $('#showdata').on('click', '.item-delete', function() 
        {
            var id_postgraduate = $(this).attr('data');
            $('#deleteModal').modal('show');
            $('#btnDelete').unbind().click(function() 
            {
                $.ajax({
                    type: 'ajax',
                    method: 'get',
                    async: false,
                    url: '<?php echo base_url() ?>private/PostgraduationsController/delete',
                    data: {
                        id_postgraduate: id_postgraduate
                    },
                    dataType: 'json',
                    success: function(response) 
                    {
                        if (response.success) {
                            $('#deleteModal').modal('hide');
                            info('Sucesso ao deletar curso', 'Curso deletado!');
                            showAllPostgraduations();
                        } else {
                            erro('Erro', 'Não foi possivel deletar o curso.');
                            $('#deleteModal').modal('hide');
                        }
                    },
                    error: function() 
                    {
                        erro('Erro', 'Não foi possivel deletar o curso.');
                        $('#deleteModal').modal('hide');
                    }
                });
            });
        });


        //delete-multi
        $('#myForm2').on('click', '.jq_btn_excluir_marcados', function() 
        {
            $('#deleteModal').modal('show');
            var data = $('#myForm2').serialize();
            $('#btnDelete').unbind().click(function() 
            {
                $.ajax({
                    type: 'ajax',
                    method: 'post',
                    async: false,
                    url: '<?php echo base_url() ?>private/PostgraduationsController/deleteSelected',
                    data: data,
                    dataType: 'json',
                    success: function(response) 
                    {
                        if (response.success) {
                            $('#deleteModal').modal('hide');
                            info('Sucesso ao deletar cursos', 'Cursos deletados!');
                            showAllPostgraduations();
                        } else {
                            atencao('Atenção', 'Escolha no mínimo um curso para excluir!');
                            $('#deleteModal').modal('hide');
                        }
                    },
                    error: function() 
                    {
                        atencao('Atenção', 'Escolha no mínimo um curso para excluir!');
                        $('#deleteModal').modal('hide');
                    }
                });
            });
        });

        //function
        function showAllPostgraduations() 
        {
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url() ?>private/PostgraduationsController/getAll',
                async: false,
                dataType: 'json',
                success: function(data) 
                {
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        var status = '';
                        var classe = '';
                        if (data[i].status == '1') {
                            status = 'Ativo';
                            classe = 'label-success';
                        } else {
                            status = 'Inativo';
                            classe = 'label-warning';
                        }
                        html += '<tr>' +
                            '<td class="center">' +
                            '<label class="pos-rel">' +
                            '<input name="excluir_todos[]" value="' + data[i].id_postgraduate + '" type="checkbox" class="ace" />' +
                            '<span class="lbl"></span>' +
                            '</label>' +
                            '</td>' +
                            '<td>' + data[i].id_postgraduate + '</td>' +
                            '<td style="width: 20%">' +
                            '<img src="<?php echo base_url('assets/uploads/postgraduations/'); ?>' + data[i].image_postgraduate + '" class="img-responsive" alt="User Image" width="250" height="">' +
                            '</td>' +
                            '<td>' + data[i].title_postgraduate + '</td>' +
                            '<td>' + data[i].text_postgraduate + '</td>' +
                            '<td>' + data[i].price_postgraduate + '</td>' +
                            '<td>' + data[i].updated + '</td>' +
                            '<td class="hidden-480">' +
                            '<span class="label label-sm ' + classe + '">' + status + '</span>' +
                            '</td>' +
                            '<td>' +
                            '<div class="hidden-sm hidden-xs action-buttons">' +
                            '<a class="green" href="javascript:;" >' +
                            '<i class="ace-icon fa fa-pencil bigger-130 item-edit" data="' + data[i].id_postgraduate + '" title="Atualizar"></i>' +
                            '</a>' +
                            '<a class="red" href="javascript:;" >' +
                            '<i class="ace-icon fa fa-trash-o bigger-130 item-delete" data="' + data[i].id_postgraduate + '" title="Remover"></i>' +
                            '</a>' +
                            '</div>' +
                            '</td>' +
                            '</tr>';
                    }
                    if (data === false) {
                        html += '<tr>' +
                            '<td style="text-align:center" colspan="9"> <i>Sem dados na tabela!</i>' +
                            '</td>' +
                            '</tr>';
                    }
                    $('#showdata').html(html);
                },
                error: function() 
                {
                    alert('Não foi possível conectar ao banco!');
                }
            });
        }
    });
</script>


<!-- FUNÇÕES DA TABELA -->
<!-- SCRIPTS RELACIONADOS A ESTA PÁGINA -->
<script type="text/javascript">
    jQuery(function($) {
        //INICIA O PLUGIN DATATABLES
        var myTable =
            $('#dynamic-table')
            //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
            .DataTable({
                "language": {
                    "sEmptyTable": "Nenhum registro encontrado",
                    "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sInfoThousands": ".",
                    "sLengthMenu": "_MENU_ resultados por página",
                    "sLoadingRecords": "Carregando...",
                    "sProcessing": "Processando...",
                    "sZeroRecords": "Nenhum registro encontrado",
                    "sSearch": "Pesquisar",


                    "lengthMenu": "Mostrando _MENU_ registros por página",
                    "zeroRecords": "Nenhum arquivo encontrado",
                    "info": "Mostrando Página _PAGE_ de _PAGES_",
                    "infoEmpty": "Nenhum registro disponível",
                    "infoFiltered": "(filtro de _MAX_ registros no total)",
                    "search": "Procurar:",

                    'oPaginate': {
                        'sNext': 'Próximo',
                        'sPrevious': 'Anterior',
                        'sFirst': 'Primeiro',
                        'sLast': 'Último'
                    },
                    'oAria': {
                        'sSortAscending': ': Ordenar colunas de forma ascendente',
                        'sSortDescending': ': Ordenar colunas de forma descendente'
                    }

                },

                bAutoWidth: false,
                //COLUNAS DA TABELA AQUI!!! CADA NULL É UMA COLUNA!!!
                "aoColumns": [{
                        "bSortable": false
                    },
                    null, null, null, null, null, null, null,
                    {
                        "bSortable": false
                    }
                ],
                "aaSorting": [],

                //"bProcessing": true,
                //"bServerSide": true,
                //"sAjaxSource": "http://127.0.0.1/table.php"	,

                //,
                //"sScrollY": "200px",
                //"bPaginate": false,

                //"sScrollX": "100%",
                //"sScrollXInner": "120%",
                //"bScrollCollapse": true,
                //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
                //you may want to wrap the table inside a "div.dataTables_borderWrap" element

                //"iDisplayLength": 50


                select: {
                    style: 'multi'
                }


            });



        $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';


        new $.fn.dataTable.Buttons(myTable, {
            buttons: [{
                    "extend": "colvis",
                    "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Ocutar/Aparecer colunas</span>",
                    "className": "btn btn-white btn-primary btn-bold"
                    //columns: ':not(:first):not(:last)'
                },
                {
                    "extend": "print", //buttons.print.min.js
                    "text": "<i class='fa fa-print bigger-110 grey jq_print'></i> <span class='hidden'>Imprimir</span>",
                    "className": "btn btn-white btn-primary btn-bold"
                }
                //                {
                //                    "extend": "copy",
                //                    "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
                //                    "className": "btn btn-white btn-primary btn-bold"
                //                },
                //                {
                //                    "extend": "csv",
                //                    "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
                //                    "className": "btn btn-white btn-primary btn-bold"
                //                },
                //                {
                //                    "extend": "excel",
                //                    "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
                //                    "className": "btn btn-white btn-primary btn-bold"
                //                },
                //                {
                //                    "extend": "pdf",
                //                    "text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
                //                    "className": "btn btn-white btn-primary btn-bold"
                //                },
                //                {
                //                    "extend": "print",
                //                    "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
                //                    "className": "btn btn-white btn-primary btn-bold",
                //                    autoPrint: false,
                //                    message: 'This print was produced using the Print button for DataTables'
                //                }
            ]
        });


        myTable.buttons().container().appendTo($('.tableTools-container'));

        //style the message box
        //        var defaultCopyAction = myTable.button(1).action();
        //        myTable.button(1).action(function (e, dt, button, config) {
        //            defaultCopyAction(e, dt, button, config);
        //            $('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
        //        });


        var defaultColvisAction = myTable.button(0).action();
        myTable.button(0).action(function(e, dt, button, config) {

            defaultColvisAction(e, dt, button, config);


            if ($('.dt-button-collection > .dropdown-menu').length == 0) {
                $('.dt-button-collection')
                    .wrapInner('<ul data-placement="left"  data-rel="popover" class="dropdown-menu dropdown-menu-right dropdown-light dropdown-caret" />')
                    .find('a').attr('href', '#').wrap("<li />");
            }
            $('.dt-button-collection').appendTo('.tableTools-container .dt-buttons');
        });

        ////

        setTimeout(function() {
            $($('.tableTools-container')).find('a.dt-button').each(function() {
                var div = $(this).find(' > div').first();
                if (div.length == 1)
                    div.tooltip({
                        container: 'body',
                        title: div.parent().text()
                    });
                else
                    $(this).tooltip({
                        container: 'body',
                        title: $(this).text()
                    });
            });
        }, 500);

        myTable.on('select', function(e, dt, type, index) {
            if (type === 'row') {
                $(myTable.row(index).node()).find('input:checkbox').prop('checked', true);
            }
        });
        myTable.on('deselect', function(e, dt, type, index) {
            if (type === 'row') {
                $(myTable.row(index).node()).find('input:checkbox').prop('checked', false);
            }
        });

        /////////////////////////////////
        //table checkboxes
        $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);

        //select/deselect all rows according to table header checkbox
        $('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function() {
            var th_checked = this.checked; //checkbox inside "TH" table header

            $('#dynamic-table').find('tbody > tr').each(function() {
                var row = this;
                if (th_checked)
                    myTable.row(row).select();
                else
                    myTable.row(row).deselect();
            });
        });

        //select/deselect a row when the checkbox is checked/unchecked
        $('#dynamic-table').on('click', 'td input[type=checkbox]', function() {
            var row = $(this).closest('tr').get(0);
            if (this.checked)
                myTable.row(row).deselect();
            else
                myTable.row(row).select();
        });

        $(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
            e.stopImmediatePropagation();
            e.stopPropagation();
            e.preventDefault();
        });

        //And for the first simple table, which doesn't have TableTools or dataTables
        //select/deselect all rows according to table header checkbox
        var active_class = 'active';
        $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function() {
            var th_checked = this.checked; //checkbox inside "TH" table header

            $(this).closest('table').find('tbody > tr').each(function() {
                var row = this;
                if (th_checked)
                    $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                else
                    $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
            });
        });

        //select/deselect a row when the checkbox is checked/unchecked
        $('#simple-table').on('click', 'td input[type=checkbox]', function() {
            var $row = $(this).closest('tr');
            if ($row.is('.detail-row '))
                return;
            if (this.checked)
                $row.addClass(active_class);
            else
                $row.removeClass(active_class);
        });

        /********************************/
        //add tooltip for small view action buttons in dropdown menu
        $('[data-rel="tooltip"]').tooltip({
            placement: tooltip_placement
        });

        //tooltip placement on right or left
        function tooltip_placement(context, source) {
            var $source = $(source);
            var $parent = $source.closest('table')
            var off1 = $parent.offset();
            var w1 = $parent.width();

            var off2 = $source.offset();
            //var w2 = $source.width();

            if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2))
                return 'right';
            return 'left';
        }

        /***************/
        $('.show-details-btn').on('click', function(e) {
            e.preventDefault();
            $(this).closest('tr').next().toggleClass('open');
            $(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
        });
        /***************/

        /**
         //add horizontal scrollbars to a simple table
         $('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
         {
         horizontal: true,
         styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
         size: 2000,
         mouseWheelLock: true
         }
         ).css('padding-top', '12px');
         */

    });
</script>