<?php defined('BASEPATH') OR exit('No direct script access allowed');

    class PhotosModel extends CI_Model {

		/* FUNÇÃO PARA CHAMAR A TABELA DO BANCO DE DADOS */
        public function get() {
            return $this->db->get('tbl_photos')->result();
		}
		/* FIM DA FUNÇÃO PARA CHAMAR A TABELA DO BANCO DE DADOS */

		/* FUNÇÃO PARA BUSCAR TODOS */
		public function getAll() {
			$this->db->order_by('id_photo', 'asc');
			$this->db->where('excluded', '0');
			$query = $this->db->get('tbl_photos');
			if ($query->num_rows() > 0) {
				return $query->result();
			} 
			return false;
		}
		/* FIM DA FUNÇÃO PARA BUSCAR TODOS */
		
		
		/* FUNÇÃO PARA BUSCAR TODOS */
		public function getAllActives() {
			$this->db->order_by('id_photo', 'asc');
			$this->db->where('excluded', '0');
			$this->db->where('status', '1');
			$query = $this->db->get('tbl_photos');
			if ($query->num_rows() > 0) {
				return $query->result();
			} 
			return false;
		}
		/* FIM DA FUNÇÃO PARA BUSCAR TODOS */
		

		/* FUNÇÃO PARA PEGAR COM LIMITE */
        public function getAllWithLimit()
        {
            $this->db->order_by('id_photo', 'asc');
            $this->db->where('excluded', '0');
            $this->db->where('status', '1');
            $this->db->limit(4);
            $query = $this->db->get('tbl_photos');
            if ($query->num_rows() > 0) {
                return $query->result();
            }
            return false;
        }
        /* FIM DA FUNÇÃO PARA PEGAR COM LIMITE */

		/* FUNÇÃO PARA ADICIONAR */
		public function add() {
			date_default_timezone_set('America/Recife');
			$field = array(
				'title_photo'		=> $this->input->post('title_photo'),
				'date_photo'		=> $this->input->post('date_photo'),
				'description_photo'	=> $this->input->post('description_photo'),
				'image_photo'		=> $this->upload_image(),
				'updated'			=> date('Y-m-d H:i:s'),
				'status'			=> $this->input->post('status')
			);
			$this->db->insert('tbl_photos', $field);
			if ($this->db->affected_rows() > 0) {
				return true;
			}
			return false;
		}
    	/* FIM DA FUNÇÃO PARA ADICIONAR */

		/* FUNÇÃO PARA EXCLUIR */
		function delete() {
			$id_photo = $this->input->get('id_photo');
			date_default_timezone_set('America/Recife');
			$field = array(
				'updated' => date('Y-m-d H:i:s'),
				'excluded'   => '1'
			);
			$this->db->where('id_photo', $id_photo);
			$this->db->update('tbl_photos', $field);
			if ($this->db->affected_rows() > 0) {
				return true;
			}
			return false;
		}
	    /* FIM DA  FUNÇÃO PARA EXCLUIR */

		/* FUNÇÃO PARA EXCLUIR OS SELECIONADS */
		function deleteSelected($ids){
			$id_banner = $this->input->get('id_photo');
			date_default_timezone_set('America/Recife');
			$field = array(
				'updated' => date('Y-m-d H:i:s'),
				'excluded'   => '1'
			);
			$this->db->where_in('id_photo', $ids);
			$this->db->update('tbl_photos', $field);
			if ($this->db->affected_rows() > 0) {
				return true;
			}
			return false;
		}
    	/* FIM DA FUNÇÃO PARA EXCLUIR OS SELECIONADS */

		/* FUNÇÃO PARA BUSCAR POR ID */
		public function getById() {
			$id_photo = $this->input->get('id_photo');
			$this->db->where('id_photo', $id_photo);
			$query = $this->db->get('tbl_photos');
			if ($query->num_rows() > 0) {
				return $query->row();
			}
			return false;
		}
    	/* FIM DA FUNÇÃO PARA BUSCAR POR ID */

		/* FUNÇÃO PARA ATUALIZAR */
		public function update() {
			$id_photo = $this->input->post('id_photo');
			date_default_timezone_set('America/Recife');
			if (!empty($_FILES['image_photo'])) {
				$field = array(
					'title_photo'		=> $this->input->post('title_photo'),
					'date_photo'		=> $this->input->post('date_photo'),
					'description_photo'	=> $this->input->post('description_photo'),
					'image_photo'		=> $this->upload_image(),
					'updated'			=> date('Y-m-d H:i:s'),
					'status'			=> $this->input->post('status')
				);
			} else {
				$field = array(
					'title_photo'		=> $this->input->post('title_photo'),
					'date_photo'		=> $this->input->post('date_photo'),
					'description_photo'	=> $this->input->post('description_photo'),
					'updated'			=> date('Y-m-d H:i:s'),
					'status'			=> $this->input->post('status')
				);
			}
			$this->db->where('id_photo', $id_photo);
			$this->db->update('tbl_photos', $field);
			if ($this->db->affected_rows() > 0) {
				return true;
			}
			return false;
		}
	    /* FIM DA FUNÇÃO PARA ATUALIZAR */

		/* FUNÇÃO PARA ENVIAR A IMAGEM AO SERVIDOR */
		public function upload_image() {
			
			# SE EXIXTIR INPUT FILE COM ESSE NAME
			if (isset($_FILES["image_photo"])) {
				
				# DEFINE O PATH ONDE O ARQUIVO SERÁ GRAVADO
				$path = "./assets/uploads/photos/";
				
				# VERIFICA SE EXISTE
				# SE NÃO EXISTIR CRIAMOS COM PERMISSÃO DE LEITURA E ESCRITA
				if (!is_dir($path)) {
					mkdir($path, 0644, $recursive = true);
				}
				# PEGA A EXTENÇÃO DA IMAGEM
				$extension = explode('.', $_FILES['image_photo']['name']);
				
				# VERIFICA A EXTENÇÃO
				if ($extension[1] == "png" || $extension[1] == "jpg" || $extension[1] == "gif") {
					
					# CRIA UM NOVE NOME PARA A IMAGEM
					$new_name = uniqid(md5($_FILES['image_photo']['name'])) . '.' . $extension[1];
					# DESTINO DA IMAGEM
					$destination = $path . $new_name;
					# SETA O DESTINO DA IMAGEM
					move_uploaded_file($_FILES['image_photo']['tmp_name'], $destination);
					# RETORNA O NOVO NOME DA IMAGEM
					return $new_name;
				}
			}
		}
		/* FIM DA FUNÇÃO PARA ENVIAR A IMAGEM AO SERVIDOR */
	}
?>
