<?php defined('BASEPATH') OR exit('No direct script access allowed');

class PhotosController extends CI_Controller {

    /* FUNÇÃO CONSTRUTORA */
    function __construct() {
        parent::__construct();
        $this->load->model('PhotosModel', 'm');
    }
    /* FIM DA FUNÇÃO CONSTRUTORA */

    /* FUNÇÃO PARA CHAMAR A VIEW */
    public function index() {
        $this->load->view('private/photos/index');
    }
    /* FIM DO FUNÇÃO PARA CHAMAR A VIEW */

    /* FUNÇÃO PARA BUSCAR TODOS */
    public function getAll() {
        $result = $this->m->getAll();
        echo json_encode($result);
    }
    /* FIM DA FUNÇÃO PARA BUSCAR TODOS */

    /* FUNÇÃO PARA ADICIONAR */
    public function add() {
        $result = $this->m->add();
        $msg['success'] = false;
        $msg['type'] = 'add';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }
    /* FIM DA FUNÇÃO PARA ADICIONAR */

    /* FUNÇÃO PARA EXCLUIR */
    public function delete() {
        $result = $this->m->delete();
        $msg['success'] = false;
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }
    /* FIM DA FUNÇÃO PARA EXCLUIR */

    /* FUNÇÃO PARA EXCLUIR OS SELECIONADS */
    public function deleteSelected() {
        $ids = $this->input->post("excluir_todos");
        $numRegs = count($ids);
        $msg['success'] = false;
        if ($numRegs > 0) {
            $this->m->deleteSelected($ids);
            if ($ids) {
                $msg['success'] = true;
            }
            echo json_encode($msg);
        } else {
            echo json_encode($msg);
        }
    }
    /* FIM DA FUNÇÃO PARA EXCLUIR OS SELECIONADOS */

    /* FUNÇÃO PARA BUSCAR POR ID */
    public function getById() {
        $result = $this->m->getById();
        echo json_encode($result);
    }
    /* FIM DA FUNÇÃO PARA BUSCAR POR ID */

    /* FUNÇÃO PARA ATUALIZAR */
    public function update() {
        $result = $this->m->update();
        $msg['success'] = false;
        $msg['type'] = 'update';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }
    /* FIM DA FUNÇÃO PARA ATUALIZAR */
}
