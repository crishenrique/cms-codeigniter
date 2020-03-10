<?php defined('BASEPATH') OR exit('No direct script access allowed');

    class CompaniesModel extends CI_Model
    {

        /* FUNÇÃO CONSTRUTORA */
        function __construct()
        {
            parent::__construct();
        }
        /* FIM DA FUNÇÃO CONSTRUTORA */

        /* FUNÇÃO PARA PEGAR TODOS - PUBLIC */
    // public function getAllActives()
    // {
    //     $this->db->order_by('id_company', 'desc');
    //     $this->db->where('excluded', '0');
    //     $this->db->where('status', '1');
    //     $query = $this->db->get('tbl_companies');
    //     if ($query->num_rows() > 0) {
    //         return $query->result();
    //     }
    //     return false;
    // }
    /* FIM DA FUNÇÃO PARA PEGAR TODOS - PUBLIC */


        /* FUNÇÃO PARA PEGAR TODOS */
        public function getAll()
        {
            $this->db->order_by('id_company', 'desc');
            $this->db->where('excluded', '0');
            $query = $this->db->get('tbl_companies');

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
                'street_company'       => $this->input->post('street_company'),
                'number_company'       => $this->input->post('number_company'),
                'complement_company'   => $this->input->post('complement_company'),
                'neighborhood_company' => $this->input->post('neighborhood_company'),
                'cep_company'          => $this->input->post('cep_company'),
                'city_company'         => $this->input->post('city_company'),
                'state_company'        => $this->input->post('state_company'),
                'telephone_company'    => $this->input->post('telephone_company'),
                'mobile_company'       => $this->input->post('mobile_company'),
                'email_company'        => $this->input->post('email_company'),
                'whatsapp_company'     => $this->input->post('whatsapp_company'),
                'facebook_company'     => $this->input->post('facebook_company'),
                'instagram_company'    => $this->input->post('instagram_company'),
                'registered'           => date('Y-m-d H:i:s'),
                'updated'              => date('Y-m-d H:i:s'),
                'status'               => $this->input->post('status')
            );

            $this->db->insert('tbl_companies', $field);

            if ($this->db->affected_rows() > 0) {
                return true;
            }
            return false;
        }
        /* FIM DA FUNÇÃO PARA ADICIONAR */


        /* FUNÇÃO PARA EDITAR */
        public function edit()
        {
            $id_company = $this->input->get('id_company');
            $this->db->where('id_company', $id_company);
            $query = $this->db->get('tbl_companies');

            if ($query->num_rows() > 0) {
                return $query->row();
            }
            return false;
        }
        /* FIM DA FUNÇÃO PARA EDITAR */


        /* FUNÇÃO PARA ATUALIZAR */
        public function update()
        {
            $id_company = $this->input->post('id_company');
            date_default_timezone_set('America/Recife');

            $field = array(
                'street_company'       => $this->input->post('street_company'),
                'number_company'       => $this->input->post('number_company'),
                'complement_company'   => $this->input->post('complement_company'),
                'neighborhood_company' => $this->input->post('neighborhood_company'),
                'cep_company'          => $this->input->post('cep_company'),
                'city_company'         => $this->input->post('city_company'),
                'state_company'        => $this->input->post('state_company'),
                'telephone_company'    => $this->input->post('telephone_company'),
                'mobile_company'       => $this->input->post('mobile_company'),
                'email_company'        => $this->input->post('email_company'),
                'whatsapp_company'     => $this->input->post('whatsapp_company'),
                'facebook_company'     => $this->input->post('facebook_company'),
                'instagram_company'    => $this->input->post('instagram_company'),
                'registered'           => date('Y-m-d H:i:s'),
                'updated'              => date('Y-m-d H:i:s'),
                'status'               => $this->input->post('status')
            );

            $this->db->where('id_company', $id_company);
            $this->db->update('tbl_companies', $field);

            if ($this->db->affected_rows() > 0) {
                return true;
            }
            return false;
        }
        /* FIM DA FUNÇÃO PARA ATUALIZAR */
    }

