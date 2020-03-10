<?php defined('BASEPATH') OR exit('No direct script access allowed');

    class LogsModel extends CI_Model
    {

        /* FUNÇÃO CONSTRUTORA */
        function __construct()
        {
            parent::__construct();
        }

        /* MÉTODO DE GET */
        public function get()
        {
            # SELECIONA OS DADOS DO DB
            # CRIA UMA VAR QUE RECEBE OS DADOS DO BANCO
            return $this->db->get('tbl_admin_logs')->result();
        }

        /* FUNÇÃO GET ALL */
        public function getAll()
        {
            # ORDENA
            $this->db->order_by('id_admin_log', 'desc');
            # PEGA
            $query = $this->db->get('tbl_admin_logs');
            # VERIFICA SE TEM ALGO
            if ($query->num_rows() > 0) {
                return $query->result();
            } else {
                return false;
            }
        }
        /* FIM DA FUNÇÃO GET ALL */

    }
