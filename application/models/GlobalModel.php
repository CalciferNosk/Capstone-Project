<?php defined ('BASEPATH') OR exit('No direct script access allowed');

class GlobalModel extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->set_max_concat_str = "SET SESSION group_concat_max_len = 18446744073709551615;";

        
    }

    public function verifyUserLogin($username)
    {

        $sql = $this->db->query("SELECT * FROM tblsystemuser WHERE username = '{$username}'");

        return $sql->row();
    }
    public function getHomeContent()
    {
        $sql = $this->db->query("SELECT * FROM tblhomecontent;");
        return $sql->result_array();
    }
}