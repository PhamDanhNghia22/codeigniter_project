<div class="container-fluid">
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
                <h5 class="card-title fw-semibold mb-4"> 
                    Chi tiết đơn hàng :
                    <?php 
                        foreach($order as $or){
                    ?>
                    <span class="fw-semibold mb-0"><?=$or->order_code?></span>
                    <?php } ?>
                    
                    
                </h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Hình ảnh sản phẩm</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Tên sản phẩm</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Giá sản phẩm</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Số lượng đặt sản phẩm</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Thành tiền</h6>
                        </th>
                        
                      </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $total =0;
                            foreach($OrderDetail as $detail){
                                $tt= $detail->SoLuongSP * $detail->GiaSP;
                                $total += $tt;
                        ?>
                            <td class="border-bottom-0">
                                <img src="<?=base_url('./images/'.$detail->HinhAnhSP)?>" alt="" srcset="" width="100" height="100" style="width:100px;">                   
                            </td>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-1"><?=$detail->ten_sp?></h6>                         
                            </td>
                            <td class="border-bottom-0">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge bg-primary rounded-3 fw-semibold"><?=number_format($detail->GiaSP)?> VNĐ</span>
                            </div>
                            <td class="border-bottom-0">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge bg-primary rounded-3 fw-semibold"><?=$detail->SoLuongSP?></span>
                                </div>
                            
                            </td>
                            <td class="border-bottom-0">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge bg-primary rounded-3 fw-semibold"><?=number_format($tt)?> VNĐ</span>
                                </div>
                            </td>
                        
                        </tr> 
                        <?php } ?>
                        
                        
                                             
                    </tbody>
                    <tfooter>
                        <tr>
                            <td colspan="4"><h6 class="fw-semibold mb-0">Tổng tiền:</h6> </td>
                            <td ><span class="badge bg-primary rounded-3 fw-semibold"><?=number_format($total)?> VNĐ</span>  </td>
                        </tr>
                    </tfooter>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
    
</div>