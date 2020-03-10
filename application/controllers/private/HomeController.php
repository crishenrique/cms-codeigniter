<?php defined('BASEPATH') OR exit('No direct script access allowed');

    class HomeController extends CI_Controller
    {

        /* FUNÇÃO CONSTRUTORA */
        function __construct()
        {
            parent::__construct();
        }
        /* FIM DA FUNÇÃO CONSTRUTORA */


        /* FUNÇÃO PARA CARREGAR A VIEW */
        public function index()
        {
            $this->load->view('private/home/index');
        }
        /* FIM DA FUNÇÃO PARA CARREGAR A VIEW */
    }
