<?php 

class HomeModel extends CI_Model{
    public function NewProd(){
        $this->db->select('sanpham.*, danhmuc.IDDM,danhmuc.TenDM');
        $this->db->from('sanpham');
        $this->db->join('danhmuc','sanpham.MaDM=danhmuc.IDDM');
        $query = $this->db->order_by('IDSP','desc')->limit(6)->get();
        return $query->result();
    }

    public function ProdDetail($id){
        $this->db->select('sanpham.*, danhmuc.IDDM,danhmuc.TenDM');
        $this->db->from('sanpham');
        $this->db->join('danhmuc','sanpham.MaDM=danhmuc.IDDM');
        $query = $this->db->where('IDSP',$id)->get();
        return $query->result();

    }
    public function GetCategories(){
        $query = $this->db->get('danhmuc');
        return $query->result();
    }
    public function GetCategory($iddm){
        $query = $this->db->where('IDDM',$iddm)->get('danhmuc');
        return $query->result();
    }

    public function GetProductByCategory($iddm){
        $this->db->select('sanpham.*,danhmuc.IDDM,danhmuc.TenDM');
        $this->db->from('sanpham');
        $this->db->join('danhmuc','danhmuc.IDDM=sanpham.MaDM');
        $this->db->where('sanpham.MaDM',$iddm);
        $query = $this->db->get();
        return $query->result();
    }

    public function Get_AllProduct(){
        $this->db->select('sanpham.*,danhmuc.IDDM,danhmuc.TenDM');
        $this->db->from('sanpham');
        $this->db->join('danhmuc','danhmuc.IDDM=sanpham.MaDM');
        $query = $this->db->order_by('IDSP','DESC')->get();
        return $query->result();
    }

}

?>