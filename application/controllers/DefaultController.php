<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class DefaultController extends CI_Controller {

		/* FUNÇÃO CONSTRUTORA */
		function __construct()
		{
			parent::__construct();

			$this->load->model('BannersModel', 'BANNER');
			$this->load->model('ServicesModel', 'SERVICE');
			$this->load->model('FunfactsModel', 'FUNFACT');
			$this->load->model('TeamsModel', 'TEAM');
			$this->load->model('TestimonialsModel', 'COMENTARIOS');
			$this->load->model('PortfoliosModel', 'PORTFOLIO');
			$this->load->model('NewsModel', 'NEWS');
			$this->load->model('CompaniesModel', 'COMPANY');
			$this->load->model('PhotosModel', 'PHOTOS');
			$this->load->model('AboutModel', 'ABOUT');

		}
		/* FIM DA FUNÇÃO CONSTRUTORA */


		/* FUNÇÃO PARA CARREGAR A VIEW */
		// public function home()
		public function index()
		{
			$dados['banner']		= $this->BANNER->getAllActives();
			$dados['service']		= $this->SERVICE->getAllActives();
			$dados['funfact']		= $this->FUNFACT->getAllActives();
			$dados['team']			= $this->TEAM->getAllActives();
			$dados['comentario']	= $this->COMENTARIOS->getAllActives();
			$dados['portfolio']		= $this->PORTFOLIO->getAllActives();
			$dados['news']			= $this->NEWS->getAllWithLimit();
			$dados['company']		= $this->COMPANY->getAll();
			$dados['photos']		= $this->PHOTOS->getAllWithLimit();
			$dados['about']			= $this->ABOUT->getAll();
			

			$this->load->view("public/home/index", $dados);
		}
		/* FIM DA FUNÇÃO PARA CARREGAR A VIEW */


        /* INÍCIO DO MÉTODO PRINCIPAL DO SITE */
        // public function index()
        // {
        //     $this->load->view('public/coming_soon/index');
        // }
        /** FIM DO MÉTODO PRINCIPAL DO SITE */


	}
