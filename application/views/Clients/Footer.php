<footer>
    <div class="container">
      <div class="row" style="color: whitesmoke;">
        <div class="col-lg-3" style=" margin: 30px 0;">
          <div class="section-heading">
            <h6>vVề chúng tôi</h6>
            <br>
            Website chính thức và duy nhất của Rabit.<br>
            <br>Hiện tại chúng mình chỉ nhận đơn hàng trên website chứ không nhận bất kỳ nơi nào khác nhé!
          </div>
          
        </div>
        <div class="col-lg-3" style=" margin: 30px 0;">
          <div class="section-heading">
            <h6>Danh mục sản phẩm</h6>
            <?php 
              foreach($categories as $cate){
            ?>
            <br>
            
            <a href="<?=base_url('san-pham-the-loai/'.$cate->IDDM)?>" class="text-light"><?=$cate->TenDM?></a>
            <br>
            <br>
            
            
            <?php } ?>
            
          </div>
        </div>
        <div class="col-lg-3" style=" margin: 30px 0;">
          <div class="section-heading">
            <h6>Thông tin</h6>
            <br>
            
                Giới thiệu
            <br>
            <br>
                Điều khoản và điều kiện
            <br>
            <br>
                Chính sách bảo mật
            <br>
            <br>
                
            <br>
            <br>
                Hình thức thanh toán
            <br>
            <br>
                Liên hệ
            <br>
            <br>
                Hotline: 0938386458
            <br>
            <br>
                info@rabit.com
          </div>
        </div>
        <div class="col-lg-3" style=" margin: 30px 0;">
          <div class="section-heading">
            <h6>Hỗ trợ</h6>
            <br>
            
            Mọi thắc mắc và góp ý cần hỗ trợ xin vui lòng liên hệ Fanpage và Instagram
            
            <br>
            <br>
                    
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        
            
          </div>
        </div>
        
      </div>
    </div>
  </footer>
  
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="<?=base_url('template/FrontEnd/vendor/jquery/jquery.min.js')?>"></script>
  <script src="<?=base_url('template/FrontEnd/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
  <script src="<?=base_url('template/FrontEnd/assets/js/isotope.min.js')?>"></script>
  <script src="<?=base_url('template/FrontEnd/assets/js/owl-carousel.js')?>"></script>
  <script src="<?=base_url('template/FrontEnd/assets/js/counter.js')?>"></script>
  <script src="<?=base_url('template/FrontEnd/assets/js/custom.js')?>"></script>
  <script src="<?=base_url('template/FrontEnd/assets/js/giohang.js')?>"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>