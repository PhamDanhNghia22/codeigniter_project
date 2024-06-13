<?php 
class OrderModel extends CI_Model{

    public function NewShipping($data_shipping){
        $this->db->insert('shippings',$data_shipping);
        return $ship_id = $this->db->insert_id();

    }
    public function insert_order($data_order){
        return $this->db->insert('order',$data_order);
    }
    public function insert_DetailOrder($data_DetailOrder){
        return $this->db->insert('order_detail',$data_DetailOrder);
    }

    public function Get_order(){
        $this->db->select('shippings.*,order.order_code,order.total,order.ship_id,order_detail.id_sp,order_detail.ten_sp,order_detail.GiaSP,order_detail.HinhAnhSP,order_detail.SoLuongSP');
        $this->db->from('shippings');
        $this->db->join('order','shippings.id_shipping=order.ship_id','left');
        $this->db->join('order_detail','order_detail.order_code=order.order_code');
        $query= $this->db->get();
        return $query->result();


    }
    public function Get_OneOrder($id){
        return $query= $this->db->where('ship_id',$id)->get('order')->result();
    }

    public function Get_OrderDetail($id){
        $query= $this->db->select('order_detail.*,order.order_code,order.total,order.ship_id')
        ->from('order_detail')
        ->join('order','order_detail.order_code=order.order_code')
        ->where('order.ship_id',$id)->get();
        
        return $query->result();

    }

    public function Get_shipping(){
        return $query = $this->db->get('shippings')->result();
    }


}
?>