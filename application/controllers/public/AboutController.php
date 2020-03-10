<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class AboutController extends CI_Controller
	{

		/* FUNÇÃO CONSTRUTORA */
		function __construct()
		{
			parent::__construct();

			$this->load->model('CompaniesModel', 'COMPANY');
			$this->load->model('AboutModel', 'ABOUT');


		}
		/* FIM DA FUNÇÃO CONSTRUTORA */


		/* FUNÇÃO PARA CARREGAR A VIEW */
		public function index()
		{

			$dados['company']		= $this->COMPANY->getAll();
			$dados['about']			= $this->ABOUT->getAllActives();

			$this->load->view("public/about/index", $dados);

		}
		/* FIM DA FUNÇÃO PARA CARREGAR A VIEW */

	}
