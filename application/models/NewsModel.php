<?php defined('BASEPATH') OR exit('No direct script access allowed');

    class NewsModel extends CI_Model
    {

        /* FUNÇÃO CONSTRUTORA */
        function __construct()
        {
            parent::__construct();
        }
        /* FIM DA FUNÇÃO CONSTRTORA */


        /* FUNÇÃO PARA CHAMAR A TABELA DO BANCO DE DADOS */
        public function get()
        {
            return $this->db->get('tbl_news')->result();
        }
        /* FIM DA FUNÇÃO PARA CHAMAR A TABELA DO BANCO DE DADOS */


        /* FUNÇÃO PARA PEGAR COM LIMITE */
        public function getWithLimit()
        {
            $this->db->order_by('id_news', 'asc');
            $this->db->where('excluded', '0');
            $this->db->limit(6);
            $query = $this->db->get('tbl_news');
            if ($query->num_rows() > 0) {
                return $query->result();
            }
            return false;
        }
        /* FIM DA FUNÇÃO PARA PEGAR COM LIMITE */

        /* FUNÇÃO PARA PEGAR COM LIMITE */
        public function getAllWithLimit()
        {
            $this->db->order_by('id_news', 'asc');
            $this->db->where('excluded', '0');
            $this->db->where('status', '1');
            $this->db->limit(3);
            $query = $this->db->get('tbl_news');
            if ($query->num_rows() > 0) {
                return $query->result();
            }
            return false;
        }
        /* FIM DA FUNÇÃO PARA PEGAR COM LIMITE */


        /* FUNÇÃO PARA BUSCAR PELO ID */
        public function getThis($id)
        {
            $this->db->select('*');
            $this->db->from('tbl_news');
            $this->db->where('id_news', $id);
            $this->db->where('status', '1');
            $this->db->where('excluded', '0');
            $query = $this->db->get();

            if ($query->num_rows() > 0) {
                return $query->result();
            }
            return false;
        }
        /* FIM DA FUNÇÃO PARA BUSCAR PELO ID */


        /* FUNÇÃO PARA BUSCAR TODOS */
        public function getAll()
        {
            $this->db->order_by('id_news', 'asc');
            $this->db->where('excluded', '0');
            $query = $this->db->get('tbl_news');

            if ($query->num_rows() > 0) {
                return $query->result();
            }
            return false;
        }
        /* FIM DA FUNÇÃO PARA BUSCAR TODOS */
        
        
        /* FUNÇÃO PARA BUSCAR TODOS */
        public function getAllActives()
        {
            $this->db->order_by('id_news', 'asc');
            $this->db->where('excluded', '0');
            $this->db->where('status', '1');
            $query = $this->db->get('tbl_news');

            if ($query->num_rows() > 0) {
                return $query->result();
            }
            return false;
        }
        /* FIM DA FUNÇÃO PARA BUSCAR TODOS */


        /* FUNÇÃO PARA ADICIONAR */
        public function add()
        {
            date_default_timezone_set('America/Recife');
            $field = array(
                'title_news'     => $this->input->post('title_news'),
                'abstract_news'  => $this->input->post('abstract_news'),
                'text_news'      => $this->input->post('text_news'),
                'origin_news'    => $this->input->post('origin_news'),
                'id_author_news' => $this->input->post('id_author_news'),
                'image_news'     => $this->upload_image(),
                'updated'        => date('Y-m-d H:i:s'),
                'status'         => $this->input->post('status')
            );

            $this->db->insert('tbl_news', $field);

            if ($this->db->affected_rows() > 0) {
                return true;
            }
            return false;
        }
        /* FIM DA FUNÇÃO PARA ADICIONAR */


        /* FUNÇÃO PARA EXCLUIR */
        function delete()
        {
            $id_news = $this->input->get('id_news');
            date_default_timezone_set('America/Recife');
            $field = array(
                'updated'  => date('Y-m-d H:i:s'),
                'excluded' => '1'
            );

            $this->db->where('id_news', $id_news);
            $this->db->update('tbl_news', $field);

            if ($this->db->affected_rows() > 0) {
                return true;
            }
            return false;
        }
        /* FIM DA  FUNÇÃO PARA EXCLUIR */


        /* FUNÇÃO PARA EXCLUIR OS SELECIONADS */
        function deleteSelected($ids)
        {
            $id_news = $this->input->get('id_news');
            date_default_timezone_set('America/Recife');
            $field = array(
                'updated'  => date('Y-m-d H:i:s'),
                'excluded' => '1'
            );
            $this->db->where_in('id_news', $ids);
            $this->db->update('tbl_news', $field);

            if ($this->db->affected_rows() > 0) {
                return true;
            }
            return false;
        }
        /* FIM DA FUNÇÃO PARA EXCLUIR OS SELECIONADS */


        /* FUNÇÃO PARA BUSCAR POR ID */
        public function getById()
        {
            $id_news = $this->input->get('id_news');
            $this->db->where('id_news', $id_news);
            $query = $this->db->get('tbl_news');

            if ($query->num_rows() > 0) {
                return $query->row();
            }
            return false;
        }
        /* FIM DA FUNÇÃO PARA BUSCAR POR ID */


        /* FUNÇÃO PARA ATUALIZAR */
        public function update()
        {
            $id_news = $this->input->post('id_news');
            date_default_timezone_set('America/Recife');

            if (!empty($_FILES['image_news'])) {
                $field = array(
                    'title_news'     => $this->input->post('title_news'),
                    'abstract_news'  => $this->input->post('abstract_news'),
                    'text_news'      => $this->input->post('text_news'), /* */
                    'origin_news'    => $this->input->post('origin_news'),
                    'id_author_news' => $this->input->post('id_author_news'),
                    'image_news'     => $this->upload_image(),
                    'updated'        => date('Y-m-d H:i:s'),
                    'status'         => $this->input->post('status')
                );
            } else {
                $field = array(
                    'title_news'     => $this->input->post('title_news'),
                    'abstract_news'  => $this->input->post('abstract_news'),
                    'text_news'      => $this->input->post('text_news'),
                    'origin_news'    => $this->input->post('origin_news'),
                    'id_author_news' => $this->input->post('id_author_news'),
                    'updated'        => date('Y-m-d H:i:s'),
                    'status'         => $this->input->post('status')
                );
            }

            $this->db->where('id_news', $id_news);
            $this->db->update('tbl_news', $field);

            if ($this->db->affected_rows() > 0) {
                return true;
            }
            return false;
        }
        /* FIM DA FUNÇÃO PARA ATUALIZAR */


        /* FUNÇÃO PARA ENVIAR A IMAGEM */
        public function upload_image()
        {

            # SE EXIXTIR INPUT FILE COM ESSE NAME
            if (isset($_FILES["image_news"])) {

                # DEFINE O PATH ONDE O ARQUIVO SERÁ GRAVADO
                $path = "./assets/uploads/news/";

                # VERIFICA SE EXISTE
                # SE NÃO EXISTIR CRIAMOS COM PERMISSÃO DE LEITURA E ESCRITA
                if (!is_dir($path)) {
                    mkdir($path, 0777, $recursive = true);
                }
                # PEGA A EXTENÇÃO DA IMAGEM
                $extension = explode('.', $_FILES['image_news']['name']);

                # VERIFICA A EXTENÇÃO
                if ($extension[1] == "png" || $extension[1] == "jpg" || $extension[1] == "gif") {

                    # CRIA UM NOVE NOME PARA A IMAGEM
                    $new_name = uniqid(md5($_FILES['image_news']['name'])) . '.' . $extension[1];
                    # DESTINO DA IMAGEM
                    $destination = $path . $new_name;
                    # SETA O DESTINO DA IMAGEM
                    move_uploaded_file($_FILES['image_news']['tmp_name'], $destination);
                    # RETORNA O NOVO NOME DA IMAGEM
                    return $new_name;
                }
            }
        }
        /* FIM DA FUNÇÃO PARA ENVIAR A IMAGEM */
    }
