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

                            <input type="hidden" name="id_news" value="0">
                            <input type="hidden" name="id_author_news" value="<?php echo $this->session->userdata('id') ?>">


                            <div class="form-group">
                                <label class="label-control">Título</label>
                                <input name="title_news" type="text" class="form-control" placeholder="Título da Notícia">
                            </div>
                            <br style="clear: both" />

                            <div class="form-group">
                                <label class="label-control">Resumo</label>
                                <input name="abstract_news" type="text" class="form-control" placeholder="Resumo da Notícia">
                            </div>
                            <br style="clear: both" />

                            <div class="form-group">
                                <input name="text_news" type="hidden" class="form-control">
                            </div>
                            <!--EDITOR SUMMERNOTE-->
                            <label class="label-control">Texto Notícia</label>
                            <div id="summernote"></div>
                            <br style="clear: both" />

                            <div class="form-group">
                                <label class="label-control">Fonte de Origem</label>
                                <input name="origin_news" type="text" class="form-control" placeholder="Fonte da Notícia">
                            </div>
                            <br style="clear: both" />

                            <!-- <div class="form-group">
                                <label class="label-control">Autor</label>
                                <input name="id_author_news" type="text" class="form-control" placeholder="Autor da postagem">
                            </div>
                            <br style="clear: both" /> -->

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
                                <label for="id-input-file-2">Imagem de Capa</label>
                                <input type="file" name="image_news" id="id-input-file-2" />
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