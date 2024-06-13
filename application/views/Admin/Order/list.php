<div class="container-fluid">
<!-- <a href="<?=base_url('Admin/order/create')?>" class="btn btn-outline-primary my-3"></a> -->
    <div class="row">
          <?php 
          if($this->session->flashdata('success')){
          ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?=$this->session->flashdata('success')?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <?php }else if($this->session->flashdata('error')){ ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?=$this->session->flashdata('error')?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <?php } ?>
          
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Đơn hàng</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Họ Tên người đặt</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Email</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Số điện thoại</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Địa chỉ</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Phương thức thanh toán</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Trạng thái</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Ngày đặt</h6>
                        </th>
                        <th class="border-bottom-0" >
                          <h6 class="fw-semibold mb-0">Hành động</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $trangthai = array(0=>'Đang chờ xác nhận' ,1=>'Đang trên đường giao',2=>"Đã lấy hàng" );
                            foreach($shippings as $ship){

                            
                        ?>
                        <tr>
                            <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?=$ship->username?></h6></td>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-1"><?=$ship->email?></h6>                         
                            </td>
                            <td class="border-bottom-0">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge bg-primary rounded-3 fw-semibold"><?=$ship->telphone?></span>
                            </div>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-1"><?=$ship->address?></h6>                         
                            </td>
                            <td class="border-bottom-0">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge bg-primary rounded-3 fw-semibold"><?=$ship->method?></span>
                                </div>
                            
                            </td>
                            <td class="border-bottom-0">
                                <div class="d-flex align-items-center gap-2">
                                    <?php 
                                        foreach($trangthai as $key => $val){
                                            if($key == $ship->statust_ship){

                                    ?>
                                    <span class="badge bg-primary rounded-3 fw-semibold"><?=$val?></span>
                                    <?php }} ?>
                                </div>
                            
                            </td>
                                                

                            <td class="border-bottom-0">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge bg-primary rounded-3 fw-semibold"><?=$ship->create_datetime?></span>
                                </div>
                            </td>
                            <td class="border-bottom-0" colspan="2">
                            <a href="" class="btn btn-secondary">Sửa</a>
                            <a href="<?=base_url("Admin/order/detail/".$ship->id_shipping)?>" class="btn btn-danger">Chi tiết</a>
                            </td>
                        
                        </tr> 
                        <?php } ?>
                        
                        
                                             
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
    
</div>