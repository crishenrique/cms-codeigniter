<footer id="ft1">
    <div class="container">
        <?php
        if (isset($company) && !empty($company)) {
            foreach ($company as $key => $item) {
                ?>
                <div class="col-sm-3">
                    <img src="<?= base_url("assets/images/footer-logo.jpg") ?>" alt="World Education">
                </div>
                <div class="col-sm-5">
                    <div class="contactus">
                        <h2>Contate-nos</h2>
                        <ul class="list-ul">
                            <li><i class="fa fa-map-marker"></i>
                                <?= $item->street_company ?>,
                                <?= $item->number_company ?>,
                                <?= $item->complement_company ?>
                                <?= $item->neighborhood_company ?> -
                                <?= $item->city_company ?> -
                                <?= $item->state_company ?></li>
                            <li>
                                <a href="https://api.whatsapp.com/send?phone=<?= $item->whatsapp_company ?>" target="_blank">    
                                <i class="fa fa-whatsapp"></i>
                                <span>clique no ícone e mande uma mensagem no nosso whatsapp</span>
                            </li>
                                </a>
                            <li>
                                <i class="fa fa-envelope"></i><a href="mailto:contato@loremipsum.com.br"><?= $item->email_company ?></a>
                            </li>
                            <li>
                                <a href="<?= $item->facebook_company  ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="<?= $item->instagram_company ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 subscirbe pull-right">
                    <h2>Receba Novidades</h2>
                    <p class="sub">
                        <span>Inscreva-se</span> para receber nossas novidades &amp; promoções:</p>

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
                        <form method='post' action="<?= base_url('enviar_formulario_novidades'); ?>" id="contactFrm" name="contactFrm">
                            <input type="text" placeholder="Digite seu e-mail" id="exampleInputName" class="form-control first" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                            <input type="submit" class="bttn" value="Enviar">
                            <div class="g-recaptcha" required data-sitekey="6LdzO8cUAAAAAJUAkDkCHgQU3MwrGByMZglZWdZB"></div>
                        </form>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </div>

</footer>

<!-- Copy Rights Start -->
<div class="footer-wrapper">
    <div class="container">
        <p>
            <a href="#" target="_blank"> &copy; Copyright
            </a>
            <script type="text/javascript">
                var d = new Date();
                document.write(d.getFullYear());
            </script>
            loremipsum | Todos os direitos reservados.
        </p>
    </div>
    <a id="scrool-top" href="#"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>
</div>
<!-- Copy Rights End -->