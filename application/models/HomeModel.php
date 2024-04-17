<?php defined ('BASEPATH') OR exit('No direct script access allowed');

class HomeModel extends CI_Model{

    public function __construct()
    {
        // parent::__construct();
        // $this->set_max_concat_str = "SET SESSION group_concat_max_len = 18446744073709551615;";

        
    }

    public function getDepartment()
    {

        // die('hello');
        $sql = $this->db->query( "

            SELECT 
                    *
            FROM 
                tbl_home
        ");

        return $sql->result_array();
    }
    public function headerID($header){
        $sql = $this->db->query( "

        SELECT 
            nav
        FROM 
            tbl_home
        where
        header ='{$header}'
    ")->row()->nav;
    return $sql;

    }

    public function getNav($NavId){
       $id =implode(',', explode(',',$NavId));


    $sql = $this->db->query( "
                    SELECT 
                    id,
                        title
                    FROM 
                        tbl_nav
                    where 
                    id in({$id})
                    ")->result_array();
    return $sql;

    }
}