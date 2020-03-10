<!--BOTÃO DE STATUS-->
<script>
    /* Webarch Admin Dashboard 
     /* This JS is only for DEMO Purposes - Extract the code that you need
     -----------------------------------------------------------------*/
    //Cool ios7 switch - Beta version
    //Done using pure Javascript
    if (!$('html').hasClass('lte9')) {
        var Switch = require('ios7-switch'),
            checkbox = document.querySelector('.ios'),
            mySwitch = new Switch(checkbox);
        mySwitch.toggle();
        mySwitch.el.addEventListener('click', function(e) 
        {
            e.preventDefault();
            mySwitch.toggle();
        }, false);
        //CRIANDO MULTIPLAS INSTÂNCIAS
        var Switch2   = require('ios7-switch'),
            checkbox  = document.querySelector('.iosblue'),
            mySwitch2 = new Switch2(checkbox);
            mySwitch2.el.addEventListener('click', function(e) 
        {
            e.preventDefault();
            mySwitch2.toggle();
        }, false);
    }
</script>

<!-- CRUD -->
<script>
    $(function() 
    {
        showAllEmpresa();
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

        // ADICIONAR
        $('#btnAdd').click(function() 
        {
            $('#myModal').modal('show');
            $('#myModal').find('.modal-title').text('Adicionar Dados da Empresa');
            $('#myForm').attr('action', '<?php echo base_url() ?>private/CompaniesController/add');

            // SETANDO VALORES INICIAIS DO FORM
            $('#myForm')[0].reset();
            $('.ios-switch').removeClass('off').addClass('on').next('input:checkbox').attr('checked', true).val('1');
        });

        // PARA DESABILITAR O SUBMIT NATURAL DO FORM
        $('#myForm').submit(function() 
        {
            return false;
        });

        $('#btnSave').click(function() 
        {
            // ENCAPSULANDO INPUTS
            var logradouro  = $('input[name=street_company]');
            var numero      = $('input[name=number_company]');
            var bairro      = $('input[name=neighborhood_company]');
            var cep         = $('input[name=cep_company]');
            var cidade      = $('input[name=city_company]');
            var estado      = $('input[name=state_company]');
            var fixo        = $('input[name=telephone_company]');
            var celular     = $('input[name=mobile_company]');
            var email       = $('input[name=email_company]');

            var url     = $('#myForm').attr('action');
            var result  = '';

            if (logradouro.val() === '') {
                logradouro.parent().parent().addClass('has-error');
            } else {
                logradouro.parent().parent().removeClass('has-error');
                result += '1';
            }
            if (numero.val() === '') {
                numero.parent().parent().addClass('has-error');
            } else {
                numero.parent().parent().removeClass('has-error');
                result += '2';
            }
            if (bairro.val() === '') {
                bairro.parent().parent().addClass('has-error');
            } else {
                bairro.parent().parent().removeClass('has-error');
                result += '3';
            }
            if (cep.val() === '') {
                cep.parent().parent().addClass('has-error');
            } else {
                cep.parent().parent().removeClass('has-error');
                result += '4';
            }
            if (cidade.val() === '') {
                cidade.parent().parent().addClass('has-error');
            } else {
                cidade.parent().parent().removeClass('has-error');
                result += '5';
            }
            if (estado.val() === '') {
                estado.parent().parent().addClass('has-error');
            } else {
                estado.parent().parent().removeClass('has-error');
                result += '6';
            }
            if (fixo.val() === '') {
                fixo.parent().parent().addClass('has-error');
            } else {
                fixo.parent().parent().removeClass('has-error');
                result += '7';
            }
            if (celular.val() === '') {
                celular.parent().parent().addClass('has-error');
            } else {
                celular.parent().parent().removeClass('has-error');
                result += '8';
            }
            if (email.val() === '') {
                email.parent().parent().addClass('has-error');
            } else {
                email.parent().parent().removeClass('has-error');
                result += '9';
            }

            if (result === '123456789') {
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
                            sucesso('Empresa ' + type + ' com sucesso', '');
                            showAllEmpresa();
                        } else {
                            erro('Não foi possível add empresa!', 'Erro Cod: 002');
                            $('#myModal').modal('hide');
                        }
                    },
                    error: function() 
                    {
                        erro('Não foi possível add empresa!', 'Erro Cod: 002');
                        $('#myModal').modal('hide');
                        // LIMPA OS CAMPOS
                        $('#myForm')[0].reset();
                    }
                });
            }
        });

        // EDIT
        $('#showdata').on('click', '.item-edit', function() 
        {
            var id_company = $(this).attr('data');
            $('#myModal').modal('show');
            $('#img_atual').fadeIn('fast');
            $('#myModal').find('.modal-title').text('Editar');
            $('#myForm').attr('action', '<?php echo base_url() ?>private/CompaniesController/update');
            $.ajax({
                type: 'ajax',
                method: 'get',
                url: '<?php echo base_url() ?>private/CompaniesController/edit',
                data: {
                    id_company: id_company
                },
                async: false,
                dataType: 'json',
                success: function(data) 
                {
                    $('input[name=id_company]').val(data.id_company);
                    $('input[name=street_company]').val(data.street_company);
                    $('input[name=number_company]').val(data.number_company);
                    $('input[name=complement_company]').val(data.complement_company);
                    $('input[name=neighborhood_company]').val(data.neighborhood_company);
                    $('input[name=cep_company]').val(data.cep_company);
                    $('input[name=city_company]').val(data.city_company);
                    $('input[name=state_company]').val(data.state_company);
                    $('input[name=telephone_company]').val(data.telephone_company);
                    $('input[name=mobile_company]').val(data.mobile_company);
                    $('input[name=email_company]').val(data.email_company);
                    $('input[name=whatsapp_company]').val(data.whatsapp_company);
                    $('input[name=facebook_company]').val(data.facebook_company);
                    $('input[name=instagram_company]').val(data.instagram_company);
                    $('input[name=registered]').val(data.registered);
                    $('input[name=updated]').val(data.updated);
                    $('input[name=status]').val(data.status);
                    $('input[name=excluded]').val(data.excluded);

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

        // FUNCTION
        function showAllEmpresa() 
        {
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url() ?>private/CompaniesController/getAll',
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
                            '<input name="excluir_todos[]" value="' + data[i].id_company + '" type="checkbox" class="ace" />' +
                            '<span class="lbl"></span>' +
                            '</label>' +
                            '</td>' +
                            '<td>' + data[i].id_company + '</td>' +
                            '<td>' + data[i].telephone_company + '</td>' +
                            '<td>' + data[i].mobile_company + '</td>' +
                            '<td>' + data[i].email_company + '</td>' +
                            '<td>' + data[i].updated + '</td>' +
                            '<td class="hidden-480">' +
                            '	<span class="label label-sm ' + classe + '">' + status + '</span>' +
                            '</td>' +
                            '<td>' +
                            '<div class="hidden-sm hidden-xs action-buttons">' +
                            '<a class="green" href="javascript:;" >' +
                            '	<i class="ace-icon fa fa-pencil bigger-130 item-edit" data="' + data[i].id_company + '" title="Atualizar"></i>' +
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
    jQuery(function($) 
    {
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
                    null, null, null, null, null, null,
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
