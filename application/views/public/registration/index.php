<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>loremipsum</title>
    <!--INCLUINDO CSS -->
    <?php include_once(VIEWPATH . "public/includes/css.php") ?>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url("assets/images/favloremipsum.png") ?>">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    <!-- Pre Loader -->
    <div id="dvLoading"></div>

    <!-- INCLUINDO HEADER-->
    <?php include_once(VIEWPATH . "public/includes/header.php") ?>

    <!-- Inner Banner Wrapper Start -->
    <div class="inner-banner">
        <div class="container">
            <div class="col-sm-12">
                <h2>Pré-matricula</h2>
            </div>
            <div class="col-sm-12 inner-breadcrumb">
                <ul>
                    <li><a href="<?= base_url('home') ?>">Home</a></li>
                    <li>Pré-matricula</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Inner Banner Wrapper End -->
    <section class="inner-wrapper">
        <div class="container">
            <div class="row">
                <h2>Pré <span>Matrícula</span></h2>

                <div class="inner-wrapper-main">
                    <div class="col-sm-8 col-sm-offset-2 col-xs-offset-0">

                        <!--MENSAGEM RETORNO DO ENVIO DA MENSAGEM-->
                        <?php if (isset($parte_2) && $parte_2 == "success") { ?>
                            <div class="alert  alert-success">
                                <button type="button" class="close" data-dismiss="alert">
                                    <i class="ace-icon fa fa-times"></i>
                                </button>
                                <p>
                                    <strong>
                                        <i class="ace-icon fa fa-check"></i>
                                        Sucesso!
                                    </strong>
                                    Recebemos sua mensagem.
                                </p>
                            </div>
                        <?php } ?>

                        <?php if (isset($parte_2) && $parte_2 == "error") { ?>
                            <div class="alert  alert-danger">
                                <button type="button" class="close" data-dismiss="alert">
                                    <i class="ace-icon fa fa-times"></i>
                                </button>
                                <p>
                                    <strong>
                                        <i class="ace-icon fa fa-check"></i>
                                        Erro!
                                    </strong>
                                    Não foi possível enviar sua mensagem.
                                </p>
                            </div>
                        <?php } ?>

                        <div class="form">
                            <!--Início div form  -->
                            <form method='post' action="<?= base_url('enviar_formulario_matricula'); ?>" id="contactFrm" name="contactFrm" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 style="text-align: justify; text-indent: 1.5em;"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </h4>
                                    </div>
                                    <div class="col-sm-4"> </div>
                                    <div class="col-sm-4">
                                        <a href="<?= base_url('assets/documentos/contrato.pdf') ?>" target="_blank" class="btn btn-success" style="background-color: #0788c0; border-color: #0788c0;"> Baixe o contrato para assinar </a>
                                    </div>
                                    <div class="col-sm-4"> </div>

                                    <div class="col-sm-12">
                                        <h3 class="txt">Endereço</h3>
                                    </div>

                                    <div class="col-sm-6">
                                        <input id="cep" name="cep" placeholder="CEP - números" class="txt" required="" value="" type="text" maxlength="8" pattern="[0-9]+$">
                                    </div>

                                    <div class="col-sm-6">
                                        <button type="button" class="txt2 btn btn-block" style="background-color: #0788c0; border-color: #0788c0; color: #fff; margin-top: 12px" onclick="pesquisacep(cep.value)">Pesquisar
                                        </button>
                                    </div>

                                    <div class="">
                                        <div class="col-sm-12">
                                            <input id="rua" name="rua" class="txt" placeholder="Rua" required="" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <input id="numero" name="numero" class="txt" placeholder="Nº" required="" type="text">
                                        </div>

                                        <div class="col-sm-6">
                                            <input id="bairro" name="bairro" class="txt" placeholder="Bairro" required="" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <input id="cidade" name="cidade" class="txt" placeholder="Cidade" required="" type="text">
                                        </div>

                                        <div class="col-sm-6">
                                            <input id="estado" name="estado" class="txt" placeholder="Estado" required="" type="text">
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <input type="text" required placeholder="Nome Completo" value="" name="nome" class="txt">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" required placeholder="CPF" value="" name="cpf" class="txt" maxlength="14" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" OnKeyPress="formatar('###.###.###-##', this)">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" required placeholder="RG" value="" name="rg" class="txt" maxlength="14" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" required placeholder="Data de nascimento" value="" name="nascimento" class="txt" maxlength="10" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" OnKeyPress="formatar('##/##/####', this)">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" required placeholder="Número do CRM/COREN" value="" name="crm" class="txt" maxlength="14" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" OnKeyPress="formatar('###.###.###-##', this)">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" required placeholder="Celular" value="" name="celular" class="txt" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" OnKeyPress="formatar('## #####-####', this)">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" required placeholder="Telefone" value="" name="telefone" class="txt" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" OnKeyPress="formatar('## ####-####', this)">
                                    </div>
                                    <div class="col-sm-12">
                                        <input type="text" required placeholder="Email" value="" name="email" class="txt" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" required placeholder="Profissão" value="" name="profissaso" class="txt">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" required placeholder="Especialidade" value="" name="especialidade" class="txt">
                                    </div>
                                    <div class="col-sm-12">
                                        <input type="text" required placeholder="Local de Trabalho" value="" name="localtrabalho" class="txt">
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="exampleFormControlSelect1">Forma de pagamento</label>
                                    </div>
                                    <div class="col-sm-12">
                                        <select class="txt" type="text" style="width: 100%" id="exampleFormControlSelect1">
                                            <option>Pagamento à vista</option>
                                            <option>Pagamento no cartão</option>
                                            <option>Transferência bancária</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="exampleFormControlSelect1">Curso pretendido</label>
                                    </div>
                                    <div class="col-sm-12">
                                        <select class="txt" type="text" style="width: 100%" id="exampleFormControlSelect1">
                                            <option>Nossos Cursos</option>
                                            <option>Parcerias</option>
                                            <option>Pós Graduação</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12">
                                        <textarea placeholder="Mensagem" name="mensagem" type="text" class="txt_3"></textarea>
                                    </div>

                                    <br style="clear: both" />

                                    <div class="col-sm-12">
                                        <input type="file" name="anexo" value="Anexe o documento assinado" class="form-control-file">
                                    </div>
                                </div>
                                <div class="g-recaptcha" data-sitekey="6LdzO8cUAAAAAJUAkDkCHgQU3MwrGByMZglZWdZB"></div>
                                <input type="submit" value="Enviar" name="submit" class="txt2">
                            </form>
                        </div>
                        <!--Fim div form  -->
                    </div>
                </div>
            </div>
    </section>

    <!-- INICIO BOTAO ACTION -->
    <div class="call-to-action">
        <div class="container">
            <h3>Faça a sua pré-matricula </h3>
            <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. printing and typesetting industry.</p>
            <a href="<?= base_url('matricula') ?>">Pré-matricula</a> -->
        </div>
    </div>
    <!-- FINAL BOTAO ACTION-->

    <!-- INCLUINDO FOOTER -->
    <?php include_once(VIEWPATH . "public/includes/footer.php") ?>

    <!-- INCLUINDO JS -->
    <?php include_once(VIEWPATH . "public/includes/js.php") ?>

    <!-- SCRIPT FORMS -->
    <script>
        function limpa_formulario_cep() {
            //LIMPA VALORES DO FORMULÁRIO DE CEP.
            document.getElementById('rua').value = ("");
            document.getElementById('bairro').value = ("");
            document.getElementById('cidade').value = ("");
            document.getElementById('estado').value = ("");
        }

        function meu_callback(conteudo) {
            if (!("erro" in conteudo)) {
                //ATUALIZA OS CAMPOS COM OS VALORES.
                document.getElementById('rua').value = (conteudo.logradouro);
                document.getElementById('bairro').value = (conteudo.bairro);
                document.getElementById('cidade').value = (conteudo.localidade);
                document.getElementById('estado').value = (conteudo.uf);
            } else {
                //CEP NÃO ENCONTRADO.
                limpa_formulario_cep();
                alert("CEP não encontrado.");
                document.getElementById('cep').value = ("");
            }
        }

        function pesquisacep(valor) {

            //NOVA VARIÁVEL "CEP" SOMENTE COM DÍGITOS.
            var cep = valor.replace(/\D/g, '');

            //VERIFICA SE CAMPO CEP POSSUI VALOR INFORMADO.
            if (cep !== "") {

                //EXPRESSÃO REGULAR PARA VALIDAR O CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if (validacep.test(cep)) {

                    //PREENCHE OS CAMPOS COM "..."  ENQUANTO CONSULTA WEBSERVICE.
                    document.getElementById('rua').value = "...";
                    document.getElementById('bairro').value = "...";
                    document.getElementById('cidade').value = "...";
                    document.getElementById('estado').value = "...";

                    //CRIA UM ELEMENTO JAVASCRIPT.
                    var script = document.createElement('script');

                    //SINCRONIZA COM O CALLBACK.
                    script.src = '//viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

                    //INSERE SCRIPT NO DOCUMENTO E CARREGA O CONTEÚDO.
                    document.body.appendChild(script);
                } else {
                    //CEP É INVÁLIDO.
                    limpa_formulario_cep();
                    alert("Formato de CEP inválido.");
                }
            } else {
                //CEP SEM VALOR, LIMPA FORMULÁRIO.
                limpa_formulario_cep();
            }
        }

        function formatar(mascara, documento) {
            var i = documento.value.length;
            var saida = mascara.substring(0, 1);
            var texto = mascara.substring(i);

            if (texto.substring(0, 1) != saida) {
                documento.value += texto.substring(0, 1);
            }

        }

        function idade() {
            var data = document.getElementById("dtnasc").value;
            var dia = data.substr(0, 2);
            var mes = data.substr(3, 2);
            var ano = data.substr(6, 4);
            var d = new Date();
            var
                ano_atual = d.getFullYear(),
                mes_atual = d.getMonth() + 1,
                dia_atual = d.getDate();
            ano = +ano,
                mes = +mes,
                dia = +dia;

            var idade = ano_atual - ano;

            if (mes_atual < mes || mes_atual == mes_aniversario && dia_atual < dia) {
                idade--;
            }
            return idade;
        }

        function exibe(i) {
            document.getElementById(i).readOnly = true;
        }

        function desabilita(i) {
            document.getElementById(i).disabled = true;
        }

        function habilita(i) {
            document.getElementById(i).disabled = false;
        }

        function showhide() {
            var div = document.getElementById("newpost");
            if (idade() >= 18) {
                div.style.display = "none";
            } else if (idade() < 18) {
                div.style.display = "inline";
            }
        }
    </script>

</body>

</html>