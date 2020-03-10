<?php defined('BASEPATH') OR exit('No direct script access allowed');

    class UsersModel extends CI_Model
    {

        /* FUNÇÃO CONSTRUTORA */
        function __construct()
        {
            parent::__construct();
        }
        /* FUNÇÃO CONSTRUTORA */


        /* MÉTODO DE GET */
        public function get()
        {
            # SELECIONA OS DADOS DO DB
            # CRIA UMA VAR QUE RECEBE OS DADOS DO BANCO
            return $this->db->get('tbl_users')->result();
        }
        /* FIM DO MÉTODO GET */


        /* FUNÇÃO BUSCAR TODOS */
        public function getAll()
        {
            # ORDENA
            $this->db->order_by('id_user', 'desc');
            # PEGA
            $query = $this->db->get('tbl_users');
            # VERIFICA SE TEM ALGO
            if ($query->num_rows() > 0) {
                return $query->result();
            } else {
                return false;
            }
        }
        /* FIM FUNÇÃO BUSCAR TODOS */


        /* FUNÇÃO PARA ADICIONAR */
        public function add()
        {
            # SETA A DATA E HORA DO BRASIL
            date_default_timezone_set('America/Recife');

            # CRIA UM ARRAY COM OS DADOS QUE SERÃO INSERIDOS NO BANCO
            $field = array(
                'name_user'        => $this->input->post('name_user'),
                'description_user' => $this->input->post('description_user'),
                'email_user'       => $this->input->post('email_user'),
                'password_user'    => $this->input->post('password_user'),
                'image_user'       => $this->upload_image(),
                'updated'          => date('Y-m-d H:i:s'),
                'status'           => $this->input->post('status')
            );

            # INSERE
            $this->db->insert('tbl_users', $field);

            # VERIFICA SE TEM ALGO
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        }
        /* FIM DA FUNÇÃO PARA ADICIONAR */


        /* FUNÇÃO EXCLUIR */
        function delete()
        {
            # PEGA O ID
            $id_user = $this->input->get('id_user');
            # CONDIÇÃO PASSANDO O ID DO BANNER QUE VAI SER DELETADO
            $this->db->where('id_user', $id_user);
            # DELETA
            $this->db->delete('tbl_users');

            # VERIFICA QUE DELETOU
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        }
        /* FIM DA FUNÇÃO EXCLUIR */


        /* FUNÇÃO EXCLUIR SELECIONADOS */
        function deleteSelected($ids)
        {
            # CONDIÇÃO QUE DELETA TODOS QUE CONTENHA O ID PASSADO
            $this->db->where_in('id_user', $ids);
            # DELETA
            $this->db->delete('tbl_users');

            # VERIFICA SE DELETOU
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        }
        /* FIM DA FUNÇÃ OEXCLUIR SELECIONADOS */


        /* FUNÇÃO GET BY ID */
        public function edit()
        {
            # PEGA O ID DO BANNER
            $id_user = $this->input->get('id_user');
            # CONDIÇÃO PARA EDITAR
            $this->db->where('id_user', $id_user);
            # PEGA TODOS OS DADOS BANNER
            $query = $this->db->get('tbl_users');

            # VERIFICA SE TEM ALGO
            if ($query->num_rows() > 0) {
                return $query->row();
            } else {
                return false;
            }
        }
        /* FIM DA FUNÇÃO GET BY ID */


        /* FUNÇÃO ATUALIZAR */
        public function update()
        {
            # PEGA O ID DO BANNER 
            $id_user = $this->input->post('id_user');

            # SETA A DATA E HORA DO BRASIL
            date_default_timezone_set('America/Recife');

            # VERIFICA SE TEM ALGUMA IMAGEM NOVA
            if (!empty($_FILES['image_user'])) {
                # SE TIVER ESSE É O ARRAY CERTO
                $field = array(
                    'image_user'       => $this->upload_image(),
                    'name_user'        => $this->input->post('name_user'),
                    'description_user' => $this->input->post('description_user'),
                    'email_user'       => $this->input->post('email_user'),
                    'password_user'    => $this->input->post('password_user'),
                    'updated'          => date('Y-m-d H:i:s'),
                    'status'           => $this->input->post('status')
                );
                # SE NÃO, É ESSE OUTRO ARRAY, SEM IMAGEM
            } else {
                $field = array(
                    'name_user'        => $this->input->post('name_user'),
                    'description_user' => $this->input->post('description_user'),
                    'email_user'       => $this->input->post('email_user'),
                    'password_user'    => $this->input->post('password_user'),
                    'updated'          => date('Y-m-d H:i:s'),
                    'status'           => $this->input->post('status')
                );
            }

            # CONDIÇÃO PARA ATUALIZAR
            $this->db->where('id_user', $id_user);
            # ATUALIZA NO BANCO
            $this->db->update('tbl_users', $field);

            # VERIFICA SE TEM ALGO 
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        }
        /* FIM DA FUNÇÃO ATUALIZAR */


        /* FUNÇÃO PARA ENVIAR IMAGEM */
        public function upload_image()
        {
            # SE EXIXTIR INPUT FILE COM ESSE NAME
            if (isset($_FILES["image_user"])) {
                # DEFINE O PATH ONDE O ARQUIVO SERÁ GRAVADO
                $path = "./assets/uploads/users/";
                # VERIFICA SE EXISTE
                # SE NÃO EXISTIR CRIAMOS COM PERMISSÃO DE LEITURA E ESCRITA
                if (!is_dir($path)) {
                    mkdir($path, 0777, $recursive = true);
                }
                # PEGA A EXTENÇÃO DA IMAGEM
                $extension = explode('.', $_FILES['image_user']['name']);
                # VERIFICA A EXTENÇÃO
                if ($extension[1] == "png" || $extension[1] == "jpg" || $extension[1] == "gif") {
                    # CRIA UM NOVE NOME PARA A IMAGEM
                    $new_name = uniqid(md5($_FILES['image_user']['name'])) . '.' . $extension[1];
                    # DESTINO DA IMAGEM
                    $destination = $path . $new_name;
                    # SETA O DESTINO DA IMAGEM
                    move_uploaded_file($_FILES['image_user']['tmp_name'], $destination);
                    # RETORNA O NOVO NOME DA IMAGEM
                    return $new_name;
                }
            }
        }
        /* FIM DA FUNÇÃO PARA ENVIAR A IMAGEM */
    }
