<?php defined('BASEPATH') OR exit('No direct script access allowed');

    /**
     * ROTA PADRÃO PARA INCIAR
     */
    class Default_Controle extends CI_Controller
    {
        /* INÍCIO DO CONSTRUTOR */
        function __construct()
        {
            parent::__construct();

        }
        /** FIM DO CONSTRUTOR */


        /* INÍCIO DO MÉTODO PRINCIPAL DO SITE */
        public function index()
        {
            $this->load->view('public/coming_soon/index');
        }
        /** FIM DO MÉTODO PRINCIPAL DO SITE */

    }
