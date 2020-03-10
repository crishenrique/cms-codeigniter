<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class RegistrationController extends CI_Controller {

		/* FUNÇÃO CONSTRUTORA */
		function __construct()
		{
			parent::__construct();

			$this->load->model('CompaniesModel', 'COMPANY');
			$this->load->model('CoursesModel', 'COURSES');
			$this->load->model('PartnersModel', 'PARTNERS');
			$this->load->model('PostgraduationsModel', 'POSTGRADUATIOS');

		}
		/* FIM DA FUNÇÃO CONSTRUTORA */


		/* FUNÇÃO PARA CARREGAR A VIEW */
		public function index()
		{

			$dados['company']			= $this->COMPANY->getAll();
			$dados['courses']			= $this->COURSES->getAll();
			$dados['partners']			= $this->PARTNERS->getAll();
			$dados['postgraduations']	= $this->POSTGRADUATIOS->getAll();

			$this->load->view("public/registration/index", $dados);

		}
		/* FIM DA FUNÇÃO PARA CARREGAR A VIEW */

		/* FUNÇÃO PARA CARREGAR VIEW FORMULÁRIO */
		public function enviar_formulario_matricula()
		{
			$dados['company'] = $this->COMPANY->getAll();
			
			$recaptchaResponse 	 = $this->input->post('g-recaptcha-response');
			$dados_form		 	 = $this->input->post();
			$mensagem			 = $this->load->view('public/messageregistration/index', $dados_form, true);
			$recaptcha			 = $this->reCaptcha($recaptchaResponse);
			$arquivo			 = $this->upload_anexo();

			$this->email->from($dados_form['email'], $dados_form['nome']);
			$this->email->to('exemplo@exemplo.com');
			$this->email->subject('Mensagem do site!');
			$this->email->message($mensagem);
			$this->email->attach($arquivo);

			if ($recaptcha===true) {
				redirect("matricula/success");
			} else {
				redirect("matricula/error");
			}
		
			// if ($this->email->send()) {
			// redirect("matricula/success");
			// } else {
			// redirect("matricula/error");
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

		//FUNCTION PARA FAZER UPLOAD DE IMAGEM
		public function upload_anexo() {

			//SE EXIXTIR INPUT FILE COM ESSE NAME
			if (isset($_FILES["anexo"])) {
	
				//DEFINE O PATH ONDE O ARQUIVO SERÁ GRAVADO
				$path = "./assets/uploads/anexos/";
	
				//VERIFICA SE EXISTE
				//SE NÃO EXISTIR CRIAMOS COM PERMISSÃO DE LEITURA E ESCRITA
				if (!is_dir($path)) {
					mkdir($path, 0777, $recursive = true);
				}
				//PEGA A EXTENÇÃO DA IMAGEM
				$extension = explode('.', $_FILES['anexo']['name']);
	
				//VERIFICA A EXTENÇÃO
				if ($extension[1] == "pdf" || $extension[1] == "doc" || $extension[1] == "docx") {
	
					//CRIA UM NOVE NOME PARA A IMAGEM
					$new_name = uniqid(md5(substr($_FILES['anexo']['name'], 0, 5))) . '.' . $extension[1];
					//DESTINO DA IMAGEM
					$destination = $path . $new_name;
					//SETA O DESTINO DA IMAGEM
					move_uploaded_file($_FILES['anexo']['tmp_name'], $destination);
					//RETORNA O NOVO NOME DA IMAGEM
					return $path . $new_name;
				} else {
					return 'Arquivo inválido!!';
				}
			}
		}

	}
