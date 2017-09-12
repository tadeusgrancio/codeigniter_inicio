<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresa_pessoa_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    public function inserir($campos) {
        $count = $this->db->insert('empresas_pessoas',$campos);
        
        if ($count>0) return true; else return false;
    }
}