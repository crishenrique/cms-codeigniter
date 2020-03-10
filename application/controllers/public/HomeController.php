<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class HomeController extends CI_Controller {

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

		/* FUNÇÃO PARA CARREGAR VIEW FORMULÁRIO */
		public function enviar_formulario_novidades()
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
			
			$recaptchaResponse 	  = $this->input->post('g-recaptcha-response');
			$dados_form			  = $this->input->post();
			$mensagem		 	  = $this->load->view('public/message_newsletter/index', $dados_form, true);
			$recaptcha			 = $this->reCaptcha($recaptchaResponse);
			
			$this->email->from($dados_form['email'], $dados_form['email']);
			$this->email->to('exemplo@exemplo.com');
			$this->email->subject('Mensagem do site! loremipsum');
			$this->email->message($mensagem);

			if ($recaptcha===true) {
				redirect("home/success#ft1");
			} else {
				redirect("home/error#ft1");
			}
			
			// if ($this->email->send()) {
			// 	redirect("home/success");
			// } else {
			// 	redirect("home/error");
			// }
		}
		/* FIM DA FUNÇÃO PARA CARREGAR VIEW FORMULÁRIO */

		/* FUNÇÃO RECAPTCHA */
		public function reCaptcha($recaptchaResponse)
		{			
			$secret = '6LdzO8cUAAAAAI3DcXMFUyEbeyj7W7RXjDk946xf';
			$url = 'https://www.google.com/recaptcha/api/siteverify';
			$data1 = array('secret' => $secret, 'response' => $recaptchaResponse);
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
			$response = curl_exec($ch);
			curl_close($ch);
			$status = json_decode($response, true);

			if ($status['success']) {
				return true;
			}else{
				return false;
			}
		}
		/* FIM DA FUNÇÃO RECAPTCHA */


	}
