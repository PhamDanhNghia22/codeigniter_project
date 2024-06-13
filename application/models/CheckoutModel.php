<?php 
class CheckoutModel extends CI_Model{

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

    // public function Get_order(){
    //     return $query= $this->db->get('order')->result();


    // }

    public function Get_order(){
        return $query= $this->db->select('order_detail.*,order.order_code,order.ship_id,order.total')
        ->from('order_detail')
        ->join('order','order_detail.order_code = order.order_code')
        ->get()->result();
        
    }

    public function Get_shipping(){
        return $query = $this->db->where('statust_ship', 0)->order_by('id_shipping','desc')->get('shippings')->result();
    }


}
?>