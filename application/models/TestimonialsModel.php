<?php defined('BASEPATH') or exit('No direct script access allowed');

class TestimonialsModel extends CI_Model
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
        $this->db->order_by('id_testimonial', 'desc');
        $this->db->where('excluded', '0');
        $this->db->where('status', '1');
        $query = $this->db->get('tbl_testimonials');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return false;
    }
    /* FIM DA FUNÇÃO PARA PEGAR TODOS - PUBLIC */


    /* FUNÇÃO PARA PEGAR TODOS */
    public function getAll()
    {
        $this->db->order_by('id_testimonial', 'desc');
        $this->db->where('excluded', '0');
        $query = $this->db->get('tbl_testimonials');

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
            'name_testimonial'  => $this->input->post('name_testimonial'),
            'text_testimonial'  => $this->input->post('text_testimonial'),
            'city_testimonial'  => $this->input->post('city_testimonial'),
            'image_testimonial' => $this->upload_image(),
            'updated'           => date('Y-m-d H:i:s'),
            'status'            => $this->input->post('status')
        );

        $this->db->insert('tbl_testimonials', $field);

        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }
    /* FIM DA FUNÇÃO PARA ADICIONAR */


    /* FUNÇÃO PARA APAGAR */
    function delete()
    {
        $id_testimonial = $this->input->get('id_testimonial');

        date_default_timezone_set('America/Recife');

        $field = array(
            'updated'  => date('Y-m-d H:i:s'),
            'excluded' => '1'
        );

        $this->db->where('id_testimonial', $id_testimonial);
        $this->db->update('tbl_testimonials', $field);

        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }
    /* FIM DA FUNÇÃO PARA APAGAR */


    /* FUNÇÃO PARA APAGAR OS SELECIONADOS */
    function deleteSelected($ids)
    {
        $id_testimonial = $this->input->get('id_testimonial');

        date_default_timezone_set('America/Recife');

        $field = array(
            'updated'  => date('Y-m-d H:i:s'),
            'excluded' => '1'
        );

        $this->db->where_in('id_testimonial', $ids);
        $this->db->update('tbl_testimonials', $field);

        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }
    /* FIM DA FUNÇÃO PARA APAGAR OS SELECIONADOS  */


    /* FUNÇÃO PARA BUSCAR PELO ID */
    public function getById()
    {
        $id_testimonial = $this->input->get('id_testimonial');
        $this->db->where('id_testimonial', $id_testimonial);
        $query = $this->db->get('tbl_testimonials');

        if ($query->num_rows() > 0) {
            return $query->row();
        }
        return false;
    }
    /* FIM DA FUNÇÃO PARA BUSCAR PELO ID */


    /* FUNÇÃO PARA ATUALIZAR */
    public function update()
    {
        $id_testimonial = $this->input->post('id_testimonial');

        date_default_timezone_set('America/Recife');

        if (!empty($_FILES['image_testimonial'])) {
            $field = array(
                'name_testimonial'  => $this->input->post('name_testimonial'),
                'text_testimonial'  => $this->input->post('text_testimonial'),
                'city_testimonial'  => $this->input->post('city_testimonial'),
                'image_testimonial' => $this->upload_image(),
                'updated'           => date('Y-m-d H:i:s'),
                'status'            => $this->input->post('status')
            );
        } else {
            $field = array(
                'name_testimonial' => $this->input->post('name_testimonial'),
                'text_testimonial' => $this->input->post('text_testimonial'),
                'city_testimonial' => $this->input->post('city_testimonial'),
                'updated'          => date('Y-m-d H:i:s'),
                'status'           => $this->input->post('status')
            );
        }

        $this->db->where('id_testimonial', $id_testimonial);
        $this->db->update('tbl_testimonials', $field);

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
        if (isset($_FILES["image_testimonial"])) {
            # DEFINE O PATH ONDE O ARQUIVO SERÁ GRAVADO
            $path = "./assets/uploads/testimonials/";
            # VERIFICA SE EXISTE
            # SE NÃO EXISTIR CRIAMOS COM PERMISSÃO DE LEITURA E ESCRITA
            if (!is_dir($path)) {
                mkdir($path, 0777, $recursive = true);
            }
            # PEGA A EXTENÇÃO DA IMAGEM
            $extension = explode('.', $_FILES['image_testimonial']['name']);
            # VERIFICA A EXTENÇÃO
            if ($extension[1] == "png" || $extension[1] == "jpg" || $extension[1] == "gif") {
                # CRIA UM NOVE NOME PARA A IMAGEM
                $new_name = uniqid(md5($_FILES['image_testimonial']['name'])) . '.' . $extension[1];
                # DESTINO DA IMAGEM
                $destination = $path . $new_name;
                # SETA O DESTINO DA IMAGEM
                move_uploaded_file($_FILES['image_testimonial']['tmp_name'], $destination);
                # RETORNA O NOVO NOME DA IMAGEM
                return $new_name;
            }
        }
    }
    /* FUNÇÃO PARA ATUALIAR A IMAGEM */
}
