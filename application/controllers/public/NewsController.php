<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class NewsController extends CI_Controller {

		/* FUNÇÃO CONSTRUTORA */
		function __construct()
		{
			parent::__construct();

			$this->load->model('CompaniesModel', 'COMPANY');
			$this->load->model('NewsModel', 'NEWSPOST');
			$this->load->model('NewsModel', 'NEWS');

		}
		/* FIM DA FUNÇÃO CONSTRUTORA */


		/* FUNÇÃO PARA CARREGAR A VIEW */
		public function index()
		{

			$dados['company']		= $this->COMPANY->getAll();
			$dados['getlim']		= $this->NEWS->getWithLimit();
			$dados['newslim']		= $this->NEWS->getAllWithLimit();
			$dados['news']			= $this->NEWS->getAllActives();

			$this->load->view("public/news/index", $dados);

		}
		/* FIM DA FUNÇÃO PARA CARREGAR A VIEW */

		/* FUNÇÃO PARA BUSCAR PELO ID */
		public function getThis($id){

			$dados['company']		= $this->COMPANY->getAll();
			$dados['newspost']		= $this->NEWSPOST->getThis($id);
			$dados['newslim']		= $this->NEWS->getAllWithLimit();

			$this->load->view("public/newspost/index", $dados);
		}
		/* FIM DA FUNÇÃO PARA BUSCAR PELO ID */

	}
