<?php 

class ProductModel extends CI_Model{
    public function Get_AllProduct(){
        $query = $this->db->select('sanpham.*,danhmuc.IDDM ,danhmuc.TenDM')
        ->from('sanpham')
        ->join('danhmuc','danhmuc.IDDM=sanpham.MaDM')
        ->order_by('IDSP','desc')->get();
        return $query->result();
    }
    public function ProdDetail($id){
        $query = $this->db->where('IDSP',$id)->get('sanpham');
        return $query->result();
    }

    public function InsertProduct($data){
        return $this->db->insert('sanpham',$data);
    }

    public function UpdateProduct($id,$data){
        return $this->db->update('sanpham',$data,['IDSP'=>$id]);
    }

    public function DeleteProduct($id){
        return $this->db->delete('sanpham',['IDSP'=>$id]);
    }
}

?>