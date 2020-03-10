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
                            <input type="hidden" name="id_testimonial" value="0">
                            <div class="form-group">
                                <label class="label-control">Nome</label>
                                <input name="name_testimonial" type="text" class="form-control" placeholder="Nome do Comentário">
                            </div>
                            <br style="clear: both" />
                            <div class="form-group">
                                <input name="text_testimonial" type="hidden" class="form-control">
                            </div>
                            <!--EDITOR SUMMERNOTE-->
                            <label class="label-control">Texto</label>
                            <div id="summernote"></div>
                            <br style="clear: both" />
                            <div class="form-group">
                                <label class="label-control">Cidade</label>
                                <input name="city_testimonial" type="text" class="form-control" placeholder="Cidade do Comentário">
                            </div>
                            <br style="clear: both" />
                            <div id="img_atual" class="form-group">
                                <label for="imagem" class="label-control " style="padding-left: 0">Imagem Atual</label>
                                <img style="border: 1px #ccc solid; padding: 10px" class="col-md-12 aqui" src="" />
                                <br style="clear: both" />
                            </div>
                            <div class="slide-primary">
                                <label>Status</label>
                                <input type="checkbox" name="status" class="ios" checked="checked" value="1" />
                                <i class="stt"></i>
                            </div>
                            <br style="clear: both" />
                            <div class="form-group">
                                <label for="id-input-file-2">Imagem do Comentário</label>
                                <input type="file" name="image_testimonial" id="id-input-file-2" />
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