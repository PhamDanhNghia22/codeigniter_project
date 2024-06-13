<div class="container-fluid">
<a href="<?=base_url('Admin/product/create')?>" class="btn btn-outline-primary my-3">Thêm</a>
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
                <h5 class="card-title fw-semibold mb-4">Danh sách thể loại</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Id</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Hình ảnh sản phẩm</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Tên sản phẩm</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Số lượt xem</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Trạng thái</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Thể loại</h6>
                        </th>
                        <th class="border-bottom-0" >
                          <h6 class="fw-semibold mb-0">Hành động</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $trangthai = array(0=>'Hiện' ,1=>'Ẩn' );
                            foreach($products as $prod){
                                foreach($trangthai as $key=>$value){
                                    if($prod->statust_sp == $key){
                        ?>
                        <tr>
                            <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?=$prod->IDSP?></h6></td>
                            <td class="border-bottom-0">
                                <img src="<?=base_url('./images/'.$prod->HinhAnhSP)?>" alt="" srcset="" width="100" height="100" style="width:100px;">                   
                            </td>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-1"><?=$prod->TenSP?></h6>                         
                            </td>
                            <td class="border-bottom-0">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge bg-primary rounded-3 fw-semibold"><?=$prod->ViewSP?></span>
                            </div>
                            <td class="border-bottom-0">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge bg-primary rounded-3 fw-semibold"><?=$value?></span>
                                </div>
                            
                            </td>
                            <td class="border-bottom-0">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge bg-primary rounded-3 fw-semibold"><?=$prod->TenDM?></span>
                                </div>
                            </td>
                            <td class="border-bottom-0" colspan="2">
                            <a href="<?=base_url('Admin/product/edit/'.$prod->IDSP)?>" class="btn btn-secondary">Sửa</a>
                            <a href="<?=base_url('Admin/product/delete/'.$prod->IDSP)?>" class="btn btn-danger">Xóa</a>
                            </td>
                        
                        </tr> 
                        <?php } } }?>
                        
                                             
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
    
</div>