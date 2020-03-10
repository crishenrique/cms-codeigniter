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
                        <form  id="myForm" action="" method="POST"  enctype="multipart/form-data" data-parsley-validate class="col-sm-12">
                            <input type="hidden" name="id_funfact" value="0">
                            <div class="form-group">
                                <label class="label-control">Título</label>
                                <input name="title_funfact" type="text" class="form-control" placeholder="Título">
                            </div>
                            <br style="clear: both" />
                            <div class="form-group">
                                <label class="label-control">Valor</label>
                                <input name="value_funfact" type="number" class="form-control" placeholder="Texto">
                            </div>
                            <br style="clear: both" />
                            <div class="slide-primary">
                                <label>Status</label>
                                <input  type="checkbox" name="status" class="ios"  checked="checked" value="1"/>
                                <i class="stt"></i>
                            </div>
                            <br style="clear: both" />
                            <div class="reset-button">
                                <input id="cornerExpand" type="reset" class="btn btn-warning" value="Limpar"/>
                                <button id="btnSave" type="submit" class="btn btn-success">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
