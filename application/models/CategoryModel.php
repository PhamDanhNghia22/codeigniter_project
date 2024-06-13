<?php 

class CategoryModel extends CI_Model{
    public function GetCategories(){
        $query = $this->db->get('danhmuc');
        return $query->result();
    }
    public function GetCategory($iddm){
        $query = $this->db->where('IDDM',$iddm)->get('danhmuc');
        return $query->result();
    }

    public function insertCategory($data){
        return $this->db->insert('danhmuc',$data);
    }

    public function UpdateCategory($id,$data){
        return $this->db->update('danhmuc',$data,['IDDM'=>$id]);
    }

    public function DeleteCategory($id){
        return $this->db->delete('danhmuc',['IDDM'=>$id]);
    }


}