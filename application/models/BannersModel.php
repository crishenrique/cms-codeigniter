<?php defined('BASEPATH') OR exit('No direct script access allowed');

    class BannersModel extends CI_Model
    {

        /* FUNÇÃO CONSTRUTORA */
        function __construct()
        {
            parent::__construct();
        }
        /* FIM DA FUNÇÃO CONSTRTORA */


        /* FUNÇÃO PARA PEGAR TODOS - PUBLIC */
    public function getAllActives()
    {
        $this->db->order_by('id_banner', 'desc');
        $this->db->where('excluded', '0');
        $this->db->where('status', '1');
        $query = $this->db->get('tbl_banners');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return false;
    }
    /* FIM DA FUNÇÃO PARA PEGAR TODOS - PUBLIC */


        /* FUNÇÃO PARA PEGAR TODOS */
        public function getAll()
        {
            $this->db->order_by('id_banner', 'desc');
            $this->db->where('excluded', '0');
            $query = $this->db->get('tbl_banners');

            if ($query->num_rows() > 0) {
                return $query->result();
            }
            return false;
        }
        /* FIM DA FUNÇÃO PARA PEGAR TODOS */


        /* FUNÇÃO PARA ADICIONAR */
        public function add()
        {
            date_default_timezone_set('America/Recife');
            $field = array(
                'title_banner' => $this->input->post('title_banner'),
                'text_banner'  => $this->input->post('text_banner'),
                'link_banner'  => $this->input->post('link_banner'),
                'image_banner' => $this->upload_image(),
                'updated'      => date('Y-m-d H:i:s'),
                'status'       => $this->input->post('status')
            );

            $this->db->insert('tbl_banners', $field);

            if ($this->db->affected_rows() > 0) {
                return true;
            }
            return false;
        }
        /* FIM DA FUNÇÃO PARA ADICIONAR */


        /* FUNÇÃO PARA APAGAR */
        function delete()
        {
            $id_banner = $this->input->get('id_banner');
            date_default_timezone_set('America/Recife');

            $field = array(
                'updated'  => date('Y-m-d H:i:s'),
                'excluded' => '1'
            );

            $this->db->where('id_banner', $id_banner);
            $this->db->update('tbl_banners', $field);

            if ($this->db->affected_rows() > 0) {
                return true;
            }
            return false;
        }
        /* FIM DA FUNÇÃO PARA APAGAR */


        /* FUNÇÃO PARA APAGAR OS SELECIONADOS */
        function deleteSelected($ids)
        {
            $id_banner = $this->input->get('id_banner');
            date_default_timezone_set('America/Recife');
            $field = array(
                'updated'  => date('Y-m-d H:i:s'),
                'excluded' => '1'
            );

            $this->db->where_in('id_banner', $ids);
            $this->db->update('tbl_banners', $field);

            if ($this->db->affected_rows() > 0) {
                return true;
            }
            return false;
        }
        /* FIM DA FUNÇÃO PARA APAGAR OS SELECIONADOS  */


        /* FUNÇÃO PARA BUSCAR PELO ID */
        public function getById()
        {
            $id_banner = $this->input->get('id_banner');
            $this->db->where('id_banner', $id_banner);
            $query = $this->db->get('tbl_banners');

            if ($query->num_rows() > 0) {
                return $query->row();
            }
            return false;
        }
        /* FIM DA FUNÇÃO PARA BUSCAR PELO ID */


        /* FUNÇÃO PARA ATUALIZAR */
        public function update()
        {
            $id_banner = $this->input->post('id_banner');
            date_default_timezone_set('America/Recife');
            if (!empty($_FILES['image_banner'])) {
                $field = array(
                    'title_banner' => $this->input->post('title_banner'),
                    'text_banner'  => $this->input->post('text_banner'),
                    'link_banner'  => $this->input->post('link_banner'),
                    'image_banner' => $this->upload_image(),
                    'updated'      => date('Y-m-d H:i:s'),
                    'status'       => $this->input->post('status')
                );
            } else {
                $field = array(
                    'title_banner' => $this->input->post('title_banner'),
                    'text_banner'  => $this->input->post('text_banner'),
                    'link_banner'  => $this->input->post('link_banner'),
                    'updated'      => date('Y-m-d H:i:s'),
                    'status'       => $this->input->post('status')
                );
            }

            $this->db->where('id_banner', $id_banner);
            $this->db->update('tbl_banners', $field);

            if ($this->db->affected_rows() > 0) {
                return true;
            }
            return false;
        }
        /* FIM DA FUNÇÃO PARA ATUALIZAR */


        /* FUNÇÃO PARA ATUALIAR A IMAGEM */
        public function upload_image()
        {
            # SE EXIXTIR INPUT FILE COM ESSE NAME
            if (isset($_FILES["image_banner"])) {
                # DEFINE O PATH ONDE O ARQUIVO SERÁ GRAVADO
                $path = "./assets/uploads/banners/";
                # VERIFICA SE EXISTE
                # SE NÃO EXISTIR CRIAMOS COM PERMISSÃO DE LEITURA E ESCRITA
                if (!is_dir($path)) {
                    mkdir($path, 0777, $recursive = true);
                }
                # PEGA A EXTENÇÃO DA IMAGEM
                $extension = explode('.', $_FILES['image_banner']['name']);
                # VERIFICA A EXTENÇÃO
                if ($extension[1] == "png" || $extension[1] == "jpg" || $extension[1] == "gif") {
                    # CRIA UM NOVE NOME PARA A IMAGEM
                    $new_name = uniqid(md5($_FILES['image_banner']['name'])) . '.' . $extension[1];
                    # DESTINO DA IMAGEM
                    $destination = $path . $new_name;
                    # SETA O DESTINO DA IMAGEM
                    move_uploaded_file($_FILES['image_banner']['tmp_name'], $destination);
                    # RETORNA O NOVO NOME DA IMAGEM
                    return $new_name;
                }
            }
        }
        /* FIM DA FUNÇÃO PARA ATUALIAR A IMAGEM */
    }
