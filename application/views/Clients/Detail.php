<?php 
    foreach($ProdDetail as $detail){
?>
<div class="single-property section">
    <div class="container">
      <form action="<?=base_url('add_to_cart')?>" method="POST">
      <div class="row">
        
        <div class="col-lg-7">
          <div class="main-image">
            <img src="<?=base_url('images/'.$detail->HinhAnhSP)?>" alt="#" >
          </div>
          
          
        </div>
        <div class="col-lg-5">
          <div class="info-table text-center">
            <ul>
              <li>
                
                <h5><?= $detail->TenSP ?></h5><br>
                <h6><?= $detail->TenDM ?></h6>
              </li>
              <li>
                
                <h5>GIÁ: <?= number_format($detail->GiaSP)?> VND</h5>
              </li>
              <li>
                
                <h5>SIZE</h5>
                <br>
                <input type="radio" name="size"class="size mx-2" value="M"/>M
                <input type="radio" name="size" class="size mx-2" value="L"/>L
                <input type="radio" name="size" class="size mx-2" value="XL"/>XL
              </li>
              <li>
              <div class="main-button my-3">
                <input type="hidden" name="idsp" value="<?=$detail->IDSP?>">
                <input type="hidden" name="qty" value="1">
                <button type="submit" class="btn btn-danger">Thêm Vào Giỏ Hàng</button>
              </div>
                
              </li>
              

            </ul>
            
          </div>
        </div>
        <div class="col-lg-9">
          <div class="main-content">
          
            
            <h4><?= $detail->TenSP ?></h4>
            <p class="border border-1 p-3"><?= $detail->MotaSP ?></p>
        </div> 
      
        
      </div>
      </from> 
    </div>
  </div>
<?php } ?>