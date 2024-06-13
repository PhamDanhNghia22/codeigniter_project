<div class="container-fluid">

<div class="form-edit card w-100">
<div class="card-body">
<h5 class="card-title fw-semibold mb-4">Cập nhật sản phẩm</h5>
        <?php 
            $trangthai = array(0=>'Hiện' ,1=>'Ẩn' );
            foreach($product as $prod){
        ?>
        <form action="<?=base_url('Admin/product/update/'.$prod->IDSP)?>" method="POST" enctype="multipart/form-data">
            <div class="my-3">
                <label  class="form-label">Tên sản phẩm</label>
                <input type="text" class="form-control" name="tensp" value="<?=$prod->TenSP?>">
            </div>
            <div class="my-3">
                <label  class="form-label">Hình ảnh sản phẩm</label>
                <input type="file" class="form-control mb-2" name="image" value="<?=$prod->HinhAnhSP?>">
                <img src="<?=base_url('images/'.$prod->HinhAnhSP)?>" alt="" srcset="" width="100" height="100" style="width:100px"> 
            </div>
            <div class="my-3">
                <label  class="form-label">Giá sản phẩm</label>
                <input type="text" class="form-control" name="giasp" value="<?=$prod->GiaSP?>">
            </div>
            <div class="my-3">
                <label  class="form-label">Mô tả sản phẩm</label>
                <textarea name="motasp" id="motasp" class="form-control" cols="30" rows="10"><?=$prod->MotaSP?></textarea>
            </div>
            <div class="my-3 ">
                <label  class="form-label">Trạng thái</label>
                <select name="trangthai_sp" id="trangthai_sp" class="form-select">
                    <?php 
                        foreach($trangthai as $key=>$value){
                            if($key == $prod->statust_sp){
                    ?>
                    <option selected value="<?=$key?>"><?=$value?></option>
                    <?php }else{ ?>
                        <option value="<?=$key?>"><?=$value?></option>
                    <?php }} ?>
                </select>
            </div>
            <div class="my-3 ">
                <label  class="form-label">Danh mục</label>
                <select name="danhmuc_sp" id="danhmuc_sp" class="form-select">
                    <?php 
                        foreach($categories as $cate){
                            if($cate->IDDM == $prod->MaDM){
                    ?>
                    <option selected value="<?=$cate->IDDM?>"><?=$cate->TenDM?></option>
                    <?php }else{ ?> 
                        <option  value="<?=$cate->IDDM?>"><?=$cate->TenDM?></option>
                    <?php }} ?>
                </select>
            </div>
            <a href="" class="btn btn-outline-secondary my-3">Danh sách</a>
            <button type="submit" class="btn btn-outline-success my-3">Thêm</button>
        </form>
        <?php } ?>
</div>
</div>
</div>