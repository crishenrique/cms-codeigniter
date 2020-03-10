<!-- Adicionando Javascript -->
<script type="text/javascript">
    $(document).ready(function() 
    {

        //Quando o campo cep perde o foco.
        $("input[name = cep_empresa]").blur(function() 
        {

            //NOVA VARIÁVEL "CEP" SOMENTE COM DÍGITOS.
            var cep = $(this).val().replace(/\D/g, '');

            //VERIFICA SE CAMPO CEP POSSUI VALOR INFORMADO.
            if (cep != "") {

                //EXPRESSÃO REGULAR PARA VALIDAR O CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if (validacep.test(cep)) {

                    //PREENCHE OS CAMPOS COM "..."  ENQUANTO CONSULTA WEBSERVICE.
                    $("input[name = logradouro_empresa]").val("...");
                    $("input[name = bairro_empresa]").val("...");
                    $("input[name = cidade_empresa]").val("...");
                    $("input[name = uf_empresa]").val("...");

                    //Consulta o webservice viacep.com.br/
                    $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) 
                    {
                        if (!("erro" in dados)) {
                            //Atualiza os campos com os valores da consulta.
                            $("input[name = logradouro_empresa]").val(dados.logradouro);
                            $("input[name = bairro_empresa]").val(dados.bairro);
                            $("input[name = cidade_empresa]").val(dados.localidade);
                            $("input[name = uf_empresa]").val(dados.uf);
                        } 
                        else {
                            //CEP pesquisado não foi encontrado.
                            alert("CEP não encontrado.");
                        }
                    });
                } 
                else {
                    //CEP É INVÁLIDO.
                    alert("Formato de CEP inválido.");
                }
            } 
            else {
                //CEP SEM VALOR, LIMPA FORMULÁRIO.
                alert("Informe o CEP.");
            }
        });
    });
</script>