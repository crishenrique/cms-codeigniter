<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class TeamsModel extends CI_Model {

    /* FUNÇÃO CONSTRUTORA */
    function __construct() {
        parent::__construct();
    }
    /* FIM DA FUNÇÃO CONSTRTORA */

    /* FUNÇÃO PARA PEGAR TODOS */
    public function getAllActives() {
		$this->db->order_by('id_team', 'desc');
		$this->db->where('excluded', '0');
		$this->db->where('status', '1');
        $query = $this->db->get('tbl_teams');
        if ($query->num_rows() > 0) {
            return $query->result();
		} 
		return false;
    }
    /* FIM DA FUNÇÃO PARA PEGAR TODOS */
    
    /* FUNÇÃO PARA PEGAR TODOS */
    public function getAll() {
		$this->db->order_by('id_team', 'desc');
		$this->db->where('excluded', '0');
        $query = $this->db->get('tbl_teams');
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
            'name_team'     => $this->input->post('name_team'),
            'office_team'   => $this->input->post('office_team'),
			'link_team'     => $this->input->post('link_team'),
			'image_team'    => $this->upload_image(),
            'updated'       => date('Y-m-d H:i:s'),
            'status'        => $this->input->post('status')
        );
        $this->db->insert('tbl_teams', $field);
        if ($this->db->affected_rows() > 0) {
            return true;
		}
		return false;
    }
    /* FIM DA FUNÇÃO PARA ADICIONAR */

    /* FUNÇÃO PARA APAGAR */
    function delete() {
        $id_team = $this->input->get('id_team');
		date_default_timezone_set('America/Recife');
		$field = array(
			'updated'   => date('Y-m-d H:i:s'),
			'excluded'  => '1'
		);
		$this->db->where('id_team', $id_team);
		$this->db->update('tbl_teams', $field);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
    }
    /* FIM DA FUNÇÃO PARA APAGAR */

    /* FUNÇÃO PARA APAGAR OS teamS SELECIONADOS */
    function deleteSelected($ids){
        $id_team = $this->input->get('id_team');
		date_default_timezone_set('America/Recife');
		$field = array(
			'updated'   => date('Y-m-d H:i:s'),
			'excluded'  => '1'
		);
		$this->db->where_in('id_team', $ids);
		$this->db->update('tbl_teams', $field);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
    }
    /* FIM DA FUNÇÃO PARA APAGAR OS teamS SELECIONADOS  */

    /* FUNÇÃO PARA BUSCAR PELO ID */
    public function getById() {
        $id_team = $this->input->get('id_team');
        $this->db->where('id_team', $id_team);
        $query = $this->db->get('tbl_teams');
        if ($query->num_rows() > 0) {
            return $query->row();
        }
		return false;
    }
    /* FIM DA FUNÇÃO PARA BUSCAR PELO ID */

    /* FUNÇÃO PARA ATUALIZAR */
    public function update() {
        $id_team = $this->input->post('id_team');
        date_default_timezone_set('America/Recife');
        if (!empty($_FILES['image_team'])) {
			$field = array(
				'name_team'  => $this->input->post('name_team'),
				'office_team'   => $this->input->post('office_team'),
				'link_team'   => $this->input->post('link_team'),
				'image_team'  => $this->upload_image(),
				'updated'       => date('Y-m-d H:i:s'),
				'status'        => $this->input->post('status')
			);
        } else {
            $field = array(
                'name_team'     => $this->input->post('name_team'),
				'office_team'   => $this->input->post('office_team'),
				'link_team'     => $this->input->post('link_team'),
                'updated'       => date('Y-m-d H:i:s'),
                'status'        => $this->input->post('status')
            );
        }
        $this->db->where('id_team', $id_team);
        $this->db->update('tbl_teams', $field);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
		return false;
    }
    /* FIM DA FUÇÃO PARA ATUALIZAR */

    /* FUNÇÃO PARA ATUALIAR A IMGAGEM */
    public function upload_image() {
        # SE EXIXTIR INPUT FILE COM ESSE NAME
        if (isset($_FILES["image_team"])) {
            # DEFINE O PATH ONDE O ARQUIVO SERÁ GRAVADO
            $path = "./assets/uploads/teams/";
            # VERIFICA SE EXISTE
            # SE NÃO EXISTIR CRIAMOS COM PERMISSÃO DE LEITURA E ESCRITA
            if (!is_dir($path)) {
                mkdir($path, 0644, $recursive = true);
            }
            # PEGA A EXTENÇÃO DA IMAGEM
            $extension = explode('.', $_FILES['image_team']['name']);
            # VERIFICA A EXTENÇÃO
            if ($extension[1] == "png" || $extension[1] == "jpg" || $extension[1] == "gif") {
                # CRIA UM NOVE NOME PARA A IMAGEM
                $new_name = uniqid(md5($_FILES['image_team']['name'])) . '.' . $extension[1];
                # DESTINO DA IMAGEM
                $destination = $path . $new_name;
                # SETA O DESTINO DA IMAGEM
                move_uploaded_file($_FILES['image_team']['tmp_name'], $destination);
                # RETORNA O NOVO NOME DA IMAGEM
                return $new_name;
            }
        }
    }
    /* FUNÇÃO PARA ATUALIAR A IMGAGEM */
}
