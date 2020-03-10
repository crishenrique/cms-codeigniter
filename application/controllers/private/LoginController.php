<?php defined('BASEPATH') OR exit('No direct script access allowed');

    class LoginController extends CI_Controller
    {

        /* FUNÇÃO PARA CARREGAR A VIEW */
        public function index()
        {
            $this->load->view('private/login/index');
        }
        /* FIM DA SEÇÃO PARA CARREGAR A VIEW */


        /* FUNÇÃO PARA AUTENTICAÇÃO DO USUÁRIO NA PLATAFORMA ADMINISTRATIVA */
        public function authentication()
        {
            # PEGA OS DADOS ENVIADOS DO FORM LOGIN
            $usuario = $this->input->post('usuario');
            $senha   = $this->input->post('senha');

            # FAZ UMA BUSCA NO BANCO PELO USUARIO PASSADO E SENHA
            $this->db->where('name_user', $usuario);
            $this->db->where('password_user', $senha);
            $this->db->where('status', 1);

            # PEGA O USUÁRIO QUE EXISTE NO BANCO
            $usuario = $this->db->get('tbl_users')->result();

            # VERIFICA SE EXISTE 1
            if (count($usuario) === 1) {

                # CRIA UM ARRAY COM O NOME DO USUARIO E DIZ QUE ELE ESTÁ LOGADO
                $dados = array('usuario' => $usuario[0]->name_user,
                               'id'      => $usuario[0]->id_user,
                               'logado'  => TRUE,
                               'img'     => $usuario[0]->image_user
                );
                # INICIA UMA SESSÃO COM O ARRAY DE DADOS PASSANDO AS REFERENCIAS
                $this->session->set_userdata($dados);
                # MSG
                //$msg['s'] = "Login realizado com sucesso!";

                # REGISTRANDO NO BANCO O LOGIN DO ADMIN
                $dados_admin['name_admin_log'] = $usuario[0]->name_user;
                $dados_admin['ip_admin_log']   = $_SERVER['REMOTE_ADDR'];

                # INSERINDO LOG NO BANCO
                $this->db->insert('tbl_admin_logs', $dados_admin);

                # REDIRECIONA
                //redirect(base_url('admin/home'), 'refresh');

                $dados['sucesso'] = TRUE;

                # SE NÃO DÉ CERTO O LOGIN E SENHA
            } else {

                # MSG
                //$msg['e'] = "Usuário e/ou senha inválido (a)(s)!!!";
                # REDIRECIONA
                //$this->load->view('admin/login', $msg);

                $dados['erro'] = TRUE;
            }

            sleep(1);

            echo json_encode($dados);
        }
        /* FUNÇÃO PARA AUTENTICAÇÃO DO USUÁRIO NA PLATAFORMA ADMINISTRATIVA */


        /* FUNÇÃO PARA SAIR DO SISTEMA */
        public function logout()
        {
            # DESTROI A SESSÃO
            $this->session->sess_destroy();
            # REDIRECIONA A ROTA
            redirect(base_url() . "admin");
        }
        /* FIM DA FUNçAO PARA SAIR DO SISTEMA */

    }
