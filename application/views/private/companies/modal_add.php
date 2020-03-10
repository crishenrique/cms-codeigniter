<div id="myModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-body">
                        <form id="myForm" action="" method="POST" enctype="multipart/form-data" data-parsley-validate class="col-sm-12">
                            <input type="hidden" name="id_company" value="0">
                            <div class="form-group">
                                <label class="label-control">Logradouro</label>
                                <input name="street_company" type="text" class="form-control" placeholder="Logradouro">
                            </div>
                            <br style="clear: both" />
                            <div class="form-group">
                                <label class="label-control">Número</label>
                                <input name="number_company" type="text" class="form-control" placeholder="Número">
                            </div>
                            <br style="clear: both" />
                            <div class="form-group">
                                <label class="label-control">Complemento</label>
                                <input name="complement_company" type="text" class="form-control" placeholder="Complemento">
                            </div>
                            <br style="clear: both" />
                            <div class="form-group">
                                <label class="label-control">Bairro</label>
                                <input name="neighborhood_company" type="text" class="form-control" placeholder="Bairro">
                            </div>
                            <br style="clear: both" />
                            <div class="form-group">
                                <label class="label-control">CEP</label>
                                <input name="cep_company" type="text" class="form-control" placeholder="CEP">
                            </div>
                            <br style="clear: both" />
                            <div class="form-group">
                                <label class="label-control">Cidade</label>
                                <input name="city_company" type="text" class="form-control" placeholder="Cidade">
                            </div>
                            <br style="clear: both" />
                            <div class="form-group">
                                <label class="label-control">Estado</label>
                                <input name="state_company" type="text" class="form-control" placeholder="Estado">
                            </div>
                            <br style="clear: both" />
                            <div class="form-group">
                                <label class="label-control">Fixo</label>
                                <input name="telephone_company" type="text" class="form-control" placeholder="Fixo">
                            </div>
                            <br style="clear: both" />
                            <div class="form-group">
                                <label class="label-control">Celular</label>
                                <input name="mobile_company" type="text" class="form-control" placeholder="Celular">
                            </div>
                            <br style="clear: both" />
                            <div class="form-group">
                                <label class="label-control">E-Mail</label>
                                <input name="email_company" type="text" class="form-control" placeholder="E-Mail">
                            </div>
                            <br style="clear: both" />
                            <div class="form-group">
                                <label class="label-control">Whatsapp</label>
                                <input name="whatsapp_company" type="text" class="form-control" placeholder="Whatsapp">
                            </div>
                            <br style="clear: both" />
                            <div class="form-group">
                                <label class="label-control">Facebook</label>
                                <input name="facebook_company" type="text" class="form-control" placeholder="Facebook">
                            </div>
                            <br style="clear: both" />
                            <div class="form-group">
                                <label class="label-control">Instagram</label>
                                <input name="instagram_company" type="text" class="form-control" placeholder="Instagram">
                            </div>
                            <br style="clear: both" />
                            <div class="slide-primary">
                                <label>Status</label>
                                <input type="checkbox" name="status" class="ios" checked="checked" value="1" />
                                <i class="stt"></i>
                            </div>
                            <br style="clear: both" />
                            <div class="reset-button">
                                <input id="cornerExpand" type="reset" class="btn btn-warning" value="Limpar" />
                                <button id="btnSave" type="submit" class="btn btn-success">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>