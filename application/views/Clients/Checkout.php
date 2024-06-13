<?php
if($this->session->has_userdata('LoginUser')){


?>
<div class="properties section">
    <div class="container">
        <div class="content-checkout">
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
            <div class="d-flex flex-row-reverse justify-content-center">
                <div class="col-lg-5 checkout-right bg-black ">
                    <h3 class="m-3 text-white">Đơn hàng của bạn</h3>
                    <table class="table border-0 text-center text-white table-borderless " style="color:#ee626b;">
                        <thead class="text-white">
                            <tr>
                            <th class="product-thumbnail text-white" >Sản phẩm</th>
                            <th class="product-thumbnail text-white" ></th>
                            <th class="product-name text-white">Thành tiền</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php 
                            $total =0;
                                if($this->cart->contents()){
                                    foreach($this->cart->contents() as $item){
                                        $tt = $item['price'] * $item['qty'];
                                        $total +=$tt;
                            ?>
                            <tr>
                                <td class="text-white"><?=$item['name']?> </td>
                                <td class="text-white"><?=number_format($item['price'])?> <span> x <?=$item['qty']?> </span></td>
                                <td class="text-white" ><?=number_format($tt)?> VNĐ</td>
                            </tr>
                            <?php }} ?>
                        </tbody>
                        
                       
                    </table>
                    <div class="col-md-12 pl-5 border-top  ">
                        <div class="row justify-content-end my-3">
                            <div class="col-md-7">
                            
                                <div class="row mb-3">
                                    <div class="col-md-5">
                                    <span class="text-white">Subtotal:</span>
                                    </div>
                                    <div class="col-md-7 text-right">
                                    <strong class="text-white"><?=number_format($total)?> VNĐ</strong>
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-md-5">
                                    <span class="text-white">Total :</span>
                                    </div>
                                    <div class="col-md-7 text-left">
                                    <strong class="text-white"><?=number_format($total)?> VND</strong>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
                </div>
                <div class="col-lg-5 checkout-left">

                    <h3 class="my-3">Thông tin đặt hàng</h3>
                    <form action="<?=base_url('checkout_payment')?>" method="POST" >
                        
                        <div class="mb-3">
                            <label for="" class="form-label">Họ và tên</label>
                            <input type="text" name="username" id="username" class="form-control" value="<?=$this->session->userdata('LoginUser')['username']?>"/>
                            <span class="text-danger"><?=form_error('username');?></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="<?=$this->session->userdata('LoginUser')['email']?>"/>
                            <span class="text-danger"><?=form_error('email');?></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Địa chỉ</label>
                            <input type="text" name="address" id="address" class="form-control"/>
                            <span class="text-warning"><?=form_error('address');?></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Số điện thoại</label>
                            <input type="tel" name="telephone" id="telephone" class="form-control"/>
                            <span class="text-danger"><?=form_error('telephone');?></span>
                        </div>
                        <div class="mb-3 mx-2">
                            <label for="" class="form-label m-0">Hình thức thanh toán</label>
                            </br>
                            <input type="radio" name="method" id="method" value="tienmat" class="form-check-input "/>Thanh toán khi nhận hàng</br>
                            <input type="radio" name="method" id="method" value="momo" class="form-check-input"/>Thanh toán momo</br>
                            <input type="radio" name="method" id="method" value="vnpay" class="form-check-input"/>Thanh toán vnpay</br>
                        </div>

                        <div class="mb-3">
                        <input type="hidden" name="total" id="total" value="<?=$total?>">
                        </div>
                        
                        <button type="submit" class="main-btn my-3 p-3">Thanh toán</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }else{ ?>
  <div class="properties section">
    <div class="container">
      <div class="untree_co-section before-footer-section">
        <div class="container">
        <div class="alert alert-danger">Vui lòng đăng nhập để được đặt hàng. <a href="<?=base_url('login')?>">Đăng nhập</a></div>
        </div>
      </div>
    </div>
  </div> 
  
<?php } ?>
   