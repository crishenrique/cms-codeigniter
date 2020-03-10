<?php defined('BASEPATH') OR exit('No direct script access allowed');

    /**
     * PARA TODAS AS ROTAS INDEFINIDAS
     */
    class ErrorController extends CI_Controller 
    {

        /* FUNÇÃO CONSTRUTORA */
		function __construct()
		{
			parent::__construct();

			$this->load->model('CompaniesModel', 'COMPANY');

		}
		/* FIM DA FUNÇÃO CONSTRUTORA */

        public function index()
        {
            $dados['company']		= $this->COMPANY->getAll();

            $this->load->view('errors/html/error_404');
        }
    }
