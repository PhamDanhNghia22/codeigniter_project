<?php 
  if($this->session->has_userdata('LoginUser')){


?>
<div class="properties section">
    <div class="container">
      <div class="untree_co-section before-footer-section">
        <div class="container">          
          <div class="row mb-5">
            <div class="col-md-12" method="post">
              <div class="site-blocks-table">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="product-thumbnail">Image</th>
                      <th class="product-name">Product</th>
                      <th class="product-price">Price</th>
                      <th class="product-quantity">Quantity</th>
                      <th class="product-total">Total</th>
                      <th class="product-remove">Remove</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        $total=0;
                        foreach($this->cart->contents() as $item){
                            $tt = $item['price'] * $item['qty'];
                            $total += $tt;
                    ?>
                    <tr>
                      <td class="product-thumbnail">
                        <img src="<?=base_url('images/'.$item['options']['image'])?>" alt="Image" class="img-fluid" width="100" height="100" style="width:100px; height:100px">
                      </td>
                      <td class="product-name">
                        <h2 class="h5 text-black"><?=$item['name']?></h2>
                      </td>
                      <td><?=number_format($item['price'])?>VNĐ</td>
                      <td>
                        <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                          <input type="hidden" name="rowid" id="rowid" value="<?=$item['rowid']?>">
                          <input type="number" class="form-control text-center quantity-amount itemQty" min="1" max="3" name="qty" value="<?=$item['qty']?>" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                          
                        </div>
    
                      </td>
                      <td><?=number_format($tt)?>VNĐ</td>
                      <td><a href="<?=base_url('del-item/'.$item['rowid'])?>" class="btn btn-black btn-sm">Xóa</a></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
    
          <div class="row">
            <div class="col-md-6">
              <div class="row mb-5">
                <div class="col-md-4 mb-3 mb-md-0">
                  <div class="main-button">
                    <a href="<?=base_url('del_all_cart')?>">Delete Cart</a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="main-button">
                    <a href="property-details.html">Continue Shopping</a>
                  </div>
                  
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <label class="text-black h4" for="coupon">Coupon</label>
                  <p>Enter your coupon code if you have one.</p>
                </div>
                <div class="col-md-8 mb-3 mb-md-0">
                  <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
                </div>
                <div class="col-md-4">
                  <div class="main-button">
                    <a href="property-details.html">Apply Coupon</a>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-md-6 pl-5">
              <div class="row justify-content-end">
                <div class="col-md-7">
                  <div class="row">
                    <div class="col-md-12 text-right border-bottom mb-5">
                      <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <span class="text-black">Subtotal</span>
                    </div>
                    <div class="col-md-6 text-right">
                      <strong class="text-black"><?=number_format($total)?>VNĐ</strong>
                    </div>
                  </div>
                  <div class="row mb-5">
                    <div class="col-md-6">
                      <span class="text-black">Total</span>
                    </div>
                    <div class="col-md-6 text-right">
                      <strong class="text-black"><?=number_format($total)?>VNĐ</strong>
                    </div>
                  </div>
    
                  <div class="row">
                    <div class="col-md-12">
                      <a href="<?=base_url('checkout')?>" class="btn btn-black btn-lg py-3 btn-block">Proceed To Checkout</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
<script src="https://code.jquery.com/jquery-3.7.1.min.js" ></script>
<script>
$(document).ready(function(){
  $(".itemQty").on("change",function(){
    var el = $(this).closest('tr');
    var rowid = $(el).find("#rowid").val();
    var qty = $(this).val();
    // alert(qty);
    $.ajax({
      'url':"<?=base_url()?>update-Cart",
      'type':'POST',
      'data':{'rowid':rowid,'qty':qty },
      success:function(response)
      {
        
        Swal.fire({
          position: "top-end",
          icon: "success",
          title: "Cập nhật giỏ hàng thành công",
          showConfirmButton: false,
          timer: 1500
        }).then(()=>{
          window.location.href="<?=base_url()?>cart"
        });
      }
    })
  })

})
</script>