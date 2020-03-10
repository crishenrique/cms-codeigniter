<?php defined('BASEPATH') OR exit('No direct script access allowed');

    class CompaniesController extends CI_Controller
    {

        /* FUNÇÃO CONSTRUTORA */
        function __construct()
        {
            parent::__construct();
            $this->load->model('CompaniesModel', 'm');
        }
        /* FIM DA DUNÇÃO CONSTRUTORA */


        /* FUNÇÃO PARA CHAMAR A INDEX */
        public function index()
        {
            $this->load->view('private/companies/index');
        }
        /* FIM DA FUNÇAO PARA CHAMAR A INDEX */


        /* FUNÇÃO PARA PEGAR TODOS */
        public function getAll()
        {
            $result = $this->m->getAll();
            echo json_encode($result);
        }
        /* FUNÇÃO PARA PEGAR TODOS */


        /* FUNÇÃO PARA ADICIONAR */
        public function add()
        {
            $result         = $this->m->add();
            $msg['success'] = false;
            $msg['type']    = 'add';
            if ($result) {
                $msg['success'] = true;
            }
            echo json_encode($msg);
        }
        /* FIM DA FUNÇÃO PARA ADICIONAR */


        /* FUNÇÃO PARA EDITAR */
        public function edit()
        {
            $result = $this->m->edit();
            echo json_encode($result);
        }
        /* FIM DA FUNÇÃO PARA EDITAR */


        /* FUNÇÃO PARA ATUALIZAR */
        public function update()
        {
            $result         = $this->m->update();
            $msg['success'] = false;
            $msg['type']    = 'update';
            if ($result) {
                $msg['success'] = true;
            }
            echo json_encode($msg);
        }
        /* FIM DA FUNÇÃO PARA ATUALIZAR */

    }
