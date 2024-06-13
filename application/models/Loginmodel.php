<?php 

class Loginmodel extends CI_Model{
    public function checkLogin($email,$password){
        $query = $this->db->where('email',$email)->where('password',$password)->get('taikhoan');
        return $query->result();

    }

    public function insert_user($data){
        return $this->db->insert('taikhoan',$data);
    }

}

?>