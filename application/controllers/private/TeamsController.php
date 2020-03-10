<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class TeamsController extends CI_Controller {

    /* FUNÇÃO CONSTRUTORA */
    function __construct() {
        parent::__construct();
        $this->load->model('TeamsModel', 'm');
    }
    /* FIM DA FUNÇÃO CONSTRUTORA */

    /* FUNÇÃO PARA CARREGAR A VIEW */
    public function index() {
        $this->load->view('private/teams/index');
    }
    /* FIM DA FUNÇÃO PARA CARREGAR A VIEW */

    /* FUNÇÃO PARA PEGAR TODOS */
    public function getAll() {
        $result = $this->m->getAll();
        echo json_encode($result);
    }
    /* FIM DA FUNÇÃO PARA PEGAR TODOS */

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

    /* FUNÇÃO PARA APAGAR */
    public function delete() {
        $result = $this->m->delete();
        $msg['success'] = false;
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }
    /* FIM DA FUNÇÃO PARA APAGAR */

    /* FUNÇÃO PARA APAGAR OS SELECIONADOS */
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
    /* FIM DA FUNÇÃO PARA APAGAR OS SELECIONADOS  */

    /* FUNÇÃO PARA BUSCAR PELO ID */
    public function getById() {
        $result = $this->m->getById();
        echo json_encode($result);
    }
    /* FIM DA FUNÇÃO PARA EDITAR PELO ID */

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
    /* FIM DA FUÇÃO PARA ATUALIZAR */
}
