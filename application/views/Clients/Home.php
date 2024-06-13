<div class="properties section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            
            <h3>Sản phẩm mới nhất </h3>
          </div>
        </div>
      </div>
      <div class="row">
        <?php
        foreach($Newproduct as $prod){

        ?>
        
        <div class="col-lg-4 col-md-6">
          <form action="<?=base_url('add_to_cart')?>" method="POST">
          <div class="item">
          

            <a href="<?=base_url('sanpham/'.$prod->IDSP)?>"><img src="<?=base_url('images/'.$prod->HinhAnhSP)?>" alt="" width="100" height="100" style="width:300px; height:250px"></a>
            <span class="category"><?=$prod->TenDM?></span>
            
            <h6><?=number_format($prod->GiaSP)?>VNĐ</h6>
            <h4><a href="property-details.html"><?=$prod->TenSP?></a></h4>
            <input type="hidden" name="idsp" value="<?=$prod->IDSP?>">
            <input type="hidden" name="qty" value="1">
            <button type="submit" class="main-button my-3">
              Thêm vào giỏ hàng
            </button>
           
          </div>
          </form>
        </div>
       
        <?php } ?>
        
        
      </div>
    </div>
  </div>

  

  

</div>



