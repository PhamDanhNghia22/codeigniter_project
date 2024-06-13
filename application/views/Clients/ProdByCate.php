
<div class="page-heading header-text">
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-12 py-3">
            <?php 
            foreach($Category as $cate){
            ?>
            <span class="breadcrumb"><a href="/">Home</a> / <?=$cate->TenDM?></span>
            <h3><?=$cate->TenDM?></h3>
            <?php }?>
          
        </div>
      </div>
    </div>
  </div>
<div class="section properties">
    <div class="container">
        <ul class="properties-filter">
            <li>
            <a class="is_active" href="<?=base_url('tat-ca-san-pham')?>" data-filter="*">Tất cả</a>
            </li>
            <?php
                foreach($categories as $cate){
            ?>
            <li>
            <a href="<?=base_url('san-pham-the-loai/'.$cate->IDDM)?>" ><?= $cate->TenDM?></a>
            </li>
            <?php } ?>
        </ul>
      <div class="row properties-box">
        <?php 
        if($ProdByCate){
        foreach($ProdByCate as $pc){ 
        ?>

        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv">
          <div class="item">
            <a href="property-details.html"><img src="<?=base_url('images/'.$pc->HinhAnhSP)?>" alt=""></a>
            <span class="category"><?=$pc->TenDM?></span>
            <h6><?=number_format($pc->GiaSP)?>VNĐ</h6>
            <h4><a href="property-details.html"><?=$pc->TenSP?></a></h4>
            <button class="main-button my-3">Thêm giỏ hàng</button>
            <!-- <div class="main-button my-3">
              
            </div> -->
          </div>
        </div>
        
        
       
        <?php }}else{ ?>
            <div class="alert alert-danger">Không có sản phẩm.</div>
        <?php } ?>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="pagination">
            <li><a href="#">1</a></li>
            <li><a class="is_active" href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">>></a></li>
          </ul>
        </div>
        
        
      </div>
      
    </div>
  </div>