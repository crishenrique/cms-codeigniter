<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AboutModel extends CI_Model {

    /* FUNÇÃO CONSTRUTORA */
    function __construct() {
        parent::__construct();
    }
    /* FIM DA FUNÇÃO CONSTRTORA */

    /* FUNÇÃO PARA PEGAR TODOS */
    public function getAll() {
		$this->db->order_by('id_about', 'desc');
		$this->db->where('excluded', '0');
        $query = $this->db->get('tbl_abouts');
        if ($query->num_rows() > 0) {
            return $query->result();
		} 
		return false;
    }
    /* FIM DA FUNÇÃO PARA PEGAR TODOS */

    /* FUNÇÃO PARA PEGAR TODOS */
    public function getAllActives() {
		$this->db->order_by('id_about', 'desc');
		$this->db->where('excluded', '0');
		$this->db->where('status', '1');
        $query = $this->db->get('tbl_abouts');
        if ($query->num_rows() > 0) {
            return $query->result();
		} 
		return false;
    }
    /* FIM DA FUNÇÃO PARA PEGAR TODOS */

    /* FUNÇÃO PARA ADICIONAR */
    public function add() {
        date_default_timezone_set('America/Recife');
        $field = array(
            'title_about'  => $this->input->post('title_about'),
            'text_about'   => $this->input->post('text_about'),
			'image_about'  => $this->upload_image(),
            'updated'       => date('Y-m-d H:i:s'),
            'status'        => $this->input->post('status')
        );
        $this->db->insert('tbl_abouts', $field);
        if ($this->db->affected_rows() > 0) {
            return true;
		}
		return false;
    }
    /* FIM DA FUNÇÃO PARA ADICIONAR */

    /* FUNÇÃO PARA APAGAR */
    function delete() {
        $id_about = $this->input->get('id_about');
		date_default_timezone_set('America/Recife');
		$field = array(
			'updated'   => date('Y-m-d H:i:s'),
			'excluded'  => '1'
		);
		$this->db->where('id_about', $id_about);
		$this->db->update('tbl_abouts', $field);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
    }
    /* FIM DA FUNÇÃO PARA APAGAR */

    /* FUNÇÃO PARA APAGAR OS SELECIONADOS */
    function deleteSelected($ids){
        $id_about = $this->input->get('id_about');
		date_default_timezone_set('America/Recife');
		$field = array(
			'updated'   => date('Y-m-d H:i:s'),
			'excluded'  => '1'
		);
		$this->db->where_in('id_about', $ids);
		$this->db->update('tbl_abouts', $field);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
    }
    /* FIM DA FUNÇÃO PARA APAGAR OS SELECIONADOS  */

    /* FUNÇÃO PARA BUSCAR PELO ID */
    public function getById() {
        $id_about = $this->input->get('id_about');
        $this->db->where('id_about', $id_about);
        $query = $this->db->get('tbl_abouts');
        if ($query->num_rows() > 0) {
            return $query->row();
        }
		return false;
    }
    /* FIM DA FUNÇÃO PARA BUSCAR PELO ID */

    /* FUNÇÃO PARA ATUALIZAR */
    public function update() {
        $id_about = $this->input->post('id_about');
        date_default_timezone_set('America/Recife');
        if (!empty($_FILES['image_about'])) {
			$field = array(
				'title_about'  => $this->input->post('title_about'),
				'text_about'   => $this->input->post('text_about'),
				'image_about'  => $this->upload_image(),
				'updated'       => date('Y-m-d H:i:s'),
				'status'        => $this->input->post('status')
			);
        } else {
            $field = array(
                'title_about'  => $this->input->post('title_about'),
				'text_about'   => $this->input->post('text_about'),
                'updated'       => date('Y-m-d H:i:s'),
                'status'        => $this->input->post('status')
            );
        }
        $this->db->where('id_about', $id_about);
        $this->db->update('tbl_abouts', $field);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
		return false;
    }
    /* FIM DA FUÇÃO PARA ATUALIZAR */

    /* FUNÇÃO PARA ATUALIAR A IMGAGEM */
    public function upload_image() {
        # SE EXIXTIR INPUT FILE COM ESSE NAME
        if (isset($_FILES["image_about"])) {
            # DEFINE O PATH ONDE O ARQUIVO SERÁ GRAVADO
            $path = "./assets/uploads/about/";
            # VERIFICA SE EXISTE
            # SE NÃO EXISTIR CRIAMOS COM PERMISSÃO DE LEITURA E ESCRITA
            if (!is_dir($path)) {
                mkdir($path, 0644, $recursive = true);
            }
            # PEGA A EXTENÇÃO DA IMAGEM
            $extension = explode('.', $_FILES['image_about']['name']);
            # VERIFICA A EXTENÇÃO
            if ($extension[1] == "png" || $extension[1] == "jpg" || $extension[1] == "gif") {
                # CRIA UM NOVE NOME PARA A IMAGEM
                $new_name = uniqid(md5($_FILES['image_about']['name'])) . '.' . $extension[1];
                # DESTINO DA IMAGEM
                $destination = $path . $new_name;
                # SETA O DESTINO DA IMAGEM
                move_uploaded_file($_FILES['image_about']['tmp_name'], $destination);
                # RETORNA O NOVO NOME DA IMAGEM
                return $new_name;
            }
        }
    }
    /* FUNÇÃO PARA ATUALIAR A IMGAGEM */
}
