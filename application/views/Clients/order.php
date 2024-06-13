<?php 
if($this->session->has_userdata('LoginUser')){

?>


<div class="properties section">
    
    <div class="container">
        <div class="content-checkout">
            
            <?php 
            if($this->session->flashdata('success')){
            ?>
            
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?=$this->session->flashdata('success')?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php }else if($this->session->flashdata('error')){ ?>
                <div class="alert alert-danger"><?=$this->session->flashdata('error')?></div>
            <?php } ?>
            <!--  -->
            <div class="content_order">
                <?php
                    $trangthai = array(0=>'Đang chờ xác nhận' ,1=>'Đang trên đường giao',2=>"Đã lấy hàng" ,3=>'Đã hủy');    
                    foreach($MyShipping as $ship){
                        if($ship->username == $this->session->userdata('LoginUser')['username']){
                ?>
                <div class="row my-4 border">
                    <div class="info_order col-lg-6 p-3  my-3 ">
                        <h3>Thông tin đơn hàng</h3>
                        <div class="p-2 ">
                            <p><i class="bi bi-person-fill"></i> Họ tên người đặt: <?=$ship->username?></p>
                            <p><i class="bi bi-telephone-fill"></i> Số điện thoại: <?=$ship->telphone?></p>
                            
                            <?php 
                                foreach($trangthai as $key=>$val){
                                    if($key == $ship->statust_ship){
                            ?>
                            <p><i class="bi bi-truck"></i> Trạng thái giao hàng: <?=$val?></p>
                            <?php }} ?>
                            <p><i class="bi bi-calendar-check-fill"></i> Thời gian đặt hàng: <?=$ship->create_datetime?></p>
                        </div>
                            
                    </div>
                    <div class="bg-dark bg-gradient col-lg-6">
                        <table class="table table-borderless  py-4">
                                <thead>
                                    <tr>
                                    <th scope="col" class="text-white">Sản phẩm</th>
                                    <th scope="col"></th>
                                    <th scope="col" class="text-white">Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $total =0;
                                        foreach($MyOrder as $or){
                                            if($or->ship_id == $ship->id_shipping){
                                                $tt = $or->GiaSP * $or->SoLuongSP;
                                                $total += $tt;
                                    ?>
                                    <tr>
                                    <td class="text-white">
                                        <img src="<?=base_url('images/'.$or->HinhAnhSP)?>" alt="" width="100" height="100" style="width:50px; height:50px;">
                                        <?=$or->ten_sp?>
                                    </td>
                                    <td class="text-white my-4 py-4"><?=number_format($or->GiaSP)?>VNĐ x <?=$or->SoLuongSP?></td>
                                    <td class="text-white my-4 py-4"><?=number_format($tt)?>VNĐ</td>
                                    </tr>
                                    <?php }} ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan=2 class="text-white">Tổng tiền:</td>
                                        <td class="text-white">
                                            <?=number_format($total)?>VNĐ
                                        </td>
                                    </tr>
                                </tfoot>
                        </table> 
                    </div>
                    
                </div>
                
            <?php }} ?>
            </div>
            
        </div>
    </div>
            
    
</div>
    
<?php } ?>