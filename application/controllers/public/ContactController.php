<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class ContactController extends CI_Controller {

		/* FUNÇÃO CONSTRUTORA */
		function __construct()
		{
			parent::__construct();

			$this->load->model('CompaniesModel', 'COMPANY');


		}
		/* FIM DA FUNÇÃO CONSTRUTORA */


		/* FUNÇÃO PARA CARREGAR A VIEW */
		public function index()
		{

			$dados['company']		= $this->COMPANY->getAll();

			$this->load->view("public/contact/index", $dados);

		}
		/* FIM DA FUNÇÃO PARA CARREGAR A VIEW */

		/* FUNÇÃO PARA CARREGAR VIEW FORMULÁRIO */
		public function enviar_formulario()
		{
			$dados['company'] = $this->COMPANY->getAll();
			
			$recaptchaResponse 	 = $this->input->post('g-recaptcha-response');
			$dados_form		 	 = $this->input->post();
			$recaptcha			 = $this->reCaptcha($recaptchaResponse);
			$mensagem	 		 = $this->load->view('public/message/index', $dados_form, true);
			
			$this->email->from($dados_form['email'], $dados_form['nome']);
			$this->email->to('exemplo@exemplo.com');
			$this->email->subject('Mensagem do site! loremipsum');
			$this->email->message($mensagem);
			
			if ($recaptcha===true) {
				redirect("contato/success");
			} else {
				redirect("contato/error");
			}
			
		
			// if ($this->email->send()) {
			// 	redirect("contato/success");
			// } else {
			// 	redirect("contato/error");
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
