<?php defined ('BASEPATH') OR exit('No direct script access allowed');

class GlobalModel extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->set_max_concat_str = "SET SESSION group_concat_max_len = 18446744073709551615;";
     
    }

    public function verifyUserLogin($login)
    {
        $mobileCheck = is_numeric($login) ? 'WHERE MobileNumber IS NOT NULL' : '';
        $whereClause = is_numeric($login) ? 'MobileNumber' : 'username';

        $sql = $this->db
            ->where($whereClause, $login)
            ->get("(SELECT * FROM tblsystemuser $mobileCheck) AS tbl");

        return $sql->row();
    }

    public function getHomeContent()
    {
        $this->load->driver('cache', ['adapter' => 'apc', 'backup' => 'file']);
        $key = 'getHomeContent';
        if (false === ($content = $this->cache->get($key))) {
            if (false === ($content = $this->db->query("SELECT * FROM tblhomecontent ORDER BY id DESC")->result_array())) {
                return [];
            }
            $this->cache->save($key, $content, 1200);
        }
        return $content;
    }


}