<div class="container-fluid">

<div class="form-edit card w-100">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Cập nhật thể loại</h5>
        <?php
            $trangthai = array(0=>'Hiện' ,1=>'Ẩn' );
            foreach($category as $cate){
                
        ?>
        <form action="<?=base_url("Admin/category/update/".$cate->IDDM)?>" method="POST">
            <div class="my-3">
                <label  class="form-label">Tên danh mục</label>
                <input type="text" class="form-control" name="tendm" value="<?=$cate->TenDM?>">
            </div>
            <div class="my-3">
                <label  class="form-label">Mô tả danh mục</label>
                <textarea name="motadm" id="motadm" class="form-control" cols="30" rows="10"><?=$cate->MotaDM?></textarea>
            </div>
            <div class="my-3 ">
                <label  class="form-label">Trạng thái</label>
                <select name="trangthai_dm" id="trangthai_dm" class="form-select">
                    <?php 
                        foreach($trangthai as $key=>$value){
                        if($key == $cate->statust_dm){
                    ?>
                    <option selected value="<?=$key?>"><?=$value?></option>
                    <?php }else{ ?>
                        <option value="<?=$key?>"><?=$value?></option>
                    <?php }} ?>
                </select>
            </div>
            <button type="submit" class="btn btn-outline-success my-3">Cập nhật</button>
        </form>
        <?php } ?>
    </div>



</div>
</div>