<?php defined ('BASEPATH') OR exit('No direct script access allowed');

class GlobalModel extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->set_max_concat_str = "SET SESSION group_concat_max_len = 18446744073709551615;";
     
    }

    public function verifyUserLogin($username)
    {
        $param = $username;

        $mobile_check = is_numeric($param) ?  " WHERE MobileNumber is not NULL" : "";
        $where_user    = is_numeric($param) ?  " tbl.MobileNumber " : "tbl.username";

        $sql =$this->db
            ->query("SELECT 
                        * 
                        FROM 
                            (SELECT * FROM tblsystemuser {$mobile_check})  as tbl
                        WHERE 
                            {$where_user} = '{$username}' ");
        return $sql->row();
    }
    public function getHomeContent()
    {
        $this->load->driver('cache', ['adapter' => 'apc', 'backup' => 'file']);
        $cache_info = $this->cache->cache_info();
        $cache_name = "getHomeContent";
        if (!array_key_exists($cache_name, $cache_info)) {
            $sql = $this->db->query("SELECT * FROM tblhomecontent;");
            $this->cache->save($cache_name, $sql->result_array(), 1200);
        } 
        return $this->cache->get($cache_name);
    }
}