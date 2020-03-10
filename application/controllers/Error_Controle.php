<?php defined('BASEPATH') OR exit('No direct script access allowed');

    /**
     * PARA TODAS AS ROTAS INDEFINIDAS
     */
    class Error_Controle extends CI_Controller
    {

        public function index()
        {
            $this->load->view('errors/html/error_404');
        }
    }
