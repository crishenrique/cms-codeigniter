<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class PostgraduationsController extends CI_Controller {

		/* FUNÇÃO CONSTRUTORA */
		function __construct()
		{
			parent::__construct();

			$this->load->model('CompaniesModel', 'COMPANY');
			$this->load->model('PostgraduationsModel', 'POSTGRADUATIOS');
			$this->load->model('PostgraduationsModel', 'POSTGRADUATE');


		}
		/* FIM DA FUNÇÃO CONSTRUTORA */


		/* FUNÇÃO PARA CARREGAR A VIEW */
		public function index()
		{

			$dados['company']				= $this->COMPANY->getAll();
			$dados['postgraduationslim']	= $this->POSTGRADUATIOS->getAllWithLimit();
			$dados['postgraduations']		= $this->POSTGRADUATIOS->getAllActives();

			$this->load->view("public/postgraduations/index", $dados);

		}
		/* FIM DA FUNÇÃO PARA CARREGAR A VIEW */

		/* FUNÇÃO PARA BUSCAR PELO ID */
		public function getThis($id){

			$dados['company']				= $this->COMPANY->getAll();
			$dados['postgraduate']			= $this->POSTGRADUATE->getThis($id);
			$dados['postgraduationslim']	= $this->POSTGRADUATIOS->getAllWithLimit();

			$this->load->view("public/postgraduate/index", $dados);
		}
		/* FIM DA FUNÇÃO PARA BUSCAR PELO ID */

	}
