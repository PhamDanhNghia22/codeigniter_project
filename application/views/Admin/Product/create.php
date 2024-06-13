<div class="container-fluid">

<div class="form-edit card w-100">
<div class="card-body">
<h5 class="card-title fw-semibold mb-4">Thêm sản phẩm</h5>
        <form action="<?=base_url('Admin/product/insert')?>" method="POST" enctype="multipart/form-data">
            <div class="my-3">
                <label  class="form-label">Tên sản phẩm</label>
                <input type="text" class="form-control" name="tensp" value="">
            </div>
            <div class="my-3">
                <label  class="form-label">Hình ảnh sản phẩm</label>
                <input type="file" class="form-control" name="image" >
            </div>
            <div class="my-3">
                <label  class="form-label">Giá sản phẩm</label>
                <input type="text" class="form-control" name="giasp" value="">
            </div>
            <div class="my-3">
                <label  class="form-label">Mô tả sản phẩm</label>
                <textarea name="motasp" id="motasp" class="form-control" cols="30" rows="10"></textarea>
            </div>
            <div class="my-3 ">
                <label  class="form-label">Trạng thái</label>
                <select name="trangthai_sp" id="trangthai_sp" class="form-select">
                    <option value="0">Hiện</option>
                    <option value="1">Ẩn</option>
                </select>
            </div>
            <div class="my-3 ">
                <label  class="form-label">Danh mục</label>
                <select name="danhmuc_sp" id="danhmuc_sp" class="form-select">
                    <?php 
                        foreach($categories as $cate){
                    ?>
                    <option value="<?=$cate->IDDM?>"><?=$cate->TenDM?></option>
                    <?php } ?>
                </select>
            </div>
            <button type="submit" class="btn btn-outline-success my-3">Thêm</button>
        </form>
</div>
</div>
</div>