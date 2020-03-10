<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class GalleryController extends CI_Controller {

		/* FUNÇÃO CONSTRUTORA */
		function __construct()
		{
			parent::__construct();

			$this->load->model('CompaniesModel', 'COMPANY');
			$this->load->model('PhotosModel', 'PHOTOS');

		}
		/* FIM DA FUNÇÃO CONSTRUTORA */


		/* FUNÇÃO PARA CARREGAR A VIEW */
		public function index()
		{

			$dados['company']		= $this->COMPANY->getAll();
			$dados['photos']		= $this->PHOTOS->getAllActives();

			$this->load->view("public/gallery/index", $dados);

		}
		/* FIM DA FUNÇÃO PARA CARREGAR A VIEW */

	}
