<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class CoursesController extends CI_Controller {

		/* FUNÇÃO CONSTRUTORA */
		function __construct()
		{
			parent::__construct();

			$this->load->model('CompaniesModel', 'COMPANY');
			$this->load->model('CoursesModel', 'COURSES');
			$this->load->model('CoursesModel', 'COURSE');


		}
		/* FIM DA FUNÇÃO CONSTRUTORA */


		/* FUNÇÃO PARA CARREGAR A VIEW */
		public function index()
		{

			$dados['company']		= $this->COMPANY->getAll();
			$dados['courseslim']	= $this->COURSES->getAllWithLimit();
			$dados['courses']		= $this->COURSES->getAllActives();

			$this->load->view("public/courses/index", $dados);

		}
		/* FIM DA FUNÇÃO PARA CARREGAR A VIEW */

		/* FUNÇÃO PARA BUSCAR PELO ID */
		public function getThis($id){

			$dados['company']		= $this->COMPANY->getAll();
			$dados['courseslim']	= $this->COURSES->getAllWithLimit();
			$dados['course']		= $this->COURSE->getThis($id);

			$this->load->view("public/course/index", $dados);
		}
		/* FIM DA FUNÇÃO PARA BUSCAR PELO ID */

	}
