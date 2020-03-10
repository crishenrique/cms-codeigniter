<?php defined('BASEPATH') OR exit('No direct script access allowed');

    class LogsController extends CI_Controller
    {

        /* FUNÇÃO CONSTRUTORA */
        function __construct()
        {
            parent::__construct();
            //CAL MODEL BANNER_M
            $this->load->model('LogsModel', 'm');
        }
        /* FIM DA FUNÇÃO CONSTRUTORA */


        /* FUNÇÃO PARA CARREGAR A VIEW */
        public function index()
        {
            $this->load->view('private/logs/index');
        }
        /* FIM DA FUNÇÃO CONSTRUTORA */


        /* FUNÇÃO PARA PEGAR TODOS */
        public function getAll()
        {
            $result = $this->m->getAll();
            echo json_encode($result);
        }
        /* FIM DA FUNÇÃO PARA PEGAR TODOS */


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
        /* FIM DA PARA FUNÇÃO EDITAR */

    }
