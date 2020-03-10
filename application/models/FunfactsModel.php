<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class FunfactsModel extends CI_Model {

    /* FUNÇÃO CONSTRUTORA */
    function __construct() {
        parent::__construct();
    }
    /* FIM DA FUNÇÃO CONSTRTORA */

    /* FUNÇÃO PARA PEGAR TODOS - PUBLIC */
    public function getAllActives()
    {
        $this->db->order_by('id_funfact', 'desc');
        $this->db->where('excluded', '0');
        $this->db->where('status', '1');
        $query = $this->db->get('tbl_funfacts');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return false;
    }
    /* FIM DA FUNÇÃO PARA PEGAR TODOS - PUBLIC */

    /* FUNÇÃO PARA PEGAR TODOS */
    public function getAll() {
		$this->db->order_by('id_funfact', 'desc');
		$this->db->where('excluded', '0');
        $query = $this->db->get('tbl_funfacts');
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
            'title_funfact'  => $this->input->post('title_funfact'),
            'value_funfact'   => $this->input->post('value_funfact'),
            'updated'       => date('Y-m-d H:i:s'),
            'status'        => $this->input->post('status')
        );
        $this->db->insert('tbl_funfacts', $field);
        if ($this->db->affected_rows() > 0) {
            return true;
		}
		return false;
    }
    /* FIM DA FUNÇÃO PARA ADICIONAR */

    /* FUNÇÃO PARA APAGAR */
    function delete() {
        $id_funfact = $this->input->get('id_funfact');
		date_default_timezone_set('America/Recife');
		$field = array(
			'updated'   => date('Y-m-d H:i:s'),
			'excluded'  => '1'
		);
		$this->db->where('id_funfact', $id_funfact);
		$this->db->update('tbl_funfacts', $field);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
    }
    /* FIM DA FUNÇÃO PARA APAGAR */

    /* FUNÇÃO PARA APAGAR OS funfactS SELECIONADOS */
    function deleteSelected($ids){
        $id_funfact = $this->input->get('id_funfact');
		date_default_timezone_set('America/Recife');
		$field = array(
			'updated'   => date('Y-m-d H:i:s'),
			'excluded'  => '1'
		);
		$this->db->where_in('id_funfact', $ids);
		$this->db->update('tbl_funfacts', $field);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
    }
    /* FIM DA FUNÇÃO PARA APAGAR OS funfactS SELECIONADOS  */

    /* FUNÇÃO PARA BUSCAR PELO ID */
    public function getById() {
        $id_funfact = $this->input->get('id_funfact');
        $this->db->where('id_funfact', $id_funfact);
        $query = $this->db->get('tbl_funfacts');
        if ($query->num_rows() > 0) {
            return $query->row();
        }
		return false;
    }
    /* FIM DA FUNÇÃO PARA BUSCAR PELO ID */

    /* FUNÇÃO PARA ATUALIZAR */
    public function update() {
        $id_funfact = $this->input->post('id_funfact');
        date_default_timezone_set('America/Recife');
        $field = array(
            'title_funfact'  => $this->input->post('title_funfact'),
            'value_funfact'   => $this->input->post('value_funfact'),
            'updated'       => date('Y-m-d H:i:s'),
            'status'        => $this->input->post('status')
        );

        $this->db->where('id_funfact', $id_funfact);
        $this->db->update('tbl_funfacts', $field);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
		return false;
    }
    /* FIM DA FUÇÃO PARA ATUALIZAR */

    /* FUNÇÃO PARA ATUALIAR A IMGAGEM */
    public function upload_image() {
        # SE EXIXTIR INPUT FILE COM ESSE NAME
        if (isset($_FILES["image_funfact"])) {
            # DEFINE O PATH ONDE O ARQUIVO SERÁ GRAVADO
            $path = "./assets/uploads/funfacts/";
            # VERIFICA SE EXISTE
            # SE NÃO EXISTIR CRIAMOS COM PERMISSÃO DE LEITURA E ESCRITA
            if (!is_dir($path)) {
                mkdir($path, 0644, $recursive = true);
            }
            # PEGA A EXTENÇÃO DA IMAGEM
            $extension = explode('.', $_FILES['image_funfact']['name']);
            # VERIFICA A EXTENÇÃO
            if ($extension[1] == "png" || $extension[1] == "jpg" || $extension[1] == "gif") {
                # CRIA UM NOVE NOME PARA A IMAGEM
                $new_name = uniqid(md5($_FILES['image_funfact']['name'])) . '.' . $extension[1];
                # DESTINO DA IMAGEM
                $destination = $path . $new_name;
                # SETA O DESTINO DA IMAGEM
                move_uploaded_file($_FILES['image_funfact']['tmp_name'], $destination);
                # RETORNA O NOVO NOME DA IMAGEM
                return $new_name;
            }
        }
    }
    /* FUNÇÃO PARA ATUALIAR A IMGAGEM */
}
