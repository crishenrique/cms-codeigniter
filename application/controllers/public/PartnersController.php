<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class PartnersController extends CI_Controller {

		/* FUNÇÃO CONSTRUTORA */
		function __construct()
		{
			parent::__construct();

			$this->load->model('CompaniesModel', 'COMPANY');
			$this->load->model('PartnersModel', 'PARTNERS');
			$this->load->model('PartnersModel', 'PARTNER');


		}
		/* FIM DA FUNÇÃO CONSTRUTORA */


		/* FUNÇÃO PARA CARREGAR A VIEW */
		public function index()
		{

			$dados['company']		= $this->COMPANY->getAll();
			$dados['partnerslim']	= $this->PARTNERS->getAllWithLimit();
			$dados['partners']		= $this->PARTNERS->getAllActives();

			$this->load->view("public/partners/index", $dados);

		}
		/* FIM DA FUNÇÃO PARA CARREGAR A VIEW */

		/* FUNÇÃO PARA BUSCAR PELO ID */
		public function getThis($id){

			$dados['company']		= $this->COMPANY->getAll();
			$dados['partner']		= $this->PARTNER->getThis($id);
			$dados['partnerslim']	= $this->PARTNERS->getAllWithLimit();

			$this->load->view("public/partner/index", $dados);
		}
		/* FIM DA FUNÇÃO PARA BUSCAR PELO ID */

	}
