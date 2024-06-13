<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Rabit Coffee</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="<?=base_url('template/FrontEnd/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?=base_url('template/FrontEnd/assets/css/fontawesome.css')?>">
    <link rel="stylesheet" href="<?=base_url('template/FrontEnd/assets/css/templatemo-villa-agency.css')?>">
    <link rel="stylesheet" href="<?=base_url('template/FrontEnd/assets/css/owl.css')?>">
    <link rel="stylesheet" href="<?=base_url('template/FrontEnd/assets/css/animate.css')?>">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky border-bottom" >
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav ">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <h2 class=" my-4 " style="width:200px;">Rabit Coffee</h2>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="/" class="active">Trang chủ</a></li>
                      <li><a href="<?=base_url('tat-ca-san-pham')?>">Sản phẩm</a></li>
                      
                      <li><a href="contact.html">Liên hệ</a></li>
                      <li><a href="<?=base_url('cart')?>"><i class="fa fa-cart-shopping"></i></a></li>
                       <li>
                        <?php 
                        if($this->session->has_userdata('LoginUser')){
                        ?>
                        <a href="<?=base_url('login')?>" class="loginUser"><i class="fa fa-user"></i><?=$this->session->userdata('LoginUser')['username']?></a>
                        <?php }else{ ?>
                            
                        <a href="<?=base_url('login')?>"><i class="fa fa-user"></i>Đăng nhập</a>
                        <?php } ?>
                        <?php 
                        if($this->session->has_userdata('LoginUser')){
                        ?>
                            <ul class="menu_dropdown">
                                <li><a href="<?=base_url('order')?>">Đơn hàng</a></li>
                                <li><a href="<?=base_url('logout')?>">Đăng xuất</a></li>

                            </ul>
                            <?php }else{ ?>
                            <ul class="menu_dropdown">
                                <li><a href="<?=base_url('dangky')?>">Đăng ký </a></li>
                            </ul>
                            <?php } ?>
                        </li>
                      
                    </ul> 
                
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
